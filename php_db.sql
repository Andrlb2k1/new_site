INSERT INTO `php_db`.`users` (
  `name`,
  `email`,
  `password`,
  `deleted_at`
)
VALUES
  (
    'André Bristot',
    'andre.lb845854@gmail.com',
    MD5('12345679'),
    '2022-11-12 13:00:02'
  );
  
  SELECT * FROM users WHERE email = 'andre.lb865854@gmail.com'
  
UPDATE
  `php_db`.`users`
SET
  `name` = 'Voltou p/ ativo',
  `password` = MD5('13579'),
  `deleted_at` = NULL
WHERE `email` = 'andre.lb865854@gmail.com';

DELETE
FROM
  `php_db`.`users`
WHERE `id` = '5';

UPDATE
  `php_db`.`users`
SET
  `deleted_at` = NOW()
WHERE `email` = 'andre.lb865854@gmail.com';
