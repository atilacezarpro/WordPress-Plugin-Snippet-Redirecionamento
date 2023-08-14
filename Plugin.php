function redirect_unauthenticated_users() {
    // Verifique se o usuário não está logado e se a página atual é /candidato
    if (!is_user_logged_in() && is_page('candidato')) {
        // Redirecione para a página de login
        wp_redirect('https://vestibular.unicathedral.edu.br/login');
        exit;
    }
}
add_action('template_redirect', 'redirect_unauthenticated_users');
