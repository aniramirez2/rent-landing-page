Para melhor aproveitamento do tema é importante consultar a documentação do [Boostrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/). Além disso, para padronização do desenvolvimento deve-se seguir o [Theme Developer Handbook](https://developer.wordpress.org/themes/), principalmente a seção sobre [Classic Themes](https://developer.wordpress.org/themes/classic-themes/).

# Objetivo
O Stage Base Theme tem como objetivo fornecer uma estrutura básica para um tema componentizado, ou seja, cujos elementos de layout são criados isoladamente de maneira encapsulada e acoplados à essa base de acordo com a necessidade do cliente.

# Criação de novo tema
- Para cada novo projeto um novo repositório pode ser criado utilizando este como template. Lembre-se de adicionar todos os desenvolvedores do time como colaboradores no novo projeto. 
- Rode o comando abaixo para processar todos os arquivos sass
```
sass --watch novo-tema/assets/scss:novo-tema/assets/css novo-tema/global-templates:novo-tema/assets/css novo-tema/template-parts:novo-tema/assets/css novo-tema/page-templates:novo-tema/assets/css
```
- Para cada novo template ou componente uma pasta contendo todos os arquivos relacionados (php, sass, js, etc) a ele deve ser criada

## Descrição das pastas
- `/assets/scss`: contém todos os estilos globais
- `/assets/fonts`: arquivos das fontes. Indicado woff2
- `/global-templates`: cada pasta dentro desta é responsável por um template global do Wordpress (404, single, archive, etc). Na raiz do tema deve ser criado um arquivo php, cujo nome segue as regras do Wordpress e cujo conteúdo define as condições de aplicação do template
    - todos os arquivos sass aqui devem ser processados automaticamente e importados individualmente no arquivo `/inc/scripts-loader.php`
    - no arquivo sass de cada page-template devem ser importados os estilos globais (buttons.scss, theme.scss) além do estilo de todos os componentes utilizados na página (incluindo header e footer)
- `/page-templates`: cada pasta dentro desta é responsável pelo modelo de uma página do WP. Na raiz dela deve ser criado um arquivo com nome `page_{nome-da-pagina}.php` que chama os arquivos de layout do modelo
    - todos os arquivos sass aqui devem ser processados automaticamente e importados individualmente no arquivo `/inc/scripts-loader.php`
    - no arquivo sass de cada page-template devem ser importados os estilos globais (buttons.scss, theme.scss) além do estilo de todos os componentes utilizados na página (incluindo header e footer)
- `/template-parts`: contém todos os componentes do tema, incluindo o header e o footer
    - todos os arquivos sass aqui são partials, ou seja, o título deve ser `_{nome-do-componente}`

## Arquivo _theme.scss 
Localizado em `/assets/scss/_theme.scss` esse arquivo é importado em todas as páginas do tema, portanto deve conter estilos essenciais. Para mais informações, ler [este documento](https://getbootstrap.com/docs/5.2/customize/sass/).

# Manutenção
- No ambiente local deve-se instalar todas as dependências com o comando `npm install` dentro da pasta `/assets`
- Rodar o comando abaixo para processar todas as mudanças do sass
```
sass --watch novo-tema/assets/scss:novo-tema/assets/css novo-tema/global-templates:novo-tema/assets/css novo-tema/template-parts:novo-tema/assets/css novo-tema/page-templates:novo-tema/assets/css
```