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
 * Firewall status list
 *
 * @method string getPublicIp() Obtain Public IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getIntranetIp() Obtain Private IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setIntranetIp(string $IntranetIp) Set Private IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getArea() Obtain Region
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setArea(string $Area) Set Region
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getSwitch() Obtain Firewall toggle
 * @method void setSwitch(integer $Switch) Set Firewall toggle
 * @method integer getId() Obtain ID value
 * @method void setId(integer $Id) Set ID value
 * @method integer getPublicIpType() Obtain Public IP type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPublicIpType(integer $PublicIpType) Set Public IP type
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getPortTimes() Obtain Number of risky ports
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPortTimes(integer $PortTimes) Set Number of risky ports
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getLastTime() Obtain Last scan time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setLastTime(string $LastTime) Set Last scan time
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getScanMode() Obtain Scan mode
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setScanMode(string $ScanMode) Set Scan mode
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getScanStatus() Obtain Scan status
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setScanStatus(integer $ScanStatus) Set Scan status
Note: This field may return `null`, indicating that no valid value was found.
 */
class SwitchListsData extends AbstractModel
{
    /**
     * @var string Public IP
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PublicIp;

    /**
     * @var string Private IP
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $IntranetIp;

    /**
     * @var string Instance name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceName;

    /**
     * @var string Instance ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Region
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Area;

    /**
     * @var integer Firewall toggle
     */
    public $Switch;

    /**
     * @var integer ID value
     */
    public $Id;

    /**
     * @var integer Public IP type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PublicIpType;

    /**
     * @var integer Number of risky ports
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PortTimes;

    /**
     * @var string Last scan time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $LastTime;

    /**
     * @var string Scan mode
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ScanMode;

    /**
     * @var integer Scan status
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ScanStatus;

    /**
     * @param string $PublicIp Public IP
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $IntranetIp Private IP
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceName Instance name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceId Instance ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $AssetType Asset type
     * @param string $Area Region
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Switch Firewall toggle
     * @param integer $Id ID value
     * @param integer $PublicIpType Public IP type
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $PortTimes Number of risky ports
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $LastTime Last scan time
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ScanMode Scan mode
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ScanStatus Scan status
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("IntranetIp",$param) and $param["IntranetIp"] !== null) {
            $this->IntranetIp = $param["IntranetIp"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PublicIpType",$param) and $param["PublicIpType"] !== null) {
            $this->PublicIpType = $param["PublicIpType"];
        }

        if (array_key_exists("PortTimes",$param) and $param["PortTimes"] !== null) {
            $this->PortTimes = $param["PortTimes"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("ScanMode",$param) and $param["ScanMode"] !== null) {
            $this->ScanMode = $param["ScanMode"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }
    }
}
