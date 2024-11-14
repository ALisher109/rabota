<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Impostazioni',
    'settings_save' => 'Salva impostazioni',
    'system_version' => 'Versione del sistema',
    'categories' => 'Categorie',

    // App Settings
    'app_customization' => 'Personalizzazione',
    'app_features_security' => 'Funzioni e sicurezza',
    'app_name' => 'Nome applicazione',
    'app_name_desc' => 'Questo nome è mostrato nell\'intestazione e in tutte le email inviate dal sistema.',
    'app_name_header' => 'Mostra il nome nell\'header',
    'app_public_access' => 'Accesso pubblico',
    'app_public_access_desc' => 'Abilitando questa opzione, i visitatori, che non sono loggati, potranno accedere ai contenuti nella tua istanza BookStack.',
    'app_public_access_desc_guest' => 'L\'accesso ai visitatori pubblici può essere controllato attraverso l\'utente "Guest".',
    'app_public_access_toggle' => 'Permetti accesso pubblico',
    'app_public_viewing' => 'Consentire la visione pubblica?',
    'app_secure_images' => 'Sicurezza aggiuntiva per le immagini caricate',
    'app_secure_images_toggle' => 'Abilita sicurezza aggiuntiva per le immagini caricate',
    'app_secure_images_desc' => 'Per ragioni di prestazioni, tutte le immagini sono pubbliche. Questa opzione aggiunge una stringa casuale, difficile da indovinare, davanti agli url delle immagini. Assicurati che l\'indicizzazione delle cartelle non sia abilitato per prevenire un accesso semplice.',
    'app_default_editor' => 'Editor di pagina predefinito',
    'app_default_editor_desc' => 'Seleziona quale editor sarà usato per impostazione predefinita quando modifichi nuove pagine. Questa impostazione potrà essere sovrascritta a livello di pagina dove i permessi lo consentono.',
    'app_custom_html' => 'Contenuto Head HTML personalizzato',
    'app_custom_html_desc' => 'Qualsiasi contenuto aggiunto qui verrà inserito alla fine della sezione <head> di tutte le pagine. Questo è utile per sovrascrivere lo stile o aggiungere il codice per gli analytics.',
    'app_custom_html_disabled_notice' => 'Il contenuto Head HTML personalizzato è disabilitato su questa pagina delle impostazioni per garantire che eventuali modifiche distruttive possano essere annullate.',
    'app_logo' => 'Logo applicazione',
    'app_logo_desc' => 'Viene utilizzata nella barra di intestazione dell\'applicazione, tra le altre aree. L\'immagine deve avere un\'altezza di 86px. Le immagini più grandi saranno ridimensionate.',
    'app_icon' => 'Icona applicazione',
    'app_icon_desc' => 'Questa icona viene utilizzata per le schede del browser e per le icone di collegamento. Deve essere un\'immagine PNG quadrata di 256px.',
    'app_homepage' => 'Homepage applicazione',
    'app_homepage_desc' => 'Seleziona una pagina da mostrare nella home anzichè quella di default. I permessi della pagina sono ignorati per le pagine selezionate.',
    'app_homepage_select' => 'Seleziona una pagina',
    'app_footer_links' => 'Link a piè di pagina',
    'app_footer_links_desc' => 'Aggiungi link da mostrare in basso nel sito. Questi saranno visibili in fondo alla maggior parte delle pagine, incluse quelle che non richiedono un autenticazione. Puoi usare l\'etichetta "trans::<chiave>" per utilizzare le traduzioni implementate nella piattaforma. Esempio: usando "trans::common.privacy_policy" mostrerà il testo tradotto "Norme sulla privacy" e "trans::common.terms_of_service" mostrerà il testo tradotto "Condizioni del Servizio".',
    'app_footer_links_label' => 'Etichetta del link',
    'app_footer_links_url' => 'URL del link',
    'app_footer_links_add' => 'Aggiungi link in basso',
    'app_disable_comments' => 'Disabilita commenti',
    'app_disable_comments_toggle' => 'Disabilita i commenti',
    'app_disable_comments_desc' => 'Disabilita i commenti su tutte le pagine dell\'applicazione. <br> I commenti esistenti non sono mostrati.',

    // Color settings
    'color_scheme' => 'Schema di colore dell\'applicazione',
    'color_scheme_desc' => 'Imposta i colori da utilizzare nell\'interfaccia utente dell\'applicazione. I colori possono essere configurati separatamente per le modalità scura e chiara, per adattarsi al meglio al tema e garantire la leggibilità.',
    'ui_colors_desc' => 'Imposta il colore primario dell\'applicazione e il colore predefinito dei collegamenti. Il colore primario è utilizzato principalmente per il banner dell\'intestazione, i pulsanti e le decorazioni dell\'interfaccia. Il colore predefinito dei collegamenti viene utilizzato per i collegamenti e le azioni basate sul testo, sia all\'interno dei contenuti scritti che nell\'interfaccia dell\'applicazione.',
    'app_color' => 'Colore principale',
    'link_color' => 'Colore preferito del link',
    'content_colors_desc' => 'Impostare i colori per tutti gli elementi nella gerarchia dell\'organizzazione della pagina. Si consiglia di scegliere colori con una luminosità simile a quella dei colori predefiniti per garantire la leggibilità.',
    'bookshelf_color' => 'Colore della libreria',
    'book_color' => 'Colore del libro',
    'chapter_color' => 'Colore del capitolo',
    'page_color' => 'Colore della pagina',
    'page_draft_color' => 'Colore della bozza',

    // Registration Settings
    'reg_settings' => 'Impostazioni registrazione',
    'reg_enable' => 'Abilita registrazione',
    'reg_enable_toggle' => 'Abilita registrazione',
    'reg_enable_desc' => 'Quando la registrazione è abilitata, l\utente sarà in grado di registrarsi autonomamente all\'applicazione. Al momento della registrazione gli verrà associato un ruolo utente predefinito.',
    'reg_default_role' => 'Ruolo predefinito dopo la registrazione',
    'reg_enable_external_warning' => 'L\'opzione precedente viene ignorata se l\'autenticazione esterna tramite LDAP o SAML è attiva. Se l\'autenticazione (effettuata sul sistema esterno) sarà valida, gli account di eventuali membri non registrati saranno creati in automatico.',
    'reg_email_confirmation' => 'Conferma Email',
    'reg_email_confirmation_toggle' => 'Richiedi conferma email',
    'reg_confirm_email_desc' => 'Se la restrizione per dominio è usata la conferma della mail sarà richiesta e la scelta ignorata.',
    'reg_confirm_restrict_domain' => 'Restringi la registrazione al dominio',
    'reg_confirm_restrict_domain_desc' => 'Inserisci una lista separata da virgola di domini di email a cui vorresti restringere la registrazione. Agli utenti verrà inviata una mail per confermare il loro indirizzo prima che possano interagire con l\'applicazione. <br> Nota che gli utenti saranno in grado di cambiare il loro indirizzo dopo aver completato la registrazione.',
    'reg_confirm_restrict_domain_placeholder' => 'Nessuna restrizione impostata',

    // Maintenance settings
    'maint' => 'Manutenzione',
    'maint_image_cleanup' => 'Pulizia immagini',
    'maint_image_cleanup_desc' => 'Esegue la scansione del contenuto delle pagine e delle revisioni per verificare quali immagini e disegni sono attualmente in uso e quali immagini sono ridondanti. Assicurati di creare un backup completo del database e delle immagini prima di eseguire la pulizia.',
    'maint_delete_images_only_in_revisions' => 'Elimina anche le immagini che esistono solo nelle vecchie revisioni della pagina',
    'maint_image_cleanup_run' => 'Esegui pulizia',
    'maint_image_cleanup_warning' => 'Sono state trovate :count immagini potenzialmente inutilizzate. Sei sicuro di voler eliminare queste immagini?',
    'maint_image_cleanup_success' => ':count immagini potenzialmente inutilizzate trovate e eliminate!',
    'maint_image_cleanup_nothing_found' => 'Nessuna immagine non utilizzata trovata, non è stato cancellato nulla!',
    'maint_send_test_email' => 'Invia un\'email di test',
    'maint_send_test_email_desc' => 'Questo comando invia un\'email di prova al tuo indirizzo email specificato nel tuo profilo.',
    'maint_send_test_email_run' => 'Invia email di test',
    'maint_send_test_email_success' => 'Email inviata a :address',
    'maint_send_test_email_mail_subject' => 'Email di test',
    'maint_send_test_email_mail_greeting' => 'L\'invio delle email sembra funzionare!',
    'maint_send_test_email_mail_text' => 'Congratulazioni! Siccome hai ricevuto questa notifica email, le tue impostazioni sembrano essere configurate correttamente.',
    'maint_recycle_bin_desc' => 'Le librerie, i libri, i capitoli e le pagine cancellati vengono inviati al cestino in modo che possano essere ripristinati o eliminati definitivamente. Gli elementi più vecchi nel cestino possono essere automaticamente rimossi dopo un certo periodo, a seconda della configurazione del sistema.',
    'maint_recycle_bin_open' => 'Apri il Cestino',
    'maint_regen_references' => 'Rigenera riferimenti',
    'maint_regen_references_desc' => 'Questa azione ricostruirà l\'indice dei riferimenti incrociati all\'interno del database. Di solito questa operazione è gestita automaticamente, ma può essere utile per indicizzare contenuti vecchi o aggiunti con metodi non ufficiali.',
    'maint_regen_references_success' => 'L\'indice di riferimento è stato rigenerato!',
    'maint_timeout_command_note' => 'Nota: Questa azione può richiedere del tempo per essere eseguita e può causare problemi di timeout in alcuni ambienti web. In alternativa, questa azione può essere eseguita usando un comando da terminale.',

    // Recycle Bin
    'recycle_bin' => 'Cestino',
    'recycle_bin_desc' => 'Qui è possibile ripristinare gli elementi che sono stati eliminati o scegliere di rimuoverli definitivamente dal sistema. Questo elenco non è filtrato a differenza di elenchi di attività simili nel sistema in cui vengono applicati i filtri autorizzazioni.',
    'recycle_bin_deleted_item' => 'Elemento eliminato',
    'recycle_bin_deleted_parent' => 'Superiore',
    'recycle_bin_deleted_by' => 'Cancellato da',
    'recycle_bin_deleted_at' => 'Orario Cancellazione',
    'recycle_bin_permanently_delete' => 'Elimina definitivamente',
    'recycle_bin_restore' => 'Ripristina',
    'recycle_bin_contents_empty' => 'Al momento il cestino è vuoto',
    'recycle_bin_empty' => 'Svuota Cestino',
    'recycle_bin_empty_confirm' => 'Questa operazione cancellerà definitivamente tutti gli elementi presenti nel cestino, inclusi i contenuti relativi a ciascun elemento. Sei sicuro di voler svuotare il cestino?',
    'recycle_bin_destroy_confirm' => 'Questa azione eliminerà definitivamente questo elemento dal sistema, insieme a qualsiasi elemento figlio elencato di seguito, e non sarai in grado di ripristinare questo contenuto. Sei sicuro di voler eliminare definitivamente questo elemento?',
    'recycle_bin_destroy_list' => 'Elementi da eliminare definitivamente',
    'recycle_bin_restore_list' => 'Elementi da ripristinare',
    'recycle_bin_restore_confirm' => 'Questa azione ripristinerà l\'elemento eliminato, compresi gli elementi figli, nella loro posizione originale. Se la posizione originale è stata eliminata, ed è ora nel cestino, anche l\'elemento padre dovrà essere ripristinato.',
    'recycle_bin_restore_deleted_parent' => 'L\'elemento padre di questo elemento è stato eliminato. Questo elemento rimarrà eliminato fino a che l\'elemento padre non sarà ripristinato.',
    'recycle_bin_restore_parent' => 'Ripristina Superiore',
    'recycle_bin_destroy_notification' => 'Eliminati :count elementi dal cestino.',
    'recycle_bin_restore_notification' => 'Ripristinati :count elementi dal cestino.',

    // Audit Log
    'audit' => 'Registro di Controllo',
    'audit_desc' => 'Questo registro di controllo mostra la lista delle attività registrate dal sistema. Questa lista, a differenza di altre liste del sistema a cui vengono applicate dei filtri, è integrale.',
    'audit_event_filter' => 'Filtro eventi',
    'audit_event_filter_no_filter' => 'Nessun filtro',
    'audit_deleted_item' => 'Elemento eliminato',
    'audit_deleted_item_name' => 'Nome: :name',
    'audit_table_user' => 'Utente',
    'audit_table_event' => 'Evento',
    'audit_table_related' => 'Elemento o dettaglio correlato',
    'audit_table_ip' => 'Indirizzo IP',
    'audit_table_date' => 'Data attività',
    'audit_date_from' => 'Dalla data',
    'audit_date_to' => 'Alla data',

    // Role Settings
    'roles' => 'Ruoli',
    'role_user_roles' => 'Ruoli Utente',
    'roles_index_desc' => 'I ruoli sono utilizzati per raggruppare gli utenti e fornire ai loro membri i permessi di sistema. Quando un utente è membro di più ruoli, i privilegi concessi si sovrappongono e l\'utente eredita tutte le abilità.',
    'roles_x_users_assigned' => ':count utente assegnato|:count utenti assegnati',
    'roles_x_permissions_provided' => ':count permesso|:count permessi',
    'roles_assigned_users' => 'Utenti assegnati',
    'roles_permissions_provided' => 'Autorizzazioni fornite',
    'role_create' => 'Crea nuovo ruolo',
    'role_delete' => 'Elimina ruolo',
    'role_delete_confirm' => 'Questo eliminerà il ruolo con il nome \':roleName\'.',
    'role_delete_users_assigned' => 'Questo ruolo ha :userCount utenti assegnati. Se vuoi migrare gli utenti da questo ruolo selezionane uno nuovo sotto.',
    'role_delete_no_migration' => "Non migrare gli utenti",
    'role_delete_sure' => 'Sei sicuro di voler eliminare questo ruolo?',
    'role_edit' => 'Modifica ruolo',
    'role_details' => 'Dettagli ruolo',
    'role_name' => 'Nome ruolo',
    'role_desc' => 'Breve descrizione del ruolo',
    'role_mfa_enforced' => 'Richiesta autenticazione multi-fattore',
    'role_external_auth_id' => 'ID autenticazione esterna',
    'role_system' => 'Permessi di sistema',
    'role_manage_users' => 'Gestire gli utenti',
    'role_manage_roles' => 'Gestire ruoli e permessi di ruoli',
    'role_manage_entity_permissions' => 'Gestire tutti i permessi di libri, capitoli e pagine',
    'role_manage_own_entity_permissions' => 'Gestire i permessi sui propri libri, capitoli e pagine',
    'role_manage_page_templates' => 'Gestire modelli di pagina',
    'role_access_api' => 'Accedere alle API di sistema',
    'role_manage_settings' => 'Gestire impostazioni app',
    'role_export_content' => 'Esportare contenuto',
    'role_editor_change' => 'Cambiare editor di pagina',
    'role_notifications' => 'Ricevere e gestire le notifiche',
    'role_asset' => 'Permessi entità',
    'roles_system_warning' => 'Siate consapevoli che l\'accesso a uno dei tre permessi qui sopra può consentire a un utente di modificare i propri privilegi o i privilegi di altri nel sistema. Assegna ruoli con questi permessi solo ad utenti fidati.',
    'role_asset_desc' => 'Questi permessi controllano l\'accesso predefinito alle entità. I permessi in libri, capitoli e pagine sovrascriveranno questi.',
    'role_asset_admins' => 'Gli amministratori hanno automaticamente accesso a tutti i contenuti ma queste opzioni possono mostrare o nascondere le opzioni della UI.',
    'role_asset_image_view_note' => 'Questo si riferisce alla visibilità all\'interno del gestore delle immagini. L\'accesso effettivo ai file di immagine caricati dipenderà dall\'opzione di archiviazione delle immagini di sistema.',
    'role_all' => 'Tutti',
    'role_own' => 'Propri',
    'role_controlled_by_asset' => 'Controllato dall\'entità in cui sono caricati',
    'role_save' => 'Salva ruolo',
    'role_users' => 'Utenti in questo ruolo',
    'role_users_none' => 'Nessun utente assegnato a questo ruolo',

    // Users
    'users' => 'Utenti',
    'users_index_desc' => 'Crea e gestisci account utente individuali all\'interno del sistema. Gli account utente sono utilizzati per il login e l\'attribuzione di contenuti e attività. Le autorizzazioni di accesso sono principalmente basate sui ruoli, ma la proprietà dei contenuti dell\'utente, insieme ad altri fattori, può influenzare le autorizzazioni e l\'accesso.',
    'user_profile' => 'Profilo utente',
    'users_add_new' => 'Aggiungi Nuovo Utente',
    'users_search' => 'Cerca utenti',
    'users_latest_activity' => 'Ultima attività',
    'users_details' => 'Dettagli utente',
    'users_details_desc' => 'Imposta un nome e un indirizzo email per questo utente. L\'indirizzo email verrà utilizzato per accedere all\'applicazione.',
    'users_details_desc_no_email' => 'Imposta un nome per questo utente così gli altri possono riconoscerlo.',
    'users_role' => 'Ruoli utente',
    'users_role_desc' => 'Seleziona a quali ruoli verrà assegnato questo utente. Se un utente è assegnato a più ruoli riceverà tutte le abilità dei ruoli assegnati.',
    'users_password' => 'Password utente',
    'users_password_desc' => 'Imposta una password usata per accedere all\'applicazione. Deve essere lunga almeno 8 caratteri.',
    'users_send_invite_text' => 'Puoi scegliere di inviare a questo utente un\'email di invito che permette loro di impostare la propria password altrimenti puoi impostare la password tu stesso.',
    'users_send_invite_option' => 'Invia email di invito',
    'users_external_auth_id' => 'ID autenticazione esterna',
    'users_external_auth_id_desc' => 'Quando è in uso un sistema di autenticazione esterno (come SAML2, OIDC o LDAP) questo è l\'ID che collega questo utente BookStack all\'account del sistema di autenticazione. È possibile ignorare questo campo se si utilizza l\'autenticazione predefinita basata su email.',
    'users_password_warning' => 'Compila la parte sottostante solo se desideri cambiare la password per questo utente.',
    'users_system_public' => 'Questo utente rappresente qualsiasi ospite che visita il sito. Non può essere usato per effettuare il login ma è assegnato automaticamente.',
    'users_delete' => 'Elimina utente',
    'users_delete_named' => 'Elimina l\'utente :userName',
    'users_delete_warning' => 'Questo eliminerà completamente l\'utente \':userName\' dal sistema.',
    'users_delete_confirm' => 'Sei sicuro di voler eliminare questo utente?',
    'users_migrate_ownership' => 'Cambia proprietario',
    'users_migrate_ownership_desc' => 'Seleziona qui un utente se vuoi che un altro utente diventi il proprietario di tutti gli elementi attualmente di proprietà di questo utente.',
    'users_none_selected' => 'Nessun utente selezionato',
    'users_edit' => 'Modifica utente',
    'users_edit_profile' => 'Modifica profilo',
    'users_avatar' => 'Avatar utente',
    'users_avatar_desc' => 'Quest\'immagine dovrebbe essere quadrata e alta circa 256px.',
    'users_preferred_language' => 'Lingua preferita',
    'users_preferred_language_desc' => 'Questa opzione cambierà la lingua utilizzata per l\'interfaccia utente dell\'applicazione. Questo non influirà su alcun contenuto creato dall\'utente.',
    'users_social_accounts' => 'Account social',
    'users_social_accounts_desc' => 'Visualizza lo stato degli account social connessi per questo utente. Gli account social possono essere utilizzati in aggiunta al sistema di autenticazione primaria per l\'accesso al sistema.',
    'users_social_accounts_info' => 'Qui puoi connettere gli altri account per un accesso più veloce e semplice. Disconnettere un account qui non rimuoverà le altre sessioni. Revoca l\'accesso dal tuo profilo negli account social connessi.',
    'users_social_connect' => 'Connetti account',
    'users_social_disconnect' => 'Disconnetti account',
    'users_social_status_connected' => 'Connesso',
    'users_social_status_disconnected' => 'Disconnesso',
    'users_social_connected' => 'L\'account :socialAccount è stato connesso correttamente al tuo profilo.',
    'users_social_disconnected' => 'L\'account :socialAccount è stato disconnesso correttamente dal tuo profilo.',
    'users_api_tokens' => 'Token API',
    'users_api_tokens_desc' => 'Crea e gestisci i token di accesso utilizzati per autenticarsi con l\'API REST di BookStack. I permessi per l\'API sono gestiti tramite l\'utente a cui appartiene il token.',
    'users_api_tokens_none' => 'Nessun token API è stato creato per questo utente',
    'users_api_tokens_create' => 'Crea token',
    'users_api_tokens_expires' => 'Scade',
    'users_api_tokens_docs' => 'Documentazione API',
    'users_mfa' => 'Autenticazione multi-fattore',
    'users_mfa_desc' => 'Imposta l\'autenticazione multi-fattore come misura di sicurezza aggiuntiva per il tuo account.',
    'users_mfa_x_methods' => ':count metodo configurato|:count metodi configurati',
    'users_mfa_configure' => 'Configura metodi',

    // API Tokens
    'user_api_token_create' => 'Crea token API',
    'user_api_token_name' => 'Nome',
    'user_api_token_name_desc' => 'Assegna al tuo token un nome leggibile per ricordarne la funzionalità in futuro.',
    'user_api_token_expiry' => 'Data di scadenza',
    'user_api_token_expiry_desc' => 'Imposta una data di scadenza per questo token. Dopo questa data, le richieste che utilizzeranno questo token non funzioneranno più. Lasciando questo campo vuoto si imposterà la scadenza tra 100 anni.',
    'user_api_token_create_secret_message' => 'Immediatamente dopo aver creato questo token, un "ID del Token" e una "Chiave segreta Token" saranno generati e mostrati. La chiave segreta verrà mostrata unicamente questa volta, assicurati, quindi, di copiare il valore in un posto sicuro prima di procedere.',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'ID del Token',
    'user_api_token_id_desc' => 'Questo è un identificativo non modificabile generato dal sistema per questo token e che sarà necessario fornire per le richieste tramite API.',
    'user_api_token_secret' => 'Chiave segreta token',
    'user_api_token_secret_desc' => 'Questo è una chiave segreta generata dal sistema per questo token che sarà necessario fornire per le richieste via API. Questo valore sarà visibile unicamente in questo momento pertanto copialo in un posto sicuro.',
    'user_api_token_created' => 'Token Aggiornato :timeAgo',
    'user_api_token_updated' => 'Token aggiornato :timeAgo',
    'user_api_token_delete' => 'Elimina token',
    'user_api_token_delete_warning' => 'Questa operazione eliminerà irreversibilmente dal sistema il token API denominato \':tokenName\'.',
    'user_api_token_delete_confirm' => 'Sei sicuri di voler eliminare questo token API?',

    // Webhooks
    'webhooks' => 'Webhook',
    'webhooks_index_desc' => 'I webhook sono un modo per inviare dati a URL esterni quando si verificano determinate azioni ed eventi all\'interno del sistema, consentendo l\'integrazione basata sugli eventi con piattaforme esterne, come sistemi di messaggistica o di notifica.',
    'webhooks_x_trigger_events' => ':count evento trigger|:count eventi trigger',
    'webhooks_create' => 'Crea nuovo webhook',
    'webhooks_none_created' => 'Nessun webhook è stato creato.',
    'webhooks_edit' => 'Modifica webhook',
    'webhooks_save' => 'Salva webhook',
    'webhooks_details' => 'Dettagli webhook',
    'webhooks_details_desc' => 'Fornisci un nome di facile utilizzo e un endpoint POST come posizione per i dati del webhook da inviare.',
    'webhooks_events' => 'Eventi webhook',
    'webhooks_events_desc' => 'Seleziona tutti gli eventi che dovrebbero attivare questo webhook da chiamare.',
    'webhooks_events_warning' => 'Tieni presente che questi eventi saranno attivati per tutti gli eventi selezionati, anche se vengono applicati permessi personalizzati. Assicurati che l\'uso di questo webhook non esporrà contenuti riservati.',
    'webhooks_events_all' => 'Tutti gli eventi di sistema',
    'webhooks_name' => 'Nome webhook',
    'webhooks_timeout' => 'Timeout richiesta webhook (secondi)',
    'webhooks_endpoint' => 'Endpoint webhook',
    'webhooks_active' => 'Webhook attivo',
    'webhook_events_table_header' => 'Eventi',
    'webhooks_delete' => 'Elimina webhook',
    'webhooks_delete_warning' => 'Questo eliminerà completamente questo webhook chiamato \':webhookName\' dal sistema.',
    'webhooks_delete_confirm' => 'Sei sicuro di voler eliminare questo webhook?',
    'webhooks_format_example' => 'Esempio di formato webhook',
    'webhooks_format_example_desc' => 'I dati del webhook vengono inviati come richiesta POST all\'endpoint configurato come JSON seguendo il formato sottostante. Le proprietà "related_item" e "url" sono opzionali e dipenderanno dal tipo di evento attivato.',
    'webhooks_status' => 'Stato webhook',
    'webhooks_last_called' => 'Ultima chiamata:',
    'webhooks_last_errored' => 'Ultimo errore:',
    'webhooks_last_error_message' => 'Ultimo messaggio di errore:',

    // Licensing
    'licenses' => 'Licenze',
    'licenses_desc' => 'Questa pagina contiene informazioni dettagliate sulle licenze di BookStack, oltre ai progetti e alle librerie utilizzate all\'interno di BookStack. Molti dei progetti elencati possono essere utilizzati solo in un contesto di sviluppo.',
    'licenses_bookstack' => 'Licenza BookStack',
    'licenses_php' => 'Licenze Librerie PHP',
    'licenses_js' => 'Licenze Librerie JavaScript',
    'licenses_other' => 'Altre Licenze',
    'license_details' => 'Dettagli Licenza',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'Inglese',
        'ar' => 'Arabo',
        'bg' => 'Bulgaro',
        'bs' => 'Bosniaco',
        'ca' => 'Catalano',
        'cs' => 'Ceco',
        'cy' => 'Cymraeg',
        'da' => 'Danese',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Spagnolo',
        'es_AR' => 'Spagnolo d\'Argentina',
        'et' => 'Estone',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Francese',
        'he' => 'Ebraico',
        'hr' => 'Croato',
        'hu' => 'Ungherese',
        'id' => 'Indonesiano',
        'it' => 'Italiano',
        'ja' => 'Giapponese',
        'ko' => 'Coreano',
        'lt' => 'Lituano',
        'lv' => 'Lettone',
        'nb' => 'Norvegese (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Olandese',
        'pl' => 'Polacco',
        'pt' => 'Portoghese',
        'pt_BR' => 'Portoghese Brasiliano',
        'ro' => 'Română',
        'ru' => 'Russo',
        'sk' => 'Sloveno',
        'sl' => 'Sloveno',
        'sv' => 'Svedese',
        'tr' => 'Turco',
        'uk' => 'Ucraino',
        'uz' => 'O‘zbekcha',
        'vi' => 'Vietnamita',
        'zh_CN' => 'Cinese semplificato',
        'zh_TW' => 'Cinese tradizionale',
    ],
    //!////////////////////////////////
];