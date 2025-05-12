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
 * @method void setUin(string $Uin) Set User UIN
 * @method string getDbType() Obtain Engine type.
 * @method void setDbType(string $DbType) Set Engine type.
 * @method integer getAppId() Obtain User appid.
 * @method void setAppId(integer $AppId) Set User appid.
 * @method string getStatusDesc() Obtain Cluster status description
 * @method void setStatusDesc(string $StatusDesc) Set Cluster status description
 * @method string getCreateTime() Obtain Cluster Creation Time
 * @method void setCreateTime(string $CreateTime) Set Cluster Creation Time
 * @method integer getPayMode() Obtain Payment mode. 0: pay-as-you-go; 1: monthly subscription.
 * @method void setPayMode(integer $PayMode) Set Payment mode. 0: pay-as-you-go; 1: monthly subscription.
 * @method string getPeriodEndTime() Obtain Expiration time.
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time.
 * @method string getVip() Obtain Cluster read/write vip.
 * @method void setVip(string $Vip) Set Cluster read/write vip.
 * @method integer getVport() Obtain Cluster read/write vport.
 * @method void setVport(integer $Vport) Set Cluster read/write vport.
 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method string getVpcId() Obtain Specifies the virtual private cloud ID.
 * @method void setVpcId(string $VpcId) Set Specifies the virtual private cloud ID.
 * @method string getSubnetId() Obtain Specifies the subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Specifies the subnet ID.
 * @method string getCynosVersion() Obtain Specifies the cynos kernel version.
 * @method void setCynosVersion(string $CynosVersion) Set Specifies the cynos kernel version.
 * @method integer getStorageLimit() Obtain Specifies the storage capacity.
 * @method void setStorageLimit(integer $StorageLimit) Set Specifies the storage capacity.
 * @method integer getRenewFlag() Obtain Renewal Flag
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal Flag
 * @method string getProcessingTask() Obtain Task being processed.
 * @method void setProcessingTask(string $ProcessingTask) Set Task being processed.
 * @method array getTasks() Obtain Task array of the cluster.
 * @method void setTasks(array $Tasks) Set Task array of the cluster.
 * @method array getResourceTags() Obtain Array of tags bound to the cluster.
 * @method void setResourceTags(array $ResourceTags) Set Array of tags bound to the cluster.
 * @method string getDbMode() Obtain Db type (NORMAL, SERVERLESS).
 * @method void setDbMode(string $DbMode) Set Db type (NORMAL, SERVERLESS).
 * @method string getServerlessStatus() Obtain Specifies the status of the SERVERLESS cluster when the Db type is SERVERLESS. valid values:.
resume
pause
 * @method void setServerlessStatus(string $ServerlessStatus) Set Specifies the status of the SERVERLESS cluster when the Db type is SERVERLESS. valid values:.
resume
pause
 * @method integer getStorage() Obtain Cluster prepaid storage size.
 * @method void setStorage(integer $Storage) Set Cluster prepaid storage size.
 * @method string getStorageId() Obtain Cluster storage ID for prepaid storage, specifies the storage ID used for prepaid storage modification.
 * @method void setStorageId(string $StorageId) Set Cluster storage ID for prepaid storage, specifies the storage ID used for prepaid storage modification.
 * @method integer getStoragePayMode() Obtain Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription.
 * @method void setStoragePayMode(integer $StoragePayMode) Set Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription.
 * @method integer getMinStorageSize() Obtain Minimum storage value corresponding to cluster computing specifications.
 * @method void setMinStorageSize(integer $MinStorageSize) Set Minimum storage value corresponding to cluster computing specifications.
 * @method integer getMaxStorageSize() Obtain The maximum storage value corresponding to the cluster computing specification.
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set The maximum storage value corresponding to the cluster computing specification.
 * @method array getNetAddrs() Obtain Specifies the cluster network information.
 * @method void setNetAddrs(array $NetAddrs) Set Specifies the cluster network information.
 * @method string getPhysicalZone() Obtain Physical availability zone.
 * @method void setPhysicalZone(string $PhysicalZone) Set Physical availability zone.
 * @method string getMasterZone() Obtain Primary AZ.
 * @method void setMasterZone(string $MasterZone) Set Primary AZ.
 * @method string getHasSlaveZone() Obtain Whether there is an availability zone.
 * @method void setHasSlaveZone(string $HasSlaveZone) Set Whether there is an availability zone.
 * @method array getSlaveZones() Obtain Secondary AZ.
 * @method void setSlaveZones(array $SlaveZones) Set Secondary AZ.
 * @method string getBusinessType() Obtain Business type.
 * @method void setBusinessType(string $BusinessType) Set Business type.
 * @method string getIsFreeze() Obtain Whether to freeze.
 * @method void setIsFreeze(string $IsFreeze) Set Whether to freeze.
 * @method string getOrderSource() Obtain Order Source
 * @method void setOrderSource(string $OrderSource) Set Order Source
 * @method Ability getAbility() Obtain Capacity.
 * @method void setAbility(Ability $Ability) Set Capacity.
 * @method array getResourcePackages() Obtain Specifies the information of the resource package bound to the instance (only the storage resource package is returned here, that is, packageType=DISK).	
 * @method void setResourcePackages(array $ResourcePackages) Set Specifies the information of the resource package bound to the instance (only the storage resource package is returned here, that is, packageType=DISK).	
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
     */
    public $Uin;

    /**
     * @var string Engine type.
     */
    public $DbType;

    /**
     * @var integer User appid.
     */
    public $AppId;

    /**
     * @var string Cluster status description
     */
    public $StatusDesc;

    /**
     * @var string Cluster Creation Time
     */
    public $CreateTime;

    /**
     * @var integer Payment mode. 0: pay-as-you-go; 1: monthly subscription.
     */
    public $PayMode;

    /**
     * @var string Expiration time.
     */
    public $PeriodEndTime;

    /**
     * @var string Cluster read/write vip.
     */
    public $Vip;

    /**
     * @var integer Cluster read/write vport.
     */
    public $Vport;

    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var string Specifies the virtual private cloud ID.
     */
    public $VpcId;

    /**
     * @var string Specifies the subnet ID.
     */
    public $SubnetId;

    /**
     * @var string Specifies the cynos kernel version.
     */
    public $CynosVersion;

    /**
     * @var integer Specifies the storage capacity.
     */
    public $StorageLimit;

    /**
     * @var integer Renewal Flag
     */
    public $RenewFlag;

    /**
     * @var string Task being processed.
     */
    public $ProcessingTask;

    /**
     * @var array Task array of the cluster.
     */
    public $Tasks;

    /**
     * @var array Array of tags bound to the cluster.
     */
    public $ResourceTags;

    /**
     * @var string Db type (NORMAL, SERVERLESS).
     */
    public $DbMode;

    /**
     * @var string Specifies the status of the SERVERLESS cluster when the Db type is SERVERLESS. valid values:.
resume
pause
     */
    public $ServerlessStatus;

    /**
     * @var integer Cluster prepaid storage size.
     */
    public $Storage;

    /**
     * @var string Cluster storage ID for prepaid storage, specifies the storage ID used for prepaid storage modification.
     */
    public $StorageId;

    /**
     * @var integer Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription.
     */
    public $StoragePayMode;

    /**
     * @var integer Minimum storage value corresponding to cluster computing specifications.
     */
    public $MinStorageSize;

    /**
     * @var integer The maximum storage value corresponding to the cluster computing specification.
     */
    public $MaxStorageSize;

    /**
     * @var array Specifies the cluster network information.
     */
    public $NetAddrs;

    /**
     * @var string Physical availability zone.
     */
    public $PhysicalZone;

    /**
     * @var string Primary AZ.
     */
    public $MasterZone;

    /**
     * @var string Whether there is an availability zone.
     */
    public $HasSlaveZone;

    /**
     * @var array Secondary AZ.
     */
    public $SlaveZones;

    /**
     * @var string Business type.
     */
    public $BusinessType;

    /**
     * @var string Whether to freeze.
     */
    public $IsFreeze;

    /**
     * @var string Order Source
     */
    public $OrderSource;

    /**
     * @var Ability Capacity.
     */
    public $Ability;

    /**
     * @var array Specifies the information of the resource package bound to the instance (only the storage resource package is returned here, that is, packageType=DISK).	
     */
    public $ResourcePackages;

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
     * @param string $DbType Engine type.
     * @param integer $AppId User appid.
     * @param string $StatusDesc Cluster status description
     * @param string $CreateTime Cluster Creation Time
     * @param integer $PayMode Payment mode. 0: pay-as-you-go; 1: monthly subscription.
     * @param string $PeriodEndTime Expiration time.
     * @param string $Vip Cluster read/write vip.
     * @param integer $Vport Cluster read/write vport.
     * @param integer $ProjectID Project ID
     * @param string $VpcId Specifies the virtual private cloud ID.
     * @param string $SubnetId Specifies the subnet ID.
     * @param string $CynosVersion Specifies the cynos kernel version.
     * @param integer $StorageLimit Specifies the storage capacity.
     * @param integer $RenewFlag Renewal Flag
     * @param string $ProcessingTask Task being processed.
     * @param array $Tasks Task array of the cluster.
     * @param array $ResourceTags Array of tags bound to the cluster.
     * @param string $DbMode Db type (NORMAL, SERVERLESS).
     * @param string $ServerlessStatus Specifies the status of the SERVERLESS cluster when the Db type is SERVERLESS. valid values:.
resume
pause
     * @param integer $Storage Cluster prepaid storage size.
     * @param string $StorageId Cluster storage ID for prepaid storage, specifies the storage ID used for prepaid storage modification.
     * @param integer $StoragePayMode Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription.
     * @param integer $MinStorageSize Minimum storage value corresponding to cluster computing specifications.
     * @param integer $MaxStorageSize The maximum storage value corresponding to the cluster computing specification.
     * @param array $NetAddrs Specifies the cluster network information.
     * @param string $PhysicalZone Physical availability zone.
     * @param string $MasterZone Primary AZ.
     * @param string $HasSlaveZone Whether there is an availability zone.
     * @param array $SlaveZones Secondary AZ.
     * @param string $BusinessType Business type.
     * @param string $IsFreeze Whether to freeze.
     * @param string $OrderSource Order Source
     * @param Ability $Ability Capacity.
     * @param array $ResourcePackages Specifies the information of the resource package bound to the instance (only the storage resource package is returned here, that is, packageType=DISK).	
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

        if (array_key_exists("ResourcePackages",$param) and $param["ResourcePackages"] !== null) {
            $this->ResourcePackages = [];
            foreach ($param["ResourcePackages"] as $key => $value){
                $obj = new ResourcePackage();
                $obj->deserialize($value);
                array_push($this->ResourcePackages, $obj);
            }
        }
    }
}
