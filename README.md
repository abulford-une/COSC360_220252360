## GitHub Link to Project Code Repository

[COSC360_220252360](https://github.com/abulford-une/COSC360_220252360)

## Approach to the Assignment

As I had already implemented (almost) all of the required API endpoints for the backend component of the assignment prior to commencing work on Assignment 02, I felt very confident going-in that this assignment would be a nice, straightforward piece of UX design I could enjoy, taking my time to learn how React with Typescript handles web development differently to PHP with Laravel.

Due to an unexpected issue during development of my final assignment for COSC350, work on Assignment 03 for COSC360 commenced much later than I had initially planned, and I found myself completely unprepared for the total paradigm-shift which was React (and NodeJS as a whole) compared to the other languages we have studied throughout this computer science degree.

I only had to make minor changes to the backend, including the implementation of middleware to handle all my API routes and one additional route able to return a singular post from a GET request, as-opposed-to an index of the user's posts.

The frontend took a lot more work than I had initially scheduled for, particularly around learning how to correctly code my fetch requests to work with typescript interfaces and typing restrictions.  While I have managed to cobble something resembling a frontend application together, it is by no means my finest work.

## Challenges Faced

I faced a great deal more trouble trying to code in React than I had anticipated, particularly with getting my API fetch requests to fire and return correctly.  I spent a great deal of time surfing the internet attempting to decipher why my Postman requests would all succeed, but my (completely identical) fetch requests would return errors or not schedule correctly despite the hooks I had enclosed them with.  Who would have thought I had to literally include the word "bearer " as a part of my authorisation token string?

In the end, my own lack of experience with the React platform was my downfall in this assignment, with everything going wrong in one way or the other due to interactions I do not have the available knowledge to handle (even just a single modification to a single line in my app.css CSS file somehow causes an error where my list items now no longer recognise themselves as list items).

Had I allowed myself more time and experimentation learning the ins-and-outs of React development, I may have been successful in creating a proper modular application instead of the bodge-job I have settled on.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
