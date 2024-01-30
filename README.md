This project is simple, and you can run it in any environment you deem appropriate - I've used Laravel Sail for this specific project locally.

# Instructions

## Without Sail
- You should be able to run this with pretty much any LAMP stack you've got, though if you're not using Sail then you'll need to create a DB and user, and update then .env file here. 

## With Sail
- cd into the directory
- run composer install
- You can either alias: 'alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail''
  or call it directly: './vendor/bin/sail'
- run './vendor/bin/sail up' or 'sail up'

## After initial setup
- run 'sail artisan migrate'
- run 'sail db:seed'

Visit http://localhost to view. 

# Notes
I have provided a build of the tailwind css with this in prod mode. 
Worth noting that, I've focussed more on the functionality, and made it look kind of OK, but tried to show some knowledge in that area. 

Trello planning board: ask for access with email. Trello no longer allow public boards. 

A shoutout to https://www.themealdb.com/api.php too, for providing a nice API endpoitn I could use here.

### Phase 2:
- More age appropriate meals in terms of ability
- Printable recipes within the page, instead of external recipe cards
- dietary preferences