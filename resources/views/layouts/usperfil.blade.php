@extends('layouts.blank')
@push('stylesheets')
  <!-- Example -->
  <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('main_container')
  


<div class="right_col" role="main" style="min-height: 100px;">

  	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Perfil de Usuario <small>Información basica del usuario</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombres<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('name') }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('last-name') }}">
                        </div>
                      </div>
                      
						<div class="form-group">
                        <label for="doc_type" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Documento ID<span class="required">*</span></label>
                      	<div class="col-md-6 col-sm-6 col-xs-12">
                      		<select name="doc_type" class="form-control col-md-1 col-xs-1"  onChange="combo(this, 'theinput')">
  							<option value="CC">CC: Cédula de Ciudadania </option>
 							 <option value="NIT">Nit: Número de Identificación</option>
 							 <option value="CE">CE: Cédula de Extranjería</option>
						</select>
						   	</div>
                        </div>
						<div class="form-group">
                        <label for="Num_id" class="control-label col-md-3 col-sm-3 col-xs-12">Numero Documento ID<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Num_id" class="form-control col-md-7 col-xs-12" required="required" type="text" name="Num_id">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Correo<span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="text" required="required"  name="email" value="{{ old('email') }}">
                        </div>
                      </div>
						
						<!-- Seleccion de Departamento y ciudad -->

                      <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección<span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" required="required"  name="address" value="{{ old('address') }}">
                        </div>
                      </div>

						<div class="form-group">
                        <label for="address-comp" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección Complementaria</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address-comp" class="form-control col-md-7 col-xs-12" type="text" name="address-comp">
                        </div>
                      </div>
					
					<div class="form-group">
                        <label for="cellphone" class="control-label col-md-3 col-sm-3 col-xs-12">Número de telefono Celular<span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="cellphone" class="form-control col-md-7 col-xs-12" type="text" required="required"  name="cellphone" value="{{ old('cellphone') }}">
                        </div>
                      </div>
						
						<div class="form-group">
                        <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">Número de telefono Fijo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="fax" class="control-label col-md-3 col-sm-3 col-xs-12">Número de Fax</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fax" class="form-control col-md-7 col-xs-12" type="text" name="fax">
                        </div>
                      </div>







                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
             		      
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>


@endsection