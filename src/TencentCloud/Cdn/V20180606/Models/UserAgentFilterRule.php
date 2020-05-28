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
 * `UserAgent` blacklist/whitelist rule configuration
 *
 * @method string getRuleType() Obtain Effective access path type
all: all access paths are effective
file: effective by file extension
directory: effective by directory
path: effective by full access path
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Effective access path type
all: all access paths are effective
file: effective by file extension
directory: effective by directory
path: effective by full access path
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRulePaths() Obtain Effective access paths
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRulePaths(array $RulePaths) Set Effective access paths
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserAgents() Obtain `UserAgent` list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserAgents(array $UserAgents) Set `UserAgent` list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFilterType() Obtain Blacklist or whitelist. Valid values: blacklist, whitelist
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilterType(string $FilterType) Set Blacklist or whitelist. Valid values: blacklist, whitelist
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UserAgentFilterRule extends AbstractModel
{
    /**
     * @var string Effective access path type
all: all access paths are effective
file: effective by file extension
directory: effective by directory
path: effective by full access path
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @var array Effective access paths
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RulePaths;

    /**
     * @var array `UserAgent` list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserAgents;

    /**
     * @var string Blacklist or whitelist. Valid values: blacklist, whitelist
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FilterType;

    /**
     * @param string $RuleType Effective access path type
all: all access paths are effective
file: effective by file extension
directory: effective by directory
path: effective by full access path
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RulePaths Effective access paths
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserAgents `UserAgent` list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FilterType Blacklist or whitelist. Valid values: blacklist, whitelist
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("UserAgents",$param) and $param["UserAgents"] !== null) {
            $this->UserAgents = $param["UserAgents"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
