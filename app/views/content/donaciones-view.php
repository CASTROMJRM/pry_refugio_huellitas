<br><br>
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-3">Donación para Refugio de Animales - Huellitas</h1>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                </div>
                <div class="form-group">
                    <label for="codigo-postal">Código Postal</label>
                    <input type="text" class="form-control" id="codigo-postal" placeholder="Código Postal">
                </div>
                <div class="form-group">
                    <label>Monto de la Donación</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monto" id="monto10" value="10">
                        <label class="form-check-label" for="monto10">$10</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monto" id="monto25" value="25">
                        <label class="form-check-label" for="monto25">$25</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monto" id="monto50" value="50">
                        <label class="form-check-label" for="monto50">$50</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monto" id="monto100" value="100">
                        <label class="form-check-label" for="monto100">$100</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monto" id="montoOtro" value="otro">
                        <label class="form-check-label" for="montoOtro">Otro</label>
                        <input type="text" class="form-control mt-2" id="montoOtroText" placeholder="Especificar monto">
                    </div>
                </div>
                <div class="form-group">
                    <label>Método de Pago</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pago" id="pagoTarjeta" value="tarjeta">
                        <label class="form-check-label" for="pagoTarjeta">Tarjeta de Crédito/Débito</label>
                    </div>
                    <div id="tarjetaInfo" style="display: none;">
                        <input type="text" class="form-control mt-2" placeholder="Número de Tarjeta">
                        <input type="text" class="form-control mt-2" placeholder="Fecha de Expiración (MM/AA)">
                        <input type="text" class="form-control mt-2" placeholder="CVV">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pago" id="pagoPaypal" value="paypal">
                        <label class="form-check-label" for="pagoPaypal">PayPal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pago" id="pagoTransferencia" value="transferencia">
                        <label class="form-check-label" for="pagoTransferencia">Transferencia Bancaria</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje (Opcional)</label>
                    <textarea class="form-control" id="mensaje" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>¿Te gustaría destinar tu donación a un área específica?</label>
                    <select class="form-control">
                        <option>Alimentación de los animales</option>
                        <option>Atención médica y vacunas</option>
                        <option>Programas de adopción</option>
                        <option>Mejora de instalaciones</option>
                        <option>Otro</option>
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="noticias">
                    <label class="form-check-label" for="noticias">Acepto recibir noticias y actualizaciones por correo electrónico sobre el refugio y sus actividades.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terminos">
                    <label class="form-check-label" for="terminos">Acepto los términos y condiciones de la donación.</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>

            

            <h3 class="text-center">Donativos con efectivo</h3>
            <p class="text-center">Puedes hacer un depósito por la cantidad que tú desees, a la siguiente cuenta:</p>
            <ul class="list-unstyled text-center">
                <li><strong>Huellitas A.C</strong></li>
                <li>Banco BANAMEX</li>
                <li>Suc. 7006 #Cuenta 4550770</li>
                <li>Clabe: 002180700645507704</li>
            </ul>

            <h3 class="text-center mt-4">Donativos en especie</h3>
            <p class="text-center">También puedes hacer un donativo en especie, cada visita guiada se solicitan diferentes productos como:</p>
            <ul class="list-unstyled text-center">
                <li>Materiales de curación</li>
                <li>Artículos de limpieza</li>
                <li>Periódico</li>
                <li>Artículos para perros</li>
            </ul>

            <form class="mt-4 kaleb">
                <div class="form-group">
                    <label for="nombreDonacion">Nombre</label>
                    <input type="text" class="form-control" id="nombreDonacion" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="telefonoDonacion">Teléfono</label>
                    <input type="tel" class="form-control" id="telefonoDonacion" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="emailDonacion">Email</label>
                    <input type="email" class="form-control" id="emailDonacion" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="mensajeDonacion">¿Qué nos quieres donar?</label>
                    <textarea class="form-control" id="mensajeDonacion" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

