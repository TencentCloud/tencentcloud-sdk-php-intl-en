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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security audit log export task information.
 *
 * @method integer getAsyncRequestId() Obtain Async task Id.
 * @method void setAsyncRequestId(integer $AsyncRequestId) Set Async task Id.
 * @method string getStartTime() Obtain Task start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Task creation time.
 * @method void setCreateTime(string $CreateTime) Set Task creation time.
 * @method string getStatus() Obtain Task status.
 * @method void setStatus(string $Status) Set Task status.
 * @method integer getProgress() Obtain Task progress.
 * @method void setProgress(integer $Progress) Set Task progress.
 * @method string getLogStartTime() Obtain Exported log start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogStartTime(string $LogStartTime) Set Exported log start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogEndTime() Obtain Exported log end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogEndTime(string $LogEndTime) Set Exported log end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalSize() Obtain Total size of log files in KB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set Total size of log files in KB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDangerLevels() Obtain List of risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDangerLevels(array $DangerLevels) Set List of risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecLogExportTaskInfo extends AbstractModel
{
    /**
     * @var integer Async task Id.
     */
    public $AsyncRequestId;

    /**
     * @var string Task start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Task creation time.
     */
    public $CreateTime;

    /**
     * @var string Task status.
     */
    public $Status;

    /**
     * @var integer Task progress.
     */
    public $Progress;

    /**
     * @var string Exported log start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogStartTime;

    /**
     * @var string Exported log end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogEndTime;

    /**
     * @var integer Total size of log files in KB.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @var array List of risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DangerLevels;

    /**
     * @param integer $AsyncRequestId Async task Id.
     * @param string $StartTime Task start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Task creation time.
     * @param string $Status Task status.
     * @param integer $Progress Task progress.
     * @param string $LogStartTime Exported log start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogEndTime Exported log end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalSize Total size of log files in KB.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DangerLevels List of risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LogStartTime",$param) and $param["LogStartTime"] !== null) {
            $this->LogStartTime = $param["LogStartTime"];
        }

        if (array_key_exists("LogEndTime",$param) and $param["LogEndTime"] !== null) {
            $this->LogEndTime = $param["LogEndTime"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("DangerLevels",$param) and $param["DangerLevels"] !== null) {
            $this->DangerLevels = $param["DangerLevels"];
        }
    }
}
