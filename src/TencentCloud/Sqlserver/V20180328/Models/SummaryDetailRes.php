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
 * @method integer getRegionId() Obtain 
 * @method void setRegionId(integer $RegionId) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getActualUsedSpace() Obtain 
 * @method void setActualUsedSpace(integer $ActualUsedSpace) Set 
 * @method integer getDataBackupSpace() Obtain 
 * @method void setDataBackupSpace(integer $DataBackupSpace) Set 
 * @method integer getDataBackupCount() Obtain 
 * @method void setDataBackupCount(integer $DataBackupCount) Set 
 * @method integer getLogBackupSpace() Obtain 
 * @method void setLogBackupSpace(integer $LogBackupSpace) Set 
 * @method integer getLogBackupCount() Obtain 
 * @method void setLogBackupCount(integer $LogBackupCount) Set 
 * @method integer getAutoBackupSpace() Obtain 
 * @method void setAutoBackupSpace(integer $AutoBackupSpace) Set 
 * @method integer getAutoBackupCount() Obtain 
 * @method void setAutoBackupCount(integer $AutoBackupCount) Set 
 * @method integer getManualBackupSpace() Obtain 
 * @method void setManualBackupSpace(integer $ManualBackupSpace) Set 
 * @method integer getManualBackupCount() Obtain 
 * @method void setManualBackupCount(integer $ManualBackupCount) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 */
class SummaryDetailRes extends AbstractModel
{
    /**
     * @var integer 
     */
    public $RegionId;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $ActualUsedSpace;

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
    public $AutoBackupSpace;

    /**
     * @var integer 
     */
    public $AutoBackupCount;

    /**
     * @var integer 
     */
    public $ManualBackupSpace;

    /**
     * @var integer 
     */
    public $ManualBackupCount;

    /**
     * @var string 
     */
    public $Region;

    /**
     * @param integer $RegionId 
     * @param integer $Status 
     * @param string $InstanceId 
     * @param string $Name 
     * @param integer $ActualUsedSpace 
     * @param integer $DataBackupSpace 
     * @param integer $DataBackupCount 
     * @param integer $LogBackupSpace 
     * @param integer $LogBackupCount 
     * @param integer $AutoBackupSpace 
     * @param integer $AutoBackupCount 
     * @param integer $ManualBackupSpace 
     * @param integer $ManualBackupCount 
     * @param string $Region 
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
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

        if (array_key_exists("AutoBackupSpace",$param) and $param["AutoBackupSpace"] !== null) {
            $this->AutoBackupSpace = $param["AutoBackupSpace"];
        }

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("ManualBackupSpace",$param) and $param["ManualBackupSpace"] !== null) {
            $this->ManualBackupSpace = $param["ManualBackupSpace"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
