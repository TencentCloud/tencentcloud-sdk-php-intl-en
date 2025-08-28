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
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getUid() Obtain 
 * @method void setUid(string $Uid) Set 
 * @method integer getProjectId() Obtain 
 * @method void setProjectId(integer $ProjectId) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 * @method integer getMemory() Obtain 
 * @method void setMemory(integer $Memory) Set 
 * @method integer getStorage() Obtain 
 * @method void setStorage(integer $Storage) Set 
 * @method integer getCpu() Obtain 
 * @method void setCpu(integer $Cpu) Set 
 * @method string getVersion() Obtain 
 * @method void setVersion(string $Version) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method integer getModel() Obtain 
 * @method void setModel(integer $Model) Set 
 * @method integer getPayMode() Obtain 
 * @method void setPayMode(integer $PayMode) Set 
 * @method integer getWeight() Obtain 
 * @method void setWeight(integer $Weight) Set 
 * @method string getDelayTime() Obtain 
 * @method void setDelayTime(string $DelayTime) Set 
 * @method string getSynStatus() Obtain 
 * @method void setSynStatus(string $SynStatus) Set 
 * @method string getDatabaseDifference() Obtain 
 * @method void setDatabaseDifference(string $DatabaseDifference) Set 
 * @method string getAccountDifference() Obtain 
 * @method void setAccountDifference(string $AccountDifference) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method string getIsolateTime() Obtain 
 * @method void setIsolateTime(string $IsolateTime) Set 
 * @method string getRegionId() Obtain 
 * @method void setRegionId(string $RegionId) Set 
 * @method string getZoneId() Obtain 
 * @method void setZoneId(string $ZoneId) Set 
 */
class ReadOnlyInstance extends AbstractModel
{
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
    public $Uid;

    /**
     * @var integer 
     */
    public $ProjectId;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var integer 
     */
    public $Memory;

    /**
     * @var integer 
     */
    public $Storage;

    /**
     * @var integer 
     */
    public $Cpu;

    /**
     * @var string 
     */
    public $Version;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var integer 
     */
    public $Model;

    /**
     * @var integer 
     */
    public $PayMode;

    /**
     * @var integer 
     */
    public $Weight;

    /**
     * @var string 
     */
    public $DelayTime;

    /**
     * @var string 
     */
    public $SynStatus;

    /**
     * @var string 
     */
    public $DatabaseDifference;

    /**
     * @var string 
     */
    public $AccountDifference;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var string 
     */
    public $IsolateTime;

    /**
     * @var string 
     */
    public $RegionId;

    /**
     * @var string 
     */
    public $ZoneId;

    /**
     * @param string $InstanceId 
     * @param string $Name 
     * @param string $Uid 
     * @param integer $ProjectId 
     * @param integer $Status 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param integer $Memory 
     * @param integer $Storage 
     * @param integer $Cpu 
     * @param string $Version 
     * @param string $Type 
     * @param integer $Model 
     * @param integer $PayMode 
     * @param integer $Weight 
     * @param string $DelayTime 
     * @param string $SynStatus 
     * @param string $DatabaseDifference 
     * @param string $AccountDifference 
     * @param string $StartTime 
     * @param string $EndTime 
     * @param string $IsolateTime 
     * @param string $RegionId 
     * @param string $ZoneId 
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("SynStatus",$param) and $param["SynStatus"] !== null) {
            $this->SynStatus = $param["SynStatus"];
        }

        if (array_key_exists("DatabaseDifference",$param) and $param["DatabaseDifference"] !== null) {
            $this->DatabaseDifference = $param["DatabaseDifference"];
        }

        if (array_key_exists("AccountDifference",$param) and $param["AccountDifference"] !== null) {
            $this->AccountDifference = $param["AccountDifference"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
