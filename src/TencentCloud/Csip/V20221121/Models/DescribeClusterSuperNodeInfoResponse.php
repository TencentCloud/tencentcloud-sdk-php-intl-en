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
 * DescribeClusterSuperNodeInfo response structure.
 *
 * @method string getRegion() Obtain <p>Region code (unchanged, for example, ap-chengdu).</p>
 * @method void setRegion(string $Region) Set <p>Region code (unchanged, for example, ap-chengdu).</p>
 * @method string getRegionName() Obtain <p>Region Chinese Name (for example, Southwest China (Chengdu); obtained by translating the region code using the dictionary).</p>
 * @method void setRegionName(string $RegionName) Set <p>Region Chinese Name (for example, Southwest China (Chengdu); obtained by translating the region code using the dictionary).</p>
 * @method string getRegionNameEn() Obtain <p>Region English name (for example, Southwest China (Chengdu); obtained by translating the region code using a dictionary).</p>
 * @method void setRegionNameEn(string $RegionNameEn) Set <p>Region English name (for example, Southwest China (Chengdu); obtained by translating the region code using a dictionary).</p>
 * @method string getZone() Obtain <p>Availability zone (Chinese name, obtained by translating the AZ code via dictionary).</p>
 * @method void setZone(string $Zone) Set <p>Availability zone (Chinese name, obtained by translating the AZ code via dictionary).</p>
 * @method string getAssetSyncTime() Obtain <p>Last update time of the asset.<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format, UTC time zone)</p>
 * @method void setAssetSyncTime(string $AssetSyncTime) Set <p>Last update time of the asset.<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format, UTC time zone)</p>
 * @method string getNodeSource() Obtain <p>Node origin (cluster type).<br>Enumeration values:<br>TKE_MANAGED_CLUSTER: Tencent Cloud Standard Cluster<br>TKE_INDEPENDENT_CLUSTER: Tencent Cloud Standard Cluster (Master Self-maintenance)<br>TKE_SERVERLESS_CLUSTER: Tencent Cloud Serverless cluster<br>TKE_EDGE_CLUSTER: Tencent Cloud edge cluster<br>SELF_BUILT: Self-built cluster within Tencent Cloud<br>SELF_BUILT_OTHER: Self-built cluster outside Tencent Cloud (hybrid cloud)</p>
 * @method void setNodeSource(string $NodeSource) Set <p>Node origin (cluster type).<br>Enumeration values:<br>TKE_MANAGED_CLUSTER: Tencent Cloud Standard Cluster<br>TKE_INDEPENDENT_CLUSTER: Tencent Cloud Standard Cluster (Master Self-maintenance)<br>TKE_SERVERLESS_CLUSTER: Tencent Cloud Serverless cluster<br>TKE_EDGE_CLUSTER: Tencent Cloud edge cluster<br>SELF_BUILT: Self-built cluster within Tencent Cloud<br>SELF_BUILT_OTHER: Self-built cluster outside Tencent Cloud (hybrid cloud)</p>
 * @method string getSubNetName() Obtain <p>Subnet name.</p>
 * @method void setSubNetName(string $SubNetName) Set <p>Subnet name.</p>
 * @method string getSubNetId() Obtain <p>Subnet ID.</p>
 * @method void setSubNetId(string $SubNetId) Set <p>Subnet ID.</p>
 * @method string getSubNetCIDR() Obtain <p>Subnet segment (CIDR).</p>
 * @method void setSubNetCIDR(string $SubNetCIDR) Set <p>Subnet segment (CIDR).</p>
 * @method integer getCoresCount() Obtain <p>Number of cores (obtained by dividing cpu_request by 1000).<br>Unit: core</p>
 * @method void setCoresCount(integer $CoresCount) Set <p>Number of cores (obtained by dividing cpu_request by 1000).<br>Unit: core</p>
 * @method string getClusterName() Obtain <p>Cluster Name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster Name.</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getStatus() Obtain <p>Cluster operation status.<br>Enumeration values:<br>Running: running<br>Exception: exception<br>Unknown: unknown<br>Creating: creating<br>Destroyed: terminated</p>
 * @method void setStatus(string $Status) Set <p>Cluster operation status.<br>Enumeration values:<br>Running: running<br>Exception: exception<br>Unknown: unknown<br>Creating: creating<br>Destroyed: terminated</p>
 * @method string getClusterVersion() Obtain <p>Kubernetes version.</p>
 * @method void setClusterVersion(string $ClusterVersion) Set <p>Kubernetes version.</p>
 * @method string getKubeletVersion() Obtain <p>Kubelet version.</p>
 * @method void setKubeletVersion(string $KubeletVersion) Set <p>Kubelet version.</p>
 * @method integer getAppID() Obtain <p>APPID of the account associated with the super node</p>
 * @method void setAppID(integer $AppID) Set <p>APPID of the account associated with the super node</p>
 * @method string getInstanceId() Obtain <p>Super node instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Super node instance ID</p>
 * @method string getNodeName() Obtain <p>Super node name.</p>
 * @method void setNodeName(string $NodeName) Set <p>Super node name.</p>
 * @method string getVpcId() Obtain <p>VPCID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPCID</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeClusterSuperNodeInfoResponse extends AbstractModel
{
    /**
     * @var string <p>Region code (unchanged, for example, ap-chengdu).</p>
     */
    public $Region;

    /**
     * @var string <p>Region Chinese Name (for example, Southwest China (Chengdu); obtained by translating the region code using the dictionary).</p>
     */
    public $RegionName;

    /**
     * @var string <p>Region English name (for example, Southwest China (Chengdu); obtained by translating the region code using a dictionary).</p>
     */
    public $RegionNameEn;

    /**
     * @var string <p>Availability zone (Chinese name, obtained by translating the AZ code via dictionary).</p>
     */
    public $Zone;

    /**
     * @var string <p>Last update time of the asset.<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format, UTC time zone)</p>
     */
    public $AssetSyncTime;

    /**
     * @var string <p>Node origin (cluster type).<br>Enumeration values:<br>TKE_MANAGED_CLUSTER: Tencent Cloud Standard Cluster<br>TKE_INDEPENDENT_CLUSTER: Tencent Cloud Standard Cluster (Master Self-maintenance)<br>TKE_SERVERLESS_CLUSTER: Tencent Cloud Serverless cluster<br>TKE_EDGE_CLUSTER: Tencent Cloud edge cluster<br>SELF_BUILT: Self-built cluster within Tencent Cloud<br>SELF_BUILT_OTHER: Self-built cluster outside Tencent Cloud (hybrid cloud)</p>
     */
    public $NodeSource;

    /**
     * @var string <p>Subnet name.</p>
     */
    public $SubNetName;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubNetId;

    /**
     * @var string <p>Subnet segment (CIDR).</p>
     */
    public $SubNetCIDR;

    /**
     * @var integer <p>Number of cores (obtained by dividing cpu_request by 1000).<br>Unit: core</p>
     */
    public $CoresCount;

    /**
     * @var string <p>Cluster Name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster operation status.<br>Enumeration values:<br>Running: running<br>Exception: exception<br>Unknown: unknown<br>Creating: creating<br>Destroyed: terminated</p>
     */
    public $Status;

    /**
     * @var string <p>Kubernetes version.</p>
     */
    public $ClusterVersion;

    /**
     * @var string <p>Kubelet version.</p>
     */
    public $KubeletVersion;

    /**
     * @var integer <p>APPID of the account associated with the super node</p>
     */
    public $AppID;

    /**
     * @var string <p>Super node instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Super node name.</p>
     */
    public $NodeName;

    /**
     * @var string <p>VPCID</p>
     */
    public $VpcId;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Region <p>Region code (unchanged, for example, ap-chengdu).</p>
     * @param string $RegionName <p>Region Chinese Name (for example, Southwest China (Chengdu); obtained by translating the region code using the dictionary).</p>
     * @param string $RegionNameEn <p>Region English name (for example, Southwest China (Chengdu); obtained by translating the region code using a dictionary).</p>
     * @param string $Zone <p>Availability zone (Chinese name, obtained by translating the AZ code via dictionary).</p>
     * @param string $AssetSyncTime <p>Last update time of the asset.<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format, UTC time zone)</p>
     * @param string $NodeSource <p>Node origin (cluster type).<br>Enumeration values:<br>TKE_MANAGED_CLUSTER: Tencent Cloud Standard Cluster<br>TKE_INDEPENDENT_CLUSTER: Tencent Cloud Standard Cluster (Master Self-maintenance)<br>TKE_SERVERLESS_CLUSTER: Tencent Cloud Serverless cluster<br>TKE_EDGE_CLUSTER: Tencent Cloud edge cluster<br>SELF_BUILT: Self-built cluster within Tencent Cloud<br>SELF_BUILT_OTHER: Self-built cluster outside Tencent Cloud (hybrid cloud)</p>
     * @param string $SubNetName <p>Subnet name.</p>
     * @param string $SubNetId <p>Subnet ID.</p>
     * @param string $SubNetCIDR <p>Subnet segment (CIDR).</p>
     * @param integer $CoresCount <p>Number of cores (obtained by dividing cpu_request by 1000).<br>Unit: core</p>
     * @param string $ClusterName <p>Cluster Name.</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $Status <p>Cluster operation status.<br>Enumeration values:<br>Running: running<br>Exception: exception<br>Unknown: unknown<br>Creating: creating<br>Destroyed: terminated</p>
     * @param string $ClusterVersion <p>Kubernetes version.</p>
     * @param string $KubeletVersion <p>Kubelet version.</p>
     * @param integer $AppID <p>APPID of the account associated with the super node</p>
     * @param string $InstanceId <p>Super node instance ID</p>
     * @param string $NodeName <p>Super node name.</p>
     * @param string $VpcId <p>VPCID</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AssetSyncTime",$param) and $param["AssetSyncTime"] !== null) {
            $this->AssetSyncTime = $param["AssetSyncTime"];
        }

        if (array_key_exists("NodeSource",$param) and $param["NodeSource"] !== null) {
            $this->NodeSource = $param["NodeSource"];
        }

        if (array_key_exists("SubNetName",$param) and $param["SubNetName"] !== null) {
            $this->SubNetName = $param["SubNetName"];
        }

        if (array_key_exists("SubNetId",$param) and $param["SubNetId"] !== null) {
            $this->SubNetId = $param["SubNetId"];
        }

        if (array_key_exists("SubNetCIDR",$param) and $param["SubNetCIDR"] !== null) {
            $this->SubNetCIDR = $param["SubNetCIDR"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("KubeletVersion",$param) and $param["KubeletVersion"] !== null) {
            $this->KubeletVersion = $param["KubeletVersion"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
