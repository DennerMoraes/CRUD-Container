<?php

    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $cliente = $_POST["nome"];
            $numero = $_POST["numero"];
            $tipo = $_POST["tipo"];
            $status = $_POST["status"];
            $categoria = $_POST["categoria"];

            if ($cliente==null or $numero==null){
                print"<script>alert('Colocar todos os campos')</script>";
                print"<script>location.href='?page=novo';</script>";
            }
            elseif (preg_match('/^[a-zA-Z]{4}[0-9]{7}$/', $numero)){

                $sql = "INSERT INTO continfo(cliente,numero,tipo,statuss,categoria) VALUES ('{$cliente}','{$numero}','{$tipo}','{$status}','{$categoria}')";

                $res = $conn->query($sql);

                if($res==true){
                    print"<script>alert('Cliente cadastrado')</script>";
                    print"<script>location.href='?page=mostrar';</script>";
                }else{
                    print"<script>alert('Cliente não cadastrado')</script>";
                    print"<script>location.href='?page=novo';</script>";
                }

            }else{
                print"<script>alert('Colocar 4 letras e 7 números')</script>";
                print"<script>location.href='?page=novo';</script>";
            };
        break;

        case 'editar':
            $cliente = $_POST["nome"];
            $numero = $_POST["numero"];
            $tipo = $_POST["tipo"];
            $status = $_POST["status"];
            $categoria = $_POST["categoria"];

            $sql = "UPDATE continfo SET cliente='{$cliente}',numero='{$numero}',tipo='{$tipo}',statuss='{$status}',categoria='{$categoria}'";

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Cliente Editado')</script>";
                print"<script>location.href='?page=mostrar';</script>";
            }else{
                print"<script>alert('Cliente não Editado')</script>";
                print"<script>location.href='?page=editar';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM continfo WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Cliente Excluido')</script>";
                print"<script>location.href='?page=mostrar';</script>";
            }else{
                print"<script>alert('Cliente não Excluido')</script>";
                print"<script>location.href='?page=mostrar';</script>";
            }
        break;




    }