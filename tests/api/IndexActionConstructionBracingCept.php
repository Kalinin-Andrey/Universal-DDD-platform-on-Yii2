<?php
$I = new ApiTester($scenario);
$I->wantTo('test GET /construction/bracing');
$I->sendGET('construction/bracing');
$I->seeResponseEquals('{"15":{"id":15,"name":"constructionBracing","schemaElementId":11,"isSchemaElement":null,"isActive":true,"elementClasses":null,"elementTypes":null,"models":null,"properties":null,"parent":null,"children":null,"root":null,"hierarchy":null,"inclusions":null,"relationClasses":null,"relationGroups":null,"schemaElement":null,"variants":null,"entity":"commonprj\\\\components\\\\core\\\\entities\\\\construction\\\\bracing\\\\Bracing"}}');