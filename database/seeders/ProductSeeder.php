<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Cameras
            [
                'name' => 'Sony A7 IV Mirrorless Camera',
                'description' => 'Full-frame 33MP mirrorless camera with advanced autofocus, 4K 60fps video, and professional features for photography and videography.',
                'price' => 139999.00,
                'image' => '/images/products/sony-a7iv.jpg',
                'category' => 'Cameras',
                'is_service' => false,
                'featured' => true,
            ],
            [
                'name' => 'Canon EOS R6 Mark II',
                'description' => '24.2MP full-frame mirrorless camera with incredible low-light performance, 40fps burst shooting, and cinema-quality video.',
                'price' => 162000.00,
                'image' => '/images/products/canon-r6.jpg',
                'category' => 'Cameras',
                'is_service' => false,
                'featured' => true,
            ],
            [
                'name' => 'Nikon Z8 Professional Camera',
                'description' => 'High-resolution 45.7MP stacked sensor camera with 8K video, exceptional dynamic range, and weather-sealed body.',
                'price' => 223500.00,
                'image' => '/images/products/nikon-z8.jpg',
                'category' => 'Cameras',
                'is_service' => false,
                'featured' => true,
            ],
            [
                'name' => 'Fujifilm X-T5 APS-C Camera',
                'description' => 'Retro-styled 40.2MP APS-C camera with film simulations, 6.2K video, and compact lightweight design.',
                'price' => 95000.00,
                'image' => '/images/products/fujifilm-xt5.jpg',
                'category' => 'Cameras',
                'is_service' => false,
                'featured' => true,
            ],
            // Drones
            [
                'name' => 'DJI Mavic 3 Pro Cine',
                'description' => 'Professional drone with Hasselblad camera, 5.1K Apple ProRes recording, 46-minute flight time, and omnidirectional obstacle sensing.',
                'price' => 268000.00,
                'image' => '/images/products/dji-mavic3.jpg',
                'category' => 'Drones',
                'is_service' => false,
                'featured' => true,
            ],
            [
                'name' => 'DJI Mini 3 Pro',
                'description' => 'Ultra-compact drone under 249g with 4K HDR video, 34-minute flight time, and advanced safety features. Perfect for travel.',
                'price' => 42500.00,
                'image' => '/images/products/mini-3-pr.jpg',
                'category' => 'Drones',
                'is_service' => false,
                'featured' => true,
            ],
            [
                'name' => 'DJI Air 3 Dual Camera Drone',
                'description' => 'Medium format drone with dual camera system, 48MP photo, 4K video, and extended 46-minute flight time.',
                'price' => 61500.00,
                'image' => '/images/products/dji-air3.jpg',
                'category' => 'Drones',
                'is_service' => false,
                'featured' => false,
            ],
            // Lenses
            [
                'name' => 'Sony FE 24-70mm f/2.8 GM II',
                'description' => 'Professional standard zoom lens with superior sharpness, fast autofocus, and weather resistance for Sony E-mount cameras.',
                'price' => 128500.00,
                'image' => '/images/products/sony-lens-24-70.jpg',
                'category' => 'Lenses',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Canon RF 70-200mm f/2.8L IS',
                'description' => 'Premium telephoto zoom lens with image stabilization, ideal for portraits, sports, and wildlife photography.',
                'price' => 156500.00,
                'image' => '/images/products/canon-lens-70-200.jpg',
                'category' => 'Lenses',
                'is_service' => false,
                'featured' => false,
            ],
            // Memory Cards & Storage
            [
                'name' => 'SanDisk Extreme PRO 256GB SD Card',
                'description' => 'Ultra-fast SDXC UHS-II memory card with 300MB/s read speed, perfect for 4K and 8K video recording.',
                'price' => 7260.00,
                'image' => '/images/products/sandisk-sd.jpg',
                'category' => 'Memory Cards',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Sony CFexpress Type A 160GB Card',
                'description' => 'High-performance CFexpress memory card with 800MB/s read speed for professional cameras and fast workflows.',
                'price' => 13970.00,
                'image' => '/images/products/sony-cfexpress.jpg',
                'category' => 'Memory Cards',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Samsung PRO Plus 512GB MicroSD',
                'description' => 'Reliable high-capacity microSD card with 160MB/s speed, ideal for drones, action cameras, and mobile devices.',
                'price' => 5030.00,
                'image' => '/images/products/samsung-microsd.jpg',
                'category' => 'Memory Cards',
                'is_service' => false,
                'featured' => false,
            ],
            // Services
            [
                'name' => 'Camera Sensor Cleaning Service',
                'description' => 'Professional sensor cleaning service using specialized tools and techniques to remove dust and spots from your camera sensor.',
                'price' => 2790.00,
                'image' => '/images/products/sensor-cleaning.jpg',
                'category' => 'Services',
                'is_service' => true,
                'featured' => false,
            ],
            [
                'name' => 'Drone Flight Training Course',
                'description' => 'Comprehensive 3-hour drone pilot training covering flight techniques, safety protocols, and cinematography basics.',
                'price' => 16770.00,
                'image' => '/images/products/drone-training.jpg',
                'category' => 'Services',
                'is_service' => true,
                'featured' => false,
            ],
            [
                'name' => 'Photography Workshop - Beginner',
                'description' => 'Full-day photography workshop covering camera settings, composition, lighting, and post-processing fundamentals.',
                'price' => 11180.00,
                'image' => '/images/products/photography-workshop.jpg',
                'category' => 'Services',
                'is_service' => true,
                'featured' => false,
            ],

            // Tripods & Support
            [
                'name' => 'Manfrotto Befree Advanced Tripod',
                'description' => 'Lightweight aluminum travel tripod with ball head, perfect for hybrid shooters needing stability on the go.',
                'price' => 14500.00,
                'image' => '/images/products/manfrotto-befree.jpg',
                'category' => 'Tripods',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Peak Design Carbon Travel Tripod',
                'description' => 'Premium carbon fiber tripod with compact folded size, quick deployment, and pro-level stability.',
                'price' => 28500.00,
                'image' => '/images/products/peak-design-tripod.jpg',
                'category' => 'Tripods',
                'is_service' => false,
                'featured' => false,
            ],

            // Lighting
            [
                'name' => 'Godox SL60W LED Video Light',
                'description' => '60W daylight-balanced LED with Bowens mount, silent fan mode, and consistent output for video.',
                'price' => 11500.00,
                'image' => '/images/products/godox-sl60w.jpg',
                'category' => 'Lighting',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Aputure Amaran 200d S',
                'description' => '200W daylight COB light with Sidus Link control, high CRI/TLCI, and sturdy Bowens mount.',
                'price' => 19500.00,
                'image' => '/images/products/amaran-200d.jpg',
                'category' => 'Lighting',
                'is_service' => false,
                'featured' => false,
            ],

            // Gimbals
            [
                'name' => 'DJI RS 4 Pro Gimbal',
                'description' => 'Professional 3-axis stabilizer with LiDAR focus support, native vertical shooting, and long battery life.',
                'price' => 47990.00,
                'image' => '/images/products/dji-rs4-pro.jpg',
                'category' => 'Gimbals',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Zhiyun Crane M4',
                'description' => 'Compact gimbal for mirrorless and action cams with quick-release plate and strong motor torque.',
                'price' => 18990.00,
                'image' => '/images/products/zhiyun-crane-m4.jpg',
                'category' => 'Gimbals',
                'is_service' => false,
                'featured' => false,
            ],

            // Action Cameras & 360
            [
                'name' => 'GoPro HERO12 Black',
                'description' => '5.3K60 action camera with improved stabilization, HDR video, and long-life Enduro battery included.',
                'price' => 24990.00,
                'image' => '/images/products/gopro-hero12.jpg',
                'category' => 'Action Cameras',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Insta360 X3 360 Camera',
                'description' => '360° camera with 5.7K capture, FlowState stabilization, and reframing for immersive content.',
                'price' => 29990.00,
                'image' => '/images/products/insta360-x3.jpg',
                'category' => 'Action Cameras',
                'is_service' => false,
                'featured' => false,
            ],

            // Instant Cameras
            [
                'name' => 'Fujifilm Instax Mini 12',
                'description' => 'Fun instant film camera with close-up mode and automatic exposure for vibrant instant prints.',
                'price' => 4290.00,
                'image' => '/images/products/instax-mini12.jpg',
                'category' => 'Instant Cameras',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Instax Mini Film Twin Pack (20 Sheets)',
                'description' => 'Two 10-sheet packs of Instax Mini film for sharp, colorful instant prints.',
                'price' => 740.00,
                'image' => '/images/products/instax-film.jpg',
                'category' => 'Instant Cameras',
                'is_service' => false,
                'featured' => false,
            ],

            // Batteries & Power
            [
                'name' => 'Sony NP-FZ100 Battery',
                'description' => 'High-capacity genuine battery for Sony Alpha series, ideal for long shoots.',
                'price' => 4200.00,
                'image' => '/images/products/sony-npfz100.jpg',
                'category' => 'Batteries',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'NP-F970 Battery Pack',
                'description' => 'Versatile high-capacity NP-F battery for lights, monitors, and accessories.',
                'price' => 2200.00,
                'image' => '/images/products/npf-970.jpg',
                'category' => 'Batteries',
                'is_service' => false,
                'featured' => false,
            ],

            // Audio
            [
                'name' => 'Rode Wireless GO II',
                'description' => 'Dual-channel wireless mic system with onboard recording and USB-C connectivity for cameras and phones.',
                'price' => 18990.00,
                'image' => '/images/products/rode-wireless-go2.jpg',
                'category' => 'Audio',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Deity V-Mic D3 Pro Shotgun Mic',
                'description' => 'Supercardioid shotgun microphone with stepless gain knob and automatic sensor switching.',
                'price' => 12990.00,
                'image' => '/images/products/deity-d3pro.jpg',
                'category' => 'Audio',
                'is_service' => false,
                'featured' => false,
            ],

            // Additional Cameras & Drones
            [
                'name' => 'Canon EOS R5 C Hybrid Cinema Camera',
                'description' => '8K60 RAW hybrid camera bridging photo and cinema workflows with active cooling.',
                'price' => 298000.00,
                'image' => '/images/products/canon-r5c.jpg',
                'category' => 'Cameras',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'Sony A7C II Compact Full-Frame',
                'description' => 'Compact full-frame 33MP camera with AI autofocus, 4K60 10-bit video, and vari-angle screen.',
                'price' => 124990.00,
                'image' => '/images/products/sony-a7c2.jpg',
                'category' => 'Cameras',
                'is_service' => false,
                'featured' => false,
            ],
            [
                'name' => 'DJI Avata 2 FPV Drone',
                'description' => 'Immersive FPV drone with stabilized 4K footage, prop guards, and long flight time for cinewhoop shots.',
                'price' => 84990.00,
                'image' => '/images/products/dji-avata2.jpg',
                'category' => 'Drones',
                'is_service' => false,
                'featured' => false,
            ],
        ];

        foreach ($products as $product) {
            // Keep existing products in sync (updates fields if name already exists)
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
