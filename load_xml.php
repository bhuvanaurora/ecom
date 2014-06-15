<?php
    
    function menu()
    {
        $dom = simplexml_load_file('menu.xml');
        
        foreach($dom->xpath('/menu') as $contents)
        {
            foreach ($contents->specialities as $menu_items)
            {
                
                foreach($menu_items->title as $consumables)
                {
                        print "<h2>";
                        print $consumables[@name];
                        print "</h2>";
                        
                        foreach ($consumables->type as $consumable)
                        {
                            print "<br />";
                            print ($consumable[@name]);
                            $i = 10;
                            while($i>0)
                            {
                                print " ...";
                                $i -= 1;
                            }
                            print ($consumable);
                            print " ";
                            print "<form action='checkout.php' method='POST'>";
                            print "<input type='text' style='width:30px;' name=" . $consumable[@name] . ">"; print " ";
                            print "<input type='submit' value='Add to cart'>";
                            print "</form>";
                        }
                        print "<br /><br />";                    
                 }
            }
        }
        
        print "<a href='checkout.php'>I am good to go!</a>";
    }
?>
