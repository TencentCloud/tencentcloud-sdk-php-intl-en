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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyL4ProxyRulesStatus request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyId() Obtain Layer 4 Proxy Instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer 4 Proxy Instance ID.
 * @method array getRuleIds() Obtain List of forwarding rule IDs. Supports up to 200 forwarding rules at a time.
 * @method void setRuleIds(array $RuleIds) Set List of forwarding rule IDs. Supports up to 200 forwarding rules at a time.
 * @method string getStatus() Obtain Forwarding rule status. Valid values:
<li>`online`: Enable;</li>
<li>offline: Disable.</li>
 * @method void setStatus(string $Status) Set Forwarding rule status. Valid values:
<li>`online`: Enable;</li>
<li>offline: Disable.</li>
 */
class ModifyL4ProxyRulesStatusRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Layer 4 Proxy Instance ID.
     */
    public $ProxyId;

    /**
     * @var array List of forwarding rule IDs. Supports up to 200 forwarding rules at a time.
     */
    public $RuleIds;

    /**
     * @var string Forwarding rule status. Valid values:
<li>`online`: Enable;</li>
<li>offline: Disable.</li>
     */
    public $Status;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyId Layer 4 Proxy Instance ID.
     * @param array $RuleIds List of forwarding rule IDs. Supports up to 200 forwarding rules at a time.
     * @param string $Status Forwarding rule status. Valid values:
<li>`online`: Enable;</li>
<li>offline: Disable.</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
