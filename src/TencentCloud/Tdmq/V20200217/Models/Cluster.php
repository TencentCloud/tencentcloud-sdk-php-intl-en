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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Set of cluster information
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method integer getEndPointNum() Obtain Number of access points
 * @method void setEndPointNum(integer $EndPointNum) Set Number of access points
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getHealthy() Obtain Whether the cluster is healthy. 1: healthy; 0: exceptional
 * @method void setHealthy(integer $Healthy) Set Whether the cluster is healthy. 1: healthy; 0: exceptional
 * @method string getHealthyInfo() Obtain Cluster health information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHealthyInfo(string $HealthyInfo) Set Cluster health information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
 * @method void setStatus(integer $Status) Set Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
 * @method integer getMaxNamespaceNum() Obtain Maximum number of namespaces
 * @method void setMaxNamespaceNum(integer $MaxNamespaceNum) Set Maximum number of namespaces
 * @method integer getMaxTopicNum() Obtain Maximum number of topics
 * @method void setMaxTopicNum(integer $MaxTopicNum) Set Maximum number of topics
 * @method integer getMaxQps() Obtain Maximum QPS
 * @method void setMaxQps(integer $MaxQps) Set Maximum QPS
 * @method integer getMessageRetentionTime() Obtain Maximum message retention period in seconds
 * @method void setMessageRetentionTime(integer $MessageRetentionTime) Set Maximum message retention period in seconds
 * @method integer getMaxStorageCapacity() Obtain Maximum storage capacity
 * @method void setMaxStorageCapacity(integer $MaxStorageCapacity) Set Maximum storage capacity
 * @method string getVersion() Obtain Cluster version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Cluster version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPublicEndPoint() Obtain Public network access point
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicEndPoint(string $PublicEndPoint) Set Public network access point
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVpcEndPoint() Obtain VPC access point
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcEndPoint(string $VpcEndPoint) Set VPC access point
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNamespaceNum() Obtain Number of namespaces
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceNum(integer $NamespaceNum) Set Number of namespaces
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUsedStorageBudget() Obtain Limit of used storage in MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsedStorageBudget(integer $UsedStorageBudget) Set Limit of used storage in MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxPublishRateInMessages() Obtain Maximum message production rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxPublishRateInMessages(integer $MaxPublishRateInMessages) Set Maximum message production rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDispatchRateInMessages() Obtain Maximum message push rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDispatchRateInMessages(integer $MaxDispatchRateInMessages) Set Maximum message push rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxPublishRateInBytes() Obtain Maximum message production rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxPublishRateInBytes(integer $MaxPublishRateInBytes) Set Maximum message production rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDispatchRateInBytes() Obtain Maximum message push rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDispatchRateInBytes(integer $MaxDispatchRateInBytes) Set Maximum message push rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicNum() Obtain Number of created topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNum(integer $TopicNum) Set Number of created topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMessageDelayInSeconds() Obtain Maximum message delay in seconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMessageDelayInSeconds(integer $MaxMessageDelayInSeconds) Set Maximum message delay in seconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getPublicAccessEnabled() Obtain Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) Set Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMode() Obtain Billing mode:
`0`: Pay-as-you-go
`1`: Monthly subscription
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPayMode(integer $PayMode) Set Billing mode:
`0`: Pay-as-you-go
`1`: Monthly subscription
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Cluster extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var integer Number of access points
     */
    public $EndPointNum;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Whether the cluster is healthy. 1: healthy; 0: exceptional
     */
    public $Healthy;

    /**
     * @var string Cluster health information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HealthyInfo;

    /**
     * @var integer Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
     */
    public $Status;

    /**
     * @var integer Maximum number of namespaces
     */
    public $MaxNamespaceNum;

    /**
     * @var integer Maximum number of topics
     */
    public $MaxTopicNum;

    /**
     * @var integer Maximum QPS
     */
    public $MaxQps;

    /**
     * @var integer Maximum message retention period in seconds
     */
    public $MessageRetentionTime;

    /**
     * @var integer Maximum storage capacity
     */
    public $MaxStorageCapacity;

    /**
     * @var string Cluster version
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Public network access point
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicEndPoint;

    /**
     * @var string VPC access point
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcEndPoint;

    /**
     * @var integer Number of namespaces
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceNum;

    /**
     * @var integer Limit of used storage in MB
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsedStorageBudget;

    /**
     * @var integer Maximum message production rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxPublishRateInMessages;

    /**
     * @var integer Maximum message push rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDispatchRateInMessages;

    /**
     * @var integer Maximum message production rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxPublishRateInBytes;

    /**
     * @var integer Maximum message push rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDispatchRateInBytes;

    /**
     * @var integer Number of created topics
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNum;

    /**
     * @var integer Maximum message delay in seconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMessageDelayInSeconds;

    /**
     * @var boolean Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicAccessEnabled;

    /**
     * @var array Tag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Billing mode:
`0`: Pay-as-you-go
`1`: Monthly subscription
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $ClusterName Cluster name.
     * @param string $Remark Remarks.
     * @param integer $EndPointNum Number of access points
     * @param string $CreateTime Creation time
     * @param integer $Healthy Whether the cluster is healthy. 1: healthy; 0: exceptional
     * @param string $HealthyInfo Cluster health information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
     * @param integer $MaxNamespaceNum Maximum number of namespaces
     * @param integer $MaxTopicNum Maximum number of topics
     * @param integer $MaxQps Maximum QPS
     * @param integer $MessageRetentionTime Maximum message retention period in seconds
     * @param integer $MaxStorageCapacity Maximum storage capacity
     * @param string $Version Cluster version
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PublicEndPoint Public network access point
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VpcEndPoint VPC access point
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NamespaceNum Number of namespaces
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UsedStorageBudget Limit of used storage in MB
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxPublishRateInMessages Maximum message production rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDispatchRateInMessages Maximum message push rate in messages
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxPublishRateInBytes Maximum message production rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDispatchRateInBytes Maximum message push rate in bytes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicNum Number of created topics
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMessageDelayInSeconds Maximum message delay in seconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $PublicAccessEnabled Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMode Billing mode:
`0`: Pay-as-you-go
`1`: Monthly subscription
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EndPointNum",$param) and $param["EndPointNum"] !== null) {
            $this->EndPointNum = $param["EndPointNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("HealthyInfo",$param) and $param["HealthyInfo"] !== null) {
            $this->HealthyInfo = $param["HealthyInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaxNamespaceNum",$param) and $param["MaxNamespaceNum"] !== null) {
            $this->MaxNamespaceNum = $param["MaxNamespaceNum"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("MessageRetentionTime",$param) and $param["MessageRetentionTime"] !== null) {
            $this->MessageRetentionTime = $param["MessageRetentionTime"];
        }

        if (array_key_exists("MaxStorageCapacity",$param) and $param["MaxStorageCapacity"] !== null) {
            $this->MaxStorageCapacity = $param["MaxStorageCapacity"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }

        if (array_key_exists("NamespaceNum",$param) and $param["NamespaceNum"] !== null) {
            $this->NamespaceNum = $param["NamespaceNum"];
        }

        if (array_key_exists("UsedStorageBudget",$param) and $param["UsedStorageBudget"] !== null) {
            $this->UsedStorageBudget = $param["UsedStorageBudget"];
        }

        if (array_key_exists("MaxPublishRateInMessages",$param) and $param["MaxPublishRateInMessages"] !== null) {
            $this->MaxPublishRateInMessages = $param["MaxPublishRateInMessages"];
        }

        if (array_key_exists("MaxDispatchRateInMessages",$param) and $param["MaxDispatchRateInMessages"] !== null) {
            $this->MaxDispatchRateInMessages = $param["MaxDispatchRateInMessages"];
        }

        if (array_key_exists("MaxPublishRateInBytes",$param) and $param["MaxPublishRateInBytes"] !== null) {
            $this->MaxPublishRateInBytes = $param["MaxPublishRateInBytes"];
        }

        if (array_key_exists("MaxDispatchRateInBytes",$param) and $param["MaxDispatchRateInBytes"] !== null) {
            $this->MaxDispatchRateInBytes = $param["MaxDispatchRateInBytes"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("MaxMessageDelayInSeconds",$param) and $param["MaxMessageDelayInSeconds"] !== null) {
            $this->MaxMessageDelayInSeconds = $param["MaxMessageDelayInSeconds"];
        }

        if (array_key_exists("PublicAccessEnabled",$param) and $param["PublicAccessEnabled"] !== null) {
            $this->PublicAccessEnabled = $param["PublicAccessEnabled"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
