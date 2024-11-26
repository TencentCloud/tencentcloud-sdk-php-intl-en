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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBasicDBInstances request structure.
 *
 * @method string getZone() Obtain 
 * @method void setZone(string $Zone) Set 
 * @method integer getCpu() Obtain 
 * @method void setCpu(integer $Cpu) Set 
 * @method integer getMemory() Obtain 
 * @method void setMemory(integer $Memory) Set 
 * @method integer getStorage() Obtain 
 * @method void setStorage(integer $Storage) Set 
 * @method string getSubnetId() Obtain 
 * @method void setSubnetId(string $SubnetId) Set 
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getMachineType() Obtain 
 * @method void setMachineType(string $MachineType) Set 
 * @method string getInstanceChargeType() Obtain 
 * @method void setInstanceChargeType(string $InstanceChargeType) Set 
 * @method integer getProjectId() Obtain 
 * @method void setProjectId(integer $ProjectId) Set 
 * @method integer getGoodsNum() Obtain 
 * @method void setGoodsNum(integer $GoodsNum) Set 
 * @method string getDBVersion() Obtain 
 * @method void setDBVersion(string $DBVersion) Set 
 * @method integer getPeriod() Obtain 
 * @method void setPeriod(integer $Period) Set 
 * @method array getSecurityGroupList() Obtain 
 * @method void setSecurityGroupList(array $SecurityGroupList) Set 
 * @method integer getAutoRenewFlag() Obtain 
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set 
 * @method integer getAutoVoucher() Obtain 
 * @method void setAutoVoucher(integer $AutoVoucher) Set 
 * @method array getVoucherIds() Obtain 
 * @method void setVoucherIds(array $VoucherIds) Set 
 * @method array getWeekly() Obtain 
 * @method void setWeekly(array $Weekly) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method integer getSpan() Obtain 
 * @method void setSpan(integer $Span) Set 
 * @method array getResourceTags() Obtain 
 * @method void setResourceTags(array $ResourceTags) Set 
 * @method string getCollation() Obtain 
 * @method void setCollation(string $Collation) Set 
 * @method string getTimeZone() Obtain 
 * @method void setTimeZone(string $TimeZone) Set 
 */
class CreateBasicDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Zone;

    /**
     * @var integer 
     */
    public $Cpu;

    /**
     * @var integer 
     */
    public $Memory;

    /**
     * @var integer 
     */
    public $Storage;

    /**
     * @var string 
     */
    public $SubnetId;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string 
     */
    public $MachineType;

    /**
     * @var string 
     */
    public $InstanceChargeType;

    /**
     * @var integer 
     */
    public $ProjectId;

    /**
     * @var integer 
     */
    public $GoodsNum;

    /**
     * @var string 
     */
    public $DBVersion;

    /**
     * @var integer 
     */
    public $Period;

    /**
     * @var array 
     */
    public $SecurityGroupList;

    /**
     * @var integer 
     */
    public $AutoRenewFlag;

    /**
     * @var integer 
     */
    public $AutoVoucher;

    /**
     * @var array 
     */
    public $VoucherIds;

    /**
     * @var array 
     */
    public $Weekly;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var integer 
     */
    public $Span;

    /**
     * @var array 
     */
    public $ResourceTags;

    /**
     * @var string 
     */
    public $Collation;

    /**
     * @var string 
     */
    public $TimeZone;

    /**
     * @param string $Zone 
     * @param integer $Cpu 
     * @param integer $Memory 
     * @param integer $Storage 
     * @param string $SubnetId 
     * @param string $VpcId 
     * @param string $MachineType 
     * @param string $InstanceChargeType 
     * @param integer $ProjectId 
     * @param integer $GoodsNum 
     * @param string $DBVersion 
     * @param integer $Period 
     * @param array $SecurityGroupList 
     * @param integer $AutoRenewFlag 
     * @param integer $AutoVoucher 
     * @param array $VoucherIds 
     * @param array $Weekly 
     * @param string $StartTime 
     * @param integer $Span 
     * @param array $ResourceTags 
     * @param string $Collation 
     * @param string $TimeZone 
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = $param["Weekly"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Span",$param) and $param["Span"] !== null) {
            $this->Span = $param["Span"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
