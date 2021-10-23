<template>
    <div class="container">
        <div class="card" v-for="contact in contacts" :key="contact.id">
            <div class="card-header">
                Contact
            </div>
            <div class="card-body">
                <h5 class="card-title">{{contact.name}}</h5>
                <p class="card-text">{{contact.phone}}</p>
                <a href="#" class="btn btn-primary">Editer</a>
                <a href="#" class="btn btn-primary">Supprimer</a>
            </div>
        </div>
    </div>
</template>
<script>
export default {

    data(){
        return {
            contacts:{}
        }
    },

    created(){
        axios.get('/contactList')
            .response(response=>this.contacts = response.data)
            .catch(erro=>console.log(error))
    },

    mounted(){
        console.log("Component monted")
    }
}
</script>