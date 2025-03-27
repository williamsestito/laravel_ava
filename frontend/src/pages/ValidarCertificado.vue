<script setup lang="ts">
import { ref } from 'vue';

const token = ref('');
const numeroCertificado = ref('');
const resultado = ref<null | {
  status: string;
  nome: string;
  curso: string;
  dataEmissao: string;
}>(null);

const validarCertificado = () => {
  // Simulação de validação
  if (token.value === '12345' && numeroCertificado.value === '001') {
    resultado.value = {
      status: 'Validado',
      nome: 'Aluno do Curso',
      curso: 'NR 18 – Segurança e Saúde no Trabalho na Indústria da Construção Civil',
      dataEmissao: '31/01/2025'
    };
  } else {
    resultado.value = {
      status: 'Token não encontrado',
      nome: '',
      curso: '',
      dataEmissao: ''
    };
  }
};
</script>

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

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6">
      <h2 class="text-3xl font-bold text-center text-green-600 mb-6">Validação de Certificado</h2>

      <div class="bg-white p-8 rounded-lg shadow-lg max-w-5xl mx-auto">
        <div class="flex flex-col md:flex-row gap-4 mb-6">
          <input v-model="token" type="text" placeholder="Token do Certificado" class="flex-1 p-2 border rounded-lg" />
          <select v-model="numeroCertificado" class="flex-1 p-2 border rounded-lg">
            <option value="">Número do certificado</option>
            <option value="001">001</option>
            <option value="002">002</option>
            <option value="003">003</option>
          </select>
          <button @click="validarCertificado" class="bg-green-600 text-white px-6 py-2 rounded-lg">Validar</button>
        </div>

        <div v-if="resultado" class="mt-6 border-t pt-4">
          <div v-if="resultado.status === 'Validado'">
            <p><strong>Status:</strong> <span class="text-green-600">{{ resultado.status }}</span></p>
            <p><strong>Nome:</strong> {{ resultado.nome }}</p>
            <p><strong>Curso:</strong> {{ resultado.curso }}</p>
            <p><strong>Data de Emissão:</strong> {{ resultado.dataEmissao }}</p>
          </div>

          <div v-else>
            <p><strong>Status:</strong> <span class="text-red-600">{{ resultado.status }}</span></p>
            <p><strong>Nome:</strong> -</p>
            <p><strong>Curso:</strong> -</p>
            <p><strong>Data de Emissão:</strong> -</p>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>