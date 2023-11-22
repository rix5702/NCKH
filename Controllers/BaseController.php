<?php

class BaseController 
{
    const VIEW_FOLDER_NAME = 'Views';
    //Description: 
    // + path name: folder.file.name
    // + Lay tu sau thu muc view

    protected function view($viewpath)
    {
        $viewpath = self::VIEW_FOLDER_NAME . '/' . str_replace('.','/', $viewpath) . '.php';
        die($viewpath);
        require ($viewpath);
    }

}