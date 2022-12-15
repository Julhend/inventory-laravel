
-- copy saya pertama
ALTER TABLE `stockbarang`.`users` 
MODIFY COLUMN `role` enum('admin','staff','lead') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'staff' AFTER `updated_at`;
-- copy saya pertama


-- copy saya ke dua
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES (3, 'kepala bagian', 'kepalabagian@lead.com', '$2y$10$X5BbGWLO5L4qpESPj2MdY.1dddpZxB7j8NVb99QroEXpUiXydeUGO', '9YarxXyTr1sscBz7LVk3SjuwrNubf1UZMIi4a1komfhkYFk9Kvs7Mq6IVe8L', '2022-11-25 14:23:18', '2022-11-25 14:23:18', 'lead');
-- copy saya kedua