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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Clone task information.
 *
 * @method string getSrcInstanceId() Obtain ID of the original instance in a clone task
 * @method void setSrcInstanceId(string $SrcInstanceId) Set ID of the original instance in a clone task
 * @method string getDstInstanceId() Obtain ID of the cloned instance in a clone task
 * @method void setDstInstanceId(string $DstInstanceId) Set ID of the cloned instance in a clone task
 * @method integer getCloneJobId() Obtain Clone task ID
 * @method void setCloneJobId(integer $CloneJobId) Set Clone task ID
 * @method string getRollbackStrategy() Obtain The policy used in a clone task. Valid values: `timepoint` (roll back to a specific point in time), `backupset` (roll back by using a specific backup file).
 * @method void setRollbackStrategy(string $RollbackStrategy) Set The policy used in a clone task. Valid values: `timepoint` (roll back to a specific point in time), `backupset` (roll back by using a specific backup file).
 * @method string getRollbackTargetTime() Obtain The point in time to which the cloned instance will be rolled back
 * @method void setRollbackTargetTime(string $RollbackTargetTime) Set The point in time to which the cloned instance will be rolled back
 * @method string getStartTime() Obtain Task start time
 * @method void setStartTime(string $StartTime) Set Task start time
 * @method string getEndTime() Obtain Task end time
 * @method void setEndTime(string $EndTime) Set Task end time
 * @method string getTaskStatus() Obtain Task status. Valid values: `initial`, `running`, `wait_complete`, `success`, `failed`.
 * @method void setTaskStatus(string $TaskStatus) Set Task status. Valid values: `initial`, `running`, `wait_complete`, `success`, `failed`.
 * @method integer getNewRegionId() Obtain Clone instance region ID
 * @method void setNewRegionId(integer $NewRegionId) Set Clone instance region ID
 * @method integer getSrcRegionId() Obtain Source instance region ID
 * @method void setSrcRegionId(integer $SrcRegionId) Set Source instance region ID
 */
class CloneItem extends AbstractModel
{
    /**
     * @var string ID of the original instance in a clone task
     */
    public $SrcInstanceId;

    /**
     * @var string ID of the cloned instance in a clone task
     */
    public $DstInstanceId;

    /**
     * @var integer Clone task ID
     */
    public $CloneJobId;

    /**
     * @var string The policy used in a clone task. Valid values: `timepoint` (roll back to a specific point in time), `backupset` (roll back by using a specific backup file).
     */
    public $RollbackStrategy;

    /**
     * @var string The point in time to which the cloned instance will be rolled back
     */
    public $RollbackTargetTime;

    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var string Task end time
     */
    public $EndTime;

    /**
     * @var string Task status. Valid values: `initial`, `running`, `wait_complete`, `success`, `failed`.
     */
    public $TaskStatus;

    /**
     * @var integer Clone instance region ID
     */
    public $NewRegionId;

    /**
     * @var integer Source instance region ID
     */
    public $SrcRegionId;

    /**
     * @param string $SrcInstanceId ID of the original instance in a clone task
     * @param string $DstInstanceId ID of the cloned instance in a clone task
     * @param integer $CloneJobId Clone task ID
     * @param string $RollbackStrategy The policy used in a clone task. Valid values: `timepoint` (roll back to a specific point in time), `backupset` (roll back by using a specific backup file).
     * @param string $RollbackTargetTime The point in time to which the cloned instance will be rolled back
     * @param string $StartTime Task start time
     * @param string $EndTime Task end time
     * @param string $TaskStatus Task status. Valid values: `initial`, `running`, `wait_complete`, `success`, `failed`.
     * @param integer $NewRegionId Clone instance region ID
     * @param integer $SrcRegionId Source instance region ID
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("DstInstanceId",$param) and $param["DstInstanceId"] !== null) {
            $this->DstInstanceId = $param["DstInstanceId"];
        }

        if (array_key_exists("CloneJobId",$param) and $param["CloneJobId"] !== null) {
            $this->CloneJobId = $param["CloneJobId"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackTargetTime",$param) and $param["RollbackTargetTime"] !== null) {
            $this->RollbackTargetTime = $param["RollbackTargetTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("NewRegionId",$param) and $param["NewRegionId"] !== null) {
            $this->NewRegionId = $param["NewRegionId"];
        }

        if (array_key_exists("SrcRegionId",$param) and $param["SrcRegionId"] !== null) {
            $this->SrcRegionId = $param["SrcRegionId"];
        }
    }
}
