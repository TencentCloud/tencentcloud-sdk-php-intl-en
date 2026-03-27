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
 * Backup Overview Real-Time Statistics
 *
 * @method integer getRegionId() Obtain Region Identifier
 * @method void setRegionId(integer $RegionId) Set Region Identifier
 * @method integer getStatus() Obtain Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (performing instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
 * @method void setStatus(integer $Status) Set Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (performing instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getName() Obtain Instance Name
 * @method void setName(string $Name) Set Instance Name
 * @method integer getActualUsedSpace() Obtain Backup Space
 * @method void setActualUsedSpace(integer $ActualUsedSpace) Set Backup Space
 * @method integer getDataBackupSpace() Obtain Data Backup Space
 * @method void setDataBackupSpace(integer $DataBackupSpace) Set Data Backup Space
 * @method integer getDataBackupCount() Obtain Data Backup Total File Count
 * @method void setDataBackupCount(integer $DataBackupCount) Set Data Backup Total File Count
 * @method integer getLogBackupSpace() Obtain Log Backup Space
 * @method void setLogBackupSpace(integer $LogBackupSpace) Set Log Backup Space
 * @method integer getLogBackupCount() Obtain Log Backup Total File Count
 * @method void setLogBackupCount(integer $LogBackupCount) Set Log Backup Total File Count
 * @method integer getAutoBackupSpace() Obtain Automatic Backup Space
 * @method void setAutoBackupSpace(integer $AutoBackupSpace) Set Automatic Backup Space
 * @method integer getAutoBackupCount() Obtain Automatic Backup Total File Count
 * @method void setAutoBackupCount(integer $AutoBackupCount) Set Automatic Backup Total File Count
 * @method integer getManualBackupSpace() Obtain Manual Backup Space
 * @method void setManualBackupSpace(integer $ManualBackupSpace) Set Manual Backup Space
 * @method integer getManualBackupCount() Obtain Manual Backup Total File Count
 * @method void setManualBackupCount(integer $ManualBackupCount) Set Manual Backup Total File Count
 * @method string getRegion() Obtain Instance Region Code
 * @method void setRegion(string $Region) Set Instance Region Code
 */
class SummaryDetailRes extends AbstractModel
{
    /**
     * @var integer Region Identifier
     */
    public $RegionId;

    /**
     * @var integer Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (performing instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
     */
    public $Status;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance Name
     */
    public $Name;

    /**
     * @var integer Backup Space
     */
    public $ActualUsedSpace;

    /**
     * @var integer Data Backup Space
     */
    public $DataBackupSpace;

    /**
     * @var integer Data Backup Total File Count
     */
    public $DataBackupCount;

    /**
     * @var integer Log Backup Space
     */
    public $LogBackupSpace;

    /**
     * @var integer Log Backup Total File Count
     */
    public $LogBackupCount;

    /**
     * @var integer Automatic Backup Space
     */
    public $AutoBackupSpace;

    /**
     * @var integer Automatic Backup Total File Count
     */
    public $AutoBackupCount;

    /**
     * @var integer Manual Backup Space
     */
    public $ManualBackupSpace;

    /**
     * @var integer Manual Backup Total File Count
     */
    public $ManualBackupCount;

    /**
     * @var string Instance Region Code
     */
    public $Region;

    /**
     * @param integer $RegionId Region Identifier
     * @param integer $Status Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (performing instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
     * @param string $InstanceId Instance ID
     * @param string $Name Instance Name
     * @param integer $ActualUsedSpace Backup Space
     * @param integer $DataBackupSpace Data Backup Space
     * @param integer $DataBackupCount Data Backup Total File Count
     * @param integer $LogBackupSpace Log Backup Space
     * @param integer $LogBackupCount Log Backup Total File Count
     * @param integer $AutoBackupSpace Automatic Backup Space
     * @param integer $AutoBackupCount Automatic Backup Total File Count
     * @param integer $ManualBackupSpace Manual Backup Space
     * @param integer $ManualBackupCount Manual Backup Total File Count
     * @param string $Region Instance Region Code
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
