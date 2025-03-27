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
  'Ambientacao',
  'Biblioteca de Materiais',
  'Práticas Aplicadas',
  'Atividades',
  'Avaliação'
];

const acessarModulo = (index) => {
  router.push(`/curso/modulo/${index + 1}`);
};

const acessarCurso = () => {
  router.push('/curso-dashboard');
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-green-600 w-full py-4 shadow-md">
      <div class=" mx-auto flex items-center justify-between px-6">
        <div class="flex items-center gap-6">
           <!-- Logo -->
        <div class="text-white font-bold text-2xl flex items-center">
          <span class="w-40">INFA</span>
        </div>
          <nav class="flex gap-6 text-white">
            <router-link to="/dashboardcurso" class="flex items-center gap-1"><i class="fas fa-home"></i> Página Inicial</router-link>
            <a href="#" class="flex items-center gap-1"><i class="fas fa-calendar-alt"></i> Calendário</a>
            <a href="#" class="flex items-center gap-1"><i class="fas fa-tasks"></i> Notas</a>
            <a href="#" class="flex items-center gap-1"><i class="fas fa-graduation-cap"></i> Meus Cursos</a>
            <a href="#" class="flex items-center gap-1"><i class="fas fa-headset"></i> Falar com o suporte</a>
          </nav>
        </div>
        <div class="flex items-center gap-4 text-white">
          <i class="fas fa-bell"></i>
          <i class="fas fa-comment"></i>
          <div class="bg-white text-green-600 rounded-full px-3 py-1 font-medium">AL</div>
        </div>
      </div>
    </header>

    <!-- Breadcrumb -->
    <div class="p-4 text-green-600">
      <router-link to="/dashboard">Página inicial</router-link> > <span>NR 18 - Segurança</span>
    </div>

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6 flex gap-6">
      <!-- Menu Lateral -->
      <aside class="w-1/3 bg-white p-4 rounded-lg shadow-md border border-transparent">
        <div class="p-4 border border-green-500 rounded-lg mb-4">
          <h3 class="font-bold text-lg mb-2 text-green-600">Informações</h3>
          <p><strong class="text-green-600">Curso:</strong> NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</p>
          <p><strong class="text-green-600">Carga Horária:</strong> 20 horas</p>
        </div>

        <div class="p-4 border border-green-500 rounded-lg mb-4">
          <h3 class="font-bold text-lg mb-2 text-green-600 flex justify-between">Ver participantes <i class="fas fa-download"></i></h3>
          <ul>
            <li v-for="(participante, index) in participantes" :key="index" class="flex justify-between border-t border-green-300 py-2">
              <span><i class="fas fa-user-circle text-green-500"></i> {{ participante.nome }}</span>
              <span>{{ participante.acesso }}</span>
            </li>
          </ul>
        </div>

        <div class="p-4 border border-green-500 rounded-lg mb-4">
          <h3 class="font-bold text-lg mb-2 text-green-600 flex justify-between">Material complementar <i class="fas fa-arrow-right"></i></h3>
        </div>

        <div class="p-4 border border-green-500 rounded-lg mb-4">
          <h3 class="font-bold text-lg text-green-600">Monitor</h3>
          <p><strong class="text-green-600">BS</strong> Beltrano da Silva</p>
          <p>Seg a Sex - 08h às 12h | 13h às 17h</p>
          <p>Email: beltrano@email.com</p>
          <p><i class="fab fa-whatsapp text-green-600"></i> (69) 9 9988-7766</p>
        </div>

        <div class="p-4 border border-green-500 rounded-lg">
          <h3 class="font-bold text-lg text-green-600">Docente</h3>
          <p><strong class="text-green-600">BS</strong> Ciclano de Sousa</p>
          <p>Email: ciclano@email.com</p>
        </div>
      </aside>

      <!-- Conteúdo do Curso -->
      <section class="flex-1 bg-white p-6 rounded-lg shadow-md border border-transparent">
        <div class="p-4 border border-green-500 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">NR18 Segurança e Saúde no Trabalho na Indústria da Construção Civil</h2>
          <ul>
            <li v-for="(modulo, index) in modulos" :key="index" class="flex justify-between items-center p-4 border-b rounded-lg shadow-sm bg-gray-50">
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 flex items-center justify-center bg-green-600 text-white rounded-full">{{ index + 1 }}</div>
                <span>{{ modulo }}</span>
              </div>
              
              <button @click="acessarModulo(index)" class="text-green-600 hover:text-green-800">
                <i class="fas fa-sign-in-alt"></i>
              </button>
            </li>
          </ul>

          <!-- Botão para acessar o curso com router-link -->
          <router-link to="/ambientacao">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg mt-6">Acessar Curso</button>
          </router-link>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>

<style scoped>
nav a {
  transition: color 0.3s;
}

nav a:hover {
  color: #d4f4dd;
}

aside, section {
  border-radius: 12px;
}

li.shadow-sm {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
