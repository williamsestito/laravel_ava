<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const alunos = [
  { nome: 'Aluno Fulano de Tal', email: 'fulano@email.com', curso: 'Segurança no Trabalho' },
  { nome: 'Aluno Ciclano Silva', email: 'ciclano@email.com', curso: 'Frentista de Posto' },
  { nome: 'Aluno Beltrano Souza', email: 'beltrano@email.com', curso: 'Construção Civil' }
];

const sair = () => {
  router.push('/professor-dashboard');
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Navbar -->
    <header class="bg-green-600 w-full py-4 shadow-md">
      <div class="container mx-auto flex justify-between items-center px-6">
        <div class="text-white font-bold text-2xl">INFA</div>
        <router-link to="/" class="bg-white text-green-600 px-6 py-2 rounded-full font-medium">
          Voltar
        </router-link>
      </div>
    </header>

    <!-- Container Principal -->
    <div class="flex flex-1 p-8">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Alunos Matriculados</h2>

        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-green-600 text-white">
              <th class="p-2">Nome</th>
              <th class="p-2">Email</th>
              <th class="p-2">Curso</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(aluno, index) in alunos" :key="index" class="border-b">
              <td class="p-2">{{ aluno.nome }}</td>
              <td class="p-2">{{ aluno.email }}</td>
              <td class="p-2">{{ aluno.curso }}</td>
            </tr>
          </tbody>
        </table>

        <button @click="sair"
          class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold mt-4 hover:bg-green-700 transition-colors">
          Voltar ao Dashboard
        </button>
      </div>
    </div>

    <!-- Footer fixo -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
