<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

export default {
    components : {
        AppLayout,
        Link,
    },
    props: {
        notas: Array,
    },
    data() {
        return {
            q: ''
        }
    },
    methods : {
        destroy(notaId) {
            // console.log(notaId);
            if (confirm('Está seguro que desea eliminar la nota?')) {
                this.$inertia.delete(this.route('notes.destroy',notaId))
            }
        }
    },

    watch : {
        q : function(value) {            
            this.$inertia.get(this.route('notes.index', {q: value}), {}, {preserveState: true})
        }
    }
}

</script>

<template>
    <AppLayout title="Notas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Modulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="md:grid md:grid-cols-3 md:gap-6">

                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg text-gray-900"> Listado de Notas</h3>
                            <p class="text-sm text-gray-600"> Muestra el extracto y el contenido de todas las notas</p>
                        </div>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0">

                        <div class="bg-white shadow-md md:rounded-md">

                            <div class="flex justify-between px-2">

                                <input type="text" class="form-input shadow-sm  rounded-sm" placeholder="Buscar..." v-model="q" />

                                <Link :href="route('notes.create')" class="bg-blue-500 text-white font-bold rounded-sm py-2 px-4">
                                    Crear
                                </Link>
                            </div>

                            <hr class="my-6">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Extracto</th>
                                        <th>Contenido</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="nota in notas" :key="nota.id">
                                            <td class="border px-4 py-2"> {{ nota.extracto }}</td>
                                            <td class="border px-4 py-2"> {{ nota.contenido }}</td>
                                            <td class="px-4 py-2">
                                                <Link :href="route('notes.show', nota.id)" class="bg-gray-500 text-white font-bold rounded-md"> Ver</Link>
                                                <Link :href="route('notes.edit', nota.id)" class="bg-blue-500 text-white font-bold rounded-md"> Editar</Link>
                                                <a @click.prevent="destroy(nota.id)" href="#" class="bg-red-500 text-white font-bold rounded-md"> Eliminar</a>

                                            </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>



                    </div>

                </div>               
               

            </div>        

        
        </div>

    </AppLayout>
</template>