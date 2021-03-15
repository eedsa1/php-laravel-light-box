		#########################
		### Efeito lightbox 1 ###
		#########################

Para utilizar o efeito devemos baixar a lib lightbox acessível em: https://github.com/lokesh/lightbox2 (pasta extras)

-Basicamente deve-se colocar os arquivos lightbox.min.css e lightbox-plus-jquery.min.js (ambos nas pastas dist/css e dist/js) na pasta onde estão
 localizados os scripts e os CSSs da aplicação.

-As imagens de navegação (pasta dist/images) devem ser colocadas também no diretório de imagens. Com isso o arquivo lightbox.min.css deve
 ser modificado para ter o caminho correto das imagens.

-Devemos incluir os elementos "data-lightbox" e "data-title" respectivamente para fazer funcionar o efeito lightbox em uma imagem e para 
 gerar um título abaixo da imagem selecionada.