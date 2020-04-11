 
<?php


function paginate($reload, $page, $tpages, $adjacents) {
	$prevlabel = "&laquo;";
	$nextlabel = "&raquo;";
	$out = '<ul class="custom-pagination pagination ">';
	
	// previous label

	if($page==1) {
		$out.= "<a><li class='disabled atras'>$prevlabel</li></a>";
	} else if($page==2) {
		$out.= "<a href='javascript:void(0);' onclick='paginarBlog(1)'><li   class='atras'>$prevlabel</li></a>";
	}else {
		$out.= "<a href='javascript:void(0);' onclick='paginarBlog(".($page-1).")'><li class='atras'>$prevlabel</li></a>";

	}
	
	// first label
	if($page>($adjacents+1)) {
		$out.= "<a href='javascript:void(0);' onclick='paginarBlog(1)'><li>1</li></a>";
	}
	// interval
	if($page>($adjacents+2)) {
		$out.= "<a><li>...</li></a>";
	}

	// pages

	$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
	$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
	for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$page) {
			$out.= "<a><li class='active'>$i</li></a>";
		}else if($i==1) {
			$out.= "<a href='javascript:void(0);' onclick='paginarBlog(1)'><li>$i</li></a>";
		}else {
			$out.= "<a href='javascript:void(0);' onclick='paginarBlog(".$i.")'><li>$i</li></a>";
		}
	}

	// interval

	if($page<($tpages-$adjacents-1)) {
		$out.= "<a><li>...</li></a>";
	}

	// last

	if($page<($tpages-$adjacents)) {
		$out.= "<a href='javascript:void(0);' onclick='paginarBlog($tpages)'><li>$tpages</li></a>";
	}

	// next

	if($page<$tpages) {
		$out.= "<a href='javascript:void(0);' onclick='paginarBlog(".($page+1).")'><li class='adelante'>$nextlabel</li></a>";
	}else {
		$out.= "<a><li class='disabled adelante'>$nextlabel</li></a>";
	}
	
	$out.= "</ul>";
	return $out;
}
?>