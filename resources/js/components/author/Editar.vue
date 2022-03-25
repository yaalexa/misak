<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Autor</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>NOMBRE</label>
                                    <input type="text" class="form-control" v-model="author.name">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>DIRECCION</label>
                                    <input type="text" class="form-control" v-model="author.address">
                                </div>
                            </div>
                           <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>TELEFONO</label>
                                    <input type="text" class="form-control" v-model="author.phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editar-author",
    data(){
        return {
            author:{
                name:"",
                address:"",
                phone:"",
            }
        }
    },
    mounted(){
        this.mostrarAuthor()
    },
    methods:{
        async mostrarAuthor(){
            await this.axios.get(`/api/author/${this.$route.params.id}`).then(response=>{
                const { name, address,phone } = response.data
                this.author.name = name
                this.author.address = address
                this.author.phone = phone
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/author/${this.$route.params.id}`,this.author).then(response=>{
                this.$router.push({name:"mostrarAuthor"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>