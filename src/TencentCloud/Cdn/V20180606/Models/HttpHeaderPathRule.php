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
 * HTTP header setting rules. Up to 100 entries can be set.
 *
 * @method string getHeaderMode() Obtain HTTP header setting methods
`add`: add header. If a header already exists, then there will be a duplicated header.
`del`: delete header.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHeaderMode(string $HeaderMode) Set HTTP header setting methods
`add`: add header. If a header already exists, then there will be a duplicated header.
`del`: delete header.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getHeaderName() Obtain HTTP header name. Up to 100 characters can be set.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeaderName(string $HeaderName) Set HTTP header name. Up to 100 characters can be set.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHeaderValue() Obtain HTTP header value. Up to 1000 characters can be set.
Not required when Mode is del
Required when Mode is add/set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeaderValue(string $HeaderValue) Set HTTP header value. Up to 1000 characters can be set.
Not required when Mode is del
Required when Mode is add/set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRuleType() Obtain Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRulePaths() Obtain Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRulePaths(array $RulePaths) Set Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string HTTP header setting methods
`add`: add header. If a header already exists, then there will be a duplicated header.
`del`: delete header.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HeaderMode;

    /**
     * @var string HTTP header name. Up to 100 characters can be set.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeaderName;

    /**
     * @var string HTTP header value. Up to 1000 characters can be set.
Not required when Mode is del
Required when Mode is add/set
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeaderValue;

    /**
     * @var string Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @var array Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode HTTP header setting methods
`add`: add header. If a header already exists, then there will be a duplicated header.
`del`: delete header.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $HeaderName HTTP header name. Up to 100 characters can be set.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HeaderValue HTTP header value. Up to 1000 characters can be set.
Not required when Mode is del
Required when Mode is add/set
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RuleType Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RulePaths Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("HeaderMode",$param) and $param["HeaderMode"] !== null) {
            $this->HeaderMode = $param["HeaderMode"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
