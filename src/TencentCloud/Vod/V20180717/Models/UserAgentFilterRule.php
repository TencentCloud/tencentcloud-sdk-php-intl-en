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
 * UserAgent blacklist/whitelist rule configuration
 *
 * @method string getFilterType() Obtain UserAgent blacklist/whitelist type: <li>whitelist:whitelist;</li> <li>blacklist:blacklist.</li>
 * @method void setFilterType(string $FilterType) Set UserAgent blacklist/whitelist type: <li>whitelist:whitelist;</li> <li>blacklist:blacklist.</li>
 * @method array getUserAgents() Obtain UserAgent list.
 * @method void setUserAgents(array $UserAgents) Set UserAgent list.
 * @method string getRuleType() Obtain Rule type: <li>all: All files take effect;</li> <li>file: The specified file suffix takes effect;</li> <li>directory: The specified path takes effect;</li> <li>path: The specified absolute path takes effect.</li>
 * @method void setRuleType(string $RuleType) Set Rule type: <li>all: All files take effect;</li> <li>file: The specified file suffix takes effect;</li> <li>directory: The specified path takes effect;</li> <li>path: The specified absolute path takes effect.</li>
 * @method array getRulePaths() Obtain Matching content under the corresponding type of RuleType:<li>For `all`, enter an asterisk (*).</li> <li>For `file`, enter the suffix, such as jpg, txt.</li> <li>For `directory`, enter the path, such as /xxx/test/.</li> <li>For `path`, enter the corresponding absolute path, such as /xxx/test.html.</li>
 * @method void setRulePaths(array $RulePaths) Set Matching content under the corresponding type of RuleType:<li>For `all`, enter an asterisk (*).</li> <li>For `file`, enter the suffix, such as jpg, txt.</li> <li>For `directory`, enter the path, such as /xxx/test/.</li> <li>For `path`, enter the corresponding absolute path, such as /xxx/test.html.</li>
 */
class UserAgentFilterRule extends AbstractModel
{
    /**
     * @var string UserAgent blacklist/whitelist type: <li>whitelist:whitelist;</li> <li>blacklist:blacklist.</li>
     */
    public $FilterType;

    /**
     * @var array UserAgent list.
     */
    public $UserAgents;

    /**
     * @var string Rule type: <li>all: All files take effect;</li> <li>file: The specified file suffix takes effect;</li> <li>directory: The specified path takes effect;</li> <li>path: The specified absolute path takes effect.</li>
     */
    public $RuleType;

    /**
     * @var array Matching content under the corresponding type of RuleType:<li>For `all`, enter an asterisk (*).</li> <li>For `file`, enter the suffix, such as jpg, txt.</li> <li>For `directory`, enter the path, such as /xxx/test/.</li> <li>For `path`, enter the corresponding absolute path, such as /xxx/test.html.</li>
     */
    public $RulePaths;

    /**
     * @param string $FilterType UserAgent blacklist/whitelist type: <li>whitelist:whitelist;</li> <li>blacklist:blacklist.</li>
     * @param array $UserAgents UserAgent list.
     * @param string $RuleType Rule type: <li>all: All files take effect;</li> <li>file: The specified file suffix takes effect;</li> <li>directory: The specified path takes effect;</li> <li>path: The specified absolute path takes effect.</li>
     * @param array $RulePaths Matching content under the corresponding type of RuleType:<li>For `all`, enter an asterisk (*).</li> <li>For `file`, enter the suffix, such as jpg, txt.</li> <li>For `directory`, enter the path, such as /xxx/test/.</li> <li>For `path`, enter the corresponding absolute path, such as /xxx/test.html.</li>
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("UserAgents",$param) and $param["UserAgents"] !== null) {
            $this->UserAgents = $param["UserAgents"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
