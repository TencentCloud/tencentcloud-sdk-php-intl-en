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
 * IP blocklist/allowlist path-based configuration
 *
 * @method string getFilterType() Obtain IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
 * @method void setFilterType(string $FilterType) Set IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
 * @method array getFilters() Obtain IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
 * @method void setFilters(array $Filters) Set IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
 * @method string getRuleType() Obtain Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method void setRuleType(string $RuleType) Set Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method array getRulePaths() Obtain Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
 * @method void setRulePaths(array $RulePaths) Set Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
 */
class IpFilterPathRule extends AbstractModel
{
    /**
     * @var string IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
     */
    public $FilterType;

    /**
     * @var array IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
     */
    public $Filters;

    /**
     * @var string Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     */
    public $RuleType;

    /**
     * @var array Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
     */
    public $RulePaths;

    /**
     * @param string $FilterType IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
     * @param array $Filters IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
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
