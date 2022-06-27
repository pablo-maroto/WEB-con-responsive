function menuHamburguesa(){
    var menu = document.getElementById("btn_principal")
    var menuDos = document.getElementById("btn_secundaria")
    if(menu.style.display == 'block' &&  menuDos.style.display == 'block'){
        menu.style.display = 'none'
        menuDos.style.display = 'none'
    } else {
        menu.style.display = 'block'
        menuDos.style.display = 'block'
    }
    
}
function botonperfil(){
    var SuNombreDeUsuario = prompt('Dinos ¿Cuál es tu Nickname Gamer?')

alert('Welcome ' + SuNombreDeUsuario + ' !!!')

    var Invitacion = (SuNombreDeUsuario +' te invitamos que conozcas nuestro sitio.')
    var Edad = prompt('¿Creamos un perfil para seleccionar tus preferencias?   Contanos ¿cuántos años tienes?')
    var GeneroGamer = prompt('¿Qué tipo de género  gamer te gusta mas? Acción, Aventura,Conducción, Deportes, Estrategia, RPG, Simulación, Otro.')
    var Perfil = ('TU PERFIL ES')

var Llegada = prompt('¿Cómo llegaste a nuestro sitio?  Amigos, Publicidad, Redes Sociales.')
var JuegoFavorito = prompt('Por último dinos ¿Cuál es tu juego favorito? ')

var Email = prompt ('Si lo deseas dejanos tu e-mail en el formulario de la sección "News" para enviarte alertas sobre lo nuevo, lo viejo y todo lo que tenemos para ofrecerte.')

alert('¡¡¡ Genial ' + SuNombreDeUsuario + ' a navegar !!!')


var important1 = document.getElementById('Important1')
                important1.innerHTML = '<h6>' + Invitacion + '</h6>' + 
                                        '<h5>' + Perfil + '</h5>' +
				                        'Edad : ' + Edad +
				                        '<p>Genero Gamer : '+ GeneroGamer + '</p>';
                      
var important2 = document.getElementById('Important2')            
                important2.innerHTML ='<p>Lazo que nos une : '+ Llegada +'</p>' +
				                        '<p>Tu juego favorito es : ' + JuegoFavorito + '</p>' +
				                        '<p>Buenísimo ' + SuNombreDeUsuario + ', ya tenemos todos tus datos, comencemos a navegar, </p>' +
				                        '<p>¡¡¡ GRACIAS POR COMPLETAR TUS DATOS !!!</p>'; 
}

function retroOver(elemento){
    var r1Over = document.getElementById(elemento)
    r1Over.style.fontSize = '40px'
    r1Over.style.backgroundColor = '#000000'

}
function retroOut(elemento){
    var r1Out = document.getElementById(elemento)
    r1Out.style.fontSize = '30px'
    r1Out.style.backgroundColor = '#ff7b00'
}
