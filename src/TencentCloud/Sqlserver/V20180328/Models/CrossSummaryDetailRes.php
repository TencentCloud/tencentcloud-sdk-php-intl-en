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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cross-Region Backup Real-Time Statistics List Items
 *
 * @method integer getStatus() Obtain Instance Status
 * @method void setStatus(integer $Status) Set Instance Status
 * @method string getRegion() Obtain Instance Region
 * @method void setRegion(string $Region) Set Instance Region
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getName() Obtain Instance Name
 * @method void setName(string $Name) Set Instance Name
 * @method string getCrossBackupEnabled() Obtain Cross-Region Backup Status: enable - Enabled, disable - Disabled
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) Set Cross-Region Backup Status: enable - Enabled, disable - Disabled
 * @method array getCrossRegions() Obtain Cross-Region Backup Target Region
 * @method void setCrossRegions(array $CrossRegions) Set Cross-Region Backup Target Region
 * @method string getLastBackupStartTime() Obtain Latest Backup Start Time
 * @method void setLastBackupStartTime(string $LastBackupStartTime) Set Latest Backup Start Time
 * @method integer getCrossBackupSaveDays() Obtain Cross-Region Backup Retention Days
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) Set Cross-Region Backup Retention Days
 * @method integer getDataBackupSpace() Obtain Cross-Region Data Backup Total Space
 * @method void setDataBackupSpace(integer $DataBackupSpace) Set Cross-Region Data Backup Total Space
 * @method integer getDataBackupCount() Obtain Cross-Region Data Backup Total File Count
 * @method void setDataBackupCount(integer $DataBackupCount) Set Cross-Region Data Backup Total File Count
 * @method integer getLogBackupSpace() Obtain Cross-Region Log Backup Total Space
 * @method void setLogBackupSpace(integer $LogBackupSpace) Set Cross-Region Log Backup Total Space
 * @method integer getLogBackupCount() Obtain Cross-Region Log Backup Total File Count
 * @method void setLogBackupCount(integer $LogBackupCount) Set Cross-Region Log Backup Total File Count
 * @method integer getActualUsedSpace() Obtain Cross-Region Backup Total Space
 * @method void setActualUsedSpace(integer $ActualUsedSpace) Set Cross-Region Backup Total Space
 * @method integer getActualUsedCount() Obtain Cross-Region Backup Total Count
 * @method void setActualUsedCount(integer $ActualUsedCount) Set Cross-Region Backup Total Count
 */
class CrossSummaryDetailRes extends AbstractModel
{
    /**
     * @var integer Instance Status
     */
    public $Status;

    /**
     * @var string Instance Region
     */
    public $Region;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance Name
     */
    public $Name;

    /**
     * @var string Cross-Region Backup Status: enable - Enabled, disable - Disabled
     */
    public $CrossBackupEnabled;

    /**
     * @var array Cross-Region Backup Target Region
     */
    public $CrossRegions;

    /**
     * @var string Latest Backup Start Time
     */
    public $LastBackupStartTime;

    /**
     * @var integer Cross-Region Backup Retention Days
     */
    public $CrossBackupSaveDays;

    /**
     * @var integer Cross-Region Data Backup Total Space
     */
    public $DataBackupSpace;

    /**
     * @var integer Cross-Region Data Backup Total File Count
     */
    public $DataBackupCount;

    /**
     * @var integer Cross-Region Log Backup Total Space
     */
    public $LogBackupSpace;

    /**
     * @var integer Cross-Region Log Backup Total File Count
     */
    public $LogBackupCount;

    /**
     * @var integer Cross-Region Backup Total Space
     */
    public $ActualUsedSpace;

    /**
     * @var integer Cross-Region Backup Total Count
     */
    public $ActualUsedCount;

    /**
     * @param integer $Status Instance Status
     * @param string $Region Instance Region
     * @param string $InstanceId Instance ID
     * @param string $Name Instance Name
     * @param string $CrossBackupEnabled Cross-Region Backup Status: enable - Enabled, disable - Disabled
     * @param array $CrossRegions Cross-Region Backup Target Region
     * @param string $LastBackupStartTime Latest Backup Start Time
     * @param integer $CrossBackupSaveDays Cross-Region Backup Retention Days
     * @param integer $DataBackupSpace Cross-Region Data Backup Total Space
     * @param integer $DataBackupCount Cross-Region Data Backup Total File Count
     * @param integer $LogBackupSpace Cross-Region Log Backup Total Space
     * @param integer $LogBackupCount Cross-Region Log Backup Total File Count
     * @param integer $ActualUsedSpace Cross-Region Backup Total Space
     * @param integer $ActualUsedCount Cross-Region Backup Total Count
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CrossBackupEnabled",$param) and $param["CrossBackupEnabled"] !== null) {
            $this->CrossBackupEnabled = $param["CrossBackupEnabled"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("LastBackupStartTime",$param) and $param["LastBackupStartTime"] !== null) {
            $this->LastBackupStartTime = $param["LastBackupStartTime"];
        }

        if (array_key_exists("CrossBackupSaveDays",$param) and $param["CrossBackupSaveDays"] !== null) {
            $this->CrossBackupSaveDays = $param["CrossBackupSaveDays"];
        }

        if (array_key_exists("DataBackupSpace",$param) and $param["DataBackupSpace"] !== null) {
            $this->DataBackupSpace = $param["DataBackupSpace"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("LogBackupSpace",$param) and $param["LogBackupSpace"] !== null) {
            $this->LogBackupSpace = $param["LogBackupSpace"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
        }

        if (array_key_exists("ActualUsedCount",$param) and $param["ActualUsedCount"] !== null) {
            $this->ActualUsedCount = $param["ActualUsedCount"];
        }
    }
}
