<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 上午12:07
 */


$mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

$mediator->printInfoAbout('Dominik'); // User: Dominik