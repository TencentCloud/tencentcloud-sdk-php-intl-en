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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceRouteTableAssociation request structure.
 *
 * @method string getSubnetId() Obtain Subnet instance ID, such as `subnet-3x5lf5q0`, which can be queried through the `DescribeSubnets` API.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as `subnet-3x5lf5q0`, which can be queried through the `DescribeSubnets` API.
 * @method string getRouteTableId() Obtain Route table instance ID, such as `rtb-azd4dt1c`.
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID, such as `rtb-azd4dt1c`.
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 */
class ReplaceRouteTableAssociationRequest extends AbstractModel
{
    /**
     * @var string Subnet instance ID, such as `subnet-3x5lf5q0`, which can be queried through the `DescribeSubnets` API.
     */
    public $SubnetId;

    /**
     * @var string Route table instance ID, such as `rtb-azd4dt1c`.
     */
    public $RouteTableId;

    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @param string $SubnetId Subnet instance ID, such as `subnet-3x5lf5q0`, which can be queried through the `DescribeSubnets` API.
     * @param string $RouteTableId Route table instance ID, such as `rtb-azd4dt1c`.
     * @param string $EcmRegion ECM region
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

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
