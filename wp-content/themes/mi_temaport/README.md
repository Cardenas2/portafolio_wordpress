# PORTAFOLIO DISEÑO FRONT END

## Introducción
Este es mi trabajo final de el curso intensivo para ser diseñadora front end , en este sitio web van a ver mis trabajos que he realizado desde que comence a trabajar en diseño grafico multimedia.

### Idea Principal
El trabajo cuenta con cuatro paginas, PORTAFOLIO, ALGO DE MI, BLOG y por último CONTACTO.
En la primera seccion de portafolio muestro mis principales trabajos tanto de diseño gráfico como de fotografía. En la segunda seccion muestro mi curriculum, loss lugares en kllos que he trabajado , y lo que me gusta hacer. En la seccion de blog muestro una serie de noticias relacionadas al diseño grafico y web.
La última seccion es de contacto donde se incluye un mapa con direccion y un formulario de contacto para futuros trabnajos.

Las fuentes que utilice fueron 2, montserrat para los titulos y dosis para los parrafos.

Los estilos fueron guardados en un archivo style.css que a su vez esta guardado dentro de la carpeta css dentro de assets donde tambien estan un archivo extra de los estilos de el pluginde masonry para las imagenes de portafolio. y 
~~~css
*{
  margin:0;
  padding: 0;
}

body{
  font-family: 'Montserrat', sans-serif;

}

h1{
  font-size: 1.5em;
  color:#f9f7f7;
}

@media screen and (min-width: 570px){
  h1{
  font-size: 2.5em;
  color:#f9f7f7;
  }
}

h2{
  font-size: 1.5em;
  color:#1687a7;
  font-weight: bold;
}
h3{
  font-size: 1em;
  color: #1687a7;
}
h3.grid__titulo{
  font-size: 1.2em;
}

figure.grid__imageIndiv h3.grid__titulo {
  margin-top: 50px;
}

h4{
  font-size: 1em;
}
p{
  font-size: 1em;
}
.menuPortafolio1 , .menuPortafolio2{
  background-color: #f9f7f7;

}
.menuPortafolio1 li a:hover{
  list-style: none;
  text-decoration: none;
}
.menuPortafolio2 a{
  color:#dd0a35;

}
.menuPortafolio2 ul{
  list-style:none;
}
.menuPortafolio1{
  display: none;
}

@media screen and (min-width: 570px){
  .menuPortafolio1{
    display:block;
  }
  .menuPortafolio2{
    display:none;
  }

}

.menuPortafolio1 a {
    color: #dd0a35;
    padding: 0 0.5em;
}
.menuPortafolio2_btn{
  color:#dd0a35 !important;
}

.submenu ul{
  margin: 2em auto;
}
.submenu a{
  color:#dd0a35;
  padding: 0 0.5em;
  text-decoration:none;
}

@media screen and (min-width: 570px){
  .sub-menu{

  padding: 1em 0;
}
}
ul.sub-menuPortafolio a{
  color:#dd0a35;
  padding: 1em;
}
.icon-amburguesa{
  padding: 0.5em;
  border-radius: 5px;
  border:2px solid #dd0a35 !important;
}
.menuPortafolio1 img , .menuPortafolio2 img{
  width: 80px;
}
.imgPrincipal{
  position: relative;
  height: 250px;
  background:url(../images/calle.jpg);
}
@media screen and (min-width: 570px){
  .imgPrincipal{
    width: 95%;
    height: 400px;
    background-repeat: no-repeat;
    background-size: cover;
    margin:1em auto;
  }
}

.portafolio{
  padding: 2em 0;
  border-top: 2px solid #dd0a35;
  background-color:#fefefe; 
}

@media screen and (min-width: 570px){
  .portafolio{
    margin:2em auto;
  }
}
@media screen and (min-width: 760px){
  .portafolio{
    margin:4em auto;
  }
}

p{  
  font-size: 1em;
  font-family: 'Dosis', sans-serif;
}

.imgPrincipal__textoEscrito{
  font-weight: bold;
  color:#f9f7f7;
  padding: 3em 0;
}
.menuPortafolio1__logo , .menuPortafolio2__logo{
  width: 80px;
  height: 80px;
  background-color: #050016;
  position: relative;
}

.footerPortafolio{
  bottom: 0;
  padding: 1em;
  background-color: #dd0a35;
}

.footer__iconos{
  margin:1em 0;
  font-size: 1.5em;
}
.footer__iconos--ind,.footer__iconos--ind2,.footer__iconos--ind3{
  width: 50px;
  height: 50px;
  padding: 0.5em;
  border-radius: 50%;
  color:#f9f7f7;
  
}
.footer__iconos--ind{
  background-color: #014955;
}
.footer__iconos--ind2{
  background-color: #55acee;  
}
.footer__iconos--ind3{
  background-color:#007bb5; 
}
.footer__contactame a{
  font-weight: bold;
  color:#f9f7f7;
  text-decoration: none;

}
@media screen and (min-width: 570px){
  .footer__contactame a{
  text-align: left;
  }
}


/*pagina sobre mi*/
.curriculum{
  margin:0 auto;
}

@media screen and (min-width: 570px){
  .curriculum{
  margin:2em auto;
}
}

.curriculumDatos{
  padding: 1em;
  border-radius: 0.3em;
  border:1px solid #dfdcdc;
}
img.curriculumDatos__imagen{
  border:1px solid #dd0a35;
}
.curriculumDatos__acerca{
  padding: 2em 1em;
}

@media screen and (min-width: 760px){
  .datosindividuales{
  padding: 4em 0;
  }
}


/*blog*/

.blog{
  width: 100%;
}
.borde-caj{
  padding: 1em;
  margin-top: 1em;
  border:1px solid #D8D8D8;
}

.btn-color{
  background-color: #014955!important;
  color:#efefef;
}

/*Contacto*/

@media screen and (min-width: 570px){
  .contacto__mapa{
  padding: 1em 0 2em 0;}
}

/*boton para subir*/
.btnInicio{
  position:fixed;
  z-index: 20;
  bottom: 60px;
  color:#efefef;
  font-size: 1em;
  left:1rem;
  transition: opacity 0.3s;
}

.btnInicio__icono{
  position: absolute;
  width: 50px;
  height: 50px;
  font-size:1em;
  color:#e4d1d3;
  background-color: #1687a7;
}


/*texto magico*/

.textoEscrito__magico{
  position: relative;
}
.textoEscrito__magico > span{
  opacity: 0;
  transition: all 0.5s;
  position: absolute;
  white-space: nowrap;
  transform: translateY(-10px);
}

.textoEscrito__magico >.current{
  opacity: 1;
  transform: translateY(0);
}

/*NOTICIAS BLOG*/

.noticias__img{
  width: 95%;
  background-repeat: no-repeat;
  background-size: cover;
  background-size: 100%;
  margin:1em auto;

}

.noticia__icono{
  font-size: 1.8em;
  color: #1687a7;
  border:1px solid #1687a7;
  border-radius: 10px;
  padding: 0.5em;
}

.noticia__icono:hover{
  background-color: #1687a7;
  color:#f9f7f7;
}



~~~


### Archivo js
En esta carpeta se encuentra los jquery utilizados archivo de dos plugin mas el archivo genral llamado apps.js. 
