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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAllAccessControlRule request structure.
 *
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound. 0 by default
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound. 0 by default
 * @method string getEdgeId() Obtain Deletes all the access control rules for inter-VPC firewall toggles associated with the EdgeId. It is empty by default. Enter either EdgeId or Area.
 * @method void setEdgeId(string $EdgeId) Set Deletes all the access control rules for inter-VPC firewall toggles associated with the EdgeId. It is empty by default. Enter either EdgeId or Area.
 * @method string getArea() Obtain Deletes all the access control rules for NAT firewalls of this region. It is empty by default. Enter either EdgeId or Area.
 * @method void setArea(string $Area) Set Deletes all the access control rules for NAT firewalls of this region. It is empty by default. Enter either EdgeId or Area.
 */
class DeleteAllAccessControlRuleRequest extends AbstractModel
{
    /**
     * @var integer Direction. 0: outbound; 1: inbound. 0 by default
     */
    public $Direction;

    /**
     * @var string Deletes all the access control rules for inter-VPC firewall toggles associated with the EdgeId. It is empty by default. Enter either EdgeId or Area.
     */
    public $EdgeId;

    /**
     * @var string Deletes all the access control rules for NAT firewalls of this region. It is empty by default. Enter either EdgeId or Area.
     */
    public $Area;

    /**
     * @param integer $Direction Direction. 0: outbound; 1: inbound. 0 by default
     * @param string $EdgeId Deletes all the access control rules for inter-VPC firewall toggles associated with the EdgeId. It is empty by default. Enter either EdgeId or Area.
     * @param string $Area Deletes all the access control rules for NAT firewalls of this region. It is empty by default. Enter either EdgeId or Area.
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
