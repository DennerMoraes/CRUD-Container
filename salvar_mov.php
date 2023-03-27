<?php

    switch ($_REQUEST["acao2"]){
        case 'add':
            $id = $_POST["id"];
            $mov = $_POST["mov"];
            $datainicio = $_POST["datainicio"];
            $datafim = $_POST["datafim"];

            $sql = "INSERT INTO contmov(id,movimentacao,datainicio,datafim,nummov) VALUES ('{$id}','{$mov}','{$datainicio}','{$datafim}',1)";

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Movimentação cadastrado')</script>";
                print"<script>location.href='?page=mostrarmov';</script>";
            }else{
                print"<script>alert('Movimentação não cadastrado')</script>";
                print"<script>location.href='?page=mostrar';</script>";
            }

        break;

        case 'editar2':

        $mov = $_POST["mov"];
        $datainicio = $_POST["datainicio"];
        $datafim = $_POST["datafim"];
        $nummov = $_POST["nummov"];

        $nummov =  $nummov + 1;


        $sql = "UPDATE contmov SET movimentacao='{$mov}',datainicio='{$datainicio}',datafim='{$datafim}',nummov='{$nummov}' WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print"<script>alert('Movimetação Editado')</script>";
            print"<script>location.href='?page=mostrarmov';</script>";
        }else{
            print"<script>alert('Movimetação não Editado')</script>";
            print"<script>location.href='?page=editarmov';</script>";
        }
        break;

        case 'excluirmov':
            
            $sql = "DELETE FROM contmov WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Movimetação Excluida')</script>";
                print"<script>location.href='?page=mostrarmov';</script>";
            }else{
                print"<script>alert('Movimetação não Excluida')</script>";
                print"<script>location.href='?page=mostrarmov';</script>";
            }
        break;



    }