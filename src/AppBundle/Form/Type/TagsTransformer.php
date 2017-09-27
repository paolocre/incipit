<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Tag;
use Symfony\Component\Form\DataTransformerInterface;

class TagsTransformer implements DataTransformerInterface {
    public function transform($value) {

        return implode(', ', $value);
    }


    public function reverseTransform($value) {

        $tagsname = explode(', ', $value);

        $tags = [];
        foreach ($tagsname as $name) {
            $tag = new Tag();
            $tag->setName($name);
            $tags[] = $tag;
        }
        return $tags;

    }
}