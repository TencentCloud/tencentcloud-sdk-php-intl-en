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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP header setting rules. Up to 100 entries can be set.
 *
 * @method string getHeaderMode() Obtain http header setting method: <li>set: setting. Change the value of the specified header parameter to the set value; if the set header does not exist, the header will be added; if there are multiple duplicate header parameters, all will be changed and merged into one header. ;</li> <li>del: delete. Delete the specified header parameter;</li> <li>add: add. Add the specified header parameters. By default, repeated addition is allowed, that is, the same header is added repeatedly (note: repeated addition may affect the browser response, please use the set operation first). </li>
 * @method void setHeaderMode(string $HeaderMode) Set http header setting method: <li>set: setting. Change the value of the specified header parameter to the set value; if the set header does not exist, the header will be added; if there are multiple duplicate header parameters, all will be changed and merged into one header. ;</li> <li>del: delete. Delete the specified header parameter;</li> <li>add: add. Add the specified header parameters. By default, repeated addition is allowed, that is, the same header is added repeatedly (note: repeated addition may affect the browser response, please use the set operation first). </li>
 * @method string getHeaderName() Obtain HTTP header name. Up to 100 characters can be set.
 * @method void setHeaderName(string $HeaderName) Set HTTP header name. Up to 100 characters can be set.
 * @method string getHeaderValue() Obtain http header value, up to 1000 characters can be set; optional when Mode is del; required when Mode is add/set.
 * @method void setHeaderValue(string $HeaderValue) Set http header value, up to 1000 characters can be set; optional when Mode is del; required when Mode is add/set.
 * @method string getRuleType() Obtain Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method void setRuleType(string $RuleType) Set Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method array getRulePaths() Obtain Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
 * @method void setRulePaths(array $RulePaths) Set Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string http header setting method: <li>set: setting. Change the value of the specified header parameter to the set value; if the set header does not exist, the header will be added; if there are multiple duplicate header parameters, all will be changed and merged into one header. ;</li> <li>del: delete. Delete the specified header parameter;</li> <li>add: add. Add the specified header parameters. By default, repeated addition is allowed, that is, the same header is added repeatedly (note: repeated addition may affect the browser response, please use the set operation first). </li>
     */
    public $HeaderMode;

    /**
     * @var string HTTP header name. Up to 100 characters can be set.
     */
    public $HeaderName;

    /**
     * @var string http header value, up to 1000 characters can be set; optional when Mode is del; required when Mode is add/set.
     */
    public $HeaderValue;

    /**
     * @var string Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     */
    public $RuleType;

    /**
     * @var array Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode http header setting method: <li>set: setting. Change the value of the specified header parameter to the set value; if the set header does not exist, the header will be added; if there are multiple duplicate header parameters, all will be changed and merged into one header. ;</li> <li>del: delete. Delete the specified header parameter;</li> <li>add: add. Add the specified header parameters. By default, repeated addition is allowed, that is, the same header is added repeatedly (note: repeated addition may affect the browser response, please use the set operation first). </li>
     * @param string $HeaderName HTTP header name. Up to 100 characters can be set.
     * @param string $HeaderValue http header value, up to 1000 characters can be set; optional when Mode is del; required when Mode is add/set.
     * @param string $RuleType Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     * @param array $RulePaths Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
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
