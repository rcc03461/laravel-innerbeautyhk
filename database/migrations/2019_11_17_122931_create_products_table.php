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
                'url' => 'Feminine-Cleansing-Gel',
                'title' => 'Feminine Cleansing Gel',
                'excerpt' => "透明次酸性女性清潔凝膠，清潔陰道，預防敏感，陰道炎，除異味，止痕癢，除去不正常或過度分泌，平衡PH值，保持濕潤健康，純天然草本成份，不含藥性，無副作用，每支都是一次性使用，確保衛生。<br><br>用途：保養、護理、預防性質的綜合護理產品 一星期用一支，親熱後使用更可預防細菌感染。 若要去除異味、過多分泌，則隔日用，至少用三支。 若要去除痕癢，則連續3或6日，每天用一支。 用法: 睡前用最佳，放入內後擠出啫喱，用後無需清洗。 (注意: 請把管道頂端的塞拔出後方可使用。)",
                'content' => '',
                'price_origin' => 438,
                'price_selling' => 368,
            ],
            [
                'url' => 'Multicare-Essential-Gel',
                'title' => 'Multicare Essential Gel',
                'excerpt' => "主要成份: 乳酸、 庫拉索蘆薈汁、綠茶/桑樹皮/ 石榴、母菊 花提取物、透明質酸 純天然草本成分，無副作用，不含藥性。 除左可以更有效去除異味，痕癢，分泌同發炎問題，同時更修護敏感部位提升免疫力，減少以上問題發生！ 透明次酸性女性清潔凝膠，清潔陰道，預防敏感，陰道炎，除異味，止痕癢，除去不正常或過度分泌，平衡PH值，保持濕潤健康，純天然草本成份，不含藥性，無副作用，每支都是一次性使用，確保衛生。",
                'content' => '',
                'price_origin' => 388,
                'price_selling' => 360,
            ],
            [
                'url' => 'Outclear-Care-Wash-Mousse',
                'title' => 'Outclear Care Wash Mousse',
                'excerpt' => "outclear是日本Hanamisui公司其中一款熱賣產品，著重於「每日清潔女性私處部位是必要的」概念而研發的產品。 女性私處部位容易受到不同因素刺激而變得脆弱，例如經常摩擦，容易出汗，女性週期等等。
outclear專用於平衡女性私處酸鹼度（PH4.0-6.5)，改善暗沈色素，預防乾燥及痕癢問題。<br><br>成份內含維生素C配方，私密清潔美白慕絲，持續使用能防止私密處皮膚變暗沉，在清潔去污垢及可老化角質層時，也有淡淡優雅清新香氣，絕對有助於消除異味，更有美白功能，除了女士可使用外，男士也可以一齊使用。<br><br>日本製：衛生用品",
                'content' => '',
                'price_origin' => 288,
                'price_selling' => 248,
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
