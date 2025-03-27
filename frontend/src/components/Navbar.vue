<script setup lang="ts">
import { ref } from 'vue';

const isMenuOpen = ref(false);
</script>

<template>
  <header class="bg-green-600 fixed inset-x-0 top-0 z-50 shadow-md">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-3">
        
        <!-- Logo -->
        <div class="text-white font-bold text-2xl flex items-center">
          <span class="w-40">INFA</span>
        </div>

        <!-- Botão Menu Mobile -->
        <button 
          @click="isMenuOpen = !isMenuOpen" 
          class="lg:hidden text-white p-2"
        >
          <div class="w-6 h-5 flex flex-col justify-between">
            <span 
              class="w-full h-0.5 bg-white transform transition-all duration-300"
              :class="{ 'rotate-45 translate-y-2': isMenuOpen }"
            ></span>
            <span 
              class="w-full h-0.5 bg-white transition-all duration-300"
              :class="{ 'opacity-0': isMenuOpen }"
            ></span>
            <span 
              class="w-full h-0.5 bg-white transform transition-all duration-300"
              :class="{ '-rotate-45 -translate-y-2': isMenuOpen }"
            ></span>
          </div>
        </button>

        <!-- Navegação Desktop -->
        <div class="hidden lg:flex items-center justify-center flex-1 relative">
          <nav class="bg-white rounded-full py-2 px-8 flex gap-8 mx-8 shadow-md">
            <router-link to="/" class="text-gray-700 hover:text-green-600 font-medium">Página inicial</router-link>
            <router-link to="/cursos" class="text-gray-700 hover:text-green-600 font-medium">Cursos</router-link>
            <router-link to="/quemsomos" class="text-gray-700 hover:text-green-600 font-medium">Quem Somos</router-link>
            <router-link to="/certificado" class="text-gray-700 hover:text-green-600 font-medium">Certificado</router-link>
            <router-link to="/contato" class="text-gray-700 hover:text-green-600 font-medium">Contato</router-link>
          </nav>
        </div>

        <!-- Botão Área do Aluno -->
        <router-link to="/login">
          <button class="hidden lg:block bg-green-900 text-white px-6 py-2 rounded-full font-medium shadow-md">
            Área do Aluno
          </button>
        </router-link>

        <!-- Menu Mobile -->
        <div 
          class="lg:hidden fixed inset-0 bg-green-600 z-50 transform transition-transform duration-300"
          :class="isMenuOpen ? 'translate-x-0' : 'translate-x-full'"
        >
          <!-- Botão Fechar -->
          <button 
            @click="isMenuOpen = false"
            class="absolute top-4 right-4 text-white p-2"
          >
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              class="h-8 w-8" 
              fill="none" 
              viewBox="0 0 24 24" 
              stroke="currentColor"
            >
              <path 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>

          <div class="flex flex-col items-center pt-20 gap-6 text-white text-lg">
            <router-link to="/" class="hover:text-gray-200" @click="isMenuOpen = false">Página inicial</router-link>
            <router-link to="/cursos" class="hover:text-gray-200" @click="isMenuOpen = false">Cursos</router-link>
            <router-link to="/quemsomos" class="hover:text-gray-200" @click="isMenuOpen = false">Quem Somos</router-link>
            <router-link to="/certificado" class="hover:text-gray-200" @click="isMenuOpen = false">Certificado</router-link>
            <router-link to="/contato" class="hover:text-gray-200" @click="isMenuOpen = false">Contato</router-link>

            <!-- Botão Área do Aluno -->
            <router-link to="/login">
              <button class="bg-green-900 text-white px-6 py-2 rounded-full font-medium shadow-md">
                Área do Aluno
              </button>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
