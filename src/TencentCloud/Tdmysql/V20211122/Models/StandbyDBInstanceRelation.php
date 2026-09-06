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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disaster recovery instance relationship
 *
 * @method string getPrimaryInstanceId() Obtain Primary instance ID
 * @method void setPrimaryInstanceId(string $PrimaryInstanceId) Set Primary instance ID
 * @method string getPrimaryInstanceName() Obtain Primary instance name
 * @method void setPrimaryInstanceName(string $PrimaryInstanceName) Set Primary instance name
 * @method string getPrimaryRegion() Obtain Region of the primary instance
 * @method void setPrimaryRegion(string $PrimaryRegion) Set Region of the primary instance
 * @method string getPrimaryVip() Obtain Subnet IP of the primary instance
 * @method void setPrimaryVip(string $PrimaryVip) Set Subnet IP of the primary instance
 * @method integer getPrimaryVport() Obtain Port of the primary instance subnet
 * @method void setPrimaryVport(integer $PrimaryVport) Set Port of the primary instance subnet
 * @method array getPrimaryZones() Obtain Primary instance AZ
 * @method void setPrimaryZones(array $PrimaryZones) Set Primary instance AZ
 * @method string getPrimaryStatus() Obtain Primary instance running status
 * @method void setPrimaryStatus(string $PrimaryStatus) Set Primary instance running status
 * @method string getSecondaryInstanceId() Obtain Disaster Recovery instance ID
 * @method void setSecondaryInstanceId(string $SecondaryInstanceId) Set Disaster Recovery instance ID
 * @method string getSecondaryInstanceName() Obtain Disaster Recovery instance name
 * @method void setSecondaryInstanceName(string $SecondaryInstanceName) Set Disaster Recovery instance name
 * @method string getSecondaryRegion() Obtain Region of the standby instance
 * @method void setSecondaryRegion(string $SecondaryRegion) Set Region of the standby instance
 * @method string getSecondaryVip() Obtain Subnet IP of the Disaster Recovery instance
 * @method void setSecondaryVip(string $SecondaryVip) Set Subnet IP of the Disaster Recovery instance
 * @method integer getSecondaryVport() Obtain Port of the Disaster Recovery instance subnet
 * @method void setSecondaryVport(integer $SecondaryVport) Set Port of the Disaster Recovery instance subnet
 * @method array getSecondaryZones() Obtain Disaster Recovery instance availability zone
 * @method void setSecondaryZones(array $SecondaryZones) Set Disaster Recovery instance availability zone
 * @method string getSecondaryStatus() Obtain Disaster Recovery instance running status
 * @method void setSecondaryStatus(string $SecondaryStatus) Set Disaster Recovery instance running status
 * @method string getConnType() Obtain Connection type. Valid values: `log_service`, `raft`.
 * @method void setConnType(string $ConnType) Set Connection type. Valid values: `log_service`, `raft`.
 * @method string getSyncMode() Obtain Synchronization type. Valid values: `sync` and `async`.
 * @method void setSyncMode(string $SyncMode) Set Synchronization type. Valid values: `sync` and `async`.
 * @method integer getSyncStatus() Obtain Synchronization status. 1: synchronizing; 2: sync exception
 * @method void setSyncStatus(integer $SyncStatus) Set Synchronization status. 1: synchronizing; 2: sync exception
 * @method string getSyncStatusDesc() Obtain Synchronization status description. Error information when the synchronization status is abnormal.
 * @method void setSyncStatusDesc(string $SyncStatusDesc) Set Synchronization status description. Error information when the synchronization status is abnormal.
 * @method string getStandbyStatus() Obtain Disaster recovery status description. Valid values: "creating", "running", "modifying". Empty if no disaster recovery relationship exists.
 * @method void setStandbyStatus(string $StandbyStatus) Set Disaster recovery status description. Valid values: "creating", "running", "modifying". Empty if no disaster recovery relationship exists.
 * @method string getPrimaryCreateVersion() Obtain Primary instance version
 * @method void setPrimaryCreateVersion(string $PrimaryCreateVersion) Set Primary instance version
 * @method string getSecondaryCreateVersion() Obtain Disaster Recovery instance version
 * @method void setSecondaryCreateVersion(string $SecondaryCreateVersion) Set Disaster Recovery instance version
 * @method integer getSyncDelay() Obtain Latency in seconds
 * @method void setSyncDelay(integer $SyncDelay) Set Latency in seconds
 */
class StandbyDBInstanceRelation extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $PrimaryInstanceId;

    /**
     * @var string Primary instance name
     */
    public $PrimaryInstanceName;

    /**
     * @var string Region of the primary instance
     */
    public $PrimaryRegion;

    /**
     * @var string Subnet IP of the primary instance
     */
    public $PrimaryVip;

    /**
     * @var integer Port of the primary instance subnet
     */
    public $PrimaryVport;

    /**
     * @var array Primary instance AZ
     */
    public $PrimaryZones;

    /**
     * @var string Primary instance running status
     */
    public $PrimaryStatus;

    /**
     * @var string Disaster Recovery instance ID
     */
    public $SecondaryInstanceId;

    /**
     * @var string Disaster Recovery instance name
     */
    public $SecondaryInstanceName;

    /**
     * @var string Region of the standby instance
     */
    public $SecondaryRegion;

    /**
     * @var string Subnet IP of the Disaster Recovery instance
     */
    public $SecondaryVip;

    /**
     * @var integer Port of the Disaster Recovery instance subnet
     */
    public $SecondaryVport;

    /**
     * @var array Disaster Recovery instance availability zone
     */
    public $SecondaryZones;

    /**
     * @var string Disaster Recovery instance running status
     */
    public $SecondaryStatus;

    /**
     * @var string Connection type. Valid values: `log_service`, `raft`.
     */
    public $ConnType;

    /**
     * @var string Synchronization type. Valid values: `sync` and `async`.
     */
    public $SyncMode;

    /**
     * @var integer Synchronization status. 1: synchronizing; 2: sync exception
     */
    public $SyncStatus;

    /**
     * @var string Synchronization status description. Error information when the synchronization status is abnormal.
     */
    public $SyncStatusDesc;

    /**
     * @var string Disaster recovery status description. Valid values: "creating", "running", "modifying". Empty if no disaster recovery relationship exists.
     */
    public $StandbyStatus;

    /**
     * @var string Primary instance version
     */
    public $PrimaryCreateVersion;

    /**
     * @var string Disaster Recovery instance version
     */
    public $SecondaryCreateVersion;

    /**
     * @var integer Latency in seconds
     */
    public $SyncDelay;

    /**
     * @param string $PrimaryInstanceId Primary instance ID
     * @param string $PrimaryInstanceName Primary instance name
     * @param string $PrimaryRegion Region of the primary instance
     * @param string $PrimaryVip Subnet IP of the primary instance
     * @param integer $PrimaryVport Port of the primary instance subnet
     * @param array $PrimaryZones Primary instance AZ
     * @param string $PrimaryStatus Primary instance running status
     * @param string $SecondaryInstanceId Disaster Recovery instance ID
     * @param string $SecondaryInstanceName Disaster Recovery instance name
     * @param string $SecondaryRegion Region of the standby instance
     * @param string $SecondaryVip Subnet IP of the Disaster Recovery instance
     * @param integer $SecondaryVport Port of the Disaster Recovery instance subnet
     * @param array $SecondaryZones Disaster Recovery instance availability zone
     * @param string $SecondaryStatus Disaster Recovery instance running status
     * @param string $ConnType Connection type. Valid values: `log_service`, `raft`.
     * @param string $SyncMode Synchronization type. Valid values: `sync` and `async`.
     * @param integer $SyncStatus Synchronization status. 1: synchronizing; 2: sync exception
     * @param string $SyncStatusDesc Synchronization status description. Error information when the synchronization status is abnormal.
     * @param string $StandbyStatus Disaster recovery status description. Valid values: "creating", "running", "modifying". Empty if no disaster recovery relationship exists.
     * @param string $PrimaryCreateVersion Primary instance version
     * @param string $SecondaryCreateVersion Disaster Recovery instance version
     * @param integer $SyncDelay Latency in seconds
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
        if (array_key_exists("PrimaryInstanceId",$param) and $param["PrimaryInstanceId"] !== null) {
            $this->PrimaryInstanceId = $param["PrimaryInstanceId"];
        }

        if (array_key_exists("PrimaryInstanceName",$param) and $param["PrimaryInstanceName"] !== null) {
            $this->PrimaryInstanceName = $param["PrimaryInstanceName"];
        }

        if (array_key_exists("PrimaryRegion",$param) and $param["PrimaryRegion"] !== null) {
            $this->PrimaryRegion = $param["PrimaryRegion"];
        }

        if (array_key_exists("PrimaryVip",$param) and $param["PrimaryVip"] !== null) {
            $this->PrimaryVip = $param["PrimaryVip"];
        }

        if (array_key_exists("PrimaryVport",$param) and $param["PrimaryVport"] !== null) {
            $this->PrimaryVport = $param["PrimaryVport"];
        }

        if (array_key_exists("PrimaryZones",$param) and $param["PrimaryZones"] !== null) {
            $this->PrimaryZones = $param["PrimaryZones"];
        }

        if (array_key_exists("PrimaryStatus",$param) and $param["PrimaryStatus"] !== null) {
            $this->PrimaryStatus = $param["PrimaryStatus"];
        }

        if (array_key_exists("SecondaryInstanceId",$param) and $param["SecondaryInstanceId"] !== null) {
            $this->SecondaryInstanceId = $param["SecondaryInstanceId"];
        }

        if (array_key_exists("SecondaryInstanceName",$param) and $param["SecondaryInstanceName"] !== null) {
            $this->SecondaryInstanceName = $param["SecondaryInstanceName"];
        }

        if (array_key_exists("SecondaryRegion",$param) and $param["SecondaryRegion"] !== null) {
            $this->SecondaryRegion = $param["SecondaryRegion"];
        }

        if (array_key_exists("SecondaryVip",$param) and $param["SecondaryVip"] !== null) {
            $this->SecondaryVip = $param["SecondaryVip"];
        }

        if (array_key_exists("SecondaryVport",$param) and $param["SecondaryVport"] !== null) {
            $this->SecondaryVport = $param["SecondaryVport"];
        }

        if (array_key_exists("SecondaryZones",$param) and $param["SecondaryZones"] !== null) {
            $this->SecondaryZones = $param["SecondaryZones"];
        }

        if (array_key_exists("SecondaryStatus",$param) and $param["SecondaryStatus"] !== null) {
            $this->SecondaryStatus = $param["SecondaryStatus"];
        }

        if (array_key_exists("ConnType",$param) and $param["ConnType"] !== null) {
            $this->ConnType = $param["ConnType"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncStatusDesc",$param) and $param["SyncStatusDesc"] !== null) {
            $this->SyncStatusDesc = $param["SyncStatusDesc"];
        }

        if (array_key_exists("StandbyStatus",$param) and $param["StandbyStatus"] !== null) {
            $this->StandbyStatus = $param["StandbyStatus"];
        }

        if (array_key_exists("PrimaryCreateVersion",$param) and $param["PrimaryCreateVersion"] !== null) {
            $this->PrimaryCreateVersion = $param["PrimaryCreateVersion"];
        }

        if (array_key_exists("SecondaryCreateVersion",$param) and $param["SecondaryCreateVersion"] !== null) {
            $this->SecondaryCreateVersion = $param["SecondaryCreateVersion"];
        }

        if (array_key_exists("SyncDelay",$param) and $param["SyncDelay"] !== null) {
            $this->SyncDelay = $param["SyncDelay"];
        }
    }
}
