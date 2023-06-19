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
 * IP blocklist/allowlist path-based configuration
 *
 * @method string getFilterType() Obtain IP blocklist/allowlist type: <li>whitelist: allowlist IPs;</li> <li>blacklist: blocklist IPs.</li>
 * @method void setFilterType(string $FilterType) Set IP blocklist/allowlist type: <li>whitelist: allowlist IPs;</li> <li>blacklist: blocklist IPs.</li>
 * @method array getFilters() Obtain IP blocklist/allowlist list Supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges. Up to 50 allowlists or blocklists can be entered.
 * @method void setFilters(array $Filters) Set IP blocklist/allowlist list Supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges. Up to 50 allowlists or blocklists can be entered.
 * @method string getRuleType() Obtain Rule types: <li>all: Effective for all files;</li> <li>file: Effective for specified file suffixes;</li> <li>directory: Effective for specified paths;</li> <li>path: Effective for specified absolute paths.</li>
 * @method void setRuleType(string $RuleType) Set Rule types: <li>all: Effective for all files;</li> <li>file: Effective for specified file suffixes;</li> <li>directory: Effective for specified paths;</li> <li>path: Effective for specified absolute paths.</li>
 * @method array getRulePaths() Obtain Content for each RuleType: <li>For all, enter an asterisk (*).</li> <li>For file, enter the suffix, such as jpg, txt.</li> <li>For directory, enter the path, such as /xxx/test/.</li> <li>For path, enter the corresponding absolute path, such as /xxx/test.html.</li>
 * @method void setRulePaths(array $RulePaths) Set Content for each RuleType: <li>For all, enter an asterisk (*).</li> <li>For file, enter the suffix, such as jpg, txt.</li> <li>For directory, enter the path, such as /xxx/test/.</li> <li>For path, enter the corresponding absolute path, such as /xxx/test.html.</li>
 */
class IpFilterPathRule extends AbstractModel
{
    /**
     * @var string IP blocklist/allowlist type: <li>whitelist: allowlist IPs;</li> <li>blacklist: blocklist IPs.</li>
     */
    public $FilterType;

    /**
     * @var array IP blocklist/allowlist list Supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges. Up to 50 allowlists or blocklists can be entered.
     */
    public $Filters;

    /**
     * @var string Rule types: <li>all: Effective for all files;</li> <li>file: Effective for specified file suffixes;</li> <li>directory: Effective for specified paths;</li> <li>path: Effective for specified absolute paths.</li>
     */
    public $RuleType;

    /**
     * @var array Content for each RuleType: <li>For all, enter an asterisk (*).</li> <li>For file, enter the suffix, such as jpg, txt.</li> <li>For directory, enter the path, such as /xxx/test/.</li> <li>For path, enter the corresponding absolute path, such as /xxx/test.html.</li>
     */
    public $RulePaths;

    /**
     * @param string $FilterType IP blocklist/allowlist type: <li>whitelist: allowlist IPs;</li> <li>blacklist: blocklist IPs.</li>
     * @param array $Filters IP blocklist/allowlist list Supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges. Up to 50 allowlists or blocklists can be entered.
     * @param string $RuleType Rule types: <li>all: Effective for all files;</li> <li>file: Effective for specified file suffixes;</li> <li>directory: Effective for specified paths;</li> <li>path: Effective for specified absolute paths.</li>
     * @param array $RulePaths Content for each RuleType: <li>For all, enter an asterisk (*).</li> <li>For file, enter the suffix, such as jpg, txt.</li> <li>For directory, enter the path, such as /xxx/test/.</li> <li>For path, enter the corresponding absolute path, such as /xxx/test.html.</li>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
