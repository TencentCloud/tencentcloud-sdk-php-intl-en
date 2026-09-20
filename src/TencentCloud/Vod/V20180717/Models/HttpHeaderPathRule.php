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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Http header setting rules, with a maximum of 100.
 *
 * @method string getHeaderMode() Obtain http header setting method:
<li>set: Set. Change the value of the specified header parameter to the configured value; if the configured header does not exist, it will be added; if there are multiple duplicate header parameters, all will be updated and merged into one header;</li>
<li>del: delete. Delete specified HTTP header parameters;</li>
<li>add: Add. Add the specified header parameter. Duplicate addition is allowed by default, meaning the same header can be repeatedly added (Note: Repeated addition may affect browser response. Use the set operation preferentially).</li>
 * @method void setHeaderMode(string $HeaderMode) Set http header setting method:
<li>set: Set. Change the value of the specified header parameter to the configured value; if the configured header does not exist, it will be added; if there are multiple duplicate header parameters, all will be updated and merged into one header;</li>
<li>del: delete. Delete specified HTTP header parameters;</li>
<li>add: Add. Add the specified header parameter. Duplicate addition is allowed by default, meaning the same header can be repeatedly added (Note: Repeated addition may affect browser response. Use the set operation preferentially).</li>
 * @method string getHeaderName() Obtain http header name, up to 100 characters.
 * @method void setHeaderName(string $HeaderName) Set http header name, up to 100 characters.
 * @method string getHeaderValue() Obtain http header value, up to 1000 characters;
Optional when `Mode` is `del`.
Required if Mode is add/set.
 * @method void setHeaderValue(string $HeaderValue) Set http header value, up to 1000 characters;
Optional when `Mode` is `del`.
Required if Mode is add/set.
 * @method string getRuleType() Obtain Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: specify the path to take effect;</li>
<li>path: The absolute path takes effect.</li>
 * @method void setRuleType(string $RuleType) Set Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: specify the path to take effect;</li>
<li>path: The absolute path takes effect.</li>
 * @method array getRulePaths() Obtain Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
 * @method void setRulePaths(array $RulePaths) Set Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string http header setting method:
<li>set: Set. Change the value of the specified header parameter to the configured value; if the configured header does not exist, it will be added; if there are multiple duplicate header parameters, all will be updated and merged into one header;</li>
<li>del: delete. Delete specified HTTP header parameters;</li>
<li>add: Add. Add the specified header parameter. Duplicate addition is allowed by default, meaning the same header can be repeatedly added (Note: Repeated addition may affect browser response. Use the set operation preferentially).</li>
     */
    public $HeaderMode;

    /**
     * @var string http header name, up to 100 characters.
     */
    public $HeaderName;

    /**
     * @var string http header value, up to 1000 characters;
Optional when `Mode` is `del`.
Required if Mode is add/set.
     */
    public $HeaderValue;

    /**
     * @var string Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: specify the path to take effect;</li>
<li>path: The absolute path takes effect.</li>
     */
    public $RuleType;

    /**
     * @var array Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode http header setting method:
<li>set: Set. Change the value of the specified header parameter to the configured value; if the configured header does not exist, it will be added; if there are multiple duplicate header parameters, all will be updated and merged into one header;</li>
<li>del: delete. Delete specified HTTP header parameters;</li>
<li>add: Add. Add the specified header parameter. Duplicate addition is allowed by default, meaning the same header can be repeatedly added (Note: Repeated addition may affect browser response. Use the set operation preferentially).</li>
     * @param string $HeaderName http header name, up to 100 characters.
     * @param string $HeaderValue http header value, up to 1000 characters;
Optional when `Mode` is `del`.
Required if Mode is add/set.
     * @param string $RuleType Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: specify the path to take effect;</li>
<li>path: The absolute path takes effect.</li>
     * @param array $RulePaths Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
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
