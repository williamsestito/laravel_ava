<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const sair = () => {
  router.push('/dashboardcursoEdicao');
};

const tiposConteudo = [
  'Texto',
  'Vídeo',
  'PDF',
  'Atividade'
];

const tipoConteudoSelecionado = ref('');
const nomeConteudo = ref('');
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <div class="p-4 text-green-600">
      <router-link to="/">Página inicial</router-link> > <router-link to="/dashboardcursoEdicao">NR 18 - Segurança</router-link> > <span>Adicionar Conteúdo</span>
    </div>

    <main class="flex-1 p-8 flex gap-6">
      <aside class="w-1/3 bg-white p-4 rounded-lg shadow-md">
        <h3 class="font-bold text-lg mb-2">Informações</h3>
        <p><strong>Curso:</strong> NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</p>
        <p><strong>Carga Horária:</strong> 20 horas</p>

        <h3 class="font-bold text-lg mt-6 mb-2">Ver participantes</h3>
        <ul>
          <li class="flex justify-between">
            <span>Fulano de tal</span>
            <span>1 hora</span>
          </li>
          <li class="flex justify-between">
            <span>Fulano de tal</span>
            <span>1 hora</span>
          </li>
        </ul>

        <h3 class="font-bold text-lg mt-6 mb-2">Material complementar</h3>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg">Baixar</button>
      </aside>

      <section class="flex-1 bg-white p-6 rounded-lg shadow-md">
        <button @click="sair" class="text-green-600 flex items-center mb-4">
          <i class="fas fa-arrow-left mr-2"></i> Sair
        </button>

        <h2 class="text-2xl font-bold mb-4">Adicionar Conteúdo</h2>

        <div class="space-y-4">
          <select v-model="tipoConteudoSelecionado" class="w-full p-2 border rounded-lg">
            <option value="" disabled>Escolha o tipo de conteúdo</option>
            <option v-for="tipo in tiposConteudo" :key="tipo" :value="tipo">
              {{ tipo }}
            </option>
          </select>

          <input type="text" v-model="nomeConteudo" placeholder="Nome do conteúdo" class="w-full p-2 border rounded-lg" />

          <div class="bg-gray-200 rounded-lg p-4 flex justify-center items-center min-h-[200px]">
            <p class="text-lg font-semibold">Área para adicionar o conteúdo selecionado</p>
          </div>

          <button @click="sair" class="bg-green-600 text-white px-4 py-2 rounded-lg mt-6 w-full">
            Salvar e Voltar
          </button>
        </div>
      </section>
    </main>

    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
