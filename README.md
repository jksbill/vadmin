![VCMS](http://vcms.liangzibiao.com/Vsonter/login)

# VCMS

VCMS是一款轻量级的、最原始的文章管理系统，其他系统可以基于它进行二次开发。后台使用bootstrap前端框架，集成了各种表单控件，快速，方便，易懂。

## VCMS后台功能特点

- 栏目无限分类
- 实现权限控制
- 各类form组件使用W方法封装好
- 支持多语音设置
- 文章管理
- 问答管理
- 实现多媒体版本（手机和电脑）
- 各种js插件已经初始化好，如（UEditor,Uploadify等）
- 集成短信与邮件模块
- 集成百度地图api
- 登录模块

##使用帮助

###数据分页
需要分页的控制器必须继承BaseController,使用$this->getPage方法。
如：
```php
$this->getPage('Article', $where, $listNum);
```
分页可添加条件，排序等。若想使用批量删除功能，请设置第4个参数为true
如：
```php
getPage('Article', $where, $listNum, true, 'create_time desc', 'join v_category on v_category.id = v_article.cid', 'LEFT');
```
注意：设置默认展示条数要开启redis，切通过baseModel中的get_list_number(`默认展示条数`)函数设定
```txt
$listNum = $this->get_list_number($this->listNum);
$this->delete_url = '/vsonter/article/delete_batch';
$this->getPage('Article', $where, $listNum, true);
```txt
Many PHP developers utilize email in their code. The only PHP function that supports this is the `mail()` function. However, it does not provide any assistance for making use of popular features such as HTML-based emails and attachments.

Formatting email correctly is surprisingly difficult. There are myriad overlapping RFCs, requiring tight adherence to horribly complicated formatting and encoding rules - the vast majority of code that you'll find online that uses the `mail()` function directly is just plain wrong!
*Please* don't be tempted to do it yourself - if you don't use PHPMailer, there are many other excellent libraries that you should look at before rolling your own - try SwiftMailer, Zend_Mail, eZcomponents etc.

The PHP `mail()` function usually sends via a local mail server, typically fronted by a `sendmail` binary on Linux, BSD and OS X platforms, however, Windows usually doesn't include a local mail server; PHPMailer's integrated SMTP implementation allows email sending on Windows platforms without a local mail server.

## License

This software is distributed under the [LGPL 2.1](http://www.gnu.org/licenses/lgpl-2.1.html) license. Please read LICENSE for information on the
software availability and distribution.

## Installation & loading

PHPMailer is available via [Composer/Packagist](https://packagist.org/packages/phpmailer/phpmailer) (using semantic versioning), so just add this line to your `composer.json` file:

```json
"phpmailer/phpmailer": "~5.2"
```

or

```sh
composer require phpmailer/phpmailer
```

If you want to use the Gmail XOAUTH2 authentication class, you will also need to add a dependency on the `league/oauth2-client` package.

Alternatively, copy the contents of the PHPMailer folder into one of the `include_path` directories specified in your PHP configuration. If you don't speak git or just want a tarball, click the 'zip' button at the top of the page in GitHub.

If you're not using composer's autoloader, PHPMailer provides an SPL-compatible autoloader, and that is the preferred way of loading the library - just `require '/path/to/PHPMailerAutoload.php';` and everything should work. The autoloader does not throw errors if it can't find classes so it prepends itself to the SPL list, allowing your own (or your framework's) autoloader to catch errors. SPL autoloading was introduced in PHP 5.1.0, so if you are using a version older than that you will need to require/include each class manually.

PHPMailer does *not* declare a namespace because namespaces were only introduced in PHP 5.3.

If you want to use Google's XOAUTH2 authentication mechanism, you need to be running at least PHP 5.4, and load the dependencies listed in `composer.json`.

### Minimal installation

While installing the entire package manually or with composer is simple, convenient and reliable, you may want to include only vital files in your project. At the very least you will need [class.phpmailer.php](https://github.com/PHPMailer/PHPMailer/tree/master/class.phpmailer.php). If you're using SMTP, you'll need [class.smtp.php](https://github.com/PHPMailer/PHPMailer/tree/master/class.smtp.php), and if you're using POP-before SMTP, you'll need [class.pop3.php](https://github.com/PHPMailer/PHPMailer/tree/master/class.pop3.php). For all of these, we recommend you use [the autoloader](https://github.com/PHPMailer/PHPMailer/tree/master/PHPMailerAutoload.php) too as otherwise you will either have to `require` all classes manually or use some other autoloader. You can skip the [language](https://github.com/PHPMailer/PHPMailer/tree/master/language/) folder if you're not showing errors to users and can make do with English-only errors. You may need the additional classes in the [extras](extras/) folder if you are using those features, including NTLM authentication and ics generation. If you're using Google XOAUTH2 you will need `class.phpmaileroauth.php` and `class.oauth.php` classes too, as well as the composer dependencies.

## A Simple Example

```php
<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
```

You'll find plenty more to play with in the [examples](https://github.com/PHPMailer/PHPMailer/tree/master/examples) folder.

That's it. You should now be ready to use PHPMailer!

## Localization
PHPMailer defaults to English, but in the [language](https://github.com/PHPMailer/PHPMailer/tree/master/language/) folder you'll find numerous (46 at the time of writing!) translations for PHPMailer error messages that you may encounter. Their filenames contain [ISO 639-1](http://en.wikipedia.org/wiki/ISO_639-1) language code for the translations, for example `fr` for French. To specify a language, you need to tell PHPMailer which one to use, like this:

```php
// To load the French version
$mail->setLanguage('fr', '/optional/path/to/language/directory/');
```

We welcome corrections and new languages - if you're looking for corrections to do, run the [phpmailerLangTest.php](https://github.com/PHPMailer/PHPMailer/tree/master/test/phpmailerLangTest.php) script in the tests folder and it will show any missing translations.

## Documentation

Examples of how to use PHPMailer for common scenarios can be found in the [examples](https://github.com/PHPMailer/PHPMailer/tree/master/examples) folder. If you're looking for a good starting point, we recommend you start with [the Gmail example](https://github.com/PHPMailer/PHPMailer/tree/master/examples/gmail.phps).

There are tips and a troubleshooting guide in the [GitHub wiki](https://github.com/PHPMailer/PHPMailer/wiki). If you're having trouble, this should be the first place you look as it's the most frequently updated.

Complete generated API documentation is [available online](http://phpmailer.github.io/PHPMailer/).

You'll find some basic user-level docs in the [docs](docs/) folder, and you can generate complete API-level documentation using the [generatedocs.sh](https://github.com/PHPMailer/PHPMailer/tree/master/docs/generatedocs.sh) shell script in the docs folder, though you'll need to install [PHPDocumentor](http://www.phpdoc.org) first. You may find [the unit tests](https://github.com/PHPMailer/PHPMailer/tree/master/test/phpmailerTest.php) a good source of how to do various operations such as encryption.

If the documentation doesn't cover what you need, search the [many questions on Stack Overflow](http://stackoverflow.com/questions/tagged/phpmailer), and before you ask a question about "SMTP Error: Could not connect to SMTP host.", [read the troubleshooting guide](https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting).

## Tests

There is a PHPUnit test script in the [test](https://github.com/PHPMailer/PHPMailer/tree/master/test/) folder.

Build status: [![Build Status](https://travis-ci.org/PHPMailer/PHPMailer.svg)](https://travis-ci.org/PHPMailer/PHPMailer)

If this isn't passing, is there something you can do to help?

## Contributing

Please submit bug reports, suggestions and pull requests to the [GitHub issue tracker](https://github.com/PHPMailer/PHPMailer/issues).

We're particularly interested in fixing edge-cases, expanding test coverage and updating translations.

With the move to the PHPMailer GitHub organisation, you'll need to update any remote URLs referencing the old GitHub location with a command like this from within your clone:

```sh
git remote set-url upstream https://github.com/PHPMailer/PHPMailer.git
```

Please *don't* use the SourceForge or Google Code projects any more.

## Sponsorship

Development time and resources for PHPMailer are provided by [Smartmessages.net](https://info.smartmessages.net/), a powerful email marketing system.

<a href="https://info.smartmessages.net/"><img src="https://www.smartmessages.net/img/smartmessages-logo.svg" width="250" height="28" alt="Smartmessages email marketing"></a>

Other contributions are gladly received, whether in beer 🍺, T-shirts 👕, Amazon wishlist raids, or cold, hard cash 💰.

## Changelog

See [changelog](changelog.md).

## History
- PHPMailer was originally written in 2001 by Brent R. Matzelle as a [SourceForge project](http://sourceforge.net/projects/phpmailer/).
- Marcus Bointon (coolbru on SF) and Andy Prevost (codeworxtech) took over the project in 2004.
- Became an Apache incubator project on Google Code in 2010, managed by Jim Jagielski.
- Marcus created his fork on [GitHub](https://github.com/Synchro/PHPMailer).
- Jim and Marcus decide to join forces and use GitHub as the canonical and official repo for PHPMailer.
- PHPMailer moves to the [PHPMailer organisation](https://github.com/PHPMailer) on GitHub.

### What's changed since moving from SourceForge?
- Official successor to the SourceForge and Google Code projects.
- Test suite.
- Continuous integration with Travis-CI.
- Composer support.
- Public development.
- Additional languages and language strings.
- CRAM-MD5 authentication support.
- Preserves full repo history of authors, commits and branches from the original SourceForge project.
