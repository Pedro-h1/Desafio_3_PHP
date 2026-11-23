<div align="center">
    <img src="https://capsule-render.vercel.app/api?type=waving&height=260&color=0:777BB4,100:50547D&text=🔐+LOGIN+COM+PHP&fontColor=ffffff&fontSize=38&fontAlignY=38&desc=👤+Desafio+3+-+Perfil+de+Usuário+com+Banco+de+Dados&descAlignY=58&descSize=16&animation=fadeIn" width="100%" />
</div>
<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🔐+Sobre+o+Desafio;👤+Perfil+de+Usuário+com+Banco+de+Dados" />
</div>
<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=📋+Descrição+da+Atividade" />
</div>
<div align="center">
    <p>Este projeto consiste na criação de um <strong>sistema de login com PHP e MySQL</strong>, permitindo que usuários cadastrados no banco de dados realizem a autenticação e acessem uma página de perfil personalizada.</p>
    <p>Durante o login, o usuário informa seu <strong>nome de usuário</strong>, <strong>senha</strong> e escolhe uma <strong>cor de fundo</strong> para o perfil. Após a validação dos dados, o sistema armazena as informações em uma sessão e redireciona para a página de perfil.</p>
</div>

---

<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🎯+Objetivo+da+Atividade" />
</div>
<div align="center">
    <p>Desenvolver um sistema de autenticação utilizando <strong>PHP</strong>, <strong>MySQL</strong> e <strong>sessões</strong>, consultando os usuários cadastrados na tabela `usuarios` do banco `exercicio` e permitindo a personalização da página de perfil por meio de uma cor escolhida no formulário de login.</p>
</div>

---

<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=📝+Funcionalidades+Implementadas" />
</div>
<div align="center">
    <p>🔐 <strong>Login:</strong> formulário com os campos Usuário, Senha e Cor de Fundo.</p>
    <p>🗄️ <strong>Consulta ao Banco:</strong> verifica se o usuário e a senha informados existem na tabela `usuarios`.</p>
    <p>✅ <strong>Autenticação:</strong> quando os dados estão corretos, inicia uma sessão para o usuário.</p>
    <p>🎨 <strong>Personalização:</strong> armazena a cor escolhida e aplica essa cor como fundo da página de perfil.</p>
    <p>👤 <strong>Perfil:</strong> exibe uma mensagem de boas-vindas com o nome do usuário autenticado.</p>
    <p>🛡️ <strong>Controle de Acesso:</strong> impede a abertura do perfil quando não existe uma sessão ativa.</p>
    <p>🚪 <strong>Logout:</strong> encerra a sessão e retorna à página de login.</p>
    <p>⚠️ <strong>Mensagens:</strong> informa quando as credenciais estão incorretas ou ocorre algum problema na conexão/consulta.</p>
</div>

---

<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🔧+Especificações+Técnicas" />
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
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=📂+Arquivos+da+Atividade" />
</div>
<div align="center">

| Arquivo | Descrição |
|---|---|
| [`15d_login.php`](assets/15d_login.php) | Formulário de login, consulta ao banco de dados e criação da sessão. |
| [`15d_perfil.php`](assets/15d_perfil.php) | Página protegida que exibe o usuário e a cor de fundo escolhida. |
| [`15d_logout.php`](assets/15d_logout.php) | Encerra a sessão e redireciona para a página de login. |

</div>

---

<div align="center">
    <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=24&duration=8000&pause=1500&startDelay=0&color=777BB4&center=true&vCenter=true&width=750&lines=🗄️+Banco+de+Dados" />
</div>
<div align="center">
    <p>O sistema utiliza o banco de dados <strong>`exercicio`</strong> e a tabela <strong>`usuarios`</strong>, criados na atividade anterior.</p>

| Campo | Utilização |
|---|---|
| `usuario` | Nome utilizado para identificar o usuário. |
| `senha` | Senha utilizada durante a autenticação. |

</div>
<div align="center">
    <img src="https://capsule-render.vercel.app/api?type=waving&height=140&color=0:50547D,100:777BB4&section=footer&animation=fadeIn" width="100%" />
</div>
