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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossBorderSettlement request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain Global acceleration instance ID.
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set Global acceleration instance ID.
 * @method string getAccelerateRegion() Obtain Acceleration region.
 * @method void setAccelerateRegion(string $AccelerateRegion) Set Acceleration region.
 * @method string getEndpointGroupRegion() Obtain Region of the terminal node group.
 * @method void setEndpointGroupRegion(string $EndpointGroupRegion) Set Region of the terminal node group.
 * @method integer getSettlementMonth() Obtain Bill year and month time.
 * @method void setSettlementMonth(integer $SettlementMonth) Set Bill year and month time.
 */
class DescribeCrossBorderSettlementRequest extends AbstractModel
{
    /**
     * @var string Global acceleration instance ID.
     */
    public $GlobalAcceleratorId;

    /**
     * @var string Acceleration region.
     */
    public $AccelerateRegion;

    /**
     * @var string Region of the terminal node group.
     */
    public $EndpointGroupRegion;

    /**
     * @var integer Bill year and month time.
     */
    public $SettlementMonth;

    /**
     * @param string $GlobalAcceleratorId Global acceleration instance ID.
     * @param string $AccelerateRegion Acceleration region.
     * @param string $EndpointGroupRegion Region of the terminal node group.
     * @param integer $SettlementMonth Bill year and month time.
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("AccelerateRegion",$param) and $param["AccelerateRegion"] !== null) {
            $this->AccelerateRegion = $param["AccelerateRegion"];
        }

        if (array_key_exists("EndpointGroupRegion",$param) and $param["EndpointGroupRegion"] !== null) {
            $this->EndpointGroupRegion = $param["EndpointGroupRegion"];
        }

        if (array_key_exists("SettlementMonth",$param) and $param["SettlementMonth"] !== null) {
            $this->SettlementMonth = $param["SettlementMonth"];
        }
    }
}
