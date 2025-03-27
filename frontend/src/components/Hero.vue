<script setup lang="ts">

const studentsImage = 'https://placehold.co/600x400/00A651/FFFFFF/png?text=Students'
</script>

<template>
  <div class="bg-green-600 text-white py-16 relative overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row items-center">
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
          <h1 class="text-3xl lg:text-4xl font-bold mb-4">
            Cursos Profissionalizantes gratuitos
          </h1>
          <h2 class="text-xl lg:text-2xl mb-6">
            em diversas áreas do conhecimento
          </h2>
          <p class="mb-8">
            Na INFA Cursos, você encontra uma ampla variedade de cursos gratuitos, desenvolvidos para preparar você para o mercado de trabalho, com opções semipresenciais, nova plataforma educacional e certificado válido em todo o Brasil. Combine aprendizado online com atividades presenciais para uma experiência completa e prática.
          </p>
          <button class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold w-full lg:w-auto">
            Conheça nossos cursos
          </button>
        </div>
        <div class="w-full lg:w-1/2">
          <img :src="studentsImage" alt="Students" class="mx-auto lg:ml-auto rounded-lg shadow-lg" />
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full">
      <svg viewBox="0 0 1440 120" fill="white">
        <path d="M0,64L1440,32L1440,120L0,120Z"></path>
      </svg>
    </div>
  </div>
</template>