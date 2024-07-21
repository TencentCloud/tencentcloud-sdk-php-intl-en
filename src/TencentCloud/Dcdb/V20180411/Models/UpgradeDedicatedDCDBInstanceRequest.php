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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDedicatedDCDBInstance request structure.
 *
 * @method string getUpgradeType() Obtain Upgrade type. Valid values: `ADD` (add a shard), `SPLIT` (split a shard), and `EXPAND` (Vertically expand a shard).
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade type. Valid values: `ADD` (add a shard), `SPLIT` (split a shard), and `EXPAND` (Vertically expand a shard).
 * @method string getInstanceId() Obtain Instance ID, such as dcdbt-mlfjm74h.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as dcdbt-mlfjm74h.
 * @method AddShardConfig getAddShardConfig() Obtain A parameter for adding shards when `UpgradeType` is `ADD`.
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) Set A parameter for adding shards when `UpgradeType` is `ADD`.
 * @method ExpandShardConfig getExpandShardConfig() Obtain A parameter for vertically expand a shard when `UpgradeType` is `EXPAND`.
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) Set A parameter for vertically expand a shard when `UpgradeType` is `EXPAND`.
 * @method SplitShardConfig getSplitShardConfig() Obtain A parameter for splitting a shard when `UpgradeType` is `SPLIT`.
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) Set A parameter for splitting a shard when `UpgradeType` is `SPLIT`.
 * @method integer getSwitchAutoRetry() Obtain Whether to automatically retry once when missing the switch time window. Valid values: `0` (No), `1` (Yes).
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) Set Whether to automatically retry once when missing the switch time window. Valid values: `0` (No), `1` (Yes).
 * @method string getSwitchStartTime() Obtain Switch start time
 * @method void setSwitchStartTime(string $SwitchStartTime) Set Switch start time
 * @method string getSwitchEndTime() Obtain Switch end time
 * @method void setSwitchEndTime(string $SwitchEndTime) Set Switch end time
 */
class UpgradeDedicatedDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Upgrade type. Valid values: `ADD` (add a shard), `SPLIT` (split a shard), and `EXPAND` (Vertically expand a shard).
     */
    public $UpgradeType;

    /**
     * @var string Instance ID, such as dcdbt-mlfjm74h.
     */
    public $InstanceId;

    /**
     * @var AddShardConfig A parameter for adding shards when `UpgradeType` is `ADD`.
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig A parameter for vertically expand a shard when `UpgradeType` is `EXPAND`.
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig A parameter for splitting a shard when `UpgradeType` is `SPLIT`.
     */
    public $SplitShardConfig;

    /**
     * @var integer Whether to automatically retry once when missing the switch time window. Valid values: `0` (No), `1` (Yes).
     */
    public $SwitchAutoRetry;

    /**
     * @var string Switch start time
     */
    public $SwitchStartTime;

    /**
     * @var string Switch end time
     */
    public $SwitchEndTime;

    /**
     * @param string $UpgradeType Upgrade type. Valid values: `ADD` (add a shard), `SPLIT` (split a shard), and `EXPAND` (Vertically expand a shard).
     * @param string $InstanceId Instance ID, such as dcdbt-mlfjm74h.
     * @param AddShardConfig $AddShardConfig A parameter for adding shards when `UpgradeType` is `ADD`.
     * @param ExpandShardConfig $ExpandShardConfig A parameter for vertically expand a shard when `UpgradeType` is `EXPAND`.
     * @param SplitShardConfig $SplitShardConfig A parameter for splitting a shard when `UpgradeType` is `SPLIT`.
     * @param integer $SwitchAutoRetry Whether to automatically retry once when missing the switch time window. Valid values: `0` (No), `1` (Yes).
     * @param string $SwitchStartTime Switch start time
     * @param string $SwitchEndTime Switch end time
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
        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddShardConfig",$param) and $param["AddShardConfig"] !== null) {
            $this->AddShardConfig = new AddShardConfig();
            $this->AddShardConfig->deserialize($param["AddShardConfig"]);
        }

        if (array_key_exists("ExpandShardConfig",$param) and $param["ExpandShardConfig"] !== null) {
            $this->ExpandShardConfig = new ExpandShardConfig();
            $this->ExpandShardConfig->deserialize($param["ExpandShardConfig"]);
        }

        if (array_key_exists("SplitShardConfig",$param) and $param["SplitShardConfig"] !== null) {
            $this->SplitShardConfig = new SplitShardConfig();
            $this->SplitShardConfig->deserialize($param["SplitShardConfig"]);
        }

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
