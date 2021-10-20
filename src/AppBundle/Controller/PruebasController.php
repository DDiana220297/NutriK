<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Prueba;
use AppBundle\Form\PruebaType;
use Doctrine\ORM\Tools\ToolsException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;


class PruebasController extends Controller
{

    public function indexAction(Request $request, $name, $page)
    {
        $productos = array(
            array("producto"=>"Consola", "precio" => 2),
            array("producto"=>"Consola 2", "precio" => 3),
            array("producto"=>"Consola 3", "precio" => 4),
            array("producto"=>"Consola 4", "precio" => 5),
            array("producto"=>"Consola 5", "precio" => 6),
        );

        $frutas = array(
            "manzana" => "golden",
            "pera" => "amarilla"
        );

        // replace this example code with whatever you need
        return $this->render('@App/pruebas/index.html.twig', [
            'texto' => $name . " - " . $page,
            'productos' => $productos,
            'frutas' => $frutas
        ]);
    }

    public function addAction(){
        $prueba = new Prueba();
        $prueba->setTitulo("Curso de sym");
        $prueba->setDescripcion("Cursooo");
        $prueba->setPrecio(90.2);

        $em = $this->getDoctrine()->getManager();
        $em->persist($prueba);
        $flush = $em->flush();

        if(!empty($flush)){
            echo "El curso no se ha creado bien";
        }
        else{
            echo "El curso se ha creado correctamente";
        }

        die();
    }

    public function readAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Prueba");
        $cursos = $cursos_repo->findAll();

        foreach ($cursos as $curso){
            echo $curso->getTitulo();
        }

        die();
    }

    public function updateAction($id = 1, $titulo = "nuevo", $descripcion = "", $precio = ""){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Prueba");
        $curso = $cursos_repo->find($id);
        $curso->setTitulo($titulo);
        $em = $this->getDoctrine()->getManager();
        $em->persist($curso);
        $flush = $em->flush();

        if(!empty($flush)){
            echo "El curso no se ha actualizado bien";
        }
        else{
            echo "El curso se ha actualizado correctamente";
        }

        die();
    }

    public function removeAction($id = 1){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Prueba");
        $curso = $cursos_repo->find($id);
        $em->remove($curso);
        $flush = $em->flush();


        if(!empty($flush)){
            echo "El curso no se ha borrado bien";
        }
        else{
            echo "El curso se ha borrado correctamente";
        }

        die();
    }

    public function nativeSqlAction(){
        $db = $this->getDoctrine()->getConnection();
        $query = "SELECT * FROM productos";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);

        $productos = $stmt->fetchAll();
        foreach ($productos as $producto) {
            echo $producto['name'];
        }
        die();
    }

    public function queryBuilderAction(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("AppBundle:Producto");
        $query = $repo->createQueryBuilder("c")
            ->where("c.price > :precio")
            ->setParameter("precio", "79")
            ->getQuery();

        $productos = $query->getResult();
        foreach ($productos as $producto) {
            echo $producto->getName();
        }
        die();
    }

    public function formAction(Request $request){
        $prueba = new Prueba();
        $form = $this->createForm(PruebaType::class, $prueba);

        $form->handleRequest($request);

        if($form->isValid()){
            $status = "Formulario valido";
            $data = array(
                "titulo" => $form->get("titulo")->getData(),
                "descripcion" => $form->get("descripcion")->getData(),
                "precio" => $form->get("precio")->getData(),
            );
        }
        else{
            $status = null;
            $data = null;
        }

        return $this->render('@App/pruebas/form.html.twig', [
            'form' => $form->createView(),
            'status' => $status,
            'data' => $data
        ]);
    }

    public function validarEmailAction($email){
        $emailConstraint = new Assert\Email();
        $emailConstraint->message = "Need a correct email";
        $error = $this->get("validator")->validate(
            $email,
            $emailConstraint
        );

        if(count($error) == 0){
            echo "OK";
        }
        else{
            echo "KO";
        }
        die();
    }


}
