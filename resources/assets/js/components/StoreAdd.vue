<template>
<form id="form-store-save" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">상호명</label>
        <input type="name" class="form-control mb-4" id="name" v-model="storeData.name">
    </div>
    <div class="form-group">
        <label for="addr">주소</label>
        <input type="addr" class="form-control mb-4" id="addr" v-model="storeData.addr">
    </div>
    <div class="form-group">
        <label for="addr">최소금액</label>
        <input type="addr" class="form-control mb-4" id="price" v-model="storeData.price">
    </div>
    <div class="form-group">
        <label for="">Example file input</label>
        <image-upload v-model="storeData.backImage"></image-upload>
    </div>
    <div class="form-group">
        <label for="">Example file input</label>
        <image-upload v-model="storeData.detailImage"></image-upload>
    </div>
    <button type="button" class="btn btn-primary" id="store-save" @click.prevent="addStore()">저장하기</button>
</form>
</template>
<script>
    export default{
        data(){
            return {
                storeData:{
                    name:'',
                    addr:'',
                    price:'',
                    backImage:'',
                    detailImage:''
                }
            }
        },
        methods: {
            addStore() {
                let vm = this

                if (vm.storeData.name === '') {
                    alert('상호명을 입력해주세요');
                    return false;
                }
                if (vm.storeData.addr === '') {
                    alert('주소를 입력해주세요');
                    return false;
                }
                if (vm.storeData.price === '') {
                    alert('금액을 입력해주세요');
                    return false;
                }
                if (vm.storeData.backImage === '') {
                    alert('배경 이미지를 추가해주세요');
                    return false;
                }
                if (vm.storeData.detailImage === '') {
                    alert('상세 이미지를 추가해주세요');
                    return false;
                }

                axios.post('/lib/store/register', vm.storeData)
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    }
</script>
