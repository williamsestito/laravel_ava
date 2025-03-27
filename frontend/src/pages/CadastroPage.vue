<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <div class="flex flex-1 items-center justify-center">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Faça sua Inscrição</h2>

        <form @submit.prevent="cadastrar">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Nome -->
            <div class="flex flex-col">
              <label for="nome" class="mb-1 font-medium text-green-700">Nome completo:</label>
              <input id="nome" v-model="form.nome" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Data nascimento -->
            <div class="flex flex-col">
              <label for="dt_nascimento" class="mb-1 font-medium text-green-700">Data de Nascimento:</label>
              <input id="dt_nascimento" v-model="form.dt_nascimento" type="date" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- CPF -->
            <div class="flex flex-col">
              <label for="cpf" class="mb-1 font-medium text-green-700">CPF:</label>
              <input id="cpf" v-model="form.cpf" type="text" v-mask="'###.###.###-##'" required class="p-2 rounded-lg shadow-md focus:outline-none" @blur="validateCPF" />
            </div>

            <!-- RG -->
            <div class="flex flex-col">
              <label for="rg" class="mb-1 font-medium text-green-700">RG:</label>
              <input id="rg" v-model="form.rg" type="text" v-mask="'##.###.###-#'" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Email -->
            <div class="flex flex-col">
              <label for="email" class="mb-1 font-medium text-green-700">E-mail:</label>
              <input id="email" v-model="form.email" type="email" required class="p-2 rounded-lg shadow-md focus:outline-none" @blur="validateEmail" />
            </div>

            <!-- Celular -->
            <div class="flex flex-col">
              <label for="celular" class="mb-1 font-medium text-green-700">Celular:</label>
              <input id="celular" v-model="form.celular" type="text" v-mask="'(##) #####-####'" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- CEP -->
            <div class="flex flex-col">
              <label for="cep" class="mb-1 font-medium text-green-700">CEP:</label>
              <input id="cep" v-model="form.cep" type="text" v-mask="'#####-###'" required class="p-2 rounded-lg shadow-md focus:outline-none" @blur="buscarCEP" />
            </div>

            <!-- Endereço -->
            <div class="flex flex-col">
              <label for="logradouro" class="mb-1 font-medium text-green-700">Endereço:</label>
              <input id="logradouro" v-model="form.logradouro" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Número -->
            <div class="flex flex-col">
              <label for="numero" class="mb-1 font-medium text-green-700">Nº:</label>
              <input id="numero" v-model="form.numero" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Complemento -->
            <div class="flex flex-col">
              <label for="complemento" class="mb-1 font-medium text-green-700">Complemento:</label>
              <input id="complemento" v-model="form.complemento" type="text" class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Cidade -->
            <div class="flex flex-col">
              <label for="cidade" class="mb-1 font-medium text-green-700">Cidade:</label>
              <input id="cidade" v-model="form.cidade" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- UF -->
            <div class="flex flex-col">
              <label for="sgl_uf" class="mb-1 font-medium text-green-700">UF:</label>
              <input id="sgl_uf" v-model="form.sgl_uf" type="text" required maxlength="2" class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Nome mãe -->
            <div class="flex flex-col">
              <label for="nome_mae" class="mb-1 font-medium text-green-700">Nome da Mãe:</label>
              <input id="nome_mae" v-model="form.nome_mae" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Nome pai -->
            <div class="flex flex-col">
              <label for="nome_pai" class="mb-1 font-medium text-green-700">Nome do Pai:</label>
              <input id="nome_pai" v-model="form.nome_pai" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Escolaridade -->
            <div class="flex flex-col">
              <label for="escolaridade" class="mb-1 font-medium text-green-700">Escolaridade:</label>
              <select id="escolaridade" v-model="form.escolaridade" required class="p-2 border rounded-lg shadow-md focus:outline-none">
                <option value="">Selecione</option>
                <option>Fundamental Incompleto</option>
                <option>Fundamental Completo</option>
                <option>Médio Incompleto</option>
                <option>Médio Completo</option>
                <option>Superior Incompleto</option>
                <option>Superior Completo</option>
                <option>Pós-graduação</option>
                <option>Mestrado</option>
                <option>Doutorado</option>
              </select>
            </div>

            <!-- Deficiência -->
            <div class="flex flex-col">
              <label for="possui_deficiencia" class="mb-1 font-medium text-green-700">Possui alguma Deficiência?</label>
              <select id="possui_deficiencia" v-model="form.possui_deficiencia" class="p-2 border rounded-lg shadow-md focus:outline-none">
                <option value="0">Não</option>
                <option value="1">Sim</option>
              </select>
            </div>

            <!-- Descrição Deficiência -->
            <div v-if="form.possui_deficiencia === '1'" class="flex flex-col md:col-span-2">
              <label for="detalhes_deficiencia" class="mb-1 font-medium text-green-700">Descreva:</label>
              <input id="detalhes_deficiencia" v-model="form.detalhes_deficiencia" type="text" required class="p-2 rounded-lg shadow-md focus:outline-none" />
            </div>

            <!-- Senha -->
            <div class="flex flex-col relative">
              <label for="senha" class="mb-1 font-medium text-green-700">Senha:</label>
              <input :type="showPassword ? 'text' : 'password'" id="senha" v-model="form.senha" required class="p-2 rounded-lg shadow-md focus:outline-none" />
              <button type="button" @click="showPassword = !showPassword" class="absolute right-3 top-9 text-green-600">
                <svg v-if="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.357-4.192m3.799-2.527A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-1.201 2.568M15 12a3 3 0 11-6 0 3 3 0 016 0zM3 3l18 18" />
                </svg>
              </button>
            </div>

            <!-- Repetir senha -->
            <div class="flex flex-col relative">
              <label for="senha2" class="mb-1 font-medium text-green-700">Repita a senha:</label>
              <input :type="showPassword2 ? 'text' : 'password'" id="senha2" v-model="form.senha2" required class="p-2 rounded-lg shadow-md focus:outline-none" />
              <button type="button" @click="showPassword2 = !showPassword2" class="absolute right-3 top-9 text-green-600">
                <svg v-if="showPassword2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.357-4.192m3.799-2.527A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-1.201 2.568M15 12a3 3 0 11-6 0 3 3 0 016 0zM3 3l18 18" />
                </svg>
              </button>
            </div>

          </div>

          <!-- Termos -->
          <div class="flex items-center mt-4">
            <input id="termos" v-model="form.termos" type="checkbox" :disabled="!allFieldsValid" class="mr-2" />
            <label for="termos">Concordo com os <a href="#" class="text-green-600">Termos e Condições Gerais</a>
              <span v-if="!allFieldsValid" class="text-red-500 text-sm block">Preencha tudo corretamente para aceitar.</span>
            </label>
          </div>

          <!-- Botão -->
          <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold mt-4 hover:bg-green-700 transition-colors" :disabled="!form.termos">
            Finalizar Inscrição
          </button>
        </form>
      </div>
    </div>
  </div>
</template>


<script>
import { mask } from 'vue-the-mask'
import axios from 'axios'
import Swal from 'sweetalert2'

export default {
  directives: { mask },
  data() {
    return {
      form: {
        nome: '',
        dt_nascimento: '',
        cpf: '',
        rg: '',
        email: '',
        celular: '',
        cep: '',
        logradouro: '',
        numero: '',
        complemento: '',
        cidade: '',
        sgl_uf: '',
        nome_mae: '',
        nome_pai: '',
        escolaridade: '',
        possui_deficiencia: '0',
        detalhes_deficiencia: '',
        senha: '',
        senha2: '',
        termos: false
      },
      showPassword: false,
      showPassword2: false
    }
  },
  computed: {
    allFieldsValid() {
      const f = this.form
      const basicFilled =
        f.nome && f.dt_nascimento && f.cpf && f.rg && f.email && f.celular &&
        f.cep && f.logradouro && f.numero && f.cidade && f.sgl_uf &&
        f.nome_mae && f.nome_pai && f.escolaridade && f.senha && f.senha2 &&
        (f.possui_deficiencia === '0' || (f.possui_deficiencia === '1' && f.detalhes_deficiencia)) &&
        this.validateEmailFormat(f.email) &&
        this.validateCPFFormat(f.cpf) &&
        f.senha === f.senha2

      return basicFilled
    }
  },
  methods: {
    validateEmail() {
      if (!this.validateEmailFormat(this.form.email)) {
        Swal.fire({
          icon: 'error',
          title: 'E-mail inválido!',
          text: 'Por favor, informe um e-mail válido.'
        })
      }
    },
    validateEmailFormat(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      return re.test(email)
    },
    validateCPF() {
      const cpf = this.form.cpf.replace(/\D/g, '')
      if (cpf.length !== 11) {
        Swal.fire({
          icon: 'error',
          title: 'CPF inválido!',
          text: 'Por favor, informe um CPF válido.'
        })
        return
      }
      let sum = 0
      for (let i = 0; i < 9; i++) {
        sum += parseInt(cpf.charAt(i)) * (10 - i)
      }
      let check = (sum * 10) % 11
      if (check === 10 || check === 11) check = 0
      if (check !== parseInt(cpf.charAt(9))) {
        Swal.fire({
          icon: 'error',
          title: 'CPF inválido!',
          text: 'Número do CPF inválido.'
        })
        return
      }
      sum = 0
      for (let i = 0; i < 10; i++) {
        sum += parseInt(cpf.charAt(i)) * (11 - i)
      }
      check = (sum * 10) % 11
      if (check === 10 || check === 11) check = 0
      if (check !== parseInt(cpf.charAt(10))) {
        Swal.fire({
          icon: 'error',
          title: 'CPF inválido!',
          text: 'Número do CPF inválido.'
        })
      }
    },
    validateCPFFormat(cpf) {
      return cpf.replace(/\D/g, '').length === 11
    },
    async buscarCEP() {
      const cep = this.form.cep.replace('-', '')
      if (cep.length !== 8) {
        Swal.fire({
          icon: 'error',
          title: 'CEP inválido!',
          text: 'Digite um CEP válido com 8 dígitos.'
        })
        return
      }
      try {
        const res = await axios.get(`https://viacep.com.br/ws/${cep}/json/`)
        if (res.data.erro) {
          Swal.fire({
            icon: 'error',
            title: 'CEP não encontrado!',
            text: 'Verifique se o CEP foi digitado corretamente.'
          })
          return
        }
        this.form.logradouro = res.data.logradouro || ''
        this.form.cidade = res.data.localidade || ''
        this.form.sgl_uf = res.data.uf || ''
        this.form.complemento = res.data.complemento || ''
      } catch (e) {
        Swal.fire({
          icon: 'error',
          title: 'Erro ao buscar CEP!',
          text: 'Tente novamente mais tarde.'
        })
      }
    },
    cadastrar() {
      if (!this.allFieldsValid) {
        Swal.fire({
          icon: 'error',
          title: 'Campos obrigatórios!',
          text: 'Preencha todos os campos corretamente antes de continuar.'
        })
        return
      }
      if (!this.form.termos) {
        Swal.fire({
          icon: 'warning',
          title: 'Aceite os Termos!',
          text: 'Você precisa aceitar os Termos e Condições para continuar.'
        })
        return
      }
      // Simula envio e sucesso
      Swal.fire({
        icon: 'success',
        title: 'Inscrição realizada!',
        text: 'Seu cadastro foi concluído com sucesso.'
      })
      console.log('Formulário enviado:', this.form)
    }
  }
}
</script>

