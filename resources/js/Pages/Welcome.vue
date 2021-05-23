<template>
    <div>

        <!-- Barra de navegacion superior !-->
        <section>
            <nav-bar
            :canLogin="canLogin"
            :canRegister="canRegister">
            </nav-bar>
        </section>

        <!-- Seccion de contenido principal slide !-->
        <section>
            <slider-box>
            </slider-box>
        </section>

    </div>
</template>

<script>
import SliderBox from '../Components/MainSlider/SliderBox.vue'
import NavBar from "../Components/NavigationBar/NavBar.vue"
    export default {
    components: { NavBar, SliderBox },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        },
        data(){
            return{
                
            }
        }
    }
</script>

<style scoped>

</style>