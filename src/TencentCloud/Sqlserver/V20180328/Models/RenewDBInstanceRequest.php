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
 * RenewDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, mssql-j8kv137v.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, mssql-j8kv137v.
 * @method integer getPeriod() Obtain Renewal duration, in months. Value range: 1~48. Default value: 1.
 * @method void setPeriod(integer $Period) Set Renewal duration, in months. Value range: 1~48. Default value: 1.
 * @method integer getAutoVoucher() Obtain Whether to automatically use voucher. 0: no, 1: yes. Default value: no.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use voucher. 0: no, 1: yes. Default value: no.
 * @method array getVoucherIds() Obtain Array of voucher IDs (currently, only one voucher can be used per order).
 * @method void setVoucherIds(array $VoucherIds) Set Array of voucher IDs (currently, only one voucher can be used per order).
 * @method integer getAutoRenewFlag() Obtain Renewal flag. 0: normal renewal; 1: automatic renewal. This parameter is valid only for pay-as-you-go instances changing to monthly subscription ones.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal flag. 0: normal renewal; 1: automatic renewal. This parameter is valid only for pay-as-you-go instances changing to monthly subscription ones.
 */
class RenewDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, mssql-j8kv137v.
     */
    public $InstanceId;

    /**
     * @var integer Renewal duration, in months. Value range: 1~48. Default value: 1.
     */
    public $Period;

    /**
     * @var integer Whether to automatically use voucher. 0: no, 1: yes. Default value: no.
     */
    public $AutoVoucher;

    /**
     * @var array Array of voucher IDs (currently, only one voucher can be used per order).
     */
    public $VoucherIds;

    /**
     * @var integer Renewal flag. 0: normal renewal; 1: automatic renewal. This parameter is valid only for pay-as-you-go instances changing to monthly subscription ones.
     */
    public $AutoRenewFlag;

    /**
     * @param string $InstanceId Instance ID. For example, mssql-j8kv137v.
     * @param integer $Period Renewal duration, in months. Value range: 1~48. Default value: 1.
     * @param integer $AutoVoucher Whether to automatically use voucher. 0: no, 1: yes. Default value: no.
     * @param array $VoucherIds Array of voucher IDs (currently, only one voucher can be used per order).
     * @param integer $AutoRenewFlag Renewal flag. 0: normal renewal; 1: automatic renewal. This parameter is valid only for pay-as-you-go instances changing to monthly subscription ones.
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
