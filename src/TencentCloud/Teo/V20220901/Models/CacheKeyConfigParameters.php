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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The cache key configuration.
 *
 * @method string getFullURLCache() Obtain Whether to enable full-path cache. values:.
<Li>`On`: enable full-path cache (i.e., disable ignore query string).</li>.
<Li>`Off`: disable full-path cache (i.e., enable ignore query string).</li>.
 * @method void setFullURLCache(string $FullURLCache) Set Whether to enable full-path cache. values:.
<Li>`On`: enable full-path cache (i.e., disable ignore query string).</li>.
<Li>`Off`: disable full-path cache (i.e., enable ignore query string).</li>.
 * @method string getIgnoreCase() Obtain Whether to ignore case in the cache key. values:.
<Li>`On`: ignore;</li>.
<Li>`Off`: not ignore.</li>.
 * @method void setIgnoreCase(string $IgnoreCase) Set Whether to ignore case in the cache key. values:.
<Li>`On`: ignore;</li>.
<Li>`Off`: not ignore.</li>.
 * @method CacheKeyQueryString getQueryString() Obtain Query string retention configuration parameter. this field and fullurlcache must be set simultaneously, but cannot both be `on`.
 * @method void setQueryString(CacheKeyQueryString $QueryString) Set Query string retention configuration parameter. this field and fullurlcache must be set simultaneously, but cannot both be `on`.
 */
class CacheKeyConfigParameters extends AbstractModel
{
    /**
     * @var string Whether to enable full-path cache. values:.
<Li>`On`: enable full-path cache (i.e., disable ignore query string).</li>.
<Li>`Off`: disable full-path cache (i.e., enable ignore query string).</li>.
     */
    public $FullURLCache;

    /**
     * @var string Whether to ignore case in the cache key. values:.
<Li>`On`: ignore;</li>.
<Li>`Off`: not ignore.</li>.
     */
    public $IgnoreCase;

    /**
     * @var CacheKeyQueryString Query string retention configuration parameter. this field and fullurlcache must be set simultaneously, but cannot both be `on`.
     */
    public $QueryString;

    /**
     * @param string $FullURLCache Whether to enable full-path cache. values:.
<Li>`On`: enable full-path cache (i.e., disable ignore query string).</li>.
<Li>`Off`: disable full-path cache (i.e., enable ignore query string).</li>.
     * @param string $IgnoreCase Whether to ignore case in the cache key. values:.
<Li>`On`: ignore;</li>.
<Li>`Off`: not ignore.</li>.
     * @param CacheKeyQueryString $QueryString Query string retention configuration parameter. this field and fullurlcache must be set simultaneously, but cannot both be `on`.
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

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new CacheKeyQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
