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
 * ReplaceRouteTableAssociation request structure.
 *
 * @method string getSubnetId() Obtain Subnet instance ID, such as `subnet-3x5lf5q0`. This can be queried using the DescribeSubnets API.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as `subnet-3x5lf5q0`. This can be queried using the DescribeSubnets API.
 * @method string getRouteTableId() Obtain The route table instance ID, such as `rtb-azd4dt1c`.
 * @method void setRouteTableId(string $RouteTableId) Set The route table instance ID, such as `rtb-azd4dt1c`.
 */
class ReplaceRouteTableAssociationRequest extends AbstractModel
{
    /**
     * @var string Subnet instance ID, such as `subnet-3x5lf5q0`. This can be queried using the DescribeSubnets API.
     */
    public $SubnetId;

    /**
     * @var string The route table instance ID, such as `rtb-azd4dt1c`.
     */
    public $RouteTableId;

    /**
     * @param string $SubnetId Subnet instance ID, such as `subnet-3x5lf5q0`. This can be queried using the DescribeSubnets API.
     * @param string $RouteTableId The route table instance ID, such as `rtb-azd4dt1c`.
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}
