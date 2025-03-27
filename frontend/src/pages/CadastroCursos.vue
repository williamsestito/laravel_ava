<script setup lang="ts">
import { ref, computed, onMounted } from 'vue';
import axios from 'axios';

const cursos = ref<any[]>([]);
const searchTerm = ref("");
const showModal = ref(false);

const novoCurso = ref({
  nome: '',
  descricao: '',
  carga_horaria: 0,
  status: 'Ativo'
});

const fetchCursos = async () => {
  try {
    const response = await axios.get('http://localhost:8000/api/cursos');
    cursos.value = response.data;
  } catch (error) {
    console.error('Erro ao buscar cursos:', error);
  }
};

const criarCurso = async () => {
  try {
    await axios.post('http://localhost:8000/api/cursos', novoCurso.value);
    fecharModal();
    fetchCursos();
  } catch (error) {
    console.error('Erro ao criar curso:', error);
  }
};

const editarCurso = (curso: any) => {
  console.log('Editar curso:', curso);
};

const excluirCurso = async (curso: any) => {
  try {
    await axios.delete(`http://localhost:8000/api/cursos/${curso.id}`);
    fetchCursos();
  } catch (error) {
    console.error('Erro ao excluir curso:', error);
  }
};

const criarNovoCurso = () => {
  novoCurso.value = { nome: '', descricao: '', carga_horaria: 0, status: 'Ativo' };
  showModal.value = true;
};

const fecharModal = () => {
  showModal.value = false;
};

const filteredCursos = computed(() => {
  return cursos.value.filter((curso) =>
    curso.nome.toLowerCase().includes(searchTerm.value.toLowerCase())
  );
});

onMounted(fetchCursos);
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <div class="flex h-full">
      <aside class="bg-green-800 text-white w-64 p-6">
        <div class="flex flex-col items-center mb-8">
          <div class="w-24 h-24 bg-gray-200 rounded-full mb-2"></div>
          <p class="text-xl">Olá, Administrador</p>
        </div>
        <nav>
          <ul class="space-y-4">
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-tachometer-alt"></i> Dashboard
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-book"></i> Cadastros
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-chart-bar"></i> Relatórios
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-globe"></i> Site
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-cog"></i> Configuração
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-sign-out-alt"></i> Sair
            </li>
          </ul>
        </nav>
      </aside>

      <main class="flex-1 p-4">
        <header class="flex justify-between items-center mb-4">
          <div class="text-green-800 text-2xl font-bold">Cadastro de Cursos</div>
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg font-semibold" @click="criarNovoCurso">
            + Novo Curso
          </button>
        </header>

        <input v-model="searchTerm" type="text" placeholder="Buscar Curso" class="w-full mb-4 p-2 border rounded-lg" />

        <table class="w-full bg-white rounded-lg shadow-md">
          <thead class="bg-green-100">
            <tr>
              <th class="p-2 text-left">Curso</th>
              <th class="p-2 text-left">C/H</th>
              <th class="p-2 text-left">Descrição</th>
              <th class="p-2 text-left">Status</th>
              <th class="p-2 text-left">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="curso in filteredCursos" :key="curso.id" class="border-b">
              <td class="p-2">{{ curso.nome }}</td>
              <td class="p-2">{{ curso.carga_horaria }}h</td>
              <td class="p-2">{{ curso.descricao }}</td>
              <td class="p-2">
                <span class="bg-green-600 text-white px-2 py-1 rounded-full">{{ curso.status }}</span>
              </td>
              <td class="p-2 flex gap-2">
                <button class="text-yellow-500" @click="editarCurso(curso)">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="text-red-500" @click="excluirCurso(curso)">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>

        <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
          <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
            <h2 class="text-2xl font-bold mb-4">Adicionar Novo Curso</h2>
            <form @submit.prevent="criarCurso">
              <input v-model="novoCurso.nome" type="text" placeholder="Nome do Curso" class="w-full p-2 mb-4 border rounded-lg" required>
              <textarea v-model="novoCurso.descricao" placeholder="Descrição" class="w-full p-2 mb-4 border rounded-lg"></textarea>
              <input v-model.number="novoCurso.carga_horaria" type="number" placeholder="Carga Horária" class="w-full p-2 mb-4 border rounded-lg" required>
              <select v-model="novoCurso.status" class="w-full p-2 mb-4 border rounded-lg">
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
              </select>
              <div class="flex justify-between">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg mr-2">Salvar</button>
                <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg" @click="fecharModal">Cancelar</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>

    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
