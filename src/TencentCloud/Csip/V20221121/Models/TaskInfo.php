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
 * Detection task information
 *
 * @method string getScanTime() Obtain Scan time
 * @method void setScanTime(string $ScanTime) Set Scan time
 * @method string getTaskID() Obtain Task ID.
 * @method void setTaskID(string $TaskID) Set Task ID.
 * @method string getStatus() Obtain Task status.
 * @method void setStatus(string $Status) Set Task status.
 * @method integer getProgress() Obtain Task progress
 * @method void setProgress(integer $Progress) Set Task progress
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string Scan time
     */
    public $ScanTime;

    /**
     * @var string Task ID.
     */
    public $TaskID;

    /**
     * @var string Task status.
     */
    public $Status;

    /**
     * @var integer Task progress
     */
    public $Progress;

    /**
     * @param string $ScanTime Scan time
     * @param string $TaskID Task ID.
     * @param string $Status Task status.
     * @param integer $Progress Task progress
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
        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
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
    }
}
