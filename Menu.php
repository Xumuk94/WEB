<?php
class Menu
{
    public static $items = array(
        1=>"PLAY",
        2=>"ABOUT",
        3=>"TOP LIST",
    );

    // объявление метода
    public static function genMenu($pressed_button) {
        echo "<div  class=\"header__menu\">";
        for ($i=1; $i<=3; $i++) {
            if ($pressed_button !=$i) {
                echo "<a href=\"index.php?page=".$i;
                echo "\"><div class='header__button'>" . self::$items[$i] . "</div></a>";
            }
            else {
                echo "<div class='header__button header__button_pressed'>" . self::$items[$i] . "</div>";
            }
        }
        echo "</div>";
    }
}
?>