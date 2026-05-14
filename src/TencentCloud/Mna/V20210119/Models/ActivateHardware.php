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
 * Activate device
 *
 * @method string getVendor() Obtain Vendor name
 * @method void setVendor(string $Vendor) Set Vendor name
 * @method string getSN() Obtain Device SN serial number
 * @method void setSN(string $SN) Set Device SN serial number
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method string getDataKey() Obtain device key
 * @method void setDataKey(string $DataKey) Set device key
 * @method integer getAccessScope() Obtain Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. By default if left blank, public cloud gateway is selected. Specific meaning: Public cloud gateway: device can only integrate with public cloud gateway (nearby access). Private gateway: device can only integrate with private gateway that has been launched (nearby access or fixed ip). Public cloud gateway and private gateway: device can also integrate with public cloud gateway and private gateway that has been launched (nearby access or fixed ip).
 * @method void setAccessScope(integer $AccessScope) Set Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. By default if left blank, public cloud gateway is selected. Specific meaning: Public cloud gateway: device can only integrate with public cloud gateway (nearby access). Private gateway: device can only integrate with private gateway that has been launched (nearby access or fixed ip). Public cloud gateway and private gateway: device can also integrate with public cloud gateway and private gateway that has been launched (nearby access or fixed ip).
 * @method integer getLicensePayMode() Obtain When the payer is the tenant, the tenant license payment method is available.
Monthly authorization
1: Permanent license
If not passed, it defaults to monthly authorization.
This parameter is invalid when the manufacturer is the payer.

 * @method void setLicensePayMode(integer $LicensePayMode) Set When the payer is the tenant, the tenant license payment method is available.
Monthly authorization
1: Permanent license
If not passed, it defaults to monthly authorization.
This parameter is invalid when the manufacturer is the payer.

 * @method string getGroupId() Obtain device group ID
 * @method void setGroupId(string $GroupId) Set device group ID
 * @method string getGroupName() Obtain Device group name. Reserved parameter. GroupId must be imported when grouping is required.
 * @method void setGroupName(string $GroupName) Set Device group name. Reserved parameter. GroupId must be imported when grouping is required.
 * @method integer getFlowTrunc() Obtain No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
 * @method void setFlowTrunc(integer $FlowTrunc) Set No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
 * @method string getDeviceId() Obtain Device ID after activation
 * @method void setDeviceId(string $DeviceId) Set Device ID after activation
 */
class ActivateHardware extends AbstractModel
{
    /**
     * @var string Vendor name
     */
    public $Vendor;

    /**
     * @var string Device SN serial number
     */
    public $SN;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var string device key
     */
    public $DataKey;

    /**
     * @var integer Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. By default if left blank, public cloud gateway is selected. Specific meaning: Public cloud gateway: device can only integrate with public cloud gateway (nearby access). Private gateway: device can only integrate with private gateway that has been launched (nearby access or fixed ip). Public cloud gateway and private gateway: device can also integrate with public cloud gateway and private gateway that has been launched (nearby access or fixed ip).
     */
    public $AccessScope;

    /**
     * @var integer When the payer is the tenant, the tenant license payment method is available.
Monthly authorization
1: Permanent license
If not passed, it defaults to monthly authorization.
This parameter is invalid when the manufacturer is the payer.

     */
    public $LicensePayMode;

    /**
     * @var string device group ID
     */
    public $GroupId;

    /**
     * @var string Device group name. Reserved parameter. GroupId must be imported when grouping is required.
     */
    public $GroupName;

    /**
     * @var integer No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
     */
    public $FlowTrunc;

    /**
     * @var string Device ID after activation
     */
    public $DeviceId;

    /**
     * @param string $Vendor Vendor name
     * @param string $SN Device SN serial number
     * @param string $DeviceName Device name.
     * @param string $Description Remarks
     * @param string $DataKey device key
     * @param integer $AccessScope Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. By default if left blank, public cloud gateway is selected. Specific meaning: Public cloud gateway: device can only integrate with public cloud gateway (nearby access). Private gateway: device can only integrate with private gateway that has been launched (nearby access or fixed ip). Public cloud gateway and private gateway: device can also integrate with public cloud gateway and private gateway that has been launched (nearby access or fixed ip).
     * @param integer $LicensePayMode When the payer is the tenant, the tenant license payment method is available.
Monthly authorization
1: Permanent license
If not passed, it defaults to monthly authorization.
This parameter is invalid when the manufacturer is the payer.

     * @param string $GroupId device group ID
     * @param string $GroupName Device group name. Reserved parameter. GroupId must be imported when grouping is required.
     * @param integer $FlowTrunc No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
     * @param string $DeviceId Device ID after activation
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DataKey",$param) and $param["DataKey"] !== null) {
            $this->DataKey = $param["DataKey"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
