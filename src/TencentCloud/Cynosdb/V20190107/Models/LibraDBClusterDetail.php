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
 * libra cluster detail
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getRegion() Obtain <p>Region</p>
 * @method void setRegion(string $Region) Set <p>Region</p>
 * @method string getStatus() Obtain <p>Status</p>
 * @method void setStatus(string $Status) Set <p>Status</p>
 * @method string getStatusDesc() Obtain <p>Status description</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description</p>
 * @method integer getStorage() Obtain <p>Storage size</p>
 * @method void setStorage(integer $Storage) Set <p>Storage size</p>
 * @method string getVpcName() Obtain <p>VPC name</p>
 * @method void setVpcName(string $VpcName) Set <p>VPC name</p>
 * @method string getVpcId() Obtain <p>vpc Unique id</p>
 * @method void setVpcId(string $VpcId) Set <p>vpc Unique id</p>
 * @method string getSubnetName() Obtain <p>Subnet name.</p>
 * @method void setSubnetName(string $SubnetName) Set <p>Subnet name.</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getDbVersion() Obtain <p>Database version</p>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version</p>
 * @method integer getUsedStorage() Obtain <p>Used capacity</p>
 * @method void setUsedStorage(integer $UsedStorage) Set <p>Used capacity</p>
 * @method string getVip() Obtain <p>vip address</p>
 * @method void setVip(string $Vip) Set <p>vip address</p>
 * @method integer getVport() Obtain <p>vport</p>
 * @method void setVport(integer $Vport) Set <p>vport</p>
 * @method array getRoAddr() Obtain <p>vip address and vport of the cluster read-only instance</p>
 * @method void setRoAddr(array $RoAddr) Set <p>vip address and vport of the cluster read-only instance</p>
 * @method string getCynosVersion() Obtain <p>cynos version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>cynos version</p>
 * @method string getIsFreeze() Obtain <p>Freeze or not</p>
 * @method void setIsFreeze(string $IsFreeze) Set <p>Freeze or not</p>
 * @method array getTasks() Obtain <p>Task List</p>
 * @method void setTasks(array $Tasks) Set <p>Task List</p>
 * @method string getMasterZone() Obtain <p>Primary AZ</p>
 * @method void setMasterZone(string $MasterZone) Set <p>Primary AZ</p>
 * @method array getInstanceSet() Obtain <p>Instance collection</p>
 * @method void setInstanceSet(array $InstanceSet) Set <p>Instance collection</p>
 * @method integer getPayMode() Obtain <p>Payment mode</p>
 * @method void setPayMode(integer $PayMode) Set <p>Payment mode</p>
 * @method string getPeriodEndTime() Obtain <p>Expiry time</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>Expiry time</p>
 * @method integer getProjectID() Obtain <p>Project ID.</p>
 * @method void setProjectID(integer $ProjectID) Set <p>Project ID.</p>
 * @method integer getRenewFlag() Obtain <p>Auto-renewal flag</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Auto-renewal flag</p>
 * @method string getCynosVersionTag() Obtain <p>Version tag</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) Set <p>Version tag</p>
 * @method string getNoSupportAddRo() Obtain <p>Additions are not supported when ro is yes. Additions are supported when ro is no/null/&quot;&quot;.</p>
 * @method void setNoSupportAddRo(string $NoSupportAddRo) Set <p>Additions are not supported when ro is yes. Additions are supported when ro is no/null/&quot;&quot;.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getPhysicalZone() Obtain <p>Physical AZ</p>
 * @method void setPhysicalZone(string $PhysicalZone) Set <p>Physical AZ</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() Obtain <p>Grayscale information for version upgrade</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) Set <p>Grayscale information for version upgrade</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LibraDBClusterDetail extends AbstractModel
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
     * @var string <p>Status</p>
     */
    public $Status;

    /**
     * @var string <p>Status description</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>Storage size</p>
     */
    public $Storage;

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
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Database version</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>Used capacity</p>
     */
    public $UsedStorage;

    /**
     * @var string <p>vip address</p>
     */
    public $Vip;

    /**
     * @var integer <p>vport</p>
     */
    public $Vport;

    /**
     * @var array <p>vip address and vport of the cluster read-only instance</p>
     */
    public $RoAddr;

    /**
     * @var string <p>cynos version</p>
     */
    public $CynosVersion;

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
     * @var array <p>Instance collection</p>
     */
    public $InstanceSet;

    /**
     * @var integer <p>Payment mode</p>
     */
    public $PayMode;

    /**
     * @var string <p>Expiry time</p>
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectID;

    /**
     * @var integer <p>Auto-renewal flag</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Version tag</p>
     */
    public $CynosVersionTag;

    /**
     * @var string <p>Additions are not supported when ro is yes. Additions are supported when ro is no/null/&quot;&quot;.</p>
     */
    public $NoSupportAddRo;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Physical AZ</p>
     */
    public $PhysicalZone;

    /**
     * @var UpgradeAnalysisInstanceVersionInfo <p>Grayscale information for version upgrade</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $Region <p>Region</p>
     * @param string $Status <p>Status</p>
     * @param string $StatusDesc <p>Status description</p>
     * @param integer $Storage <p>Storage size</p>
     * @param string $VpcName <p>VPC name</p>
     * @param string $VpcId <p>vpc Unique id</p>
     * @param string $SubnetName <p>Subnet name.</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $DbVersion <p>Database version</p>
     * @param integer $UsedStorage <p>Used capacity</p>
     * @param string $Vip <p>vip address</p>
     * @param integer $Vport <p>vport</p>
     * @param array $RoAddr <p>vip address and vport of the cluster read-only instance</p>
     * @param string $CynosVersion <p>cynos version</p>
     * @param string $IsFreeze <p>Freeze or not</p>
     * @param array $Tasks <p>Task List</p>
     * @param string $MasterZone <p>Primary AZ</p>
     * @param array $InstanceSet <p>Instance collection</p>
     * @param integer $PayMode <p>Payment mode</p>
     * @param string $PeriodEndTime <p>Expiry time</p>
     * @param integer $ProjectID <p>Project ID.</p>
     * @param integer $RenewFlag <p>Auto-renewal flag</p>
     * @param string $CynosVersionTag <p>Version tag</p>
     * @param string $NoSupportAddRo <p>Additions are not supported when ro is yes. Additions are supported when ro is no/null/&quot;&quot;.</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $PhysicalZone <p>Physical AZ</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>Grayscale information for version upgrade</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
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
                $obj = new RoAddr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
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

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new InstanceSet();
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("NoSupportAddRo",$param) and $param["NoSupportAddRo"] !== null) {
            $this->NoSupportAddRo = $param["NoSupportAddRo"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("AnalysisUpgradeVersionInfo",$param) and $param["AnalysisUpgradeVersionInfo"] !== null) {
            $this->AnalysisUpgradeVersionInfo = new UpgradeAnalysisInstanceVersionInfo();
            $this->AnalysisUpgradeVersionInfo->deserialize($param["AnalysisUpgradeVersionInfo"]);
        }
    }
}
