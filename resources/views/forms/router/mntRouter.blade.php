@extends('layouts2.app')
@section('titulo','Registrar Router')

@section('main-content')

<br>
<div class="row">
	<div class="col s12 m12 l12">
                <div class="card">
                  <div class="card-header">                    
                    <i class="fa fa-table fa-lg material-icons">receipt</i>
                    <h2>REGISTRAR MIKROTIK</h2>
                  </div>
                  <form class="formValidate right-alert" id="myForm" accept-charset="UTF-8" enctype="multipart/form-data">
                  <div class="row card-header sub-header">
                        <div class="col s12 m12">                         
                          <a id="add" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" data-position="top" data-delay="500" data-tooltip="Guardar">
                            <i class="material-icons" style="color: #2E7D32">check</i>
                          </a>
                          <a style="margin-left: 6px"></a>   
                          
                          <a href="{{url('/router')}}" class="btn-floating right waves-effect waves-light grey lighten-5 tooltipped" href="#!" data-activates="dropdown2" data-position="top" data-delay="500" data-tooltip="Regresar">
                            <i class="material-icons" style="color: #424242">keyboard_tab</i>
                          </a>            
                        </div>  

                        @include('forms.scripts.modalInformacion')              
                        
                  </div>
                                    
                  
                  <div class="row cuerpo">
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="row">
                        <div class="input-field col s12 s12 m6 l6">
                          <i class="material-icons prefix active">label_outline</i>
                          <input id="idrouter" name="idrouter" type="text" onkeyup="mayus(this);">
                          <label for="idrouter">Código Router*</label>
                          <div id="error1" style="color: red; font-size: 12px; font-style: italic; padding-left: 3rem;"></div>
                        </div>

                        <div class="input-field col s12 s12 m6 l6">
                          <i class="material-icons prefix">local_offer</i>
                          <input id="alias" name="alias" type="text" onkeyup="mayus(this);">
                          <label for="alias">Alias del Router*</label>
                          <div id="error2" style="color: red; font-size: 12px; font-style: italic; padding-left: 3rem"></div>
                        </div>     
                        <div class="input-field col s12 m6 l6">
                          <i class="material-icons prefix">filter_tilt_shift</i>
                          <input id="ip" name="ip" type="text">
                          <label for="ip">Dirección IP*</label>
                          <div id="error3" style="color: red; font-size: 12px; font-style: italic; padding-left: 3rem"></div>
                        </div>

                        <div class="input-field col s12 m6 l6">
                          <i class="material-icons prefix ">person</i>
                          <input id="usuario" name="usuario" type="text">
                          <label for="usuario">Usuario Api Mikrotik*</label>
                          <div id="error4" style="color: red; font-size: 12px; font-style: italic; padding-left: 3rem"></div>
                        </div>    
                        <div class="input-field col s12 m6 l6">
                          <i class="material-icons prefix">lock_outline</i>
                          <input id="password" name="password" type="password">
                          <label for="password">Contraseña*</label>
                          <div id="error5" style="color: red; font-size: 12px; font-style: italic; padding-left: 3rem"></div>
                        </div>  

                        <div class="input-field col s12 m6 l6">
                          <i class="material-icons prefix">settings_ethernet</i>
                          <input id="puerto" name="puerto" type="text" placeholder="Puerto Api Opcional">
                          <label for="puerto">Puerto Api</label>
                        </div>
                      </div>
                                     
                  </div>
                  </form>
              </div>
  </div>
</div>
@endsection

@section('script')
  @include('forms.router.scripts.validacion')
  @include('forms.router.scripts.addRouter')  
@endsection
