
<!DOCTYPE html>
<html>
<head>
  <title>Web Push Notification in PHP/MySQL using FCM</title>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<link rel="manifest" href="manifest.json">
<script>
  // Initialize Firebase
  /*Update this config*/
   var config = {
    apiKey: "AIzaSyCTkr32k5BwkmEDEm0Ea5eQm9FgT0EvSEE",
    authDomain: "push-notification-b8037.firebaseapp.com",
    databaseURL: "https://push-notification-b8037.firebaseio.com",
    projectId: "push-notification-b8037",
    storageBucket: "push-notification-b8037.appspot.com",
    messagingSenderId: "422100065738",
    appId: "1:422100065738:web:ec529278fa571e41468333",
    measurementId: "G-0DNYN35QZV"
  };
  // Initialize Firebase
 firebase.initializeApp(config);

	// Retrieve Firebase Messaging object.
	const messaging = firebase.messaging();
	messaging.requestPermission()
	.then(function() {
	  console.log('Notification permission granted.');
	  // TODO(developer): Retrieve an Instance ID token for use with FCM.
          getRegToken();
	  if(isTokenSentToServer()) {
	  	console.log('Token already saved.');
	  } else {
	  	getRegToken();
	  }

	})
	.catch(function(err) {
	  console.log('Unable to get permission to notify.', err);
	});

	function getRegToken(argument) {
		messaging.getToken()
		  .then(function(currentToken) {
		    if (currentToken) {
		 //     saveToken(currentToken);
		      console.log(currentToken);
		      setTokenSentToServer(true);
		    } else {
		      console.log('No Instance ID token available. Request permission to generate one.');
		      setTokenSentToServer(false);
		    }
		  })
		  .catch(function(err) {
		    console.log('An error occurred while retrieving token. ', err);
		    setTokenSentToServer(false);
		  });
	}

	function setTokenSentToServer(sent) {
	    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
	}

	function isTokenSentToServer() {
	    return window.localStorage.getItem('sentToServer') == 1;
	}


</script>
</head>
<body>
<center>
  <h1>FCM Web Push Notification in PHP/MySQL from localhost</h1>
  <h2>Part 5: Send and Receive Push Notifications in background</h2>
</center>
</body>

