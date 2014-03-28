<ul class="header main-menu">
    <?php

    if (!isset($menus) || empty($menus)) :

        $menus = $this->requestAction('/menus/index');
    endif;
    foreach($menus as $menu) :
        ?>


            <?php echo  "<a href='".$menu['Menu']['controller']."/".$menu['Menu']['action']."'>".$menu['Menu']['name']."</a>"; ?>
            &nbsp &nbsp <?php echo "|" ?> &nbsp &nbsp
    <?php endforeach; ?>
</ul>