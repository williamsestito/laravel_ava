<script setup lang="ts">

</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <header class="bg-green-600 w-full py-4 shadow-md flex justify-between items-center px-6">
      <div class="text-white font-bold text-2xl">INFA</div>
      <div class="flex items-center space-x-4">
        <button class="text-white">
          <i class="fas fa-bell"></i>
        </button>
        <button class="text-white">
          <i class="fas fa-comment"></i>
        </button>
        <div class="bg-white text-green-600 rounded-full px-4 py-2 font-medium">AL</div>
      </div>
    </header>

    <main class="flex-1 p-6">
      <h1 class="text-2xl font-bold text-gray-700">Olá, ALUNO DO CURSO</h1>
      <p class="text-lg text-gray-600 mt-2">Resumo dos Cursos</p>
      <hr class="border-t-2 border-green-600 my-4" /> <!-- Linha verde separadora -->

      <div class="mt-6">
        <div class="flex justify-center">
          <div class="w-full max-w-2xl">
            <div class="flex items-center bg-white p-4 rounded-lg shadow-md">
              <input type="text" placeholder="Qual curso deseja estudar hoje?" class="flex-1 p-2 border rounded-lg" />
              <button class="bg-green-600 text-white px-4 py-2 rounded-lg ml-2">Pesquisar</button>
            </div>
          </div>
        </div>

        <div class="mt-8 flex">
          <div class="bg-white p-4 rounded-lg shadow-md w-full max-w-md">
            <img src="/img/curso.jpg" alt="Curso" class="w-full rounded-t-lg" />
            <h3 class="text-lg font-bold mt-2">Frentista de Posto de Combustível</h3>
            <p class="text-gray-600">Acesse o Curso</p>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
              <div class="bg-green-600 h-2.5 rounded-full" style="width: 15%"></div>
            </div>
            <p class="text-sm text-gray-600 mt-1">15% Concluído</p>
         <!-- Botão para acessar o curso com router-link -->
        <router-link to="/dashboardcurso">
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg mt-6">Acessar Curso</button>
        </router-link>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
