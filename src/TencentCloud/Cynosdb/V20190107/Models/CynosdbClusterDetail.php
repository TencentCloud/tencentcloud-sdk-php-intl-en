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
 * Cluster details
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getPhysicalZone() Obtain Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhysicalZone(string $PhysicalZone) Set Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getStatusDesc() Obtain Status description
 * @method void setStatusDesc(string $StatusDesc) Set Status description
 * @method string getServerlessStatus() Obtain Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
 * @method void setServerlessStatus(string $ServerlessStatus) Set Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
 * @method string getStorageId() Obtain Storage ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageId(string $StorageId) Set Storage ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorage() Obtain Storage capacity in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorage(integer $Storage) Set Storage capacity in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxStorageSize() Obtain Maximum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set Maximum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinStorageSize() Obtain Minimum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinStorageSize(integer $MinStorageSize) Set Minimum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStoragePayMode() Obtain Storage billing mode. Valid values: `1` (monthly subscription), `0` (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStoragePayMode(integer $StoragePayMode) Set Storage billing mode. Valid values: `1` (monthly subscription), `0` (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method string getVpcId() Obtain Unique VPC ID
 * @method void setVpcId(string $VpcId) Set Unique VPC ID
 * @method string getSubnetName() Obtain Subnet name
 * @method void setSubnetName(string $SubnetName) Set Subnet name
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getCharset() Obtain Character set
 * @method void setCharset(string $Charset) Set Character set
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getDbType() Obtain Database type
 * @method void setDbType(string $DbType) Set Database type
 * @method string getDbMode() Obtain Database type. Valid values: `normal`, `serverless`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbMode(string $DbMode) Set Database type. Valid values: `normal`, `serverless`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbVersion() Obtain Database version
 * @method void setDbVersion(string $DbVersion) Set Database version
 * @method integer getStorageLimit() Obtain Maximum storage space
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageLimit(integer $StorageLimit) Set Maximum storage space
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUsedStorage() Obtain Used capacity
 * @method void setUsedStorage(integer $UsedStorage) Set Used capacity
 * @method string getVip() Obtain VIP
 * @method void setVip(string $Vip) Set VIP
 * @method integer getVport() Obtain vport
 * @method void setVport(integer $Vport) Set vport
 * @method array getRoAddr() Obtain vport for read/write separation
 * @method void setRoAddr(array $RoAddr) Set vport for read/write separation
 * @method Ability getAbility() Obtain Features supported by the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAbility(Ability $Ability) Set Features supported by the cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCynosVersion() Obtain TDSQL-C version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCynosVersion(string $CynosVersion) Set TDSQL-C version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessType() Obtain Business type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessType(string $BusinessType) Set Business type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHasSlaveZone() Obtain Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasSlaveZone(string $HasSlaveZone) Set Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsFreeze() Obtain Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsFreeze(string $IsFreeze) Set Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTasks() Obtain Task list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTasks(array $Tasks) Set Task list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMasterZone() Obtain Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterZone(string $MasterZone) Set Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSlaveZones() Obtain Secondary AZ list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveZones(array $SlaveZones) Set Secondary AZ list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceSet() Obtain Instance information
 * @method void setInstanceSet(array $InstanceSet) Set Instance information
 * @method integer getPayMode() Obtain Billing mode
 * @method void setPayMode(integer $PayMode) Set Billing mode
 * @method string getPeriodEndTime() Obtain Expiration time
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time
 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method array getResourceTags() Obtain Array of tags bound to instance
 * @method void setResourceTags(array $ResourceTags) Set Array of tags bound to instance
 * @method string getProxyStatus() Obtain Proxy status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyStatus(string $ProxyStatus) Set Proxy status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogBin() Obtain Binlog switch. Valid values: `ON`, `OFF`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogBin(string $LogBin) Set Binlog switch. Valid values: `ON`, `OFF`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsSkipTrade() Obtain Whether to skip the transaction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSkipTrade(string $IsSkipTrade) Set Whether to skip the transaction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPitrType() Obtain PITR type. Valid values: `normal`, `redo_pitr`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPitrType(string $PitrType) Set PITR type. Valid values: `normal`, `redo_pitr`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsOpenPasswordComplexity() Obtain Whether to enable password complexity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsOpenPasswordComplexity(string $IsOpenPasswordComplexity) Set Whether to enable password complexity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetworkStatus() Obtain Network type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkStatus(string $NetworkStatus) Set Network type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourcePackages() Obtain Information of the resource pack bound to a cluster Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourcePackages(array $ResourcePackages) Set Information of the resource pack bound to a cluster Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain The auto-renewal flag. Valid values: `0`: (manual renewal, default), `1` (auto-renewal). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set The auto-renewal flag. Valid values: `0`: (manual renewal, default), `1` (auto-renewal). Note: This field may return null, indicating that no valid values can be obtained.
 */
class CynosdbClusterDetail extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhysicalZone;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Status description
     */
    public $StatusDesc;

    /**
     * @var string Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
     */
    public $ServerlessStatus;

    /**
     * @var string Storage ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageId;

    /**
     * @var integer Storage capacity in GB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Storage;

    /**
     * @var integer Maximum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxStorageSize;

    /**
     * @var integer Minimum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinStorageSize;

    /**
     * @var integer Storage billing mode. Valid values: `1` (monthly subscription), `0` (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StoragePayMode;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var string Unique VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet name
     */
    public $SubnetName;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Character set
     */
    public $Charset;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Database type
     */
    public $DbType;

    /**
     * @var string Database type. Valid values: `normal`, `serverless`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbMode;

    /**
     * @var string Database version
     */
    public $DbVersion;

    /**
     * @var integer Maximum storage space
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageLimit;

    /**
     * @var integer Used capacity
     */
    public $UsedStorage;

    /**
     * @var string VIP
     */
    public $Vip;

    /**
     * @var integer vport
     */
    public $Vport;

    /**
     * @var array vport for read/write separation
     */
    public $RoAddr;

    /**
     * @var Ability Features supported by the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ability;

    /**
     * @var string TDSQL-C version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CynosVersion;

    /**
     * @var string Business type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessType;

    /**
     * @var string Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasSlaveZone;

    /**
     * @var string Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsFreeze;

    /**
     * @var array Task list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tasks;

    /**
     * @var string Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterZone;

    /**
     * @var array Secondary AZ list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveZones;

    /**
     * @var array Instance information
     */
    public $InstanceSet;

    /**
     * @var integer Billing mode
     */
    public $PayMode;

    /**
     * @var string Expiration time
     */
    public $PeriodEndTime;

    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var array Array of tags bound to instance
     */
    public $ResourceTags;

    /**
     * @var string Proxy status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyStatus;

    /**
     * @var string Binlog switch. Valid values: `ON`, `OFF`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogBin;

    /**
     * @var string Whether to skip the transaction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSkipTrade;

    /**
     * @var string PITR type. Valid values: `normal`, `redo_pitr`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PitrType;

    /**
     * @var string Whether to enable password complexity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsOpenPasswordComplexity;

    /**
     * @var string Network type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkStatus;

    /**
     * @var array Information of the resource pack bound to a cluster Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourcePackages;

    /**
     * @var integer The auto-renewal flag. Valid values: `0`: (manual renewal, default), `1` (auto-renewal). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Region Region
     * @param string $Zone AZ
     * @param string $PhysicalZone Physical AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status
     * @param string $StatusDesc Status description
     * @param string $ServerlessStatus Serverless cluster status when the database type is `SERVERLESS`. Valid values:
resume
resuming
pause
pausing
     * @param string $StorageId Storage ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Storage Storage capacity in GB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxStorageSize Maximum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinStorageSize Minimum storage specification in GB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StoragePayMode Storage billing mode. Valid values: `1` (monthly subscription), `0` (pay-as-you-go).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcName VPC name
     * @param string $VpcId Unique VPC ID
     * @param string $SubnetName Subnet name
     * @param string $SubnetId Subnet ID
     * @param string $Charset Character set
     * @param string $CreateTime Creation time
     * @param string $DbType Database type
     * @param string $DbMode Database type. Valid values: `normal`, `serverless`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbVersion Database version
     * @param integer $StorageLimit Maximum storage space
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UsedStorage Used capacity
     * @param string $Vip VIP
     * @param integer $Vport vport
     * @param array $RoAddr vport for read/write separation
     * @param Ability $Ability Features supported by the cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CynosVersion TDSQL-C version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessType Business type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HasSlaveZone Whether there is a secondary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsFreeze Whether to freeze
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tasks Task list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MasterZone Primary AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SlaveZones Secondary AZ list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceSet Instance information
     * @param integer $PayMode Billing mode
     * @param string $PeriodEndTime Expiration time
     * @param integer $ProjectID Project ID
     * @param array $ResourceTags Array of tags bound to instance
     * @param string $ProxyStatus Proxy status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogBin Binlog switch. Valid values: `ON`, `OFF`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsSkipTrade Whether to skip the transaction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PitrType PITR type. Valid values: `normal`, `redo_pitr`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsOpenPasswordComplexity Whether to enable password complexity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NetworkStatus Network type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourcePackages Information of the resource pack bound to a cluster Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag The auto-renewal flag. Valid values: `0`: (manual renewal, default), `1` (auto-renewal). Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("RoAddr",$param) and $param["RoAddr"] !== null) {
            $this->RoAddr = [];
            foreach ($param["RoAddr"] as $key => $value){
                $obj = new Addr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("Ability",$param) and $param["Ability"] !== null) {
            $this->Ability = new Ability();
            $this->Ability->deserialize($param["Ability"]);
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("HasSlaveZone",$param) and $param["HasSlaveZone"] !== null) {
            $this->HasSlaveZone = $param["HasSlaveZone"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new ClusterInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ProxyStatus",$param) and $param["ProxyStatus"] !== null) {
            $this->ProxyStatus = $param["ProxyStatus"];
        }

        if (array_key_exists("LogBin",$param) and $param["LogBin"] !== null) {
            $this->LogBin = $param["LogBin"];
        }

        if (array_key_exists("IsSkipTrade",$param) and $param["IsSkipTrade"] !== null) {
            $this->IsSkipTrade = $param["IsSkipTrade"];
        }

        if (array_key_exists("PitrType",$param) and $param["PitrType"] !== null) {
            $this->PitrType = $param["PitrType"];
        }

        if (array_key_exists("IsOpenPasswordComplexity",$param) and $param["IsOpenPasswordComplexity"] !== null) {
            $this->IsOpenPasswordComplexity = $param["IsOpenPasswordComplexity"];
        }

        if (array_key_exists("NetworkStatus",$param) and $param["NetworkStatus"] !== null) {
            $this->NetworkStatus = $param["NetworkStatus"];
        }

        if (array_key_exists("ResourcePackages",$param) and $param["ResourcePackages"] !== null) {
            $this->ResourcePackages = [];
            foreach ($param["ResourcePackages"] as $key => $value){
                $obj = new ResourcePackage();
                $obj->deserialize($value);
                array_push($this->ResourcePackages, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
