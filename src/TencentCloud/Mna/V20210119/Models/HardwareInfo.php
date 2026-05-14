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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hardware Information
 *
 * @method string getDeviceId() Obtain device ID
 * @method void setDeviceId(string $DeviceId) Set device ID
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getActiveTime() Obtain Activation time
 * @method void setActiveTime(string $ActiveTime) Set Activation time
 * @method string getLastOnlineTime() Obtain Last online time
 * @method void setLastOnlineTime(string $LastOnlineTime) Set Last online time
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method string getVendorDescription() Obtain vendor remarks
 * @method void setVendorDescription(string $VendorDescription) Set vendor remarks
 * @method integer getLicenseChargingMode() Obtain License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: This parameter will be subsequently deprecated. Please use LicensePayMode and Payer for new access.
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) Set License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: This parameter will be subsequently deprecated. Please use LicensePayMode and Payer for new access.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getSN() Obtain Hardware Serial Number
 * @method void setSN(string $SN) Set Hardware Serial Number
 * @method integer getLicensePayMode() Obtain Authorization validity period of license 
0: Monthly authorization 
1: Permanent license
 * @method void setLicensePayMode(integer $LicensePayMode) Set Authorization validity period of license 
0: Monthly authorization 
1: Permanent license
 * @method integer getPayer() Obtain Payer 
0: Customer payment 
1: Manufacturer payment
 * @method void setPayer(integer $Payer) Set Payer 
0: Customer payment 
1: Manufacturer payment
 * @method string getGroupId() Obtain device group ID
 * @method void setGroupId(string $GroupId) Set device group ID
 * @method string getGroupName() Obtain Device group name
 * @method void setGroupName(string $GroupName) Set Device group name
 * @method integer getFlowTrunc() Obtain No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate	
 * @method void setFlowTrunc(integer $FlowTrunc) Set No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate	
 */
class HardwareInfo extends AbstractModel
{
    /**
     * @var string device ID
     */
    public $DeviceId;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string Activation time
     */
    public $ActiveTime;

    /**
     * @var string Last online time
     */
    public $LastOnlineTime;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var string vendor remarks
     */
    public $VendorDescription;

    /**
     * @var integer License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: This parameter will be subsequently deprecated. Please use LicensePayMode and Payer for new access.
     */
    public $LicenseChargingMode;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Hardware Serial Number
     */
    public $SN;

    /**
     * @var integer Authorization validity period of license 
0: Monthly authorization 
1: Permanent license
     */
    public $LicensePayMode;

    /**
     * @var integer Payer 
0: Customer payment 
1: Manufacturer payment
     */
    public $Payer;

    /**
     * @var string device group ID
     */
    public $GroupId;

    /**
     * @var string Device group name
     */
    public $GroupName;

    /**
     * @var integer No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate	
     */
    public $FlowTrunc;

    /**
     * @param string $DeviceId device ID
     * @param string $DeviceName Device name.
     * @param string $ActiveTime Activation time
     * @param string $LastOnlineTime Last online time
     * @param string $Description Remarks
     * @param string $VendorDescription vendor remarks
     * @param integer $LicenseChargingMode License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: This parameter will be subsequently deprecated. Please use LicensePayMode and Payer for new access.
     * @param string $CreateTime Creation time.
     * @param string $SN Hardware Serial Number
     * @param integer $LicensePayMode Authorization validity period of license 
0: Monthly authorization 
1: Permanent license
     * @param integer $Payer Payer 
0: Customer payment 
1: Manufacturer payment
     * @param string $GroupId device group ID
     * @param string $GroupName Device group name
     * @param integer $FlowTrunc No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate	
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VendorDescription",$param) and $param["VendorDescription"] !== null) {
            $this->VendorDescription = $param["VendorDescription"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("FlowTrunc",$param) and $param["FlowTrunc"] !== null) {
            $this->FlowTrunc = $param["FlowTrunc"];
        }
    }
}
