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
 * Referer blacklist/whitelist configuration rules, which is effective for specific resources.
 *
 * @method string getRuleType() Obtain Rule types: <li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
 * @method void setRuleType(string $RuleType) Set Rule types: <li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
 * @method array getRulePaths() Obtain Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
 * @method void setRulePaths(array $RulePaths) Set Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
 * @method string getRefererType() Obtain Referer configuration types:<li>whitelist：Allowlist;</li> <li>blacklist:Blocklist.</li>
 * @method void setRefererType(string $RefererType) Set Referer configuration types:<li>whitelist：Allowlist;</li> <li>blacklist:Blocklist.</li>
 * @method array getReferers() Obtain Referer content list
 * @method void setReferers(array $Referers) Set Referer content list
 * @method boolean getAllowEmpty() Obtain Whether to allow empty referer：true: Allow empty referer when RefererType = whitelist; false: Reject empty refer when RefererType = blacklist.
 * @method void setAllowEmpty(boolean $AllowEmpty) Set Whether to allow empty referer：true: Allow empty referer when RefererType = whitelist; false: Reject empty refer when RefererType = blacklist.
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string Rule types: <li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
     */
    public $RuleType;

    /**
     * @var array Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
     */
    public $RulePaths;

    /**
     * @var string Referer configuration types:<li>whitelist：Allowlist;</li> <li>blacklist:Blocklist.</li>
     */
    public $RefererType;

    /**
     * @var array Referer content list
     */
    public $Referers;

    /**
     * @var boolean Whether to allow empty referer：true: Allow empty referer when RefererType = whitelist; false: Reject empty refer when RefererType = blacklist.
     */
    public $AllowEmpty;

    /**
     * @param string $RuleType Rule types: <li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
     * @param array $RulePaths Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
     * @param string $RefererType Referer configuration types:<li>whitelist：Allowlist;</li> <li>blacklist:Blocklist.</li>
     * @param array $Referers Referer content list
     * @param boolean $AllowEmpty Whether to allow empty referer：true: Allow empty referer when RefererType = whitelist; false: Reject empty refer when RefererType = blacklist.
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
