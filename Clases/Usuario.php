<?php


class Usuario {
    protected $id_usuario;
    private $correo;
    private $contrasena;
    private $id_persona;
    
    function __construct($id_usuario, $correo, $contrasena, $id_persona) {
        $this->id_usuario = $id_usuario;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->id_persona = $id_persona;
    }

    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getId_persona() {
        return $this->id_persona;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    public function Acceso(){
      
        /*Llamado a la función que crea la instancia del objeto PDO*/
        
        $db= dbconnect();
        
        /*Declaración de la sentencia SQL que se requiere ejecutar*/
        $squery="Select nombre from usuarios where usuario=:usr and clave=:pwd";
        
        /*Instancia del objeto que realizará el query*/
        $queryseleccion=$db->prepare($squery);
        
        $queryseleccion->bindParam(":usr",$this->correo);
        $queryseleccion->bindParam(":pwd",$this->contraseña);
        
        $datos=$queryseleccion->execute();
        
        if($queryseleccion->rowCount()==1){
            $this->nombre=$queryseleccion->fetchColumn();
            return true;
        }
        else{
            return false;
        }
        
    }
    
    public function ModificaClave($nuevaClave){
        /*Llamado a la función que crea la instancia del objeto PDO*/
        
        $db= dbconnect();
        
        /*Declaración de la sentencia SQL que se requiere ejecutar*/
        $squery="update usuarios set clave=:pwd where usuario=:usr";
        
        /*Instancia del objeto que realizará el query*/
        $queryseleccion=$db->prepare($squery);
        
        $queryseleccion->bindParam(":usr",$this->correo);
        $queryseleccion->bindParam(":pwd",$nuevaClave);
        
        $resultado=$queryseleccion->execute();
        
        return $resultado;
        
    }
    
     public function OpcionesMenu(){
        /*Llamado a la función que crea la instancia del objeto PDO*/
        
        $db= dbconnect();
        
        /*Declaración de la sentencia SQL que se requiere ejecutar*/
        $squery="SELECT spa.codigo
                    FROM sg_perfiles as sp 
                    INNER JOIN sg_perfilacceso as spa on sp.idperfil=spa.idperfil
                    INNER JOIN sg_perfilusuario as spu on sp.IDPERFIL=spu.idperfil
                    where spu.usuario=:usr and spa.tipoacceso='M'";
        
        /*Instancia del objeto que realizará el query*/
        $queryseleccion=$db->prepare($squery);
        
        $queryseleccion->bindParam(":usr",$this->correo);
        
        $resultado=$queryseleccion->execute();
        
        return $resultado;
        
    }

}
