INSERT INTO `specialite` (`id`, `nom`) VALUES
(1, 'Angiologue'),
(2, 'Cardiologue'),
(3, 'Cancérologue - oncologue'),
(4, 'Dentiste'),
(5, 'Dermatologue'),
(6, 'Diabétologue'),
(7, 'Gastro-entérologue'),
(8, 'Gynécologue-obstétricien'),
(9, 'Neurologue'),
(10, 'Ophtalmologiste'),
(11, 'Orthodontiste'),
(12, 'Oto-rhino-laryngologiste'),
(13, 'Pneumologue'),
(14, 'Rhumatologue'),
(15, 'Urologue');


INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `name`, `ville_id`) VALUES
(1, 'test', 'test', 'test@test.con', 'test@test.con', 1, NULL, '$2y$13$nRH8n7ZT6WqJuKqCrvkpMeyI8xAntCtQnkzxnE4xMQM6rA0OFpDuK', '2019-04-03 00:31:43', NULL, NULL, 'a:0:{}', NULL, NULL),
(2, 'admin', 'admin', 'admin@example.com', 'admin@example.com', 1, NULL, '$2y$13$SU5L8dy3adAdyBFmhldf2u4ze5dC/Bzox7LVUkSTOLNQNMBKyTmTS', '2019-04-06 16:30:41', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', NULL, NULL),
(3, 'iss', 'iss', 'nn@mm.com', 'nn@mm.com', 1, NULL, '$2y$13$TeqQvFub050M.wM1x9os2uXus.ip/2EjnisXYlAIpGArU2H07bfNa', '2019-04-07 00:43:01', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', NULL, NULL),
(4, 'adminuser', 'adminuser', 'adminuser@system', 'adminuser@system', 1, NULL, '$2y$13$nmkkLN74/v7V2iQndxQP2O6RSoOvFPNoQcgL18sJhd2IdFq1eEnqG', '2019-04-07 16:04:20', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', NULL, NULL),
(5, 'kendousimohamed', 'kendousimohamed', 'kendousimohamed@gmail.com', 'kendousimohamed@gmail.com', 1, NULL, '$2y$13$3lIxfd8Q4r9ODOtkwmjQeeNsxvOTc7rNNEW3cLPwrSOIpOCXVSP2u', '2019-04-07 16:11:23', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 'KENDOUSI Mohamed', NULL),
(6, 'elbouryhassan', 'elbouryhassan', 'elbouryhassan@gmail.com', 'elbouryhassan@gmail.com', 0, NULL, '$2y$13$JZFHfLVybayarNVwzpNqMO9LCm5u/sj56g/bNFtEaQOx6qAm7ncFq', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_MEDECIN";}', 'EL BOURY HASSAN', NULL);


INSERT INTO `ville` (`id`, `nom`) VALUES
(1, 'Casablanca'),
(2, 'Fès'),
(3, 'Tanger'),
(4, 'Marrakech'),
(5, 'Salé'),
(6, 'Meknes'),
(7, 'Rabat'),
(8, 'Téméra'),
(9, 'Agadir'),
(10, 'Oujda');
