$(document).ready(function() {
    $("#tipo").change(function(){
        $tipo_id=$("#tipo").val();
        $( "#acomodacion" ).empty();
        if($tipo_id==1){
            $("#acomodacion").append("                                    <option value=\"1\">Sencilla</option>\n" +
                "                                    <option value=\"2\">Doble</option>");
        }
        if($tipo_id==2){
            $("#acomodacion").append("<option value=\"3\">Triple</option>\n" +
                "                                    <option value=\"4\">Cuádruple</option>");
        }
        if($tipo_id==3){
            $("#acomodacion").append("                                    <option value=\"1\">Sencilla</option>\n" +
                "                                    <option value=\"2\">Doble</option>\n" +
                "                                    <option value=\"3\">Triple</option>");
        }


    });
});