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
 * DescribeNetworkFirewallPolicyDetail response structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getNamespace() Obtain Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFromPolicyRule() Obtain Inbound type
 * @method void setFromPolicyRule(integer $FromPolicyRule) Set Inbound type
 * @method integer getToPolicyRule() Obtain Outbound type
 * @method void setToPolicyRule(integer $ToPolicyRule) Set Outbound type
 * @method array getCustomPolicy() Obtain Custom rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomPolicy(array $CustomPolicy) Set Custom rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodSelector() Obtain Pod selector
 * @method void setPodSelector(string $PodSelector) Set Pod selector
 * @method string getDescription() Obtain Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyCreateTime() Obtain Policy creation time
 * @method void setPolicyCreateTime(string $PolicyCreateTime) Set Policy creation time
 * @method string getPolicySourceType() Obtain Policy source type. Valid values: `System` (synched from the cluster); `Manual` (added manually).
 * @method void setPolicySourceType(string $PolicySourceType) Set Policy source type. Valid values: `System` (synched from the cluster); `Manual` (added manually).
 * @method string getNetworkPolicyPlugin() Obtain Network plugin of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkPolicyPlugin(string $NetworkPolicyPlugin) Set Network plugin of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublishStatus() Obtain Network policy status
 * @method void setPublishStatus(string $PublishStatus) Set Network policy status
 * @method string getPublishResult() Obtain Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublishResult(string $PublishResult) Set Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNetworkFirewallPolicyDetailResponse extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var integer Inbound type
     */
    public $FromPolicyRule;

    /**
     * @var integer Outbound type
     */
    public $ToPolicyRule;

    /**
     * @var array Custom rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomPolicy;

    /**
     * @var string Pod selector
     */
    public $PodSelector;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Policy creation time
     */
    public $PolicyCreateTime;

    /**
     * @var string Policy source type. Valid values: `System` (synched from the cluster); `Manual` (added manually).
     */
    public $PolicySourceType;

    /**
     * @var string Network plugin of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkPolicyPlugin;

    /**
     * @var string Network policy status
     */
    public $PublishStatus;

    /**
     * @var string Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublishResult;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $PolicyName Policy name
     * @param string $Namespace Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FromPolicyRule Inbound type
     * @param integer $ToPolicyRule Outbound type
     * @param array $CustomPolicy Custom rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodSelector Pod selector
     * @param string $Description Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyCreateTime Policy creation time
     * @param string $PolicySourceType Policy source type. Valid values: `System` (synched from the cluster); `Manual` (added manually).
     * @param string $NetworkPolicyPlugin Network plugin of the network policy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublishStatus Network policy status
     * @param string $PublishResult Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FromPolicyRule",$param) and $param["FromPolicyRule"] !== null) {
            $this->FromPolicyRule = $param["FromPolicyRule"];
        }

        if (array_key_exists("ToPolicyRule",$param) and $param["ToPolicyRule"] !== null) {
            $this->ToPolicyRule = $param["ToPolicyRule"];
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = [];
            foreach ($param["CustomPolicy"] as $key => $value){
                $obj = new NetworkCustomPolicy();
                $obj->deserialize($value);
                array_push($this->CustomPolicy, $obj);
            }
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyCreateTime",$param) and $param["PolicyCreateTime"] !== null) {
            $this->PolicyCreateTime = $param["PolicyCreateTime"];
        }

        if (array_key_exists("PolicySourceType",$param) and $param["PolicySourceType"] !== null) {
            $this->PolicySourceType = $param["PolicySourceType"];
        }

        if (array_key_exists("NetworkPolicyPlugin",$param) and $param["NetworkPolicyPlugin"] !== null) {
            $this->NetworkPolicyPlugin = $param["NetworkPolicyPlugin"];
        }

        if (array_key_exists("PublishStatus",$param) and $param["PublishStatus"] !== null) {
            $this->PublishStatus = $param["PublishStatus"];
        }

        if (array_key_exists("PublishResult",$param) and $param["PublishResult"] !== null) {
            $this->PublishResult = $param["PublishResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
