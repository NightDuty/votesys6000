## Voting system 6000

With Voting System 6000 you can have an election and store the data safe on 3 different databases.

### Getting the application running

1. Download and install [Composer](https://getcomposer.org/download/).
2. Open cmd, and run the following command:

	``` composer global require "laravel/installer=~1.1" ```
	
3. Download the project from [GitHub](https://github.com/NightDuty/votesys6000).
4. Open cmd, navigate to the project folder.
5. Run the following command:

    ``` composer update ```

6. Create 3 databases. (They can be on different systems)
7. Open root/.env.example and add config for all 3 databases then save it as root/.env
8. Open cmd, navigate to the project folder then run the following commands:

	``` php artisan migrate:install ```
	
	``` php artisan migrate --seed ```
9. Run the following commands: RefreshVoteOptions & CreateLoginCodes.(more info below)

10. You are done installing. Enjoy our project!

## VoteSys6000 Commands

- A help page with all commands.
``` php artisan CustomHelp ```

- Create login codes for account so people can login and vote. When this command is run it will ask how many logincodes you want to create.
``` php artisan CreateLoginCodes ```

- This command will generate new hashes for every vote possible and will disable any old votehash.
``` php artisan RefreshVoteOptions ```
 
- Count all votes for the page {domain.ex/score} (this command can take a while, command needs 1gb of RAM for every 10.000 votes.)
``` php artisan CountVotes ```



## Official Laravel Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
