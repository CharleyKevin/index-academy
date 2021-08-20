<h1 align="center">
    <img alt="IndexAcademy" title="#IndexAcademyLogo" src="./wp-data/index-academy/screenshot.jpg" />
</h1>
<p align="center">Tema wordpress com uso do Docker para ecommerce de cursos online</p>
<br>

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Docker](https://www.docker.com/products/docker-desktop). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### Instruções

### ⏬ Baixando tema Index Academy

```bash
# Clone este repositório
$ git clone <https://github.com/CharleyKevin/index-academy.git>

```

### ⏫ Subir Docker
```bash
# Acesse a pasta do projeto no terminal/cmd
$ cd index-academy

# Suba o docker
$ docker-compose up -d

# Port que seram configuradas automaticamento
Wordpress: ['80:80']
phpmyadmin: ['12000:80']
```

### 📚 Acessar Index Academy
```bash
# Acesse o wordpress <http://localhost>
```

### 🌍 Acessar painel admin do Wordpress
```bash
# Acesse o wordpress <http://localhost/wp-login.php>

login: index-shop-admin
senha: Wb&DPvRYTEzTVbk@Am
```

### ➕ Cadastre novos cursos no menu Posts
```bash
# Acesse o wordpress <http://localhost/wp-admin/post-new.php>
```

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net/)
- [Docker](https://www.docker.com/)
- [MySQL](https://www.mysql.com)
- [Wordpress](https://wordpress.com/)

### Autor
---

<a href="https://blog.rocketseat.com.br/author/thiago/">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/41459674?s=400&u=2d5d347462344dfede260389a750307de776d582&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Charley Kevin</b></sub></a> <a href="https://github.com/CharleyKevin" title="Charley"></a>


Feito com ❤️ por Charley Kevin 👋🏽 Entre em contato!