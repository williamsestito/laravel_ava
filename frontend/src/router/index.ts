// src/router/index.ts
import { createRouter, createWebHistory } from 'vue-router'

// Páginas do sistema
import Home from '@/pages/HomePage.vue'
import Login from '@/pages/LoginPage.vue'
import CadastroPage from '@/pages/CadastroPage.vue'
import CursoDashboard from '@/pages/CursoDashboard.vue'
import Dashboard from '@/pages/DashboardPage.vue'
import QuemSomos from '@/pages/QuemSomos.vue'
import Ambientacao from '@/pages/Ambientacao.vue'
import Biblioteca from '@/pages/BibliotecaMateriais.vue'
import PraticasAplicadas from '@/pages/PraticasAplicadas.vue'
import Atividades from '@/pages/Atividades.vue'
import Avaliacao from '@/pages/Avaliacao.vue'
// import ProfessorDashboard from '@/pages/ProfessorDashboard.vue'
import PerfilProfessor from '@/pages/PerfilProfessor.vue'
import AlunosMatriculados from '@/pages/AlunosMatriculados.vue'
import DashboardCursoEdicao from '@/pages/DashboardCursoEdicao.vue'
import AdicionarConteudo from '@/pages/AdicionarConteudo.vue'
import GerenciamentoAlunos from '@/pages/GerenciamentoAlunos.vue'
import DashboardAdmin from '@/pages/DashboardAdmin.vue'
import CadastroCursos from '@/pages/CadastroCursos.vue'
import ContatoPage from '@/pages/ContatoPage.vue'
import CertificadoPage from '@/pages/CertificadoPage.vue'
import CursosPage from '@/pages/CursosPage.vue'
import DetailsCurso from '@/pages/DetailsCurso.vue'

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/login', name: 'Login', component: Login },
  { path: '/cadastro', name: 'CadastroPage', component: CadastroPage },
  { path: '/dashboard', name: 'Dashboard', component: Dashboard },
  { path: '/dashboardcurso', name: 'CursoDashboard', component: CursoDashboard },
  { path: '/dashboardadmin', name: 'DashboardAdmin', component: DashboardAdmin },
  { path: '/quemsomos', name: 'QuemSomos', component: QuemSomos },
  { path: '/contato', name: 'ContatoPage', component: ContatoPage },
  { path: '/cursos', name: 'CursosPage', component: CursosPage },
  { path: '/detalhescurso/:id', name: 'DetailsCurso', component: DetailsCurso, props: true },
  { path: '/certificado', name: 'CertificadoPage', component: CertificadoPage },
  { path: '/curso/modulo/1', name: 'Ambientacao', component: Ambientacao },
  { path: '/curso/modulo/2', name: 'BibliotecaMateriais', component: Biblioteca },
  { path: '/curso/modulo/3', name: 'PraticasAplicadas', component: PraticasAplicadas },
  { path: '/curso/modulo/4', name: 'Atividades', component: Atividades },
  { path: '/curso/modulo/5', name: 'Avaliacao', component: Avaliacao },
  // { path: '/professor-dashboard', name: 'ProfessorDashboard', component: ProfessorDashboard },
  { path: '/professor/perfil', name: 'PerfilProfessor', component: PerfilProfessor },
  { path: '/alunos-matriculados', name: 'AlunosMatriculados', component: AlunosMatriculados },
  { path: '/dashboardcursoedicao', name: 'DashboardCursoEdicao', component: DashboardCursoEdicao },
  { path: '/adicionar-conteudo', name: 'AdicionarConteudo', component: AdicionarConteudo },
  { path: '/gerenciamento-alunos', name: 'GerenciamentoAlunos', component: GerenciamentoAlunos },
  { path: '/cadastro-curso', name: 'CadastroCursos', component: CadastroCursos }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
