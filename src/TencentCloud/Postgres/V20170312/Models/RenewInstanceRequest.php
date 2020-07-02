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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewInstance request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of `postgres-6fego161`
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of `postgres-6fego161`
 * @method integer getPeriod() Obtain Renewal duration in months
 * @method void setPeriod(integer $Period) Set Renewal duration in months
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. 1: yes, 0: no. Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. 1: yes, 0: no. Default value: 0
 * @method array getVoucherIds() Obtain Voucher ID list (only one voucher can be specified currently)
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list (only one voucher can be specified currently)
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `postgres-6fego161`
     */
    public $DBInstanceId;

    /**
     * @var integer Renewal duration in months
     */
    public $Period;

    /**
     * @var integer Whether to automatically use vouchers. 1: yes, 0: no. Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list (only one voucher can be specified currently)
     */
    public $VoucherIds;

    /**
     * @param string $DBInstanceId Instance ID in the format of `postgres-6fego161`
     * @param integer $Period Renewal duration in months
     * @param integer $AutoVoucher Whether to automatically use vouchers. 1: yes, 0: no. Default value: 0
     * @param array $VoucherIds Voucher ID list (only one voucher can be specified currently)
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
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
    }
}
