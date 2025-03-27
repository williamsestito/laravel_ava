<script setup>
import { ref } from "vue";
import axios from "../axios"; // Importa o Axios configurado
import { useRouter } from "vue-router";

const router = useRouter();
const email = ref("");
const password = ref("");
const showPassword = ref(false);

// Função de login para enviar dados ao backend Laravel
const login = async () => {
  try {
    const response = await axios.post("/api/login", {
      email: email.value,
      password: password.value,
    });

    console.log("Login bem-sucedido:", response.data);
    router.push("/dashboard"); // Redireciona para o painel
  } catch (error) {
    console.error("Erro no login:", error.response?.data || error.message);
  }
};

const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value;
};
</script>

<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <header class="bg-green-600 w-full py-4 shadow-md">
      <div class="container mx-auto flex justify-between items-center px-6">
        <div class="text-white font-bold text-2xl">INFA</div>
        <router-link to="/" class="bg-white text-green-600 px-6 py-2 rounded-full font-medium">Voltar</router-link>
      </div>
    </header>

    <div class="flex flex-1 items-center justify-center">
      <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">AVA - Ambiente Virtual de Aprendizagem</h2>

        <form @submit.prevent="login">
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
              <img v-if="showPassword" src="/resources/img/eye-off.png" alt="Ocultar Senha" class="w-6">
              <img v-else src="/resources/img/eye.png" alt="Mostrar Senha" class="w-6">
            </button>
          </div>

          <router-link to="/recuperar-senha" class="text-green-600 text-sm block text-right mt-2">
            Esqueci minha senha
          </router-link>

          <button 
            type="submit"
            class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold mt-4 hover:bg-green-700 transition-colors"
          >
            Entrar
          </button>
        </form>
      </div>
    </div>

    <footer class="bg-green-600 w-full text-white py-4 text-center">
      <p>&copy; 2024 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
