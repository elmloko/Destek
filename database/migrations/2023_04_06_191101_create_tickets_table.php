                                                                                                     <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->text('solucion')->nullable();
            $table->enum('estado', ['por_aprobar', 'activo', 'terminado'])->default('por_aprobar');
            $table->text('nombre');

            
            $table->unsignedBigInteger('tecnico_id')->nullable();
            $table->unsignedBigInteger('area_id');

            
            $table->foreign('area_id')->references('id')->on('areas');
            
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');

            // $table->foreign('usuario_id')->references('id')->on('usuario');

            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['area_id']);
            $table->dropForeign(['tecnico_id']);
        });
        
        Schema::dropIfExists('tickets');
    }
}
