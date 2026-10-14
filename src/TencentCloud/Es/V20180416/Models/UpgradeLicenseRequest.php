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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeLicense request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getLicenseType() Obtain License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum
 * @method void setLicenseType(string $LicenseType) Set License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum
 * @method integer getAutoVoucher() Obtain Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.
 * @method array getVoucherIds() Obtain Voucher ID list. Only one voucher can be specified.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Only one voucher can be specified.
 * @method integer getBasicSecurityType() Obtain Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li><li>If no parameter is passed, the original status is maintained by default. When passing a parameter, note that it can only change from not enabled to enabled, and cannot change from enabled to not enabled</li>
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li><li>If no parameter is passed, the original status is maintained by default. When passing a parameter, note that it can only change from not enabled to enabled, and cannot change from enabled to not enabled</li>
 * @method boolean getForceRestart() Obtain Whether to force restart <li>true: force restart</li><li>false: do not force restart</li> Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart <li>true: force restart</li><li>false: do not force restart</li> Default value: false
 */
class UpgradeLicenseRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum
     */
    public $LicenseType;

    /**
     * @var integer Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. Only one voucher can be specified.
     */
    public $VoucherIds;

    /**
     * @var integer Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li><li>If no parameter is passed, the original status is maintained by default. When passing a parameter, note that it can only change from not enabled to enabled, and cannot change from enabled to not enabled</li>
     */
    public $BasicSecurityType;

    /**
     * @var boolean Whether to force restart <li>true: force restart</li><li>false: do not force restart</li> Default value: false
     */
    public $ForceRestart;

    /**
     * @param string $InstanceId Instance ID
     * @param string $LicenseType License type<li>oss: open source edition</li><li>basic: basic version</li><li>platinum: platinum version</li>Default value: platinum
     * @param integer $AutoVoucher Indicates whether to use vouchers automatically<li>0: Do not use automatically.</li><li>1: Use automatically.</li>Default value: 0.
     * @param array $VoucherIds Voucher ID list. Only one voucher can be specified.
     * @param integer $BasicSecurityType Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li><li>If no parameter is passed, the original status is maintained by default. When passing a parameter, note that it can only change from not enabled to enabled, and cannot change from enabled to not enabled</li>
     * @param boolean $ForceRestart Whether to force restart <li>true: force restart</li><li>false: do not force restart</li> Default value: false
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
