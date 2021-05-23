<template>
    <span id="toggle-slide" @click.prevent="toggle_sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
    </span>
  <nav ref="alternav" id="alt-nav">
            <ul ref="navulist" id="alt-navbar-list">
                <li class="list-item-vertical">   
                    <a class="item-link" href="/">
                        Inicio
                    </a>
                </li>
                <li class="list-item-vertical">
                    <a class="item-link">Líneas de Investigación</a>
                </li>
                <li class="list-item-vertical">
                    <a class="item-link">Documentos</a>
                </li>
                <li class="list-item-vertical">
                    <a class="item-link">Información</a>
                </li>
                <li class="list-item-vertical" v-if="canLogin">
                    <a :href="route('login')" class="login-only item-link">
                        Iniciar Sesión
                    </a>
                </li>
                
            </ul>  
        </nav>
</template>

<script>
export default {
    props:[],
    data(){
        return{
            active:false,
        }
    },
    methods:{
        toggle_sidebar(event){
            this.active = !this.active;
            if(this.active){
                this.$refs.alternav.style.transform = "translateX(0)";
                console.log("HOLA");
            }else{
                this.$refs.alternav.style.transform = `translateX(100%)`;
            }
        }
    },
    created(){

    }
}
</script>

<style>
@import '../NavigationBar/NavBarStyles.css';


</style>