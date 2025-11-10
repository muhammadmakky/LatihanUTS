<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Writer;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $im = Category::create(['name' => 'Interactive Multimedia', 'slug' => 'interactive-multimedia']);
        $se = Category::create(['name' => 'Software Engineering', 'slug' => 'software-engineering']);
        
        $bia = Writer::create(['name' => 'Bia Mecca Annisa', 'specialty' => 'Spesialis Data Science', 'slug' => 'bia-mecca-annisa']);
        $raka = Writer::create(['name' => 'Raka Putra Wicaksono', 'specialty' => 'Spesialis Interactive Multimedia', 'slug' => 'raka-putra-wicaksono']);
        $abi = Writer::create(['name' => 'Abi Firmansyah', 'specialty' => 'Spesialis Network Security', 'slug' => 'abi-firmansyah']);
        
        Post::factory()->create([
            'category_id' => $im->id, 
            'writer_id' => $raka->id, 
            'title' => 'Human and Computer Interaction: Merancang Antarmuka Intuitif', 
            'slug' => 'human-and-computer-interaction', 
            'excerpt' => 'HCI adalah studi tentang bagaimana manusia berinteraksi dengan sistem komputasi. Fokusnya adalah merancang produk yang efisien, aman, dan mudah digunakan.',
            'body' => '<p>Interaksi Manusia dan Komputer (HCI) adalah kunci untuk pengembangan aplikasi modern. Tanpa antarmuka yang intuitif, teknologi secanggih apapun akan sulit diterima pengguna.</p><p>HCI mencakup prinsip-prinsip kognitif, psikologi, dan desain. Mulai dari tata letak tombol hingga konsistensi visual, setiap elemen antarmuka harus mendukung tujuan pengguna.</p>'
        ]);
        
        Post::factory()->create([
            'category_id' => $im->id, 
            'writer_id' => $raka->id, 
            'title' => 'User Experience (UX): Lebih dari Sekadar Tampilan', 
            'slug' => 'user-experience', 
            'excerpt' => 'UX melibatkan seluruh perjalanan pengguna saat berinteraksi dengan produk, dari kesadaran pertama hingga interaksi akhir. Ini adalah tentang memastikan pengguna merasa puas.',
            'body' => '<p>UX adalah pengalaman menyeluruh yang dirasakan pengguna. Ini bukan hanya masalah desain grafis, tetapi juga arsitektur informasi, kegunaan (usability), dan aksesibilitas.</p><p>Metodologi desain UX melibatkan riset pengguna, pembuatan persona, wireframing, dan pengujian berulang. Tujuannya adalah memecahkan masalah pengguna secara efektif dan elegan.</p>'
        ]);
        
        Post::factory()->create([
            'category_id' => $im->id, 
            'writer_id' => $raka->id, 
            'title' => 'UX untuk Teknologi Imersif: Tantangan Baru di Dunia VR/AR', 
            'slug' => 'user-experience-for-digital-immersive-technology', 
            'excerpt' => 'Fokus pada pengalaman pengguna dalam lingkungan Virtual Reality (VR), Augmented Reality (AR), dan teknologi imersif lainnya. Membutuhkan pendekatan desain 3D yang berbeda.',
            'body' => '<p>Merancang UX untuk teknologi imersif menghadirkan tantangan unik karena menghilangkan batasan layar 2D. Desainer harus mempertimbangkan kedalaman, gerakan alami, dan interaksi spasial.</p><p>Pengujian harus dilakukan secara intensif untuk menghindari mabuk gerakan (motion sickness) dan memastikan bahwa interaksi tangan/pengontrol terasa natural dan responsif. Bidang ini masih terus berkembang pesat.</p>'
        ]);

        Post::factory()->create([
            'category_id' => $se->id, 
            'writer_id' => $abi->id, 
            'title' => 'Pattern Software Design: Blueprint untuk Solusi Skalabel', 
            'slug' => 'pattern-software-design', 
            'excerpt' => 'Pattern Design adalah solusi teruji untuk masalah yang sering muncul dalam desain perangkat lunak. Menggunakan pattern membuat kode lebih mudah dipahami dan dirawat.',
            'body' => '<p>Design Patterns, seperti Singleton, Factory, atau Observer, berfungsi sebagai cetak biru yang dapat diterapkan pengembang untuk membangun sistem yang fleksibel dan tangguh.</p><p>Memahami Design Patterns adalah tanda kematangan seorang *Software Engineer*. Ini memungkinkan komunikasi yang lebih cepat antar tim dan mengurangi risiko kompleksitas yang tidak perlu di masa depan.</p>'
        ]);
        
        Post::factory()->create([
            'category_id' => $se->id, 
            'writer_id' => $abi->id, 
            'title' => 'Agile Software Development: Kecepatan dan Adaptabilitas', 
            'slug' => 'agile-software-development', 
            'excerpt' => 'Agile adalah serangkaian prinsip yang mengutamakan kolaborasi, perubahan, dan pengiriman *incremental*. Ini berbeda dari metodologi Waterfall tradisional.',
            'body' => '<p>Prinsip Agile didorong oleh Manifestonya, yang menekankan individu dan interaksi daripada proses dan alat, serta perangkat lunak yang berfungsi daripada dokumentasi komprehensif.</p><p>Metode populer di bawah Agile termasuk Scrum dan Kanban. Keduanya bertujuan untuk meningkatkan respons tim terhadap perubahan kebutuhan klien dan pasar.</p>'
        ]);
        
        Post::factory()->create([
            'category_id' => $se->id, 
            'writer_id' => $abi->id, 
            'title' => 'Code Reengineering: Meremajakan Sistem Lama', 
            'slug' => 'code-reengineering', 
            'excerpt' => 'Code Reengineering melibatkan pemeriksaan, restrukturisasi, atau pembaruan kode tanpa mengubah fungsionalitas eksternalnya. Penting untuk sistem warisan (legacy systems).',
            'body' => '<p>Reengineering dilakukan untuk meningkatkan kualitas kode, mengurangi *technical debt*, dan memastikan sistem lama dapat diintegrasikan dengan teknologi modern. Ini bukan sekadar membersihkan kode, tetapi memikirkan ulang arsitektur.</p><p>Langkah-langkahnya melibatkan analisis kode, restrukturisasi, dan kemudian pengujian ekstensif untuk memastikan tidak ada regresi fungsionalitas yang terjadi selama proses tersebut.</p>'
        ]);
        
        Post::factory(6)->create(['is_popular' => true, 'writer_id' => $bia->id, 'category_id' => $im->id]);
    }
}