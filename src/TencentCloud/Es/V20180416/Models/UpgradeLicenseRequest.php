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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeLicense request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getLicenseType() Obtain License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
 * @method void setLicenseType(string $LicenseType) Set License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
 * @method array getVoucherIds() Obtain List of voucher IDs (only one voucher can be specified at a time currently)
 * @method void setVoucherIds(array $VoucherIds) Set List of voucher IDs (only one voucher can be specified at a time currently)
 * @method integer getBasicSecurityType() Obtain Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
 * @method boolean getForceRestart() Obtain Whether to force restart <li>true: yes </li><li>false: no </li>Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart <li>true: yes </li><li>false: no </li>Default value: false
 */
class UpgradeLicenseRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
     */
    public $LicenseType;

    /**
     * @var integer Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var array List of voucher IDs (only one voucher can be specified at a time currently)
     */
    public $VoucherIds;

    /**
     * @var integer Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
     */
    public $BasicSecurityType;

    /**
     * @var boolean Whether to force restart <li>true: yes </li><li>false: no </li>Default value: false
     */
    public $ForceRestart;

    /**
     * @param string $InstanceId Instance ID
     * @param string $LicenseType License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
     * @param integer $AutoVoucher Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
     * @param array $VoucherIds List of voucher IDs (only one voucher can be specified at a time currently)
     * @param integer $BasicSecurityType Whether to enable X-Pack security authentication in Basic Edition 6.8 (and above) <li>1: disabled </li><li>2: enabled</li>
     * @param boolean $ForceRestart Whether to force restart <li>true: yes </li><li>false: no </li>Default value: false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }
    }
}
