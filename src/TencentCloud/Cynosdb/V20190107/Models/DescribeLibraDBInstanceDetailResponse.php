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
 * DescribeLibraDBInstanceDetail response structure.
 *
 * @method string getUin() Obtain <p>root account</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set <p>root account</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain <p>Account unique ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set <p>Account unique ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain <p>Cluster name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain <p>Instance name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain <p>Project ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain <p>Instance status.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set <p>Instance status.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain <p>Status description</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLibraDBVersion() Obtain <p>Libra analysis engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLibraDBVersion(string $LibraDBVersion) Set <p>Libra analysis engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain <p>cpu cores</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set <p>cpu cores</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain <p>Memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set <p>Memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorage() Obtain <p>Storage size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorage(integer $Storage) Set <p>Storage size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain <p>Storage type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set <p>Storage type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain <p>Instance type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceRole() Obtain <p>Instance role</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceRole(string $InstanceRole) Set <p>Instance role</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain <p>Update time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain <p>Creation time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMode() Obtain <p>Selling mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(integer $PayMode) Set <p>Selling mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPeriodStartTime() Obtain <p>Start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodStartTime(string $PeriodStartTime) Set <p>Start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPeriodEndTime() Obtain <p>End time of sale</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>End time of sale</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNetType() Obtain <p>Network type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetType(integer $NetType) Set <p>Network type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain <p>VPC ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set <p>VPC ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain <p>Virtual IP</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set <p>Virtual IP</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain <p>Port</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set <p>Port</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InstanceNetInfo getInstanceNetInfo() Obtain <p>Instance network information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNetInfo(InstanceNetInfo $InstanceNetInfo) Set <p>Instance network information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNodeInfo() Obtain <p>Instance node information</p>
 * @method void setNodeInfo(array $NodeInfo) Set <p>Instance node information</p>
 * @method integer getNodeCount() Obtain <p>Number of instance nodes</p>
 * @method void setNodeCount(integer $NodeCount) Set <p>Number of instance nodes</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() Obtain <p>Analyze the information after instance upgrade version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) Set <p>Analyze the information after instance upgrade version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeLibraDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>root account</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var integer <p>Account unique ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string <p>Cluster ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var integer <p>Project ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string <p>Instance status.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string <p>Status description</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var string <p>Libra analysis engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LibraDBVersion;

    /**
     * @var integer <p>cpu cores</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer <p>Memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var integer <p>Storage size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Storage;

    /**
     * @var string <p>Storage type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var string <p>Instance type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string <p>Instance role</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceRole;

    /**
     * @var string <p>Update time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string <p>Creation time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer <p>Selling mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string <p>Start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodStartTime;

    /**
     * @var string <p>End time of sale</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var integer <p>Network type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetType;

    /**
     * @var string <p>VPC ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string <p>Virtual IP</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer <p>Port</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var InstanceNetInfo <p>Instance network information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNetInfo;

    /**
     * @var array <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var array <p>Instance node information</p>
     */
    public $NodeInfo;

    /**
     * @var integer <p>Number of instance nodes</p>
     */
    public $NodeCount;

    /**
     * @var UpgradeAnalysisInstanceVersionInfo <p>Analyze the information after instance upgrade version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Uin <p>root account</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppId <p>Account unique ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId <p>Cluster ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName <p>Cluster name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId <p>Instance ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName <p>Instance name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId <p>Project ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone <p>AZ.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status <p>Instance status.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc <p>Status description</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LibraDBVersion <p>Libra analysis engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu <p>cpu cores</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory <p>Memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Storage <p>Storage size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageType <p>Storage type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType <p>Instance type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceRole <p>Instance role</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime <p>Update time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime <p>Creation time.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMode <p>Selling mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PeriodStartTime <p>Start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PeriodEndTime <p>End time of sale</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NetType <p>Network type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId <p>VPC ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId <p>Subnet ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip <p>Virtual IP</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Vport <p>Port</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InstanceNetInfo $InstanceNetInfo <p>Instance network information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NodeInfo <p>Instance node information</p>
     * @param integer $NodeCount <p>Number of instance nodes</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>Analyze the information after instance upgrade version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodStartTime",$param) and $param["PeriodStartTime"] !== null) {
            $this->PeriodStartTime = $param["PeriodStartTime"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceNetInfo",$param) and $param["InstanceNetInfo"] !== null) {
            $this->InstanceNetInfo = new InstanceNetInfo();
            $this->InstanceNetInfo->deserialize($param["InstanceNetInfo"]);
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = [];
            foreach ($param["NodeInfo"] as $key => $value){
                $obj = new LibraDBNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfo, $obj);
            }
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("AnalysisUpgradeVersionInfo",$param) and $param["AnalysisUpgradeVersionInfo"] !== null) {
            $this->AnalysisUpgradeVersionInfo = new UpgradeAnalysisInstanceVersionInfo();
            $this->AnalysisUpgradeVersionInfo->deserialize($param["AnalysisUpgradeVersionInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
