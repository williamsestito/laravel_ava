<script setup lang="ts">
const courseNr18 = 'https://placehold.co/400x300/00A651/FFFFFF/png?text=NR18'
const courseFrentista = 'https://placehold.co/400x300/00A651/FFFFFF/png?text=Frentista'
const courseEstoque = 'https://placehold.co/400x300/00A651/FFFFFF/png?text=Estoque'
const courseRh = 'https://placehold.co/400x300/00A651/FFFFFF/png?text=RH'

interface Course {
  id: number
  title: string
  image: string
}

const courses = [
  {
    id: 1,
    title: 'NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil',
    image: courseNr18
  },
  {
    id: 2,
    title: 'Frentista de Posto de Combustível',
    image: courseFrentista
  },
  {
    id: 3,
    title: 'Auxiliar de Estoque',
    image: courseEstoque
  },
  {
    id: 4,
    title: 'Auxiliar de Recursos Humanos',
    image: courseRh
  }
] as Course[]
</script>

<template>
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-2xl lg:text-3xl font-bold text-center mb-12">Nossos Cursos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div v-for="course in courses" :key="course.id" class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img :src="course.image" :alt="course.title" class="w-full h-48 object-cover" />
        <div class="p-6">
          <h3 class="text-lg font-semibold mb-4">{{ course.title }}</h3>
          <button class="bg-green-600 text-white px-6 py-2 rounded-full w-full">
            Saiba mais
          </button>
        </div>
      </div>
    </div>
  </div>
</template>