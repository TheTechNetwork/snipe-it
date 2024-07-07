<?php

return [
    'about_assets_title'           => 'Sobre os Ativos',
    'about_assets_text'            => 'Ativos são itens que são controlados e rastreáveis pelo número de série ou por uma etiqueta de ativo (patrimônio). Eles tendem a ser de valor elevado onde a identificação de itens específicos é relevante.',
    'archived'  				=> 'Arquivado',
    'asset'  					=> 'Ativo',
    'bulk_checkout'             => 'Alocação de Ativos',
    'bulk_checkin'              => 'Check-in de Ativo',
    'checkin'  					=> 'Retornar Ativo',
    'checkout'  				=> 'Checkout de Ativo',
    'clone'  					=> 'Clonar Ativo',
    'deployable'  				=> 'Implementável',
    'deleted'  					=> 'Este modelo foi excluído.',
    'delete_confirm'            => 'Tem certeza de que deseja excluir este ativo?',
    'edit'  					=> 'Editar Ativo',
    'model_deleted'  			=> 'Este modelo de Ativos foi excluído. Você deve restaurar o modelo antes de restaurar o Ativo.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Solicitável',
    'requested'				    => 'Solicitado',
    'not_requestable'           => 'Não solicitável',
    'requestable_status_warning' => 'Não altere o status solicitável',
    'restore'  					=> 'Restaurar Ativo',
    'pending'  					=> 'Pendente',
    'undeployable'  			=> 'Não implementável',
    'undeployable_tooltip'  	=> 'Este ativo possui uma etiqueta de status que não é implantável e não pode ser check-out no momento.',
    'view'  					=> 'Ver Ativo',
    'csv_error' => 'Você tem um erro no seu arquivo CSV:',
    'import_text' => '<p>Upload de um CSV que contém o histórico de ativos. Os ativos e usuários já existem no sistema, ou serão ignorados. Correspondência de mídias para o histórico de importação acontece com a tag de conteúdo. Tentaremos encontrar um usuário correspondente com base no nome de usuário que você fornece, e nos critérios que você selecionar abaixo. Se você não selecionar nenhum critério abaixo, ele simplesmente tentará combinar com o formato de nome de usuário configurado na <code>Administração &gt; Configurações Gerais</code>.</p><p>Campos incluídos no CSV devem corresponder aos cabeçalhos: <strong>Marcador de Ativo, Nome, Data de Finalização, Data de Entrada</strong>. Quaisquer campos adicionais serão ignorados. </p><p>Data de check-in: em branco ou em datas futuras de check-in fará check-in dos itens para o usuário associado. Excluindo a coluna Data de check-in criará uma data de check-in com a data de hoje.</p>
    ',
    'csv_import_match_f-l' => 'Tente corresponder aos usuários por <strong>firstname.lastname</strong> (<code>jane.smith</code>) formato',
    'csv_import_match_initial_last' => 'Tente coincidir com os usuários do formato <strong>primeiro sobrenome</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Tente corresponder aos usuários pelo formato <strong>primeiro nome</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Tentar corresponder usuários por <strong>email</strong> como nome de usuário',
    'csv_import_match_username' => 'Tente corresponder aos usuários do nome <strong>nome de usuário</strong>',
    'error_messages' => 'Mensagens de erro:',
    'success_messages' => 'Mensagens de sucesso:',
    'alert_details' => 'Por favor, veja abaixo para detalhes.',
    'custom_export' => 'Exportação Personalizada',
    'mfg_warranty_lookup' => ':manufacturer Busca por Situação de Garantia',
    'user_department' => 'Departamento do Usuário',
];
