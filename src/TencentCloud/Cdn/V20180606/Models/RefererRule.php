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
 * Referer blacklist/whitelist configuration rules, which is effective for specific resources.
 *
 * @method string getRuleType() Obtain Rule types:
`all`: Apply to all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
 * @method void setRuleType(string $RuleType) Set Rule types:
`all`: Apply to all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
 * @method array getRulePaths() Obtain Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
 * @method void setRulePaths(array $RulePaths) Set Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
 * @method string getRefererType() Obtain Referer configuration types
`whitelist`: Allowlist
`blacklist`: Blocklist
 * @method void setRefererType(string $RefererType) Set Referer configuration types
`whitelist`: Allowlist
`blacklist`: Blocklist
 * @method array getReferers() Obtain Referer content list
 * @method void setReferers(array $Referers) Set Referer content list
 * @method boolean getAllowEmpty() Obtain Whether to allow empty referer
`true`: Allow empty referer when `RefererType = whitelist`.
`false`: Reject empty refer when `RefererType = blacklist`.
 * @method void setAllowEmpty(boolean $AllowEmpty) Set Whether to allow empty referer
`true`: Allow empty referer when `RefererType = whitelist`.
`false`: Reject empty refer when `RefererType = blacklist`.
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string Rule types:
`all`: Apply to all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
     */
    public $RuleType;

    /**
     * @var array Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
     */
    public $RulePaths;

    /**
     * @var string Referer configuration types
`whitelist`: Allowlist
`blacklist`: Blocklist
     */
    public $RefererType;

    /**
     * @var array Referer content list
     */
    public $Referers;

    /**
     * @var boolean Whether to allow empty referer
`true`: Allow empty referer when `RefererType = whitelist`.
`false`: Reject empty refer when `RefererType = blacklist`.
     */
    public $AllowEmpty;

    /**
     * @param string $RuleType Rule types:
`all`: Apply to all files.
`file`: Apply to files with the specified suffixes.
`directory`: Apply to specified paths.
`path`: Apply to specified absolute paths.
     * @param array $RulePaths Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
     * @param string $RefererType Referer configuration types
`whitelist`: Allowlist
`blacklist`: Blocklist
     * @param array $Referers Referer content list
     * @param boolean $AllowEmpty Whether to allow empty referer
`true`: Allow empty referer when `RefererType = whitelist`.
`false`: Reject empty refer when `RefererType = blacklist`.
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
