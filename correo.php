<?php   		
                var_dump($_POST);
				//Destinatario
				$mail_destinatario = 'contacto@yanopagoluz.mx';
				$subject = 'Solicitud Formulario Solares Energia';
				$headers .= "From: ".$_POST['email']. "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				
				
				
				$cuerpo =           '<html>'.
                                            '<head><title>Email con HTML</title></head>'.
                                            '<body>'.
                                            '<table class="tg">'.
                                              '<tr>
                                                <td style="width:53%">Nombre:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['nombre'].'</td>'.
                                              '</tr>'.
                                              '<tr>
                                                <td style="width:53%">Correo eléctronico:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['email'].'</td>'.
                                              '</tr>'.
                                              '<tr>
                                                <td style="width:53%">Telefono:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['telefono'].'</td>'.
                                              '</tr>'.
                                              '<tr>
                                                <td style="width:53%">Dirección:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['direccion'].'</td>'.
                                              '</tr>'.
                                            '<tr>
                                                <td style="width:53%">Nombre_Cfe:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['nombre_recibo'].'</td>'.
                                              '</tr>'.
                                              '<tr>
                                                <td style="width:53%">Numero_Cfe:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['numero_servicio'].'</td>'.
                                              '</tr>'.
                                              '<tr>
                                                <td style="width:53%">Mensaje:</td>'
                                                .'<td class="tg-yw4l" style="color:blue;">'.$_POST['mensaje'].'</td>'.
                                              '</tr>'.
                                              
                                            '</body>'.
                                        '</html>';
						
						
						
				
					if ( mail ($mail_destinatario, $subject,$cuerpo,$headers )) 
						
						echo '
								<h1>¡GRACIAS POR CONTACTARNOS!</h1>
				                    <h4 class="page">En breve nos comunicamos contigo.</h4>'
							;


					else echo '
						Error al enviar
					';
			
?>