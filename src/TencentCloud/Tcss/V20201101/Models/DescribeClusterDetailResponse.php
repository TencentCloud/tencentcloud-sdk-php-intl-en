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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterDetail response structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method integer getScanTaskProgress() Obtain Progress of the current cluster scan task. `100` indicates that the scan is completed.
 * @method void setScanTaskProgress(integer $ScanTaskProgress) Set Progress of the current cluster scan task. `100` indicates that the scan is completed.
 * @method string getClusterVersion() Obtain Cluster version
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version
 * @method string getContainerRuntime() Obtain Runtime component
 * @method void setContainerRuntime(string $ContainerRuntime) Set Runtime component
 * @method integer getClusterNodeNum() Obtain Number of nodes in the cluster
 * @method void setClusterNodeNum(integer $ClusterNodeNum) Set Number of nodes in the cluster
 * @method string getClusterStatus() Obtain Cluster status. Valid values: `Running`, `Creating`, `Abnormal`.
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status. Valid values: `Running`, `Creating`, `Abnormal`.
 * @method string getClusterType() Obtain Cluster type. Valid values: `MANAGED_CLUSTER` (managed cluster); `INDEPENDENT_CLUSTER` (self-deployed cluster).
 * @method void setClusterType(string $ClusterType) Set Cluster type. Valid values: `MANAGED_CLUSTER` (managed cluster); `INDEPENDENT_CLUSTER` (self-deployed cluster).
 * @method string getRegion() Obtain Cluster region
 * @method void setRegion(string $Region) Set Cluster region
 * @method integer getSeriousRiskCount() Obtain Number of critical check items
 * @method void setSeriousRiskCount(integer $SeriousRiskCount) Set Number of critical check items
 * @method integer getHighRiskCount() Obtain Number of high-risk check items
 * @method void setHighRiskCount(integer $HighRiskCount) Set Number of high-risk check items
 * @method integer getMiddleRiskCount() Obtain Number of medium-risk check items
 * @method void setMiddleRiskCount(integer $MiddleRiskCount) Set Number of medium-risk check items
 * @method integer getHintRiskCount() Obtain Number of prompt-risk check items
 * @method void setHintRiskCount(integer $HintRiskCount) Set Number of prompt-risk check items
 * @method string getCheckStatus() Obtain Status of the check task
 * @method void setCheckStatus(string $CheckStatus) Set Status of the check task
 * @method string getDefenderStatus() Obtain Status of the defender
 * @method void setDefenderStatus(string $DefenderStatus) Set Status of the defender
 * @method string getTaskCreateTime() Obtain Creation time of the scan task
 * @method void setTaskCreateTime(string $TaskCreateTime) Set Creation time of the scan task
 * @method string getNetworkType() Obtain Network type. Valid values: `PublicNetwork` (public network); `VPCNetwork` (VPC).
 * @method void setNetworkType(string $NetworkType) Set Network type. Valid values: `PublicNetwork` (public network); `VPCNetwork` (VPC).
 * @method string getApiServerAddress() Obtain API server address
 * @method void setApiServerAddress(string $ApiServerAddress) Set API server address
 * @method integer getNodeCount() Obtain Number of nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes
 * @method integer getNamespaceCount() Obtain Number of namespaces
 * @method void setNamespaceCount(integer $NamespaceCount) Set Number of namespaces
 * @method integer getWorkloadCount() Obtain Number of workloads
 * @method void setWorkloadCount(integer $WorkloadCount) Set Number of workloads
 * @method integer getPodCount() Obtain Number of Pods
 * @method void setPodCount(integer $PodCount) Set Number of Pods
 * @method integer getServiceCount() Obtain Number of Services
 * @method void setServiceCount(integer $ServiceCount) Set Number of Services
 * @method integer getIngressCount() Obtain Number of Ingresses
 * @method void setIngressCount(integer $IngressCount) Set Number of Ingresses
 * @method string getMasterIps() Obtain IPs of the primary nodes
 * @method void setMasterIps(string $MasterIps) Set IPs of the primary nodes
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeClusterDetailResponse extends AbstractModel
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
     * @var integer Progress of the current cluster scan task. `100` indicates that the scan is completed.
     */
    public $ScanTaskProgress;

    /**
     * @var string Cluster version
     */
    public $ClusterVersion;

    /**
     * @var string Runtime component
     */
    public $ContainerRuntime;

    /**
     * @var integer Number of nodes in the cluster
     */
    public $ClusterNodeNum;

    /**
     * @var string Cluster status. Valid values: `Running`, `Creating`, `Abnormal`.
     */
    public $ClusterStatus;

    /**
     * @var string Cluster type. Valid values: `MANAGED_CLUSTER` (managed cluster); `INDEPENDENT_CLUSTER` (self-deployed cluster).
     */
    public $ClusterType;

    /**
     * @var string Cluster region
     */
    public $Region;

    /**
     * @var integer Number of critical check items
     */
    public $SeriousRiskCount;

    /**
     * @var integer Number of high-risk check items
     */
    public $HighRiskCount;

    /**
     * @var integer Number of medium-risk check items
     */
    public $MiddleRiskCount;

    /**
     * @var integer Number of prompt-risk check items
     */
    public $HintRiskCount;

    /**
     * @var string Status of the check task
     */
    public $CheckStatus;

    /**
     * @var string Status of the defender
     */
    public $DefenderStatus;

    /**
     * @var string Creation time of the scan task
     */
    public $TaskCreateTime;

    /**
     * @var string Network type. Valid values: `PublicNetwork` (public network); `VPCNetwork` (VPC).
     */
    public $NetworkType;

    /**
     * @var string API server address
     */
    public $ApiServerAddress;

    /**
     * @var integer Number of nodes
     */
    public $NodeCount;

    /**
     * @var integer Number of namespaces
     */
    public $NamespaceCount;

    /**
     * @var integer Number of workloads
     */
    public $WorkloadCount;

    /**
     * @var integer Number of Pods
     */
    public $PodCount;

    /**
     * @var integer Number of Services
     */
    public $ServiceCount;

    /**
     * @var integer Number of Ingresses
     */
    public $IngressCount;

    /**
     * @var string IPs of the primary nodes
     */
    public $MasterIps;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param integer $ScanTaskProgress Progress of the current cluster scan task. `100` indicates that the scan is completed.
     * @param string $ClusterVersion Cluster version
     * @param string $ContainerRuntime Runtime component
     * @param integer $ClusterNodeNum Number of nodes in the cluster
     * @param string $ClusterStatus Cluster status. Valid values: `Running`, `Creating`, `Abnormal`.
     * @param string $ClusterType Cluster type. Valid values: `MANAGED_CLUSTER` (managed cluster); `INDEPENDENT_CLUSTER` (self-deployed cluster).
     * @param string $Region Cluster region
     * @param integer $SeriousRiskCount Number of critical check items
     * @param integer $HighRiskCount Number of high-risk check items
     * @param integer $MiddleRiskCount Number of medium-risk check items
     * @param integer $HintRiskCount Number of prompt-risk check items
     * @param string $CheckStatus Status of the check task
     * @param string $DefenderStatus Status of the defender
     * @param string $TaskCreateTime Creation time of the scan task
     * @param string $NetworkType Network type. Valid values: `PublicNetwork` (public network); `VPCNetwork` (VPC).
     * @param string $ApiServerAddress API server address
     * @param integer $NodeCount Number of nodes
     * @param integer $NamespaceCount Number of namespaces
     * @param integer $WorkloadCount Number of workloads
     * @param integer $PodCount Number of Pods
     * @param integer $ServiceCount Number of Services
     * @param integer $IngressCount Number of Ingresses
     * @param string $MasterIps IPs of the primary nodes
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ScanTaskProgress",$param) and $param["ScanTaskProgress"] !== null) {
            $this->ScanTaskProgress = $param["ScanTaskProgress"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SeriousRiskCount",$param) and $param["SeriousRiskCount"] !== null) {
            $this->SeriousRiskCount = $param["SeriousRiskCount"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("MiddleRiskCount",$param) and $param["MiddleRiskCount"] !== null) {
            $this->MiddleRiskCount = $param["MiddleRiskCount"];
        }

        if (array_key_exists("HintRiskCount",$param) and $param["HintRiskCount"] !== null) {
            $this->HintRiskCount = $param["HintRiskCount"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("DefenderStatus",$param) and $param["DefenderStatus"] !== null) {
            $this->DefenderStatus = $param["DefenderStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ApiServerAddress",$param) and $param["ApiServerAddress"] !== null) {
            $this->ApiServerAddress = $param["ApiServerAddress"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NamespaceCount",$param) and $param["NamespaceCount"] !== null) {
            $this->NamespaceCount = $param["NamespaceCount"];
        }

        if (array_key_exists("WorkloadCount",$param) and $param["WorkloadCount"] !== null) {
            $this->WorkloadCount = $param["WorkloadCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("IngressCount",$param) and $param["IngressCount"] !== null) {
            $this->IngressCount = $param["IngressCount"];
        }

        if (array_key_exists("MasterIps",$param) and $param["MasterIps"] !== null) {
            $this->MasterIps = $param["MasterIps"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
