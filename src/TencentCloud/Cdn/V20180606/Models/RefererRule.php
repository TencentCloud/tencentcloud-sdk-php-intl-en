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
 * @method string getRuleType() Obtain Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
 * @method void setRuleType(string $RuleType) Set Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
 * @method array getRulePaths() Obtain Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
 * @method void setRulePaths(array $RulePaths) Set Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
 * @method string getRefererType() Obtain Referer configuration types
whitelist: whitelist
blacklist: blacklist
 * @method void setRefererType(string $RefererType) Set Referer configuration types
whitelist: whitelist
blacklist: blacklist
 * @method array getReferers() Obtain Referer content list
 * @method void setReferers(array $Referers) Set Referer content list
 * @method boolean getAllowEmpty() Obtain Whether to allow empty referer
true: allow empty referer
false: do not allow empty referer
 * @method void setAllowEmpty(boolean $AllowEmpty) Set Whether to allow empty referer
true: allow empty referer
false: do not allow empty referer
 */

/**
 *Referer blacklist/whitelist configuration rules, which is effective for specific resources.
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
     */
    public $RuleType;

    /**
     * @var array Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
     */
    public $RulePaths;

    /**
     * @var string Referer configuration types
whitelist: whitelist
blacklist: blacklist
     */
    public $RefererType;

    /**
     * @var array Referer content list
     */
    public $Referers;

    /**
     * @var boolean Whether to allow empty referer
true: allow empty referer
false: do not allow empty referer
     */
    public $AllowEmpty;
    /**
     * @param string $RuleType Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
     * @param array $RulePaths Content for each RuleType:
For `all`, enter an asterisk (*).
For `file`, enter the suffix, such as jpg, txt.
For `directory`, enter the path, such as /xxx/test/.
For `path`, enter the corresponding absolute path, such as /xxx/test.html.
     * @param string $RefererType Referer configuration types
whitelist: whitelist
blacklist: blacklist
     * @param array $Referers Referer content list
     * @param boolean $AllowEmpty Whether to allow empty referer
true: allow empty referer
false: do not allow empty referer
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("RefererType",$param) and $param["RefererType"] !== null) {
            $this->RefererType = $param["RefererType"];
        }

        if (array_key_exists("Referers",$param) and $param["Referers"] !== null) {
            $this->Referers = $param["Referers"];
        }

        if (array_key_exists("AllowEmpty",$param) and $param["AllowEmpty"] !== null) {
            $this->AllowEmpty = $param["AllowEmpty"];
        }
    }
}
