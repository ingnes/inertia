<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        AppLayout,
        Link,
    },    
    data() {
        return {
                form: {
                    extracto: '',
                    contenido: '',
                }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(this.route('notes.store'), this.form);
        }
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
              
                <div class="md:grid md:grid-cols-3 md:gap-6">

                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg text-gray-900"> Creación de Notas</h3>
                            <p class="text-sm text-gray-600"> Crea una nueva nota</p>
                        </div>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="bg-white shadow-md md:rounded-md">
                    
                    <form @submit.prevent="submit">
                        <label class="font-medium block text-sm rounded-sm pt-4 text-gray-700">
                            Extracto
                        </label>
                        <textarea class="form-input w-full rounded-md text-gray-700 shadow-sm"
                                    v-model="form.extracto">
                        </textarea>

                        <label class="font-medium block text-sm rounded-sm pt-4 text-gray-700">
                            Contenido
                        </label>
                        <textarea class="form-input w-full rounded-md text-gray-700 shadow-sm"
                                    rows="8"
                                    v-model="form.contenido">
                        </textarea>

                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold rounded-md py-2 px-4">
                            Guardar
                        </button>

                    </form>


                </div>

                    </div>
                    
                </div>               

            </div> 

        </div>

    </AppLayout>
</template>