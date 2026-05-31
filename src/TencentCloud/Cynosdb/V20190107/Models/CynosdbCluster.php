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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster information
 *
 * @method string getStatus() Obtain <p>Cluster status. Valid values include:<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: De-isolating<br>offlining: Offline<br>offlined: Offline<br>deleting: Deleting<br>deleted: Deleted</p>
 * @method void setStatus(string $Status) Set <p>Cluster status. Valid values include:<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: De-isolating<br>offlining: Offline<br>offlined: Offline<br>deleting: Deleting<br>deleted: Deleted</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getRegion() Obtain <p>Region</p>
 * @method void setRegion(string $Region) Set <p>Region</p>
 * @method string getDbVersion() Obtain <p>Database version</p>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getInstanceNum() Obtain <p>Number of instances</p>
 * @method void setInstanceNum(integer $InstanceNum) Set <p>Number of instances</p>
 * @method string getUin() Obtain <p>User uin</p>
 * @method void setUin(string $Uin) Set <p>User uin</p>
 * @method string getDbType() Obtain <p>Engine type</p>
 * @method void setDbType(string $DbType) Set <p>Engine type</p>
 * @method integer getAppId() Obtain <p>User appid</p>
 * @method void setAppId(integer $AppId) Set <p>User appid</p>
 * @method string getStatusDesc() Obtain <p>Cluster status description</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Cluster status description</p>
 * @method string getCreateTime() Obtain <p>Cluster creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Cluster creation time</p>
 * @method integer getPayMode() Obtain <p>Payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
 * @method void setPayMode(integer $PayMode) Set <p>Payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
 * @method string getPeriodEndTime() Obtain <p>End time</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>End time</p>
 * @method string getVip() Obtain <p>Cluster read/write vip</p>
 * @method void setVip(string $Vip) Set <p>Cluster read/write vip</p>
 * @method integer getVport() Obtain <p>Cluster read/write vport</p>
 * @method void setVport(integer $Vport) Set <p>Cluster read/write vport</p>
 * @method integer getProjectID() Obtain <p>Project ID.</p>
 * @method void setProjectID(integer $ProjectID) Set <p>Project ID.</p>
 * @method string getVpcId() Obtain <p>VPC ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getCynosVersion() Obtain <p>cynos kernel version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>cynos kernel version</p>
 * @method string getCynosVersionTag() Obtain <p>cynos version tag</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) Set <p>cynos version tag</p>
 * @method integer getStorageLimit() Obtain <p>Storage capacity</p>
 * @method void setStorageLimit(integer $StorageLimit) Set <p>Storage capacity</p>
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
 * @method string getProcessingTask() Obtain <p>Currently processing task</p>
 * @method void setProcessingTask(string $ProcessingTask) Set <p>Currently processing task</p>
 * @method array getTasks() Obtain <p>Task array of the cluster</p>
 * @method void setTasks(array $Tasks) Set <p>Task array of the cluster</p>
 * @method array getResourceTags() Obtain <p>tag Array of cluster binding</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>tag Array of cluster binding</p>
 * @method string getDbMode() Obtain <p>Db type (NORMAL, SERVERLESS)</p>
 * @method void setDbMode(string $DbMode) Set <p>Db type (NORMAL, SERVERLESS)</p>
 * @method string getServerlessStatus() Obtain <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>pause</p>
 * @method void setServerlessStatus(string $ServerlessStatus) Set <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>pause</p>
 * @method integer getStorage() Obtain <p>Cluster Prepaid storage size</p>
 * @method void setStorage(integer $Storage) Set <p>Cluster Prepaid storage size</p>
 * @method string getStorageId() Obtain <p>Storage ID of cluster storage in prepayment, used for prepaid storage configuration change</p>
 * @method void setStorageId(string $StorageId) Set <p>Storage ID of cluster storage in prepayment, used for prepaid storage configuration change</p>
 * @method integer getStoragePayMode() Obtain <p>Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
 * @method void setStoragePayMode(integer $StoragePayMode) Set <p>Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
 * @method integer getMinStorageSize() Obtain <p>Minimum storage of the cluster compute specification</p>
 * @method void setMinStorageSize(integer $MinStorageSize) Set <p>Minimum storage of the cluster compute specification</p>
 * @method integer getMaxStorageSize() Obtain <p>Maximum storage value of the cluster compute specification</p>
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set <p>Maximum storage value of the cluster compute specification</p>
 * @method array getNetAddrs() Obtain <p>Cluster network information</p>
 * @method void setNetAddrs(array $NetAddrs) Set <p>Cluster network information</p>
 * @method string getPhysicalZone() Obtain <p>Physical AZ</p>
 * @method void setPhysicalZone(string $PhysicalZone) Set <p>Physical AZ</p>
 * @method string getMasterZone() Obtain <p>Primary AZ</p>
 * @method void setMasterZone(string $MasterZone) Set <p>Primary AZ</p>
 * @method string getHasSlaveZone() Obtain <p>Whether there is a secondary AZ</p>
 * @method void setHasSlaveZone(string $HasSlaveZone) Set <p>Whether there is a secondary AZ</p>
 * @method array getSlaveZones() Obtain <p>Secondary AZ</p>
 * @method void setSlaveZones(array $SlaveZones) Set <p>Secondary AZ</p>
 * @method string getBusinessType() Obtain <p>Business type</p>
 * @method void setBusinessType(string $BusinessType) Set <p>Business type</p>
 * @method string getIsFreeze() Obtain <p>Freeze or not</p>
 * @method void setIsFreeze(string $IsFreeze) Set <p>Freeze or not</p>
 * @method string getOrderSource() Obtain <p>Order source</p>
 * @method void setOrderSource(string $OrderSource) Set <p>Order source</p>
 * @method Ability getAbility() Obtain <p>Capacity</p>
 * @method void setAbility(Ability $Ability) Set <p>Capacity</p>
 * @method array getResourcePackages() Obtain <p>Instance bind resource package info (here only return storage resource package, for example packageType=DISK)</p>
 * @method void setResourcePackages(array $ResourcePackages) Set <p>Instance bind resource package info (here only return storage resource package, for example packageType=DISK)</p>
 * @method string getGdnId() Obtain <p>Global database unique ID</p>
 * @method void setGdnId(string $GdnId) Set <p>Global database unique ID</p>
 * @method string getGdnRole() Obtain <p>Cluster role. Primary cluster - primary, slave cluster - standby. If GdnId is empty, the field is invalid.</p>
 * @method void setGdnRole(string $GdnRole) Set <p>Cluster role. Primary cluster - primary, slave cluster - standby. If GdnId is empty, the field is invalid.</p>
 */
class CynosdbCluster extends AbstractModel
{
    /**
     * @var string <p>Cluster status. Valid values include:<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: De-isolating<br>offlining: Offline<br>offlined: Offline<br>deleting: Deleting<br>deleted: Deleted</p>
     */
    public $Status;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Region</p>
     */
    public $Region;

    /**
     * @var string <p>Database version</p>
     */
    public $DbVersion;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Number of instances</p>
     */
    public $InstanceNum;

    /**
     * @var string <p>User uin</p>
     */
    public $Uin;

    /**
     * @var string <p>Engine type</p>
     */
    public $DbType;

    /**
     * @var integer <p>User appid</p>
     */
    public $AppId;

    /**
     * @var string <p>Cluster status description</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>Cluster creation time</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
     */
    public $PayMode;

    /**
     * @var string <p>End time</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>Cluster read/write vip</p>
     */
    public $Vip;

    /**
     * @var integer <p>Cluster read/write vport</p>
     */
    public $Vport;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectID;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>cynos kernel version</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>cynos version tag</p>
     */
    public $CynosVersionTag;

    /**
     * @var integer <p>Storage capacity</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>Renewal flag</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Currently processing task</p>
     */
    public $ProcessingTask;

    /**
     * @var array <p>Task array of the cluster</p>
     */
    public $Tasks;

    /**
     * @var array <p>tag Array of cluster binding</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Db type (NORMAL, SERVERLESS)</p>
     */
    public $DbMode;

    /**
     * @var string <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>pause</p>
     */
    public $ServerlessStatus;

    /**
     * @var integer <p>Cluster Prepaid storage size</p>
     */
    public $Storage;

    /**
     * @var string <p>Storage ID of cluster storage in prepayment, used for prepaid storage configuration change</p>
     */
    public $StorageId;

    /**
     * @var integer <p>Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
     */
    public $StoragePayMode;

    /**
     * @var integer <p>Minimum storage of the cluster compute specification</p>
     */
    public $MinStorageSize;

    /**
     * @var integer <p>Maximum storage value of the cluster compute specification</p>
     */
    public $MaxStorageSize;

    /**
     * @var array <p>Cluster network information</p>
     */
    public $NetAddrs;

    /**
     * @var string <p>Physical AZ</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>Primary AZ</p>
     */
    public $MasterZone;

    /**
     * @var string <p>Whether there is a secondary AZ</p>
     */
    public $HasSlaveZone;

    /**
     * @var array <p>Secondary AZ</p>
     */
    public $SlaveZones;

    /**
     * @var string <p>Business type</p>
     */
    public $BusinessType;

    /**
     * @var string <p>Freeze or not</p>
     */
    public $IsFreeze;

    /**
     * @var string <p>Order source</p>
     */
    public $OrderSource;

    /**
     * @var Ability <p>Capacity</p>
     */
    public $Ability;

    /**
     * @var array <p>Instance bind resource package info (here only return storage resource package, for example packageType=DISK)</p>
     */
    public $ResourcePackages;

    /**
     * @var string <p>Global database unique ID</p>
     */
    public $GdnId;

    /**
     * @var string <p>Cluster role. Primary cluster - primary, slave cluster - standby. If GdnId is empty, the field is invalid.</p>
     */
    public $GdnRole;

    /**
     * @param string $Status <p>Cluster status. Valid values include:<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: De-isolating<br>offlining: Offline<br>offlined: Offline<br>deleting: Deleting<br>deleted: Deleted</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $Region <p>Region</p>
     * @param string $DbVersion <p>Database version</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $InstanceNum <p>Number of instances</p>
     * @param string $Uin <p>User uin</p>
     * @param string $DbType <p>Engine type</p>
     * @param integer $AppId <p>User appid</p>
     * @param string $StatusDesc <p>Cluster status description</p>
     * @param string $CreateTime <p>Cluster creation time</p>
     * @param integer $PayMode <p>Payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
     * @param string $PeriodEndTime <p>End time</p>
     * @param string $Vip <p>Cluster read/write vip</p>
     * @param integer $Vport <p>Cluster read/write vport</p>
     * @param integer $ProjectID <p>Project ID.</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $CynosVersion <p>cynos kernel version</p>
     * @param string $CynosVersionTag <p>cynos version tag</p>
     * @param integer $StorageLimit <p>Storage capacity</p>
     * @param integer $RenewFlag <p>Renewal flag</p>
     * @param string $ProcessingTask <p>Currently processing task</p>
     * @param array $Tasks <p>Task array of the cluster</p>
     * @param array $ResourceTags <p>tag Array of cluster binding</p>
     * @param string $DbMode <p>Db type (NORMAL, SERVERLESS)</p>
     * @param string $ServerlessStatus <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>pause</p>
     * @param integer $Storage <p>Cluster Prepaid storage size</p>
     * @param string $StorageId <p>Storage ID of cluster storage in prepayment, used for prepaid storage configuration change</p>
     * @param integer $StoragePayMode <p>Cluster storage payment mode. 0: pay-as-you-go; 1: monthly subscription</p>
     * @param integer $MinStorageSize <p>Minimum storage of the cluster compute specification</p>
     * @param integer $MaxStorageSize <p>Maximum storage value of the cluster compute specification</p>
     * @param array $NetAddrs <p>Cluster network information</p>
     * @param string $PhysicalZone <p>Physical AZ</p>
     * @param string $MasterZone <p>Primary AZ</p>
     * @param string $HasSlaveZone <p>Whether there is a secondary AZ</p>
     * @param array $SlaveZones <p>Secondary AZ</p>
     * @param string $BusinessType <p>Business type</p>
     * @param string $IsFreeze <p>Freeze or not</p>
     * @param string $OrderSource <p>Order source</p>
     * @param Ability $Ability <p>Capacity</p>
     * @param array $ResourcePackages <p>Instance bind resource package info (here only return storage resource package, for example packageType=DISK)</p>
     * @param string $GdnId <p>Global database unique ID</p>
     * @param string $GdnRole <p>Cluster role. Primary cluster - primary, slave cluster - standby. If GdnId is empty, the field is invalid.</p>
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

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
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

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("GdnRole",$param) and $param["GdnRole"] !== null) {
            $this->GdnRole = $param["GdnRole"];
        }
    }
}
