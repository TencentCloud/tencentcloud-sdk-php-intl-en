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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Offering Configuration Status
 *
 * @method string getId() Obtain Sellable Specification Unique ID
 * @method void setId(string $Id) Set Sellable Specification Unique ID
 * @method integer getSpecId() Obtain Instance Type ID
 * @method void setSpecId(integer $SpecId) Set Instance Type ID
 * @method string getPayModeStatus() Obtain Supported payment modes for this specification: POST - only supports pay-as-you-go, PRE - only supports yearly/monthly subscription, ALL - supports all.
 * @method void setPayModeStatus(string $PayModeStatus) Set Supported payment modes for this specification: POST - only supports pay-as-you-go, PRE - only supports yearly/monthly subscription, ALL - supports all.
 * @method string getInstanceType() Obtain Product type. Types of instances for purchase: HA - Local Disk High Availability (including dual-node high availability, alwaysOn cluster), RO - Local Disk Read-Only Replica, SI - Cloud Disk Edition Single Node, BI - Business Intelligence Service, cvmHA - Cloud Disk Edition High Availability, cvmRO - Cloud Disk Edition Read-Only Replica, MultiHA - Multi-node, cvmMultiHA - Cloud Disk Multi-node.
 * @method void setInstanceType(string $InstanceType) Set Product type. Types of instances for purchase: HA - Local Disk High Availability (including dual-node high availability, alwaysOn cluster), RO - Local Disk Read-Only Replica, SI - Cloud Disk Edition Single Node, BI - Business Intelligence Service, cvmHA - Cloud Disk Edition High Availability, cvmRO - Cloud Disk Edition Read-Only Replica, MultiHA - Multi-node, cvmMultiHA - Cloud Disk Multi-node.
 * @method string getMultiZonesStatus() Obtain Whether this specification supports cross-AZ deployment: MultiZones - only supports cross-AZ, SameZones - only supports same-AZ, ALL - supports all.
 * @method void setMultiZonesStatus(string $MultiZonesStatus) Set Whether this specification supports cross-AZ deployment: MultiZones - only supports cross-AZ, SameZones - only supports same-AZ, ALL - supports all.
 * @method string getArchitecture() Obtain Architecture Type, SINGLE - single node, DOUBLE - dual node, TRIPLE - three-node, MULTI - multi-node
Example value: SINGLE
 * @method void setArchitecture(string $Architecture) Set Architecture Type, SINGLE - single node, DOUBLE - dual node, TRIPLE - three-node, MULTI - multi-node
Example value: SINGLE
 * @method string getStyle() Obtain Type identifier, EXCLUSIVE - Dedicated, SHARED - Shared
 * @method void setStyle(string $Style) Set Type identifier, EXCLUSIVE - Dedicated, SHARED - Shared
 * @method string getVersion() Obtain Database Version Information
 * @method void setVersion(string $Version) Set Database Version Information
 * @method array getZoneStatusSet() Obtain Sellable Status Set Per AZ
 * @method void setZoneStatusSet(array $ZoneStatusSet) Set Sellable Status Set Per AZ
 * @method Price getPrice() Obtain Reference price for specifications. The actual price is subject to the quotation API.
 * @method void setPrice(Price $Price) Set Reference price for specifications. The actual price is subject to the quotation API.
 * @method integer getStatus() Obtain Specification Sale Status: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
 * @method void setStatus(integer $Status) Set Specification Sale Status: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
 */
class SpecSellStatus extends AbstractModel
{
    /**
     * @var string Sellable Specification Unique ID
     */
    public $Id;

    /**
     * @var integer Instance Type ID
     */
    public $SpecId;

    /**
     * @var string Supported payment modes for this specification: POST - only supports pay-as-you-go, PRE - only supports yearly/monthly subscription, ALL - supports all.
     */
    public $PayModeStatus;

    /**
     * @var string Product type. Types of instances for purchase: HA - Local Disk High Availability (including dual-node high availability, alwaysOn cluster), RO - Local Disk Read-Only Replica, SI - Cloud Disk Edition Single Node, BI - Business Intelligence Service, cvmHA - Cloud Disk Edition High Availability, cvmRO - Cloud Disk Edition Read-Only Replica, MultiHA - Multi-node, cvmMultiHA - Cloud Disk Multi-node.
     */
    public $InstanceType;

    /**
     * @var string Whether this specification supports cross-AZ deployment: MultiZones - only supports cross-AZ, SameZones - only supports same-AZ, ALL - supports all.
     */
    public $MultiZonesStatus;

    /**
     * @var string Architecture Type, SINGLE - single node, DOUBLE - dual node, TRIPLE - three-node, MULTI - multi-node
Example value: SINGLE
     */
    public $Architecture;

    /**
     * @var string Type identifier, EXCLUSIVE - Dedicated, SHARED - Shared
     */
    public $Style;

    /**
     * @var string Database Version Information
     */
    public $Version;

    /**
     * @var array Sellable Status Set Per AZ
     */
    public $ZoneStatusSet;

    /**
     * @var Price Reference price for specifications. The actual price is subject to the quotation API.
     */
    public $Price;

    /**
     * @var integer Specification Sale Status: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
     */
    public $Status;

    /**
     * @param string $Id Sellable Specification Unique ID
     * @param integer $SpecId Instance Type ID
     * @param string $PayModeStatus Supported payment modes for this specification: POST - only supports pay-as-you-go, PRE - only supports yearly/monthly subscription, ALL - supports all.
     * @param string $InstanceType Product type. Types of instances for purchase: HA - Local Disk High Availability (including dual-node high availability, alwaysOn cluster), RO - Local Disk Read-Only Replica, SI - Cloud Disk Edition Single Node, BI - Business Intelligence Service, cvmHA - Cloud Disk Edition High Availability, cvmRO - Cloud Disk Edition Read-Only Replica, MultiHA - Multi-node, cvmMultiHA - Cloud Disk Multi-node.
     * @param string $MultiZonesStatus Whether this specification supports cross-AZ deployment: MultiZones - only supports cross-AZ, SameZones - only supports same-AZ, ALL - supports all.
     * @param string $Architecture Architecture Type, SINGLE - single node, DOUBLE - dual node, TRIPLE - three-node, MULTI - multi-node
Example value: SINGLE
     * @param string $Style Type identifier, EXCLUSIVE - Dedicated, SHARED - Shared
     * @param string $Version Database Version Information
     * @param array $ZoneStatusSet Sellable Status Set Per AZ
     * @param Price $Price Reference price for specifications. The actual price is subject to the quotation API.
     * @param integer $Status Specification Sale Status: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("PayModeStatus",$param) and $param["PayModeStatus"] !== null) {
            $this->PayModeStatus = $param["PayModeStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MultiZonesStatus",$param) and $param["MultiZonesStatus"] !== null) {
            $this->MultiZonesStatus = $param["MultiZonesStatus"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ZoneStatusSet",$param) and $param["ZoneStatusSet"] !== null) {
            $this->ZoneStatusSet = [];
            foreach ($param["ZoneStatusSet"] as $key => $value){
                $obj = new ZoneStatus();
                $obj->deserialize($value);
                array_push($this->ZoneStatusSet, $obj);
            }
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
