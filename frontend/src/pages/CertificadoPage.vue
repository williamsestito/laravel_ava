<script setup lang="ts">
import { ref } from 'vue'

const numeroCertificado = ref('')
const certificadoValido = ref<boolean | null>(null)

const validarCertificado = () => {
  // Simulação de validação (apenas para fins de frontend)
  if (numeroCertificado.value.trim() === 'ABC123') {
    certificadoValido.value = true
  } else {
    certificadoValido.value = false
  }
}
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

      <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
        <p class="text-gray-700 mb-4 text-center">
          Insira o número do certificado que deseja validar.
        </p>

        <form @submit.prevent="validarCertificado" class="flex flex-col gap-4">
          <input
            v-model="numeroCertificado"
            type="text"
            placeholder="Digite o número do certificado"
            class="p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
            required
          />
          <button
            type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition"
          >
            Validar
          </button>
        </form>

        <div v-if="certificadoValido !== null" class="mt-6 text-center">
          <p
            v-if="certificadoValido"
            class="text-green-700 font-semibold text-lg"
          >
            ✅ Certificado válido!
          </p>
          <p
            v-else
            class="text-red-600 font-semibold text-lg"
          >
            ❌ Certificado inválido.
          </p>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 w-full text-white py-4 text-center mt-auto">
      <p>&copy; 2025 INFA - Todos os direitos reservados.</p>
    </footer>
  </div>
</template>
