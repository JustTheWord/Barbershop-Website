<?php
declare(strict_types=1);
class View
{

    function generate($content_view, $template_view, $data = null)
    {

        if (is_array($data))
        {
            extract($data);
        }

	/*
	Dynamically include the general pattern (view) inside
	which will inserted content of the certnain page
        */
        include 'application/views/'.$template_view;
    }
}
