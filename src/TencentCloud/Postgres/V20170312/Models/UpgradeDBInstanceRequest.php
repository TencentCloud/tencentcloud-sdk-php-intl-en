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
 * UpgradeDBInstance request structure.
 *
 * @method integer getMemory() Obtain Instance memory size in GB after upgrade
 * @method void setMemory(integer $Memory) Set Instance memory size in GB after upgrade
 * @method integer getStorage() Obtain Instance disk size in GB after upgrade
 * @method void setStorage(integer $Storage) Set Instance disk size in GB after upgrade
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-lnp6j617
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. 1: yes, 0: no. Default value: no
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. 1: yes, 0: no. Default value: no
 * @method array getVoucherIds() Obtain Voucher ID list (only one voucher can be specified currently)
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list (only one voucher can be specified currently)
 * @method integer getActivityId() Obtain Activity ID
 * @method void setActivityId(integer $ActivityId) Set Activity ID
 * @method integer getSwitchTag() Obtain Switch time after instance configurations are modified. Valid values: `0` (switch immediately), `1` (switch at specified time). Default value: `0`
 * @method void setSwitchTag(integer $SwitchTag) Set Switch time after instance configurations are modified. Valid values: `0` (switch immediately), `1` (switch at specified time). Default value: `0`
 * @method string getSwitchStartTime() Obtain The earliest time to start a switch
 * @method void setSwitchStartTime(string $SwitchStartTime) Set The earliest time to start a switch
 * @method string getSwitchEndTime() Obtain The latest time to start a switch
 * @method void setSwitchEndTime(string $SwitchEndTime) Set The latest time to start a switch
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer Instance memory size in GB after upgrade
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB after upgrade
     */
    public $Storage;

    /**
     * @var string Instance ID in the format of postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var integer Whether to automatically use vouchers. 1: yes, 0: no. Default value: no
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list (only one voucher can be specified currently)
     */
    public $VoucherIds;

    /**
     * @var integer Activity ID
     */
    public $ActivityId;

    /**
     * @var integer Switch time after instance configurations are modified. Valid values: `0` (switch immediately), `1` (switch at specified time). Default value: `0`
     */
    public $SwitchTag;

    /**
     * @var string The earliest time to start a switch
     */
    public $SwitchStartTime;

    /**
     * @var string The latest time to start a switch
     */
    public $SwitchEndTime;

    /**
     * @param integer $Memory Instance memory size in GB after upgrade
     * @param integer $Storage Instance disk size in GB after upgrade
     * @param string $DBInstanceId Instance ID in the format of postgres-lnp6j617
     * @param integer $AutoVoucher Whether to automatically use vouchers. 1: yes, 0: no. Default value: no
     * @param array $VoucherIds Voucher ID list (only one voucher can be specified currently)
     * @param integer $ActivityId Activity ID
     * @param integer $SwitchTag Switch time after instance configurations are modified. Valid values: `0` (switch immediately), `1` (switch at specified time). Default value: `0`
     * @param string $SwitchStartTime The earliest time to start a switch
     * @param string $SwitchEndTime The latest time to start a switch
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
