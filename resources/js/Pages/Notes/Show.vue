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
                Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                     <h3>Detalle de notas</h3>
                </div>

                <div class="bg-white shadow-md md:rounded-md py-4">
                    <table>                       

                        <tbody>
                            <tr>
                                <td>Extracto</td>
                                <td class="border px-4 py-2"> {{ nota.extracto }}</td> 
                            </tr>

                            <tr>
                                 <td> Contenido </td>
                                <td class="border px-4 py-2"> {{ nota.contenido }}</td>
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

    </AppLayout>
</template>