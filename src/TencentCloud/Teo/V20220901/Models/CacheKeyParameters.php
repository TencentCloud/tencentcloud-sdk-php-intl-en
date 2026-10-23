<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom Cache Key config.
 *
 * @method string getFullURLCache() Obtain Switch for retaining the complete query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured. this field and querystring.switch must be set simultaneously, but cannot both be on.
 * @method void setFullURLCache(string $FullURLCache) Set Switch for retaining the complete query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured. this field and querystring.switch must be set simultaneously, but cannot both be on.
 * @method CacheKeyQueryString getQueryString() Obtain Query string retention configuration parameter. This field and FullURLCache must be set both at the same time, but cannot both be on.
 * @method void setQueryString(CacheKeyQueryString $QueryString) Set Query string retention configuration parameter. This field and FullURLCache must be set both at the same time, but cannot both be on.
 * @method string getIgnoreCase() Obtain Switch for ignoring case. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
 * @method void setIgnoreCase(string $IgnoreCase) Set Switch for ignoring case. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
 * @method CacheKeyHeader getHeader() Obtain HTTP request header configuration parameter. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
 * @method void setHeader(CacheKeyHeader $Header) Set HTTP request header configuration parameter. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
 * @method string getScheme() Obtain Request protocol switch. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
 * @method void setScheme(string $Scheme) Set Request protocol switch. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
 * @method CacheKeyCookie getCookie() Obtain Cookie configuration parameters. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
 * @method void setCookie(CacheKeyCookie $Cookie) Set Cookie configuration parameters. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
 */
class CacheKeyParameters extends AbstractModel
{
    /**
     * @var string Switch for retaining the complete query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured. this field and querystring.switch must be set simultaneously, but cannot both be on.
     */
    public $FullURLCache;

    /**
     * @var CacheKeyQueryString Query string retention configuration parameter. This field and FullURLCache must be set both at the same time, but cannot both be on.
     */
    public $QueryString;

    /**
     * @var string Switch for ignoring case. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
     */
    public $IgnoreCase;

    /**
     * @var CacheKeyHeader HTTP request header configuration parameter. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
     */
    public $Header;

    /**
     * @var string Request protocol switch. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
     */
    public $Scheme;

    /**
     * @var CacheKeyCookie Cookie configuration parameters. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
     */
    public $Cookie;

    /**
     * @param string $FullURLCache Switch for retaining the complete query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured. this field and querystring.switch must be set simultaneously, but cannot both be on.
     * @param CacheKeyQueryString $QueryString Query string retention configuration parameter. This field and FullURLCache must be set both at the same time, but cannot both be on.
     * @param string $IgnoreCase Switch for ignoring case. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
     * @param CacheKeyHeader $Header HTTP request header configuration parameter. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
     * @param string $Scheme Request protocol switch. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li> note: at least one of fullurlcache, ignorecase, header, scheme, or cookie must be configured.
     * @param CacheKeyCookie $Cookie Cookie configuration parameters. Set at least one configuration among FullURLCache, IgnoreCase, Header, Scheme, and Cookie.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FullURLCache",$param) and $param["FullURLCache"] !== null) {
            $this->FullURLCache = $param["FullURLCache"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new CacheKeyQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new CacheKeyHeader();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new CacheKeyCookie();
            $this->Cookie->deserialize($param["Cookie"]);
        }
    }
}
