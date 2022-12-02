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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the migration task execution process
 *
 * @method integer getStepAll() Obtain Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepAll(integer $StepAll) Set Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepNow() Obtain Current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepNow(integer $StepNow) Set Current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMasterSlaveDistance() Obtain Source-replica lag in MB. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) Set Source-replica lag in MB. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSecondsBehindMaster() Obtain Source-replica lag in seconds. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) Set Source-replica lag in seconds. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getStepInfo() Obtain Step information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepInfo(array $StepInfo) Set Step information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MigrateDetailInfo extends AbstractModel
{
    /**
     * @var integer Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepAll;

    /**
     * @var integer Current step
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepNow;

    /**
     * @var integer Source-replica lag in MB. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterSlaveDistance;

    /**
     * @var integer Source-replica lag in seconds. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecondsBehindMaster;

    /**
     * @var array Step information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepInfo;

    /**
     * @param integer $StepAll Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepNow Current step
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MasterSlaveDistance Source-replica lag in MB. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SecondsBehindMaster Source-replica lag in seconds. This parameter takes effect only when the task is normal and is in the last step of migration or sync (binlog sync). If it is invalid, `-1` will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $StepInfo Step information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("MasterSlaveDistance",$param) and $param["MasterSlaveDistance"] !== null) {
            $this->MasterSlaveDistance = $param["MasterSlaveDistance"];
        }

        if (array_key_exists("SecondsBehindMaster",$param) and $param["SecondsBehindMaster"] !== null) {
            $this->SecondsBehindMaster = $param["SecondsBehindMaster"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new StepDetailInfo();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }
    }
}
