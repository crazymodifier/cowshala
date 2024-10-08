<?php

function get_package($id)
{
    if($id == 0)
    {
        return '5-days trail';
    }
    elseif($id == 1)
    {
        return 'A2 milk 1 Ltr/day upto 30 days';
    }
    elseif($id ==2)
    {
        return 'A2 milk 2 Ltr/day upto 30 days';
    }
}