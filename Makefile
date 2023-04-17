IMAGE_NAME=99bottles-image
CONTAINER_NAME=99bottles-container

build:
	docker build -t $(IMAGE_NAME) .

install:
	docker run --rm -it -v $(PWD):/code $(IMAGE_NAME) composer install

test:
	docker run --rm -it -v $(PWD):/code $(IMAGE_NAME) vendor/bin/phpunit test/BottlesOfOOPTest.php

run:
	docker run --rm -it -v $(PWD):/code $(IMAGE_NAME) php index.php

.PHONY: build install test
