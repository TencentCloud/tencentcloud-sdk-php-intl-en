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
 * 
 *
 * @method string getId() Obtain 
 * @method void setId(string $Id) Set 
 * @method integer getSpecId() Obtain 
 * @method void setSpecId(integer $SpecId) Set 
 * @method string getPayModeStatus() Obtain 
 * @method void setPayModeStatus(string $PayModeStatus) Set 
 * @method string getInstanceType() Obtain 
 * @method void setInstanceType(string $InstanceType) Set 
 * @method string getMultiZonesStatus() Obtain 
 * @method void setMultiZonesStatus(string $MultiZonesStatus) Set 
 * @method string getArchitecture() Obtain 
 * @method void setArchitecture(string $Architecture) Set 
 * @method string getStyle() Obtain 
 * @method void setStyle(string $Style) Set 
 * @method string getVersion() Obtain 
 * @method void setVersion(string $Version) Set 
 * @method array getZoneStatusSet() Obtain 
 * @method void setZoneStatusSet(array $ZoneStatusSet) Set 
 * @method Price getPrice() Obtain 
 * @method void setPrice(Price $Price) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 */
class SpecSellStatus extends AbstractModel
{
    /**
     * @var string 
     */
    public $Id;

    /**
     * @var integer 
     */
    public $SpecId;

    /**
     * @var string 
     */
    public $PayModeStatus;

    /**
     * @var string 
     */
    public $InstanceType;

    /**
     * @var string 
     */
    public $MultiZonesStatus;

    /**
     * @var string 
     */
    public $Architecture;

    /**
     * @var string 
     */
    public $Style;

    /**
     * @var string 
     */
    public $Version;

    /**
     * @var array 
     */
    public $ZoneStatusSet;

    /**
     * @var Price 
     */
    public $Price;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @param string $Id 
     * @param integer $SpecId 
     * @param string $PayModeStatus 
     * @param string $InstanceType 
     * @param string $MultiZonesStatus 
     * @param string $Architecture 
     * @param string $Style 
     * @param string $Version 
     * @param array $ZoneStatusSet 
     * @param Price $Price 
     * @param integer $Status 
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
