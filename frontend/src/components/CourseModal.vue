<script setup lang="ts">
import { ref } from 'vue'

const isOpen = ref(false)

const openModal = () => {
  isOpen.value = true
}

const closeModal = () => {
  isOpen.value = false
}


defineExpose({ openModal })
</script>

<template>
  <Transition
    enter-active-class="transition ease-out duration-300"
    enter-from-class="opacity-0"
    enter-to-class="opacity-100"
    leave-active-class="transition ease-in duration-200"
    leave-from-class="opacity-100"
    leave-to-class="opacity-0"
  >
    <div v-if="isOpen" class="fixed inset-0 z-50 overflow-y-auto">
    
      <div 
        class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity"
        @click="closeModal"
      ></div>

      <Transition
        enter-active-class="transition ease-out duration-300"
        enter-from-class="opacity-0 scale-95"
        enter-to-class="opacity-100 scale-100"
        leave-active-class="transition ease-in duration-200"
        leave-from-class="opacity-100 scale-100"
        leave-to-class="opacity-0 scale-95"
      >
        <div class="flex items-center justify-center min-h-screen p-4">
          <div class="relative bg-white rounded-xl max-w-2xl w-full mx-auto shadow-[0_0_50px_rgba(0,0,0,0.25)] ring-1 ring-black/5">
            
            <button 
              @click="closeModal"
              class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors p-2 hover:bg-gray-100 rounded-full"
            >
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>

          
            <div class="p-6">
              <div class="flex flex-col md:flex-row gap-6 items-center mb-6">
                <img 
                  src="https://placehold.co/200x200/00A651/FFFFFF/png?text=Frentista"
                  alt="Frentista"
                  class="w-32 h-32 rounded-full shadow-lg"
                />
                <div>
                  <h2 class="text-2xl font-bold text-center md:text-left mb-2">
                    Curso Profissionalizante Frentista de Posto de combustível
                  </h2>
                  <p class="text-red-600 font-semibold text-right">
                    Vagas Limitadas
                  </p>
                </div>
              </div>

              <div class="space-y-4 mb-6">
                <p class="flex items-center gap-2">
                  <span class="text-2xl">🚀</span>
                  <span class="font-semibold">Garanta seu futuro como Frentista de Posto de Combustível!</span>
                  <span class="text-2xl">⛽</span>
                </p>

                <p class="text-gray-700">
                  Está em busca de uma oportunidade no mercado de trabalho? O setor de combustíveis está sempre contratando, e agora você pode se qualificar para essa profissão de forma rápida e prática!
                </p>

                <div class="space-y-2">
                  <p class="font-semibold">💭 Por que fazer o curso de Frentista?</p>
                  <ul class="space-y-2">
                    <li class="flex items-center gap-2">
                      <span class="text-green-600">✓</span>
                      Curso semipresencial, combinando teoria online com prática real.
                    </li>
                    <li class="flex items-center gap-2">
                      <span class="text-green-600">✓</span>
                      Aprenda técnicas essenciais de abastecimento, atendimento ao cliente e segurança.
                    </li>
                    <li class="flex items-center gap-2">
                      <span class="text-green-600">✓</span>
                      Certificação reconhecida, aumentando suas chances de contratação.
                    </li>
                    <li class="flex items-center gap-2">
                      <span class="text-green-600">✓</span>
                      Conexão direta com o mercado, através do nosso Balcão de Empregos.
                    </li>
                  </ul>
                </div>

                <p class="text-center font-semibold">
                  <span class="text-blue-600">💎</span>
                  Garanta sua vaga agora e esteja pronto para trabalhar em um setor que não para de crescer!
                  <span class="text-blue-600">💎</span>
                </p>
              </div>

              <button 
                class="w-full bg-green-600 text-white py-3 rounded-lg text-lg font-semibold hover:bg-green-700 transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 active:translate-y-0 active:shadow-lg"
                @click="closeModal"
              >
                Inscreva-se
              </button>
            </div>
          </div>
        </div>
      </Transition>
    </div>
  </Transition>
</template>