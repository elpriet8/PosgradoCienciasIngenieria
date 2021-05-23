<template>
<div>
  <!-- nav bar !-->
  <section>
    <nav-bar></nav-bar>
  </section>

  <!-- all container !-->
  <section>
    <div id="block-container-flex">
      <div class="seccion-encabezado">
        <h1>Líneas de Investigación</h1>
      </div>
      <template v-for="linea in lineas" :key="linea.id">

        <div class="linea-individual">
          <div class="linea-icono">
            <img class="linea-icono-img" :src="`/storage/lineasicon/${linea.imagen}`">
          </div>
          <div class="linea-titulo">
            <h2>{{linea.titulo}}</h2>
          </div>
        </div>
        
      </template>
    </div>
  </section>

</div>
</template>

<script>
import NavBar from '../../Components/NavigationBar/NavBar.vue'
export default {
    components: {NavBar},
    props:['lineas'],
    data(){
      return{

      }
    },
    methods:{

    },
    created(){
      console.log(this.lineas);
    }

}
</script>

<style>

#block-container-flex{
  width:89%;
  margin:auto;
  margin-top:5vh;
  display:flex;
  align-items:center;
  justify-content: space-evenly;
  flex-wrap: wrap;
}

.linea-individual{
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:space-evenly;
  border:1px solid #ddd;
  border-radius:13px;
  background:white;
  min-width:45%;
  margin-right:3vw;
  margin-bottom:2vh;
  background:#e7303913;
  height:34vh;
  cursor:pointer;
  transition:.3s all ease-in-out;
}

.linea-individual:hover{
  box-shadow:1px 1px 1px 1px #ddd;
  position:relative;
  bottom:2px;
}

.seccion-encabezado{
  width:100%;
  display:flex;
  align-items:center;
  justify-content: space-evenly;
  height:5vh;
  margin-bottom:2vh;
}

.seccion-encabezado h1{
  font-size:34px;
  font-weight:600;
}

.linea-icono{
  height:70%;
  width:89%;
  display:flex;
  align-items:center;
  justify-content: space-evenly;
  overflow:hidden;
}

.linea-titulo{
  height:13%;
  width:100%;
  display:flex;
  align-items:center;
  justify-content: space-evenly;
}

.linea-titulo h2{
  font-size:24px;
  font-weight:700;
  color:#e73039;
}

.linea-icono-img{
  height:89%;
  object-fit:contain;
}
</style>
