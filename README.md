This project is simple, and you can run it in any environment you deem appropriate - I've used Laravel Sail for this specific project locally.

Ensure you have run 
- php artisan migrate
- php artisan db:seed --class=MealsTableSeeder

I have provided a build of the tailwind css with this in prod mode. 
Worth noting that, I've focussed more on the functionality, and made it look kind of OK, but tried to show some knowledge in that area. 

Trello planning board: ask for access with email. Trello no longer allow public boards. 

I would have loved to include
- unit tests (were part of the initial plan, which was TDD. Chose not to for time, and didnt make it back to do them)
- better UI, as I know I'm much(much) better than this
- the validation didnt play ball, so I commented it out, but would have been nice to break that out and have some proper validation
- used TALL stack instead but kept it simple

Within Trello I outlined two future phases.
Phase 1:
- Meal images
- Selection of Recipe cards pulled in from an API 
- better ages ranges

Phase 2:
- More age appropriate meals in terms of ability
- Printable recipes within the page, instead of external recipe cards
- dietary preferences