<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 
        [
            'title' => 'Graphic Design Services',
            'content' => 'Kami telah sukses mengerjakan lebih dari 70 logo untuk perusahaan besar, menengah ataupun kecil dengan hasil terbaik dan sesuai dengan masing-masing bisnis.',
            'image' => 'http://www.classicwebdesigns.net/wp-content/uploads/2020/08/graphic_designing.png' 
        ],

        [
            'title' => 'Digital Advertising',
            'content' => 'Kami menawarkan pemasangan iklan di berbagai channel online, mulai dari Google Ads, FB/IG Ads, Youtube Ads, dan Tiktok Ads.',
            'image' => 'http://www.classicwebdesigns.net/wp-content/uploads/2020/08/graphic_designing.png' 
        ],

        [
            'title' => 'Content Marketing',
            'content' => 'Kami menawarkan sarana marketing berupa konten, baik yang bentuknya tulisan, audio, gambar, atau video.',
            'image' => 'https://101red.com/prime/wp-content/uploads/2021/05/Content-Marketing-Pengertian-Fungsi-dan-Contoh-Penerapannya.png' 
        ],

        [
            'title' => 'Email Marketing',
            'content' => 'Kami menawarkan strategi digital marketing melalui surat elektronik yang paling cocok diterapkan oleh usaha dengan model business-to-business (B2B).',
            'image' => 'https://assets.hongkiat.com/uploads/email-marketing-tips-to-do-it-well/email-marketing.jpg' 
        ],
    ];  
        DB::table('posts')->insert($data);
    }
}
