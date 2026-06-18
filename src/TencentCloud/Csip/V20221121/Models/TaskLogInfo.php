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
 * Task report information
 *
 * @method string getTaskLogName() Obtain report name
 * @method void setTaskLogName(string $TaskLogName) Set report name
 * @method string getTaskLogId() Obtain Report ID.
 * @method void setTaskLogId(string $TaskLogId) Set Report ID.
 * @method integer getAssetsNumber() Obtain Associated Asset Count
 * @method void setAssetsNumber(integer $AssetsNumber) Set Associated Asset Count
 * @method integer getRiskNumber() Obtain Security Risk Count
 * @method void setRiskNumber(integer $RiskNumber) Set Security Risk Count
 * @method string getTime() Obtain Report generation time
 * @method void setTime(string $Time) Set Report generation time
 * @method integer getStatus() Obtain Task Status Code. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Stopped; 5-Halted; 6-Task Has Been Restarted.
 * @method void setStatus(integer $Status) Set Task Status Code. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Stopped; 5-Halted; 6-Task Has Been Restarted.
 * @method string getTaskName() Obtain Associated Task Name
 * @method void setTaskName(string $TaskName) Set Associated Task Name
 * @method string getStartTime() Obtain Scan start time
 * @method void setStartTime(string $StartTime) Set Scan start time
 * @method string getTaskCenterTaskId() Obtain Task Center Scan Task ID
 * @method void setTaskCenterTaskId(string $TaskCenterTaskId) Set Task Center Scan Task ID
 * @method string getAppId() Obtain Tenant ID
 * @method void setAppId(string $AppId) Set Tenant ID
 * @method string getUIN() Obtain Host Account ID
 * @method void setUIN(string $UIN) Set Host Account ID
 * @method string getUserName() Obtain User name
 * @method void setUserName(string $UserName) Set User name
 * @method integer getReportType() Obtain Report Type. 1: Security Checkup; 2: Daily Report; 3: Weekly Report; 4: Monthly Report.
 * @method void setReportType(integer $ReportType) Set Report Type. 1: Security Checkup; 2: Daily Report; 3: Weekly Report; 4: Monthly Report.
 * @method integer getTemplateId() Obtain Report Template ID
 * @method void setTemplateId(integer $TemplateId) Set Report Template ID
 */
class TaskLogInfo extends AbstractModel
{
    /**
     * @var string report name
     */
    public $TaskLogName;

    /**
     * @var string Report ID.
     */
    public $TaskLogId;

    /**
     * @var integer Associated Asset Count
     */
    public $AssetsNumber;

    /**
     * @var integer Security Risk Count
     */
    public $RiskNumber;

    /**
     * @var string Report generation time
     */
    public $Time;

    /**
     * @var integer Task Status Code. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Stopped; 5-Halted; 6-Task Has Been Restarted.
     */
    public $Status;

    /**
     * @var string Associated Task Name
     */
    public $TaskName;

    /**
     * @var string Scan start time
     */
    public $StartTime;

    /**
     * @var string Task Center Scan Task ID
     */
    public $TaskCenterTaskId;

    /**
     * @var string Tenant ID
     */
    public $AppId;

    /**
     * @var string Host Account ID
     */
    public $UIN;

    /**
     * @var string User name
     */
    public $UserName;

    /**
     * @var integer Report Type. 1: Security Checkup; 2: Daily Report; 3: Weekly Report; 4: Monthly Report.
     */
    public $ReportType;

    /**
     * @var integer Report Template ID
     */
    public $TemplateId;

    /**
     * @param string $TaskLogName report name
     * @param string $TaskLogId Report ID.
     * @param integer $AssetsNumber Associated Asset Count
     * @param integer $RiskNumber Security Risk Count
     * @param string $Time Report generation time
     * @param integer $Status Task Status Code. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Stopped; 5-Halted; 6-Task Has Been Restarted.
     * @param string $TaskName Associated Task Name
     * @param string $StartTime Scan start time
     * @param string $TaskCenterTaskId Task Center Scan Task ID
     * @param string $AppId Tenant ID
     * @param string $UIN Host Account ID
     * @param string $UserName User name
     * @param integer $ReportType Report Type. 1: Security Checkup; 2: Daily Report; 3: Weekly Report; 4: Monthly Report.
     * @param integer $TemplateId Report Template ID
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
        if (array_key_exists("TaskLogName",$param) and $param["TaskLogName"] !== null) {
            $this->TaskLogName = $param["TaskLogName"];
        }

        if (array_key_exists("TaskLogId",$param) and $param["TaskLogId"] !== null) {
            $this->TaskLogId = $param["TaskLogId"];
        }

        if (array_key_exists("AssetsNumber",$param) and $param["AssetsNumber"] !== null) {
            $this->AssetsNumber = $param["AssetsNumber"];
        }

        if (array_key_exists("RiskNumber",$param) and $param["RiskNumber"] !== null) {
            $this->RiskNumber = $param["RiskNumber"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskCenterTaskId",$param) and $param["TaskCenterTaskId"] !== null) {
            $this->TaskCenterTaskId = $param["TaskCenterTaskId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UIN",$param) and $param["UIN"] !== null) {
            $this->UIN = $param["UIN"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
