<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique();
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->decimal('price_origin', 8, 2);
            $table->decimal('price_selling', 8, 2);
            $table->timestamps();
        });


        DB::table('products')->insert([
            [
                'url' => 'Disposable-Feminine-Cleansing-Gel',
                'title' => '女性清潔凝膠',
                'excerpt' => "透明次酸性女性清潔凝膠，清潔陰道，預防敏感，陰道炎，除異味，止痕癢，除去不正常或過度分泌，平衡PH值，保持濕潤健康，純天然草本成份，不含藥性，無副作用，每支都是一次性使用，確保衛生。<br><br>用途：保養、護理、預防性質的綜合護理產品 一星期用一支，親熱後使用更可預防細菌感染。 若要去除異味、過多分泌，則隔日用，至少用三支。 若要去除痕癢，則連續3或6日，每天用一支。 用法: 睡前用最佳，放入內後擠出啫喱，用後無需清洗。 (注意: 請把管道頂端的塞拔出後方可使用。)",
                'content' => '',
                'price_origin' => 198,
                'price_selling' => 178,
            ],
            [
                'url' => 'Multicare-Essential-Ge',
                'title' => '女性清潔凝膠',
                'excerpt' => "主要成份: 乳酸、 庫拉索蘆薈汁、綠茶/桑樹皮/ 石榴、母菊 花提取物、透明質酸 純天然草本成分，無副作用，不含藥性。 除左可以更有效去除異味，痕癢，分泌同發炎問題，同時更修護敏感部位提升免疫力，減少以上問題發生！ 透明次酸性女性清潔凝膠，清潔陰道，預防敏感，陰道炎，除異味，止痕癢，除去不正常或過度分泌，平衡PH值，保持濕潤健康，純天然草本成份，不含藥性，無副作用，每支都是一次性使用，確保衛生。",
                'content' => '',
                'price_origin' => 198,
                'price_selling' => 178,
            ],

        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
