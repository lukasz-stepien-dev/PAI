<?php
function myprint(string $text = "", ?bool $new_line = true)
    {
        print $text;
        if ($new_line === true)
        {
            print PHP_EOL;
        }
    }

myprint("Lubie ", false);
myprint("programować!");
myprint("");
myprint("Ale lubię też wakacje!");