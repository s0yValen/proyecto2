<template>

    <div  v-if="pensionado">
      <h1>No se pudo generar su certificado</h1>
    </div>
    <div  v-else>
      <h1>Certificado Generado</h1>
      <p>Felicidades, tu certificado ha sido generado.</p>
        <button @click="goToRoute">Descargar</button>
    </div>

    

  </template>

<script>
export default {
    data() {
      return {
        pensionado: "",
      };
    },
    methods: {
    goToRoute() {
        window.location.href = '/certificadoNoPension'
    }
  },
    mounted() {
      this.pensionado = this.$route.query.pensionado; 
    }
  };
  </script>
  