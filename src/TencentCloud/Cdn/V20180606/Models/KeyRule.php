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
 * Path-based cache key configuration
 *
 * @method array getRulePaths() Obtain Content for each CacheType:
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a backslash (/).
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setRulePaths(array $RulePaths) Set Content for each CacheType:
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a backslash (/).
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getRuleType() Obtain Rule types:
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: home page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleType(string $RuleType) Set Rule types:
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: home page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getFullUrlCache() Obtain Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String).
`off`: Disable full-path cache (i.e., enable Ignore Query String).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFullUrlCache(string $FullUrlCache) Set Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String).
`off`: Disable full-path cache (i.e., enable Ignore Query String).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIgnoreCase() Obtain Whether caches are case insensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreCase(string $IgnoreCase) Set Whether caches are case insensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RuleQueryString getQueryString() Obtain Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQueryString(RuleQueryString $QueryString) Set Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRuleTag() Obtain Path cache key tag, the value "user" is passed.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleTag(string $RuleTag) Set Path cache key tag, the value "user" is passed.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class KeyRule extends AbstractModel
{
    /**
     * @var array Content for each CacheType:
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a backslash (/).
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $RulePaths;

    /**
     * @var string Rule types:
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: home page
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleType;

    /**
     * @var string Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String).
`off`: Disable full-path cache (i.e., enable Ignore Query String).
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FullUrlCache;

    /**
     * @var string Whether caches are case insensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreCase;

    /**
     * @var RuleQueryString Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $QueryString;

    /**
     * @var string Path cache key tag, the value "user" is passed.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleTag;

    /**
     * @param array $RulePaths Content for each CacheType:
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a backslash (/).
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $RuleType Rule types:
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
`index`: home page
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $FullUrlCache Whether to enable full-path cache
`on`: Enable full-path cache (i.e., disable Ignore Query String).
`off`: Disable full-path cache (i.e., enable Ignore Query String).
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IgnoreCase Whether caches are case insensitive
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RuleQueryString $QueryString Request parameter contained in `CacheKey`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RuleTag Path cache key tag, the value "user" is passed.
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
        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("FullUrlCache",$param) and $param["FullUrlCache"] !== null) {
            $this->FullUrlCache = $param["FullUrlCache"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new RuleQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            $this->RuleTag = $param["RuleTag"];
        }
    }
}
