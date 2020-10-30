<?php


namespace Source\Controllers;


use Source\Models\Category;
use Source\Models\Post;

class Web extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function home()
    {
        $posts = (new Post())->find()->limit(3)->fetch(true);
        $head = $this->seo->optimize(
            "Bem vindo a {SITE['name']}",
            site('desc'),
            $this->router->route("web.home"),
            routeImage("GNU MOBILE")
        )->render();

        echo $this->view->render("theme/pages/home",[
            "head" => $head,
            "posts" => $posts
        ]);
    }

    public function services()
    {
        $head = $this->seo->optimize(
            "Bem vindo a {SITE['name']}",
            site('desc'),
            $this->router->route("web.services"),
            routeImage("GNU MOBILE")
        )->render();

        echo $this->view->render("theme/pages/services",[
            "head" => $head,
        ]);
    }

    public function test()
    {

        /* CREATE POST */
//        for($i = 2; $i< 20; $i++){
//            $post = new Post();
//            $post->title = "Post Exemplo {$i}";
//            $post->slug = "post-exemplo-{$i}";
//            $post->image = "gnu-presentation2.png";
//            $post->resume = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat dui a sem lobortis, non auctor orci venenatis. Sed cursus purus at nisl ultrices lobortis. Maecenas sapien lorem, molestie id dolor in, consectetur rutrum orci. Quisque risus neque est.";
//            $post->content = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis est ut urna rhoncus ultricies. Curabitur mauris magna, aliquet sit amet massa eget, congue interdum dolor. Suspendisse diam sem, maximus eget porta sit amet, molestie a ex. Vestibulum fermentum fringilla nibh, at ornare libero tincidunt ut. Suspendisse ac semper turpis, eu mattis eros. Ut ultricies metus non metus sodales porta. Vestibulum et hendrerit erat. Cras mattis massa imperdiet, convallis libero ac, maximus turpis. Mauris ut scelerisque ante. Sed tincidunt lacinia libero, ac tincidunt velit facilisis id. Mauris nisi orci, consectetur et ipsum vel, rutrum finibus ex. Nam et justo enim.</p><p>Duis semper vitae velit ac gravida. Ut velit enim, lobortis sit amet est sit amet, pulvinar interdum risus. Vestibulum sagittis mauris quis metus pellentesque ullamcorper. Curabitur sed vestibulum arcu. Sed dapibus fringilla orci, a sollicitudin quam luctus volutpat. Nam rutrum faucibus metus porttitor venenatis. Suspendisse ut congue massa. Curabitur egestas, libero non vestibulum pellentesque, est elit eleifend est, in dapibus mi elit vulputate tellus. Aliquam ornare libero vitae feugiat rhoncus. Etiam consectetur ipsum at arcu tristique, ut sodales justo malesuada. Nam euismod est in tortor lacinia mollis quis sed tortor. Maecenas porttitor ante non sollicitudin mollis. Fusce quis dui aliquet arcu tristique placerat. Mauris imperdiet, magna id tristique pharetra, tortor sapien fringilla arcu, aliquam molestie nibh lacus quis quam.</p><p>Pellentesque fringilla diam lorem, vitae blandit orci luctus porta. Donec vel lacinia felis. Aenean vel imperdiet massa, ut sagittis libero. Etiam et malesuada leo, ut dictum augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas nunc orci, vehicula et mauris a, pharetra vehicula tellus. Nullam vitae sollicitudin tellus, id vulputate nisi. Fusce nec nulla quam. Morbi hendrerit convallis enim ac suscipit. Nulla et cursus nibh, a egestas enim. Donec ac fermentum mi. Maecenas vel ex sed sem facilisis mollis non sit amet libero. Praesent tempor fringilla tortor, mattis vestibulum eros. Vestibulum ex est, congue a urna non, hendrerit interdum elit. Fusce quis turpis et tellus porttitor pretium non at dolor. Praesent commodo dapibus orci, id fringilla nisi efficitur a.</p><p>Fusce rhoncus maximus diam a dictum. Cras nec ultricies urna. Nam mattis ac massa a scelerisque. Praesent tellus orci, congue vitae euismod eu, ornare in lorem. Praesent pharetra sed tortor placerat lacinia. Sed dolor lorem, aliquet nec dolor accumsan, finibus dapibus urna. Nulla blandit metus turpis, vel feugiat est consequat et. Proin nec lobortis lacus, venenatis faucibus purus. Pellentesque blandit magna eget arcu egestas, sed eleifend lacus vestibulum. Suspendisse tempor tellus at mauris aliquam, non auctor turpis placerat. Donec a convallis turpis. Aliquam dapibus nisl nisi, eget condimentum sapien congue sed. Mauris accumsan, mi sit amet elementum semper, urna dui cursus ipsum, non mattis mi ligula et nisi. Mauris blandit, enim sit amet sollicitudin tempus, nibh enim feugiat arcu, eu facilisis orci tortor vel sem.</p><p>Proin scelerisque metus ac viverra dapibus. Nulla pellentesque congue erat ut feugiat. Sed sit amet lorem ut ligula ultrices tristique. Donec mattis neque et purus convallis tempus. Suspendisse facilisis ipsum libero, sed rhoncus ipsum euismod sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ante dolor, sagittis quis lectus sit amet, viverra dictum lacus.</p>";
//            $post->category = 1;
//            $post->save();
//            if($post->fail()){
//                echo $post->fail()->getMessage();
//                echo '<br>';
//                echo '<hr>';
//            }else{
//                var_dump($post->data());
//                echo '<br>';
//                echo '<hr>';
//            }
//        }

        /* DELETE POST */
//        for($i=11; $i<20; $i++){
//            $post = (new Post())->findById($i);
//            $post->destroy();
//        }

        /* CREATE CATEGORY */
//        for($i = 1; $i<=5; $i++){
//            $cat = new Category();
//            $cat->name = "Exemplo {$i}";
//            $cat->save();
//            if($cat->fail()){
//                echo $cat->fail()->getMessage();
//            }else{
//                var_dump($cat->data());
//                echo '<br>';
//                echo '<hr>';
//            }
//        }

        /* DELETE CATEGORY */
//        for($i = 6; $i<=10; $i++) {
//            $cat = (new Category())->findById($i);
//            $cat->destroy();
//        }



    }
}