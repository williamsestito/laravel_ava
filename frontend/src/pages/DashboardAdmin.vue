<!-- DashboardAdmin.vue -->
<script setup lang="ts">
import { ref } from 'vue';
import { Bar, Pie } from 'vue-chartjs';
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
  ArcElement,
} from 'chart.js';

// Registrar os componentes do Chart.js
ChartJS.register(
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
  ArcElement
);

const totalAlunos = ref(1450);
const totalProfessores = ref(150);
const totalCursos = ref(100);
const locaisAtendidos = ref(1000);

// Dados fake para o gráfico de barras
const barChartData = {
  labels: ['Produto 1', 'Produto 2', 'Produto 3', 'Produto 4', 'Produto 5'],
  datasets: [
    {
      label: 'Acessos',
      data: [40, 60, 80, 20, 100],
      backgroundColor: '#22c55e',
    },
  ],
};

// Dados fake para o gráfico de pizza
const pieChartData = {
  labels: ['Setor 1', 'Setor 2', 'Setor 3'],
  datasets: [
    {
      data: [30, 50, 20],
      backgroundColor: ['#4f46e5', '#ec4899', '#f59e0b'],
    },
  ],
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <div class="flex h-full">
      <!-- Menu Lateral -->
      <aside class="bg-green-800 text-white w-64 p-6">
        <div class="flex flex-col items-center mb-8">
          <div class="w-24 h-24 bg-gray-200 rounded-full mb-2"></div>
          <p class="text-xl">Olá, Administrador</p>
        </div>

        <nav>
          <ul class="space-y-4">
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-tachometer-alt"></i> Dashboard
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-user"></i> Cadastros
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-chart-bar"></i> Relatórios
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-globe"></i> Site
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-cog"></i> Configuração
            </li>
            <li class="flex items-center gap-2 cursor-pointer">
              <i class="fas fa-sign-out-alt"></i> Sair
            </li>
          </ul>
        </nav>
      </aside>

      <!-- Conteúdo Principal -->
      <main class="flex-1 p-4">
        <header class="flex justify-between items-center mb-4">
          <div class="text-green-800 text-2xl font-bold">INFA</div>
          <div class="flex items-center gap-4">
            <i class="fas fa-comment text-green-600"></i>
            <i class="fas fa-bell text-green-600"></i>
            <div class="bg-green-600 text-white rounded-full px-3 py-1 font-medium">AD</div>
          </div>
        </header>

        <div class="grid grid-cols-4 gap-4 mb-4">
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <p class="text-xl font-semibold text-green-600">Total de Alunos</p>
            <p class="text-3xl font-bold">{{ totalAlunos }}</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <p class="text-xl font-semibold text-green-600">Total de Professores</p>
            <p class="text-3xl font-bold">{{ totalProfessores }}</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <p class="text-xl font-semibold text-green-600">Total de Cursos</p>
            <p class="text-3xl font-bold">{{ totalCursos }}</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <p class="text-xl font-semibold text-green-600">Locais atendidos</p>
            <p class="text-3xl font-bold">{{ locaisAtendidos }}</p>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white p-4 rounded-lg shadow-md h-96">
            <p class="text-lg font-bold mb-4">Últimos Cursos Criados</p>
            <Bar :data="barChartData" class="h-full" />
          </div>
          <div class="bg-white p-4 rounded-lg shadow-md h-96">
            <p class="text-lg font-bold mb-4">Distribuição de Acessos por Setor</p>
            <Pie :data="pieChartData" class="h-full" />
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<style scoped>
aside li:hover {
  color: #d4f4dd;
}
</style>
