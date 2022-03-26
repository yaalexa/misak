<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Areas</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>NOMBRE</label>
                                    <input type="text" class="form-control" v-model="areas.name">
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
    name:"editar-areas",
    data(){
        return {
            areas:{
                name:"",
               
            }
        }
    },
    mounted(){
        this.mostrarAreas()
    },
    methods:{
        async mostrarAreas(){
            await this.axios.get(`/api/areas/${this.$route.params.id}`).then(response=>{
                const { name} = response.data
                this.areas.name = name
              
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/areas/${this.$route.params.id}`,this.areas).then(response=>{
                this.$router.push({name:"mostrarAreas"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>