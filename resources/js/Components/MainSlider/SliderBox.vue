<template>
    <div id="slider-section-box">

        <div id="slider-container">
            <slides
            :images="imgs_array">
            </slides>
        </div>

    </div>
</template>

<script>
import Slides from './Slides.vue'
export default {
  components: { Slides },
  data(){
      return{
          imgs_array:[],
      }
  },
  methods:{
      fillArray(){
        this.imgs_array.push({id:1,name:'img1.jpg',caption:'Posgrado Ciencias de la Ingeniería'});
        this.imgs_array.push({id:2,name:'img2.jpg',caption:'Eventos próximos 9 y 10 de mayo'});
        this.imgs_array.push({id:3,name:'img3.jpg',caption:'Entregas: 12 de mayo'});
      },
  },
  created(){
      this.fillArray();
  }
}
</script>

<style>
    @import './MainSliderStyles.css';
</style>