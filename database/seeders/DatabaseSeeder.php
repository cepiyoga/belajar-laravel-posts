<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\CobaCepi;
use App\Models\ItemCode;
use App\Models\SalesData;
use Illuminate\Database\Seeder;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        


        // SalesData::create(['SOC'=>'ABC23','ItemNumber'=>'A1','Jumlah'=>200]);
        // SalesData::create(['SOC'=>'ABC11','ItemNumber'=>'B2','Jumlah'=>100]);
        // SalesData::create(['SOC'=>'ABC12','ItemNumber'=>'C3','Jumlah'=>300]);
        // SalesData::create(['SOC'=>'ABC13','ItemNumber'=>'D4','Jumlah'=>400]);
        // SalesData::create(['SOC'=>'ABC14','ItemNumber'=>'B2','Jumlah'=>500]);


        // ItemCode::create(['id'=>'A1','Description'=>'Bardoline','Unit'=>'Qty']);
        // ItemCode::create(['id'=>'B2','Description'=>'Onduline Classic','Unit'=>'Qty']);
        // ItemCode::create(['id'=>'C3','Description'=>'Onduline Tile','Unit'=>'Qty']);
        // ItemCode::create(['id'=>'D4','Description'=>'Onduvilla','Unit'=>'Qty']);

        CobaCepi::create([
            'nama'=>'Cepi Yoga'
        ]);

        User::create([
            'name'=> 'Cepi Yoga',
            'username'=>'cepiyoga',
            'email' => 'cepiyoga@gmail.com',
            'password'=>'password',
        ]);
        
        // User::create([
        //     'name'=> 'Naufal Yoga',
        //     'email' => 'naufal@gmail.com',
        //     'password'=>'abc123',
        // ]);

        // User::create([
        //     'name'=> 'Ratih Uswatunnisa',
        //     'email' => 'ratih@gmail.com',
        //     'password'=>'abc123',
        // ]);

        // Post::create([
        //     'title'=>'Post Pertama',
        //     'category_id'=>1,
        //     'user_id'=>1,
        //     'slug' => 'post-pertama',
        //     'excerpt'=>'Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore, reiciendis ipsum dolore voluptatibus quae excepturi! Ut maxime excepturi amet? Dolor earum distinctio omnis rerum nam esse. Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit. Ullam reprehenderit eaque recusandae ab inventore eligendi</p><p> temporibus nulla ad nobis placeat pariatur atque aliquid quod tempore ex. Voluptatibus maiores odio at suscipit. Distinctio unde quis ex voluptates non minus dolorum dignissimos culpa mollitia error aperiam rerum amet, quia sit exercitationem ipsum consequuntur nostrum, blanditiis tempora illo quibusdam. Vero, at! Velit minus illum libero, iste excepturi aperiam omnis dicta quos.</p>'
        //     ]);
            
            
        //    Post::create([
        //     'title'=>'Post Ke Dua',
        //     'category_id'=>1,
        //     'user_id'=>2,
        //     'slug' => 'post-ke-dua',
        //     'excerpt'=>'Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore, reiciendis ipsum dolore voluptatibus quae excepturi! Ut maxime excepturi amet? Dolor earum distinctio omnis rerum nam esse. Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit. Ullam reprehenderit eaque recusandae ab inventore eligendi</p><p> temporibus nulla ad nobis placeat pariatur atque aliquid quod tempore ex. Voluptatibus maiores odio at suscipit. Distinctio unde quis ex voluptates non minus dolorum dignissimos culpa mollitia error aperiam rerum amet, quia sit exercitationem ipsum consequuntur nostrum, blanditiis tempora illo quibusdam. Vero, at! Velit minus illum libero, iste excepturi aperiam omnis dicta quos.</p>'
        //     ]);
            
            
        //     Post::create([
        //     'title'=>'Post Ketiga',
        //     'category_id'=>2,
        //     'user_id'=>3,
        //     'slug' => 'post-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore, reiciendis ipsum dolore voluptatibus quae excepturi! Ut maxime excepturi amet? Dolor earum distinctio omnis rerum nam esse. Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit. Ullam reprehenderit eaque recusandae ab inventore eligendi</p><p> temporibus nulla ad nobis placeat pariatur atque aliquid quod tempore ex. Voluptatibus maiores odio at suscipit. Distinctio unde quis ex voluptates non minus dolorum dignissimos culpa mollitia error aperiam rerum amet, quia sit exercitationem ipsum consequuntur nostrum, blanditiis tempora illo quibusdam. Vero, at! Velit minus illum libero, iste excepturi aperiam omnis dicta quos.</p>'
        //     ]);
            
            
        //     Post::create([
        //     'title'=>'Post Ke Empat',
        //     'category_id'=>2,
        //     'user_id'=>2,
        //     'slug' => 'post-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore, reiciendis ipsum dolore voluptatibus quae excepturi! Ut maxime excepturi amet? Dolor earum distinctio omnis rerum nam esse. Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit. Ullam reprehenderit eaque recusandae ab inventore eligendi</p><p> temporibus nulla ad nobis placeat pariatur atque aliquid quod tempore ex. Voluptatibus maiores odio at suscipit. Distinctio unde quis ex voluptates non minus dolorum dignissimos culpa mollitia error aperiam rerum amet, quia sit exercitationem ipsum consequuntur nostrum, blanditiis tempora illo quibusdam. Vero, at! Velit minus illum libero, iste excepturi aperiam omnis dicta quos.</p>'
        //     ]);
            
            
        //     Post::create([
        //     'title'=>'Post Ke Lima',
        //     'category_id'=>3,
        //     'user_id'=>1,
        //     'slug' => 'post-ke-lima',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolorum hic quidem laborum enim officiis consequatur cupiditate quam, eum esse voluptatibus adipisci',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolorum hic quidem laborum enim officiis consequatur cupiditate quam, eum esse voluptatibus adipisci, autem natus voluptatum provident, nihil dolore? Nam quod sequi corporis natus dolores! Quasi harum quidem ullam, assumenda nam tempora quia quam sed exercitationem at odit quas similique, debitis sunt, tenetur laudantium suscipit temporibus natus minus? Corporis incidunt ullam id molestias ipsum repellendus dignissimos fugit odio rerum quae similique ab tempore explicabo blanditiis accusantium, cupiditate adipisci obcaecati velit! Ullam perferendis,</p><p> accusantium reprehenderit aut earum architecto exercitationem? Quia numquam, neque nam tenetur est praesentium odio ex dolorem! Voluptatibus nobis dicta, explicabo fugit possimus fugiat ipsam, repudiandae alias incidunt, dolores dolor qui tenetur quo. Dolorum expedita esse voluptatibus deserunt, velit similique exercitationem, reprehenderit explicabo repellat quia amet quo sapiente totam debitis ullam dolorem. </p><p>Debitis placeat perspiciatis asperiores reprehenderit provident quaerat cumque ut nulla, cum fuga porro fugit blanditiis possimus, laudantium quisquam mollitia. Illo velit corporis assumenda consequatur veritatis blanditiis soluta ipsa eos mollitia nostrum ducimus nulla, dolorum necessitatibus eaque repudiandae ut expedita et cumque, nisi animi porro tempora, ex harum! Quidem soluta modi in fugit corrupti deserunt numquam, sed, alias nam reiciendis accusantium error ipsum sapiente laborum aliquam. Explicabo quasi vero provident neque, consequuntur cum placeat sed possimus quae maiores, dolore cupiditate sequi id blanditiis nesciunt itaque perferendis alias, in eos nam repellendus dolorum ipsa architecto. Magni, </p><p>velit quod illo reprehenderit perferendis cumque. Nam pariatur dolore aliquam, nemo aut a officiis excepturi voluptatibus quibusdam? Commodi aliquid totam quam cupiditate illum ipsum dolor aut molestiae aperiam sunt quo, similique ipsa ducimus, enim ratione ut, nihil mollitia facere quis necessitatibus! Esse voluptate, aut quaerat at rem accusamus dolorem provident vitae doloribus optio voluptatibus tenetur sequi, ad cumque deleniti eos nesciunt ab expedita. Optio aliquam, asperiores obcaecati iure recusandae dicta culpa, placeat delectus, quaerat adipisci perspiciatis ipsam non alias libero quis nam modi itaque aperiam. Enim maxime odit vel, praesentium molestias, consequatur blanditiis velit incidunt laborum dicta deserunt distinctio repudiandae cum iste illo et ipsam! Dolor, quibusdam laboriosam. Dignissimos voluptatum minus nobis fugiat eos fugit ullam inventore nostrum. Vel, quam ex. Nulla aut excepturi tempora, dolores totam rerum maxime reprehenderit praesentium debitis sit consectetur dolorem odit natus est! Nemo non laborum necessitatibus rem eius culpa, consequatur autem quis maiores ratione pariatur neque ipsam blanditiis natus sed qui cum earum illum. Obcaecati neque quos, ipsum cum tenetur cumque consequatur doloremque facere reiciendis quae libero corporis magni.</p><p> Repellat dignissimos ullam nesciunt veritatis esse. Rem porro aperiam corporis ea, itaque qui velit quia excepturi laborum, vitae quos, voluptates dolores quod? Est tempore doloribus, reiciendis nostrum praesentium dicta dolores repellendus nesciunt assumenda, sunt provident perferendis exercitationem molestias aliquam ipsa repudiandae consequuntur! Adipisci quia culpa nobis, molestias neque atque eaque at aliquam incidunt delectus ea repudiandae, mollitia repellat libero, fugit provident perferendis esse facilis? Inventore, architecto at. Saepe minus corporis eius, beatae aliquid doloremque ab sunt voluptatibus laudantium itaque? Ut aspernatur, ipsam praesentium commodi itaque non, rerum ea aperiam voluptate explicabo similique dolore odio ipsum iure facilis excepturi placeat.</p>'
        //     ]);
            
            
        //     Post::create([
        //     'category_id'=>2,
        //     'user_id'=>3,
        //     'title'=>'Post Ke Enam',
        //     'slug' => 'post-ke-enam',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quasi voluptatem molestias dicta ex earum incidunt facere, esse, veritatis quo eligendi quibusdam tempore, reiciendis ipsum dolore voluptatibus quae excepturi! Ut maxime excepturi amet? Dolor earum distinctio omnis rerum nam esse. Nemo deserunt, minus ipsum praesentium adipisci esse dolorum eaque deleniti atque aliquid. Reprehenderit blanditiis nihil vitae optio pariatur asperiores fugit. Ullam reprehenderit eaque recusandae ab inventore eligendi</p><p> temporibus nulla ad nobis placeat pariatur atque aliquid quod tempore ex. Voluptatibus maiores odio at suscipit. Distinctio unde quis ex voluptates non minus dolorum dignissimos culpa mollitia error aperiam rerum amet, quia sit exercitationem ipsum consequuntur nostrum, blanditiis tempora illo quibusdam. Vero, at! Velit minus illum libero, iste excepturi aperiam omnis dicta quos.</p>'
        //     ]);
            
            
            Category::create([
            'name'=>'Programing',
            'slug'=>'programing',
            ]);
            
            
            Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design',
            ]);
            
            
            Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
            ]);
            
            User::factory(5)->create();
            Post::factory(50)->create();
            


    }
}
