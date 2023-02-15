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
 * UpgradeHourDCDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID to be upgraded in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID to be upgraded in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
 * @method string getUpgradeType() Obtain Upgrade type. Valid values: 
<li> `ADD`: Add a new shard </li> 
 <li> `EXPAND`: Upgrade the existing shads</li> 
 <li> `SPLIT`: Split data of the existing shads to the new ones</li>
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade type. Valid values: 
<li> `ADD`: Add a new shard </li> 
 <li> `EXPAND`: Upgrade the existing shads</li> 
 <li> `SPLIT`: Split data of the existing shads to the new ones</li>
 * @method AddShardConfig getAddShardConfig() Obtain Add shards when `UpgradeType` is `ADD`.
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) Set Add shards when `UpgradeType` is `ADD`.
 * @method ExpandShardConfig getExpandShardConfig() Obtain Expand shard when `UpgradeType` is `EXPAND`.
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) Set Expand shard when `UpgradeType` is `EXPAND`.
 * @method SplitShardConfig getSplitShardConfig() Obtain Split shard when `UpgradeType` is `SPLIT`.
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) Set Split shard when `UpgradeType` is `SPLIT`.
 * @method string getSwitchStartTime() Obtain Switch start time in the format of "2019-12-12 07:00:00", which is no less than one hour and within 3 days from the current time.
 * @method void setSwitchStartTime(string $SwitchStartTime) Set Switch start time in the format of "2019-12-12 07:00:00", which is no less than one hour and within 3 days from the current time.
 * @method string getSwitchEndTime() Obtain Switch end time in the format of "2019-12-12 07:15:00", which must be later than the start time.
 * @method void setSwitchEndTime(string $SwitchEndTime) Set Switch end time in the format of "2019-12-12 07:15:00", which must be later than the start time.
 * @method integer getSwitchAutoRetry() Obtain Whether to retry automatically. Valid values: `0` (no), `1` (yes).
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) Set Whether to retry automatically. Valid values: `0` (no), `1` (yes).
 * @method array getZones() Obtain The list of new AZs specified in deployment modification. The first one is the source AZ, and the rest are replica AZs.
 * @method void setZones(array $Zones) Set The list of new AZs specified in deployment modification. The first one is the source AZ, and the rest are replica AZs.
 */
class UpgradeHourDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID to be upgraded in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
     */
    public $InstanceId;

    /**
     * @var string Upgrade type. Valid values: 
<li> `ADD`: Add a new shard </li> 
 <li> `EXPAND`: Upgrade the existing shads</li> 
 <li> `SPLIT`: Split data of the existing shads to the new ones</li>
     */
    public $UpgradeType;

    /**
     * @var AddShardConfig Add shards when `UpgradeType` is `ADD`.
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig Expand shard when `UpgradeType` is `EXPAND`.
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig Split shard when `UpgradeType` is `SPLIT`.
     */
    public $SplitShardConfig;

    /**
     * @var string Switch start time in the format of "2019-12-12 07:00:00", which is no less than one hour and within 3 days from the current time.
     */
    public $SwitchStartTime;

    /**
     * @var string Switch end time in the format of "2019-12-12 07:15:00", which must be later than the start time.
     */
    public $SwitchEndTime;

    /**
     * @var integer Whether to retry automatically. Valid values: `0` (no), `1` (yes).
     */
    public $SwitchAutoRetry;

    /**
     * @var array The list of new AZs specified in deployment modification. The first one is the source AZ, and the rest are replica AZs.
     */
    public $Zones;

    /**
     * @param string $InstanceId Instance ID to be upgraded in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
     * @param string $UpgradeType Upgrade type. Valid values: 
<li> `ADD`: Add a new shard </li> 
 <li> `EXPAND`: Upgrade the existing shads</li> 
 <li> `SPLIT`: Split data of the existing shads to the new ones</li>
     * @param AddShardConfig $AddShardConfig Add shards when `UpgradeType` is `ADD`.
     * @param ExpandShardConfig $ExpandShardConfig Expand shard when `UpgradeType` is `EXPAND`.
     * @param SplitShardConfig $SplitShardConfig Split shard when `UpgradeType` is `SPLIT`.
     * @param string $SwitchStartTime Switch start time in the format of "2019-12-12 07:00:00", which is no less than one hour and within 3 days from the current time.
     * @param string $SwitchEndTime Switch end time in the format of "2019-12-12 07:15:00", which must be later than the start time.
     * @param integer $SwitchAutoRetry Whether to retry automatically. Valid values: `0` (no), `1` (yes).
     * @param array $Zones The list of new AZs specified in deployment modification. The first one is the source AZ, and the rest are replica AZs.
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

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
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

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
