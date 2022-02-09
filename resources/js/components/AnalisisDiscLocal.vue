<template>
   <div>
        <button class="nav-link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
       data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" 
        aria-controls="v-pills-archivos" aria-selected="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-hdd-fill" viewBox="0 0 16 16">
                <path d="M0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM.91 7.204A2.993 2.993 0 0 1 2 7h12c.384 0 .752.072 1.09.204l-1.867-3.422A1.5 1.5 0 0 0 11.906 3H4.094a1.5 1.5 0 0 0-1.317.782L.91 7.204z"/>
            </svg>
            <br>Almacenamiento
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" >
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Análisis de Almacenamiento del Disco Duro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <!--  {{ disks }} -->

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>Unidad</th>
                                <th>Total de GB</th>
                                <th>Total de GB disponible</th>
                                <th>Total de GB usado</th>
                                <th>Total de porcentaje usado</th>
                                <th>Total de porcentaje disponible</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="disk of disks" :key="disk.id">
                                <td> {{ disk.unidad }} </td>
                                <td> {{ disk.disk_total.total_GB }} GB </td>
                                <td> {{ disk.disponible.total_GB }} GB </td>
                                <td> {{ disk.consumido.total_GB }} GB </td>
                                <td> {{ disk.espacio_usado_porcentaje }} </td>
                                <td> {{ disk.espacio_disponible_porcentaje }} </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-primary" @click="getInfoDisck()">Recargar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                   
                </div>
                </div>
            </div>
        </div>
   </div>
</template>

<script>

//var diskinfo = require('diskinfo')
export default {
    data() {
        return {

            disks: []
            
        }
    },

    created() {
       this.getInfoDisck()
    },

    methods: {
        getInfoDisck() {
            axios.get(`${baseURL}/info/disk`)
            .then( response => response.data )
            .then( disks => {
               this.disks = disks
            }) 
            .catch(function (error) {
                console.log(error);
            })
        }
    }
}
</script>