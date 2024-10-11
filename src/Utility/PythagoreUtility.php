<?php

// src/Utility/PythagoreUtility.php

namespace App\Utility;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table style="border-collapse:collapse; width:50%; text-align:center;margin:20px; ">';

        for ($i = 0; $i <= 10; $i++) {
            $html .= '<tr style= "border-bottom:1px solid #eee; padding:10px;">';
            for ($j = 0; $j <= 10; $j++) {
                $html .= '<td style= "border-left:1px solid #eee; padding:10px;">';
                if($i === 0){
                    $html .= $j;
                }else if($j === 0){
                    $html .= $i;
                }else if($i === $j){
                    $html .= 'X';
                }else{
                    $html .= $i * $j;
                }
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        return $html;
    }
}