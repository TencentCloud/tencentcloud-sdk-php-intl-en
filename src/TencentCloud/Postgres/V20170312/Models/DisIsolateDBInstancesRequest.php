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
 * DisIsolateDBInstances request structure.
 *
 * @method array getDBInstanceIdSet() Obtain Resource ID list
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set Resource ID list
 * @method integer getPeriod() Obtain The valid period (in months) of the monthly-subscribed instance when removing it from isolation
 * @method void setPeriod(integer $Period) Set The valid period (in months) of the monthly-subscribed instance when removing it from isolation
 * @method boolean getAutoVoucher() Obtain Whether to use vouchers
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to use vouchers
 * @method array getVoucherIds() Obtain Voucher ID list
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list
 */
class DisIsolateDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Resource ID list
     */
    public $DBInstanceIdSet;

    /**
     * @var integer The valid period (in months) of the monthly-subscribed instance when removing it from isolation
     */
    public $Period;

    /**
     * @var boolean Whether to use vouchers
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list
     */
    public $VoucherIds;

    /**
     * @param array $DBInstanceIdSet Resource ID list
     * @param integer $Period The valid period (in months) of the monthly-subscribed instance when removing it from isolation
     * @param boolean $AutoVoucher Whether to use vouchers
     * @param array $VoucherIds Voucher ID list
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
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
