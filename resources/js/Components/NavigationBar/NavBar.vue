<template>
<div class="nav-box">
    <div id="navbar-container" class="mainheader-styles">
        <div id="logo-uni">
            <a href="/">
                <img src="/storage/iberologo.gif">
            </a>
        </div>
        <div id="nav-container">
        <nav id="nav">
            <ul ref="navulist" id="navbar-list">
                <li id="0" class="list-item-horizontal">   
                    <a class="item-link" href="/">
                        Inicio
                    </a>
                </li>
                <li id="1" @click.prevent="setList(
                    [{name:'Robótica'},{name:'Ciencias de Datos'},{name:'Inteligencia Artificial'},{name:'Ver Todas'}],$event)"
                    class="list-item-horizontal">
                    Líneas de Investigación
                    <svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>                
                </li>
                <li id="2" @click.prevent="setList(
                    [{name:'Formatos de Entrega'},{name:'Reporte Semestral'}],$event)"
                    class="list-item-horizontal">
                    Documentos
                    <svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>                
                </li>
                <li id="3" @click.prevent="setList(
                    [{name:'Alumnado'},{name:'Aspirantes'},{name:'Academia'}],$event)"
                    class="list-item-horizontal">
                    Información
                    <svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>                
                </li>
                <li id="4" class="list-item-horizontal" v-if="canLogin">
                    <a :href="route('login')" class="login-only">
                        Iniciar Sesión
                    </a>
                </li>
                
            </ul>  
        </nav>
        <sidebar-menu>
        </sidebar-menu>
        </div>
    </div>
        <div v-if="dropmenu" class="dropdown-menu">
            <ul class="dropmenu-list">
                <template v-for="item in list" :key="item.id">
                    <li class="dropmenu-item">
                        <a :href="route('lineasinv')">
                            {{item.name}}
                        </a>
                    </li>
                </template>
            </ul>
        </div>
</div>
</template>

<script>
import SidebarMenu from '../SideMenu/SidebarMenu.vue';

export default {
  components: { SidebarMenu },
    props:['canLogin','canRegister'],
    data(){
        return{
            start:true,
            list:[],
            dropmenu:false,
            current:null,
        }
    },
    methods:{
        setList(options,event){
            // validate if dropdown menu active
            this.list = [];
            if(this.dropmenu){
                // Check which menu is showing
                if(this.current != event.target.id){
                    this.fillOptionsArray(options);
                    this.current = event.target.id;
                    this.setActiveOption(event.target.id);
                }else{ // Clicked the same active menu
                    this.dropmenu = !this.dropmenu;
                    event.target.classList.remove('activeOption');
                    event.target.firstElementChild.classList.remove('activeArrow');
                }
            }else{
                this.dropmenu = !this.dropmenu;
                this.fillOptionsArray(options);
                this.setActiveOption(event.target.id);
            }
        },
        setActiveOption(id){
            var option = this.$refs.navulist.firstElementChild;
            do{
                if(option.id == id){
                    option.classList.add('activeOption');
                    option.firstElementChild.classList.add('activeArrow');
                    this.current = id;
                }else{
                    option.classList.remove('activeOption');
                    option.firstElementChild.classList.remove('activeArrow');
                }
            }while(option = option.nextElementSibling)
        },
        fillOptionsArray(options){
            var i = 0;
            while(options[i]){
                this.list.push(options[i]);
                i++;
            }
        }
    },
}
</script>

<style>
    @import './NavBarStyles.css';
</style>
