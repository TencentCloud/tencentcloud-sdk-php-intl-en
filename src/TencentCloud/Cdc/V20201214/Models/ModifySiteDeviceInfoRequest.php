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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySiteDeviceInfo request structure.
 *
 * @method string getSiteId() Obtain Equipment room ID
 * @method void setSiteId(string $SiteId) Set Equipment room ID
 * @method string getFiberType() Obtain You are using optical fiber type to connect the CDC device to the network Single-mode or multi-mode fibers are available.
 * @method void setFiberType(string $FiberType) Set You are using optical fiber type to connect the CDC device to the network Single-mode or multi-mode fibers are available.
 * @method string getOpticalStandard() Obtain Optical standard used to connect the CDC device to the network This field depends on the uplink speed, optical fiber type, and distance to upstream equipment.
 * @method void setOpticalStandard(string $OpticalStandard) Set Optical standard used to connect the CDC device to the network This field depends on the uplink speed, optical fiber type, and distance to upstream equipment.
 * @method string getPowerConnectors() Obtain Type of power connector
 * @method void setPowerConnectors(string $PowerConnectors) Set Type of power connector
 * @method string getPowerFeedDrop() Obtain Whether power is supplied from above or below the rack
 * @method void setPowerFeedDrop(string $PowerFeedDrop) Set Whether power is supplied from above or below the rack
 * @method integer getMaxWeight() Obtain Maximum weight capacity (KG)
 * @method void setMaxWeight(integer $MaxWeight) Set Maximum weight capacity (KG)
 * @method integer getPowerDrawKva() Obtain Power consumption (KW)
 * @method void setPowerDrawKva(integer $PowerDrawKva) Set Power consumption (KW)
 * @method integer getUplinkSpeedGbps() Obtain Uplink speed from the network to Tencent Cloud Region
 * @method void setUplinkSpeedGbps(integer $UplinkSpeedGbps) Set Uplink speed from the network to Tencent Cloud Region
 * @method integer getUplinkCount() Obtain Number of uplinks used by each CDC device (2 devices per rack) when connected to the network
 * @method void setUplinkCount(integer $UplinkCount) Set Number of uplinks used by each CDC device (2 devices per rack) when connected to the network
 * @method boolean getConditionRequirement() Obtain Whether the following environmental conditions are met: 
1. There are no material requirements or the acceptance standard on site that will affect the delivery and installation of the CDC device. 
2. The following conditions are met for finalized rack positions: 
Temperature ranges from 41 to 104°F (5 to 40°C). 
Humidity ranges from 10°F (-12°C) to 70°F (21°C) and relative humidity ranges from 8% RH to 80% RH. 
Air flows from front to back at the rack position and there is sufficient air in CFM (cubic feet per minute). The air quantity in CFM must be 145.8 times the power consumption (in KVA) of CDC.
 * @method void setConditionRequirement(boolean $ConditionRequirement) Set Whether the following environmental conditions are met: 
1. There are no material requirements or the acceptance standard on site that will affect the delivery and installation of the CDC device. 
2. The following conditions are met for finalized rack positions: 
Temperature ranges from 41 to 104°F (5 to 40°C). 
Humidity ranges from 10°F (-12°C) to 70°F (21°C) and relative humidity ranges from 8% RH to 80% RH. 
Air flows from front to back at the rack position and there is sufficient air in CFM (cubic feet per minute). The air quantity in CFM must be 145.8 times the power consumption (in KVA) of CDC.
 * @method boolean getDimensionRequirement() Obtain Whether the following dimension conditions are met: 
Your loading dock can accommodate one rack container (H x W x D = 94" x 54" x 48"). 
You can provide a clear route from the delivery point of your rack (H x W x D = 80" x 24" x 48") to its final installation location. You should consider platforms, corridors, doors, turns, ramps, freight elevators as well as other access restrictions when measuring the depth. 
There shall be a 48" or greater front clearance and a 24" or greater rear clearance where the CDC is finally installed.
 * @method void setDimensionRequirement(boolean $DimensionRequirement) Set Whether the following dimension conditions are met: 
Your loading dock can accommodate one rack container (H x W x D = 94" x 54" x 48"). 
You can provide a clear route from the delivery point of your rack (H x W x D = 80" x 24" x 48") to its final installation location. You should consider platforms, corridors, doors, turns, ramps, freight elevators as well as other access restrictions when measuring the depth. 
There shall be a 48" or greater front clearance and a 24" or greater rear clearance where the CDC is finally installed.
 * @method boolean getRedundantNetworking() Obtain Whether redundant upstream equipment (switch or router) is provided so that both network devices can be connected to the network.
 * @method void setRedundantNetworking(boolean $RedundantNetworking) Set Whether redundant upstream equipment (switch or router) is provided so that both network devices can be connected to the network.
 * @method boolean getNeedHelp() Obtain Whether you need help from Tencent Cloud for rack installation?
 * @method void setNeedHelp(boolean $NeedHelp) Set Whether you need help from Tencent Cloud for rack installation?
 * @method boolean getRedundantPower() Obtain Whether there is power redundancy?
 * @method void setRedundantPower(boolean $RedundantPower) Set Whether there is power redundancy?
 * @method boolean getBreakerRequirement() Obtain Whether there is an upstream circuit breaker?
 * @method void setBreakerRequirement(boolean $BreakerRequirement) Set Whether there is an upstream circuit breaker?
 */
class ModifySiteDeviceInfoRequest extends AbstractModel
{
    /**
     * @var string Equipment room ID
     */
    public $SiteId;

    /**
     * @var string You are using optical fiber type to connect the CDC device to the network Single-mode or multi-mode fibers are available.
     */
    public $FiberType;

    /**
     * @var string Optical standard used to connect the CDC device to the network This field depends on the uplink speed, optical fiber type, and distance to upstream equipment.
     */
    public $OpticalStandard;

    /**
     * @var string Type of power connector
     */
    public $PowerConnectors;

    /**
     * @var string Whether power is supplied from above or below the rack
     */
    public $PowerFeedDrop;

    /**
     * @var integer Maximum weight capacity (KG)
     */
    public $MaxWeight;

    /**
     * @var integer Power consumption (KW)
     */
    public $PowerDrawKva;

    /**
     * @var integer Uplink speed from the network to Tencent Cloud Region
     */
    public $UplinkSpeedGbps;

    /**
     * @var integer Number of uplinks used by each CDC device (2 devices per rack) when connected to the network
     */
    public $UplinkCount;

    /**
     * @var boolean Whether the following environmental conditions are met: 
1. There are no material requirements or the acceptance standard on site that will affect the delivery and installation of the CDC device. 
2. The following conditions are met for finalized rack positions: 
Temperature ranges from 41 to 104°F (5 to 40°C). 
Humidity ranges from 10°F (-12°C) to 70°F (21°C) and relative humidity ranges from 8% RH to 80% RH. 
Air flows from front to back at the rack position and there is sufficient air in CFM (cubic feet per minute). The air quantity in CFM must be 145.8 times the power consumption (in KVA) of CDC.
     */
    public $ConditionRequirement;

    /**
     * @var boolean Whether the following dimension conditions are met: 
Your loading dock can accommodate one rack container (H x W x D = 94" x 54" x 48"). 
You can provide a clear route from the delivery point of your rack (H x W x D = 80" x 24" x 48") to its final installation location. You should consider platforms, corridors, doors, turns, ramps, freight elevators as well as other access restrictions when measuring the depth. 
There shall be a 48" or greater front clearance and a 24" or greater rear clearance where the CDC is finally installed.
     */
    public $DimensionRequirement;

    /**
     * @var boolean Whether redundant upstream equipment (switch or router) is provided so that both network devices can be connected to the network.
     */
    public $RedundantNetworking;

    /**
     * @var boolean Whether you need help from Tencent Cloud for rack installation?
     */
    public $NeedHelp;

    /**
     * @var boolean Whether there is power redundancy?
     */
    public $RedundantPower;

    /**
     * @var boolean Whether there is an upstream circuit breaker?
     */
    public $BreakerRequirement;

    /**
     * @param string $SiteId Equipment room ID
     * @param string $FiberType You are using optical fiber type to connect the CDC device to the network Single-mode or multi-mode fibers are available.
     * @param string $OpticalStandard Optical standard used to connect the CDC device to the network This field depends on the uplink speed, optical fiber type, and distance to upstream equipment.
     * @param string $PowerConnectors Type of power connector
     * @param string $PowerFeedDrop Whether power is supplied from above or below the rack
     * @param integer $MaxWeight Maximum weight capacity (KG)
     * @param integer $PowerDrawKva Power consumption (KW)
     * @param integer $UplinkSpeedGbps Uplink speed from the network to Tencent Cloud Region
     * @param integer $UplinkCount Number of uplinks used by each CDC device (2 devices per rack) when connected to the network
     * @param boolean $ConditionRequirement Whether the following environmental conditions are met: 
1. There are no material requirements or the acceptance standard on site that will affect the delivery and installation of the CDC device. 
2. The following conditions are met for finalized rack positions: 
Temperature ranges from 41 to 104°F (5 to 40°C). 
Humidity ranges from 10°F (-12°C) to 70°F (21°C) and relative humidity ranges from 8% RH to 80% RH. 
Air flows from front to back at the rack position and there is sufficient air in CFM (cubic feet per minute). The air quantity in CFM must be 145.8 times the power consumption (in KVA) of CDC.
     * @param boolean $DimensionRequirement Whether the following dimension conditions are met: 
Your loading dock can accommodate one rack container (H x W x D = 94" x 54" x 48"). 
You can provide a clear route from the delivery point of your rack (H x W x D = 80" x 24" x 48") to its final installation location. You should consider platforms, corridors, doors, turns, ramps, freight elevators as well as other access restrictions when measuring the depth. 
There shall be a 48" or greater front clearance and a 24" or greater rear clearance where the CDC is finally installed.
     * @param boolean $RedundantNetworking Whether redundant upstream equipment (switch or router) is provided so that both network devices can be connected to the network.
     * @param boolean $NeedHelp Whether you need help from Tencent Cloud for rack installation?
     * @param boolean $RedundantPower Whether there is power redundancy?
     * @param boolean $BreakerRequirement Whether there is an upstream circuit breaker?
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("FiberType",$param) and $param["FiberType"] !== null) {
            $this->FiberType = $param["FiberType"];
        }

        if (array_key_exists("OpticalStandard",$param) and $param["OpticalStandard"] !== null) {
            $this->OpticalStandard = $param["OpticalStandard"];
        }

        if (array_key_exists("PowerConnectors",$param) and $param["PowerConnectors"] !== null) {
            $this->PowerConnectors = $param["PowerConnectors"];
        }

        if (array_key_exists("PowerFeedDrop",$param) and $param["PowerFeedDrop"] !== null) {
            $this->PowerFeedDrop = $param["PowerFeedDrop"];
        }

        if (array_key_exists("MaxWeight",$param) and $param["MaxWeight"] !== null) {
            $this->MaxWeight = $param["MaxWeight"];
        }

        if (array_key_exists("PowerDrawKva",$param) and $param["PowerDrawKva"] !== null) {
            $this->PowerDrawKva = $param["PowerDrawKva"];
        }

        if (array_key_exists("UplinkSpeedGbps",$param) and $param["UplinkSpeedGbps"] !== null) {
            $this->UplinkSpeedGbps = $param["UplinkSpeedGbps"];
        }

        if (array_key_exists("UplinkCount",$param) and $param["UplinkCount"] !== null) {
            $this->UplinkCount = $param["UplinkCount"];
        }

        if (array_key_exists("ConditionRequirement",$param) and $param["ConditionRequirement"] !== null) {
            $this->ConditionRequirement = $param["ConditionRequirement"];
        }

        if (array_key_exists("DimensionRequirement",$param) and $param["DimensionRequirement"] !== null) {
            $this->DimensionRequirement = $param["DimensionRequirement"];
        }

        if (array_key_exists("RedundantNetworking",$param) and $param["RedundantNetworking"] !== null) {
            $this->RedundantNetworking = $param["RedundantNetworking"];
        }

        if (array_key_exists("NeedHelp",$param) and $param["NeedHelp"] !== null) {
            $this->NeedHelp = $param["NeedHelp"];
        }

        if (array_key_exists("RedundantPower",$param) and $param["RedundantPower"] !== null) {
            $this->RedundantPower = $param["RedundantPower"];
        }

        if (array_key_exists("BreakerRequirement",$param) and $param["BreakerRequirement"] !== null) {
            $this->BreakerRequirement = $param["BreakerRequirement"];
        }
    }
}
