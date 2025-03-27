<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const sair = () => {
  router.push('/dashboardcursoEdicao');
};

const alunos = Array.from({ length: 10 }, (_, i) => ({
  nome: `Aluno da Silva Souza`,
  tarefa: 'arquivo.zip',
  nota: ''
}));

const salvar = () => {
  console.log('Notas salvas:', alunos);
  sair();
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <div class="p-4 text-green-600">
      <router-link to="/">Página inicial</router-link> > <router-link to="/dashboardcursoEdicao">NR 18 - Segurança</router-link> > <span>Gerenciamento de Alunos</span>
    </div>

    <main class="flex-1 p-8 flex gap-6">
      <aside class="w-1/3 bg-white p-4 rounded-lg shadow-md">
        <h3 class="font-bold text-lg mb-2 text-green-600">Informações</h3>
        <p><strong>Curso:</strong> NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</p>
        <p><strong>Carga Horária:</strong> 20 horas</p>

        <h3 class="font-bold text-lg mt-6 mb-2 text-green-600 flex justify-between">Ver participantes <i class="fas fa-download"></i></h3>
        <ul>
          <li class="flex justify-between border-t border-green-300 py-2">
            <span><i class="fas fa-user-circle text-green-500"></i> Fulano de tal</span>
            <span>1 hora</span>
          </li>
        </ul>

        <div class="p-4 border border-green-500 rounded-lg mt-6">
          <h3 class="font-bold text-lg text-green-600">Monitor</h3>
          <p><strong class="text-green-600">BS</strong> Beltrano da Silva</p>
          <p>Seg a Sex - 08h às 12h | 13h às 17h</p>
          <p>Email: beltrano@email.com</p>
          <p><i class="fab fa-whatsapp text-green-600"></i> (69) 9 9988-7766</p>
        </div>

        <div class="p-4 border border-green-500 rounded-lg mt-4">
          <h3 class="font-bold text-lg text-green-600">Docente</h3>
          <p><strong class="text-green-600">BS</strong> Ciclano de Sousa</p>
          <p>Email: ciclano@email.com</p>
        </div>
      </aside>

      <section class="flex-1 bg-white p-6 rounded-lg shadow-md">
        <button @click="sair" class="text-green-600 flex items-center mb-4">
          <i class="fas fa-arrow-left mr-2"></i> Sair
        </button>

        <h2 class="text-2xl font-bold mb-4">Gerenciamento de Alunos</h2>

        <table class="w-full">
          <thead>
            <tr>
              <th class="text-left p-2">Aluno</th>
              <th class="text-left p-2">Tarefa</th>
              <th class="text-left p-2">Nota</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(aluno, index) in alunos" :key="index" class="border-t">
              <td class="p-2">{{ aluno.nome }}</td>
              <td class="p-2">{{ aluno.tarefa }}</td>
              <td class="p-2">
                <input v-model="aluno.nota" type="text" placeholder="Insira a nota" class="p-2 border rounded-lg w-20">
              </td>
            </tr>
          </tbody>
        </table>

        <button @click="salvar" class="bg-green-600 text-white px-4 py-2 rounded-lg mt-6 w-full">
          Salvar e Voltar
        </button>
      </section>
    </main>

    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
