<?php
/**
 * @copyright Copyright (c) 2008 – 2017 www.08cms.com
 * @author 08cms项目开发团队
 * @package 08cms
 * create date 2017年4月6日
 */
namespace CoreBundle\Model\Expr;

interface Expression
{
    /**
     * @param ExpressionVisitor $visitor
     *
     * @return mixed
     */
    public function visit(ExpressionVisitor $visitor);
}

?>