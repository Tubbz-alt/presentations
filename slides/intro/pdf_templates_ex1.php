<?php 
 $p = PDF_new(); 
 PDF_open_file($p); 
 $im = pdf_open_jpeg($p, "php-big.jpg");
 $template = pdf_begin_template($p,595,842);
 pdf_save($p);
 pdf_place_image($p, $im, 4, 803, 0.25);
 pdf_place_image($p, $im, 525, 803, 0.25);
 pdf_moveto($p,0,795);
 pdf_lineto($p,595,795);
 pdf_stroke($p);
 $font = PDF_findfont($p,"Times-Bold","host",0);
 PDF_setfont($p,$font,38.0);
 pdf_show_xy($p,"PDF Template Example",100,807);
 pdf_restore($p);
 pdf_end_template($p);
 pdf_close_image ($p,$im);
 PDF_begin_page($p,595,842); 
 pdf_place_image($p, $template, 0, 0, 1.0);
 PDF_end_page($p); 
 PDF_begin_page($p,595,842); 
 pdf_place_image($p, $template, 0, 0, 1.0);
 PDF_end_page($p); 
 PDF_close($p); 
 $buf = PDF_get_buffer($p); 
 $len = strlen($buf);
 Header("Content-type:application/pdf");
 Header("Content-Length:$len"); 
 Header("Content-Disposition:inline; filename=gra2.pdf");
 echo $buf; 
 PDF_delete($p); 
?>
