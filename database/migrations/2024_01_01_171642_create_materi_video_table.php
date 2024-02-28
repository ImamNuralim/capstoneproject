<!-- <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     public function up()
//     {
//         Schema::create('materi_videos', function (Blueprint $table) {
//             $table->id();
//             $table->string('judul');
//             $table->text('deskripsi')->nullable();
//             $table->timestamps();
//         });
//     }

//     public function down()
//     {
//         Schema::dropIfExists('materi_videos');
//     }
// }

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materi_videos', function (Blueprint $table) {
                        $table->id();
                        $table->string('judul');
                        $table->text('deskripsi')->nullable();
                        $table->timestamps();
                    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_video');
    }
};
