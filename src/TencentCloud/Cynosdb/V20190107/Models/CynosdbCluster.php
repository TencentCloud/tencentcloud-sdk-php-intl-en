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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster information
 *
 * @method string getStatus() Obtain Cluster status. Valid values are as follows:
creating
running
isolating
isolated
activating (removing isolation)
offlining (deactivating)
offlined (deactivated)
deleting
deleted
 * @method void setStatus(string $Status) Set Cluster status. Valid values are as follows:
creating
running
isolating
isolated
activating (removing isolation)
offlining (deactivating)
offlined (deactivated)
deleting
deleted
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getDbVersion() Obtain Database version
 * @method void setDbVersion(string $DbVersion) Set Database version
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getInstanceNum() Obtain Number of instances
 * @method void setInstanceNum(integer $InstanceNum) Set Number of instances
 * @method string getUin() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbType() Obtain Engine type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbType(string $DbType) Set Engine type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain User `appid`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User `appid`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain Cluster status description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Cluster status description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Cluster creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Cluster creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMode() Obtain Billing mode. `0`: Pay-as-you-go; `1`: Monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(integer $PayMode) Set Billing mode. `0`: Pay-as-you-go; `1`: Monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPeriodEndTime() Obtain End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodEndTime(string $PeriodEndTime) Set End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain Cluster read-write VIP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set Cluster read-write VIP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain Cluster read-write vport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set Cluster read-write vport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectID() Obtain Project ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectID(integer $ProjectID) Set Project ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCynosVersion() Obtain TDSQL-C kernel version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCynosVersion(string $CynosVersion) Set TDSQL-C kernel version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageLimit() Obtain Storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageLimit(integer $StorageLimit) Set Storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessingTask() Obtain Task in progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessingTask(string $ProcessingTask) Set Task in progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTasks() Obtain Array of tasks in the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTasks(array $Tasks) Set Array of tasks in the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain Array of tags bound to the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set Array of tags bound to the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbMode() Obtain Database type. Valid values: `NORMAL`, `SERVERLESS`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbMode(string $DbMode) Set Database type. Valid values: `NORMAL`, `SERVERLESS`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerlessStatus() Obtain Serverless cluster status when the database type is `SERVERLESS`. Valid values:
`resume`
`pause`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerlessStatus(string $ServerlessStatus) Set Serverless cluster status when the database type is `SERVERLESS`. Valid values:
`resume`
`pause`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorage() Obtain Prepaid cluster storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorage(integer $Storage) Set Prepaid cluster storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageId() Obtain Cluster storage ID used in prepaid storage modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageId(string $StorageId) Set Cluster storage ID used in prepaid storage modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStoragePayMode() Obtain Billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStoragePayMode(integer $StoragePayMode) Set Billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinStorageSize() Obtain The minimum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinStorageSize(integer $MinStorageSize) Set The minimum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxStorageSize() Obtain The maximum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set The maximum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNetAddrs() Obtain Network information of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetAddrs(array $NetAddrs) Set Network information of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhysicalZone() Obtain Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhysicalZone(string $PhysicalZone) Set Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMasterZone() Obtain Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterZone(string $MasterZone) Set Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHasSlaveZone() Obtain Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasSlaveZone(string $HasSlaveZone) Set Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSlaveZones() Obtain Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveZones(array $SlaveZones) Set Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessType() Obtain Business type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessType(string $BusinessType) Set Business type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsFreeze() Obtain Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsFreeze(string $IsFreeze) Set Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrderSource() Obtain Order source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderSource(string $OrderSource) Set Order source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Ability getAbility() Obtain Capability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAbility(Ability $Ability) Set Capability
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CynosdbCluster extends AbstractModel
{
    /**
     * @var string Cluster status. Valid values are as follows:
creating
running
isolating
isolated
activating (removing isolation)
offlining (deactivating)
offlined (deactivated)
deleting
deleted
     */
    public $Status;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Database version
     */
    public $DbVersion;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Number of instances
     */
    public $InstanceNum;

    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Engine type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbType;

    /**
     * @var integer User `appid`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Cluster status description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var string Cluster creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Billing mode. `0`: Pay-as-you-go; `1`: Monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodEndTime;

    /**
     * @var string Cluster read-write VIP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer Cluster read-write vport
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var integer Project ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectID;

    /**
     * @var string VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string TDSQL-C kernel version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CynosVersion;

    /**
     * @var integer Storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageLimit;

    /**
     * @var integer Renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var string Task in progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessingTask;

    /**
     * @var array Array of tasks in the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tasks;

    /**
     * @var array Array of tags bound to the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var string Database type. Valid values: `NORMAL`, `SERVERLESS`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbMode;

    /**
     * @var string Serverless cluster status when the database type is `SERVERLESS`. Valid values:
`resume`
`pause`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerlessStatus;

    /**
     * @var integer Prepaid cluster storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Storage;

    /**
     * @var string Cluster storage ID used in prepaid storage modification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageId;

    /**
     * @var integer Billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StoragePayMode;

    /**
     * @var integer The minimum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinStorageSize;

    /**
     * @var integer The maximum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxStorageSize;

    /**
     * @var array Network information of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetAddrs;

    /**
     * @var string Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhysicalZone;

    /**
     * @var string Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterZone;

    /**
     * @var string Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasSlaveZone;

    /**
     * @var array Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveZones;

    /**
     * @var string Business type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessType;

    /**
     * @var string Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsFreeze;

    /**
     * @var string Order source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderSource;

    /**
     * @var Ability Capability
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ability;

    /**
     * @param string $Status Cluster status. Valid values are as follows:
creating
running
isolating
isolated
activating (removing isolation)
offlining (deactivating)
offlined (deactivated)
deleting
deleted
     * @param string $UpdateTime Update time
     * @param string $Zone AZ
     * @param string $ClusterName Cluster name
     * @param string $Region Region
     * @param string $DbVersion Database version
     * @param string $ClusterId Cluster ID
     * @param integer $InstanceNum Number of instances
     * @param string $Uin User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbType Engine type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppId User `appid`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc Cluster status description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Cluster creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMode Billing mode. `0`: Pay-as-you-go; `1`: Monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PeriodEndTime End time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip Cluster read-write VIP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Vport Cluster read-write vport
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectID Project ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CynosVersion TDSQL-C kernel version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageLimit Storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessingTask Task in progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tasks Array of tasks in the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags Array of tags bound to the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbMode Database type. Valid values: `NORMAL`, `SERVERLESS`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerlessStatus Serverless cluster status when the database type is `SERVERLESS`. Valid values:
`resume`
`pause`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Storage Prepaid cluster storage capacity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageId Cluster storage ID used in prepaid storage modification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StoragePayMode Billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinStorageSize The minimum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxStorageSize The maximum storage corresponding to the compute specification of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NetAddrs Network information of the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PhysicalZone Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MasterZone Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HasSlaveZone Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SlaveZones Secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessType Business type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsFreeze Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrderSource Order source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Ability $Ability Capability
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("NetAddrs",$param) and $param["NetAddrs"] !== null) {
            $this->NetAddrs = [];
            foreach ($param["NetAddrs"] as $key => $value){
                $obj = new NetAddr();
                $obj->deserialize($value);
                array_push($this->NetAddrs, $obj);
            }
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("HasSlaveZone",$param) and $param["HasSlaveZone"] !== null) {
            $this->HasSlaveZone = $param["HasSlaveZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("Ability",$param) and $param["Ability"] !== null) {
            $this->Ability = new Ability();
            $this->Ability->deserialize($param["Ability"]);
        }
    }
}
