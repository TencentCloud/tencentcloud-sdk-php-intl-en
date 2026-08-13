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
 * @method string getUin() Obtain <p>Root account</p>
 * @method void setUin(string $Uin) Set <p>Root account</p>
 * @method integer getAppId() Obtain <p>Account unique ID</p>
 * @method void setAppId(integer $AppId) Set <p>Account unique ID</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getStatus() Obtain <p>Instance status</p>
 * @method void setStatus(string $Status) Set <p>Instance status</p>
 * @method string getStatusDesc() Obtain <p>Status description</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description</p>
 * @method string getLibraDBVersion() Obtain <p>Libra analysis engine version</p>
 * @method void setLibraDBVersion(string $LibraDBVersion) Set <p>Libra analysis engine version</p>
 * @method integer getCpu() Obtain <p>cpu cores.</p>
 * @method void setCpu(integer $Cpu) Set <p>cpu cores.</p>
 * @method integer getMemory() Obtain <p>Memory size.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size.</p>
 * @method integer getStorage() Obtain <p>Storage size</p>
 * @method void setStorage(integer $Storage) Set <p>Storage size</p>
 * @method string getStorageType() Obtain <p>Storage type</p>
 * @method void setStorageType(string $StorageType) Set <p>Storage type</p>
 * @method string getInstanceType() Obtain <p>Instance type.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type.</p>
 * @method string getInstanceRole() Obtain <p>Instance role</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Instance role</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getPayMode() Obtain <p>Selling mode</p>
 * @method void setPayMode(integer $PayMode) Set <p>Selling mode</p>
 * @method string getPeriodStartTime() Obtain <p>Start time</p>
 * @method void setPeriodStartTime(string $PeriodStartTime) Set <p>Start time</p>
 * @method string getPeriodEndTime() Obtain <p>Termination time</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>Termination time</p>
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
 * @method integer getNetType() Obtain <p>Network type</p>
 * @method void setNetType(integer $NetType) Set <p>Network type</p>
 * @method string getVpcId() Obtain <p>VPC ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getVip() Obtain <p>Virtual IP</p>
 * @method void setVip(string $Vip) Set <p>Virtual IP</p>
 * @method integer getVport() Obtain <p>Port</p>
 * @method void setVport(integer $Vport) Set <p>Port</p>
 * @method InstanceNetInfo getInstanceNetInfo() Obtain <p>Instance network info</p>
 * @method void setInstanceNetInfo(InstanceNetInfo $InstanceNetInfo) Set <p>Instance network info</p>
 * @method array getResourceTags() Obtain <p>Instance tag information</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Instance tag information</p>
 * @method array getNodeInfo() Obtain <p>Instance node information</p>
 * @method void setNodeInfo(array $NodeInfo) Set <p>Instance node information</p>
 * @method integer getNodeCount() Obtain <p>Number of instance nodes</p>
 * @method void setNodeCount(integer $NodeCount) Set <p>Number of instance nodes</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() Obtain <p>Analyze the information after the instance upgrade version</p>
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) Set <p>Analyze the information after the instance upgrade version</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeLibraDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Root account</p>
     */
    public $Uin;

    /**
     * @var integer <p>Account unique ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Instance status</p>
     */
    public $Status;

    /**
     * @var string <p>Status description</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>Libra analysis engine version</p>
     */
    public $LibraDBVersion;

    /**
     * @var integer <p>cpu cores.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory size.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Storage size</p>
     */
    public $Storage;

    /**
     * @var string <p>Storage type</p>
     */
    public $StorageType;

    /**
     * @var string <p>Instance type.</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Instance role</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Selling mode</p>
     */
    public $PayMode;

    /**
     * @var string <p>Start time</p>
     */
    public $PeriodStartTime;

    /**
     * @var string <p>Termination time</p>
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>Renewal flag</p>
     */
    public $RenewFlag;

    /**
     * @var integer <p>Network type</p>
     */
    public $NetType;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Virtual IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>Port</p>
     */
    public $Vport;

    /**
     * @var InstanceNetInfo <p>Instance network info</p>
     */
    public $InstanceNetInfo;

    /**
     * @var array <p>Instance tag information</p>
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
     * @var UpgradeAnalysisInstanceVersionInfo <p>Analyze the information after the instance upgrade version</p>
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Uin <p>Root account</p>
     * @param integer $AppId <p>Account unique ID</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param string $Region <p>Region.</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $Status <p>Instance status</p>
     * @param string $StatusDesc <p>Status description</p>
     * @param string $LibraDBVersion <p>Libra analysis engine version</p>
     * @param integer $Cpu <p>cpu cores.</p>
     * @param integer $Memory <p>Memory size.</p>
     * @param integer $Storage <p>Storage size</p>
     * @param string $StorageType <p>Storage type</p>
     * @param string $InstanceType <p>Instance type.</p>
     * @param string $InstanceRole <p>Instance role</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $PayMode <p>Selling mode</p>
     * @param string $PeriodStartTime <p>Start time</p>
     * @param string $PeriodEndTime <p>Termination time</p>
     * @param integer $RenewFlag <p>Renewal flag</p>
     * @param integer $NetType <p>Network type</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $Vip <p>Virtual IP</p>
     * @param integer $Vport <p>Port</p>
     * @param InstanceNetInfo $InstanceNetInfo <p>Instance network info</p>
     * @param array $ResourceTags <p>Instance tag information</p>
     * @param array $NodeInfo <p>Instance node information</p>
     * @param integer $NodeCount <p>Number of instance nodes</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>Analyze the information after the instance upgrade version</p>
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
