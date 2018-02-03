<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-10-11
 * Time: 10:08
 */

namespace SwooleLib\Context;

/**
 * Interface ContextManagerInterface
 * @package SwooleLib\Context
 */
interface ContextManagerInterface
{
    /**
     * @param ContextInterface $context
     */
    public function add(ContextInterface $context);

    /**
     * @param string|int $id
     * @return ContextInterface|null
     */
    public function get($id = null);

    /**
     * @param int|string|ContextInterface $id
     * @return ContextInterface|null
     */
    public function del($id = null);

    /**
     * @return int
     */
    public function count():int ;

    /**
     * @return \ArrayIterator
     */
    public function getIterator();
}
