<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Crear Editorial</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>NOMBRE</label>
                                    <input type="text" class="form-control" v-model="editorial.name">
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
    name:"crear-editorial",
    data(){
        return {
            editorial:{
                name:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/editorial',this.editorial).then(response=>{
                this.$router.push({name:"mostrarEditorial"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>