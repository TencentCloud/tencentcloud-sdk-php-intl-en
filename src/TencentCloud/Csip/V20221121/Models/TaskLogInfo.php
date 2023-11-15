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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task report information
 *
 * @method string getTaskLogName() Obtain Report name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskLogName(string $TaskLogName) Set Report name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskLogId() Obtain Report ID.
 * @method void setTaskLogId(string $TaskLogId) Set Report ID.
 * @method integer getAssetsNumber() Obtain Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetsNumber(integer $AssetsNumber) Set Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getRiskNumber() Obtain Number of risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRiskNumber(integer $RiskNumber) Set Number of risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTime() Obtain Report generation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTime(string $Time) Set Report generation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Task status. `0`: Initial value; `1`: Scanning; `2`: Completed; `3`: Failed; `4`: Stopped; `5`: Paused; `6`: Retried
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Task status. `0`: Initial value; `1`: Scanning; `2`: Completed; `3`: Failed; `4`: Stopped; `5`: Paused; `6`: Retried
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Name of the associated task
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Name of the associated task
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskCenterTaskId() Obtain Scan task ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskCenterTaskId(string $TaskCenterTaskId) Set Scan task ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User AppId
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set User AppId
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUIN() Obtain User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUIN(string $UIN) Set User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getReportType() Obtain Report type: `1`: Health check report; `2`: Daily report; `3`: Weekly report; `4`: Monthly report
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setReportType(integer $ReportType) Set Report type: `1`: Health check report; `2`: Daily report; `3`: Weekly report; `4`: Monthly report
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getTemplateId() Obtain Report template ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTemplateId(integer $TemplateId) Set Report template ID
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class TaskLogInfo extends AbstractModel
{
    /**
     * @var string Report name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskLogName;

    /**
     * @var string Report ID.
     */
    public $TaskLogId;

    /**
     * @var integer Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetsNumber;

    /**
     * @var integer Number of risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RiskNumber;

    /**
     * @var string Report generation time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Time;

    /**
     * @var integer Task status. `0`: Initial value; `1`: Scanning; `2`: Completed; `3`: Failed; `4`: Stopped; `5`: Paused; `6`: Retried
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Name of the associated task
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Scan task ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskCenterTaskId;

    /**
     * @var string User AppId
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $UIN;

    /**
     * @var string User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var integer Report type: `1`: Health check report; `2`: Daily report; `3`: Weekly report; `4`: Monthly report
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ReportType;

    /**
     * @var integer Report template ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TemplateId;

    /**
     * @param string $TaskLogName Report name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskLogId Report ID.
     * @param integer $AssetsNumber Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $RiskNumber Number of risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Time Report generation time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Status Task status. `0`: Initial value; `1`: Scanning; `2`: Completed; `3`: Failed; `4`: Stopped; `5`: Paused; `6`: Retried
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskName Name of the associated task
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $StartTime Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskCenterTaskId Scan task ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AppId User AppId
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $UIN User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $UserName User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ReportType Report type: `1`: Health check report; `2`: Daily report; `3`: Weekly report; `4`: Monthly report
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $TemplateId Report template ID
Note: This field may return·null, indicating that no valid values can be obtained.
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
