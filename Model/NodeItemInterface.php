<?php

/*
 * This file is part of the LyraContentBundle package.
 * 
 * Copyright 2011 Massimo Giagnoni <gimassimo@gmail.com>
 *
 * This source file is subject to the MIT license. Full copyright and license
 * information are in the LICENSE file distributed with this source code.
 */

namespace Lyra\ContentBundle\Model;

use Lyra\ContentBundle\Model\Node;

interface NodeItemInterface
{
    function getNode();

    function setNode(NodeInterface $node);
}
