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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subnet object
 *
 * @method string getCidrBlock() Obtain The `CIDR` of the subnet.
 * @method void setCidrBlock(string $CidrBlock) Set The `CIDR` of the subnet.
 * @method string getSubnetName() Obtain Subnet name.
 * @method void setSubnetName(string $SubnetName) Set Subnet name.
 * @method string getZone() Obtain The availability zone, such as `ap-guangzhou-2`.
 * @method void setZone(string $Zone) Set The availability zone, such as `ap-guangzhou-2`.
 * @method string getRouteTableId() Obtain The specified associated route table, such as `rtb-3ryrwzuu`.
 * @method void setRouteTableId(string $RouteTableId) Set The specified associated route table, such as `rtb-3ryrwzuu`.
 */
class SubnetInput extends AbstractModel
{
    /**
     * @var string The `CIDR` of the subnet.
     */
    public $CidrBlock;

    /**
     * @var string Subnet name.
     */
    public $SubnetName;

    /**
     * @var string The availability zone, such as `ap-guangzhou-2`.
     */
    public $Zone;

    /**
     * @var string The specified associated route table, such as `rtb-3ryrwzuu`.
     */
    public $RouteTableId;

    /**
     * @param string $CidrBlock The `CIDR` of the subnet.
     * @param string $SubnetName Subnet name.
     * @param string $Zone The availability zone, such as `ap-guangzhou-2`.
     * @param string $RouteTableId The specified associated route table, such as `rtb-3ryrwzuu`.
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
        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}
