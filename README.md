<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

This is my result for assessment test in PT. INOSOFT TRANS SISTEM.

<p align="right">(<a href="#top">back to top</a>)</p>

### Built With

This address conversion api build with :

-   [Laravel 8](https://laravel.com/docs/8.x)
-   [PHP 8](https://www.php.net/downloads.php)
-   [mongodb 4.2](https://www.mongodb.com/docs/v4.2/installation/)
-   [composer](https://getcomposer.org/download/)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

This is an instructions on setting up project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

List things you need to use the software and how to install them.

-   check php version
    ```sh
    php -v
    ```
-   cek composer
    ```sh
    composer
    ```

### Installation

1. Clone the repo and enter the directory
    ```sh
    git clone https://github.com/CahBantul/vehicle-sales-api.git && cd vehicle-sales-api
    ```
2. Install packages
    ```sh
    composer update
    ```
3. rename file `.env.example` become `.env`. I use the default configuration

    ```sh
    cp .env.example .env
    ```

4. seeding data dummy

    ```sh
    php artisan db:seed
    ```

5. run the app
    ```sh
    php artisan serve
    ```
    the app running on [http://localhost:8000/](http://localhost:8000/)
    <p align="right">(<a href="#top" >back to top</a>)</p>

<!-- USAGE EXAMPLES -->

## Usage

For postman documentation of this api _please refer to the [Documentation](https://documenter.getpostman.com/view/11537842/VUjTihVy)_

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- LICENSE -->

## License

Distributed under the MIT License.

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Your Name - [@fardannozami](https://twitter.com/fardannozami)

Project Link: [https://github.com/CahBantul/vehicle-sales-api.git](https://github.com/CahBantul/vehicle-sales-api.git)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- ACKNOWLEDGMENTS -->

## Acknowledgments

List resources helpful and I would like to give credit to.

-   [https://laravel.com/docs/8.x/](https://laravel.com/docs/8.x/)
-   [https://www.youtube.com/watch?v=o2BNBHEOqI0](https://www.youtube.com/watch?v=o2BNBHEOqI0)
-   [https://github.com/jenssegers/laravel-mongodb](https://github.com/jenssegers/laravel-mongodb)
-   [https://stackoverflow.com/questions/62063796/how-to-extend-php-laravel-models-fillable-fields-in-a-child-class](https://stackoverflow.com/questions/62063796/how-to-extend-php-laravel-models-fillable-fields-in-a-child-class)
-   [https://www.contohapps.com/2021/09/membuat-api-menggunakan-laravel-8.html](https://www.contohapps.com/2021/09/membuat-api-menggunakan-laravel-8.html)
-   [Panduan Singkat Menggunakan Postman](https://kotakode.com/blogs/16235/Panduan-Singkat-Menggunakan-Postman)
-   [https://cerwyn.medium.com/laravel-generalizing-api-response-error-handling-85646a195fea](https://cerwyn.medium.com/laravel-generalizing-api-response-error-handling-85646a195fea)
-   [https://khajehossini.medium.com/use-jwt-in-laravel-and-mongodb-8aea197d4949](https://khajehossini.medium.com/use-jwt-in-laravel-and-mongodb-8aea197d4949)
-   [https://www.twilio.com/blog/unit-testing-laravel-api-phpunit](https://www.twilio.com/blog/unit-testing-laravel-api-phpunit)

<p align="right">(<a href="#top">back to top</a>)</p>
````
