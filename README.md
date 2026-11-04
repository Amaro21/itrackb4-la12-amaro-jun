Q1: The top of your error page named a file inside vendor. Say why that was not where your mistake was, and where the page showed you it actually was.

Answer: The file at the top was inside vendor, which is Laravel's own code. Laravel was only the place where the error was noticed, because it could not find a method called withh(). My real mistake was in app\Http\Controllers\MovieController.php, in index(), where I typed Movie::withh('genre'). The page showed it in the Exception trace, in the frame that was already opened, with my line marked in red.

Q2: You wrote one Log::info line with a context array. Name something it will tell you next month that the error page could not.

Answer: The error page only shows something when it breaks, and it is gone once I close it. My Log::info line is saved in laravel.log, so next month I can still see which movie was saved, its id and genre_id, and the exact date and time. This also works when nothing went wrong, so I have a record of normal saves too.

Q3: Your guard answers with 403 instead of redirecting back with a message. Say when each of the two is the better answer.

Answer: A 403 is better when the request should never be allowed, like deleting the last movie in a genre, or someone trying to delete without permission. It stops the action right away. Redirecting back with a message is better when a normal user just made a small mistake, like leaving a field empty, so they can see what was wrong and try again.
