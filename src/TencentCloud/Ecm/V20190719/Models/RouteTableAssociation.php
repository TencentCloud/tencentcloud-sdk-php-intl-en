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
 * Association relationships of the route table
 *
 * @method string getSubnetId() Obtain Subnet instance ID
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID
 * @method string getRouteTableId() Obtain Route table instance ID
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID
 */
class RouteTableAssociation extends AbstractModel
{
    /**
     * @var string Subnet instance ID
     */
    public $SubnetId;

    /**
     * @var string Route table instance ID
     */
    public $RouteTableId;

    /**
     * @param string $SubnetId Subnet instance ID
     * @param string $RouteTableId Route table instance ID
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
