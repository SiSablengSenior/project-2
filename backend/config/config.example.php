<?php
return [
 'db_host' => getenv('DB_HOST') ?: '127.0.0.1',
 'db_name' => getenv('DB_NAME') ?: 'sisableng_ops',
 'db_user' => getenv('DB_USER') ?: '',
 'db_pass' => getenv('DB_PASS') ?: '',
 'jwt_secret' => getenv('JWT_SECRET') ?: '',
];
