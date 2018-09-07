<?php
/**
 * Created by PhpStorm.
 * User: ceci
 * Date: 7/8/2018
 * Time: 9:24 PM
 */

namespace AppBundle\Service\LanguagePacks;


use AppBundle\Constants\Config;
use AppBundle\Contracts\ILanguagePack;

class BulgarianILanguagePack implements ILanguagePack
{

    public const HOME = "Начало";

    public const BLOG_POSTS = "Публикации";

    public const CONTACT = "Контакти";

    public const TYPE_TO_SEARCH = "Търсене";

    public const TOP_ARTICLES = "Популяни";

    public const NEXT_ARTICLE = "Сладваща";

    public const READ_MORE = "Прочетете повече";

    public const YOUR_NAME = "Вашето име";

    public const YOUR_EMAIL = "Вашият Email адрес";

    public const YOUR_MESSAGE = "Вашето запитване";

    public const SEND_MESSAGE = "Изпращане";

    public const LOAD_MORE = "Покажи Повече";

    public const SUBSCRIBE = "Абониране";

    public const LATEST_ARTICLES = "Нови публикации";

    public const REPLY = "Отговор";

    public const COMMENTS = "Коментари";

    public const LOGIN = "Вход";

    public const REGISTER = "Регистрация";

    public const POST_COMMENT = "Оставете Коментар";

    public const YOUR_COMMENT = "Вашия коментар";

    public const LOGOUT = "Изход";

    public const LIKE = "Харесване";

    public const LIKES = "Харесвания";

    public const LOGIN_TO_LIKE = "влезте в профила си, за да харесате";

    public const MORE = "още";

    public const SIMILAR = "Подобни";

    public const ABOUT = "За автора";

    public const TRENDING_ARTICLES = "Нашумелите";

    public const NEXT = "Следваща";

    public const PREVIOUS = "Предишна";

    public const SECTION_IS_EMPTY = "Страницата е празна";

    public function sectionIsEmpty(): string
    {
        return self::SECTION_IS_EMPTY;
    }

    public function next(): string
    {
        return self::NEXT;
    }

    public function previous(): string
    {
       return self::PREVIOUS;
    }

    public function trendingArticles() : string
    {
        return self::TRENDING_ARTICLES;
    }

    public function usernameAlreadyTaken(): string
    {
        return "Потребителското име е заето!";
    }

    public function passwordIsIncorrect(): string
    {
        return "Грешна парола!";
    }

    public function usernameDoesNotExist(): string
    {
        return "Потребителското име не съществува";
    }

    public function passwordIsLessThan(int $count): string
    {
        return "Паролата е под " . $count . " знака!";
    }

    function invalidEmailAddress(): string
    {
        return "Невалиден Email адрес!";
    }

    function emailAlreadyInUse(): string
    {
        return "Email адресът е зает!";
    }

    function invalidUsername(): string
    {
        return "Невалидно портребителско име!";
    }

    function passwordsDoNotMatch(): string
    {
        return "Паролите не съвпадат!";
    }

    function home(): string
    {
        return self::HOME;
    }

    function blogPosts(): string
    {
        return self::BLOG_POSTS;
    }

    function contacts(): string
    {
        return self::CONTACT;
    }

    function typeToSearch(): string
    {
        return self::TYPE_TO_SEARCH;
    }

    function topArticles(): string
    {
        return self::TOP_ARTICLES;
    }

    function nextArticle(): string
    {
        return self::NEXT_ARTICLE;
    }

    function readMore(): string
    {
        return self::READ_MORE;
    }

    function yourName(): string
    {
        return self::YOUR_NAME;
    }

    function yourEmail(): string
    {
        return self::YOUR_EMAIL;
    }

    function yourMessage(): string
    {
        return self::YOUR_MESSAGE;
    }

    function sendMessage(): string
    {
        return self::SEND_MESSAGE;
    }

    function loadMore(): string
    {
        return self::LOAD_MORE;
    }

    function passwordIsLessThanLength(): string
    {
        return self::passwordIsLessThan(Config::MINIMUM_PASSWORD_LENGTH);
    }

    function subscribe(): string
    {
        return self::SUBSCRIBE;
    }

    function latestArticles(): string
    {
        return self::LATEST_ARTICLES;
    }

    function comments(): string
    {
        return self::COMMENTS;
    }

    function reply(): string
    {
        return self::REPLY;
    }

    function login(): string
    {
        return self::LOGIN;
    }

    function register(): string
    {
        return self::REGISTER;
    }

    function postComment(): string
    {
        return self::POST_COMMENT;
    }

    function yourComment(): string
    {
        return self::YOUR_COMMENT;
    }

    function logout(): string
    {
        return self::LOGOUT;
    }

    function like(): string
    {
        return self::LIKE;
    }

    function likes(): string
    {
        return self::LIKES;
    }

    function loginToLike(): string
    {
        return self::LOGIN_TO_LIKE;
    }

    function categoryWithNameDoesNotExist(string $catName)
    {
        return sprintf("Категория с име %s не съществува.", $catName);
    }

    function more(): string
    {
        return self::MORE;
    }

    function similar(): string
    {
        return self::SIMILAR;
    }

    function about() : string {
        return self::ABOUT;
    }
}