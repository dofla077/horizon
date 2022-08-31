.PHONY: helpers
helpers:
	php artisan ide-helper:generate
	php artisan ide-helper:models -F ideHelper/ModelHelper.php -M
	php artisan ide-helper:meta
mf:
	php artisan migrate:fresh
stan:
	./vendor/bin/phpstan analyse
pint:
	./vendor/bin/pint
