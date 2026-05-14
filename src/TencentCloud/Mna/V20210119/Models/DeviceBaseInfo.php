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
 * basic device information
 *
 * @method string getDeviceId() Obtain Device unique ID
 * @method void setDeviceId(string $DeviceId) Set Device unique ID
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getCreateTime() Obtain The time when the device is created, in ms.
 * @method void setCreateTime(string $CreateTime) Set The time when the device is created, in ms.
 * @method string getLastTime() Obtain Last online time of the device, in ms.
 * @method void setLastTime(string $LastTime) Set Last online time of the device, in ms.
 * @method string getRemark() Obtain Device remark
 * @method void setRemark(string $Remark) Set Device remark
 * @method integer getAccessScope() Obtain Access environment. 0: Public cloud gateway; 1: Private gateway; 2: Public cloud gateway and private gateway. Default is public cloud gateway. Specific meaning: Public cloud gateway: The device can only connect to the public cloud gateway (nearby access). Private gateway: The device can only connect to the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also connect to both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).
 * @method void setAccessScope(integer $AccessScope) Set Access environment. 0: Public cloud gateway; 1: Private gateway; 2: Public cloud gateway and private gateway. Default is public cloud gateway. Specific meaning: Public cloud gateway: The device can only connect to the public cloud gateway (nearby access). Private gateway: The device can only connect to the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also connect to both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).
 * @method integer getLicensePayMode() Obtain Authorization validity period of license 0: Monthly authorization 1: Permanent license
 * @method void setLicensePayMode(integer $LicensePayMode) Set Authorization validity period of license 0: Monthly authorization 1: Permanent license
 * @method integer getPayer() Obtain Payer 0: Manufacturer payment 1: Customer payment
 * @method void setPayer(integer $Payer) Set Payer 0: Manufacturer payment 1: Customer payment
 * @method string getGroupId() Obtain device group ID
 * @method void setGroupId(string $GroupId) Set device group ID
 * @method string getGroupName() Obtain Device group name
 * @method void setGroupName(string $GroupName) Set Device group name
 * @method integer getFlowTrunc() Obtain No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
 * @method void setFlowTrunc(integer $FlowTrunc) Set No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
 * @method string getSn() Obtain Device sn
 * @method void setSn(string $Sn) Set Device sn
 * @method string getVendor() Obtain manufacturer
 * @method void setVendor(string $Vendor) Set manufacturer
 */
class DeviceBaseInfo extends AbstractModel
{
    /**
     * @var string Device unique ID
     */
    public $DeviceId;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string The time when the device is created, in ms.
     */
    public $CreateTime;

    /**
     * @var string Last online time of the device, in ms.
     */
    public $LastTime;

    /**
     * @var string Device remark
     */
    public $Remark;

    /**
     * @var integer Access environment. 0: Public cloud gateway; 1: Private gateway; 2: Public cloud gateway and private gateway. Default is public cloud gateway. Specific meaning: Public cloud gateway: The device can only connect to the public cloud gateway (nearby access). Private gateway: The device can only connect to the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also connect to both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).
     */
    public $AccessScope;

    /**
     * @var integer Authorization validity period of license 0: Monthly authorization 1: Permanent license
     */
    public $LicensePayMode;

    /**
     * @var integer Payer 0: Manufacturer payment 1: Customer payment
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
     * @var string Device sn
     */
    public $Sn;

    /**
     * @var string manufacturer
     */
    public $Vendor;

    /**
     * @param string $DeviceId Device unique ID
     * @param string $DeviceName Device name.
     * @param string $CreateTime The time when the device is created, in ms.
     * @param string $LastTime Last online time of the device, in ms.
     * @param string $Remark Device remark
     * @param integer $AccessScope Access environment. 0: Public cloud gateway; 1: Private gateway; 2: Public cloud gateway and private gateway. Default is public cloud gateway. Specific meaning: Public cloud gateway: The device can only connect to the public cloud gateway (nearby access). Private gateway: The device can only connect to the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also connect to both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).
     * @param integer $LicensePayMode Authorization validity period of license 0: Monthly authorization 1: Permanent license
     * @param integer $Payer Payer 0: Manufacturer payment 1: Customer payment
     * @param string $GroupId device group ID
     * @param string $GroupName Device group name
     * @param integer $FlowTrunc No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
     * @param string $Sn Device sn
     * @param string $Vendor manufacturer
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
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

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }
    }
}
