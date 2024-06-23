<?php

    function custom_registration_form() {
        if (is_user_logged_in()) {
            return '<p>Je bent al ingelogd.</p>';
        }
    
        ob_start();
        ?>
    
        <form id="custom_registration_form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
            <p>
                <label for="username">Gebruikersnaam<br/>
                <input type="text" name="username" value="<?php if (!empty($_POST['username'])) echo esc_attr($_POST['username']); ?>" size="40" /></label>
            </p>
            <p>
                <label for="email">E-mail<br/>
                <input type="email" name="email" value="<?php if (!empty($_POST['email'])) echo esc_attr($_POST['email']); ?>" size="40" /></label>
            </p>
            <p>
                <label for="password">Wachtwoord<br/>
                <input type="password" name="password" value="<?php if (!empty($_POST['password'])) echo esc_attr($_POST['password']); ?>" size="40" /></label>
            </p>
            <p><input type="submit" name="submit" value="Registreer"/></p>
        </form>
    
        <?php
        return ob_get_clean();
    }
    add_shortcode('custom_registration_form', 'custom_registration_form');
    
    function custom_registration() {
        if (isset($_POST['submit'])) {
            $username = sanitize_user($_POST['username']);
            $email = sanitize_email($_POST['email']);
            $password = esc_attr($_POST['password']);
    
            $errors = new WP_Error();
    
            if(empty($username) || empty($email) || empty($password)) {
                $errors->add('field', 'Vul alle velden in.');
            }
    
            if(username_exists($username)){
                $errors->add('user_name', 'Gebruikersnaam bestaat al.');
            }
    
            if(!is_email($email)){
                $errors->add('email_invalid', 'Ongeldig e-mailadres.');
            }
    
            if(email_exists($email)){
                $errors->add('email', 'E-mailadres bestaat al.');
            }
    
            if(is_wp_error($errors) && !empty($errors->get_error_messages())){
                foreach($errors->get_error_messages() as $error){
                    echo '<p class="error">' . $error . '</p>';
                }
            }else{
                $user_id = wp_create_user($username, $password, $email);
                if(!is_wp_error($user_id)){
                    wp_update_user([
                        'ID' => $user_id,
                        'role' => 'author'
                    ]);
                    echo '<p class="success">account aangemaakt</p>';
                }else{
                    echo '<p>error</p>';
                }
            }
        }
    }
    add_action('init', 'custom_registration');
    
    function custom_login_form(){
        if(is_user_logged_in()){
            return '<p>Je bent al ingelogd.</p>';
        }
    
        ob_start();
        wp_login_form();
        return ob_get_clean();
    }
    add_shortcode('custom_login_form', 'custom_login_form');

function custom_login_redirect($redirect_to, $request, $user){
    if(isset($user->roles) && is_array($user->roles)){
        if(in_array('administrator', $user->roles)){
            return admin_url();
        }else{
            return home_url('');
        }
    }
    return $redirect_to;
}
add_filter('login_redirect', 'custom_login_redirect', 10, 3);

function custom_registration_redirect(){
    return home_url('/login');
}
add_filter('registration_redirect', 'custom_registration_redirect');
