## Victor Silva Guedes

- sguedes.victor@gmail.com
- https://www.linkedin.com/in/victorsilvaguedes/

# Solução teste full-stack Scot Consultoria

## Passo a passo para rodar a aplicação:

Este guia descreve o passo a passo para rodar a aplicação que é possível cadastrar usuários, e logar no portal de notícias.

## Pré-requisitos

Antes de iniciar, certifique-se de que os seguintes softwares estão instalados:

1. **PHP**: [Baixar PHP](https://www.php.net/downloads.php)
2. **Navegador de internet** (Chrome, Firefox, etc.)
3. **MySQL Server**: [Download MySQL](https://dev.mysql.com/downloads/mysql/)
4. **VS Code**: [Download VS Code](https://code.visualstudio.com/)

## Passo a Passo

### 1. Clonar ou Criar o Projeto

Caso ainda não tenha o código no seu computador, crie um diretório e abra o VS Code nessa pasta.

```sh
mkdir meu_projeto
cd meu_projeto
code .
```

Se o código já estiver disponível, copie os arquivos para a pasta do projeto.

### 2. Criar o Banco de Dados MySQL

1. Acesse o MySQL via terminal ou ferramenta gráfica (como MySQL Workbench).
2. Execute o seguinte comando para criar o banco de dados:

```sql
CREATE DATABASE usuarios;
```

### 3. Configurar a Conexão com o Banco de Dados

No arquivo conexao.php, edite as credenciais de conexão se necessário:

```php
if (!defined('HOST')) {
  define('HOST', 'localhost');
}

if (!defined('USER')) {
  define('USER', 'seu_usuario');
}

if (!defined('PASSWORD')) {
  define('PASSWORD', 'sua_senha');
}

if (!defined('DATABASE')) {
  define('DATABASE', 'usuarios');
}
```

### 4. Configurar o Banco de Dados (extensão mysqli)

É necessário configurar o arquivo do MySQL em php.ini (ou em seu arquivo de configuração do PHP) para que a extensão mysqli esteja ativada.
No arquivo arquivo de configuração (que pode ser visualizado com o comando "php --ini" no terminal), verifique se a linha: ";extension=mysqli
" está com o ponto-e-vírgula. Se estiver, remova-a e salve o arquivo.

### 5. Iniciar servidor PHP

No terminal do VS Code (ou terminal do sistema operacional), dentro do diretório do seu projeto, execute o comando para iniciar o servidor PHP embutido:

```sh
php -S 127.0.0.1:8000
```

### Vídeo demonstrativo

[🎥 Assista ao vídeo](https://github.com/victorSilvaGuedes/teste-scot-back-end/raw/main/demo-teste-backend-scot.mp4)
