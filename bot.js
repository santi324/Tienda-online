$(document).ready(function () {
			var mem = [];
			var novia = 0;
			var unk = []
				$('.out').hide(0)

			setTimeout(function() {

				$('.out').text('Oye!!, Fijate en estas ofertas estoy segura de que te interesaran ;)')
				$('.out').show(500)
			}, 4000)
			$('.e').click(function() {
				var msj = $('#bot').val();
				$('.out').text('Pensando...');
				setTimeout(function() {
					if (!mem.includes('hola') && msj.includes('hola')) {
					$('.out').text('Hola!, Como estas en que puedo ayudarte? :)')
					mem.push('hola')
					} 
					else if (mem.includes('hola') && msj.includes('hola')){
						$('.out').text('Eres muy amable. Te interesaria observar nuestra coleccion de ofertas?')
					}

					else if (msj.includes('producto') || msj.includes('Producto')) {
						$('.out').html('Si deseas conocer nuestras ofertas para este mes usa este enlace <a href="#">Ver ofertas</a>')
					}
					else if (msj.includes('ofertas') && msj.includes('camisas') || (msj.includes('ofertas') && msj.includes('tienen'))) {
						$('.out').html('Aqui estan nuestras ofertas en camisas para hombre <a href="#">Ver ofertas</a>, <img src="m3.jpg" /> <br /> Parece que te quedara bien. <b>Haz el pedido antes que se agoten</b>')
					}
					else if (msj.includes('edad') || (msj.includes('años') && msj.includes('tenes'))) {
						$('.out').html('Esta no es una conversacion casual por favor hazme preguntas sobre nuestros productos')
					} 
					else if (msj.includes('camisas') || (msj.includes('ropa') && msj.includes('hombre'))) {
						$('.out').html('Sabes tenemos una camisas geniales que podrian interesarte')

					}
					else if ((msj.includes('gatos') && msj.includes('tenes') && msj.includes('?')) || (msj.includes('gatos') && msj.includes('tienes') && msj.includes('?'))){
						$('.out').text('Jaja. lo siento mi existencia no me permite tener mascotas')
					}
					else if ((msj.includes('queres') && msj.includes('ser') && msj.includes('novia')) || (msj.includes('quieres') && msj.includes('ser') && msj.includes('novia')) ){
						$('.out').text('Sabes, hay tantas chicas en el mundo por que yo?')
						var novia = 1;
					}



					else if ((msj.includes('cuanto') && msj.includes('demora') && msj.includes('envio')) || (msj.includes('cuanto') && msj.includes('tarda') && msj.includes('envio'))){
						$('.out').text('El tiempo que demora el envio varia. Dime a donde debemos hacer el envio...')
						var envio = 1;
					}











					else if (novia == 1 && msj.includes('porque') && msj.includes('bonita')){
						$('.out').text('Gracias pero estoy casada con mi trabajo. mira el anillo.')
					}

					else {
						$('.out').text('Lo siento, Tengo un numero limitado de respuestas. tal vez si intentas con otras palabras pueda entenderte')
						unk.push(msj)
					}
				}, 900)

			})
		})
