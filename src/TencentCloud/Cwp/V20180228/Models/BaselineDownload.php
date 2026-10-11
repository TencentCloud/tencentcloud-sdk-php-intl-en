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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline export result download
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method integer getStatus() Obtain Status: 0: not completed; 1: completed.
 * @method void setStatus(integer $Status) Set Status: 0: not completed; 1: completed.
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain Completion time
 * @method void setEndTime(string $EndTime) Set Completion time
 * @method string getDownloadUrl() Obtain Download URL
 * @method void setDownloadUrl(string $DownloadUrl) Set Download URL
 */
class BaselineDownload extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var integer Status: 0: not completed; 1: completed.
     */
    public $Status;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string Completion time
     */
    public $EndTime;

    /**
     * @var string Download URL
     */
    public $DownloadUrl;

    /**
     * @param integer $TaskId Task ID
     * @param string $TaskName Task name.
     * @param integer $Status Status: 0: not completed; 1: completed.
     * @param string $StartTime Start time
     * @param string $EndTime Completion time
     * @param string $DownloadUrl Download URL
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
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

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }
    }
}
