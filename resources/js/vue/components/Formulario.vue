<template>

  <div>
    <template v-if="listarTemplate===1">
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
            <button type="submit" class="btn btn-primary" >Consultar</button>
            </form>
      </div>
    </template>
  </div>

  <div>
    <template v-if="listarTemplate===2">
      <div  v-if="pensionado==1">
        <h1>No se pudo generar su certificado</h1>
      </div>
      <div  v-else>
        <h1>Certificado Generado</h1>
        <p>Felicidades, tu certificado ha sido generado.</p>
          <button @click="goToRoute">Descargar</button>
      </div>
    </template>
  </div>

</template>


 <script>
import axios from 'axios';
export default({
  data () {
    return {
      tipo_documento:'',
      numero:'',
      listarTemplate: 1,
      pensionado: 0,
      usuario:null,
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
      // Realiza la solicitud POST utilizando Axios
      axios.post(url, data)
        .then(response => {
          if(response.data.usuario && response.data.usuario.pensionado === 1){
            this.listarTemplate=2;
            this.pensionado=1;
          }
          else{
            this.listarTemplate=2;

          }
          this.usuario=response.data.usuario;
          
        })
        .catch(error => {
          // Maneja el error aquí
          console.error(error);
        });
      },
      goToRoute() {
        var usuario= JSON.stringify(this.usuario)
        const url = 'http://127.0.0.1:8000/verpdf?usuario='+usuario;
        window.open(url)
    }

    }
}) 
</script>