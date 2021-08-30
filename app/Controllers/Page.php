<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function page1()
    {
        echo '<h1>Page 1</h1>';
        echo '</br><a href="../Page2"><button type="submit">Next to Page 2</button></a>';
    }
    public function page2()
    {
        echo '<h1>Page 2</h1>';
        echo '</br><a href="../Page3"><button type="submit">Next to Page 3</button></a>';
    }
    public function page3()
    {
        echo '<h1>Page 3</h1>';
        echo '</br><a href="../Page4"><button type="submit">Next to Page 4</button></a>';
    }
    public function page4()
    {
        echo '<h1>Page 4</h1>';
        echo '</br><a href="../Page5"><button type="submit">Next to Page 5</button></a>';
    }
    public function page5()
    {
        echo '<h1>Page 5</h1>';
        echo '</br><a href="../Page1"><button type="submit">Back to Page 1</button></a>';
    }
}