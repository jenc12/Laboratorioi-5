<?php
    if (session_status()==1)session_start();
?>
<?php
require_once("models/usuario.php");
class usuario_controller
{
    public static function login()
    {
        $titulo = "Login de usuario";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/login.php");
        require_once("views/template/footer.php");
    }
    public static function validar()
    {
        if ($_POST) {
            $_SESSION["token"] = $_POST["token"];
            $_SESSION["Usuario"] = $_POST["txtUsuario"];
            if (!isset($_POST["token"]) || !seg::validaSession($_POST["token"])) {

                echo "Acceso restringido";
                exit();
            }
            $obj = new usuario($_POST["txtUsuario"], $_POST["txtPassword"], "", "");
            $resultado = $obj->valida_usuario();

            var_dump($resultado);
            if (count($resultado) > 0) {
                $_SESSION["usuario"] = $resultado["usuario"];
                header("location: index.php?c=" . seg::codificar("contacts") . "&m=" . seg::codificar("crear"));
            }
        }
    }
    public static function cerrar_sesion()
    {
        setcookie("comentario", 0);
        session_destroy();
        header("location: index.php");
    }
}
