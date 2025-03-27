<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-green-600 w-full py-4 shadow-md">
      <div class="container mx-auto flex justify-between items-center px-6">
        <div class="text-white font-bold text-2xl">INFA</div>
        <router-link to="/" class="bg-white text-green-600 px-6 py-2 rounded-full font-medium">
          Página Inicial
        </router-link>
      </div>
    </header>

    <!-- Filtro -->
    <main class="flex-1 p-6">
      <div class="max-w-4xl mx-auto mb-6">
        <input
          v-model="filtro"
          type="text"
          placeholder="Filtrar por nome ou área..."
          class="w-full p-3 border border-gray-300 rounded-lg"
        />
      </div>

      <!-- Lista de cursos -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div
          v-for="curso in cursosFiltrados"
          :key="curso.id"
          class="bg-white p-6 rounded-lg shadow-md"
        >
          <h3 class="text-xl font-bold text-green-700 mb-2">{{ curso.nome }}</h3>
          <p class="text-sm text-gray-500 mb-4">Área: {{ curso.area }}</p>
          <p class="text-gray-600">{{ curso.descricao.substring(0, 80) }}...</p>
          
          <!-- Botão que redireciona -->
          <router-link
            :to="`/detalhescurso/${curso.id}`"
            class="inline-block mt-4 text-green-600 hover:underline"
          >
            Ver mais
          </router-link>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue'

const filtro = ref('')

const cursos = ref([
  {
    id: 1,
    nome: 'Frentista de Posto de Combustível',
    area: 'Serviços',
    descricao: 'Curso para formação de frentistas com foco em segurança, atendimento e boas práticas.',
  },
  {
    id: 2,
    nome: 'Cuidador de Idosos',
    area: 'Saúde',
    descricao: 'Curso voltado à capacitação de cuidadores com noções de primeiros socorros e bem-estar do idoso.',
  },
  {
    id: 3,
    nome: 'Introdução à Programação',
    area: 'Tecnologia',
    descricao: 'Curso introdutório para quem deseja começar na área de programação e lógica computacional.',
  }
  // ...outros cursos
])

const cursosFiltrados = computed(() => {
  const termo = filtro.value.toLowerCase()
  return cursos.value.filter(
    (curso) =>
      curso.nome.toLowerCase().includes(termo) ||
      curso.area.toLowerCase().includes(termo)
  )
})
</script>
