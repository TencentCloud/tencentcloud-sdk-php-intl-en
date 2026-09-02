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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scan task record details
 *
 * @method string getTaskID() Obtain <p>Task ID.</p>
 * @method void setTaskID(string $TaskID) Set <p>Task ID.</p>
 * @method string getStatus() Obtain <p>Task status.</p>
 * @method void setStatus(string $Status) Set <p>Task status.</p>
 * @method integer getProgress() Obtain <p>Task progress</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress</p>
 * @method integer getCostQuota() Obtain <p>Consumed quota.</p>
 * @method void setCostQuota(integer $CostQuota) Set <p>Consumed quota.</p>
 * @method string getCreateTime() Obtain <p>Task creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time</p>
 * @method string getEndTime() Obtain <p>Task end time.</p>
 * @method void setEndTime(string $EndTime) Set <p>Task end time.</p>
 * @method string getTaskSource() Obtain <p>Task source</p>
 * @method void setTaskSource(string $TaskSource) Set <p>Task source</p>
 */
class ScanTaskRecordItem extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskID;

    /**
     * @var string <p>Task status.</p>
     */
    public $Status;

    /**
     * @var integer <p>Task progress</p>
     */
    public $Progress;

    /**
     * @var integer <p>Consumed quota.</p>
     */
    public $CostQuota;

    /**
     * @var string <p>Task creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Task end time.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Task source</p>
     */
    public $TaskSource;

    /**
     * @param string $TaskID <p>Task ID.</p>
     * @param string $Status <p>Task status.</p>
     * @param integer $Progress <p>Task progress</p>
     * @param integer $CostQuota <p>Consumed quota.</p>
     * @param string $CreateTime <p>Task creation time</p>
     * @param string $EndTime <p>Task end time.</p>
     * @param string $TaskSource <p>Task source</p>
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CostQuota",$param) and $param["CostQuota"] !== null) {
            $this->CostQuota = $param["CostQuota"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }
    }
}
