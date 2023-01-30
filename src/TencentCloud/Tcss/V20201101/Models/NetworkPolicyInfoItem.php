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
 * Response parameters structure of the network cluster policy
 *
 * @method string getName() Obtain Network policy name
 * @method void setName(string $Name) Set Network policy name
 * @method string getDescription() Obtain Network policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Network policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublishStatus() Obtain Publishing status:

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
 * @method void setPublishStatus(string $PublishStatus) Set Publishing status:

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
 * @method string getPolicySourceType() Obtain Policy type:

`System`: Synched from the cluster.

`Manual`: Added manually.
 * @method void setPolicySourceType(string $PolicySourceType) Set Policy type:

`System`: Synched from the cluster.

`Manual`: Added manually.
 * @method string getNamespace() Obtain Policy space
 * @method void setNamespace(string $Namespace) Set Policy space
 * @method string getPolicyCreateTime() Obtain Policy creation date
 * @method void setPolicyCreateTime(string $PolicyCreateTime) Set Policy creation date
 * @method string getNetworkPolicyPlugin() Obtain Policy type

kube-router: KubeRouter

cilium: Cilium
 * @method void setNetworkPolicyPlugin(string $NetworkPolicyPlugin) Set Policy type

kube-router: KubeRouter

cilium: Cilium
 * @method string getPublishResult() Obtain Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublishResult(string $PublishResult) Set Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFromPolicyRule() Obtain Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method void setFromPolicyRule(integer $FromPolicyRule) Set Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method integer getToPolicyRule() Obtain Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method void setToPolicyRule(integer $ToPolicyRule) Set Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method string getPodSelector() Obtain Object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodSelector(string $PodSelector) Set Object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Network policy ID
 * @method void setId(integer $Id) Set Network policy ID
 */
class NetworkPolicyInfoItem extends AbstractModel
{
    /**
     * @var string Network policy name
     */
    public $Name;

    /**
     * @var string Network policy description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Publishing status:

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
     */
    public $PublishStatus;

    /**
     * @var string Policy type:

`System`: Synched from the cluster.

`Manual`: Added manually.
     */
    public $PolicySourceType;

    /**
     * @var string Policy space
     */
    public $Namespace;

    /**
     * @var string Policy creation date
     */
    public $PolicyCreateTime;

    /**
     * @var string Policy type

kube-router: KubeRouter

cilium: Cilium
     */
    public $NetworkPolicyPlugin;

    /**
     * @var string Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublishResult;

    /**
     * @var integer Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     */
    public $FromPolicyRule;

    /**
     * @var integer Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     */
    public $ToPolicyRule;

    /**
     * @var string Object
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodSelector;

    /**
     * @var integer Network policy ID
     */
    public $Id;

    /**
     * @param string $Name Network policy name
     * @param string $Description Network policy description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublishStatus Publishing status:

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
     * @param string $PolicySourceType Policy type:

`System`: Synched from the cluster.

`Manual`: Added manually.
     * @param string $Namespace Policy space
     * @param string $PolicyCreateTime Policy creation date
     * @param string $NetworkPolicyPlugin Policy type

kube-router: KubeRouter

cilium: Cilium
     * @param string $PublishResult Policy publishing result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FromPolicyRule Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     * @param integer $ToPolicyRule Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     * @param string $PodSelector Object
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Network policy ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PublishStatus",$param) and $param["PublishStatus"] !== null) {
            $this->PublishStatus = $param["PublishStatus"];
        }

        if (array_key_exists("PolicySourceType",$param) and $param["PolicySourceType"] !== null) {
            $this->PolicySourceType = $param["PolicySourceType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("PolicyCreateTime",$param) and $param["PolicyCreateTime"] !== null) {
            $this->PolicyCreateTime = $param["PolicyCreateTime"];
        }

        if (array_key_exists("NetworkPolicyPlugin",$param) and $param["NetworkPolicyPlugin"] !== null) {
            $this->NetworkPolicyPlugin = $param["NetworkPolicyPlugin"];
        }

        if (array_key_exists("PublishResult",$param) and $param["PublishResult"] !== null) {
            $this->PublishResult = $param["PublishResult"];
        }

        if (array_key_exists("FromPolicyRule",$param) and $param["FromPolicyRule"] !== null) {
            $this->FromPolicyRule = $param["FromPolicyRule"];
        }

        if (array_key_exists("ToPolicyRule",$param) and $param["ToPolicyRule"] !== null) {
            $this->ToPolicyRule = $param["ToPolicyRule"];
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
