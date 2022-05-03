<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //product create buat isi data dari si productnya
        /*   BUAT ISI GAMBAR ====>>>>> <img src="image/<?php echo $data['nama_image']; ?>" border="0"/>*/

        Product::create([

            'name' => 'iPhone X',
            'brand' => 'Apple',
            'image' => 'img/iphone-x.jpg',
            'description' => 'iPhone X features a 5.8-inch Super Retina display with HDR and True Tone. An all-screen design and a surgical-grade stainless steel band. Charges wirelessly. Resists water and dust. 12MP dual cameras with dual optical image stabilization. TrueDepth camera with Portrait mode and Portrait Lighting. Face ID lets you unlock and use Apple Pay with just a glance. Powered by the A11 Bionic chip, iPhone X supports augmented reality experiences in games and apps. And with iOS 12—the most advanced mobile operating system—you’ll have powerful new tools that make iPhone more personal than ever.',
            'price' => 899.99,
            'discount' => 10,
            'stock' => 30
        ]);

        Product::create([
            'name' => 'iPhone XR',
            'brand' => 'Apple',
            'image' => 'img/iphone-xr.jpg',
            'description' => 'iPhone XR features the most advanced LCD in a smartphone—a 6.1-inch Liquid Retina display with industry-leading color accuracy and an innovative backlight design that allows the screen to stretch into the corners. Six stunning new finishes. Advanced Face ID lets you securely unlock your iPhone, log in to apps, and pay with just a glance. The A12 Bionic chip with next-generation Neural Engine uses real-time machine learning to transform the way you experience photos, gaming, augmented reality, and more. A breakthrough 12MP camera system with Portrait mode, Portrait Lighting, enhanced bokeh, and all-new Depth Control. Water resistance. And iOS 12—the most advanced mobile operating system in the world—with powerful new tools that make iPhone more personal than ever.',
            'price' => 899.99,
            'discount' => 10,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'iPhone XS Max',
            'brand' => 'Apple',
            'image' => 'img/iphone-xs-max.jpg',
            'description' => 'iPhone XS Max features a 6.5-inch Super Retina display with custom-built OLED panels for an HDR display that provides the industry’s best color accuracy, true blacks, and remarkable brightness. Advanced Face ID lets you securely unlock your iPhone, log in to apps, and pay with just a glance. The A12 Bionic chip with next-generation Neural Engine uses real-time machine learning to transform the way you experience photos, gaming, augmented reality, and more. A breakthrough 12MP dual-camera system takes your portraits to the next level with Portrait mode, Portrait Lighting, enhanced bokeh, and all-new Depth Control. Water resistance. And iOS 12—the most advanced mobile operating system—with powerful new tools that make iPhone more personal than ever.',
            'price' => 1449.99,
            'discount' => 10,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'iPhone XS',
            'brand' => 'Apple',
            'image' => 'img/iphone-xs.jpg',
            'description' => 'iPhone XS features a 5.8-inch Super Retina display with custom-built OLED panels for an HDR display that provides the industry’s best color accuracy, true blacks, and remarkable brightness. Advanced Face ID lets you securely unlock your iPhone, log in to apps, and pay with just a glance. The A12 Bionic chip with next-generation Neural Engine uses real-time machine learning to transform the way you experience photos, gaming, augmented reality, and more. A breakthrough 12MP dual-camera system takes your portraits to the next level with Portrait mode, Portrait Lighting, enhanced bokeh, and all-new Depth Control. Water resistance. And iOS 12—the most advanced mobile operating system—with powerful new tools that make iPhone more personal than ever.',
            'price' => 1149.99,
            'discount' => 10,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'iPhone 8',
            'brand' => 'Apple',
            'image' => 'img/iphone-8.jpg',
            'description' => 'iPhone 8 features an all-glass design and an aerospace-grade aluminum band. Charges wirelessly. Resists water and dust.2 4.7-inch Retina HD display with True Tone. 12MP camera with an advanced image signal processor. Powered by the A11 Bionic chip. Supports augmented reality experiences in games and apps. And with iOS 12—the most advanced mobile operating system—you’ll have powerful new tools that make iPhone more personal than ever.',
            'price' => 599.99,
            'discount' => 10,
            'stock' => 35
        ]);

        Product::create([
            'name' => 'iPhone 8 Plus',
            'brand' => 'Apple',
            'image' => 'img/iphone-8-plus.jpg',
            'description' => 'iPhone 8 Plus features an all-glass design and an aerospace-grade aluminum band. Charges wirelessly. Resists water and dust.2 5.5-inch Retina HD display with True Tone. 12MP dual cameras with Portrait mode and Portrait Lighting. Powered by the A11 Bionic chip. Supports augmented reality experiences in games and apps. And with iOS 12—the most advanced mobile operating system—you’ll have powerful new tools that make iPhone more personal than ever.',
            'price' => 699.99,
            'discount' => 10,
            'stock' => 35
        ]);

        Product::create([
            'name' => 'iPhone 7 Plus',
            'brand' => 'Apple',
            'image' => 'img/iphone-7-plus.jpg',
            'description' => 'iPhone 7 Plus features 12MP dual cameras with 4K video, optical image stabilization, and Portrait mode. A 5.5-inch Retina HD display with wide color gamut and 3D Touch. A10 Fusion chip for high performance. Great battery life. Water and dust resistance. And with iOS 12—the most advanced mobile operating system—you’ll have powerful new tools that make iPhone more personal than ever.',
            'price' => 569.99,
            'discount' => 10,
            'stock' => 30
        ]);

        Product::create([
            'name' => 'iPhone 7',
            'brand' => 'Apple',
            'image' => 'img/iphone-7.jpg',
            'description' => 'iPhone 7 features a 12MP camera with 4K video and optical image stabilization, a 4.7-inch Retina HD display with wide color gamut and 3D Touch, A10 Fusion chip for high performance, great battery life, and water and dust resistance. And with iOS 12—the most advanced mobile operating system—you’ll have powerful new tools that make iPhone more personal than ever.',
            'price' => 449.99,
            'discount' => 10,
            'stock' => 30
        ]);

        Product::create([
            'name' => 'Galaxy Note 8',
            'brand' => 'Samsung',
            'image' => 'img/galaxy-note-8.jpg',
            'description' => 'Do bigger things. Introducing the Samsung Galaxy Note8 featuring: With the S Pen, take notes without unlocking your screen, handwrite messages and make GIFs. With the feel more like a real pen, you have control over everything on your phone. And now the S Pen is water resistant. Dual rear 12 MP cameras with an 8 MP front camera allows you to take professional quality photos. Shoot in the dark or from a distance and photos are clear with Optical Image Stabilization on both lenses. A bigger view in a slimmer phone, with an 83-percent screen-to-body ratio, the Galaxy Note8 gives you more screen to work with and less phone to hold. Now, featuring DIGITS™ - only from T-Mobile. Access your numbers seamlessly with DIGITS and Samsung. With DIGITS™, you can access up to 5 numbers on one device. Or, use one number across multiple devices.',
            'price' => 839.99,
            'discount' => 15,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'Samsung S9',
            'brand' => 'Samsung',
            'image' => 'img/samsung-s9.jpg',
            'description' => 'The Samsung Galaxy S9 is here with the camera re-imagined! Take professional quality photos with the dual aperture camera, and capture stunning pictures whether you’re in bright daylight, moonlight, or super low light. Slow down reality in Super Slow-Mo mode that allows you to record 960 frames per second so you can see every detail. Create an emoji that looks, sounds, and acts just like you with the AR Emoji feature. Enjoy an even more immersive entertainment experience with the Galaxy S9’s brilliant 5.8” infinity QHD display, now enhanced with Dolby Atmos surround sound speakers. Built with the amazingly fast Qualcomm® Snapdragon™ 845 processor, the Samsung Galaxy S9 can take full advantage of T-Mobile’s expanding Extended Range 4G LTE network which travels twice as far and provides 4 times better in building coverage. It’s Samsung’s fastest ever phone and it demands the fastest ever network.',
            'price' => 719.99,
            'discount' => 15,
            'stock' => 50
        ]);



    }
}
