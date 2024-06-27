<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChalihtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $state = ['محافظة الأحمدي', 'محافظة الفروانية', 'محافظة الجهراء', 'محافظة حولي', 'محافظة العاصمة', 'محافظة مبارك الكبير'];
        $category = ['برايفت','فيلا','مزرعة','منتج'];
        $dgree = ['VIP','صف اول','صف ثاني'];

        return [
            'thumb_image' => 'chalite/images/'.rand(1,8).'.jpg',
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 100, 500),
            'discount' => rand(0,15),
            'state' => $this->faker->randomElement($state),
            'category' => $this->faker->randomElement($category),
            'dgree' => $this->faker->randomElement($dgree),
            'stars'=>rand(3,4),
            'phone'=>'0592722789',
            'whatsapp'=>'+970592722789',
            'have_pool'=>rand(0,1),
            'images'=>json_encode(["chalite/images/1Sdf4IyAKf4AGRd7c4MJAFgrNUQLavzd3WbABmbm.jpg", "chalite/images/4N5Q23n2mNJ1yoQ5dP0hZSBZdQbNbg2S7oe6caeF.jpg", "chalite/images/tShIH5r9DXW3GdagW5HeWji8BAIqggSHAwdl4QMc.jpg", "chalite/images/8puyi1mDGnUiYCR5kQWVkQFtQBPsS742p85pVnRY.jpg", "chalite/images/48MpveNUew3WqCmJtPy83IqzyFo3Yc7b32mrP1f6.jpg", "chalite/images/QpJKXTfaC5yi83uhS3hg77og08T5QCj8nKsWziga.jpg", "chalite/images/j1yKuxaqL0OiL8bhmrBP6JMRq3f4WKQDx2FZkoNY.jpg", "chalite/images/HqhqPvcl8t7qPh1w5wPSwVq56pGzDDLtYlSsgEHU.jpg"],),
            'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3488057.605727413!2d39.95974523749998!3d31.378117991227338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sil!4v1719317957657!5m2!1sar!2sil',

        ];
    }
}
