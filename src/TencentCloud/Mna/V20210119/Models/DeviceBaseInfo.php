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
 * @method string getDeviceId() Obtain <p>Unique ID of the device</p>
 * @method void setDeviceId(string $DeviceId) Set <p>Unique ID of the device</p>
 * @method string getDeviceName() Obtain <p>Device name</p>
 * @method void setDeviceName(string $DeviceName) Set <p>Device name</p>
 * @method string getCreateTime() Obtain <p>The time when the device is created, in ms</p>
 * @method void setCreateTime(string $CreateTime) Set <p>The time when the device is created, in ms</p>
 * @method string getLastTime() Obtain <p>Last online time of the device, in ms</p>
 * @method void setLastTime(string $LastTime) Set <p>Last online time of the device, in ms</p>
 * @method string getRemark() Obtain <p>Remark of the device</p>
 * @method void setRemark(string $Remark) Set <p>Remark of the device</p>
 * @method integer getAccessScope() Obtain <p>Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. Defaults to public cloud gateway. Specific meaning: Public cloud gateway: The device can only access the public cloud gateway (nearby access). Private gateway: The device can only access the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also access both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).</p>
 * @method void setAccessScope(integer $AccessScope) Set <p>Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. Defaults to public cloud gateway. Specific meaning: Public cloud gateway: The device can only access the public cloud gateway (nearby access). Private gateway: The device can only access the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also access both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).</p>
 * @method integer getLicensePayMode() Obtain <p>license authorization validity period 0: monthly authorization 1: permanent license</p>
 * @method void setLicensePayMode(integer $LicensePayMode) Set <p>license authorization validity period 0: monthly authorization 1: permanent license</p>
 * @method integer getPayer() Obtain <p>Payment party 0: Manufacturer pays 1: Customer pays</p>
 * @method void setPayer(integer $Payer) Set <p>Payment party 0: Manufacturer pays 1: Customer pays</p>
 * @method string getGroupId() Obtain <p>device group ID</p>
 * @method void setGroupId(string $GroupId) Set <p>device group ID</p>
 * @method string getGroupName() Obtain <p>Device group name</p>
 * @method void setGroupName(string $GroupName) Set <p>Device group name</p>
 * @method integer getFlowTrunc() Obtain <p>Device data transfer plan processing method, 0: pay-as-you-go, 1: truncate acceleration</p>
 * @method void setFlowTrunc(integer $FlowTrunc) Set <p>Device data transfer plan processing method, 0: pay-as-you-go, 1: truncate acceleration</p>
 * @method string getSn() Obtain <p>Device sn</p>
 * @method void setSn(string $Sn) Set <p>Device sn</p>
 * @method string getVendor() Obtain <p>Manufacturer</p>
 * @method void setVendor(string $Vendor) Set <p>Manufacturer</p>
 * @method array getAllowedRegions() Obtain <p>Access region list.</p>
 * @method void setAllowedRegions(array $AllowedRegions) Set <p>Access region list.</p>
 */
class DeviceBaseInfo extends AbstractModel
{
    /**
     * @var string <p>Unique ID of the device</p>
     */
    public $DeviceId;

    /**
     * @var string <p>Device name</p>
     */
    public $DeviceName;

    /**
     * @var string <p>The time when the device is created, in ms</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last online time of the device, in ms</p>
     */
    public $LastTime;

    /**
     * @var string <p>Remark of the device</p>
     */
    public $Remark;

    /**
     * @var integer <p>Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. Defaults to public cloud gateway. Specific meaning: Public cloud gateway: The device can only access the public cloud gateway (nearby access). Private gateway: The device can only access the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also access both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).</p>
     */
    public $AccessScope;

    /**
     * @var integer <p>license authorization validity period 0: monthly authorization 1: permanent license</p>
     */
    public $LicensePayMode;

    /**
     * @var integer <p>Payment party 0: Manufacturer pays 1: Customer pays</p>
     */
    public $Payer;

    /**
     * @var string <p>device group ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>Device group name</p>
     */
    public $GroupName;

    /**
     * @var integer <p>Device data transfer plan processing method, 0: pay-as-you-go, 1: truncate acceleration</p>
     */
    public $FlowTrunc;

    /**
     * @var string <p>Device sn</p>
     */
    public $Sn;

    /**
     * @var string <p>Manufacturer</p>
     */
    public $Vendor;

    /**
     * @var array <p>Access region list.</p>
     */
    public $AllowedRegions;

    /**
     * @param string $DeviceId <p>Unique ID of the device</p>
     * @param string $DeviceName <p>Device name</p>
     * @param string $CreateTime <p>The time when the device is created, in ms</p>
     * @param string $LastTime <p>Last online time of the device, in ms</p>
     * @param string $Remark <p>Remark of the device</p>
     * @param integer $AccessScope <p>Access environment. 0: public cloud gateway; 1: private gateway; 2: public cloud gateway and private gateway. Defaults to public cloud gateway. Specific meaning: Public cloud gateway: The device can only access the public cloud gateway (nearby access). Private gateway: The device can only access the already launched private gateway (nearby access or fixed ip access). Public cloud gateway and private gateway: The device can also access both the public cloud gateway and the already launched private gateway (nearby access or fixed ip access).</p>
     * @param integer $LicensePayMode <p>license authorization validity period 0: monthly authorization 1: permanent license</p>
     * @param integer $Payer <p>Payment party 0: Manufacturer pays 1: Customer pays</p>
     * @param string $GroupId <p>device group ID</p>
     * @param string $GroupName <p>Device group name</p>
     * @param integer $FlowTrunc <p>Device data transfer plan processing method, 0: pay-as-you-go, 1: truncate acceleration</p>
     * @param string $Sn <p>Device sn</p>
     * @param string $Vendor <p>Manufacturer</p>
     * @param array $AllowedRegions <p>Access region list.</p>
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

        if (array_key_exists("AllowedRegions",$param) and $param["AllowedRegions"] !== null) {
            $this->AllowedRegions = $param["AllowedRegions"];
        }
    }
}
