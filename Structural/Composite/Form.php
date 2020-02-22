<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:16
 */

/**
 * The composite node MUST extend the component contract. This is mandatory for building
 * a tree of components.
 */
class Form implements RenderableIF
{
    /**
     * @var RenderableIF[]
     */
    private  $elements;

    /**
     * runs through all elements and calls render() on them, then returns the complete representation
     * of the form.
     *
     * from the outside, one will not see this and the form will act like a single object instance
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableIF $element)
    {
        $this->elements[] = $element;
    }
}