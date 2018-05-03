<template>
    <div>
        <input type="file" v-on:change="onFileChange" class="form-control mb-4">
        <img :src="image" class="img-responsive">
    </div>
</template>
<style scoped>
    img {
        max-width: 100%;
    }
</style>
<script>
    export default{
        data(){
            return {
                image: ''
            }
        },
        methods: {
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                    vm.$emit('input', vm.image)
                };
                reader.readAsDataURL(file);
            }
        }
    }
</script>
