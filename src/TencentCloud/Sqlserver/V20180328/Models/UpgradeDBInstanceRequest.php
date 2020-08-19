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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-j8kv137v
 * @method integer getMemory() Obtain Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
 * @method void setMemory(integer $Memory) Set Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
 * @method integer getStorage() Obtain Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
 * @method void setStorage(integer $Storage) Set Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
 * @method array getVoucherIds() Obtain Voucher ID (currently, only one voucher can be used per order)
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID (currently, only one voucher can be used per order)
 * @method integer getCpu() Obtain The number of CUP cores after the instance is upgraded.
 * @method void setCpu(integer $Cpu) Set The number of CUP cores after the instance is upgraded.
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var integer Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
     */
    public $Memory;

    /**
     * @var integer Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
     */
    public $Storage;

    /**
     * @var integer Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID (currently, only one voucher can be used per order)
     */
    public $VoucherIds;

    /**
     * @var integer The number of CUP cores after the instance is upgraded.
     */
    public $Cpu;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-j8kv137v
     * @param integer $Memory Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
     * @param integer $Storage Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
     * @param integer $AutoVoucher Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
     * @param array $VoucherIds Voucher ID (currently, only one voucher can be used per order)
     * @param integer $Cpu The number of CUP cores after the instance is upgraded.
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
