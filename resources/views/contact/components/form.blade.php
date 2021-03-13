<section class="section mt-5 pt-5" style="background-color: #ffffff;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-fluid" src="{{ asset('/assets/images/form-bg.png') }}" alt="Cañablanca">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h2 class="text texto-principal text-center" style="font-weight: 700; font-size: 32px;">PREPARA TU TRAGO FAVORITO</h2>
                <h4 class="text-center text mt-4">Contáctanos y pidenos tu producto favorito</h4>
                <form id="contact-form" class="w-100 mt-4 mx-auto" role="form">
                    <div class="form-group mx-auto">
                        <label for="name" class="col-form-label texto-principal" style="font-weight: bold;">Nombre y Apellidos</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre y Apellidos" name="name" required>
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email" class="col-form-label texto-principal" style="font-weight: bold;">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group mx-auto">
                        <label for="phone" class="col-form-label texto-principal" style="font-weight: bold;">Celular</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Celular" name="phone" required>
                    </div>
                    <div class="form-group mx-auto">
                        <label for="message" class="col-form-label texto-principal" style="font-weight: bold;">Mensaje</label>
                        <textarea class="form-control font-oswald" rows="7" placeholder="Escribe aquí un mensaje..." id="message" name="message" required style="resize: none;"></textarea>
                    </div>
                    <div class="form-group mx-auto">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-md button-style" id="btn-submit" type="button" value="Enviar">
                                <span class="spinner-border spinner spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                <span class="text-white text-uppercase">ENVIAR</span>
                              </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
