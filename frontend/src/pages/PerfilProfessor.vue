<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

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
    <div class="flex flex-1 items-center justify-center">
      <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Perfil do Professor</h2>

        <div class="mb-4">
          <p><strong>Nome:</strong> Professor Ciclano de Sousa</p>
          <p><strong>Email:</strong> professor@email.com</p>
          <p><strong>Telefone:</strong> (69) 9999-9999</p>
          <p><strong>Área de Atuação:</strong> Segurança no Trabalho</p>
        </div>

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
