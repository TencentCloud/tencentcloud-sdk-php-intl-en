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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getCpu() Obtain Database CPU
 * @method void setCpu(integer $Cpu) Set Database CPU
 * @method integer getMemory() Obtain Database memory in GB
 * @method void setMemory(integer $Memory) Set Database memory in GB
 * @method string getUpgradeType() Obtain Upgrade type. Valid values: upgradeImmediate, upgradeInMaintain
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade type. Valid values: upgradeImmediate, upgradeInMaintain
 * @method integer getStorageLimit() Obtain This parameter has been disused.
 * @method void setStorageLimit(integer $StorageLimit) Set This parameter has been disused.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
 * @method string getDbType() Obtain This parameter has been disused.
 * @method void setDbType(string $DbType) Set This parameter has been disused.
 * @method integer getDealMode() Obtain Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
 * @method void setDealMode(integer $DealMode) Set Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
 * @method string getUpgradeMode() Obtain Valid values: `NormalUpgrade` (Normal mode), `FastUpgrade` (QuickChange). If the system detects that the configuration modification process will cause a momentary disconnection, the process will be terminated.
 * @method void setUpgradeMode(string $UpgradeMode) Set Valid values: `NormalUpgrade` (Normal mode), `FastUpgrade` (QuickChange). If the system detects that the configuration modification process will cause a momentary disconnection, the process will be terminated.
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Database CPU
     */
    public $Cpu;

    /**
     * @var integer Database memory in GB
     */
    public $Memory;

    /**
     * @var string Upgrade type. Valid values: upgradeImmediate, upgradeInMaintain
     */
    public $UpgradeType;

    /**
     * @var integer This parameter has been disused.
     */
    public $StorageLimit;

    /**
     * @var integer Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var string This parameter has been disused.
     */
    public $DbType;

    /**
     * @var integer Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
     */
    public $DealMode;

    /**
     * @var string Valid values: `NormalUpgrade` (Normal mode), `FastUpgrade` (QuickChange). If the system detects that the configuration modification process will cause a momentary disconnection, the process will be terminated.
     */
    public $UpgradeMode;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $Cpu Database CPU
     * @param integer $Memory Database memory in GB
     * @param string $UpgradeType Upgrade type. Valid values: upgradeImmediate, upgradeInMaintain
     * @param integer $StorageLimit This parameter has been disused.
     * @param integer $AutoVoucher Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
     * @param string $DbType This parameter has been disused.
     * @param integer $DealMode Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
     * @param string $UpgradeMode Valid values: `NormalUpgrade` (Normal mode), `FastUpgrade` (QuickChange). If the system detects that the configuration modification process will cause a momentary disconnection, the process will be terminated.
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("UpgradeMode",$param) and $param["UpgradeMode"] !== null) {
            $this->UpgradeMode = $param["UpgradeMode"];
        }
    }
}
