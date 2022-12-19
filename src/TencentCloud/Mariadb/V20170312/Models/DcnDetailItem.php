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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCN details
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getRegion() Obtain Region where the instance resides
 * @method void setRegion(string $Region) Set Region where the instance resides
 * @method string getZone() Obtain Availability zone where the instance resides
 * @method void setZone(string $Zone) Set Availability zone where the instance resides
 * @method string getVip() Obtain Instance IP address
 * @method void setVip(string $Vip) Set Instance IP address
 * @method string getVipv6() Obtain Instance IPv6 address
 * @method void setVipv6(string $Vipv6) Set Instance IPv6 address
 * @method integer getVport() Obtain Instance port
 * @method void setVport(integer $Vport) Set Instance port
 * @method integer getStatus() Obtain Instance status
 * @method void setStatus(integer $Status) Set Instance status
 * @method string getStatusDesc() Obtain Instance status description
 * @method void setStatusDesc(string $StatusDesc) Set Instance status description
 * @method integer getDcnFlag() Obtain DCN flag. Valid values: `1` (primary), `2` (disaster recovery)
 * @method void setDcnFlag(integer $DcnFlag) Set DCN flag. Valid values: `1` (primary), `2` (disaster recovery)
 * @method integer getDcnStatus() Obtain DCN status. Valid values: `0` (none), `1` (creating), `2` (syncing), `3` (disconnected)
 * @method void setDcnStatus(integer $DcnStatus) Set DCN status. Valid values: `0` (none), `1` (creating), `2` (syncing), `3` (disconnected)
 * @method integer getCpu() Obtain Number of CPU cores of the instance
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of the instance
 * @method integer getMemory() Obtain Instance memory capacity in GB
 * @method void setMemory(integer $Memory) Set Instance memory capacity in GB
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method integer getPayMode() Obtain Billing mode
 * @method void setPayMode(integer $PayMode) Set Billing mode
 * @method string getCreateTime() Obtain Creation time of the instance in the format of 2006-01-02 15:04:05
 * @method void setCreateTime(string $CreateTime) Set Creation time of the instance in the format of 2006-01-02 15:04:05
 * @method string getPeriodEndTime() Obtain Expiration time of the instance in the format of 2006-01-02 15:04:05
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time of the instance in the format of 2006-01-02 15:04:05
 * @method integer getInstanceType() Obtain Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery instance), `4` (dedicated disaster recovery instance)
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery instance), `4` (dedicated disaster recovery instance)
 * @method DCNReplicaConfig getReplicaConfig() Obtain Configuration information of DCN replication. This field is null for a primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicaConfig(DCNReplicaConfig $ReplicaConfig) Set Configuration information of DCN replication. This field is null for a primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DCNReplicaStatus getReplicaStatus() Obtain DCN replication status. This field is null for the primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicaStatus(DCNReplicaStatus $ReplicaStatus) Set DCN replication status. This field is null for the primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEncryptStatus() Obtain Whether KMS is enabled.
 * @method void setEncryptStatus(integer $EncryptStatus) Set Whether KMS is enabled.
 */
class DcnDetailItem extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Region where the instance resides
     */
    public $Region;

    /**
     * @var string Availability zone where the instance resides
     */
    public $Zone;

    /**
     * @var string Instance IP address
     */
    public $Vip;

    /**
     * @var string Instance IPv6 address
     */
    public $Vipv6;

    /**
     * @var integer Instance port
     */
    public $Vport;

    /**
     * @var integer Instance status
     */
    public $Status;

    /**
     * @var string Instance status description
     */
    public $StatusDesc;

    /**
     * @var integer DCN flag. Valid values: `1` (primary), `2` (disaster recovery)
     */
    public $DcnFlag;

    /**
     * @var integer DCN status. Valid values: `0` (none), `1` (creating), `2` (syncing), `3` (disconnected)
     */
    public $DcnStatus;

    /**
     * @var integer Number of CPU cores of the instance
     */
    public $Cpu;

    /**
     * @var integer Instance memory capacity in GB
     */
    public $Memory;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var integer Billing mode
     */
    public $PayMode;

    /**
     * @var string Creation time of the instance in the format of 2006-01-02 15:04:05
     */
    public $CreateTime;

    /**
     * @var string Expiration time of the instance in the format of 2006-01-02 15:04:05
     */
    public $PeriodEndTime;

    /**
     * @var integer Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery instance), `4` (dedicated disaster recovery instance)
     */
    public $InstanceType;

    /**
     * @var DCNReplicaConfig Configuration information of DCN replication. This field is null for a primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicaConfig;

    /**
     * @var DCNReplicaStatus DCN replication status. This field is null for the primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicaStatus;

    /**
     * @var integer Whether KMS is enabled.
     */
    public $EncryptStatus;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Region Region where the instance resides
     * @param string $Zone Availability zone where the instance resides
     * @param string $Vip Instance IP address
     * @param string $Vipv6 Instance IPv6 address
     * @param integer $Vport Instance port
     * @param integer $Status Instance status
     * @param string $StatusDesc Instance status description
     * @param integer $DcnFlag DCN flag. Valid values: `1` (primary), `2` (disaster recovery)
     * @param integer $DcnStatus DCN status. Valid values: `0` (none), `1` (creating), `2` (syncing), `3` (disconnected)
     * @param integer $Cpu Number of CPU cores of the instance
     * @param integer $Memory Instance memory capacity in GB
     * @param integer $Storage Instance storage capacity in GB
     * @param integer $PayMode Billing mode
     * @param string $CreateTime Creation time of the instance in the format of 2006-01-02 15:04:05
     * @param string $PeriodEndTime Expiration time of the instance in the format of 2006-01-02 15:04:05
     * @param integer $InstanceType Instance type. Valid values: `1` (dedicated primary instance), `2` (non-dedicated primary instance), `3` (non-dedicated disaster recovery instance), `4` (dedicated disaster recovery instance)
     * @param DCNReplicaConfig $ReplicaConfig Configuration information of DCN replication. This field is null for a primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DCNReplicaStatus $ReplicaStatus DCN replication status. This field is null for the primary instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EncryptStatus Whether KMS is enabled.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DcnFlag",$param) and $param["DcnFlag"] !== null) {
            $this->DcnFlag = $param["DcnFlag"];
        }

        if (array_key_exists("DcnStatus",$param) and $param["DcnStatus"] !== null) {
            $this->DcnStatus = $param["DcnStatus"];
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ReplicaConfig",$param) and $param["ReplicaConfig"] !== null) {
            $this->ReplicaConfig = new DCNReplicaConfig();
            $this->ReplicaConfig->deserialize($param["ReplicaConfig"]);
        }

        if (array_key_exists("ReplicaStatus",$param) and $param["ReplicaStatus"] !== null) {
            $this->ReplicaStatus = new DCNReplicaStatus();
            $this->ReplicaStatus->deserialize($param["ReplicaStatus"]);
        }

        if (array_key_exists("EncryptStatus",$param) and $param["EncryptStatus"] !== null) {
            $this->EncryptStatus = $param["EncryptStatus"];
        }
    }
}
