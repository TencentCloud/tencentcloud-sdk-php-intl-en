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
 * Data returned in the list of scan tasks list to display information
 *
 * @method string getTaskName() Obtain Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time of the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanPlanContent() Obtain CRON format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanPlanContent(string $ScanPlanContent) Set CRON format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskType() Obtain Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(integer $TaskType) Set Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInsertTime() Obtain Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInsertTime(string $InsertTime) Set Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSelfDefiningAssets() Obtain Custom list of assets to scan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSelfDefiningAssets(array $SelfDefiningAssets) Set Custom list of assets to scan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPredictTime() Obtain Estimated period to complete the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPredictTime(integer $PredictTime) Set Estimated period to complete the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPredictEndTime() Obtain Estimated completion time of the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPredictEndTime(string $PredictEndTime) Set Estimated completion time of the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReportNumber() Obtain Number of reports
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReportNumber(integer $ReportNumber) Set Number of reports
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAssetNumber() Obtain Number of assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssetNumber(integer $AssetNumber) Set Number of assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanStatus() Obtain Scanning status. `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning; `4`: Scanning stopped
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanStatus(integer $ScanStatus) Set Scanning status. `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning; `4`: Scanning stopped
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getPercent() Obtain Task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(float $Percent) Set Task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanItem() Obtain port/poc/weakpass/webcontent/configrisk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanItem(string $ScanItem) Set port/poc/weakpass/webcontent/configrisk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanAssetType() Obtain Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanAssetType(integer $ScanAssetType) Set Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVSSTaskId() Obtain VSS subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVSSTaskId(string $VSSTaskId) Set VSS subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCSPMTaskId() Obtain CSPM subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCSPMTaskId(string $CSPMTaskId) Set CSPM subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCWPPOCId() Obtain CWPP vulnerability scan task IDHost missed scan subtask id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCWPPOCId(string $CWPPOCId) Set CWPP vulnerability scan task IDHost missed scan subtask id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCWPBlId() Obtain CWPP baseline check task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCWPBlId(string $CWPBlId) Set CWPP baseline check task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVSSTaskProcess() Obtain VSS task progess
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVSSTaskProcess(integer $VSSTaskProcess) Set VSS task progess
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCSPMTaskProcess() Obtain CSPM task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCSPMTaskProcess(integer $CSPMTaskProcess) Set CSPM task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCWPPOCProcess() Obtain CWPP vulnerability scan task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCWPPOCProcess(integer $CWPPOCProcess) Set CWPP vulnerability scan task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCWPBlProcess() Obtain CWPP baseline check task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCWPBlProcess(integer $CWPBlProcess) Set CWPP baseline check task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getErrorCode() Obtain 
 * @method void setErrorCode(integer $ErrorCode) Set 
 * @method string getErrorInfo() Obtain Exception information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorInfo(string $ErrorInfo) Set Exception information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartDay() Obtain Day of the month to start the scheduled task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartDay(integer $StartDay) Set Day of the month to start the scheduled task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFrequency() Obtain Scan frequency in days. `1`: Every day; `7`: Every seven days; `30`: Every 30 days; `0`: Scan once only
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrequency(integer $Frequency) Set Scan frequency in days. `1`: Every day; `7`: Every seven days; `30`: Every 30 days; `0`: Scan once only
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompleteNumber() Obtain Number of completed tasks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompleteNumber(integer $CompleteNumber) Set Number of completed tasks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompleteAssetNumber() Obtain Number of scanned assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompleteAssetNumber(integer $CompleteAssetNumber) Set Number of scanned assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskCount() Obtain Number of risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskCount(integer $RiskCount) Set Number of risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAssets() Obtain Assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssets(array $Assets) Set Assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User `Appid`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set User `Appid`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUIN() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUIN(string $UIN) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain User name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set User name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskMode() Obtain Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskMode(integer $TaskMode) Set Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanFrom() Obtain Source of scanning request
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanFrom(string $ScanFrom) Set Source of scanning request
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsFree() Obtain Whether it's a limited-time free health check. `0`: No; `1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsFree(integer $IsFree) Set Whether it's a limited-time free health check. `0`: No; `1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDelete() Obtain Whether the user is authorized to delete this task. `1` :Yes; `0`: No. It's available for multi-account management.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDelete(integer $IsDelete) Set Whether the user is authorized to delete this task. `1` :Yes; `0`: No. It's available for multi-account management.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceType() Obtain Source of the task. `0`: Default, `1`: Assistant; `2`: Health check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceType(integer $SourceType) Set Source of the task. `0`: Default, `1`: Assistant; `2`: Health check
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScanTaskInfoList extends AbstractModel
{
    /**
     * @var string Task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Start time of the task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string CRON format
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanPlanContent;

    /**
     * @var integer Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InsertTime;

    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var array Custom list of assets to scan
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SelfDefiningAssets;

    /**
     * @var integer Estimated period to complete the task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PredictTime;

    /**
     * @var string Estimated completion time of the task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PredictEndTime;

    /**
     * @var integer Number of reports
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReportNumber;

    /**
     * @var integer Number of assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssetNumber;

    /**
     * @var integer Scanning status. `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning; `4`: Scanning stopped
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanStatus;

    /**
     * @var float Task progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @var string port/poc/weakpass/webcontent/configrisk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanItem;

    /**
     * @var integer Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanAssetType;

    /**
     * @var string VSS subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VSSTaskId;

    /**
     * @var string CSPM subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CSPMTaskId;

    /**
     * @var string CWPP vulnerability scan task IDHost missed scan subtask id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CWPPOCId;

    /**
     * @var string CWPP baseline check task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CWPBlId;

    /**
     * @var integer VSS task progess
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VSSTaskProcess;

    /**
     * @var integer CSPM task progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CSPMTaskProcess;

    /**
     * @var integer CWPP vulnerability scan task progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CWPPOCProcess;

    /**
     * @var integer CWPP baseline check task progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CWPBlProcess;

    /**
     * @var integer 
     */
    public $ErrorCode;

    /**
     * @var string Exception information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorInfo;

    /**
     * @var integer Day of the month to start the scheduled task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartDay;

    /**
     * @var integer Scan frequency in days. `1`: Every day; `7`: Every seven days; `30`: Every 30 days; `0`: Scan once only
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Frequency;

    /**
     * @var integer Number of completed tasks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompleteNumber;

    /**
     * @var integer Number of scanned assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompleteAssetNumber;

    /**
     * @var integer Number of risks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskCount;

    /**
     * @var array Assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Assets;

    /**
     * @var string User `Appid`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UIN;

    /**
     * @var string User name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var integer Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskMode;

    /**
     * @var string Source of scanning request
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanFrom;

    /**
     * @var integer Whether it's a limited-time free health check. `0`: No; `1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsFree;

    /**
     * @var integer Whether the user is authorized to delete this task. `1` :Yes; `0`: No. It's available for multi-account management.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDelete;

    /**
     * @var integer Source of the task. `0`: Default, `1`: Assistant; `2`: Health check
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceType;

    /**
     * @param string $TaskName Task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time of the task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanPlanContent CRON format
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskType Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InsertTime Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SelfDefiningAssets Custom list of assets to scan
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PredictTime Estimated period to complete the task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PredictEndTime Estimated completion time of the task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReportNumber Number of reports
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AssetNumber Number of assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanStatus Scanning status. `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning; `4`: Scanning stopped
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Percent Task progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanItem port/poc/weakpass/webcontent/configrisk
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanAssetType Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VSSTaskId VSS subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CSPMTaskId CSPM subtask ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CWPPOCId CWPP vulnerability scan task IDHost missed scan subtask id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CWPBlId CWPP baseline check task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VSSTaskProcess VSS task progess
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CSPMTaskProcess CSPM task progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CWPPOCProcess CWPP vulnerability scan task progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CWPBlProcess CWPP baseline check task progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrorCode 
     * @param string $ErrorInfo Exception information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartDay Day of the month to start the scheduled task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Frequency Scan frequency in days. `1`: Every day; `7`: Every seven days; `30`: Every 30 days; `0`: Scan once only
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompleteNumber Number of completed tasks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompleteAssetNumber Number of scanned assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskCount Number of risks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Assets Assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppId User `Appid`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UIN User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName User name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskMode Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanFrom Source of scanning request
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsFree Whether it's a limited-time free health check. `0`: No; `1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDelete Whether the user is authorized to delete this task. `1` :Yes; `0`: No. It's available for multi-account management.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceType Source of the task. `0`: Default, `1`: Assistant; `2`: Health check
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ScanPlanContent",$param) and $param["ScanPlanContent"] !== null) {
            $this->ScanPlanContent = $param["ScanPlanContent"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SelfDefiningAssets",$param) and $param["SelfDefiningAssets"] !== null) {
            $this->SelfDefiningAssets = $param["SelfDefiningAssets"];
        }

        if (array_key_exists("PredictTime",$param) and $param["PredictTime"] !== null) {
            $this->PredictTime = $param["PredictTime"];
        }

        if (array_key_exists("PredictEndTime",$param) and $param["PredictEndTime"] !== null) {
            $this->PredictEndTime = $param["PredictEndTime"];
        }

        if (array_key_exists("ReportNumber",$param) and $param["ReportNumber"] !== null) {
            $this->ReportNumber = $param["ReportNumber"];
        }

        if (array_key_exists("AssetNumber",$param) and $param["AssetNumber"] !== null) {
            $this->AssetNumber = $param["AssetNumber"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("ScanItem",$param) and $param["ScanItem"] !== null) {
            $this->ScanItem = $param["ScanItem"];
        }

        if (array_key_exists("ScanAssetType",$param) and $param["ScanAssetType"] !== null) {
            $this->ScanAssetType = $param["ScanAssetType"];
        }

        if (array_key_exists("VSSTaskId",$param) and $param["VSSTaskId"] !== null) {
            $this->VSSTaskId = $param["VSSTaskId"];
        }

        if (array_key_exists("CSPMTaskId",$param) and $param["CSPMTaskId"] !== null) {
            $this->CSPMTaskId = $param["CSPMTaskId"];
        }

        if (array_key_exists("CWPPOCId",$param) and $param["CWPPOCId"] !== null) {
            $this->CWPPOCId = $param["CWPPOCId"];
        }

        if (array_key_exists("CWPBlId",$param) and $param["CWPBlId"] !== null) {
            $this->CWPBlId = $param["CWPBlId"];
        }

        if (array_key_exists("VSSTaskProcess",$param) and $param["VSSTaskProcess"] !== null) {
            $this->VSSTaskProcess = $param["VSSTaskProcess"];
        }

        if (array_key_exists("CSPMTaskProcess",$param) and $param["CSPMTaskProcess"] !== null) {
            $this->CSPMTaskProcess = $param["CSPMTaskProcess"];
        }

        if (array_key_exists("CWPPOCProcess",$param) and $param["CWPPOCProcess"] !== null) {
            $this->CWPPOCProcess = $param["CWPPOCProcess"];
        }

        if (array_key_exists("CWPBlProcess",$param) and $param["CWPBlProcess"] !== null) {
            $this->CWPBlProcess = $param["CWPBlProcess"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("StartDay",$param) and $param["StartDay"] !== null) {
            $this->StartDay = $param["StartDay"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("CompleteNumber",$param) and $param["CompleteNumber"] !== null) {
            $this->CompleteNumber = $param["CompleteNumber"];
        }

        if (array_key_exists("CompleteAssetNumber",$param) and $param["CompleteAssetNumber"] !== null) {
            $this->CompleteAssetNumber = $param["CompleteAssetNumber"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("Assets",$param) and $param["Assets"] !== null) {
            $this->Assets = [];
            foreach ($param["Assets"] as $key => $value){
                $obj = new TaskAssetObject();
                $obj->deserialize($value);
                array_push($this->Assets, $obj);
            }
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

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("ScanFrom",$param) and $param["ScanFrom"] !== null) {
            $this->ScanFrom = $param["ScanFrom"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
