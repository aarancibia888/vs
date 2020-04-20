<?php
/* 
!IniHeaderDoc
*****************************************************************************
!NombreObjeto : index.php
!Sistema : Venta Servicio y Empalmes
!Modulo : Cliente
!Descripcion : Pagina de inicio del sistema 
!Plataforma : !PHP
!Perfil  : NA
!Itinerado : Una vez
!Uso    : Intranet
!Autor : Domingo Cortez J. (COSOF)
!Creacion : 16/01/2015
!Retornos/Salidas : NA
!OrigenReq : Interno
=============================================================================
!Parametros : NA
=============================================================================
!Testing : NA
=============================================================================
!ControlCambio
--------------
!cVersion !cFecha   !cProgramador   !cDescripcion 
-----------------------------------------------------------------------------
_________ ______________ _____________________ ______________________________

*****************************************************************************
!EndHeaderDoc 
*/

ini_set('session.use_trans_sid',1); 
session_start();

if(isset($_SESSION['idUsuario']) && $_SESSION['cdTpPerfil']=="3")
    header("Location: online/inicio.php");	
else
    header("Location: online/acceso.php");	

