<!-- <template>
    <div>
        <h2>Certificado de no pension</h2>
        <form @submit.prevent="realizarConsulta">
          <div class="form-group">
            <label for="tipo_documento">Tipo Documento</label>
            <input v-model="tipo_documento" type="text" class="form-control" id="tipo_documento" aria-describedby="emailHelp" placeholder="Tipo Documento">
          </div>

          <div class="form-group">
            <label for="numero">Numero Documento</label>
            <input v-model="numero" type="number" class="form-control" id="numero" placeholder="Numero Documento">
          </div>
          <button type="submit" class="btn btn-primary" @click="cambiarTemplate">Consultar</button>
          </form>
    </div>
</template>

 <script>
import axios from 'axios';
export default({
  data () {
    return {
      tipo_documento:'',
      numero:'',
    }
  },
  methods: {
    realizarConsulta() {
      // URL de la ruta en tu servidor Laravel
      const url = 'http://127.0.0.1:8000/certificadoNoPension';
      
      // Datos a enviar en la solicitud POST
      const data = {
        tipo_documento: this.tipo_documento,
        numero: this.numero,
      };
      console.log('lll', data);
      // Realiza la solicitud POST utilizando Axios
      axios.post(url, data)
        .then(response => {
          this.$router.push({ name: "descargar" });
          console.log(response.data);
        })
        .catch(error => {
          // Maneja el error aquí
          console.error(error);
        });
      },
      cambiarTemplate(){}

    }
}) 
</script> -->


<template>
  <button @click="ir">ir a Formulario</button>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App',
  methods: {
      ir() {
        // Lógica para enviar el formulario
        // Después de enviar el formulario, redirige a la página del certificado
        this.$router.push('/formulario');
      }
    }
}
</script>



