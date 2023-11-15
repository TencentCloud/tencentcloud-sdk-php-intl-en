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
 * Details of a scan task
 *
 * @method string getTaskId() Obtain Task ID Id
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID Id
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Task status. `1`: Pending start; `2`: Scanning; `3`: Failed; `4`: Completed
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Task status. `1`: Pending start; `2`: Scanning; `3`: Failed; `4`: Completed
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Task progress
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Task progress
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskTime() Obtain Displayed time point
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskTime(string $TaskTime) Set Displayed time point
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getReportId() Obtain Report ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setReportId(string $ReportId) Set Report ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getReportName() Obtain Report name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setReportName(string $ReportName) Set Report name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getScanPlan() Obtain Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. 
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setScanPlan(integer $ScanPlan) Set Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. 
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAssetCount() Obtain Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetCount(integer $AssetCount) Set Number of associated assets
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
 */
class ScanTaskInfo extends AbstractModel
{
    /**
     * @var string Task ID Id
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var integer Task status. `1`: Pending start; `2`: Scanning; `3`: Failed; `4`: Completed
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Task progress
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var string Displayed time point
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskTime;

    /**
     * @var string Report ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ReportId;

    /**
     * @var string Report name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ReportName;

    /**
     * @var integer Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. 
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ScanPlan;

    /**
     * @var integer Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetCount;

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
     * @param string $TaskId Task ID Id
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Status Task status. `1`: Pending start; `2`: Scanning; `3`: Failed; `4`: Completed
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Progress Task progress
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskTime Displayed time point
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ReportId Report ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ReportName Report name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ScanPlan Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. 
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $AssetCount Number of associated assets
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AppId User AppId
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $UIN User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $UserName User name.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("ScanPlan",$param) and $param["ScanPlan"] !== null) {
            $this->ScanPlan = $param["ScanPlan"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
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
    }
}
