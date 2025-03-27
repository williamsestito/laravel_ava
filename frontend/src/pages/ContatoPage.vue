<script setup lang="ts">
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
      <h2 class="text-3xl font-bold text-center text-green-600 mb-6">Contato</h2>

      <div class="bg-white p-8 rounded-lg shadow-lg max-w-5xl mx-auto">
        <p class="text-gray-700 mb-4">
          Tem alguma dúvida, quer saber mais sobre nossos cursos ou precisa de informações adicionais? Entre em contato com a INFA Amazônia Criativa, será um prazer atender você!
        </p>

        <p class="text-gray-700 mb-2">
          📧 <strong>E-mail:</strong> <a href="mailto:infa@contato.com.br" class="text-green-600">infa@contato.com.br</a>
        </p>
        <p class="text-gray-700 mb-2">
          📱 <strong>WhatsApp:</strong> <a href="https://wa.me/556999112233" target="_blank" class="text-green-600">Clique aqui para conversar</a> ou envie uma mensagem para (69) 99911-2233
        </p>

        <p class="text-gray-700 mt-6">
          Estamos prontos para te ajudar! 🚀
        </p>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>