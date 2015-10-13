<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_servicios', function(Blueprint $table) {
            
            $table->increments('id_usuario_servicio')->unique();
            $table->integer('id_usuario_operador');
            $table->integer('id_catalogo_servicio');
            $table->text('detalle_servicio');
            $table->float('precio_desde');
            $table->float('precio_hasta');
            $table->float('precio_anterior');
            $table->float('precio_actual');
            $table->float('descuento_servico');
            $table->text('direccion_servicio');
            $table->string('longitud_servicio');
            $table->string('latitud_servicio');
            $table->boolean('estado_servicio');
            $table->datetime('fecha_ingreso');
            $table->datetime('fecha_fin');
            $table->integer('parroquia_codigo');
            $table->string('correo_contacto');
            $table->string('pagina_web');
            $table->string('nombre_comercial');
            $table->text('tags');
            $table->float('calificacion_average');
            $table->integer('prioridad');
            $table->integer('num_visitas');
            $table->float('descuento_clientes');
            $table->boolean('estado_descuento_clientes');
            $table->boolean('estado_descuento_no_clientes');
            $table->string('nombre_servicio');
            $table->text('tags_servicio');
            $table->integer('id_ciudad');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_servicios');
    }
}
