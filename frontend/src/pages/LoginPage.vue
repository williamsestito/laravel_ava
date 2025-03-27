<!-- Login.vue -->
<script setup lang="ts">
import { ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();
const email = ref("");
const password = ref("");
const showPassword = ref(false);

// Função de login fictícia
const login = () => {
  console.log("Email:", email.value, "Senha:", password.value);

  if (email.value === "professor@email.com" && password.value === "123") {
    router.push("/dashboardprofessor"); // Redireciona para o Dashboard do Professor
  } else if (email.value === "admin@admin.com" && password.value === "123") {
    router.push("/dashboardadmin"); // Redireciona para o Dashboard do Administrador
  } else {
    router.push("/dashboard"); // Redireciona para o Dashboard do Aluno
  }
};

const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value;
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
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">AVA - Ambiente Virtual de Aprendizagem</h2>

        <form @submit.prevent="login">
            @csrf
          <label class="block text-gray-600">E-mail</label>
          <input 
            v-model="email"
            type="email" 
            class="w-full p-2 border rounded-lg mb-4" 
            placeholder="Digite seu e-mail"
            required
          />

          <label class="block text-gray-600">Senha</label>
          <div class="relative">
            <input 
              v-model="password"
              :type="showPassword ? 'text' : 'password'"
              class="w-full p-2 border rounded-lg pr-10"
              placeholder="Digite sua senha"
              required
            />
            <button type="button" @click="togglePasswordVisibility" class="absolute right-3 top-3">
              <img v-if="showPassword" src="/img/eye-off.png" alt="Ocultar Senha" class="w-6">
              <img v-else src="/img/eye.png" alt="Mostrar Senha" class="w-6">
            </button>
          </div>

          <div class="flex justify-between mt-2">
            <router-link to="/recuperar-senha" class="text-green-600 text-sm">
              Esqueci minha senha
            </router-link>
            <router-link to="/cadastro" class="text-green-600 text-sm">
              Cadastre-se
            </router-link>
          </div>

          <button 
            type="submit"
            class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold mt-4 hover:bg-green-700 transition-colors"
          >
            Entrar
          </button>
        </form>
      </div>
    </div>

    <!-- Footer fixo -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>

  </div>
</template>
