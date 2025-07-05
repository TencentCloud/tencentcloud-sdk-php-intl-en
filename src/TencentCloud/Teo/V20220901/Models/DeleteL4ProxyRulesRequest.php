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
 * DeleteL4ProxyRules request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyId() Obtain Layer 4 proxy instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer 4 proxy instance ID.
 * @method array getRuleIds() Obtain List of forwarding rule IDs. It supports up to 200 forwarding rules at a time.
 * @method void setRuleIds(array $RuleIds) Set List of forwarding rule IDs. It supports up to 200 forwarding rules at a time.
 */
class DeleteL4ProxyRulesRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Layer 4 proxy instance ID.
     */
    public $ProxyId;

    /**
     * @var array List of forwarding rule IDs. It supports up to 200 forwarding rules at a time.
     */
    public $RuleIds;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyId Layer 4 proxy instance ID.
     * @param array $RuleIds List of forwarding rule IDs. It supports up to 200 forwarding rules at a time.
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
    }
}
