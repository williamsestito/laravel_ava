<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const modulos = [
  { nome: 'Ambientação', nota: 75.0, concluido: true },
  { nome: 'Biblioteca de materiais', nota: 75.0, concluido: true },
  { nome: 'Práticas aplicadas', nota: 75.0, concluido: true },
  { nome: 'Atividades', nota: 75.0, concluido: true },
  { nome: 'Avaliação', nota: 75.0, concluido: true }
];

const mediaFinal = 75.0;
const situacao = 'aprovado';

const emitirCertificado = () => {
  alert('Certificado emitido com sucesso!');
};

const sair = () => {
  router.push('/dashboardcurso');
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Breadcrumb -->
    <div class="p-4 text-green-600">
      <router-link to="/">Página inicial</router-link> > <router-link to="/curso-dashboard">NR 18 - Segurança</router-link> > <span>Avaliação</span>
    </div>

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6 flex gap-6">
      <!-- Conteúdo da Aula -->
      <section class="flex-1 bg-white p-6 rounded-lg shadow-md">
        <button @click="sair" class="text-green-600 flex items-center mb-4">
          <i class="fas fa-arrow-left mr-2"></i> Sair
        </button>

        <h2 class="text-2xl font-bold mb-4">NR 18 - Segurança e Saúde no Trabalho na Indústria da Construção Civil</h2>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
        </div>

        <ul class="mt-4">
          <li v-for="(modulo, index) in modulos" :key="index" class="flex justify-between items-center p-2 border-b">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 flex items-center justify-center bg-green-600 text-white rounded-full">{{ index + 1 }}</div>
              <span>{{ modulo.nome }}</span>
            </div>
            <span>{{ modulo.nota.toFixed(1) }}</span>
          </li>
        </ul>

        <hr class="my-4 border-green-500">

        <div class="flex justify-between items-center">
          <span class="font-bold">Média final</span>
          <span>{{ mediaFinal.toFixed(1) }}</span>
        </div>
        <div class="flex justify-between items-center mb-4">
          <span class="font-bold">Situação</span>
          <span class="text-green-600">{{ situacao }}</span>
        </div>

        <button @click="emitirCertificado" class="bg-green-600 text-white px-4 py-2 rounded-lg mt-6">
          Emitir Certificado
        </button>
      </section>

      <!-- Menu Lateral -->
      <aside class="w-1/3 bg-white p-4 rounded-lg shadow-md">
        <h3 class="font-bold text-lg mb-2">Informações</h3>
        <p><strong>Curso:</strong> NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</p>
        <p><strong>Carga Horária:</strong> 20 horas</p>

        <h3 class="font-bold text-lg mt-6">Monitor</h3>
        <p><strong>Beltrano da Silva</strong></p>
        <p>Seg a Sex - 08h às 12h | 13h às 17h</p>
        <p>Email: beltrano@email.com</p>
        <p><i class="fab fa-whatsapp"></i> (69) 9 9988-7766</p>

        <h3 class="font-bold text-lg mt-6">Docente</h3>
        <p><strong>Ciclano de Sousa</strong></p>
        <p>Email: ciclano@email.com</p>
      </aside>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
