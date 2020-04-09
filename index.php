<!DOCTYPE html>
<html>
<head>
<title>Google sign in firebase</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<button onclick="googleSignin()">Google Signin</button>
<br><br>
<a href="insertdata.html">Insert data to database</a>

 <!--Include firebase.js  -->
 <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>

  <!--Configure firebase-->
  <script>
    // Visit https://console.firebase.google.com/project/<your project id>/overview and click on "Add Firebase to your web app"
    var config = {
  apiKey: "AIzaSyDaJF3B1AlE_599LNf_gwxPJ_RiwA2SVzA",
  authDomain: "authen-f0c61.firebaseapp.com",
  databaseURL: "https://authen-f0c61.firebaseio.com",
  projectId: "authen-f0c61",
  storageBucket: "authen-f0c61.appspot.com",
  messagingSenderId: "125105046637",
  appId: "1:125105046637:web:e4ad1196c519d92a6d6b64",
  measurementId: "G-FB4SNDEWVK"
};
    firebase.initializeApp(config);


    function googleSignin(){
   base_provider = new firebase.auth.GoogleAuthProvider()
   firebase.auth().signInWithRedirect(base_provider).then(function(result){
      console.log(result)
      console.log("Success.. Google Account Linked")
   }).catch(function(err){
      console.log(err)
      console.log("Failed to do")
   })
}


  </script>

</body>
</html>