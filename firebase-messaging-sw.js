importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-messaging.js');
  var firebaseConfig = {
    apiKey: "AIzaSyDxYEoGE4yVp5qCD2b_s4ypXbFmt9Bz6Ns",
    authDomain: "xeat-4391e.firebaseapp.com",
    databaseURL: "https://xeat-4391e-default-rtdb.firebaseio.com",
    projectId: "xeat-4391e",
    storageBucket: "xeat-4391e.appspot.com",
    messagingSenderId: "897579559280",
    appId: "1:897579559280:web:6112b6ee4f0fb52c02c7b5",
   // measurementId: "G-GPQTY3S64L"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
if (firebase.messaging.isSupported()) {
  firebase.messaging();
}
else{
  console.log('broser not Supported firebase');
}





messaging.setBackgroundMessageHandler(function(payload) {
  console.log("Message received.",payload);
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});


