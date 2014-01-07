
composer-init:
	composer init
composer-up:
	composer update 

git-st:
	git status . -s
git-rm:
	git status . -s | awk '/ D/ {print $$2}' | xargs git rm 
git-add:
	git status . -s | awk '/ ?/ {print $$2}' | xargs git add 
git-update:
	git status . -s | awk '/ M/ {print $$2}' |xargs git add


test:
	phpunit -c phpunit.xml
