<?php

/*
__PocketMine Plugin__
Name=MailMe
description=A Simple Messaging System
Version=1.0.0 Dev
Author=Plugin-Devs-Forever
Class=MailMe
apiversion=12
*/

/*
xxxxxxxxxxxxxxxx
ChangeLog
xxxxxxxxxxxxxxxx

1.0.0 Dev
Init Development of Plugin MailMe

xxxxxxxxxxxxxxxx
*/

class MailMe implements plugin{
private $api;

public function __construct(ServerAPI $api, $server = false){

$this->api = $api

}

public function init(){
$this->api->console->register("Mail", "all commands for MailMe", array($this, "cmdHandler");
$this->api->console->register("MailRead", "read your mail", array($this, "cmdHandler");
$this->api->console->register("MailClear", "Clear your MailBox", array($this, cmdHandler);
$this->api->ban->cmdWhitelist("Mail")
$this->api->ban->cmdWhitelist("MailRead")
$this->api->ban->cmdWhitelist("MailClear");

}

public function cmdHandler($cmds, $args, $issuer){



}

public function __destruct(){


}

}
