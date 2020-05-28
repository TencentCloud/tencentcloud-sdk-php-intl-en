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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path-specific HTTP header setting rule.
 *
 * @method string getHeaderMode() Obtain HTTP header setting method. Valid values: add (add header), set (set header), del (delete header).
Request header currently does not support `set`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeaderMode(string $HeaderMode) Set HTTP header setting method. Valid values: add (add header), set (set header), del (delete header).
Request header currently does not support `set`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHeaderName() Obtain HTTP header name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeaderName(string $HeaderName) Set HTTP header name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHeaderValue() Obtain HTTP header value, which is optional when it is `del`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeaderValue(string $HeaderValue) Set HTTP header value, which is optional when it is `del`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRuleType() Obtain Type of effective URL path rule. Valid values: all (all paths), file (file extension), directory (directory), path (absolute path).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Type of effective URL path rule. Valid values: all (all paths), file (file extension), directory (directory), path (absolute path).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRulePaths() Obtain URL path or file type list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRulePaths(array $RulePaths) Set URL path or file type list
Note: this field may return null, indicating that no valid values can be obtained.
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string HTTP header setting method. Valid values: add (add header), set (set header), del (delete header).
Request header currently does not support `set`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeaderMode;

    /**
     * @var string HTTP header name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeaderName;

    /**
     * @var string HTTP header value, which is optional when it is `del`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeaderValue;

    /**
     * @var string Type of effective URL path rule. Valid values: all (all paths), file (file extension), directory (directory), path (absolute path).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @var array URL path or file type list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode HTTP header setting method. Valid values: add (add header), set (set header), del (delete header).
Request header currently does not support `set`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HeaderName HTTP header name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HeaderValue HTTP header value, which is optional when it is `del`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RuleType Type of effective URL path rule. Valid values: all (all paths), file (file extension), directory (directory), path (absolute path).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RulePaths URL path or file type list
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
