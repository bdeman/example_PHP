<?=HTML::style(URL::base().'assets/js/dist/jquery.jqplot.css')."\n"?>
<?=HTML::script(URL::base().'assets/js/dist/jquery.jqplot.js')?>
<?=HTML::script(URL::base().'assets/js/dist/plugins/jqplot.pieRenderer.js')?>

<?php

$males = count($gender_male);
$females = count($gender_female);
?>



<script class="code" type="text/javascript">
$(document).ready(function(){
    plot1 = $.jqplot('pie1', [[['Mannen',<?=$males?>],['Vrouwen',<?=$females?>]]], {
        gridPadding: {top:0, bottom:38, left:0, right:0},
		seriesDefaults:{renderer:$.jqplot.PieRenderer, trendline:{show:false}, rendererOptions: { padding: 8, showDataLabels: true}},
                  legend:{
                      show:true, 
                      placement: 'outside', 
                      rendererOptions: {
                          numberRows: 1
                      }, 
                      location:'s',
                      marginTop: '15px'
                  }       
    });
});
</script>
<h2>Van de mensen die contact hebben genomen waren:</h2>
<div id="pie1" style="margin-top:20px; margin-left:20px; width:400px; height:400px;"></div>