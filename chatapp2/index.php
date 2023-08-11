<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyBAVxszd5xsbOV3DlVGwSmB7bfnC_XFNBU",
        authDomain: "chatapp-868da.firebaseapp.com",
        projectId: "chatapp-868da",
        storageBucket: "chatapp-868da.appspot.com",
        messagingSenderId: "406790430152",
        appId: "1:406790430152:web:eb622c630ebfdb3c5db4fd",
        measurementId: "G-5TWWXVDCSR"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>