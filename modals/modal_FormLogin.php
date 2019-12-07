<div class="modal fade" id="FormLogin" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body modal-content">
            <div class="col-md-12">
                <div class="featured-box featured-box-primary text-left mt-2" style="height: 362.625px;">
                    <div class="box-content">
                        <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">
                            Iniciar Sesión</h4>
                        <form action="Model/validarSesion" id="frmSignIn" method="post" class="contact-form">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold text-dark text-2 required">Email</label>
                                    <input id="LoginUser" name="LoginUser" type="email" required class=" form-control ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">

                                    <label class="font-weight-bold text-dark text-2 required">Contraseña</label>
                                    <input id="LoginPass" name="LoginPass" type="password" class="form-control"
                                        required>
                                    <a class="float-right" href="#">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" value="Entrar" class="btn btn-primary float-right"
                                        data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>