<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, true, false, false);

if(!empty($_POST)) {
    $data = $_POST;
    $msg = new AMQPMessage(json_encode($data),
        array('delivery_mode' => 2) # make message persistent
    );

    $channel->basic_publish($msg, '', 'task_queue');

    echo "Report will be sent";
}

$channel->close();
$connection->close();

?>
<html>
<body>

<form action="generatereport.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>