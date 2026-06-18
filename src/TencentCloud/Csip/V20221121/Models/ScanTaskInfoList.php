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
 * Data returned in the list of scan tasks list to display information
 *
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getStartTime() Obtain start time of the task
 * @method void setStartTime(string $StartTime) Set start time of the task
 * @method string getEndTime() Obtain Task end time
 * @method void setEndTime(string $EndTime) Set Task end time
 * @method string getScanPlanContent() Obtain Cron Format
 * @method void setScanPlanContent(string $ScanPlanContent) Set Cron Format
 * @method integer getTaskType() Obtain 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
 * @method void setTaskType(integer $TaskType) Set 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
 * @method string getInsertTime() Obtain Creation time.
 * @method void setInsertTime(string $InsertTime) Set Creation time.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method array getSelfDefiningAssets() Obtain Custom Specified Scan Asset Information
 * @method void setSelfDefiningAssets(array $SelfDefiningAssets) Set Custom Specified Scan Asset Information
 * @method integer getPredictTime() Obtain Estimated Time
 * @method void setPredictTime(integer $PredictTime) Set Estimated Time
 * @method string getPredictEndTime() Obtain Estimated Completion Time
 * @method void setPredictEndTime(string $PredictEndTime) Set Estimated Completion Time
 * @method integer getReportNumber() Obtain Report Count
 * @method void setReportNumber(integer $ReportNumber) Set Report Count
 * @method integer getAssetNumber() Obtain Number of assets
 * @method void setAssetNumber(integer $AssetNumber) Set Number of assets
 * @method integer getScanStatus() Obtain Scan Status. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Scan Stopped.
 * @method void setScanStatus(integer $ScanStatus) Set Scan Status. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Scan Stopped.
 * @method float getPercent() Obtain Task progress
 * @method void setPercent(float $Percent) Set Task progress
 * @method string getScanItem() Obtain port/poc/weakpass/webcontent/configrisk
 * @method void setScanItem(string $ScanItem) Set port/poc/weakpass/webcontent/configrisk
 * @method integer getScanAssetType() Obtain 0-Full Scan; 1-Specified Asset Scan; 2-Excluded Asset Scan; 3-Custom Specified Asset Scan.
 * @method void setScanAssetType(integer $ScanAssetType) Set 0-Full Scan; 1-Specified Asset Scan; 2-Excluded Asset Scan; 3-Custom Specified Asset Scan.
 * @method string getVSSTaskId() Obtain VSS Subtask ID
 * @method void setVSSTaskId(string $VSSTaskId) Set VSS Subtask ID
 * @method string getCSPMTaskId() Obtain CSPM Subtask ID
 * @method void setCSPMTaskId(string $CSPMTaskId) Set CSPM Subtask ID
 * @method string getCWPPOCId() Obtain Host Vulnerability Scan Subtask ID
 * @method void setCWPPOCId(string $CWPPOCId) Set Host Vulnerability Scan Subtask ID
 * @method string getCWPBlId() Obtain Host Baseline Subtask ID
 * @method void setCWPBlId(string $CWPBlId) Set Host Baseline Subtask ID
 * @method integer getVSSTaskProcess() Obtain VSS Subtask Progress
 * @method void setVSSTaskProcess(integer $VSSTaskProcess) Set VSS Subtask Progress
 * @method integer getCSPMTaskProcess() Obtain CSPM Subtask Progress
 * @method void setCSPMTaskProcess(integer $CSPMTaskProcess) Set CSPM Subtask Progress
 * @method integer getCWPPOCProcess() Obtain Host Vulnerability Scan Subtask Progress
 * @method void setCWPPOCProcess(integer $CWPPOCProcess) Set Host Vulnerability Scan Subtask Progress
 * @method integer getCWPBlProcess() Obtain Host Baseline Subtask Progress
 * @method void setCWPBlProcess(integer $CWPBlProcess) Set Host Baseline Subtask Progress
 * @method integer getErrorCode() Obtain Exception status code
 * @method void setErrorCode(integer $ErrorCode) Set Exception status code
 * @method string getErrorInfo() Obtain Exception information
 * @method void setErrorInfo(string $ErrorInfo) Set Exception information
 * @method integer getStartDay() Obtain Number of Days for Periodic Task to Start
 * @method void setStartDay(integer $StartDay) Set Number of Days for Periodic Task to Start
 * @method integer getFrequency() Obtain Scanning Frequency, in Days. 1-Daily; 7-Weekly; 30-Monthly; 0-Scan Once.
 * @method void setFrequency(integer $Frequency) Set Scanning Frequency, in Days. 1-Daily; 7-Weekly; 30-Monthly; 0-Scan Once.
 * @method integer getCompleteNumber() Obtain Completion Count
 * @method void setCompleteNumber(integer $CompleteNumber) Set Completion Count
 * @method integer getCompleteAssetNumber() Obtain Completed Asset Count
 * @method void setCompleteAssetNumber(integer $CompleteAssetNumber) Set Completed Asset Count
 * @method integer getRiskCount() Obtain risk count
 * @method void setRiskCount(integer $RiskCount) Set risk count
 * @method array getAssets() Obtain Asset
 * @method void setAssets(array $Assets) Set Asset
 * @method string getAppId() Obtain User Appid
 * @method void setAppId(string $AppId) Set User Appid
 * @method string getUIN() Obtain User Host Account ID
 * @method void setUIN(string $UIN) Set User Host Account ID
 * @method string getUserName() Obtain User name
 * @method void setUserName(string $UserName) Set User name
 * @method integer getTaskMode() Obtain Checkup Mode. 0-Standard Mode; 1-Quick Mode; 2-Advanced Mode.
 * @method void setTaskMode(integer $TaskMode) Set Checkup Mode. 0-Standard Mode; 1-Quick Mode; 2-Advanced Mode.
 * @method string getScanFrom() Obtain Scan Source
 * @method void setScanFrom(string $ScanFrom) Set Scan Source
 * @method integer getIsFree() Obtain Whether health checkup is limited or exempted. 0-No; 1-Yes.
 * @method void setIsFree(integer $IsFree) Set Whether health checkup is limited or exempted. 0-No; 1-Yes.
 * @method integer getIsDelete() Obtain Whether it can be deleted. 1-Yes; 0-No. For use with multi-account management.
 * @method void setIsDelete(integer $IsDelete) Set Whether it can be deleted. 1-Yes; 0-No. For use with multi-account management.
 * @method integer getSourceType() Obtain Task Source Type. 0: Default; 1: Assistant; 2: Health Checkup Items.
 * @method void setSourceType(integer $SourceType) Set Task Source Type. 0: Default; 1: Assistant; 2: Health Checkup Items.
 */
class ScanTaskInfoList extends AbstractModel
{
    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string start time of the task
     */
    public $StartTime;

    /**
     * @var string Task end time
     */
    public $EndTime;

    /**
     * @var string Cron Format
     */
    public $ScanPlanContent;

    /**
     * @var integer 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
     */
    public $TaskType;

    /**
     * @var string Creation time.
     */
    public $InsertTime;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var array Custom Specified Scan Asset Information
     */
    public $SelfDefiningAssets;

    /**
     * @var integer Estimated Time
     */
    public $PredictTime;

    /**
     * @var string Estimated Completion Time
     */
    public $PredictEndTime;

    /**
     * @var integer Report Count
     */
    public $ReportNumber;

    /**
     * @var integer Number of assets
     */
    public $AssetNumber;

    /**
     * @var integer Scan Status. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Scan Stopped.
     */
    public $ScanStatus;

    /**
     * @var float Task progress
     */
    public $Percent;

    /**
     * @var string port/poc/weakpass/webcontent/configrisk
     */
    public $ScanItem;

    /**
     * @var integer 0-Full Scan; 1-Specified Asset Scan; 2-Excluded Asset Scan; 3-Custom Specified Asset Scan.
     */
    public $ScanAssetType;

    /**
     * @var string VSS Subtask ID
     */
    public $VSSTaskId;

    /**
     * @var string CSPM Subtask ID
     */
    public $CSPMTaskId;

    /**
     * @var string Host Vulnerability Scan Subtask ID
     */
    public $CWPPOCId;

    /**
     * @var string Host Baseline Subtask ID
     */
    public $CWPBlId;

    /**
     * @var integer VSS Subtask Progress
     */
    public $VSSTaskProcess;

    /**
     * @var integer CSPM Subtask Progress
     */
    public $CSPMTaskProcess;

    /**
     * @var integer Host Vulnerability Scan Subtask Progress
     */
    public $CWPPOCProcess;

    /**
     * @var integer Host Baseline Subtask Progress
     */
    public $CWPBlProcess;

    /**
     * @var integer Exception status code
     */
    public $ErrorCode;

    /**
     * @var string Exception information
     */
    public $ErrorInfo;

    /**
     * @var integer Number of Days for Periodic Task to Start
     */
    public $StartDay;

    /**
     * @var integer Scanning Frequency, in Days. 1-Daily; 7-Weekly; 30-Monthly; 0-Scan Once.
     */
    public $Frequency;

    /**
     * @var integer Completion Count
     */
    public $CompleteNumber;

    /**
     * @var integer Completed Asset Count
     */
    public $CompleteAssetNumber;

    /**
     * @var integer risk count
     */
    public $RiskCount;

    /**
     * @var array Asset
     */
    public $Assets;

    /**
     * @var string User Appid
     */
    public $AppId;

    /**
     * @var string User Host Account ID
     */
    public $UIN;

    /**
     * @var string User name
     */
    public $UserName;

    /**
     * @var integer Checkup Mode. 0-Standard Mode; 1-Quick Mode; 2-Advanced Mode.
     */
    public $TaskMode;

    /**
     * @var string Scan Source
     */
    public $ScanFrom;

    /**
     * @var integer Whether health checkup is limited or exempted. 0-No; 1-Yes.
     */
    public $IsFree;

    /**
     * @var integer Whether it can be deleted. 1-Yes; 0-No. For use with multi-account management.
     */
    public $IsDelete;

    /**
     * @var integer Task Source Type. 0: Default; 1: Assistant; 2: Health Checkup Items.
     */
    public $SourceType;

    /**
     * @param string $TaskName Task name.
     * @param string $StartTime start time of the task
     * @param string $EndTime Task end time
     * @param string $ScanPlanContent Cron Format
     * @param integer $TaskType 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
     * @param string $InsertTime Creation time.
     * @param string $TaskId Task ID.
     * @param array $SelfDefiningAssets Custom Specified Scan Asset Information
     * @param integer $PredictTime Estimated Time
     * @param string $PredictEndTime Estimated Completion Time
     * @param integer $ReportNumber Report Count
     * @param integer $AssetNumber Number of assets
     * @param integer $ScanStatus Scan Status. 0-Initial Value; 1-Scanning; 2-Scan Completed; 3-Scan Error; 4-Scan Stopped.
     * @param float $Percent Task progress
     * @param string $ScanItem port/poc/weakpass/webcontent/configrisk
     * @param integer $ScanAssetType 0-Full Scan; 1-Specified Asset Scan; 2-Excluded Asset Scan; 3-Custom Specified Asset Scan.
     * @param string $VSSTaskId VSS Subtask ID
     * @param string $CSPMTaskId CSPM Subtask ID
     * @param string $CWPPOCId Host Vulnerability Scan Subtask ID
     * @param string $CWPBlId Host Baseline Subtask ID
     * @param integer $VSSTaskProcess VSS Subtask Progress
     * @param integer $CSPMTaskProcess CSPM Subtask Progress
     * @param integer $CWPPOCProcess Host Vulnerability Scan Subtask Progress
     * @param integer $CWPBlProcess Host Baseline Subtask Progress
     * @param integer $ErrorCode Exception status code
     * @param string $ErrorInfo Exception information
     * @param integer $StartDay Number of Days for Periodic Task to Start
     * @param integer $Frequency Scanning Frequency, in Days. 1-Daily; 7-Weekly; 30-Monthly; 0-Scan Once.
     * @param integer $CompleteNumber Completion Count
     * @param integer $CompleteAssetNumber Completed Asset Count
     * @param integer $RiskCount risk count
     * @param array $Assets Asset
     * @param string $AppId User Appid
     * @param string $UIN User Host Account ID
     * @param string $UserName User name
     * @param integer $TaskMode Checkup Mode. 0-Standard Mode; 1-Quick Mode; 2-Advanced Mode.
     * @param string $ScanFrom Scan Source
     * @param integer $IsFree Whether health checkup is limited or exempted. 0-No; 1-Yes.
     * @param integer $IsDelete Whether it can be deleted. 1-Yes; 0-No. For use with multi-account management.
     * @param integer $SourceType Task Source Type. 0: Default; 1: Assistant; 2: Health Checkup Items.
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
