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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cache key configuration
 *
 * @method string getFullUrlCache() Obtain Specifies whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFullUrlCache(string $FullUrlCache) Set Specifies whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIgnoreCase() Obtain Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreCase(string $IgnoreCase) Set Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method QueryString getQueryString() Obtain Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQueryString(QueryString $QueryString) Set Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string Specifies whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FullUrlCache;

    /**
     * @var string Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreCase;

    /**
     * @var QueryString Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $QueryString;

    /**
     * @param string $FullUrlCache Specifies whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String)
`off`: Disable full-path cache (i.e., enable Ignore Query String)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IgnoreCase Specifies whether the cache key is case sensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param QueryString $QueryString Request parameter contained in `CacheKey`
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
            $this->QueryString = new QueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
