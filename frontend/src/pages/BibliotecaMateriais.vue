<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import PdfEmbed from 'vue-pdf-embed';

const router = useRouter();

const modulos = [
  { nome: 'Ambientação', concluido: true, path: '/curso/modulo/1' },
  { nome: 'Biblioteca de materiais', progresso: 40, concluido: true, path: '/curso/modulo/2' },
  { nome: 'Práticas aplicadas', concluido: false, path: '/curso/modulo/3' },
  { nome: 'Atividades', concluido: false, path: '/curso/modulo/4' },
  { nome: 'Avaliação', concluido: false, path: '/curso/modulo/5' }
];

const sair = () => {
  router.push('/dashboardcurso');
};

const acessarModulo = (path) => {
  router.push(path);
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Breadcrumb -->
    <div class="p-4 text-green-600">
      <router-link to="/">Página inicial</router-link> > 
      <router-link to="/curso-dashboard">NR 18 - Segurança</router-link> > 
      <span>Biblioteca de Materiais</span>
    </div>

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6 flex gap-6">
      <!-- Conteúdo da Aula -->
      <section class="flex-1 bg-white p-6 rounded-lg shadow-md">
        <button @click="sair" class="text-green-600 flex items-center mb-4">
          <i class="fas fa-arrow-left mr-2"></i> Sair
        </button>

        <h2 class="text-2xl font-bold mb-4">Apresentação - Ciclano de Sousa</h2>
        <hr class="mb-4">

        <!-- Visualizador de PDF -->
        <div class="bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <PdfEmbed
            src="../../../public/materiais-pdf/exemplo.pdf"
            style="width: 100%; height: 600px; border: none;"
          />
        </div>
      </section>

      <!-- Menu Lateral -->
      <aside class="w-1/3 bg-white p-4 rounded-lg shadow-md">
        <h3 class="font-bold text-lg mb-2">NR 18 - Segurança e Saúde no Trabalho na Indústria da Construção Civil</h3>

        <!-- Progresso -->
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-green-600 h-2.5 rounded-full" :style="{ width: modulos[1].progresso + '%' }"></div>
        </div>
        <p class="text-sm text-green-600">{{ modulos[1].progresso }}% Concluído</p>

        <!-- Lista de Módulos -->
        <ul class="mt-4">
          <li v-for="(modulo, index) in modulos" :key="index" class="flex justify-between items-center p-2 border-b cursor-pointer" @click="acessarModulo(modulo.path)">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 flex items-center justify-center bg-green-600 text-white rounded-full">{{ index + 1 }}</div>
              <div>
                <p>{{ modulo.nome }}</p>
                <p v-if="modulo.concluido" class="text-sm text-green-600 flex items-center gap-1">
                  <i class="fas fa-check-circle"></i> Concluído
                </p>
              </div>
            </div>
            <i class="fas fa-arrow-right text-green-600"></i>
          </li>
        </ul>
      </aside>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2024 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
