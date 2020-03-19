# wp-password-protected-pantheon Plugin
This plugin demonstrates how to properly set the Password Protected cookie for usage on Pantheon. This plugin is modeled after another [plugin](https://github.com/twfahey1/wp-auth0-pantheon) authored by Pantheon to set the Auth0 cookie.

In order for this to work, I modified the Password Protected source code in password-protected.php.

Original:

```
public function cookie_name() {

  return $this->get_site_id() . '_password_protected_auth';

}

```
After wrapping output with `apply_filters()`:

```
public function cookie_name() {

  return apply_filters('password_protected_set_cookie',  $this->get_site_id() . '_password_protected_auth');

}

```

This plugin can be enabled and used as is, or the code adopted for use in any other plugin / theme, etc.
