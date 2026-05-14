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
 * Manufacturer Hardware Information
 *
 * @method string getHardwareId() Obtain Hardware id
 * @method void setHardwareId(string $HardwareId) Set Hardware id
 * @method string getSN() Obtain Hardware Serial Number
 * @method void setSN(string $SN) Set Hardware Serial Number
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getStatus() Obtain Activation status, empty: all; 1: to be activated; 2: activated
 * @method void setStatus(integer $Status) Set Activation status, empty: all; 1: to be activated; 2: activated
 * @method string getActiveTime() Obtain Activation time
 * @method void setActiveTime(string $ActiveTime) Set Activation time
 * @method string getDescription() Obtain vendor remarks
 * @method void setDescription(string $Description) Set vendor remarks
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method integer getLicenseChargingMode() Obtain License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: When the device is paid by the tenant and inactive (not selected for monthly or permanent payment), this parameter returns 1, indicating only that the tenant has paid. This parameter will be subsequently deprecated. For new access, please use LicensePayMode and Payer.
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) Set License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: When the device is paid by the tenant and inactive (not selected for monthly or permanent payment), this parameter returns 1, indicating only that the tenant has paid. This parameter will be subsequently deprecated. For new access, please use LicensePayMode and Payer.
 * @method string getLastOnlineTime() Obtain Last online time
 * @method void setLastOnlineTime(string $LastOnlineTime) Set Last online time
 * @method integer getLicensePayMode() Obtain Authorization validity period
Monthly authorization
1: Permanent license
-Unknown
 * @method void setLicensePayMode(integer $LicensePayMode) Set Authorization validity period
Monthly authorization
1: Permanent license
-Unknown
 * @method integer getPayer() Obtain Payer
0: Customer payment
1: Manufacturer payment
 * @method void setPayer(integer $Payer) Set Payer
0: Customer payment
1: Manufacturer payment
 */
class VendorHardware extends AbstractModel
{
    /**
     * @var string Hardware id
     */
    public $HardwareId;

    /**
     * @var string Hardware Serial Number
     */
    public $SN;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Activation status, empty: all; 1: to be activated; 2: activated
     */
    public $Status;

    /**
     * @var string Activation time
     */
    public $ActiveTime;

    /**
     * @var string vendor remarks
     */
    public $Description;

    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var integer License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: When the device is paid by the tenant and inactive (not selected for monthly or permanent payment), this parameter returns 1, indicating only that the tenant has paid. This parameter will be subsequently deprecated. For new access, please use LicensePayMode and Payer.
     */
    public $LicenseChargingMode;

    /**
     * @var string Last online time
     */
    public $LastOnlineTime;

    /**
     * @var integer Authorization validity period
Monthly authorization
1: Permanent license
-Unknown
     */
    public $LicensePayMode;

    /**
     * @var integer Payer
0: Customer payment
1: Manufacturer payment
     */
    public $Payer;

    /**
     * @param string $HardwareId Hardware id
     * @param string $SN Hardware Serial Number
     * @param string $CreateTime Creation time.
     * @param integer $Status Activation status, empty: all; 1: to be activated; 2: activated
     * @param string $ActiveTime Activation time
     * @param string $Description vendor remarks
     * @param string $DeviceId Device ID
     * @param integer $LicenseChargingMode License billing mode: 1. Tenant monthly payment 2. Manufacturer monthly payment 3. Permanent license.
Note: When the device is paid by the tenant and inactive (not selected for monthly or permanent payment), this parameter returns 1, indicating only that the tenant has paid. This parameter will be subsequently deprecated. For new access, please use LicensePayMode and Payer.
     * @param string $LastOnlineTime Last online time
     * @param integer $LicensePayMode Authorization validity period
Monthly authorization
1: Permanent license
-Unknown
     * @param integer $Payer Payer
0: Customer payment
1: Manufacturer payment
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
        if (array_key_exists("HardwareId",$param) and $param["HardwareId"] !== null) {
            $this->HardwareId = $param["HardwareId"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }
    }
}
