// Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyC8IVnxlbFfD00_AR59-KjVSQpym4cvyrY",
    authDomain: "dazzling-ego-322600.firebaseapp.com",
    projectId: "dazzling-ego-322600",
    storageBucket: "dazzling-ego-322600.appspot.com",
    messagingSenderId: "762604782506",
    appId: "1:762604782506:web:c971d8084edde4be6021d3",
    measurementId: "G-X40SPQZ9BY"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const messaging =firebase.messaging();


  window.onload=function(){
    pedirPermiso();
    document.getElementById("autorizar").addEventListener('click',function(){
        pedirPermiso();
    });
    let enableForegroundNotification=true;
    messaging.onMessage(function(payload){
        console.log("mensaje recibido");
        if(enableForegroundNotification){
            const {title, ...options}=JSON.parse(payload.data.notification);
            navigator.serviceWorker.getRegistrations().then( registration =>{
                registration[0].showNotification(title, options);
            });
        }
    });

    function pedirPermiso(){
        messaging.requestPermission()
        .then(function(){
            console.log("Se han haceptado las notificaciones");
            hideAlert();
            return messaging.getToken();
        }).then(function(token){
            console.log(token);
            guardarToken(token);
        }).catch(function(err){
            console.log('No se ha recibido el permiso');
            showAlert();
        });
    }
    function guardarToken(token){
        var formData=new FormData();
        formData.append('token',token);
        axios.post('./php/guardarToken.php',formData).then( respuesta=>{
            console.log(respuesta);
        }).catch( e=>{
            console.log(e);
        });
    }
    function showAlert(){
        document.querySelector("#alertaError").classList.remove('d-none');
    }
    function hideAlert(){
        document.querySelector("#alertaError").classList.add('d-none');
    }
  }//llave on load