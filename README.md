# Laravel Investment Backend API

## Laravel Investment (IBA)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

### Features

-   User login & authentication
-   User Levels Permission
-   User Verification via e-mail
-   User Password reset using e-mail
-   Notification of new user register via e-mail
-   Edit User information
-   Upload User profile image
-   Investment with pre-configured amount through admin panel
-   User Dashboard

## Security Vulnerabilities

If you discover a security vulnerability within Laravel Investment (IBA), please send an e-mail to the developer via [hello@tejirimayone.com.ng](mailto:hello@tejirimayone.com.ng). All security vulnerabilities will be promptly addressed.

## Syetem Documetations

### Email Verification

The entire system verification is handles in

-   Email notification class is at `./app/Notification/UserVerification.php`

-   And it blade view in './resources/views/emails/VerifyEmail.blade.php'

-   With Queueable trait

-   In Model located in direction ./app/Models/User.php' which I impletemented MustVerify Class.

Add the following `impletment MustVerifyEmail`

Created a new Mail service in
`./app/Mail/VerificationEmail.php`

### Note:

-   `Remove Use serializable` for this would reset the configured Mail located in:

`vendor/laravel/framework/src/illuminate/auth/Notifications/VerifyEmail.php`

-   look at this location of files for more features

`./vendor/laravel/framework/src/illuminate/auth/MustVerifyEmail.php`

`./vendor/laravel/framework/src/illuminate/contracts/auth/MustVerifyEmail.php`

## License

The Laravel is a property of this repo do not copy or modify with the consent of the owner.
