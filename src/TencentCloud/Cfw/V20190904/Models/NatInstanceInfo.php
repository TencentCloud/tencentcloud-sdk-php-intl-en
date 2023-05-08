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
 * NAT instance card details
 *
 * @method string getNatinsId() Obtain NAT instance ID
 * @method void setNatinsId(string $NatinsId) Set NAT instance ID
 * @method string getNatinsName() Obtain NAT instance name
 * @method void setNatinsName(string $NatinsName) Set NAT instance name
 * @method string getRegion() Obtain Instance region
 * @method void setRegion(string $Region) Set Instance region
 * @method integer getFwMode() Obtain 0: create new; 1: use existing
 * @method void setFwMode(integer $FwMode) Set 0: create new; 1: use existing
 * @method integer getBandWidth() Obtain Instance bandwidth (Mbps)
 * @method void setBandWidth(integer $BandWidth) Set Instance bandwidth (Mbps)
 * @method integer getInFlowMax() Obtain Inbound traffic peak bandwidth (bps)
 * @method void setInFlowMax(integer $InFlowMax) Set Inbound traffic peak bandwidth (bps)
 * @method integer getOutFlowMax() Obtain Outbound traffic peak bandwidth (bps)
 * @method void setOutFlowMax(integer $OutFlowMax) Set Outbound traffic peak bandwidth (bps)
 * @method string getRegionZh() Obtain Chinese region information
 * @method void setRegionZh(string $RegionZh) Set Chinese region information
 * @method array getEipAddress() Obtain Public IP array
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEipAddress(array $EipAddress) Set Public IP array
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getVpcIp() Obtain Array of internal and external IPs
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcIp(array $VpcIp) Set Array of internal and external IPs
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getSubnets() Obtain Array of subnets associated with an instance
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSubnets(array $Subnets) Set Array of subnets associated with an instance
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStatus() Obtain 0: normal 1: initializing
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStatus(integer $Status) Set 0: normal 1: initializing
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRegionDetail() Obtain Region information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionDetail(string $RegionDetail) Set Region information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneZh() Obtain Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneZh(string $ZoneZh) Set Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneZhBak() Obtain Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneZhBak(string $ZoneZhBak) Set Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleUsed() Obtain Number of used rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleUsed(integer $RuleUsed) Set Number of used rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleMax() Obtain The maximum number of rules allowed in the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleMax(integer $RuleMax) Set The maximum number of rules allowed in the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NatInstanceInfo extends AbstractModel
{
    /**
     * @var string NAT instance ID
     */
    public $NatinsId;

    /**
     * @var string NAT instance name
     */
    public $NatinsName;

    /**
     * @var string Instance region
     */
    public $Region;

    /**
     * @var integer 0: create new; 1: use existing
     */
    public $FwMode;

    /**
     * @var integer Instance bandwidth (Mbps)
     */
    public $BandWidth;

    /**
     * @var integer Inbound traffic peak bandwidth (bps)
     */
    public $InFlowMax;

    /**
     * @var integer Outbound traffic peak bandwidth (bps)
     */
    public $OutFlowMax;

    /**
     * @var string Chinese region information
     */
    public $RegionZh;

    /**
     * @var array Public IP array
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EipAddress;

    /**
     * @var array Array of internal and external IPs
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcIp;

    /**
     * @var array Array of subnets associated with an instance
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Subnets;

    /**
     * @var integer 0: normal 1: initializing
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Status;

    /**
     * @var string Region information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionDetail;

    /**
     * @var string Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneZh;

    /**
     * @var string Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneZhBak;

    /**
     * @var integer Number of used rules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleUsed;

    /**
     * @var integer The maximum number of rules allowed in the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleMax;

    /**
     * @param string $NatinsId NAT instance ID
     * @param string $NatinsName NAT instance name
     * @param string $Region Instance region
     * @param integer $FwMode 0: create new; 1: use existing
     * @param integer $BandWidth Instance bandwidth (Mbps)
     * @param integer $InFlowMax Inbound traffic peak bandwidth (bps)
     * @param integer $OutFlowMax Outbound traffic peak bandwidth (bps)
     * @param string $RegionZh Chinese region information
     * @param array $EipAddress Public IP array
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $VpcIp Array of internal and external IPs
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Subnets Array of subnets associated with an instance
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Status 0: normal 1: initializing
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RegionDetail Region information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneZh Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneZhBak Availability zone of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleUsed Number of used rules.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleMax The maximum number of rules allowed in the instance.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NatinsId",$param) and $param["NatinsId"] !== null) {
            $this->NatinsId = $param["NatinsId"];
        }

        if (array_key_exists("NatinsName",$param) and $param["NatinsName"] !== null) {
            $this->NatinsName = $param["NatinsName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("InFlowMax",$param) and $param["InFlowMax"] !== null) {
            $this->InFlowMax = $param["InFlowMax"];
        }

        if (array_key_exists("OutFlowMax",$param) and $param["OutFlowMax"] !== null) {
            $this->OutFlowMax = $param["OutFlowMax"];
        }

        if (array_key_exists("RegionZh",$param) and $param["RegionZh"] !== null) {
            $this->RegionZh = $param["RegionZh"];
        }

        if (array_key_exists("EipAddress",$param) and $param["EipAddress"] !== null) {
            $this->EipAddress = $param["EipAddress"];
        }

        if (array_key_exists("VpcIp",$param) and $param["VpcIp"] !== null) {
            $this->VpcIp = $param["VpcIp"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RegionDetail",$param) and $param["RegionDetail"] !== null) {
            $this->RegionDetail = $param["RegionDetail"];
        }

        if (array_key_exists("ZoneZh",$param) and $param["ZoneZh"] !== null) {
            $this->ZoneZh = $param["ZoneZh"];
        }

        if (array_key_exists("ZoneZhBak",$param) and $param["ZoneZhBak"] !== null) {
            $this->ZoneZhBak = $param["ZoneZhBak"];
        }

        if (array_key_exists("RuleUsed",$param) and $param["RuleUsed"] !== null) {
            $this->RuleUsed = $param["RuleUsed"];
        }

        if (array_key_exists("RuleMax",$param) and $param["RuleMax"] !== null) {
            $this->RuleMax = $param["RuleMax"];
        }
    }
}
