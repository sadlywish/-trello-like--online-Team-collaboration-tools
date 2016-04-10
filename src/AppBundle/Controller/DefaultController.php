<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function exampleAction()
    {
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/", name="show_index")
     * @Method("GET")
     * @Template("AppBundle:index:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/refresh", name="refresh")
     * @Method("GET")
     */
    public function refreshAction()
    {
        $con = $this->getDoctrine()->getConnection();
        $nodes = $con->executeQuery(
            "SELECT A.*,".
            "if(A.ctime > date_sub(now(), interval '0 0:0:10' day_second), '在线' , '不在线') link ".
            "FROM NodeState A, ".
            "(SELECT MAX(id) id FROM NodeState ".
            "WHERE ctime > date_sub(now(), interval '0 12:0:0' day_second) GROUP BY nodeid) B ".
            "WHERE A.id = B.id");
        $allNodes = $nodes->fetchAll();
        $st = $con->executeQuery("SELECT (AVG(A.disk_used)/AVG(A.disk_total))*100 disk,"
            ."(AVG(A.mem_used)/AVG(A.mem_total))*100 memory, (AVG(A.cpu_used)) cpu "
            ."FROM NodeState A,(SELECT MAX(id) id FROM NodeState "
            ."WHERE ctime > date_sub(now(), interval '0 0:10:0' day_second) GROUP BY nodeid) B "
            ."WHERE A.id = B.id");
// Execute SQL query, receive Doctrine_Connection_Statement

//        $st = $con->executeQuery("SELECT (AVG(A.used)/AVG(A.total))*100 disk,".
//            "(AVG(C.mem_used)/AVG(C.load))*100 memory, (AVG(E.user)) cpu ".
//            "FROM disk A, (SELECT MAX(_ID) _ID FROM disk ".
//            "WHERE ctime > date_sub(now(), interval '0 12:0:0' day_second) GROUP BY nodeid) B ".
//            ",memory C,(SELECT MAX(_ID) _ID FROM memory ".
//            "WHERE ctime > date_sub(now(), interval '0 12:0:0' day_second) GROUP BY nodeid) D ".
//            ",cpuall E,(SELECT MAX(_ID) _ID FROM cpuall ".
//            "WHERE ctime > date_sub(now(), interval '0 12:0:0' day_second) GROUP BY nodeid) F ".
//            "WHERE A._ID = B._ID and C._ID = D._ID and E._ID = F._ID;");
// Fetch query result

        $result = $st->fetchAll();
        $ret = array();
        foreach($result as $res)
        {
            $ret = $res;
        }
        $table = "";
        $id = 1;
        foreach($allNodes as $node)
        {            $table =$table."<tr><td>".$id."</td><td>".$node["ip"]."</td><td>".
                (number_format($node["cpu_used"], 2, '.', ','))."%</td><td>".
                (number_format($node["mem_used"]/$node["mem_total"]*100, 2, '.', ','))."%</td><td>".
                (number_format($node["disk_used"]/$node["disk_total"]*100, 2, '.', ','))."%</td><td>".$node["link"].
                "</td><td>".mt_rand(3, 20)."</td></tr>";
            $id = $id + 1;
        }
        $arr = array();
        $arr['cpu'] = $ret["cpu"];
        $arr['ram'] = $ret["memory"];
        $arr['memory'] = $ret["disk"];
        $arr['task'] = mt_rand(30, 60);
        $arr['tasks'] = mt_rand(0, 100);
        $arr['nodes'] = $table;
        return new Response(json_encode($arr));
    }
}
