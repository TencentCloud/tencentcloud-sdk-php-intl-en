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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Expert service - emergency response information
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getHostNum() Obtain Number of hosts
 * @method void setHostNum(integer $HostNum) Set Number of hosts
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getStartTime() Obtain Service start time
 * @method void setStartTime(string $StartTime) Set Service start time
 * @method string getEndTime() Obtain Service end time
 * @method void setEndTime(string $EndTime) Set Service end time
 * @method string getReportPath() Obtain Report download link
 * @method void setReportPath(string $ReportPath) Set Report download link
 */
class EmergencyResponseInfo extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer Number of hosts
     */
    public $HostNum;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var string Service start time
     */
    public $StartTime;

    /**
     * @var string Service end time
     */
    public $EndTime;

    /**
     * @var string Report download link
     */
    public $ReportPath;

    /**
     * @param string $TaskId Task ID
     * @param integer $HostNum Number of hosts
     * @param integer $Status 
     * @param string $StartTime Service start time
     * @param string $EndTime Service end time
     * @param string $ReportPath Report download link
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

        if (array_key_exists("HostNum",$param) and $param["HostNum"] !== null) {
            $this->HostNum = $param["HostNum"];
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

        if (array_key_exists("ReportPath",$param) and $param["ReportPath"] !== null) {
            $this->ReportPath = $param["ReportPath"];
        }
    }
}
