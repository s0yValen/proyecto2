// import { createApp } from "vue";
// import App from "./App.vue";
// import { createRouter, createWebHistory } from "vue-router"; // Importa las funciones de Vue Router

// // Importa tus componentes
// import Descargar from "./components/Descargar.vue";
// import List from "./components/List.vue";
// const app = createApp(App);

// const router = createRouter({
//   history: createWebHistory(),
//   routes: [
//     {path: "/list", component:List},
//     { path: "/descargar", name: "descargar", component:Descargar },
//   ],
// });

// app.use(router); // Usa el enrutador

// app.mount("#app");


import { createApp } from 'vue';
import App from './App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import Formulario from './components/Formulario.vue';
import Certificado from './components/Certificado.vue';

const routes = [
  { path: '/formulario', component: Formulario },
  { path: '/certificado', component: Certificado }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

const app = createApp(App);
app.use(router);
app.mount('#app');