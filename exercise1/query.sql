SELECT * -- We select everything
FROM articles --From the articles table
LEFT JOIN `users` ON articles.id = `users`.id --We use a LEFT JOIN statement to gather articles ID and users ID  
WHERE articles.id = 10; -- We search for the ID of the article