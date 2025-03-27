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
      <h2 class="text-3xl font-bold text-center text-green-600 mb-6">Quem somos</h2>

      <div class="bg-white p-8 rounded-lg shadow-lg max-w-5xl mx-auto">
        <p class="text-gray-700 mb-4">
          A INFA Amazônia Criativa é uma iniciativa comprometida com a qualificação e o desenvolvimento profissional da população de Rondônia.
          Nosso propósito é transformar vidas por meio da educação, oferecendo cursos profissionalizantes gratuitos que capacitam e preparam
          cidadãos para o mercado de trabalho e para o empreendedorismo.
        </p>
        <p class="text-gray-700 mb-4">
          Acreditamos que a educação é a chave para um futuro promissor. Por isso, trabalhamos para democratizar o acesso ao conhecimento,
          promovendo oportunidades reais de crescimento pessoal e profissional.
        </p>
        <p class="text-gray-700 mb-4">
          Nossos cursos abrangem diversas áreas, atendendo às necessidades do cenário econômico e produtivo da região, sempre com conteúdos atualizados
          e metodologias inovadoras. Mais do que ensinar, buscamos inspirar e impulsionar talentos, fomentando a criatividade e a inovação na Amazônia.
        </p>
        <p class="text-gray-700 mb-4">
          Seja para ingressar no mercado de trabalho, aprimorar habilidades ou iniciar um novo caminho profissional, a INFA Amazônia Criativa está ao
          seu lado, construindo um futuro mais qualificado e inclusivo para Rondônia.
        </p>
        <p class="text-gray-700 font-semibold">
          Junte-se a nós nessa jornada de transformação!
        </p>
      </div>

      <!-- Equipe -->
      <div class="mt-12">
        <h3 class="text-2xl font-bold text-center text-green-600 mb-6">Nossa Equipe</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 justify-items-center">
          <div class="text-center">
            <img src="/img/avatar.jpg" alt="Integrante" class="w-24 h-24 rounded-full mx-auto mb-2" />
            <h4 class="font-bold text-green-700">Fulano de Tal</h4>
            <p class="text-gray-600">Cargo</p>
          </div>
          <div class="text-center">
            <img src="/img/avatar.jpg" alt="Integrante" class="w-24 h-24 rounded-full mx-auto mb-2" />
            <h4 class="font-bold text-green-700">Fulano de Tal</h4>
            <p class="text-gray-600">Cargo</p>
          </div>
          <div class="text-center">
            <img src="/img/avatar.jpg" alt="Integrante" class="w-24 h-24 rounded-full mx-auto mb-2" />
            <h4 class="font-bold text-green-700">Fulano de Tal</h4>
            <p class="text-gray-600">Cargo</p>
          </div>
          <div class="text-center">
            <img src="/img/avatar.jpg" alt="Integrante" class="w-24 h-24 rounded-full mx-auto mb-2" />
            <h4 class="font-bold text-green-700">Fulano de Tal</h4>
            <p class="text-gray-600">Cargo</p>
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
