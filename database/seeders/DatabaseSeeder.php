<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Insert Admin
        DB::table('admins')->insert([
            'name'     => 'Adam Htut',
            'email'    => 'info@kohtut.me',
            'password' => Hash::make('asdfasdf'),
        ]);

        // ✅ Insert Multiple Allergies
        DB::table('allergies')->insert([
            ['name_en' => 'Milk', 'name_mm' => 'နို့'],
            ['name_en' => 'Egg', 'name_mm' => 'ဥ'],
            ['name_en' => 'Peanuts', 'name_mm' => 'မြေပဲ'],
            ['name_en' => 'Seafood', 'name_mm' => 'ပင်လယ်စာ'],
            ['name_en' => 'Soy', 'name_mm' => 'ပဲပုပ္ပဲ'],
            ['name_en' => 'Wheat', 'name_mm' => 'ဂျုံ'],
            ['name_en' => 'Shellfish', 'name_mm' => 'ခရု'],
            ['name_en' => 'Fish', 'name_mm' => 'ငါး'],
            ['name_en' => 'Tree Nuts', 'name_mm' => 'သစ်သီးပဲများ'],
            ['name_en' => 'Sesame', 'name_mm' => 'နံနံစေ့'],
            ['name_en' => 'Mustard', 'name_mm' => 'တောင်လက်ဖက်'],
            ['name_en' => 'Corn', 'name_mm' => 'ပြောင်း'],
            ['name_en' => 'Gluten', 'name_mm' => 'ဂလူတင်'],
            ['name_en' => 'Coconut', 'name_mm' => 'အုန်းသီး'],
            ['name_en' => 'Strawberries', 'name_mm' => 'စတော်ဘယ်ရီ'],
            ['name_en' => 'Chocolate', 'name_mm' => 'ချောကလက်'],
            ['name_en' => 'Citrus Fruits', 'name_mm' => 'လိမ္မော်သီးများ'],
            ['name_en' => 'Tomatoes', 'name_mm' => 'ခရမ်းချဉ်သီး'],
        ]);

        // ✅ Insert Multiple Categories
        DB::table('categories')->insert([
            ['slug' => 'meal', 'name_en' => 'Meal', 'name_mm' => 'အစားအစာ', 'img' => 'https://example.com/meal.png'],
            ['slug' => 'beverage', 'name_en' => 'Beverage', 'name_mm' => 'သောက်စရာ', 'img' => 'https://example.com/beverage.png'],
            ['slug' => 'snacks', 'name_en' => 'Snacks', 'name_mm' => 'လက်ဘက်ရည်စား', 'img' => 'https://example.com/snacks.png'],
            ['slug' => 'desserts', 'name_en' => 'Desserts', 'name_mm' => 'အချိုပွဲ', 'img' => 'https://example.com/desserts.png'],
            ['slug' => 'fast-food', 'name_en' => 'Fast Food', 'name_mm' => 'ဖတ်စ်ဖုဒ်', 'img' => 'https://example.com/fastfood.png'],
            ['slug' => 'fruits', 'name_en' => 'Fruits', 'name_mm' => 'အသီးအရွက်', 'img' => 'https://example.com/fruits.png'],
            ['slug' => 'vegetables', 'name_en' => 'Vegetables', 'name_mm' => 'ဟင်းသီးဟင်းရွက်', 'img' => 'https://example.com/vegetables.png'],
            ['slug' => 'dairy', 'name_en' => 'Dairy Products', 'name_mm' => 'နို့ထွက်ပစ္စည်းများ', 'img' => 'https://example.com/dairy.png'],
            ['slug' => 'bakery', 'name_en' => 'Bakery Items', 'name_mm' => 'မုန့်ဖုတ်ပစ္စည်းများ', 'img' => 'https://example.com/bakery.png'],
            ['slug' => 'spices', 'name_en' => 'Spices & Herbs', 'name_mm' => 'ဟင်းခတ်အမွှေးအကြိုင်', 'img' => 'https://example.com/spices.png'],
            ['slug' => 'organic', 'name_en' => 'Organic Foods', 'name_mm' => 'သန့်စင်အစားအစာများ', 'img' => 'https://example.com/organic.png'],
            ['slug' => 'canned-foods', 'name_en' => 'Canned Foods', 'name_mm' => 'တင်းကွင်းအစားအစာများ', 'img' => 'https://example.com/canned.png'],
            ['slug' => 'meat', 'name_en' => 'Meat & Poultry', 'name_mm' => 'အသားနှင့်ငှက်သား', 'img' => 'https://example.com/meat.png'],
            ['slug' => 'seafood', 'name_en' => 'Seafood', 'name_mm' => 'ပင်လယ်စာ', 'img' => 'https://example.com/seafood.png'],
            ['slug' => 'breakfast', 'name_en' => 'Breakfast Items', 'name_mm' => 'နံနက်စာပစ္စည်းများ', 'img' => 'https://example.com/breakfast.png'],
            ['slug' => 'frozen', 'name_en' => 'Frozen Foods', 'name_mm' => 'သိုလှောင်ထားသောအစားအစာများ', 'img' => 'https://example.com/frozen.png'],
            ['slug' => 'grains', 'name_en' => 'Grains & Cereals', 'name_mm' => 'တစ်စိတ်တစ်ပိုင်းအစားအစာ', 'img' => 'https://example.com/grains.png'],
            ['slug' => 'baby-foods', 'name_en' => 'Baby Foods', 'name_mm' => 'ကလေးအစားအစာ', 'img' => 'https://example.com/babyfoods.png'],
            ['slug' => 'health', 'name_en' => 'Health & Diet', 'name_mm' => 'ကျန်းမာရေးနှင့်အစားအသောက်', 'img' => 'https://example.com/health.png'],
            ['slug' => 'international', 'name_en' => 'International Cuisine', 'name_mm' => 'နိုင်ငံတကာဟင်းလျာ', 'img' => 'https://example.com/international.png'],
        ]);

        // ✅ Insert Menu Types
        DB::table('menu_types')->insert([
            ['name_en' => 'Appetizer', 'name_mm' => 'အစေ့'],
            ['name_en' => 'Soup', 'name_mm' => 'ဟင်းချို'],
            ['name_en' => 'Salad', 'name_mm' => 'အသုပ်'],
            ['name_en' => 'Main Course', 'name_mm' => 'အဓိကဟင်း'],
            ['name_en' => 'Side Dish', 'name_mm' => 'ဘက်ကောက်ဟင်း'],
            ['name_en' => 'Dessert', 'name_mm' => 'အချိုပွဲ'],
            ['name_en' => 'Beverage', 'name_mm' => 'သောက်စရာ'],
            ['name_en' => 'Breakfast', 'name_mm' => 'နံနက်စာ'],
            ['name_en' => 'Fast Food', 'name_mm' => 'ဖတ်စ်ဖုဒ်'],
            ['name_en' => 'Vegetarian', 'name_mm' => 'သက်သတ်လွတ်'],
            ['name_en' => 'Grilled', 'name_mm' => 'ကင်'],
            ['name_en' => 'Fried', 'name_mm' => 'ကြော်'],
            ['name_en' => 'Steamed', 'name_mm' => 'အငွေ့ပေါင်း'],
            ['name_en' => 'Baked', 'name_mm' => 'မုန့်ဖုတ်'],
            ['name_en' => 'Raw', 'name_mm' => 'သုပ်'],
        ]);

        $menus = [
            'ဝက်သားဆလပ်', 'ဝက်ပင်စိမ်းချက်', 'ဝက်ပဲငပိချက်', 'ဝက်ကုန်းဘောင်', 'ဝက်နံကင်ပြန်ချက်', 'အော်စွန်းသုတ်',
            'ပုဇွန်မာလာ မွေးစပ်', 'ငါးလိပ်ကျောက်ချက်', 'ဒီုရီငါး သံပုရာ', 'ပြည်ကြီးငါး ချဥ်စပ်', 'ငါးဖယ်လုံးချဥ်စပ်',
            'ဆိတ်လက်ဖက်ထောင်း', 'ဆိတ်သားထောင်း ချဥ်စပ်', 'အာလူးမာလာ',
            'ကြက်ပင်စိမ်းချက်', 'ကြက်ပဲငပိချက်', 'ကြက်ကုန်းဘောင်', 'ကြက်ပဲပြားမာလာ [ ကြက်မာဖောတိုဖူး ]', 'ကြက်ကချင်ချက်',
            'အညာထမင်းကြာ်', 'ပသျှူးထမင်းကြော်', 'သီးစုံထမင်းကြော်', 'ငပိထမင်းကြော်', 'ပဲပြုတ်ထမင်းကြော်', 'တုန်ယမ်းထမင်းကြော်',
            'ထမင်းဆီစမ်း', 'ပုန်းရည်ကြီးထမင်းသုတ်', 'လက်ဖက်ထမင်းသုတ်', 'ချဥ်ပေါင်ထမင်းသုတ်', 'ပဲပြုတ်ထမင်းဆီစမ်း',
            'အာလူးထမင်းနယ်', 'ထမင်းသုတ်',
            'ဆေးဘဲဥသုတ်', 'လက်ဖက်သုတ်', 'ဂျင်းသုတ်', 'ခရမ်းချဥ်သီးသုတ်', 'ငါးဖယ်သုတ်', 'ဝက်ခေါက်သုတ်', 'ငါးနီတူးသုတ်', 'ပြောင်းဖူးလက်ဖက်သုတ်',
            'လက်ဖက်ရည်', 'ပလာတာ [ သကြား ]', 'ဖက်ထုတ်', 'ဆာဖျယ်', 'မုန့်ဟင်းခါး',
        ];

        foreach ($menus as $menu) {
            DB::table('f_menus')->insert([
                'name'         => $menu,
                'img'          => 'https://images.deliveryhero.io/image/fd-mm/LH/o23f-listing.jpg', // Placeholder Image
                'description'  => 'Delicious traditional food',
                'category_id'  => rand(1, 10),       // Random category
                'allergies_id' => rand(1, 5),        // Random allergy
                'is_active'    => rand(0, 1),        // Random true/false
                'price'        => rand(1000, 15000), // Random price between 1,000 - 15,000 MMK
                'is_promotion' => rand(0, 1),        // Random promotion status
                'is_special'   => rand(0, 1),        // Random special status
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }

    }
}