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
 * Path-based cache rule configuration
The cache expiration time for all files is 30 days by default. 
Static acceleration type domain names .php, .jsp, .asp, and .aspx are not cached by default.
 *
 * @method array getRulePaths() Obtain Content for each CacheType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
For `index`, enter a backslash (/).
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setRulePaths(array $RulePaths) Set Content for each CacheType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
For `index`, enter a backslash (/).
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getRuleType() Obtain Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
`index`: home page
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setRuleType(string $RuleType) Set Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
`index`: home page
Note: this field may return null, indicating that no valid value is obtained.
 * @method RuleCacheConfig getCacheConfig() Obtain Cache configuration
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setCacheConfig(RuleCacheConfig $CacheConfig) Set Cache configuration
Note: this field may return null, indicating that no valid value is obtained.
 */
class RuleCache extends AbstractModel
{
    /**
     * @var array Content for each CacheType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
For `index`, enter a backslash (/).
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $RulePaths;

    /**
     * @var string Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
`index`: home page
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $RuleType;

    /**
     * @var RuleCacheConfig Cache configuration
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $CacheConfig;

    /**
     * @param array $RulePaths Content for each CacheType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
For `index`, enter a backslash (/).
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $RuleType Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
`index`: home page
Note: this field may return null, indicating that no valid value is obtained.
     * @param RuleCacheConfig $CacheConfig Cache configuration
Note: this field may return null, indicating that no valid value is obtained.
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

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new RuleCacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }
    }
}
