

## Chama Management System
This is a fintech type of system built with laravel that acts as an api for a vue frontend
that runs on nuxt [here](https://github.com/melvin78/Dalawomen-vue-nuxt-frontend).Its used to handle financial transactions that run in a SACCO group commonly known as 'chama' in Africa.You can also google search melosolutions it will appear on the first page
,Since nuxt is SEO focused and is Server Side Rendered. It also implements websocket technology providing live updates
to registered members.






This account has both administrator and treasurer privilleges. You can now send messages and between this two accounts it will be received immediately with a human readable timestamp of when it was sent
.Since the messages are persisted to the database even after you logout you will still find them.

Members can also chat with other members by searching for them and clicking on send message. Access control has also been implemented where only the treasurer
and administrator have full access to the system.With the help of laravel policies and laravel spatie only authorised
authenticated users can perform various functions.More on that can be found . MPESA integrations 
will be added on future versions for now the make payment is still not functional. 





#License
 - MIT License
