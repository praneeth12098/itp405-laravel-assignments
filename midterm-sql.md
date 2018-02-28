SELECT c.headline, c.review, b.title, a.last_name, p.publisher_name
FROM customer_reviews c, authors a, books b, publishers p
WHERE a.id = b.author_id
	AND b.id = c.book_id
	AND p.id = b.publisher_id
;