<?php

/* dress.html */
class __TwigTemplate_f0a30352060e14a8704415280133ad24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Одевают";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"hero-unit\">
        <h1>Одевают</h1>

        <p style=\"margin-top:20px\">

            <p align=\"justify\">Деревья - главные лесные жители, они определяют весь облик леса и многие его особенности. Именно они дают ту тень и прохладу, которые нам так приятны в летний зной. Под их сенью находят приют множество своеобразных лесных растений, многие животные и птицы.

            <p align=\"justify\">В лесу деревья растут близко одно к другому и поэтому оказывают друг на друга сильное влияние. Посмотрите, как в густом лесу «тянутся» вверх их стволы, как узки их кроны, как высоко от земли начинаются их живые ветви. Все это особенно хорошо заметно, когда мы видим отдельные крупные деревья, которые остались после вырубки густого высокого леса. Но взгляните на одиночное старое дерево, которое смолоду росло на открытом месте. Оно имеет совершенно другой вид. Ствол его невысокий, более или менее извилистый, внизу толстый, а кверху быстро сходящий на нет (как говорят лесоводы - сильно сбежистый). Крона мощная, очень широкая, начинающаяся иногда чуть ли не от земли.

            <p align=\"justify\">Вытянутость деревьев в лесу - результат совместной, «скученной» жизни, когда ни одно дерево не может свободно разрастаться в ширину. Взаимодействие деревьев, жестокая конкуренция между ними - характернейшая черта леса.

        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "dress.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  33 => 5,  27 => 3,);
    }
}
