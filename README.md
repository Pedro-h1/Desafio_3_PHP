<div align="center">
  <img src="https://capsule-render.vercel.app/api?type=waving&height=260&color=777BB4&text=🔐+LOGIN+COM+PHP&fontColor=ffffff&fontSize=38&fontAlignY=38&desc=👤+Desafio+3+-+Perfil+de+Usuário+com+Banco+de+Dados&descAlignY=58&descSize=16&animation=fadeIn" width="100%" />
</div>

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🔐+Sobre+o+Desafio;👤+Perfil+de+Usuário+com+Banco+de+Dados)](https://git.io/typing-svg)

</div>

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=📋+Descrição+da+Atividade)](https://git.io/typing-svg)

</div>

<div align="center">

Este projeto consiste na criação de um **sistema de login com PHP e MySQL**, permitindo que usuários cadastrados no banco de dados realizem a autenticação e acessem uma página de perfil personalizada.

Durante o login, o usuário informa seu **nome de usuário**, **senha** e escolhe uma **cor de fundo** para o perfil. Após a validação dos dados, o sistema armazena as informações em uma sessão e redireciona para a página de perfil.

</div>

---

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🎯+Objetivo+da+Atividade)](https://git.io/typing-svg)

</div>

<div align="center">

Desenvolver um sistema de autenticação utilizando **PHP**, **MySQL** e **sessões**, consultando os usuários cadastrados na tabela `usuarios` do banco `exercicio` e permitindo a personalização da página de perfil por meio de uma cor escolhida no formulário de login.

</div>

---

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=📝+Funcionalidades+Implementadas)](https://git.io/typing-svg)

</div>

<div align="center">

🔐 **Login:** formulário com os campos Usuário, Senha e Cor de Fundo.<br>
🗄️ **Consulta ao Banco:** verifica se o usuário e a senha informados existem na tabela `usuarios`.<br>
✅ **Autenticação:** quando os dados estão corretos, inicia uma sessão para o usuário.<br>
🎨 **Personalização:** armazena a cor escolhida e aplica essa cor como fundo da página de perfil.<br>
👤 **Perfil:** exibe uma mensagem de boas-vindas com o nome do usuário autenticado.<br>
🛡️ **Controle de Acesso:** impede a abertura do perfil quando não existe uma sessão ativa.<br>
🚪 **Logout:** encerra a sessão e retorna à página de login.<br>
⚠️ **Mensagens:** informa quando as credenciais estão incorretas ou ocorre algum problema na conexão/consulta.

</div>

---

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🔧+Especificações+Técnicas)](https://git.io/typing-svg)

</div>

<div align="center">

| Requisito | Implementação |
|---|---|
| 🐘 Linguagem | PHP |
| 🌐 Estrutura | HTML5 |
| 🗄️ Banco de Dados | MySQL |
| 🔌 Conexão | MySQLi |
| 📦 Banco utilizado | `exercicio` |
| 📋 Tabela | `usuarios` |
| 🔎 Consulta | `SELECT` com parâmetros preparados |
| 🔐 Autenticação | Sessões PHP (`$_SESSION`) |
| 🎨 Personalização | Seletor de cor (`input type="color"`) |
| ↪️ Navegação | Redirecionamento com `header()` |

</div>

---

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=📂+Arquivos+da+Atividade)](https://git.io/typing-svg)

</div>

<div align="center">

| Arquivo | Descrição |
|---|---|
| [`15d_login.php`](15d_login.php) | Formulário de login, consulta ao banco de dados e criação da sessão. |
| [`15d_perfil.php`](15d_perfil.php) | Página protegida que exibe o usuário e a cor de fundo escolhida. |
| [`15d_logout.php`](15d_logout.php) | Encerra a sessão e redireciona para a página de login. |

</div>

---

<div align="center">

[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🗄️+Banco+de+Dados)](https://git.io/typing-svg)

</div>

<div align="center">

O sistema utiliza o banco de dados **`exercicio`** e a tabela **`usuarios`**, criados na atividade anterior.

| Campo | Utilização |
|---|---|
| `usuario` | Nome utilizado para identificar o usuário. |
| `senha` | Senha utilizada durante a autenticação. |

</div>

<div align="center">
  <img src="https://capsule-render.vercel.app/api?type=waving&height=140&color=777BB4&section=footer&animation=fadeIn" width="100%" />
</div>
