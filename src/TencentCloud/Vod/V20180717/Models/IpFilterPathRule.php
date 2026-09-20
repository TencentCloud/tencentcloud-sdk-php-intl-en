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
 * IP allowlist/blocklist path-specific configuration
 *
 * @method string getFilterType() Obtain IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
 * @method void setFilterType(string $FilterType) Set IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
 * @method array getFilters() Obtain IP blocklist and allowlist. Supports IPs in X.X.X.X format or network segments in /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
 * @method void setFilters(array $Filters) Set IP blocklist and allowlist. Supports IPs in X.X.X.X format or network segments in /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
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
class IpFilterPathRule extends AbstractModel
{
    /**
     * @var string IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
     */
    public $FilterType;

    /**
     * @var array IP blocklist and allowlist. Supports IPs in X.X.X.X format or network segments in /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
     */
    public $Filters;

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
     * @param string $FilterType IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
     * @param array $Filters IP blocklist and allowlist. Supports IPs in X.X.X.X format or network segments in /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
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
