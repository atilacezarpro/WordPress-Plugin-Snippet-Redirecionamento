# Redirecionamento de Usuários Não Autenticados

Este código PHP WordPress implementa um redirecionamento de usuários não autenticados para a página de login. Ele é utilizado para garantir que apenas usuários autenticados tenham acesso à página específica de "candidato". O redirecionamento ocorre automaticamente quando um usuário tenta acessar a página sem estar logado.

## Funcionalidade

A função `redirect_unauthenticated_users()` é definida para ser executada durante a ação `template_redirect` do WordPress. Ela verifica se o usuário não está logado e se a página atual é a página de "candidato". Caso ambas as condições sejam verdadeiras, o código executa o seguinte:

1. Verifica se o usuário não está logado usando a função `is_user_logged_in()`.
2. Verifica se a página atual é a página de "candidato" usando a função `is_page('candidato')`.
3. Se ambas as condições forem atendidas, o código utiliza a função `wp_redirect()` para redirecionar o usuário para a página de login, que é a URL `https://vestibular.unicathedral.edu.br/login`.
4. O código finaliza a execução com `exit;` para garantir que o redirecionamento ocorra imediatamente.

## Utilização

Esse código é aplicado através da função `add_action('template_redirect', 'redirect_unauthenticated_users');`. Isso significa que sempre que ocorrer a ação de redirecionamento de template no WordPress, a função `redirect_unauthenticated_users()` será chamada, executando o redirecionamento conforme descrito acima.

Esse tipo de redirecionamento é útil para proteger áreas restritas do seu site, como páginas de acesso exclusivo para candidatos, garantindo que apenas usuários autenticados possam acessá-las.

Lembre-se de que esse código deve ser inserido em um arquivo de tema ativo ou em um plugin do WordPress para que funcione corretamente.

## Observação

A descrição acima é baseada na compreensão do código até a minha data de corte de conhecimento em setembro de 2021. Quaisquer alterações subsequentes no WordPress ou em suas práticas de programação podem não estar refletidas nesta descrição.
