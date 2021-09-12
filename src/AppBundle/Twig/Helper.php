<?php
namespace AppBundle\Twig;

class Helper extends \Twig_Extension{

    public function getFunctions()
    {
        return array(
          'generateTable' => new \Twig_Function_Method($this, 'generateTable')
        );
    }

    public function generateTable($num_columns, $num_rows){
        $table = "<table class='table'>";
        for($i = 0; $i <= $num_rows; $i++){
            $table .= "<tr>";
            for ($n = 0; $n <= $num_columns; $n++) {
                $table .= "<td>Columna $n </td>";
            }
            $table .= "</tr>";
        }
        return $table;
    }

    public function getName()
    {
        return "app_bundle";
    }
}
