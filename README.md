```markdown
# Projeto de Extensão II - Engenharia de Software

![Badge Status](https://img.shields.io/badge/Status-Concluído-green)
![Tecnologia Principal](https://img.shields.io/badge/Laravel-Framework-orange?logo=laravel)
![Banco de Dados](https://img.shields.io/badge/MySQL-Database-blue?logo=mysql)

Este repositório contém o projeto desenvolvido para a disciplina **Projeto de Extensão II** do curso de Engenharia de Software. A iniciativa visou modernizar a infraestrutura tecnológica de uma instituição, integrando soluções de rede, armazenamento em nuvem e desenvolvimento de software para otimizar processos administrativos e prevenir perda de dados.

---

## 📋 Visão Geral do Projeto

O projeto consistiu em três pilares principais:
1. **Configuração de Rede**:  
   - Implementação de DHCP para distribuição automática de endereços IP.  
   - Configuração de roteadores em modo *Access Point* para ampliação da cobertura de rede.  

2. **Backup em Nuvem**:  
   - Migração de arquivos essenciais para o serviço Terabox, garantindo redundância e acesso remoto.  
   - Compatibilidade com sistemas Windows, priorizando facilidade de uso pela instituição.  

3. **Sistema Web Interno**:  
   - Desenvolvimento de uma aplicação para cadastro de alunos utilizando **Laravel** (PHP) e **MySQL**.  
   - Funcionalidades: registro de dados pessoais, contatos, endereço, observações e gerenciamento de informações críticas.  

---

## 🛠️ Funcionalidades do Sistema

- **Cadastro de Alunos**:  
  - Campos inclusos: nome completo, nome dos pais, endereço, telefone, e-mail e observações customizáveis.  
  - Interface intuitiva para consulta e edição de registros.  

- **Segurança e Integridade**:  
  - Autenticação de usuários para acesso ao sistema.  
  - Backup automatizado de dados para o Terabox.  

---

## 🚀 Tecnologias Utilizadas

- **Frontend**: Blade (Laravel), HTML/CSS, JavaScript.  
- **Backend**: PHP Laravel (MVC), Eloquent ORM.  
- **Banco de Dados**: MySQL.  
- **Infraestrutura**: DHCP, Roteadores (Modo Access Point), Terabox (Armazenamento em Nuvem).  
- **Ferramentas**: Composer, Git, XAMPP/MySQL Workbench.  

---

## 📥 Instalação e Execução

1. **Pré-requisitos**:  
   - PHP ≥ 8.1, Composer, MySQL, Servidor web (ex: Apache).  

2. **Clonar o Repositório**:  
   ```bash
   git clone https://github.com/phtavaresleite/projeto_extensao.git
   cd projeto_extensao
   ```

3. **Instalar Dependências**:  
   ```bash
   composer install
   ```

4. **Configurar Ambiente**:  
   - Renomear `.env.example` para `.env` e ajustar as variáveis de ambiente (ex: credenciais do MySQL).  
   ```bash
   php artisan key:generate
   ```

5. **Migrar Banco de Dados**:  
   ```bash
   php artisan migrate --seed
   ```

6. **Iniciar Servidor**:  
   ```bash
   php artisan serve
   ```
   Acesse `http://localhost:8000` no navegador.  

---

## 🤝 Contribuidores

- [Paulo Henrique](https://github.com/phtavaresleite)  
- *Colaboradores ou orientadores, se aplicável.*  

---

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para detalhes.  

---

## 🌐 Contexto Acadêmico

Desenvolvido como parte do projeto de extensão **Anhanguera**, com o objetivo de integrar conhecimentos teóricos da Engenharia de Software a demandas reais de organizações, promovendo inovação e responsabilidade social tecnológica.  
```
