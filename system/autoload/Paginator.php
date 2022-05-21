<?php
/**
* PHP Mikrotik Billing (https://ibnux.github.io/phpmixbill/)


* @copyright	Copyright (C) 2014-2015 PHP Mikrotik Billing
* @license		GNU General Public License version 2 or later; see LICENSE.txt

**/

Class Paginator
{
    public static function bootstrap($table, $w1='',$c1='', $w2='', $c2= '', $w3='',$c3='', $w4='', $c4= '', $per_page = '10')
    {
		global $routes;
        global $_L;
        $url = U.$routes['0'].'/'.$routes['1'].'/';
        $adjacents = "2";
        $page = (int)(!isset($routes['2']) ? 1 : $routes['2']);
        $pagination = "";

        if($w1 != ''){
            $totalReq = ORM::for_table($table)->where($w1,$c1)->count();
        }elseif($w2 != ''){
            $totalReq = ORM::for_table($table)->where($w1,$c1)->where($w2,$c2)->count();
        }elseif($w3 != ''){
            $totalReq = ORM::for_table($table)->where($w1,$c1)->where($w2,$c2)->where($w3,$c3)->count();
        }elseif($w4 != ''){
            $totalReq = ORM::for_table($table)->where($w1,$c1)->where($w2,$c2)->where($w3,$c3)->where($w4,$c4)->count();
        }else{
            $totalReq = ORM::for_table($table)->count();
        }

        $i = 0;
        $page = ($page == 0 ? 1 : $page);
        $start = ($page - 1) * $per_page;

        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($totalReq / $per_page);

        $lpm1 = $lastpage - 1;
        $limit = $per_page;
        $startpoint = ($page * $limit) - $limit;

        if ($lastpage >= 1) {
            $pagination .= '<ul class="pagination pagination-sm m-0 float-right">';
            if ($lastpage < 7 + ($adjacents * 2)) {
                for ($counter = 1; $counter <= $lastpage; $counter++) {
                    if ($counter == $page)
                        $pagination .= "<li class='page-item active'><a class='page-link' href='javascript:void(0);'>$counter</a></li>";
                    else
                        $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$counter'>$counter</a></li>";
                }
            } elseif ($lastpage > 5 + ($adjacents * 2)) {
                if ($page < 1 + ($adjacents * 2)) {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                        if ($counter == $page)
                            $pagination .= "<li class='page-item active'><a class='page-link' href='javascript:void(0);'>$counter</a></li>";
                        else
                            $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$counter'>$counter</a></li>";
                    }
                    $pagination .= "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$lpm1'>$lpm1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$lastpage'>$lastpage</a></li>";
                } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}1'>1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}2'>2</a></li>";
                    $pagination .= "<li class='disabled'><a class='page-link' href='#'>...</a></li>";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                        if ($counter == $page)
                            $pagination .= "<li class='page-item active'><a class='page-link' href='javascript:void(0);'>$counter</a></li>";
                        else
                            $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$counter'>$counter</a></li>";
                    }
                    $pagination .= "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$lpm1'>$lpm1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$lastpage'>$lastpage</a></li>";
                } else {
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}1'>1</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='{$url}2'>2</a></li>";
                    $pagination .= "<li class='page-item'><a class='page-link' href='#'>...</a></li>";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                        if ($counter == $page)
                            $pagination .= "<li class='page-item active'><a class='page-link' class='disabled'>$counter</a></li>";
                        else
                            $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$counter'>$counter</a></li>";
                    }
                }
            }

            if ($page < $counter - 1) {
                $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$next'>".$_L['Next_Page']."</a></li>";
                $pagination .= "<li class='page-item'><a class='page-link' href='{$url}$lastpage'>".$_L['Last_Page']."</a></li>";
            } else {
                $pagination .= "<li class='page-item disabled'><a class='page-link' class='disabled'>".$_L['Next_Page']."</a></li>";
                $pagination .= "<li class='page-item disabled'><a class='page-link' class='disabled'>".$_L['Last_Page']."</a></li>";
            }
            $pagination .= "</ul>";
			
            $gen = array("startpoint" => $startpoint, "limit" => $limit, "found" => $totalReq, "page" => $page, "lastpage" => $lastpage, "contents" => $pagination);
            return $gen;
        }
    }
}