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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package information.
 *
 * @method string getBundleId() Obtain Package ID.
 * @method void setBundleId(string $BundleId) Set Package ID.
 * @method integer getMemory() Obtain Memory size in GB.
 * @method void setMemory(integer $Memory) Set Memory size in GB.
 * @method string getSystemDiskType() Obtain System disk type.
Values: 
<li>`CLOUD_SSD`: SSD cloud disks</li><li>`CLOUD_PREMIUM`: Premium cloud disks</li>
 * @method void setSystemDiskType(string $SystemDiskType) Set System disk type.
Values: 
<li>`CLOUD_SSD`: SSD cloud disks</li><li>`CLOUD_PREMIUM`: Premium cloud disks</li>
 * @method integer getSystemDiskSize() Obtain System disk size in GB.
 * @method void setSystemDiskSize(integer $SystemDiskSize) Set System disk size in GB.
 * @method integer getMonthlyTraffic() Obtain Monthly network traffic in GB.
 * @method void setMonthlyTraffic(integer $MonthlyTraffic) Set Monthly network traffic in GB.
 * @method boolean getSupportLinuxUnixPlatform() Obtain Whether Linux/Unix is supported.
 * @method void setSupportLinuxUnixPlatform(boolean $SupportLinuxUnixPlatform) Set Whether Linux/Unix is supported.
 * @method boolean getSupportWindowsPlatform() Obtain Whether Windows is supported.
 * @method void setSupportWindowsPlatform(boolean $SupportWindowsPlatform) Set Whether Windows is supported.
 * @method Price getPrice() Obtain Current package unit price information.
 * @method void setPrice(Price $Price) Set Current package unit price information.
 * @method integer getCPU() Obtain Number of CPU cores.
 * @method void setCPU(integer $CPU) Set Number of CPU cores.
 * @method integer getInternetMaxBandwidthOut() Obtain Peak bandwidth in Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Peak bandwidth in Mbps.
 * @method string getInternetChargeType() Obtain Network billing mode.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing mode.
 * @method string getBundleSalesState() Obtain Package sale status. Valid values: AVAILABLE, SOLD_OUT
 * @method void setBundleSalesState(string $BundleSalesState) Set Package sale status. Valid values: AVAILABLE, SOLD_OUT
 * @method string getBundleType() Obtain Bundle type. 
Valid values: 
<li>STARTER_BUNDLE: Starter bundle</li>
<li>GENERAL_BUNDLE: General bundle</li>
<li>ENTERPRISE_BUNDLE: Enterprise bundle</li>
<li>STORAGE_BUNDLE: Storage-optimized bundle</li>
<li>EXCLUSIVE_BUNDLE: Dedicated bundle</li>
<li>HK_EXCLUSIVE_BUNDLE: Hong Kong-dedicated bundle </li>
<li>CAREFREE_BUNDLE: Lighthouse Care bundle</li>
<li>BEFAST_BUNDLE: BeFast bundle </li>
 * @method void setBundleType(string $BundleType) Set Bundle type. 
Valid values: 
<li>STARTER_BUNDLE: Starter bundle</li>
<li>GENERAL_BUNDLE: General bundle</li>
<li>ENTERPRISE_BUNDLE: Enterprise bundle</li>
<li>STORAGE_BUNDLE: Storage-optimized bundle</li>
<li>EXCLUSIVE_BUNDLE: Dedicated bundle</li>
<li>HK_EXCLUSIVE_BUNDLE: Hong Kong-dedicated bundle </li>
<li>CAREFREE_BUNDLE: Lighthouse Care bundle</li>
<li>BEFAST_BUNDLE: BeFast bundle </li>
 * @method string getBundleTypeDescription() Obtain Bundle type description 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setBundleTypeDescription(string $BundleTypeDescription) Set Bundle type description 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getBundleDisplayLabel() Obtain Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
 * @method void setBundleDisplayLabel(string $BundleDisplayLabel) Set Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
 */
class Bundle extends AbstractModel
{
    /**
     * @var string Package ID.
     */
    public $BundleId;

    /**
     * @var integer Memory size in GB.
     */
    public $Memory;

    /**
     * @var string System disk type.
Values: 
<li>`CLOUD_SSD`: SSD cloud disks</li><li>`CLOUD_PREMIUM`: Premium cloud disks</li>
     */
    public $SystemDiskType;

    /**
     * @var integer System disk size in GB.
     */
    public $SystemDiskSize;

    /**
     * @var integer Monthly network traffic in GB.
     */
    public $MonthlyTraffic;

    /**
     * @var boolean Whether Linux/Unix is supported.
     */
    public $SupportLinuxUnixPlatform;

    /**
     * @var boolean Whether Windows is supported.
     */
    public $SupportWindowsPlatform;

    /**
     * @var Price Current package unit price information.
     */
    public $Price;

    /**
     * @var integer Number of CPU cores.
     */
    public $CPU;

    /**
     * @var integer Peak bandwidth in Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Network billing mode.
     */
    public $InternetChargeType;

    /**
     * @var string Package sale status. Valid values: AVAILABLE, SOLD_OUT
     */
    public $BundleSalesState;

    /**
     * @var string Bundle type. 
Valid values: 
<li>STARTER_BUNDLE: Starter bundle</li>
<li>GENERAL_BUNDLE: General bundle</li>
<li>ENTERPRISE_BUNDLE: Enterprise bundle</li>
<li>STORAGE_BUNDLE: Storage-optimized bundle</li>
<li>EXCLUSIVE_BUNDLE: Dedicated bundle</li>
<li>HK_EXCLUSIVE_BUNDLE: Hong Kong-dedicated bundle </li>
<li>CAREFREE_BUNDLE: Lighthouse Care bundle</li>
<li>BEFAST_BUNDLE: BeFast bundle </li>
     */
    public $BundleType;

    /**
     * @var string Bundle type description 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $BundleTypeDescription;

    /**
     * @var string Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
     */
    public $BundleDisplayLabel;

    /**
     * @param string $BundleId Package ID.
     * @param integer $Memory Memory size in GB.
     * @param string $SystemDiskType System disk type.
Values: 
<li>`CLOUD_SSD`: SSD cloud disks</li><li>`CLOUD_PREMIUM`: Premium cloud disks</li>
     * @param integer $SystemDiskSize System disk size in GB.
     * @param integer $MonthlyTraffic Monthly network traffic in GB.
     * @param boolean $SupportLinuxUnixPlatform Whether Linux/Unix is supported.
     * @param boolean $SupportWindowsPlatform Whether Windows is supported.
     * @param Price $Price Current package unit price information.
     * @param integer $CPU Number of CPU cores.
     * @param integer $InternetMaxBandwidthOut Peak bandwidth in Mbps.
     * @param string $InternetChargeType Network billing mode.
     * @param string $BundleSalesState Package sale status. Valid values: AVAILABLE, SOLD_OUT
     * @param string $BundleType Bundle type. 
Valid values: 
<li>STARTER_BUNDLE: Starter bundle</li>
<li>GENERAL_BUNDLE: General bundle</li>
<li>ENTERPRISE_BUNDLE: Enterprise bundle</li>
<li>STORAGE_BUNDLE: Storage-optimized bundle</li>
<li>EXCLUSIVE_BUNDLE: Dedicated bundle</li>
<li>HK_EXCLUSIVE_BUNDLE: Hong Kong-dedicated bundle </li>
<li>CAREFREE_BUNDLE: Lighthouse Care bundle</li>
<li>BEFAST_BUNDLE: BeFast bundle </li>
     * @param string $BundleTypeDescription Bundle type description 
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $BundleDisplayLabel Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            $this->SystemDiskType = $param["SystemDiskType"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("MonthlyTraffic",$param) and $param["MonthlyTraffic"] !== null) {
            $this->MonthlyTraffic = $param["MonthlyTraffic"];
        }

        if (array_key_exists("SupportLinuxUnixPlatform",$param) and $param["SupportLinuxUnixPlatform"] !== null) {
            $this->SupportLinuxUnixPlatform = $param["SupportLinuxUnixPlatform"];
        }

        if (array_key_exists("SupportWindowsPlatform",$param) and $param["SupportWindowsPlatform"] !== null) {
            $this->SupportWindowsPlatform = $param["SupportWindowsPlatform"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("BundleSalesState",$param) and $param["BundleSalesState"] !== null) {
            $this->BundleSalesState = $param["BundleSalesState"];
        }

        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("BundleTypeDescription",$param) and $param["BundleTypeDescription"] !== null) {
            $this->BundleTypeDescription = $param["BundleTypeDescription"];
        }

        if (array_key_exists("BundleDisplayLabel",$param) and $param["BundleDisplayLabel"] !== null) {
            $this->BundleDisplayLabel = $param["BundleDisplayLabel"];
        }
    }
}
