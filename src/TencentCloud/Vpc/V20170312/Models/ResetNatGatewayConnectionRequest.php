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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetNatGatewayConnection request structure.
 *
 * @method string getNatGatewayId() Obtain The NAT gateway ID.
 * @method void setNatGatewayId(string $NatGatewayId) Set The NAT gateway ID.
 * @method integer getMaxConcurrentConnection() Obtain Concurrent connections cap of the NAT gateway, such as 1000000, 3000000, 10000000.
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) Set Concurrent connections cap of the NAT gateway, such as 1000000, 3000000, 10000000.
 */
class ResetNatGatewayConnectionRequest extends AbstractModel
{
    /**
     * @var string The NAT gateway ID.
     */
    public $NatGatewayId;

    /**
     * @var integer Concurrent connections cap of the NAT gateway, such as 1000000, 3000000, 10000000.
     */
    public $MaxConcurrentConnection;

    /**
     * @param string $NatGatewayId The NAT gateway ID.
     * @param integer $MaxConcurrentConnection Concurrent connections cap of the NAT gateway, such as 1000000, 3000000, 10000000.
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
        }
    }
}
