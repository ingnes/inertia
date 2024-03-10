<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

export default {
    components : {
        AppLayout,
        Link,
    },
    props: {
        nota: Object,
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
                            <h3 class="text-lg text-gray-900"> Detalla de Notas</h3>
                            <p class="text-sm text-gray-600"> Muestra el extracto y el contenido de una nota seleccionada</p>
                        </div>
                    </div>
                    
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <table class="w-full"> 
                            <tbody>
                                <tr>
                                    <td class="font-bold text-sm shadow-sm">Extracto</td>
                                    <td> {{ nota.extracto }}</td> 
                                </tr>

                                <tr>
                                    <td class="font-bold text-sm shadow-sm"> Contenido </td>
                                    <td> {{ nota.contenido }}</td>
                                </tr>

                                <tr>
                                        <td class="px-4 py-2">
                                            <Link :href="route('notes.index')" class="bg-blue-500 hover:bg-blue-800 text-white rounded-sm px-4 py-2">
                                                Volver
                                            </Link>                                       
                                        </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>                

                </div>          

            </div>         
        </div>

    </AppLayout>
</template>