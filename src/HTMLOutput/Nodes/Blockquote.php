<?php

namespace Tiptap\HTMLOutput\Nodes;

use Tiptap\HTMLOutput\Contracts\Node;

class Blockquote extends Node
{
    public $name = 'blockquote';

    public function renderHTML()
    {
        return 'blockquote';
    }
}
