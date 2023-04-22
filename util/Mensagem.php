<?php

class Mensagem{
    public static function mostrar(){
        if (!session_id()) {
            session_start();
        } else if (isset($_SESSION["msg"])) {
            $msg = $_SESSION["msg"];
            unset($_SESSION["msg"]);
            return "<script>
                        M.toast({
                            html: '$msg'
                        })
                    </script>";
        }
    }
}
