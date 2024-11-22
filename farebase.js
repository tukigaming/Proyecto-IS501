import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-auth.js";
import { doc, setDoc,getFirestore } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";


const firebaseConfig = {
  apiKey: "AIzaSyArAosbnSgSQtAENBVgvvY0fnCrU5vk54s",
  authDomain: "fir-aut-5b4e8.firebaseapp.com",
  projectId: "fir-aut-5b4e8",
  storageBucket: "fir-aut-5b4e8.appspot.com",
  messagingSenderId: "980603892053",
  appId: "1:980603892053:web:822f7660fc633a2ce03fdc",
  measurementId: "G-7PEQHRQF21"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth();
const firestore = getFirestore(app);

export class ManageAccount {
  async register(email, password) {
    try {
      await createUserWithEmailAndPassword(auth, email, password);
      
      alert("Registro exitoso. Serás redirigido a la página de inicio de sesión.");
      window.location.href = "paginainiciodesesion.html";
    } catch (error) {
      console.error(error.message);
      
      alert("Error al registrar: " + error.message);
    }
  }

  async authenticate(email, password) {
      const credenciales = await signInWithEmailAndPassword(auth, email, password);
      console.log("Inicio de sesión exitoso:", credenciales);
      
       

      const uid = credenciales.user.uid;

      
      
      const nuevoDocRef = doc(firestore, 'usuarios', uid );
      const datos = {
        email: email,
        ID:uid,
      };
      
    

     

      await setDoc(nuevoDocRef, datos);
      console.log("Datos guardados correctamente:", nuevoDocRef.id);
  
      localStorage.setItem('userID', uid);
      window.location.href = "./P_Principal.html"

      function actualizarContador(uid) {
        const db = firebase.firestore();
        const increment = firebase.firestore.FieldValue.increment(1);
        const decrement = firebase.firestore.FieldValue.increment(-1);
    
        const storyRef = db.collection('contador').doc(uid).collection('contador2');
        
    
        // Incrementa el contador
        
        // Verificar el estado actual del contador en Firestore
        storyRef.get()
            .then((doc) => {
                if (doc.exists) {
                    // El documento existe, obtener el valor actual del contador
                    const count = doc.data().count;
    
                    // Actualizar el contador en Firestore alternando entre incremento y decremento
                    if (count % 2 === 0) {
                        // Si el contador es par, incrementar
                        storyRef.update({ count: increment })
                            .then(() => {
                                console.log('Contador incrementado en Firestore');
                            })
                            .catch((error) => {
                                console.error('Error al incrementar el contador:', error);
                            });
                    } else {
                        // Si el contador es impar, decrementar
                        storyRef.update({ count: decrement })
                            .then(() => {
                                console.log('Contador decrementado en Firestore');
                            })
                            .catch((error) => {
                                console.error('Error al decrementar el contador:', error);
                            });
                    }
                } else {
                    // El documento no existe, inicializar el contador en 1
                    storyRef.set({ count: 1 })
                        .then(() => {
                            console.log('Contador inicializado en Firestore');
                        })
                        .catch((error) => {
                            console.error('Error al inicializar el contador:', error);
                        });
                }
            })
            .catch((error) => {
                console.error('Error al obtener el contador:', error);
            });
    }

    actualizarContador2(userID, documento);
    
  }
  


  
  signOut() {
    signOut(auth)
      .then((_) => {
        window.location.href = "paginainiciodesesion.html";
      })
      .catch((error) => {
        console.error(error.message);
      });
  }
}

