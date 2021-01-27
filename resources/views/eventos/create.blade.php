@extends('layouts.front')

@section('title', 'Criar Evento')

@section('content')


<h1>Crie um evento</h1>
<!-- general form elements -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Criar Novo Evento</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/eventos" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="box-body">
                <div class="form-group">
                    <label for="title">Nome do Evento(*)</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Malwares">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="title">Local do Evento(*)</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-edit"></i>
                        </div>
                    <input type="text" class="form-control" id="local" name="local" placeholder="Ex: Campus Universitario Sala - CC120">
                    </div>
                </div>
                <div class="form-group">
                    <label>Hora do Evento(*)</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="horainicio" name="horainicio" placeholder="10:35 AM">
                    </div>
                </div>

              <div class="form-group">
                <label>Data do Evento(*)</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" id="date" name="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>

                <div class="form-group">
                  <label for="title">Estado</label>
                  <select name="estado" id="estado" class="form-control">
                    <option value="0"></option>
                    <option value="0">Aberto</option>
                    <option value="1">Fechado</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="title">Descrição do Evento</label>
                  <textarea name="descricao" id="descricao" class="form-control" rows="3" placeholder="Ex: Descreve algo sobre o evento"></textarea>
                </div>
                <div class="form-group">
                  <label for="image">Carregar uma imagem</label>
                  <input type="file" id="image" name="image" class="form-control-file">
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div> 
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="pull-right" >
                    <div class="btn-group">
                        <a href="#" class="btn btn-mg btn-default btn-flat"><i class="fa fa-remove"></i>  Cancelar</a>
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="criar" class="btn btn-mg btn-info btn-flat" ><i class="fa fa-check"></i> Criar Evento</button>
                    </div>
                </div>
                <div class="pull-left"> 
                    <small><u style="color:red;"><i>Nota:</i></u><i> os campos com (*) s&atilde;o obrigat&oacute;rios</i></small>
                </div>
              </div>
            </form>
          </div>

@endsection