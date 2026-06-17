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
 * Cluster details.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getRegion() Obtain <p>Region</p>
 * @method void setRegion(string $Region) Set <p>Region</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getPhysicalZone() Obtain <p>Physical AZ</p>
 * @method void setPhysicalZone(string $PhysicalZone) Set <p>Physical AZ</p>
 * @method string getStatus() Obtain <p>Status. Supported values are as follows:</p><ul><li>creating: Creating</li><li>running: Running</li><li>isolating: Isolation</li><li>isolated: Isolated</li><li>activating: Restore from recycle bin</li><li>offlining: Offline</li><li>offlined: Offline</li><li>deleting: Deleting</li><li>deleted: Deleted</li></ul>
 * @method void setStatus(string $Status) Set <p>Status. Supported values are as follows:</p><ul><li>creating: Creating</li><li>running: Running</li><li>isolating: Isolation</li><li>isolated: Isolated</li><li>activating: Restore from recycle bin</li><li>offlining: Offline</li><li>offlined: Offline</li><li>deleting: Deleting</li><li>deleted: Deleted</li></ul>
 * @method string getStatusDesc() Obtain <p>Status description</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description</p>
 * @method string getServerlessStatus() Obtain <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>resuming<br>pause<br>pausing</p>
 * @method void setServerlessStatus(string $ServerlessStatus) Set <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>resuming<br>pause<br>pausing</p>
 * @method string getStorageId() Obtain <p>Storage Id</p>
 * @method void setStorageId(string $StorageId) Set <p>Storage Id</p>
 * @method integer getStorage() Obtain <p>Storage size in GB</p>
 * @method void setStorage(integer $Storage) Set <p>Storage size in GB</p>
 * @method integer getMaxStorageSize() Obtain <p>Maximum storage specification, in GB</p>
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set <p>Maximum storage specification, in GB</p>
 * @method integer getMinStorageSize() Obtain <p>Minimum storage specification, in GB</p>
 * @method void setMinStorageSize(integer $MinStorageSize) Set <p>Minimum storage specification, in GB</p>
 * @method integer getStoragePayMode() Obtain <p>Storage billing type. Valid values: 1 (yearly/monthly subscription); 0 (pay-as-you-go).</p>
 * @method void setStoragePayMode(integer $StoragePayMode) Set <p>Storage billing type. Valid values: 1 (yearly/monthly subscription); 0 (pay-as-you-go).</p>
 * @method string getVpcName() Obtain <p>VPC name</p>
 * @method void setVpcName(string $VpcName) Set <p>VPC name</p>
 * @method string getVpcId() Obtain <p>vpc Unique id</p>
 * @method void setVpcId(string $VpcId) Set <p>vpc Unique id</p>
 * @method string getSubnetName() Obtain <p>Subnet name.</p>
 * @method void setSubnetName(string $SubnetName) Set <p>Subnet name.</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getCharset() Obtain <p>Character set.</p>
 * @method void setCharset(string $Charset) Set <p>Character set.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getDbType() Obtain <p>Database type</p>
 * @method void setDbType(string $DbType) Set <p>Database type</p>
 * @method string getDbMode() Obtain <p>Db type: <li>NORMAL</li><li>SERVERLESS</li></p>
 * @method void setDbMode(string $DbMode) Set <p>Db type: <li>NORMAL</li><li>SERVERLESS</li></p>
 * @method string getDbVersion() Obtain <p>Database version</p>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version</p>
 * @method integer getStorageLimit() Obtain <p>Storage space limit</p>
 * @method void setStorageLimit(integer $StorageLimit) Set <p>Storage space limit</p>
 * @method integer getUsedStorage() Obtain <p>Used capacity</p>
 * @method void setUsedStorage(integer $UsedStorage) Set <p>Used capacity</p>
 * @method string getVip() Obtain <p>vip address</p>
 * @method void setVip(string $Vip) Set <p>vip address</p>
 * @method integer getVport() Obtain <p>vport port</p>
 * @method void setVport(integer $Vport) Set <p>vport port</p>
 * @method array getRoAddr() Obtain <p>vip address and vport of the cluster read-only instance</p>
 * @method void setRoAddr(array $RoAddr) Set <p>vip address and vport of the cluster read-only instance</p>
 * @method Ability getAbility() Obtain <p>Functions supported by the cluster</p>
 * @method void setAbility(Ability $Ability) Set <p>Functions supported by the cluster</p>
 * @method string getCynosVersion() Obtain <p>cynos version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>cynos version</p>
 * @method string getBusinessType() Obtain <p>Business type</p>
 * @method void setBusinessType(string $BusinessType) Set <p>Business type</p>
 * @method string getHasSlaveZone() Obtain <p>Whether there is a secondary AZ</p>
 * @method void setHasSlaveZone(string $HasSlaveZone) Set <p>Whether there is a secondary AZ</p>
 * @method string getIsFreeze() Obtain <p>Freeze or not</p>
 * @method void setIsFreeze(string $IsFreeze) Set <p>Freeze or not</p>
 * @method array getTasks() Obtain <p>Task List</p>
 * @method void setTasks(array $Tasks) Set <p>Task List</p>
 * @method string getMasterZone() Obtain <p>Primary AZ</p>
 * @method void setMasterZone(string $MasterZone) Set <p>Primary AZ</p>
 * @method array getSlaveZones() Obtain <p>From the AZ list</p>
 * @method void setSlaveZones(array $SlaveZones) Set <p>From the AZ list</p>
 * @method array getInstanceSet() Obtain <p>Instance information</p>
 * @method void setInstanceSet(array $InstanceSet) Set <p>Instance information</p>
 * @method integer getPayMode() Obtain <p>Payment mode</p>
 * @method void setPayMode(integer $PayMode) Set <p>Payment mode</p>
 * @method string getPeriodEndTime() Obtain <p>Expiry time.</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>Expiry time.</p>
 * @method integer getProjectID() Obtain <p>Project ID.</p>
 * @method void setProjectID(integer $ProjectID) Set <p>Project ID.</p>
 * @method array getResourceTags() Obtain <p>tag Array information for instance binding</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>tag Array information for instance binding</p>
 * @method string getProxyStatus() Obtain <p>Proxy status</p>
 * @method void setProxyStatus(string $ProxyStatus) Set <p>Proxy status</p>
 * @method string getLogBin() Obtain <p>binlog switch, available values: ON, OFF</p>
 * @method void setLogBin(string $LogBin) Set <p>binlog switch, available values: ON, OFF</p>
 * @method string getIsSkipTrade() Obtain <p>Skip transaction or not</p>
 * @method void setIsSkipTrade(string $IsSkipTrade) Set <p>Skip transaction or not</p>
 * @method string getPitrType() Obtain <p>PITR type, available values: normal, redo_pitr</p>
 * @method void setPitrType(string $PitrType) Set <p>PITR type, available values: normal, redo_pitr</p>
 * @method string getIsOpenPasswordComplexity() Obtain <p>Whether to toggle on password complexity</p>
 * @method void setIsOpenPasswordComplexity(string $IsOpenPasswordComplexity) Set <p>Whether to toggle on password complexity</p>
 * @method string getNetworkStatus() Obtain <p>Network type</p>
 * @method void setNetworkStatus(string $NetworkStatus) Set <p>Network type</p>
 * @method array getResourcePackages() Obtain <p>Package info of the bound resource for the cluster</p>
 * @method void setResourcePackages(array $ResourcePackages) Set <p>Package info of the bound resource for the cluster</p>
 * @method integer getRenewFlag() Obtain <p>Auto-renewal flag. 1 means auto-renewal, 0 means non-renewal upon expiration.</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Auto-renewal flag. 1 means auto-renewal, 0 means non-renewal upon expiration.</p>
 * @method string getNetworkType() Obtain <p>Node network type</p>
 * @method void setNetworkType(string $NetworkType) Set <p>Node network type</p>
 * @method array getSlaveZoneAttr() Obtain <p>Secondary availability zone property</p>
 * @method void setSlaveZoneAttr(array $SlaveZoneAttr) Set <p>Secondary availability zone property</p>
 * @method string getCynosVersionTag() Obtain <p>Version tag</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) Set <p>Version tag</p>
 * @method string getGdnId() Obtain <p>Unique ID of the global database network</p>
 * @method void setGdnId(string $GdnId) Set <p>Unique ID of the global database network</p>
 * @method string getGdnRole() Obtain <p>Role of the cluster in the global data network.<br>Primary cluster - primary<br>Slave cluster - standby<br>If empty, the field is invalid.</p>
 * @method void setGdnRole(string $GdnRole) Set <p>Role of the cluster in the global data network.<br>Primary cluster - primary<br>Slave cluster - standby<br>If empty, the field is invalid.</p>
 * @method integer getUsedArchiveStorage() Obtain <p>Second-level storage usage in GB</p>
 * @method void setUsedArchiveStorage(integer $UsedArchiveStorage) Set <p>Second-level storage usage in GB</p>
 * @method string getArchiveStatus() Obtain <p>Archiving status. Enumeration value <li>normal: Normal</li><li>archiving: Archiving</li><li>resuming: Recovering</li><li>archived: Archived</li></p>
 * @method void setArchiveStatus(string $ArchiveStatus) Set <p>Archiving status. Enumeration value <li>normal: Normal</li><li>archiving: Archiving</li><li>resuming: Recovering</li><li>archived: Archived</li></p>
 * @method integer getArchiveProgress() Obtain <p>Archive progress, percentage.</p>
 * @method void setArchiveProgress(integer $ArchiveProgress) Set <p>Archive progress, percentage.</p>
 * @method string getClusterLevel() Obtain <p>Cluster level. For example P0, P1</p>
 * @method void setClusterLevel(string $ClusterLevel) Set <p>Cluster level. For example P0, P1</p>
 * @method boolean getIsOpenTDE() Obtain <p>Whether to enable transparent data encryption</p>
 * @method void setIsOpenTDE(boolean $IsOpenTDE) Set <p>Whether to enable transparent data encryption</p>
 */
class CynosdbClusterDetail extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Region</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Physical AZ</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>Status. Supported values are as follows:</p><ul><li>creating: Creating</li><li>running: Running</li><li>isolating: Isolation</li><li>isolated: Isolated</li><li>activating: Restore from recycle bin</li><li>offlining: Offline</li><li>offlined: Offline</li><li>deleting: Deleting</li><li>deleted: Deleted</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Status description</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>resuming<br>pause<br>pausing</p>
     */
    public $ServerlessStatus;

    /**
     * @var string <p>Storage Id</p>
     */
    public $StorageId;

    /**
     * @var integer <p>Storage size in GB</p>
     */
    public $Storage;

    /**
     * @var integer <p>Maximum storage specification, in GB</p>
     */
    public $MaxStorageSize;

    /**
     * @var integer <p>Minimum storage specification, in GB</p>
     */
    public $MinStorageSize;

    /**
     * @var integer <p>Storage billing type. Valid values: 1 (yearly/monthly subscription); 0 (pay-as-you-go).</p>
     */
    public $StoragePayMode;

    /**
     * @var string <p>VPC name</p>
     */
    public $VpcName;

    /**
     * @var string <p>vpc Unique id</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet name.</p>
     */
    public $SubnetName;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Character set.</p>
     */
    public $Charset;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Database type</p>
     */
    public $DbType;

    /**
     * @var string <p>Db type: <li>NORMAL</li><li>SERVERLESS</li></p>
     */
    public $DbMode;

    /**
     * @var string <p>Database version</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>Storage space limit</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>Used capacity</p>
     */
    public $UsedStorage;

    /**
     * @var string <p>vip address</p>
     */
    public $Vip;

    /**
     * @var integer <p>vport port</p>
     */
    public $Vport;

    /**
     * @var array <p>vip address and vport of the cluster read-only instance</p>
     */
    public $RoAddr;

    /**
     * @var Ability <p>Functions supported by the cluster</p>
     */
    public $Ability;

    /**
     * @var string <p>cynos version</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>Business type</p>
     */
    public $BusinessType;

    /**
     * @var string <p>Whether there is a secondary AZ</p>
     */
    public $HasSlaveZone;

    /**
     * @var string <p>Freeze or not</p>
     */
    public $IsFreeze;

    /**
     * @var array <p>Task List</p>
     */
    public $Tasks;

    /**
     * @var string <p>Primary AZ</p>
     */
    public $MasterZone;

    /**
     * @var array <p>From the AZ list</p>
     */
    public $SlaveZones;

    /**
     * @var array <p>Instance information</p>
     */
    public $InstanceSet;

    /**
     * @var integer <p>Payment mode</p>
     */
    public $PayMode;

    /**
     * @var string <p>Expiry time.</p>
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectID;

    /**
     * @var array <p>tag Array information for instance binding</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Proxy status</p>
     */
    public $ProxyStatus;

    /**
     * @var string <p>binlog switch, available values: ON, OFF</p>
     */
    public $LogBin;

    /**
     * @var string <p>Skip transaction or not</p>
     */
    public $IsSkipTrade;

    /**
     * @var string <p>PITR type, available values: normal, redo_pitr</p>
     */
    public $PitrType;

    /**
     * @var string <p>Whether to toggle on password complexity</p>
     */
    public $IsOpenPasswordComplexity;

    /**
     * @var string <p>Network type</p>
     */
    public $NetworkStatus;

    /**
     * @var array <p>Package info of the bound resource for the cluster</p>
     */
    public $ResourcePackages;

    /**
     * @var integer <p>Auto-renewal flag. 1 means auto-renewal, 0 means non-renewal upon expiration.</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Node network type</p>
     */
    public $NetworkType;

    /**
     * @var array <p>Secondary availability zone property</p>
     */
    public $SlaveZoneAttr;

    /**
     * @var string <p>Version tag</p>
     */
    public $CynosVersionTag;

    /**
     * @var string <p>Unique ID of the global database network</p>
     */
    public $GdnId;

    /**
     * @var string <p>Role of the cluster in the global data network.<br>Primary cluster - primary<br>Slave cluster - standby<br>If empty, the field is invalid.</p>
     */
    public $GdnRole;

    /**
     * @var integer <p>Second-level storage usage in GB</p>
     */
    public $UsedArchiveStorage;

    /**
     * @var string <p>Archiving status. Enumeration value <li>normal: Normal</li><li>archiving: Archiving</li><li>resuming: Recovering</li><li>archived: Archived</li></p>
     */
    public $ArchiveStatus;

    /**
     * @var integer <p>Archive progress, percentage.</p>
     */
    public $ArchiveProgress;

    /**
     * @var string <p>Cluster level. For example P0, P1</p>
     */
    public $ClusterLevel;

    /**
     * @var boolean <p>Whether to enable transparent data encryption</p>
     */
    public $IsOpenTDE;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $Region <p>Region</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $PhysicalZone <p>Physical AZ</p>
     * @param string $Status <p>Status. Supported values are as follows:</p><ul><li>creating: Creating</li><li>running: Running</li><li>isolating: Isolation</li><li>isolated: Isolated</li><li>activating: Restore from recycle bin</li><li>offlining: Offline</li><li>offlined: Offline</li><li>deleting: Deleting</li><li>deleted: Deleted</li></ul>
     * @param string $StatusDesc <p>Status description</p>
     * @param string $ServerlessStatus <p>When the Db type is SERVERLESS, the SERVERLESS cluster status. Available values:<br>resume<br>resuming<br>pause<br>pausing</p>
     * @param string $StorageId <p>Storage Id</p>
     * @param integer $Storage <p>Storage size in GB</p>
     * @param integer $MaxStorageSize <p>Maximum storage specification, in GB</p>
     * @param integer $MinStorageSize <p>Minimum storage specification, in GB</p>
     * @param integer $StoragePayMode <p>Storage billing type. Valid values: 1 (yearly/monthly subscription); 0 (pay-as-you-go).</p>
     * @param string $VpcName <p>VPC name</p>
     * @param string $VpcId <p>vpc Unique id</p>
     * @param string $SubnetName <p>Subnet name.</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $Charset <p>Character set.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $DbType <p>Database type</p>
     * @param string $DbMode <p>Db type: <li>NORMAL</li><li>SERVERLESS</li></p>
     * @param string $DbVersion <p>Database version</p>
     * @param integer $StorageLimit <p>Storage space limit</p>
     * @param integer $UsedStorage <p>Used capacity</p>
     * @param string $Vip <p>vip address</p>
     * @param integer $Vport <p>vport port</p>
     * @param array $RoAddr <p>vip address and vport of the cluster read-only instance</p>
     * @param Ability $Ability <p>Functions supported by the cluster</p>
     * @param string $CynosVersion <p>cynos version</p>
     * @param string $BusinessType <p>Business type</p>
     * @param string $HasSlaveZone <p>Whether there is a secondary AZ</p>
     * @param string $IsFreeze <p>Freeze or not</p>
     * @param array $Tasks <p>Task List</p>
     * @param string $MasterZone <p>Primary AZ</p>
     * @param array $SlaveZones <p>From the AZ list</p>
     * @param array $InstanceSet <p>Instance information</p>
     * @param integer $PayMode <p>Payment mode</p>
     * @param string $PeriodEndTime <p>Expiry time.</p>
     * @param integer $ProjectID <p>Project ID.</p>
     * @param array $ResourceTags <p>tag Array information for instance binding</p>
     * @param string $ProxyStatus <p>Proxy status</p>
     * @param string $LogBin <p>binlog switch, available values: ON, OFF</p>
     * @param string $IsSkipTrade <p>Skip transaction or not</p>
     * @param string $PitrType <p>PITR type, available values: normal, redo_pitr</p>
     * @param string $IsOpenPasswordComplexity <p>Whether to toggle on password complexity</p>
     * @param string $NetworkStatus <p>Network type</p>
     * @param array $ResourcePackages <p>Package info of the bound resource for the cluster</p>
     * @param integer $RenewFlag <p>Auto-renewal flag. 1 means auto-renewal, 0 means non-renewal upon expiration.</p>
     * @param string $NetworkType <p>Node network type</p>
     * @param array $SlaveZoneAttr <p>Secondary availability zone property</p>
     * @param string $CynosVersionTag <p>Version tag</p>
     * @param string $GdnId <p>Unique ID of the global database network</p>
     * @param string $GdnRole <p>Role of the cluster in the global data network.<br>Primary cluster - primary<br>Slave cluster - standby<br>If empty, the field is invalid.</p>
     * @param integer $UsedArchiveStorage <p>Second-level storage usage in GB</p>
     * @param string $ArchiveStatus <p>Archiving status. Enumeration value <li>normal: Normal</li><li>archiving: Archiving</li><li>resuming: Recovering</li><li>archived: Archived</li></p>
     * @param integer $ArchiveProgress <p>Archive progress, percentage.</p>
     * @param string $ClusterLevel <p>Cluster level. For example P0, P1</p>
     * @param boolean $IsOpenTDE <p>Whether to enable transparent data encryption</p>
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

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("SlaveZoneAttr",$param) and $param["SlaveZoneAttr"] !== null) {
            $this->SlaveZoneAttr = [];
            foreach ($param["SlaveZoneAttr"] as $key => $value){
                $obj = new SlaveZoneAttrItem();
                $obj->deserialize($value);
                array_push($this->SlaveZoneAttr, $obj);
            }
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("GdnRole",$param) and $param["GdnRole"] !== null) {
            $this->GdnRole = $param["GdnRole"];
        }

        if (array_key_exists("UsedArchiveStorage",$param) and $param["UsedArchiveStorage"] !== null) {
            $this->UsedArchiveStorage = $param["UsedArchiveStorage"];
        }

        if (array_key_exists("ArchiveStatus",$param) and $param["ArchiveStatus"] !== null) {
            $this->ArchiveStatus = $param["ArchiveStatus"];
        }

        if (array_key_exists("ArchiveProgress",$param) and $param["ArchiveProgress"] !== null) {
            $this->ArchiveProgress = $param["ArchiveProgress"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("IsOpenTDE",$param) and $param["IsOpenTDE"] !== null) {
            $this->IsOpenTDE = $param["IsOpenTDE"];
        }
    }
}
