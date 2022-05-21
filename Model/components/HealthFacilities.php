<?php
    function get_csyt()
    {
       $query = "SELECT *
                FROM csytp";
        return getlist($query);
    }
    function thongtin($tencsyt)
    {
        $query= "SELECT * FROM csytp WHERE TenCSYT=$tencsyt";
        return getone($query);
    }
?>