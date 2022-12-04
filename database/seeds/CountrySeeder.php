<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $country = [
        ['id' => 1, 'country_id' => 1, 'country_name' => '日本', 'continents_id' => 1],
        ['id' => 2, 'country_id' => 2, 'country_name' => 'インド', 'continents_id' => 1],
        ['id' => 3, 'country_id' => 3, 'country_name' => 'インドネシア', 'continents_id' => 1],
        ['id' => 4, 'country_id' => 4, 'country_name' => '韓国', 'continents_id' => 1],
        ['id' => 5, 'country_id' => 5, 'country_name' => 'カンボジア', 'continents_id' => 1],
        ['id' => 6, 'country_id' => 6, 'country_name' => '北朝鮮', 'continents_id' => 1],
        ['id' => 7, 'country_id' => 7, 'country_name' => 'シンガポール', 'continents_id' => 1],
        ['id' => 8, 'country_id' => 8, 'country_name' => 'スリランカ', 'continents_id' => 1],
        ['id' => 9, 'country_id' => 9, 'country_name' => 'タイ', 'continents_id' => 1],
        ['id' => 10, 'country_id' => 10, 'country_name' => '台湾', 'continents_id' => 1],
        ['id' => 11, 'country_id' => 11, 'country_name' => '中国', 'continents_id' => 1],
        ['id' => 12, 'country_id' => 12, 'country_name' => 'ネパール', 'continents_id' => 1],
        ['id' => 13, 'country_id' => 13, 'country_name' => 'バングラデシュ', 'continents_id' => 1],
        ['id' => 14, 'country_id' => 14, 'country_name' => 'パキスタン', 'continents_id' => 1],
        ['id' => 15, 'country_id' => 15, 'country_name' => '東ティモール', 'continents_id' => 1],
        ['id' => 16, 'country_id' => 16, 'country_name' => 'フィリピン', 'continents_id' => 1],
        ['id' => 17, 'country_id' => 17, 'country_name' => 'ブルネイ', 'continents_id' => 1],
        ['id' => 18, 'country_id' => 18, 'country_name' => 'ブータン', 'continents_id' => 1],
        ['id' => 19, 'country_id' => 19, 'country_name' => 'ベトナム', 'continents_id' => 1],
        ['id' => 20, 'country_id' => 20, 'country_name' => '香港', 'continents_id' => 1],
        ['id' => 21, 'country_id' => 21, 'country_name' => 'マカオ', 'continents_id' => 1],
        ['id' => 22, 'country_id' => 22, 'country_name' => 'マレーシア', 'continents_id' => 1],
        ['id' => 23, 'country_id' => 23, 'country_name' => 'ミャンマー', 'continents_id' => 1],
        ['id' => 24, 'country_id' => 24, 'country_name' => 'モルディブ', 'continents_id' => 1],
        ['id' => 25, 'country_id' => 25, 'country_name' => 'モンゴル', 'continents_id' => 1],
        ['id' => 26, 'country_id' => 26, 'country_name' => 'ラオス', 'continents_id' => 1],

        ['id' => 27, 'country_id' => 27, 'country_name' => 'アメリカ', 'continents_id' => 2],
        ['id' => 28, 'country_id' => 28, 'country_name' => 'カナダ', 'continents_id' => 2],
        ['id' => 29, 'country_id' => 29, 'country_name' => 'アルゼンチン', 'continents_id' => 2],
        ['id' => 30, 'country_id' => 30, 'country_name' => 'アンティグア・バーブーダ', 'continents_id' => 2],
        ['id' => 31, 'country_id' => 31, 'country_name' => 'ウルグアイ', 'continents_id' => 2],
        ['id' => 32, 'country_id' => 32, 'country_name' => 'エクアドル', 'continents_id' => 2],
        ['id' => 33, 'country_id' => 33, 'country_name' => 'エルサルバドル', 'continents_id' => 2],
        ['id' => 34, 'country_id' => 34, 'country_name' => 'ガイアナ', 'continents_id' => 2],
        ['id' => 35, 'country_id' => 35, 'country_name' => 'キューバ', 'continents_id' => 2],
        ['id' => 36, 'country_id' => 36, 'country_name' => 'グアテマラ', 'continents_id' => 2],
        ['id' => 37, 'country_id' => 37, 'country_name' => 'グレナダ', 'continents_id' => 2],
        ['id' => 38, 'country_id' => 38, 'country_name' => 'コスタリカ', 'continents_id' => 2],
        ['id' => 39, 'country_id' => 39, 'country_name' => 'コロンビア', 'continents_id' => 2],
        ['id' => 40, 'country_id' => 40, 'country_name' => 'ジャマイカ', 'continents_id' => 2],
        ['id' => 41, 'country_id' => 41, 'country_name' => 'スリナム', 'continents_id' => 2],
        ['id' => 42, 'country_id' => 42, 'country_name' => 'セントクリストファー・ネーヴィス', 'continents_id' => 2],
        ['id' => 43, 'country_id' => 43, 'country_name' => 'セントビンセント・グレナディーン', 'continents_id' => 2],
        ['id' => 44, 'country_id' => 44, 'country_name' => 'セントルシア', 'continents_id' => 2],
        ['id' => 45, 'country_id' => 45, 'country_name' => 'チリ', 'continents_id' => 2],
        ['id' => 46, 'country_id' => 46, 'country_name' => 'トリニダード・トバゴ', 'continents_id' => 2],
        ['id' => 47, 'country_id' => 47, 'country_name' => 'ドミニカ共和国', 'continents_id' => 2],
        ['id' => 48, 'country_id' => 48, 'country_name' => 'ドミニカ国', 'continents_id' => 2],
        ['id' => 49, 'country_id' => 49, 'country_name' => 'ニカラグア', 'continents_id' => 2],
        ['id' => 50, 'country_id' => 50, 'country_name' => 'ハイチ', 'continents_id' => 2],
        ['id' => 51, 'country_id' => 51, 'country_name' => 'バハマ', 'continents_id' => 2],
        ['id' => 52, 'country_id' => 52, 'country_name' => 'バルバドス', 'continents_id' => 2],
        ['id' => 53, 'country_id' => 53, 'country_name' => 'パナマ', 'continents_id' => 2],
        ['id' => 54, 'country_id' => 54, 'country_name' => 'パラグアイ', 'continents_id' => 2],
        ['id' => 55, 'country_id' => 55, 'country_name' => 'ブラジル', 'continents_id' => 2],
        ['id' => 56, 'country_id' => 56, 'country_name' => 'ベネズエラ', 'continents_id' => 2],
        ['id' => 57, 'country_id' => 57, 'country_name' => 'ベリーズ', 'continents_id' => 2],
        ['id' => 58, 'country_id' => 58, 'country_name' => 'ペルー', 'continents_id' => 2],
        ['id' => 59, 'country_id' => 59, 'country_name' => 'ホンジュラス', 'continents_id' => 2],
        ['id' => 60, 'country_id' => 60, 'country_name' => 'ボリビア', 'continents_id' => 2],
        ['id' => 61, 'country_id' => 61, 'country_name' => 'メキシコ', 'continents_id' => 2],

        ['id' => 62, 'country_id' => 62, 'country_name' => 'アフガニスタン', 'continents_id' => 1],
        ['id' => 63, 'country_id' => 63, 'country_name' => 'アラブ首長国連邦', 'continents_id' => 1],
        ['id' => 64, 'country_id' => 64, 'country_name' => 'イエメン', 'continents_id' => 1],
        ['id' => 65, 'country_id' => 65, 'country_name' => 'イスラエル', 'continents_id' => 1],
        ['id' => 66, 'country_id' => 66, 'country_name' => 'イラク', 'continents_id' => 1],
        ['id' => 67, 'country_id' => 67, 'country_name' => 'イラン', 'continents_id' => 1],
        ['id' => 68, 'country_id' => 68, 'country_name' => 'オマーン', 'continents_id' => 1],
        ['id' => 69, 'country_id' => 69, 'country_name' => 'カタール', 'continents_id' => 1],
        ['id' => 70, 'country_id' => 70, 'country_name' => 'クウェート', 'continents_id' => 1],
        ['id' => 71, 'country_id' => 71, 'country_name' => 'サウジアラビア', 'continents_id' => 1],
        ['id' => 72, 'country_id' => 72, 'country_name' => 'シリア', 'continents_id' => 1],
        ['id' => 73, 'country_id' => 73, 'country_name' => 'トルコ', 'continents_id' => 1],
        ['id' => 74, 'country_id' => 74, 'country_name' => 'バーレーン', 'continents_id' => 1],
        ['id' => 75, 'country_id' => 75, 'country_name' => 'パレスチナ', 'continents_id' => 1],
        ['id' => 76, 'country_id' => 76, 'country_name' => 'ヨルダン', 'continents_id' => 1],
        ['id' => 77, 'country_id' => 77, 'country_name' => 'レバノン', 'continents_id' => 1],

        ['id' => 78, 'country_id' => 78, 'country_name' => 'アイスランド', 'continents_id' => 3],
        ['id' => 79, 'country_id' => 79, 'country_name' => 'アイルランド', 'continents_id' => 3],
        ['id' => 80, 'country_id' => 80, 'country_name' => 'アゼルバイジャン', 'continents_id' => 3],
        ['id' => 81, 'country_id' => 81, 'country_name' => 'アルバニア', 'continents_id' => 3],
        ['id' => 82, 'country_id' => 82, 'country_name' => 'アルメニア', 'continents_id' => 3],
        ['id' => 83, 'country_id' => 83, 'country_name' => 'アンドラ', 'continents_id' => 3],
        ['id' => 84, 'country_id' => 84, 'country_name' => 'イギリス', 'continents_id' => 3],
        ['id' => 85, 'country_id' => 85, 'country_name' => 'イタリア', 'continents_id' => 3],
        ['id' => 86, 'country_id' => 86, 'country_name' => 'ウクライナ', 'continents_id' => 3],
        ['id' => 87, 'country_id' => 87, 'country_name' => 'ウズベキスタン', 'continents_id' => 3],
        ['id' => 88, 'country_id' => 88, 'country_name' => 'エストニア', 'continents_id' => 3],
        ['id' => 89, 'country_id' => 89, 'country_name' => 'オランダ', 'continents_id' => 3],
        ['id' => 90, 'country_id' => 90, 'country_name' => 'オーストリア', 'continents_id' => 3],
        ['id' => 91, 'country_id' => 91, 'country_name' => 'カザフスタン', 'continents_id' => 3],
        ['id' => 92, 'country_id' => 92, 'country_name' => 'キプロス', 'continents_id' => 3],
        ['id' => 93, 'country_id' => 93, 'country_name' => 'キルギス', 'continents_id' => 3],
        ['id' => 94, 'country_id' => 94, 'country_name' => 'ギリシャ', 'continents_id' => 3],
        ['id' => 95, 'country_id' => 95, 'country_name' => 'クロアチア', 'continents_id' => 3],
        ['id' => 96, 'country_id' => 96, 'country_name' => 'コソボ', 'continents_id' => 3],
        ['id' => 97, 'country_id' => 97, 'country_name' => 'サンマリノ', 'continents_id' => 3],
        ['id' => 98, 'country_id' => 98, 'country_name' => 'ジョージア', 'continents_id' => 3],
        ['id' => 99, 'country_id' => 99, 'country_name' => 'スイス', 'continents_id' => 3],
        ['id' => 100, 'country_id' => 100, 'country_name' => 'スウェーデン', 'continents_id' => 3],
        ['id' => 101, 'country_id' => 101, 'country_name' => 'スペイン', 'continents_id' => 3],
        ['id' => 102, 'country_id' => 102, 'country_name' => 'スロバキア', 'continents_id' => 3],
        ['id' => 103, 'country_id' => 103, 'country_name' => 'スロベニア', 'continents_id' => 3],
        ['id' => 104, 'country_id' => 104, 'country_name' => 'セルビア', 'continents_id' => 3],
        ['id' => 105, 'country_id' => 105, 'country_name' => 'タジキスタン', 'continents_id' => 3],
        ['id' => 106, 'country_id' => 106, 'country_name' => 'チェコ', 'continents_id' => 3],
        ['id' => 107, 'country_id' => 107, 'country_name' => 'デンマーク', 'continents_id' => 3],
        ['id' => 108, 'country_id' => 108, 'country_name' => 'トルクメニスタン', 'continents_id' => 3],
        ['id' => 109, 'country_id' => 109, 'country_name' => 'ドイツ', 'continents_id' => 3],
        ['id' => 110, 'country_id' => 110, 'country_name' => 'ノルウェー', 'continents_id' => 3],
        ['id' => 111, 'country_id' => 111, 'country_name' => 'ハンガリー', 'continents_id' => 3],
        ['id' => 112, 'country_id' => 112, 'country_name' => 'バチカン', 'continents_id' => 3],
        ['id' => 113, 'country_id' => 113, 'country_name' => 'フィンランド', 'continents_id' => 3],
        ['id' => 114, 'country_id' => 114, 'country_name' => 'フランス', 'continents_id' => 3],
        ['id' => 115, 'country_id' => 115, 'country_name' => 'ブルガリア', 'continents_id' => 3],
        ['id' => 116, 'country_id' => 116, 'country_name' => 'ベラルーシ', 'continents_id' => 3],
        ['id' => 117, 'country_id' => 117, 'country_name' => 'ベルギー', 'continents_id' => 3],
        ['id' => 118, 'country_id' => 118, 'country_name' => 'ボスニア・ヘルツェゴビナ', 'continents_id' => 3],
        ['id' => 119, 'country_id' => 119, 'country_name' => 'ポルトガル', 'continents_id' => 3],
        ['id' => 120, 'country_id' => 120, 'country_name' => 'ポーランド', 'continents_id' => 3],
        ['id' => 121, 'country_id' => 121, 'country_name' => 'マケドニア', 'continents_id' => 3],
        ['id' => 122, 'country_id' => 122, 'country_name' => 'マルタ', 'continents_id' => 3],
        ['id' => 123, 'country_id' => 123, 'country_name' => 'モナコ', 'continents_id' => 3],
        ['id' => 124, 'country_id' => 124, 'country_name' => 'モルドバ', 'continents_id' => 3],
        ['id' => 125, 'country_id' => 125, 'country_name' => 'モンテネグロ', 'continents_id' => 3],
        ['id' => 126, 'country_id' => 126, 'country_name' => 'ラトビア', 'continents_id' => 3],
        ['id' => 127, 'country_id' => 127, 'country_name' => 'リトアニア', 'continents_id' => 3],
        ['id' => 128, 'country_id' => 128, 'country_name' => 'リヒテンシュタイン', 'continents_id' => 3],
        ['id' => 129, 'country_id' => 129, 'country_name' => 'ルクセンブルク', 'continents_id' => 3],
        ['id' => 130, 'country_id' => 130, 'country_name' => 'ルーマニア', 'continents_id' => 3],
        ['id' => 131, 'country_id' => 131, 'country_name' => 'ロシア', 'continents_id' => 3],

        ['id' => 132, 'country_id' => 132, 'country_name' => 'オーストラリア', 'continents_id' => 4],
        ['id' => 133, 'country_id' => 133, 'country_name' => 'キリバス', 'continents_id' => 4],
        ['id' => 134, 'country_id' => 134, 'country_name' => 'クック諸島', 'continents_id' => 4],
        ['id' => 135, 'country_id' => 135, 'country_name' => 'サモア', 'continents_id' => 4],
        ['id' => 136, 'country_id' => 136, 'country_name' => 'ソロモン諸島', 'continents_id' => 4],
        ['id' => 137, 'country_id' => 137, 'country_name' => 'ツバル', 'continents_id' => 4],
        ['id' => 138, 'country_id' => 138, 'country_name' => 'トンガ', 'continents_id' => 4],
        ['id' => 139, 'country_id' => 139, 'country_name' => 'ナウル', 'continents_id' => 4],
        ['id' => 140, 'country_id' => 140, 'country_name' => 'ニウエ', 'continents_id' => 4],
        ['id' => 141, 'country_id' => 141, 'country_name' => 'ニュージーランド', 'continents_id' => 4],
        ['id' => 142, 'country_id' => 142, 'country_name' => 'バヌアツ', 'continents_id' => 4],
        ['id' => 143, 'country_id' => 143, 'country_name' => 'パプアニューギニア', 'continents_id' => 4],
        ['id' => 144, 'country_id' => 144, 'country_name' => 'パラオ', 'continents_id' => 4],
        ['id' => 145, 'country_id' => 145, 'country_name' => 'フィジー', 'continents_id' => 4],
        ['id' => 146, 'country_id' => 146, 'country_name' => 'マーシャル', 'continents_id' => 4],
        ['id' => 147, 'country_id' => 147, 'country_name' => 'ミクロネシア', 'continents_id' => 4],

        ['id' => 148, 'country_id' => 148, 'country_name' => 'アルジェリア', 'continents_id' => 5],
        ['id' => 149, 'country_id' => 149, 'country_name' => 'アンゴラ', 'continents_id' => 5],
        ['id' => 150, 'country_id' => 150, 'country_name' => 'ウガンダ', 'continents_id' => 5],
        ['id' => 151, 'country_id' => 151, 'country_name' => 'エジプト', 'continents_id' => 5],
        ['id' => 152, 'country_id' => 152, 'country_name' => 'エスワティニ', 'continents_id' => 5],
        ['id' => 153, 'country_id' => 153, 'country_name' => 'エチオピア', 'continents_id' => 5],
        ['id' => 154, 'country_id' => 154, 'country_name' => 'エリトリア', 'continents_id' => 5],
        ['id' => 155, 'country_id' => 155, 'country_name' => 'カメルーン', 'continents_id' => 5],
        ['id' => 156, 'country_id' => 156, 'country_name' => 'カーボヴェルデ', 'continents_id' => 5],
        ['id' => 157, 'country_id' => 157, 'country_name' => 'ガボン', 'continents_id' => 5],
        ['id' => 158, 'country_id' => 158, 'country_name' => 'ガンビア', 'continents_id' => 5],
        ['id' => 159, 'country_id' => 159, 'country_name' => 'ガーナ', 'continents_id' => 5],
        ['id' => 160, 'country_id' => 160, 'country_name' => 'ギニア', 'continents_id' => 5],
        ['id' => 161, 'country_id' => 161, 'country_name' => 'ギニアビサウ', 'continents_id' => 5],
        ['id' => 162, 'country_id' => 162, 'country_name' => 'ケニア', 'continents_id' => 5],
        ['id' => 163, 'country_id' => 163, 'country_name' => 'コモロ', 'continents_id' => 5],
        ['id' => 164, 'country_id' => 164, 'country_name' => 'コンゴ(旧ザイール)', 'continents_id' => 5],
        ['id' => 165, 'country_id' => 165, 'country_name' => 'コンゴ共和国', 'continents_id' => 5],
        ['id' => 166, 'country_id' => 166, 'country_name' => 'コートジボワール', 'continents_id' => 5],
        ['id' => 167, 'country_id' => 167, 'country_name' => 'サントメ・プリンシペ', 'continents_id' => 5],
        ['id' => 168, 'country_id' => 168, 'country_name' => 'ザンビア', 'continents_id' => 5],
        ['id' => 169, 'country_id' => 169, 'country_name' => 'シエラレオネ', 'continents_id' => 5],
        ['id' => 170, 'country_id' => 170, 'country_name' => 'ジブチ', 'continents_id' => 5],
        ['id' => 171, 'country_id' => 171, 'country_name' => 'ジンバブエ', 'continents_id' => 5],
        ['id' => 172, 'country_id' => 172, 'country_name' => 'スーダン', 'continents_id' => 5],
        ['id' => 173, 'country_id' => 173, 'country_name' => '赤道ギニア', 'continents_id' => 5],
        ['id' => 174, 'country_id' => 174, 'country_name' => 'セネガル', 'continents_id' => 5],
        ['id' => 175, 'country_id' => 175, 'country_name' => 'セーシェル', 'continents_id' => 5],
        ['id' => 176, 'country_id' => 176, 'country_name' => 'ソマリア', 'continents_id' => 5],
        ['id' => 177, 'country_id' => 177, 'country_name' => 'タンザニア', 'continents_id' => 5],
        ['id' => 178, 'country_id' => 178, 'country_name' => 'チャド', 'continents_id' => 5],
        ['id' => 179, 'country_id' => 179, 'country_name' => '中央アフリカ', 'continents_id' => 5],
        ['id' => 180, 'country_id' => 180, 'country_name' => 'チュニジア', 'continents_id' => 5],
        ['id' => 181, 'country_id' => 181, 'country_name' => 'トーゴ', 'continents_id' => 5],
        ['id' => 182, 'country_id' => 182, 'country_name' => 'ナイジェリア', 'continents_id' => 5],
        ['id' => 183, 'country_id' => 183, 'country_name' => 'ナミビア', 'continents_id' => 5],
        ['id' => 184, 'country_id' => 184, 'country_name' => 'ニジェール', 'continents_id' => 5],
        ['id' => 185, 'country_id' => 185, 'country_name' => 'ブルキナファソ', 'continents_id' => 5],
        ['id' => 186, 'country_id' => 186, 'country_name' => 'ブルンジ', 'continents_id' => 5],
        ['id' => 187, 'country_id' => 187, 'country_name' => 'ベナン', 'continents_id' => 5],
        ['id' => 188, 'country_id' => 188, 'country_name' => 'ボツワナ', 'continents_id' => 5],
        ['id' => 189, 'country_id' => 189, 'country_name' => 'マダガスカル', 'continents_id' => 5],
        ['id' => 190, 'country_id' => 190, 'country_name' => 'マラウイ', 'continents_id' => 5],
        ['id' => 191, 'country_id' => 191, 'country_name' => 'マリ', 'continents_id' => 5],
        ['id' => 192, 'country_id' => 193, 'country_name' => '南アフリカ', 'continents_id' => 5],
        ['id' => 193, 'country_id' => 193, 'country_name' => '南スーダン', 'continents_id' => 5],
        ['id' => 194, 'country_id' => 194, 'country_name' => 'モザンビーク', 'continents_id' => 5],
        ['id' => 195, 'country_id' => 195, 'country_name' => 'モロッコ', 'continents_id' => 5],
        ['id' => 196, 'country_id' => 196, 'country_name' => 'モーリシャス', 'continents_id' => 5],
        ['id' => 197, 'country_id' => 197, 'country_name' => 'モーリタニア', 'continents_id' => 5],
        ['id' => 198, 'country_id' => 198, 'country_name' => 'リビア', 'continents_id' => 5],
        ['id' => 199, 'country_id' => 199, 'country_name' => 'リベリア', 'continents_id' => 5],
        ['id' => 200, 'country_id' => 200, 'country_name' => 'ルワンダ', 'continents_id' => 5],
        ['id' => 201, 'country_id' => 201, 'country_name' => 'レソト', 'continents_id' => 5],
      ];
      DB::table('countries')->insert($country);
    }
}
