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
 * The cache key configuration.
 *
 * @method string getFullUrlCache() Obtain Whether to enable full path cache. valid values:.
<li>`on`: enable full-path cache (i.e., disable ignore query string).</li>.
<li>`off`: disable full-path cache (i.e., enable parameter ignore).</li>.
 * @method void setFullUrlCache(string $FullUrlCache) Set Whether to enable full path cache. valid values:.
<li>`on`: enable full-path cache (i.e., disable ignore query string).</li>.
<li>`off`: disable full-path cache (i.e., enable parameter ignore).</li>.
 * @method string getIgnoreCase() Obtain Specifies whether to use case-insensitive cache. valid values:.
<li>`on`: ignore</li>.
<li>`off`: not ignore</li>.
 * @method void setIgnoreCase(string $IgnoreCase) Set Specifies whether to use case-insensitive cache. valid values:.
<li>`on`: ignore</li>.
<li>`off`: not ignore</li>.
 * @method QueryString getQueryString() Obtain Request parameter contained in `CacheKey`. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setQueryString(QueryString $QueryString) Set Request parameter contained in `CacheKey`. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string Whether to enable full path cache. valid values:.
<li>`on`: enable full-path cache (i.e., disable ignore query string).</li>.
<li>`off`: disable full-path cache (i.e., enable parameter ignore).</li>.
     */
    public $FullUrlCache;

    /**
     * @var string Specifies whether to use case-insensitive cache. valid values:.
<li>`on`: ignore</li>.
<li>`off`: not ignore</li>.
     */
    public $IgnoreCase;

    /**
     * @var QueryString Request parameter contained in `CacheKey`. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $QueryString;

    /**
     * @param string $FullUrlCache Whether to enable full path cache. valid values:.
<li>`on`: enable full-path cache (i.e., disable ignore query string).</li>.
<li>`off`: disable full-path cache (i.e., enable parameter ignore).</li>.
     * @param string $IgnoreCase Specifies whether to use case-insensitive cache. valid values:.
<li>`on`: ignore</li>.
<li>`off`: not ignore</li>.
     * @param QueryString $QueryString Request parameter contained in `CacheKey`. 
Note: This field may return `null`, indicating that no valid values can be obtained.
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
