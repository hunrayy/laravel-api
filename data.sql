create table `news`(
     `firstname` varchar(225),
     `lastname` varchar(225),
     `email` varchar(225) unique,
     `phone` varchar(225),
     `news_title` varchar(225),
     `news_description` varchar(225),
     `news_location` varchar(225),
     `updated_at` timestamp default() current_timestamp,
     `created_at` timestamp default() current_timestamp
);