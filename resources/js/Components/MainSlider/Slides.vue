<template>
    <!-- Navigation Bullets !-->
    <div id="indicator-container">
        <div ref="bulletsContainer" class="bullets-container">
            <template v-for="n in image_count" :key="n">
                <span @click.prevent="goToImage(n)" class="bullet-indicator" :id="n"></span>
            </template>
        </div>
    </div>

    <!-- Images and slide information !-->
    <div ref="imagesContainer" id="slides-container">
        <template v-for="image in images" :key="image.id">
            <div :id="image.id" class="slide">
                <div class="slide-info" :style="`background-image:url(/storage/${image.name})`">
                    <div class="slide-info-header">
                        <h1>{{image.caption}}</h1>
                    </div>
                    <div class="slide-info-actions">
                        <a href="">Ver más</a>
                    </div>
                </div>
            </div>
        </template>
    </div>
  
</template>

<script>
export default {
    props:['images'],
    data(){
        return{
            image_count:null,
            current_image:0,
            slideAmount:0,
            slidingBlock:null,
            counter:null,
        }
    },
    watch:{
        // Checks curr image value for auto transition every 6 sec
        current_image(){
            if(this.counter == 1){
                setTimeout(()=>{
                    (this.current_image == this.image_count)? this.current_image=1 : this.current_image++;
                    this.goToImage(this.current_image);
                    this.counter = 1;
                },6000);
            }
        }
    },
    methods:{
        // Image count is used to delcare the navigation bullets
        setImageCount(){
            this.image_count = this.images.length;
        },
        setCurrentImage(id){ 
            this.counter = 0;
            this.current_image = id;
        },
        setCurrentBullet(id){
            var bullet = this.$refs.bulletsContainer.firstElementChild;
            do{
                (bullet.id == id)? bullet.classList.add('active-bullet') : bullet.classList.remove('active-bullet');
            }while(bullet = bullet.nextElementSibling);
        },
        goToImage(id){
            this.slideAmount = (id - 1) * -100;
            this.$refs.imagesContainer.style.transform=`translateY(${this.slideAmount}%)`;
            this.setCurrentImage(id);
            this.setCurrentBullet(id);
        },
    },
    created(){
        this.setImageCount();
        // Go to image with timer to avoid undefined, 100ms
        setTimeout(()=>{
            this.goToImage(1);
            this.counter = 1;
        },100);
    }
}
</script>

<style>
    @import './MainSliderStyles.css';
</style>