<?php

echo password_hash($_GET['password'], PASSWORD_DEFAULT, ['salt' => $_GET['salt']]);
