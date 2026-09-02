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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterPodDetail response structure.
 *
 * @method string getUniqueID() Obtain <p>Pod unique ID</p>
 * @method void setUniqueID(string $UniqueID) Set <p>Pod unique ID</p>
 * @method integer getAppID() Obtain <p>Primary Account AppID</p>
 * @method void setAppID(integer $AppID) Set <p>Primary Account AppID</p>
 * @method string getPodName() Obtain <p>Pod name</p>
 * @method void setPodName(string $PodName) Set <p>Pod name</p>
 * @method string getPodIP() Obtain <p>Pod IP address</p>
 * @method void setPodIP(string $PodIP) Set <p>Pod IP address</p>
 * @method string getRunStatus() Obtain <p>Pod running state</p>
 * @method void setRunStatus(string $RunStatus) Set <p>Pod running state</p>
 * @method array getLabels() Obtain <p>Pod Labels list</p>
 * @method void setLabels(array $Labels) Set <p>Pod Labels list</p>
 * @method string getStartTime() Obtain <p>Pod startup time</p>
 * @method void setStartTime(string $StartTime) Set <p>Pod startup time</p>
 * @method integer getStartupTime() Obtain <p>Start time (seconds)</p>
 * @method void setStartupTime(integer $StartupTime) Set <p>Start time (seconds)</p>
 * @method integer getRestartCount() Obtain <p>Pod restart count</p>
 * @method void setRestartCount(integer $RestartCount) Set <p>Pod restart count</p>
 * @method string getClusterName() Obtain <p>Cluster Name</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster Name</p>
 * @method string getClusterID() Obtain <p>Cluster ID</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID</p>
 * @method string getClusterType() Obtain <p>Cluster type</p>
 * @method void setClusterType(string $ClusterType) Set <p>Cluster type</p>
 * @method string getClusterRunStatus() Obtain <p>Cluster operation status</p>
 * @method void setClusterRunStatus(string $ClusterRunStatus) Set <p>Cluster operation status</p>
 * @method string getNamespace() Obtain <p>Namespace</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace</p>
 * @method string getNodeName() Obtain <p>Node name where it resides.</p>
 * @method void setNodeName(string $NodeName) Set <p>Node name where it resides.</p>
 * @method string getNodeId() Obtain <p>Current node ID</p>
 * @method void setNodeId(string $NodeId) Set <p>Current node ID</p>
 * @method string getWorkloadName() Obtain <p>Name of the associated Workload</p>
 * @method void setWorkloadName(string $WorkloadName) Set <p>Name of the associated Workload</p>
 * @method string getWorkloadType() Obtain <p>Workload type</p>
 * @method void setWorkloadType(string $WorkloadType) Set <p>Workload type</p>
 * @method integer getRiskEventCriticalCount() Obtain <p>Number of critical risk events</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) Set <p>Number of critical risk events</p>
 * @method integer getRiskEventHighCount() Obtain <p>Number of high-risk events</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) Set <p>Number of high-risk events</p>
 * @method integer getRiskEventMiddleCount() Obtain <p>Number of medium-risk events</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) Set <p>Number of medium-risk events</p>
 * @method integer getRiskEventLowCount() Obtain <p>Number of low-risk events</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) Set <p>Number of low-risk events</p>
 * @method integer getAlarmEventCriticalCount() Obtain <p>Number of critical alarm events</p>
 * @method void setAlarmEventCriticalCount(integer $AlarmEventCriticalCount) Set <p>Number of critical alarm events</p>
 * @method integer getAlarmEventHighCount() Obtain <p>Number of high-risk alarm events</p>
 * @method void setAlarmEventHighCount(integer $AlarmEventHighCount) Set <p>Number of high-risk alarm events</p>
 * @method integer getAlarmEventMiddleCount() Obtain <p>Number of medium-risk alarm events</p>
 * @method void setAlarmEventMiddleCount(integer $AlarmEventMiddleCount) Set <p>Number of medium-risk alarm events</p>
 * @method integer getAlarmEventLowCount() Obtain <p>Number of low-risk alarm events</p>
 * @method void setAlarmEventLowCount(integer $AlarmEventLowCount) Set <p>Number of low-risk alarm events</p>
 * @method string getRegion() Obtain <p>Region</p>
 * @method void setRegion(string $Region) Set <p>Region</p>
 * @method string getNodeInternalIP() Obtain <p>Node private IP</p>
 * @method void setNodeInternalIP(string $NodeInternalIP) Set <p>Node private IP</p>
 * @method string getNodeExternalIP() Obtain <p>Node public IP</p>
 * @method void setNodeExternalIP(string $NodeExternalIP) Set <p>Node public IP</p>
 * @method integer getContainerCount() Obtain <p>Number of associated containers</p>
 * @method void setContainerCount(integer $ContainerCount) Set <p>Number of associated containers</p>
 * @method integer getServiceCount() Obtain <p>Number of associated services</p>
 * @method void setServiceCount(integer $ServiceCount) Set <p>Number of associated services</p>
 * @method string getRegionName() Obtain <p>Region Chinese Name</p>
 * @method void setRegionName(string $RegionName) Set <p>Region Chinese Name</p>
 * @method string getRegionNameEn() Obtain <p>Region English name</p>
 * @method void setRegionNameEn(string $RegionNameEn) Set <p>Region English name</p>
 * @method integer getAlarmCount() Obtain <p>Number of alarms.</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Number of alarms.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeClusterPodDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Pod unique ID</p>
     */
    public $UniqueID;

    /**
     * @var integer <p>Primary Account AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>Pod name</p>
     */
    public $PodName;

    /**
     * @var string <p>Pod IP address</p>
     */
    public $PodIP;

    /**
     * @var string <p>Pod running state</p>
     */
    public $RunStatus;

    /**
     * @var array <p>Pod Labels list</p>
     */
    public $Labels;

    /**
     * @var string <p>Pod startup time</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Start time (seconds)</p>
     */
    public $StartupTime;

    /**
     * @var integer <p>Pod restart count</p>
     */
    public $RestartCount;

    /**
     * @var string <p>Cluster Name</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster type</p>
     */
    public $ClusterType;

    /**
     * @var string <p>Cluster operation status</p>
     */
    public $ClusterRunStatus;

    /**
     * @var string <p>Namespace</p>
     */
    public $Namespace;

    /**
     * @var string <p>Node name where it resides.</p>
     */
    public $NodeName;

    /**
     * @var string <p>Current node ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>Name of the associated Workload</p>
     */
    public $WorkloadName;

    /**
     * @var string <p>Workload type</p>
     */
    public $WorkloadType;

    /**
     * @var integer <p>Number of critical risk events</p>
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>Number of high-risk events</p>
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>Number of medium-risk events</p>
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>Number of low-risk events</p>
     */
    public $RiskEventLowCount;

    /**
     * @var integer <p>Number of critical alarm events</p>
     */
    public $AlarmEventCriticalCount;

    /**
     * @var integer <p>Number of high-risk alarm events</p>
     */
    public $AlarmEventHighCount;

    /**
     * @var integer <p>Number of medium-risk alarm events</p>
     */
    public $AlarmEventMiddleCount;

    /**
     * @var integer <p>Number of low-risk alarm events</p>
     */
    public $AlarmEventLowCount;

    /**
     * @var string <p>Region</p>
     */
    public $Region;

    /**
     * @var string <p>Node private IP</p>
     */
    public $NodeInternalIP;

    /**
     * @var string <p>Node public IP</p>
     */
    public $NodeExternalIP;

    /**
     * @var integer <p>Number of associated containers</p>
     */
    public $ContainerCount;

    /**
     * @var integer <p>Number of associated services</p>
     */
    public $ServiceCount;

    /**
     * @var string <p>Region Chinese Name</p>
     */
    public $RegionName;

    /**
     * @var string <p>Region English name</p>
     */
    public $RegionNameEn;

    /**
     * @var integer <p>Number of alarms.</p>
     */
    public $AlarmCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UniqueID <p>Pod unique ID</p>
     * @param integer $AppID <p>Primary Account AppID</p>
     * @param string $PodName <p>Pod name</p>
     * @param string $PodIP <p>Pod IP address</p>
     * @param string $RunStatus <p>Pod running state</p>
     * @param array $Labels <p>Pod Labels list</p>
     * @param string $StartTime <p>Pod startup time</p>
     * @param integer $StartupTime <p>Start time (seconds)</p>
     * @param integer $RestartCount <p>Pod restart count</p>
     * @param string $ClusterName <p>Cluster Name</p>
     * @param string $ClusterID <p>Cluster ID</p>
     * @param string $ClusterType <p>Cluster type</p>
     * @param string $ClusterRunStatus <p>Cluster operation status</p>
     * @param string $Namespace <p>Namespace</p>
     * @param string $NodeName <p>Node name where it resides.</p>
     * @param string $NodeId <p>Current node ID</p>
     * @param string $WorkloadName <p>Name of the associated Workload</p>
     * @param string $WorkloadType <p>Workload type</p>
     * @param integer $RiskEventCriticalCount <p>Number of critical risk events</p>
     * @param integer $RiskEventHighCount <p>Number of high-risk events</p>
     * @param integer $RiskEventMiddleCount <p>Number of medium-risk events</p>
     * @param integer $RiskEventLowCount <p>Number of low-risk events</p>
     * @param integer $AlarmEventCriticalCount <p>Number of critical alarm events</p>
     * @param integer $AlarmEventHighCount <p>Number of high-risk alarm events</p>
     * @param integer $AlarmEventMiddleCount <p>Number of medium-risk alarm events</p>
     * @param integer $AlarmEventLowCount <p>Number of low-risk alarm events</p>
     * @param string $Region <p>Region</p>
     * @param string $NodeInternalIP <p>Node private IP</p>
     * @param string $NodeExternalIP <p>Node public IP</p>
     * @param integer $ContainerCount <p>Number of associated containers</p>
     * @param integer $ServiceCount <p>Number of associated services</p>
     * @param string $RegionName <p>Region Chinese Name</p>
     * @param string $RegionNameEn <p>Region English name</p>
     * @param integer $AlarmCount <p>Number of alarms.</p>
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
        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterRunStatus",$param) and $param["ClusterRunStatus"] !== null) {
            $this->ClusterRunStatus = $param["ClusterRunStatus"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("RiskEventCriticalCount",$param) and $param["RiskEventCriticalCount"] !== null) {
            $this->RiskEventCriticalCount = $param["RiskEventCriticalCount"];
        }

        if (array_key_exists("RiskEventHighCount",$param) and $param["RiskEventHighCount"] !== null) {
            $this->RiskEventHighCount = $param["RiskEventHighCount"];
        }

        if (array_key_exists("RiskEventMiddleCount",$param) and $param["RiskEventMiddleCount"] !== null) {
            $this->RiskEventMiddleCount = $param["RiskEventMiddleCount"];
        }

        if (array_key_exists("RiskEventLowCount",$param) and $param["RiskEventLowCount"] !== null) {
            $this->RiskEventLowCount = $param["RiskEventLowCount"];
        }

        if (array_key_exists("AlarmEventCriticalCount",$param) and $param["AlarmEventCriticalCount"] !== null) {
            $this->AlarmEventCriticalCount = $param["AlarmEventCriticalCount"];
        }

        if (array_key_exists("AlarmEventHighCount",$param) and $param["AlarmEventHighCount"] !== null) {
            $this->AlarmEventHighCount = $param["AlarmEventHighCount"];
        }

        if (array_key_exists("AlarmEventMiddleCount",$param) and $param["AlarmEventMiddleCount"] !== null) {
            $this->AlarmEventMiddleCount = $param["AlarmEventMiddleCount"];
        }

        if (array_key_exists("AlarmEventLowCount",$param) and $param["AlarmEventLowCount"] !== null) {
            $this->AlarmEventLowCount = $param["AlarmEventLowCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NodeInternalIP",$param) and $param["NodeInternalIP"] !== null) {
            $this->NodeInternalIP = $param["NodeInternalIP"];
        }

        if (array_key_exists("NodeExternalIP",$param) and $param["NodeExternalIP"] !== null) {
            $this->NodeExternalIP = $param["NodeExternalIP"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
