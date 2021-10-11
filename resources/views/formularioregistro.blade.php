@extends('layouts.app')

@section('content')

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">DONACIONES</div>
                        <h2>Llene el formulario para el registro de su donacion</h2>
                        <p>te voy a decir un par de cosas para que lo tengas en la mente, aki to el mundo ama a la gente</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>4ta Calle 8-40, Zona 3 Cobán, Alta Verapaz</li>
                            <li><i class="fas fa-phone"></i><a href="tel:50277917277">+502 77917277</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:50241991698">+502 41991698</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:pninez@gmail.com">pninez@gmail.com</a></li>
                        </ul>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- formulario registro-->
                    <form id="registroform" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cnombre" required>
                            <label class="label-control" for="cnombre">Nombres</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="capellidos" required>
                            <label class="label-control" for="capellidos">Apellidos</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="address" class="form-control-input" id="cdireccion" required>
                            <label class="label-control" for="cdireccion">Direccion</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="fa-phone" class="form-control-input" id="cphone" required>
                            <label class="label-control" for="cphone">Telefono</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="ccomentario" required></textarea>
                            <label class="label-control" for="ccomentario">Comentario</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">ACEPTAR</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
@endsection
