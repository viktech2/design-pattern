<?php
// Adaptee
class Facebook {

    public function __construct(){        
    }

    public function postWall(){
        echo 'Posting...';
    }
}

// Target
interface postInterface {
    public function post();
}

// Adapter
class postAdapter implements postInterface {

    private $post;

    public function __construct(Facebook $facebook){
        $this->post = $facebook;
    }

    public function post(){
        $this->post->postWall();
    }
}


$p = new postAdapter(new Facebook);
$p->post();
echo PHP_EOL;

?>