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
 * Details of a scan task
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method integer getStatus() Obtain Task Status Code: 1-Awaiting Start, 2-Scanning, 3-Scan Error, 4-Scan Completed.
 * @method void setStatus(integer $Status) Set Task Status Code: 1-Awaiting Start, 2-Scanning, 3-Scan Error, 4-Scan Completed.
 * @method integer getProgress() Obtain Task progress
 * @method void setProgress(integer $Progress) Set Task progress
 * @method string getTaskTime() Obtain Task Completion Time
 * @method void setTaskTime(string $TaskTime) Set Task Completion Time
 * @method string getReportId() Obtain report ID
 * @method void setReportId(string $ReportId) Set report ID
 * @method string getReportName() Obtain report name
 * @method void setReportName(string $ReportName) Set report name
 * @method integer getScanPlan() Obtain Scanning Schedule. 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
 * @method void setScanPlan(integer $ScanPlan) Set Scanning Schedule. 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
 * @method integer getAssetCount() Obtain Number of Associated Assets
 * @method void setAssetCount(integer $AssetCount) Set Number of Associated Assets
 * @method string getAppId() Obtain APP ID
 * @method void setAppId(string $AppId) Set APP ID
 * @method string getUIN() Obtain User Host Account ID
 * @method void setUIN(string $UIN) Set User Host Account ID
 * @method string getUserName() Obtain User name
 * @method void setUserName(string $UserName) Set User name
 */
class ScanTaskInfo extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var integer Task Status Code: 1-Awaiting Start, 2-Scanning, 3-Scan Error, 4-Scan Completed.
     */
    public $Status;

    /**
     * @var integer Task progress
     */
    public $Progress;

    /**
     * @var string Task Completion Time
     */
    public $TaskTime;

    /**
     * @var string report ID
     */
    public $ReportId;

    /**
     * @var string report name
     */
    public $ReportName;

    /**
     * @var integer Scanning Schedule. 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
     */
    public $ScanPlan;

    /**
     * @var integer Number of Associated Assets
     */
    public $AssetCount;

    /**
     * @var string APP ID
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
     * @param string $TaskId Task ID
     * @param string $TaskName Task name.
     * @param integer $Status Task Status Code: 1-Awaiting Start, 2-Scanning, 3-Scan Error, 4-Scan Completed.
     * @param integer $Progress Task progress
     * @param string $TaskTime Task Completion Time
     * @param string $ReportId report ID
     * @param string $ReportName report name
     * @param integer $ScanPlan Scanning Schedule. 0-Periodic Task; 1-Scan Now; 2-Scheduled Scan; 3-Custom.
     * @param integer $AssetCount Number of Associated Assets
     * @param string $AppId APP ID
     * @param string $UIN User Host Account ID
     * @param string $UserName User name
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
