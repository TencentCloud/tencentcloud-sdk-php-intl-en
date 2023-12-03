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
 * IP blocklist/allowlist configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable IP blocklist/allowlist. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable IP blocklist/allowlist. Values:
`on`: Enable
`off`: Disable
 * @method string getFilterType() Obtain IP blocklist/allowlist type
`whitelist`: IP allowlist
`blacklist`: IP blocklist
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFilterType(string $FilterType) Set IP blocklist/allowlist type
`whitelist`: IP allowlist
`blacklist`: IP blocklist
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getFilters() Obtain IP blocklist/allowlist
Supports IPs in X.X.X.X format, or IP ranges in /8, /16, /24 format.
Up to 50 whitelists or blacklists can be entered
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFilters(array $Filters) Set IP blocklist/allowlist
Supports IPs in X.X.X.X format, or IP ranges in /8, /16, /24 format.
Up to 50 whitelists or blacklists can be entered
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getFilterRules() Obtain IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFilterRules(array $FilterRules) Set IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getReturnCode() Obtain (Disused) Expected HTTP code to return when the IP allowlist/blocklist verification fails. <br><font color=red>The 514 code is used instead.</font>
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReturnCode(integer $ReturnCode) Set (Disused) Expected HTTP code to return when the IP allowlist/blocklist verification fails. <br><font color=red>The 514 code is used instead.</font>
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class IpFilter extends AbstractModel
{
    /**
     * @var string Whether to enable IP blocklist/allowlist. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var string IP blocklist/allowlist type
`whitelist`: IP allowlist
`blacklist`: IP blocklist
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FilterType;

    /**
     * @var array IP blocklist/allowlist
Supports IPs in X.X.X.X format, or IP ranges in /8, /16, /24 format.
Up to 50 whitelists or blacklists can be entered
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Filters;

    /**
     * @var array IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FilterRules;

    /**
     * @var integer (Disused) Expected HTTP code to return when the IP allowlist/blocklist verification fails. <br><font color=red>The 514 code is used instead.</font>
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReturnCode;

    /**
     * @param string $Switch Whether to enable IP blocklist/allowlist. Values:
`on`: Enable
`off`: Disable
     * @param string $FilterType IP blocklist/allowlist type
`whitelist`: IP allowlist
`blacklist`: IP blocklist
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Filters IP blocklist/allowlist
Supports IPs in X.X.X.X format, or IP ranges in /8, /16, /24 format.
Up to 50 whitelists or blacklists can be entered
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $FilterRules IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ReturnCode (Disused) Expected HTTP code to return when the IP allowlist/blocklist verification fails. <br><font color=red>The 514 code is used instead.</font>
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new IpFilterPathRule();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }
    }
}
