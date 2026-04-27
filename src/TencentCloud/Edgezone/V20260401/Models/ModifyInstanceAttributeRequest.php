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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttribute request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain New instance name, 1-60 characters. Import at least one with NewPublicIp.
 * @method void setInstanceName(string $InstanceName) Set New instance name, 1-60 characters. Import at least one with NewPublicIp.
 * @method string getNewPublicIp() Obtain New public IP address (select from available IP addresses of the public network instance bound to the instance). Provide at least one of this or InstanceName.
 * @method void setNewPublicIp(string $NewPublicIp) Set New public IP address (select from available IP addresses of the public network instance bound to the instance). Provide at least one of this or InstanceName.
 * @method string getIpType() Obtain IP type, ipv4 or ipv6. Default is ipv4. Valid only when NewPublicIp is specified.
 * @method void setIpType(string $IpType) Set IP type, ipv4 or ipv6. Default is ipv4. Valid only when NewPublicIp is specified.
 */
class ModifyInstanceAttributeRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string New instance name, 1-60 characters. Import at least one with NewPublicIp.
     */
    public $InstanceName;

    /**
     * @var string New public IP address (select from available IP addresses of the public network instance bound to the instance). Provide at least one of this or InstanceName.
     */
    public $NewPublicIp;

    /**
     * @var string IP type, ipv4 or ipv6. Default is ipv4. Valid only when NewPublicIp is specified.
     */
    public $IpType;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName New instance name, 1-60 characters. Import at least one with NewPublicIp.
     * @param string $NewPublicIp New public IP address (select from available IP addresses of the public network instance bound to the instance). Provide at least one of this or InstanceName.
     * @param string $IpType IP type, ipv4 or ipv6. Default is ipv4. Valid only when NewPublicIp is specified.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NewPublicIp",$param) and $param["NewPublicIp"] !== null) {
            $this->NewPublicIp = $param["NewPublicIp"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }
    }
}
