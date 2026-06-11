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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index rebuild task information
 *
 * @method string getTaskId() Obtain Reindexing task ID
 * @method void setTaskId(string $TaskId) Set Reindexing task ID
 * @method integer getStatus() Obtain Current status of the reindexing task. 0: reindexing task created; 1: creating reindexing resources; 2: reindexing resources created; 3: reindexing; 4: paused; 5: reindexing completed; 6: reindexing succeeded (searchable); 7: reindexing failed; 8: revoked; 9: deleting the metadata and index.
 * @method void setStatus(integer $Status) Set Current status of the reindexing task. 0: reindexing task created; 1: creating reindexing resources; 2: reindexing resources created; 3: reindexing; 4: paused; 5: reindexing completed; 6: reindexing succeeded (searchable); 7: reindexing failed; 8: revoked; 9: deleting the metadata and index.
 * @method integer getStartTime() Obtain Start timestamp of the reindexing task
 * @method void setStartTime(integer $StartTime) Set Start timestamp of the reindexing task
 * @method integer getEndTime() Obtain Rebuild task end timestamp
 * @method void setEndTime(integer $EndTime) Set Rebuild task end timestamp
 * @method integer getRemainTime() Obtain Estimated remaining time for reshipping, in seconds
 * @method void setRemainTime(integer $RemainTime) Set Estimated remaining time for reshipping, in seconds
 * @method integer getCreateTime() Obtain Rebuild task creation timestamp
 * @method void setCreateTime(integer $CreateTime) Set Rebuild task creation timestamp
 * @method float getProgress() Obtain Re-shipping completion degree, in percentages.
 * @method void setProgress(float $Progress) Set Re-shipping completion degree, in percentages.
 * @method integer getUpdateTime() Obtain Update time of the reindexing task
 * @method void setUpdateTime(integer $UpdateTime) Set Update time of the reindexing task
 * @method string getStatusMessage() Obtain Additional status description. Currently, it only describes the reason for failure.
 * @method void setStatusMessage(string $StatusMessage) Set Additional status description. Currently, it only describes the reason for failure.
 */
class RebuildIndexTaskInfo extends AbstractModel
{
    /**
     * @var string Reindexing task ID
     */
    public $TaskId;

    /**
     * @var integer Current status of the reindexing task. 0: reindexing task created; 1: creating reindexing resources; 2: reindexing resources created; 3: reindexing; 4: paused; 5: reindexing completed; 6: reindexing succeeded (searchable); 7: reindexing failed; 8: revoked; 9: deleting the metadata and index.
     */
    public $Status;

    /**
     * @var integer Start timestamp of the reindexing task
     */
    public $StartTime;

    /**
     * @var integer Rebuild task end timestamp
     */
    public $EndTime;

    /**
     * @var integer Estimated remaining time for reshipping, in seconds
     */
    public $RemainTime;

    /**
     * @var integer Rebuild task creation timestamp
     */
    public $CreateTime;

    /**
     * @var float Re-shipping completion degree, in percentages.
     */
    public $Progress;

    /**
     * @var integer Update time of the reindexing task
     */
    public $UpdateTime;

    /**
     * @var string Additional status description. Currently, it only describes the reason for failure.
     */
    public $StatusMessage;

    /**
     * @param string $TaskId Reindexing task ID
     * @param integer $Status Current status of the reindexing task. 0: reindexing task created; 1: creating reindexing resources; 2: reindexing resources created; 3: reindexing; 4: paused; 5: reindexing completed; 6: reindexing succeeded (searchable); 7: reindexing failed; 8: revoked; 9: deleting the metadata and index.
     * @param integer $StartTime Start timestamp of the reindexing task
     * @param integer $EndTime Rebuild task end timestamp
     * @param integer $RemainTime Estimated remaining time for reshipping, in seconds
     * @param integer $CreateTime Rebuild task creation timestamp
     * @param float $Progress Re-shipping completion degree, in percentages.
     * @param integer $UpdateTime Update time of the reindexing task
     * @param string $StatusMessage Additional status description. Currently, it only describes the reason for failure.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RemainTime",$param) and $param["RemainTime"] !== null) {
            $this->RemainTime = $param["RemainTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }
    }
}
