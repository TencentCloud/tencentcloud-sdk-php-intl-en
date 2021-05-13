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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of health report tasks.
 *
 * @method integer getAsyncRequestId() Obtain Async task request ID.
 * @method void setAsyncRequestId(integer $AsyncRequestId) Set Async task request ID.
 * @method string getSource() Obtain Source that triggers the task. Valid values: `DAILY_INSPECTION` (instance inspection), `SCHEDULED` (timed generation), and `MANUAL` (manual trigger).
 * @method void setSource(string $Source) Set Source that triggers the task. Valid values: `DAILY_INSPECTION` (instance inspection), `SCHEDULED` (timed generation), and `MANUAL` (manual trigger).
 * @method integer getProgress() Obtain Task progress in %.
 * @method void setProgress(integer $Progress) Set Task progress in %.
 * @method string getCreateTime() Obtain Task creation time.
 * @method void setCreateTime(string $CreateTime) Set Task creation time.
 * @method string getStartTime() Obtain Task start time.
 * @method void setStartTime(string $StartTime) Set Task start time.
 * @method string getEndTime() Obtain Task end time.
 * @method void setEndTime(string $EndTime) Set Task end time.
 * @method InstanceBasicInfo getInstanceInfo() Obtain Basic information about the instance to which the task belongs.
 * @method void setInstanceInfo(InstanceBasicInfo $InstanceInfo) Set Basic information about the instance to which the task belongs.
 * @method HealthStatus getHealthStatus() Obtain Health information in a health report.
 * @method void setHealthStatus(HealthStatus $HealthStatus) Set Health information in a health report.
 */
class HealthReportTask extends AbstractModel
{
    /**
     * @var integer Async task request ID.
     */
    public $AsyncRequestId;

    /**
     * @var string Source that triggers the task. Valid values: `DAILY_INSPECTION` (instance inspection), `SCHEDULED` (timed generation), and `MANUAL` (manual trigger).
     */
    public $Source;

    /**
     * @var integer Task progress in %.
     */
    public $Progress;

    /**
     * @var string Task creation time.
     */
    public $CreateTime;

    /**
     * @var string Task start time.
     */
    public $StartTime;

    /**
     * @var string Task end time.
     */
    public $EndTime;

    /**
     * @var InstanceBasicInfo Basic information about the instance to which the task belongs.
     */
    public $InstanceInfo;

    /**
     * @var HealthStatus Health information in a health report.
     */
    public $HealthStatus;

    /**
     * @param integer $AsyncRequestId Async task request ID.
     * @param string $Source Source that triggers the task. Valid values: `DAILY_INSPECTION` (instance inspection), `SCHEDULED` (timed generation), and `MANUAL` (manual trigger).
     * @param integer $Progress Task progress in %.
     * @param string $CreateTime Task creation time.
     * @param string $StartTime Task start time.
     * @param string $EndTime Task end time.
     * @param InstanceBasicInfo $InstanceInfo Basic information about the instance to which the task belongs.
     * @param HealthStatus $HealthStatus Health information in a health report.
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceBasicInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = new HealthStatus();
            $this->HealthStatus->deserialize($param["HealthStatus"]);
        }
    }
}
