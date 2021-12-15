<?php

namespace SalamWaddah\Constants\Http;

/**
 * - Official IANA registry: https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 * - Mozilla: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
 */
class Codes
{
    public const MESSAGES = [
        self::CODE_100 => self::MESSAGE_100,
        self::CODE_101 => self::MESSAGE_101,
        self::CODE_102 => self::MESSAGE_102,
        self::CODE_103 => self::MESSAGE_103,
        self::CODE_200 => self::MESSAGE_200,
        self::CODE_201 => self::MESSAGE_201,
        self::CODE_202 => self::MESSAGE_202,
        self::CODE_203 => self::MESSAGE_203,
        self::CODE_204 => self::MESSAGE_204,
        self::CODE_205 => self::MESSAGE_205,
        self::CODE_206 => self::MESSAGE_206,
        self::CODE_207 => self::MESSAGE_207,
        self::CODE_208 => self::MESSAGE_208,
        self::CODE_226 => self::MESSAGE_226,
        self::CODE_300 => self::MESSAGE_300,
        self::CODE_301 => self::MESSAGE_301,
        self::CODE_302 => self::MESSAGE_302,
        self::CODE_303 => self::MESSAGE_303,
        self::CODE_304 => self::MESSAGE_304,
        self::CODE_305 => self::MESSAGE_305,
        self::CODE_306 => self::MESSAGE_306,
        self::CODE_307 => self::MESSAGE_307,
        self::CODE_308 => self::MESSAGE_308,
        self::CODE_400 => self::MESSAGE_400,
        self::CODE_401 => self::MESSAGE_401,
        self::CODE_402 => self::MESSAGE_402,
        self::CODE_403 => self::MESSAGE_403,
        self::CODE_404 => self::MESSAGE_404,
        self::CODE_405 => self::MESSAGE_405,
        self::CODE_406 => self::MESSAGE_406,
        self::CODE_407 => self::MESSAGE_407,
        self::CODE_408 => self::MESSAGE_408,
        self::CODE_409 => self::MESSAGE_409,
        self::CODE_410 => self::MESSAGE_410,
        self::CODE_411 => self::MESSAGE_411,
        self::CODE_412 => self::MESSAGE_412,
        self::CODE_413 => self::MESSAGE_413,
        self::CODE_414 => self::MESSAGE_414,
        self::CODE_415 => self::MESSAGE_415,
        self::CODE_416 => self::MESSAGE_416,
        self::CODE_417 => self::MESSAGE_417,
        self::CODE_418 => self::MESSAGE_418,
        self::CODE_420 => self::MESSAGE_420,
        self::CODE_421 => self::MESSAGE_421,
        self::CODE_422 => self::MESSAGE_422,
        self::CODE_423 => self::MESSAGE_423,
        self::CODE_424 => self::MESSAGE_424,
        self::CODE_425 => self::MESSAGE_425,
        self::CODE_426 => self::MESSAGE_426,
        self::CODE_429 => self::MESSAGE_429,
        self::CODE_431 => self::MESSAGE_431,
        self::CODE_444 => self::MESSAGE_444,
        self::CODE_450 => self::MESSAGE_450,
        self::CODE_451 => self::MESSAGE_451,
        self::CODE_497 => self::MESSAGE_497,
        self::CODE_498 => self::MESSAGE_498,
        self::CODE_499 => self::MESSAGE_499,
        self::CODE_500 => self::MESSAGE_500,
        self::CODE_501 => self::MESSAGE_501,
        self::CODE_502 => self::MESSAGE_502,
        self::CODE_503 => self::MESSAGE_503,
        self::CODE_504 => self::MESSAGE_504,
        self::CODE_506 => self::MESSAGE_506,
        self::CODE_505 => self::MESSAGE_505,
        self::CODE_507 => self::MESSAGE_507,
        self::CODE_508 => self::MESSAGE_508,
        self::CODE_509 => self::MESSAGE_509,
        self::CODE_510 => self::MESSAGE_510,
        self::CODE_511 => self::MESSAGE_511,
        self::CODE_521 => self::MESSAGE_521,
        self::CODE_523 => self::MESSAGE_523,
        self::CODE_525 => self::MESSAGE_525,
        self::CODE_599 => self::MESSAGE_599,
    ];

    // informational 1xx
    public const CODE_100 = 100;
    public const MESSAGE_100 = 'Continue';
    public const CODE_101 = 101;
    public const MESSAGE_101 = 'Switching Protocols';
    public const CODE_102 = 102;
    public const MESSAGE_102 = 'Processing';
    public const CODE_103 = 103;
    public const MESSAGE_103 = 'Early Hints';

    // success 2xx
    public const CODE_200 = 200;
    public const MESSAGE_200 = 'OK';
    public const CODE_201 = 201;
    public const MESSAGE_201 = 'Created';
    public const CODE_202 = 202;
    public const MESSAGE_202 = 'Accepted';
    public const CODE_203 = 203;
    public const MESSAGE_203 = 'Non-Authoritative Information';
    public const CODE_204 = 204;
    public const MESSAGE_204 = 'No Content';
    public const CODE_205 = 205;
    public const MESSAGE_205 = 'Reset Content';
    public const CODE_206 = 206;
    public const MESSAGE_206 = 'Partial Content';
    public const CODE_207 = 207;
    public const MESSAGE_207 = 'Multi-Status';
    public const CODE_208 = 208;
    public const MESSAGE_208 = 'Already Reported';
    public const CODE_226 = 226;
    public const MESSAGE_226 = 'IM Used';

    // redirection 3xx
    public const CODE_300 = 300;
    public const MESSAGE_300 = 'Multiple Choices';
    public const CODE_301 = 301;
    public const MESSAGE_301 = 'Moved Permanently';
    public const CODE_302 = 302;
    public const MESSAGE_302 = 'Found';
    public const CODE_303 = 303;
    public const MESSAGE_303 = 'See Other';
    public const CODE_304 = 304;
    public const MESSAGE_304 = 'Not Modified';
    public const CODE_305 = 305;
    public const MESSAGE_305 = 'Use Proxy';
    public const CODE_306 = 306;
    public const MESSAGE_306 = 'Switch Proxy';
    public const CODE_307 = 307;
    public const MESSAGE_307 = 'Temporary Redirect';
    public const CODE_308 = 308;
    public const MESSAGE_308 = 'Permanent Redirect';

    // client error 4xx
    public const CODE_400 = 400;
    public const MESSAGE_400 = 'Bad Request';
    public const CODE_401 = 401;
    public const MESSAGE_401 = 'Unauthorized';
    public const CODE_402 = 402;
    public const MESSAGE_402 = 'Payment Required';
    public const CODE_403 = 403;
    public const MESSAGE_403 = 'Forbidden';
    public const CODE_404 = 404;
    public const MESSAGE_404 = 'Not Found';
    public const CODE_405 = 405;
    public const MESSAGE_405 = 'Method Not Allowed';
    public const CODE_406 = 406;
    public const MESSAGE_406 = 'Not Acceptable';
    public const CODE_407 = 407;
    public const MESSAGE_407 = 'Proxy Authentication Required';
    public const CODE_408 = 408;
    public const MESSAGE_408 = 'Request Timeout';
    public const CODE_409 = 409;
    public const MESSAGE_409 = 'Conflict';
    public const CODE_410 = 410;
    public const MESSAGE_410 = 'Gone';
    public const CODE_411 = 411;
    public const MESSAGE_411 = 'Length Required';
    public const CODE_412 = 412;
    public const MESSAGE_412 = 'Precondition Failed';
    public const CODE_413 = 413;
    public const MESSAGE_413 = 'Request Entity Too Large';
    public const CODE_414 = 414;
    public const MESSAGE_414 = 'Request-URI Too Long';
    public const CODE_415 = 415;
    public const MESSAGE_415 = 'Unsupported Media Type';
    public const CODE_416 = 416;
    public const MESSAGE_416 = 'Requested Range Not Satisfiable';
    public const CODE_417 = 417;
    public const MESSAGE_417 = 'Expectation Failed';
    public const CODE_418 = 418;
    public const MESSAGE_418 = 'I\'m a teapot';
    public const CODE_420 = 420;
    public const MESSAGE_420 = 'Enhance Your Calm';
    public const CODE_421 = 421;
    public const MESSAGE_421 = 'Misdirect Request';
    public const CODE_422 = 422;
    public const MESSAGE_422 = 'Unprocessable Entity';
    public const CODE_423 = 423;
    public const MESSAGE_423 = 'Locked';
    public const CODE_424 = 424;
    public const MESSAGE_424 = 'Failed Dependency';
    public const CODE_425 = 425;
    public const MESSAGE_425 = 'Too Early';
    public const CODE_426 = 426;
    public const MESSAGE_426 = 'Upgrade Required';
    public const CODE_429 = 429;
    public const MESSAGE_429 = 'Too Many Requests';
    public const CODE_431 = 431;
    public const MESSAGE_431 = 'Request Header Fields Too Large';
    public const CODE_444 = 444;
    public const MESSAGE_444 = 'No Response';
    public const CODE_450 = 450;
    public const MESSAGE_450 = 'Blocked by Windows Parental Controls';
    public const CODE_451 = 451;
    public const MESSAGE_451 = 'Unavailable For Legal Reasons';
    public const CODE_497 = 497;
    public const MESSAGE_497 = 'HTTP Request Sent to HTTPS Port';
    public const CODE_498 = 498;
    public const MESSAGE_498 = 'Token expired/invalid';
    public const CODE_499 = 499;
    public const MESSAGE_499 = 'Client Closed Request';

    // server error 5xx
    public const CODE_500 = 500;
    public const MESSAGE_500 = 'Internal Server Error';
    public const CODE_501 = 501;
    public const MESSAGE_501 = 'Not Implemented';
    public const CODE_502 = 502;
    public const MESSAGE_502 = 'Bad Gateway';
    public const CODE_503 = 503;
    public const MESSAGE_503 = 'Service Unavailable';
    public const CODE_504 = 504;
    public const MESSAGE_504 = 'Gateway Timeout';
    public const CODE_506 = 506;
    public const MESSAGE_506 = 'Variant Also Negotiates';
    public const CODE_505 = 505;
    public const MESSAGE_505 = 'HTTP Version Not Supported';
    public const CODE_507 = 507;
    public const MESSAGE_507 = 'Insufficient Storage';
    public const CODE_508 = 508;
    public const MESSAGE_508 = 'Loop Detected';
    public const CODE_509 = 509;
    public const MESSAGE_509 = 'Bandwidth Limit Exceeded';
    public const CODE_510 = 510;
    public const MESSAGE_510 = 'Not Extended';
    public const CODE_511 = 511;
    public const MESSAGE_511 = 'Network Authentication Required';
    public const CODE_521 = 521;
    public const MESSAGE_521 = 'Web Server Is Down';
    public const CODE_523 = 523;
    public const MESSAGE_523 = 'Origin Is Unreachable';
    public const CODE_525 = 525;
    public const MESSAGE_525 = 'SSL Handshake Failed';
    public const CODE_599 = 599;
    public const MESSAGE_599 = 'Network Connect Timeout Error';
}