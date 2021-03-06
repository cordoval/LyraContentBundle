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

interface PageInterface
{
    function getId();

    function getContent();

    function setContent($content);

    function getMetaTitle();

    function setMetaTitle($metaTitle);

    function getMetaDescription();

    function setMetaDescription($metaDescription);
    
    function getMetaKeywords();

    function setMetaKeywords($metaKeywords);
}

