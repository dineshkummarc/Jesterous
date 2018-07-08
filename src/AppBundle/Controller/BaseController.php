<?php
/**
 * Created by PhpStorm.
 * User: ceci
 * Date: 7/9/2018
 * Time: 1:05 AM
 */

namespace AppBundle\Controller;

use AppBundle\Constants\Roles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

abstract class BaseController extends Controller
{
    protected function isUserLogged(): bool{
        return $this->get('security.authorization_checker')->isGranted(Roles::ROLE_USER, 'ROLES');  //when user is logged
    }

    protected function isAdminLogged(): bool{
        return $this->get('security.authorization_checker')->isGranted(Roles::ROLE_ADMIN, 'ROLES');
    }

    protected function isAuthorLogged(): bool{
        return $this->get('security.authorization_checker')->isGranted(Roles::ROLE_AUTHOR, 'ROLES');
    }
}