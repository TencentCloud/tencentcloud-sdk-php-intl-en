<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cache key configuration (Ignore Query String configuration)
 *
 * @method string getFullUrlCache() Obtain Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
 * @method void setFullUrlCache(string $FullUrlCache) Set Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
 * @method string getIgnoreCase() Obtain Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreCase(string $IgnoreCase) Set Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method QueryStringKey getQueryString() Obtain Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQueryString(QueryStringKey $QueryString) Set Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method CookieKey getCookie() Obtain Cookie contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCookie(CookieKey $Cookie) Set Cookie contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method HeaderKey getHeader() Obtain Request header contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHeader(HeaderKey $Header) Set Request header contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method CacheTagKey getCacheTag() Obtain Custom string contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCacheTag(CacheTagKey $CacheTag) Set Custom string contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SchemeKey getScheme() Obtain Request protocol contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setScheme(SchemeKey $Scheme) Set Request protocol contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getKeyRules() Obtain Path-specific cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setKeyRules(array $KeyRules) Set Path-specific cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
     */
    public $FullUrlCache;

    /**
     * @var string Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreCase;

    /**
     * @var QueryStringKey Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $QueryString;

    /**
     * @var CookieKey Cookie contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cookie;

    /**
     * @var HeaderKey Request header contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Header;

    /**
     * @var CacheTagKey Custom string contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CacheTag;

    /**
     * @var SchemeKey Request protocol contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Scheme;

    /**
     * @var array Path-specific cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $KeyRules;

    /**
     * @param string $FullUrlCache Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
     * @param string $IgnoreCase Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param QueryStringKey $QueryString Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param CookieKey $Cookie Cookie contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param HeaderKey $Header Request header contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param CacheTagKey $CacheTag Custom string contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SchemeKey $Scheme Request protocol contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $KeyRules Path-specific cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("FullUrlCache",$param) and $param["FullUrlCache"] !== null) {
            $this->FullUrlCache = $param["FullUrlCache"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new QueryStringKey();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new CookieKey();
            $this->Cookie->deserialize($param["Cookie"]);
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new HeaderKey();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("CacheTag",$param) and $param["CacheTag"] !== null) {
            $this->CacheTag = new CacheTagKey();
            $this->CacheTag->deserialize($param["CacheTag"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = new SchemeKey();
            $this->Scheme->deserialize($param["Scheme"]);
        }

        if (array_key_exists("KeyRules",$param) and $param["KeyRules"] !== null) {
            $this->KeyRules = [];
            foreach ($param["KeyRules"] as $key => $value){
                $obj = new KeyRule();
                $obj->deserialize($value);
                array_push($this->KeyRules, $obj);
            }
        }
    }
}
