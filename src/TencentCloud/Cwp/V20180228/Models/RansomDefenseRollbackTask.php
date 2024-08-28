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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-ransomware rollback task
 *
 * @method integer getId() Obtain Task ID
 * @method void setId(integer $Id) Set Task ID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method integer getStatus() Obtain Rollback Task Status: 0 - In Progress, 1 - Succeeded, 2 - Failed
 * @method void setStatus(integer $Status) Set Rollback Task Status: 0 - In Progress, 1 - Succeeded, 2 - Failed
 * @method string getDisks() Obtain Hard drive ID list, separated by semicolons (;)
 * @method void setDisks(string $Disks) Set Hard drive ID list, separated by semicolons (;)
 * @method string getCreateTime() Obtain Operation time
 * @method void setCreateTime(string $CreateTime) Set Operation time
 * @method string getBackupTime() Obtain Snapshot time
 * @method void setBackupTime(string $BackupTime) Set Snapshot time
 * @method string getModifyTime() Obtain Status!=0 indicates the completion time.
 * @method void setModifyTime(string $ModifyTime) Set Status!=0 indicates the completion time.
 * @method RegionInfo getRegionInfo() Obtain Availability zone information
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Availability zone information
 */
class RansomDefenseRollbackTask extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $Id;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var integer Rollback Task Status: 0 - In Progress, 1 - Succeeded, 2 - Failed
     */
    public $Status;

    /**
     * @var string Hard drive ID list, separated by semicolons (;)
     */
    public $Disks;

    /**
     * @var string Operation time
     */
    public $CreateTime;

    /**
     * @var string Snapshot time
     */
    public $BackupTime;

    /**
     * @var string Status!=0 indicates the completion time.
     */
    public $ModifyTime;

    /**
     * @var RegionInfo Availability zone information
     */
    public $RegionInfo;

    /**
     * @param integer $Id Task ID
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param string $MachineName Host name
     * @param integer $Status Rollback Task Status: 0 - In Progress, 1 - Succeeded, 2 - Failed
     * @param string $Disks Hard drive ID list, separated by semicolons (;)
     * @param string $CreateTime Operation time
     * @param string $BackupTime Snapshot time
     * @param string $ModifyTime Status!=0 indicates the completion time.
     * @param RegionInfo $RegionInfo Availability zone information
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = $param["Disks"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }
    }
}
