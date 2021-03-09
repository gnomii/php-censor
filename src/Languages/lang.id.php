<?php

return [
    'language_name' => 'Indonesia',
    'language'      => 'Bagas',
    'per_page'      => 'Item per Halaman',

    // Log in:
    'log_in_to_app' => 'Masuk PHP Censor',
    'login_error' => 'Email atau Password Salah',
    'forgotten_password_link' => 'Lupa Password?',
    'reset_emailed' => 'Kami telah mengirimkan link reset password ke email anda.',
    'reset_header' => '<strong>Jangan Khawatir!</strong><br>Masukkan alamat email anda pada form dibawah dan kami akan mengirimkan link reset password di email anda.',
    'reset_email_address' => 'Masukkan alamat email:',
    'reset_send_email' => 'Email password reset',
    'reset_enter_password' => 'Masukan Password anda',
    'reset_new_password' => 'Password Baru:',
    'reset_change_password' => 'Ganti Password',
    'reset_no_user_exists' => 'Tidak ditemukan user dengan email tersebut, silakan coba lagi.',
    'reset_email_body' => 'Halo %s,

Kamu mendapatkan email ini dikarenakan kamu, atau orang lain, telah melakukan request password baru di PHP Censor.

Jika ini adalah kamu, silakan ikuti link url ini untuk melanjutkan: %ssession/reset-password/%d/%s

Atau jika tidak, abaikan email ini.

Terima kasih,

PHP Censor',

    'reset_email_title' => 'PHP Censor Ubah Password untuk %s',
    'reset_invalid'     => 'Request password reset tidak valid.',
    'email_address'     => 'Alamat Email',
    'login'             => 'Login / Alamat Email',
    'password'          => 'Password',
    'remember_me'       => 'Ingat Saya',
    'log_in'            => 'Masuk',


    // Top Nav
    'toggle_navigation' => 'Alihkan Navigasi',
    'n_builds_pending' => '%d proses build tertunda',
    'n_builds_running' => '%d proses build tertunda',
    'edit_profile' => 'Sunting Profile',
    'sign_out' => 'Keluar',
    'branch_x' => 'Cabang: %s',
    'created_x' => 'Dibuat: %s',
    'started_x' => 'Dimulai: %s',
    'environment_x' => 'Environment: %s',

    // Sidebar
    'hello_name' => 'Halo, %s',
    'dashboard' => 'Dashboard',
    'admin_options' => 'Opsi Admin',
    'add_project' => 'Tambahkan Proyek',
    'project_groups' => 'Grup Proyek',
    'settings' => 'Pengaturan',
    'manage_users' => 'Kelola Pengguna',
    'plugins' => 'Plugin',
    'view' => 'View',
    'build_now' => 'Bangun sekarang',
    'build_now_debug' => 'Bangun sekarang dengan debug',
    'edit_project' => 'Edit Proyek',
    'delete_project' => 'Hapus Proyek',
    'delete_old_builds' => 'Hapus build lama',
    'delete_all_builds' => 'Hapus semua build',

    // Project Summary:
    'no_builds_yet' => 'Belum ada Build',
    'x_of_x_failed' => '%d dari %d builds gagal.',
    'last_successful_build' => ' Build terakhir yang berhasil adalah %s.',
    'never_built_successfully' => ' Proyek ini tidak pernah berhasil dibangun.',
    'all_builds_passed' => 'Semua %d build terakhir lolos.',
    'last_failed_build' => ' Build terakhir yang gagal adalah %s.',
    'never_failed_build' => ' Proyek ini tidak pernah gagal dalam membangun.',
    'view_project' => 'Lihat Proyek',
    'projects_with_build_errors' => 'Kesalahan Build',
    'no_build_errors' => 'Tidak ada kesalahan Build',

    // Timeline:
    'latest_builds' => 'Build Terakhir',
    'pending' => 'Pending',
    'running' => 'Berjalan',
    'success' => 'Sukses',
    'failed' => 'Gagal',
    'failed_allowed' => 'Gagal (Diizinkan)',
    'error'  => 'Error',
    'skipped' => 'Dilewati',
    'trace'   => 'Jejak tumpukan',
    'manual_build' => 'Build Manual',

    // Add/Edit Project:
    'new_project' => 'Proyek Baru',
    'project_x_not_found' => 'Proyek dengan ID %d tidak ditemukan.',
    'project_details' => 'Detil Proyek',
    'public_key_help' => 'Untuk mempermudah memulai, kami telah membuat pasangan kunci SSH untuk Anda gunakan atau proyek ini. Untuk menggunakannya, cukup tambahkan kunci publik berikut ke bagian "menerapkan kunci" dari platform hosting kode sumber yang Anda pilih.',
    'select_repository_type' => 'Pilih jenis repositori...',
    'github' => 'GitHub',
    'bitbucket' => 'Bitbucket',
    'gitlab' => 'GitLab',
    'git' => 'Git',
    'local' => 'Local Path',
    'hg'    => 'Mercurial',
    'svn'   => 'Subversion',

    'where_hosted' => 'Dimana proyek anda berada?',
    'choose_github' => 'Pilih repositori GitHub:',

    'repo_name' => 'Nama repositori / URL (Remote) or Path (Local)',
    'project_title' => 'Nama Proyek',
    'project_private_key' => 'Private Key yang digunakan untuk mengakses repositori
                                (biarkan kosong untuk remote lokal dan / atau anonim)',
    'build_config' => 'Konfigurasi build PHP Censor untuk proyek ini
                                (jika Anda tidak dapat menambahkan file .php-censor.yml di repositori proyek)',
    'default_branch'      => 'Nama cabang default',
    'default_branch_only' => 'Build cabang default saja',
    'overwrite_build_config' => 'Timpa konfigurasi file dalam repositori dengan konfigurasi dalam database? Jika kotak centang tidak dicentang maka konfigurasi dalam database akan digabungkan dengan konfigurasi file.',
    'allow_public_status' => 'Aktifkan halaman dan gambar status publik untuk proyek ini?',
    'archived'            => 'Diarsipkan',
    'archived_menu'       => 'Arsip',
    'save_project'        => 'Simpan Proyek',
    'environments_label'  => 'Environments (yaml)',

    'error_hg' => 'URL repositori Mercurial harus dimulai dengan http: // atau https: //',
    'error_git' => 'URL repositori harus diawali dengan git: //, http: // atau https: //',
    'error_gitlab' => 'Nama Repositori GitLab harus dalam format "user@domain.tld:owner/repo.git"',
    'error_github' => 'Nama repositori harus dalam format "pemilik/repo"',
    'error_bitbucket' => 'Nama repositori harus dalam format "pemilik/repo"',
    'error_path' => 'Path yang Anda tentukan tidak ada.',

    // View Project:
    'all_branches' => 'Semua Cabang',
    'all' => 'Semua',
    'builds' => 'Builds',
    'id' => 'ID',
    'date' => 'Tanggal',
    'project' => 'Proyek',
    'commit' => 'Commit',
    'branch' => 'Cabang',
    'environment' => 'Environment',
    'status' => 'Status',
    'prev_link' => '&laquo; Sebelumnya',
    'next_link' => 'Selanjutnya &raquo;',
    'public_key' => 'Public Key',
    'delete_build' => 'Habus Build',
    'build_source' => 'Sumber Build',

    'source_unknown'                       => 'Unknown',
    'source_manual_web'                    => 'Manual (from Web)',
    'source_manual_console'                => 'Manual (from CLI)',
    'source_manual_rebuild_web'            => 'Rebuild for %s (from Web)',
    'source_manual_rebuild_console'        => 'Rebuild for %s (from CLI)',
    'source_periodical'                    => 'Periodical',
    'source_webhook_push'                  => 'Webhook (Push)',
    'source_webhook_pull_request_created'  => 'Webhook (Created pull request)',
    'source_webhook_pull_request_updated'  => 'Webhook (Updated pull request)',
    'source_webhook_pull_request_approved' => 'Webhook (Approved pull request)',
    'source_webhook_pull_request_merged'   => 'Webhook (Merged pull request)',

    'webhooks' => 'Webhooks',
    'webhooks_help_github' => 'To automatically build this project when new commits are pushed, add the URL below
                                as a new "Webhook" in the <a href="https://github.com/%s/settings/hooks">Webhooks
                                and Services</a>  section of your GitHub repository.',

    'webhooks_help_gitlab' => 'To automatically build this project when new commits are pushed, add the URL below
                                as a "WebHook URL" in the Web Hooks section of your GitLab repository.',

    'webhooks_help_gogs' => 'To automatically build this project when new commits are pushed, add the URL below
                                as a "WebHook URL" in the Web Hooks section of your Gogs repository.',

    'webhooks_help_bitbucket' => 'To automatically build this project when new commits are pushed, add the URL below
                                as a "POST" service in the
                                <a href="https://bitbucket.org/%s/admin/services">
                                Services</a> section of your Bitbucket repository.',

    // Project Groups
    'group_projects' => 'Project groups',
    'project_group'  => 'Project group',
    'group_count'    => 'Projects count',
    'group_edit'     => 'Edit',
    'group_delete'   => 'Delete',
    'group_add'      => 'Add Group',
    'group_add_edit' => 'Add / Edit Group',
    'group_title'    => 'Group Title',
    'group_save'     => 'Save Group',

    // View Build
    'errors'            => 'Errors',
    'information'       => 'Information',
    'is_new'            => 'Is new?',
    'new'               => 'New',
    'build_x_not_found' => 'Build with ID %d does not exist.',
    'build_n'           => 'Build %d',
    'rebuild_now'       => 'Rebuild now',
    'rebuild_now_debug' => 'Rebuild now with debug',

    'all_errors'   => 'All errors',
    'only_new'     => 'Only new errors',
    'only_old'     => 'Only old errors',
    'new_errors'   => 'New errors',
    'total_errors' => 'Errors',

    'committed_by_x' => 'Committed by %s',
    'commit_id_x' => 'Commit: %s',

    'chart_display' => 'This chart will display once the build has completed.',

    'build'   => 'Build',
    'lines'   => 'Lines',
    'classes' => 'Classes',
    'methods' => 'Methods',
    'comment_lines' => 'Comment lines',
    'noncomment_lines' => 'Non-Comment lines',
    'logical_lines' => 'Logical Lines',
    'lines_of_code' => 'Lines of code',
    'coverage' => 'PHPUnit code coverage',
    'build_log' => 'Build log',
    'quality_trend' => 'Quality trend',
    'codeception_errors' => 'Codeception errors',
    'php_mess_detector_warnings' => 'PHPMD warnings',
    'php_code_sniffer_warnings' => 'PHPCS warnings',
    'php_code_sniffer_errors' => 'PHPCS errors',
    'phan_warnings' => 'Phan warnings',
    'php_cs_fixer_warnings' => 'PHP CS Fixer warnings',
    'php_parallel_lint_errors' => 'Lint errors',
    'php_unit_errors' => 'PHPUnit errors',
    'php_cpd_warnings' => 'PHP Copy/Paste Detector warnings',
    'php_docblock_checker_warnings' => 'Missing docblocks',
    'php_tal_lint_warnings' => 'PHP Tal Lint warnings',
    'php_tal_lint_errors' => 'PHP Tal Lint errors',
    'behat_warnings' => 'Behat warnings',
    'sensiolabs_insight_warnings' => 'Sensiolabs Insight warnings',
    'technical_debt_warnings' => 'Technical Debt warnings',
    'issues' => 'Issues',
    'merged_branches' => 'Merged branches',

    'codeception_feature' => 'Feature',
    'codeception_suite' => 'Suite',
    'codeception_time' => 'Time',
    'codeception_synopsis' => '<strong>%1$d</strong> tests carried out in <strong>%2$f</strong> seconds.
                               <strong>%3$d</strong> failures.',
    'suite' => 'Suite',
    'test'  => 'Test',
    'file' => 'File',
    'line' => 'Line',
    'class' => 'Class',
    'method' => 'Method',
    'message' => 'Message',
    'start' => 'Start',
    'end' => 'End',
    'from' => 'From',
    'to' => 'To',
    'result' => 'Result',
    'ok' => 'OK',
    'took_n_seconds' => 'Took %d seconds',
    'build_started' => 'Build Started',
    'build_finished' => 'Build Finished',
    'test_message' => 'Message',
    'test_no_message' => 'No message',
    'test_success' => 'Successful: %d',
    'test_fail' => 'Failures: %d',
    'test_skipped' => 'Skipped: %d',
    'test_error' => 'Errors: %d',
    'test_todo' => 'Todos: %d',
    'test_total' => '%d test(s)',

    // Users
    'name' => 'Name',
    'password_change' => 'Password (leave blank if you don\'t want to change)',
    'save' => 'Save &raquo;',
    'update_your_details' => 'Update your details',
    'your_details_updated' => 'Your details have been updated.',
    'add_user' => 'Add User',
    'is_admin' => 'Is Admin?',
    'yes' => 'Yes',
    'no' => 'No',
    'edit' => 'Edit',
    'edit_user' => 'Edit User',
    'delete_user' => 'Delete User',
    'user_n_not_found' => 'User with ID %d does not exist.',
    'is_user_admin' => 'Is this user an administrator?',
    'save_user' => 'Save User',

    // Settings:
    'settings_saved' => 'Your settings have been saved.',
    'settings_check_perms' => 'Your settings could not be saved, check the permissions of your config.yml file.',
    'settings_cannot_write' => 'PHP Censor cannot write to your config.yml file, settings may not be saved properly
                                until this is rectified.',
    'settings_github_linked' => 'Your GitHub account has been linked.',
    'settings_github_not_linked' => 'Your GitHub account could not be linked.',
    'build_settings' => 'Build Settings',
    'github_application' => 'GitHub Application',
    'github_sign_in' => 'Before you can start using GitHub, you need to <a href="%s">sign in</a> and grant
                            PHP Censor access to your account.',
    'github_app_linked' => 'PHP Censor is successfully linked to GitHub account.',
    'github_where_to_find' => 'Where to find these...',
    'github_where_help' => 'If you own the application you would like to use, you can find this information within your
                            <a href="https://github.com/settings/applications">applications</a> settings area.',

    'email_settings' => 'Email Settings',
    'email_settings_help' => 'Before PHP Censor can send build status emails,
                                you need to configure your SMTP settings below.',

    'application_id' => 'Application ID',
    'application_secret' => 'Application Secret',

    'smtp_server' => 'SMTP Server',
    'smtp_port' => 'SMTP Port',
    'smtp_username' => 'SMTP Username',
    'smtp_password' => 'SMTP Password',
    'from_email_address' => 'From Email Address',
    'default_notification_address' => 'Default Notification Email Address',
    'use_smtp_encryption' => 'Use SMTP Encryption?',
    'none' => 'None',
    'ssl' => 'SSL',
    'tls' => 'TLS',

    'failed_after' => 'Consider a build failed after',
    '5_mins' => '5 Minutes',
    '15_mins' => '15 Minutes',
    '30_mins' => '30 Minutes',
    '1_hour' => '1 Hour',
    '3_hours' => '3 Hours',

    // Plugins
    'cannot_update_composer' => 'PHP Censor cannot update composer.json for you as it is not writable.',
    'x_has_been_removed' => '%s has been removed.',
    'x_has_been_added' => '%s has been added to composer.json for you and will be installed next time
                            you run composer update.',
    'enabled_plugins' => 'Enabled Plugins',
    'provided_by_package' => 'Provided By Package',
    'installed_packages' => 'Installed Packages',
    'suggested_packages' => 'Suggested Packages',
    'title' => 'Title',
    'description' => 'Description',
    'version' => 'Version',
    'install' => 'Install &raquo;',
    'remove' => 'Remove &raquo;',
    'search_packagist_for_more' => 'Search Packagist for more packages',
    'search' => 'Search &raquo;',

    // Summary plugin
    'build-summary'  => 'Summary',
    'stage'          => 'Stage',
    'duration'       => 'Duration',
    'seconds'        => 'sec.',
    'plugin'         => 'Plugin',
    'stage_setup'    => 'Setup',
    'stage_test'     => 'Test',
    'stage_deploy'   => 'Deploy',
    'stage_complete' => 'Complete',
    'stage_success'  => 'Success',
    'stage_failure'  => 'Failure',
    'stage_broken'   => 'Broken',
    'stage_fixed'    => 'Fixed',
    'severity'       => 'Severity',

    'all_plugins'     => 'All plugins',
    'all_severities'  => 'All severities',
    'filters'         => 'Filters',
    'errors_selected' => 'Errors selected',

    'build_details'  => 'Build Details',
    'commit_details' => 'Commit Details',
    'committer'      => 'Committer',
    'commit_message' => 'Commit Message',
    'timing'         => 'Timing',
    'created'        => 'Created',
    'started'        => 'Started',
    'finished'       => 'Finished',

    // Update
    'update_app' => 'Update the database to reflect modified models.',
    'updating_app' => 'Updating PHP Censor database: ',
    'not_installed' => 'PHP Censor does not appear to be installed.',
    'install_instead' => 'Please install PHP Censor via php-censor:install instead.',

    // Create Build Command
    'add_to_queue_failed' => 'Build created successfully, but failed to add to build queue. This usually happens
                                when PHP Censor is set to use a beanstalkd server that does not exist,
                                or your beanstalkd server has stopped.',

    // Build Plugins:
    'passing_build' => 'Passing Build',
    'failing_build' => 'Failing Build',
    'log_output' => 'Log Output: ',


    // Error Levels:
    'critical' => 'Critical',
    'high' => 'High',
    'normal' => 'Normal',
    'low' => 'Low',

    // Plugins that generate errors:
    'php_mess_detector'    => 'PHP Mess Detector',
    'php_code_sniffer'     => 'PHP Code Sniffer',
    'php_unit'             => 'PHP Unit',
    'php_cpd'              => 'PHP Copy/Paste Detector',
    'php_docblock_checker' => 'PHP Docblock Checker',
    'composer'             => 'Composer',
    'php_loc'              => 'PHP LOC',
    'php_parallel_lint'    => 'PHP Parallel Lint',
    'email'                => 'Email Notify',
    'atoum'                => 'Atoum',
    'behat'                => 'Behat',
    'campfire'             => 'Campfire',
    'clean_build'          => 'Clean Build',
    'codeception'          => 'Codeception',
    'copy_build'           => 'Copy Build',
    'deployer'             => 'Deployer',
    'env'                  => 'Env',
    'grunt'                => 'Grunt',
    'hipchat_notify'       => 'Hipchat Notify',
    'irc'                  => 'IRC',
    'lint'                 => 'Lint',
    'mysql'                => 'MySQL',
    'package_build'        => 'Package Build',
    'pdepend'              => 'PDepend',
    'pgsql'                => 'PostgreSQL',
    'phan'                 => 'Phan',
    'phar'                 => 'Phar',
    'phing'                => 'Phing',
    'php_cs_fixer'         => 'PHP Coding Standards Fixer',
    'php_spec'             => 'PHP Spec',
    'shell'                => 'Shell',
    'slack_notify'         => 'Slack Notify',
    'technical_debt'       => 'Technical Debt',
    'xmpp'                 => 'XMPP',
    'security_checker'     => 'SensioLabs Security Checker',

    'confirm_message' => 'Item will be permanently deleted. Are you sure?',
    'confirm_title'   => 'Item delete confirmation',
    'confirm_ok'      => 'Delete',
    'confirm_cancel'  => 'Cancel',
    'confirm_success' => 'Item successfully deleted.',
    'confirm_failed'  => 'Deletion failed! Server says: ',

    'public_status_title' => 'Public status',
    'public_status_image' => 'Status image',
    'public_status_page'  => 'Public status page',
];
