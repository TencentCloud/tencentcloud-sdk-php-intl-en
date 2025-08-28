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
 * 
 *
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getCrossBackupEnabled() Obtain 
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) Set 
 * @method array getCrossRegions() Obtain 
 * @method void setCrossRegions(array $CrossRegions) Set 
 * @method string getLastBackupStartTime() Obtain 
 * @method void setLastBackupStartTime(string $LastBackupStartTime) Set 
 * @method integer getCrossBackupSaveDays() Obtain 
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) Set 
 * @method integer getDataBackupSpace() Obtain 
 * @method void setDataBackupSpace(integer $DataBackupSpace) Set 
 * @method integer getDataBackupCount() Obtain 
 * @method void setDataBackupCount(integer $DataBackupCount) Set 
 * @method integer getLogBackupSpace() Obtain 
 * @method void setLogBackupSpace(integer $LogBackupSpace) Set 
 * @method integer getLogBackupCount() Obtain 
 * @method void setLogBackupCount(integer $LogBackupCount) Set 
 * @method integer getActualUsedSpace() Obtain 
 * @method void setActualUsedSpace(integer $ActualUsedSpace) Set 
 * @method integer getActualUsedCount() Obtain 
 * @method void setActualUsedCount(integer $ActualUsedCount) Set 
 */
class CrossSummaryDetailRes extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var string 
     */
    public $Region;

    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $CrossBackupEnabled;

    /**
     * @var array 
     */
    public $CrossRegions;

    /**
     * @var string 
     */
    public $LastBackupStartTime;

    /**
     * @var integer 
     */
    public $CrossBackupSaveDays;

    /**
     * @var integer 
     */
    public $DataBackupSpace;

    /**
     * @var integer 
     */
    public $DataBackupCount;

    /**
     * @var integer 
     */
    public $LogBackupSpace;

    /**
     * @var integer 
     */
    public $LogBackupCount;

    /**
     * @var integer 
     */
    public $ActualUsedSpace;

    /**
     * @var integer 
     */
    public $ActualUsedCount;

    /**
     * @param integer $Status 
     * @param string $Region 
     * @param string $InstanceId 
     * @param string $Name 
     * @param string $CrossBackupEnabled 
     * @param array $CrossRegions 
     * @param string $LastBackupStartTime 
     * @param integer $CrossBackupSaveDays 
     * @param integer $DataBackupSpace 
     * @param integer $DataBackupCount 
     * @param integer $LogBackupSpace 
     * @param integer $LogBackupCount 
     * @param integer $ActualUsedSpace 
     * @param integer $ActualUsedCount 
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
