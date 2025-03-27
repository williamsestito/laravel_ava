<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const participantes = [
  { nome: 'Fulano de tal', acesso: '1 hora' },
  { nome: 'Fulano de tal', acesso: '1 hora' },
  { nome: 'Fulano de tal', acesso: '1 hora' }
];

const modulos = [
  'Ambientação',
  'Biblioteca de Materiais'
];

const sair = () => {
  router.push('/professor-dashboard');
};

const acessarModulo = (index) => {
  router.push(`/curso/modulo/${index + 1}`);
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

    <!-- Breadcrumb -->
    <div class="p-4 text-green-600">
      <router-link to="/">Página inicial</router-link> > <span>NR 18 - Segurança</span>
    </div>

    <!-- Container Principal -->
    <main class="flex-1 p-8 flex gap-6">
      <aside class="w-1/3 bg-white p-4 rounded-lg shadow-md">
        <h3 class="font-bold text-lg mb-2">Informações</h3>
        <p><strong>Curso:</strong> NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</p>
        <p><strong>Carga Horária:</strong> 20 horas</p>

        <h3 class="font-bold text-lg mt-6 mb-2">Ver participantes</h3>
        <ul>
          <li v-for="(participante, index) in participantes" :key="index" class="flex justify-between">
            <span>{{ participante.nome }}</span>
            <span>{{ participante.acesso }}</span>
          </li>
        </ul>
      </aside>

      <section class="flex-1 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</h2>
        <ul>
          <li v-for="(modulo, index) in modulos" :key="index" class="flex justify-between items-center p-4 border-b">
            <div class="flex items-center gap-4">
              <div class="w-8 h-8 flex items-center justify-center bg-green-600 text-white rounded-full">
                {{ index + 1 }}
              </div>
              <span>{{ modulo }}</span>
            </div>
            <button @click="acessarModulo(index)" class="text-green-600 hover:text-green-800">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          </li>
        </ul>

        <button @click="sair" class="bg-green-600 text-white px-4 py-2 rounded-lg mt-6">Sair</button>
      </section>
    </main>

    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
