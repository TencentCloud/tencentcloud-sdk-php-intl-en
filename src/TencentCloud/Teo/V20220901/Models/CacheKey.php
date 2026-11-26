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
 * Cache key configuration.
 *
 * @method string getFullUrlCache() Obtain Whether to enable full path cache. Valid values:
<li>on: Turn on full path cache (that is, disable parameter ignoring);</li>
<li>off: Disable full path cache (parameter ignorable enabled).</li>
 * @method void setFullUrlCache(string $FullUrlCache) Set Whether to enable full path cache. Valid values:
<li>on: Turn on full path cache (that is, disable parameter ignoring);</li>
<li>off: Disable full path cache (parameter ignorable enabled).</li>
 * @method string getIgnoreCase() Obtain Whether to ignore case-insensitive cache. Valid values:
<li>on: Ignore;</li>
<li>off: Do not ignore.</li>
 * @method void setIgnoreCase(string $IgnoreCase) Set Whether to ignore case-insensitive cache. Valid values:
<li>on: Ignore;</li>
<li>off: Do not ignore.</li>
 * @method QueryString getQueryString() Obtain CacheKey contains request parameters.
 * @method void setQueryString(QueryString $QueryString) Set CacheKey contains request parameters.
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string Whether to enable full path cache. Valid values:
<li>on: Turn on full path cache (that is, disable parameter ignoring);</li>
<li>off: Disable full path cache (parameter ignorable enabled).</li>
     */
    public $FullUrlCache;

    /**
     * @var string Whether to ignore case-insensitive cache. Valid values:
<li>on: Ignore;</li>
<li>off: Do not ignore.</li>
     */
    public $IgnoreCase;

    /**
     * @var QueryString CacheKey contains request parameters.
     */
    public $QueryString;

    /**
     * @param string $FullUrlCache Whether to enable full path cache. Valid values:
<li>on: Turn on full path cache (that is, disable parameter ignoring);</li>
<li>off: Disable full path cache (parameter ignorable enabled).</li>
     * @param string $IgnoreCase Whether to ignore case-insensitive cache. Valid values:
<li>on: Ignore;</li>
<li>off: Do not ignore.</li>
     * @param QueryString $QueryString CacheKey contains request parameters.
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
            $this->QueryString = new QueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
