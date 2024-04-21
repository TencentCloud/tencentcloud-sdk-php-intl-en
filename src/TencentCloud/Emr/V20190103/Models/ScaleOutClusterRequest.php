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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutCluster request structure.
 *
 * @method string getInstanceChargeType() Obtain The node billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
<li>`SPOTPAID`: The spot instance mode (for task nodes only).</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set The node billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
<li>`SPOTPAID`: The spot instance mode (for task nodes only).</li>
 * @method string getInstanceId() Obtain The cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set The cluster instance ID.
 * @method ScaleOutNodeConfig getScaleOutNodeConfig() Obtain The type and number of nodes to be added.
 * @method void setScaleOutNodeConfig(ScaleOutNodeConfig $ScaleOutNodeConfig) Set The type and number of nodes to be added.
 * @method string getClientToken() Obtain A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae36063280`.
 * @method void setClientToken(string $ClientToken) Set A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae36063280`.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain The details of the monthly subscription, including the instance period and auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set The details of the monthly subscription, including the instance period and auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method array getScriptBootstrapActionConfig() Obtain The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) Set The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
 * @method array getSoftDeployInfo() Obtain The services to be deployed for new nodes. By default, new nodes will inherit services deployed for the current node type, including default optional services. This parameter only supports the inclusion of optional services. For example, if HDFS, YARN, and Impala have been deployed for existing task nodes, when using the API for task node scale-out without deploying Impala, only HDFS and YARN are included in with this parameter. 
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set The services to be deployed for new nodes. By default, new nodes will inherit services deployed for the current node type, including default optional services. This parameter only supports the inclusion of optional services. For example, if HDFS, YARN, and Impala have been deployed for existing task nodes, when using the API for task node scale-out without deploying Impala, only HDFS and YARN are included in with this parameter. 
 * @method array getServiceNodeInfo() Obtain The processes to be deployed. All processes for services to be added are deployed by default. Deployed processes can be changed. For example, HDFS, YARN, and Impala have been deployed for current task nodes, and default services are DataNode, NodeManager, and ImpalaServer; if you want to change deployed processes, you can set this parameter to DataNode,NodeManager,ImpalaServerCoordinator or DataNode,NodeManager,ImpalaServerExecutor. 
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set The processes to be deployed. All processes for services to be added are deployed by default. Deployed processes can be changed. For example, HDFS, YARN, and Impala have been deployed for current task nodes, and default services are DataNode, NodeManager, and ImpalaServer; if you want to change deployed processes, you can set this parameter to DataNode,NodeManager,ImpalaServerCoordinator or DataNode,NodeManager,ImpalaServerExecutor. 
 * @method array getDisasterRecoverGroupIds() Obtain The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
 * @method array getTags() Obtain The list of tags bound to added nodes.
 * @method void setTags(array $Tags) Set The list of tags bound to added nodes.
 * @method string getHardwareSourceType() Obtain The type of resources to add. Valid values: `host` (general CVM resources) and `pod` (resources provided by a TKE or EKS cluster).
 * @method void setHardwareSourceType(string $HardwareSourceType) Set The type of resources to add. Valid values: `host` (general CVM resources) and `pod` (resources provided by a TKE or EKS cluster).
 * @method PodSpecInfo getPodSpecInfo() Obtain The pod resource information.
 * @method void setPodSpecInfo(PodSpecInfo $PodSpecInfo) Set The pod resource information.
 * @method string getClickHouseClusterName() Obtain The server group name selected for ClickHouse cluster scale-out.
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) Set The server group name selected for ClickHouse cluster scale-out.
 * @method string getClickHouseClusterType() Obtain The server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) Set The server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
 * @method string getYarnNodeLabel() Obtain The YARN node label specified for scale-out.
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set The YARN node label specified for scale-out.
 * @method boolean getEnableStartServiceFlag() Obtain Whether to start services after scale-out.
<li>`true`: Yes</li>
<li>`false` (default): No</li>
 * @method void setEnableStartServiceFlag(boolean $EnableStartServiceFlag) Set Whether to start services after scale-out.
<li>`true`: Yes</li>
<li>`false` (default): No</li>
 * @method NodeResourceSpec getResourceSpec() Obtain The spec settings.
 * @method void setResourceSpec(NodeResourceSpec $ResourceSpec) Set The spec settings.
 * @method string getZone() Obtain The ID of the AZ where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
 * @method void setZone(string $Zone) Set The ID of the AZ where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
 * @method string getSubnetId() Obtain The subnet, which defaults to the subnet used when the cluster is created.
 * @method void setSubnetId(string $SubnetId) Set The subnet, which defaults to the subnet used when the cluster is created.
 * @method array getScaleOutServiceConfGroupsInfo() Obtain 
 * @method void setScaleOutServiceConfGroupsInfo(array $ScaleOutServiceConfGroupsInfo) Set 
 */
class ScaleOutClusterRequest extends AbstractModel
{
    /**
     * @var string The node billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
<li>`SPOTPAID`: The spot instance mode (for task nodes only).</li>
     */
    public $InstanceChargeType;

    /**
     * @var string The cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var ScaleOutNodeConfig The type and number of nodes to be added.
     */
    public $ScaleOutNodeConfig;

    /**
     * @var string A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae36063280`.
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid The details of the monthly subscription, including the instance period and auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     */
    public $InstanceChargePrepaid;

    /**
     * @var array The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var array The services to be deployed for new nodes. By default, new nodes will inherit services deployed for the current node type, including default optional services. This parameter only supports the inclusion of optional services. For example, if HDFS, YARN, and Impala have been deployed for existing task nodes, when using the API for task node scale-out without deploying Impala, only HDFS and YARN are included in with this parameter. 
     */
    public $SoftDeployInfo;

    /**
     * @var array The processes to be deployed. All processes for services to be added are deployed by default. Deployed processes can be changed. For example, HDFS, YARN, and Impala have been deployed for current task nodes, and default services are DataNode, NodeManager, and ImpalaServer; if you want to change deployed processes, you can set this parameter to DataNode,NodeManager,ImpalaServerCoordinator or DataNode,NodeManager,ImpalaServerExecutor. 
     */
    public $ServiceNodeInfo;

    /**
     * @var array The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array The list of tags bound to added nodes.
     */
    public $Tags;

    /**
     * @var string The type of resources to add. Valid values: `host` (general CVM resources) and `pod` (resources provided by a TKE or EKS cluster).
     */
    public $HardwareSourceType;

    /**
     * @var PodSpecInfo The pod resource information.
     */
    public $PodSpecInfo;

    /**
     * @var string The server group name selected for ClickHouse cluster scale-out.
     */
    public $ClickHouseClusterName;

    /**
     * @var string The server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
     */
    public $ClickHouseClusterType;

    /**
     * @var string The YARN node label specified for scale-out.
     */
    public $YarnNodeLabel;

    /**
     * @var boolean Whether to start services after scale-out.
<li>`true`: Yes</li>
<li>`false` (default): No</li>
     */
    public $EnableStartServiceFlag;

    /**
     * @var NodeResourceSpec The spec settings.
     */
    public $ResourceSpec;

    /**
     * @var string The ID of the AZ where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
     */
    public $Zone;

    /**
     * @var string The subnet, which defaults to the subnet used when the cluster is created.
     */
    public $SubnetId;

    /**
     * @var array 
     */
    public $ScaleOutServiceConfGroupsInfo;

    /**
     * @param string $InstanceChargeType The node billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
<li>`SPOTPAID`: The spot instance mode (for task nodes only).</li>
     * @param string $InstanceId The cluster instance ID.
     * @param ScaleOutNodeConfig $ScaleOutNodeConfig The type and number of nodes to be added.
     * @param string $ClientToken A unique random token, which is valid for 5 minutes and needs to be specified by the caller to prevent the client from repeatedly creating resources. An example value is `a9a90aa6-751a-41b6-aad6-fae36063280`.
     * @param InstanceChargePrepaid $InstanceChargePrepaid The details of the monthly subscription, including the instance period and auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     * @param array $ScriptBootstrapActionConfig The [Bootstrap action](https://intl.cloud.tencent.com/document/product/589/35656?from_cn_redirect=1) script settings.
     * @param array $SoftDeployInfo The services to be deployed for new nodes. By default, new nodes will inherit services deployed for the current node type, including default optional services. This parameter only supports the inclusion of optional services. For example, if HDFS, YARN, and Impala have been deployed for existing task nodes, when using the API for task node scale-out without deploying Impala, only HDFS and YARN are included in with this parameter. 
     * @param array $ServiceNodeInfo The processes to be deployed. All processes for services to be added are deployed by default. Deployed processes can be changed. For example, HDFS, YARN, and Impala have been deployed for current task nodes, and default services are DataNode, NodeManager, and ImpalaServer; if you want to change deployed processes, you can set this parameter to DataNode,NodeManager,ImpalaServerCoordinator or DataNode,NodeManager,ImpalaServerExecutor. 
     * @param array $DisasterRecoverGroupIds The list of spread placement group IDs. Only one can be specified.
You can call the [DescribeDisasterRecoverGroups](https://intl.cloud.tencent.com/document/product/213/17810?from_cn_redirect=1) API and obtain this parameter from the `DisasterRecoverGroupId` field in the response.
     * @param array $Tags The list of tags bound to added nodes.
     * @param string $HardwareSourceType The type of resources to add. Valid values: `host` (general CVM resources) and `pod` (resources provided by a TKE or EKS cluster).
     * @param PodSpecInfo $PodSpecInfo The pod resource information.
     * @param string $ClickHouseClusterName The server group name selected for ClickHouse cluster scale-out.
     * @param string $ClickHouseClusterType The server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
     * @param string $YarnNodeLabel The YARN node label specified for scale-out.
     * @param boolean $EnableStartServiceFlag Whether to start services after scale-out.
<li>`true`: Yes</li>
<li>`false` (default): No</li>
     * @param NodeResourceSpec $ResourceSpec The spec settings.
     * @param string $Zone The ID of the AZ where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
     * @param string $SubnetId The subnet, which defaults to the subnet used when the cluster is created.
     * @param array $ScaleOutServiceConfGroupsInfo 
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ScaleOutNodeConfig",$param) and $param["ScaleOutNodeConfig"] !== null) {
            $this->ScaleOutNodeConfig = new ScaleOutNodeConfig();
            $this->ScaleOutNodeConfig->deserialize($param["ScaleOutNodeConfig"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("ScriptBootstrapActionConfig",$param) and $param["ScriptBootstrapActionConfig"] !== null) {
            $this->ScriptBootstrapActionConfig = [];
            foreach ($param["ScriptBootstrapActionConfig"] as $key => $value){
                $obj = new ScriptBootstrapActionConfig();
                $obj->deserialize($value);
                array_push($this->ScriptBootstrapActionConfig, $obj);
            }
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HardwareSourceType",$param) and $param["HardwareSourceType"] !== null) {
            $this->HardwareSourceType = $param["HardwareSourceType"];
        }

        if (array_key_exists("PodSpecInfo",$param) and $param["PodSpecInfo"] !== null) {
            $this->PodSpecInfo = new PodSpecInfo();
            $this->PodSpecInfo->deserialize($param["PodSpecInfo"]);
        }

        if (array_key_exists("ClickHouseClusterName",$param) and $param["ClickHouseClusterName"] !== null) {
            $this->ClickHouseClusterName = $param["ClickHouseClusterName"];
        }

        if (array_key_exists("ClickHouseClusterType",$param) and $param["ClickHouseClusterType"] !== null) {
            $this->ClickHouseClusterType = $param["ClickHouseClusterType"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("EnableStartServiceFlag",$param) and $param["EnableStartServiceFlag"] !== null) {
            $this->EnableStartServiceFlag = $param["EnableStartServiceFlag"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NodeResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ScaleOutServiceConfGroupsInfo",$param) and $param["ScaleOutServiceConfGroupsInfo"] !== null) {
            $this->ScaleOutServiceConfGroupsInfo = [];
            foreach ($param["ScaleOutServiceConfGroupsInfo"] as $key => $value){
                $obj = new ScaleOutServiceConfGroupsInfo();
                $obj->deserialize($value);
                array_push($this->ScaleOutServiceConfGroupsInfo, $obj);
            }
        }
    }
}
