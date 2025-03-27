<script setup lang="ts">
import { defineAsyncComponent, ref } from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faInstagram, faLinkedin, faYoutube, faFacebook } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
const CourseModal = defineAsyncComponent(() => import('../components/CourseModal.vue'));
const Navbar = defineAsyncComponent(() => import('../components/Navbar.vue'));

library.add(faInstagram, faLinkedin, faYoutube, faFacebook)

const searchQuery = ref('')
const modalRef = ref()

// Using placeholder images
const studentsImage = 'https://placehold.co/800x600/00A651/FFFFFF/png?text=Students'
const backgroundImage = 'https://placehold.co/1920x1080/1B3168/FFFFFF/png?text=Background'
const courseImage = 'https://placehold.co/400x300/00A651/FFFFFF/png?text=Course'

const openCourseModal = () => {
  modalRef.value?.openModal()
}
</script>

<template>
  <div>

    <Navbar />
    <CourseModal ref="modalRef" />
    <div class="min-h-screen bg-white">

      <!-- Hero Section -->
      <section class="bg-green-600 py-16 relative">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center px-4 gap-8">
          <div class="max-w-2xl">
            <h1 class="text-3xl lg:text-4xl font-bold text-white mb-4">
              Cursos Profissionalizantes gratuitos em diversas áreas de conhecimento
            </h1>
            <p class="text-white mb-6">
              No INFA Cursos, você encontra uma ampla variedade de cursos gratuitos,
              desenvolvidos para preparar você para o mercado de trabalho. Com
              opções semipresenciais, nossa plataforma intuitiva permite que você
              estude no seu ritmo, combinando aprendizado online com atividades
              presenciais para uma experiência completa e prática.
            </p>
            <button class="bg-white text-green-600 px-6 py-2 rounded-full font-semibold">
              Conheça nossos cursos
            </button>
          </div>
          <div class="w-full lg:w-1/3">
            <img :src="studentsImage" alt="Alunos" class="rounded-lg shadow-lg" />
          </div>
        </div>

        <!-- Onda Invertida -->
        <div class="absolute bottom-0 left-0 w-full">
          <svg class="w-full h-auto" viewBox="0 0 1440 258" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" fill-opacity="1"
              d="M1440,160 C1320,200 1200,240 1080,240 C960,240 840,200 720,180 C600,160 480,180 360,200 C240,220 120,240 0,200 L0,320 L1440,320 Z">
            </path>
          </svg>
        </div>
      </section>



      <!-- Search Section -->
      <section class="relative -mt-8">
        <div class="container mx-auto px-4">
          <div class="bg-white rounded-tl-[40px] rounded-br-[40px] shadow-lg p-6 max-w-3xl mx-auto">
            <h2 class="text-xl mb-4">Qual curso deseja estudar hoje?</h2>
            <div class="flex items-center gap-2">
              <div class="flex-1 relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
                <input type="text" placeholder="O que você quer estudar hoje?"
                  class="w-full pl-12 pr-4 py-3 border rounded-l-full rounded-r-lg" v-model="searchQuery" />
              </div>
              <button class="bg-green-600 text-white px-8 py-3 rounded-l-lg rounded-r-full whitespace-nowrap">
                Pesquisar
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Job Board Section -->
      <section class="relative text-white py-16 mt-16">
        <div class="absolute inset-0 overflow-hidden">
          <img :src="backgroundImage" alt="Background" class="w-full h-full object-cover" />
          <!-- Overlay to ensure text readability -->
          <div class="absolute inset-0 bg-blue-900/80"></div>
        </div>
        <div class="container mx-auto px-4 relative">
          <div class="flex flex-col lg:flex-row justify-between items-center gap-8">
            <div class="max-w-2xl">
              <h2 class="text-2xl lg:text-3xl font-bold mb-4 text-center lg:text-left">
                Conclua seu <span class="text-blue-300">curso</span> e dê o próximo passo na sua carreira com o nosso
                Balcão de
                Empregos, conectando você a inúmeras empresas e diversas oportunidades no
                mercado de <span class="text-blue-300">trabalho!</span>
              </h2>
            </div>
            <button class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg text-lg transition-colors">
              Veja as Vagas
            </button>
          </div>
        </div>
      </section>

      <!-- Available Courses -->
      <section class="py-16">
        <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold text-center text-green-600 mb-12">
            Cursos Disponíveis
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div v-for="index in 12" :key="index" class="bg-white rounded-lg shadow-lg overflow-hidden">
              <div class="h-48 bg-gray-200">
                <img :src="courseImage" alt="Curso" class="w-full h-full object-cover" />
              </div>
              <div class="p-4">
                <h3 class="text-center font-semibold mb-4">
                  NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil
                </h3>
                <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition-colors"
                  @click="openCourseModal">
                  Saiba mais
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="bg-green-600 text-white py-12">
        <div class="container mx-auto px-4">
          <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="flex gap-6 justify-center lg:justify-start">
              <font-awesome-icon :icon="['fab', 'instagram']" size="2x" />
              <font-awesome-icon :icon="['fab', 'linkedin']" size="2x" />
              <font-awesome-icon :icon="['fab', 'youtube']" size="2x" />
              <font-awesome-icon :icon="['fab', 'facebook']" size="2x" />
            </div>
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-24">
              <div class="text-center lg:text-left">
                <h3 class="font-bold mb-4">Institucional</h3>
                <ul class="space-y-2">
                  <li><a href="#">AVA</a></li>
                  <li><a href="#">Termos de Uso</a></li>
                  <li><a href="#">Política de Privacidade</a></li>
                </ul>
              </div>
              <div class="text-center lg:text-left">
                <h3 class="font-bold mb-4">Ajuda</h3>
                <ul class="space-y-2">
                  <li><a href="#">Dúvidas Frequentes</a></li>
                  <li><a href="#">Como me Inscrever</a></li>
                  <li><a href="#">Sou Professor / Instrutor</a></li>
                  <li><a href="#">Os Cursos são Grátis?</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</template>