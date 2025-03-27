<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const cursoId = route.params.id

// Simulação de busca de dados
const curso = ref<{ id: number; nome: string; descricao: string; area: string } | null>(null)

onMounted(() => {
  // Cursos de exemplo – em produção, use uma API ou store
  const cursosFake = [
    {
      id: 1,
      nome: 'Frentista de Posto de Combustível',
      descricao: 'Curso para formação de frentistas com foco em segurança, atendimento ao cliente e boas práticas.',
      area: 'Serviços'
    },
    {
      id: 2,
      nome: 'Cuidador de Idosos',
      descricao: 'Curso voltado à capacitação de cuidadores com noções de primeiros socorros e bem-estar do idoso.',
      area: 'Saúde'
    },
    {
      id: 3,
      nome: 'Introdução à Programação',
      descricao: 'Curso introdutório para quem deseja começar na área de programação e lógica computacional.',
      area: 'Tecnologia'
    }
    // ... outros cursos
  ]

  const encontrado = cursosFake.find(c => c.id === Number(cursoId))
  curso.value = encontrado ?? null
})
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-green-600 w-full py-4 shadow-md">
      <div class="container mx-auto flex justify-between items-center px-6">
        <div class="text-white font-bold text-2xl">INFA</div>
        <router-link to="/cursos" class="bg-white text-green-600 px-6 py-2 rounded-full font-medium">
          Voltar para Cursos
        </router-link>
      </div>
    </header>

    <!-- Conteúdo -->
    <main class="flex-1 p-6">
      <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <template v-if="curso">
          <h2 class="text-3xl font-bold text-green-700 mb-2">{{ curso.nome }}</h2>
          <p class="text-sm text-gray-500 mb-4">Área: {{ curso.area }}</p>
          <hr class="mb-4" />
          <p class="text-gray-700 leading-relaxed">{{ curso.descricao }}</p>
        </template>
        <template v-else>
          <p class="text-center text-gray-500">Curso não encontrado.</p>
        </template>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
