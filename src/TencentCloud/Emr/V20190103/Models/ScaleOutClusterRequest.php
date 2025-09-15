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
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method ScaleOutNodeConfig getScaleOutNodeConfig() Obtain Scale-up node type and quantity.
 * @method void setScaleOutNodeConfig(ScaleOutNodeConfig $ScaleOutNodeConfig) Set Scale-up node type and quantity.
 * @method string getClientToken() Obtain Unique random identifier with the time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources again, for example, a9a90aa6-****-****-****-fae36063280.
 * @method void setClientToken(string $ClientToken) Set Unique random identifier with the time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources again, for example, a9a90aa6-****-****-****-fae36063280.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Setting of parameters related to monthly subscription. Through this parameter, you can specify the duration of purchase for monthly subscription instances, whether to set auto-renewal, and other attributes. This parameter is required when the specified instance is subject to the payment mode of prepaid.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Setting of parameters related to monthly subscription. Through this parameter, you can specify the duration of purchase for monthly subscription instances, whether to set auto-renewal, and other attributes. This parameter is required when the specified instance is subject to the payment mode of prepaid.
 * @method array getScriptBootstrapActionConfig() Obtain [Bootstrap Actions](https://www.tencentcloud.comom/document/product/589/35656?from_cn_redirect=1) script settings.
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) Set [Bootstrap Actions](https://www.tencentcloud.comom/document/product/589/35656?from_cn_redirect=1) script settings.
 * @method array getSoftDeployInfo() Obtain Scale-out deployment service. New nodes inherit services deployed in the current node type by default, including default optional services. This parameter only supports optional service filling, for example: HDFS, YARN, and Impala have been deployed to existing task nodes. When API is used to scale out the task nodes without deploying Impala, only HDFS and YARN are filled for deployment services. For more details, see [Mapping Table of Component Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set Scale-out deployment service. New nodes inherit services deployed in the current node type by default, including default optional services. This parameter only supports optional service filling, for example: HDFS, YARN, and Impala have been deployed to existing task nodes. When API is used to scale out the task nodes without deploying Impala, only HDFS and YARN are filled for deployment services. For more details, see [Mapping Table of Component Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
 * @method array getServiceNodeInfo() Obtain Deployment process. By default, all scale-out service processes are deployed. Deployment processes can be modified. For example, HDFS, YARN, or Impala has been deployed for the current Task node. The default deployment services include DataNode,NodeManager,ImpalaServer. If users need to modify deployment process information, the deployment process can be DataNode, NodeManager, ImpalaServerCoordinator or DataNode, NodeManager, ImpalaServerExecutor. For more details, see [Mapping Table of Process Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set Deployment process. By default, all scale-out service processes are deployed. Deployment processes can be modified. For example, HDFS, YARN, or Impala has been deployed for the current Task node. The default deployment services include DataNode,NodeManager,ImpalaServer. If users need to modify deployment process information, the deployment process can be DataNode, NodeManager, ImpalaServerCoordinator or DataNode, NodeManager, ImpalaServerExecutor. For more details, see [Mapping Table of Process Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
 * @method array getDisasterRecoverGroupIds() Obtain Spread placement group ID list. Only one can be specified currently.
This parameter can be obtained by calling the DisasterRecoverGroupId field in the return value of the [DescribeDisasterRecoverGroups](https://www.tencentcloud.comom/document/product/213/17810?from_cn_redirect=1) API.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Spread placement group ID list. Only one can be specified currently.
This parameter can be obtained by calling the DisasterRecoverGroupId field in the return value of the [DescribeDisasterRecoverGroups](https://www.tencentcloud.comom/document/product/213/17810?from_cn_redirect=1) API.
 * @method array getTags() Obtain List of tags bound to scale-out nodes.
 * @method void setTags(array $Tags) Set List of tags bound to scale-out nodes.
 * @method string getHardwareSourceType() Obtain Resource type selected for scale-out with valid values "HOST","POD","MNode", where HOST indicates an ordinary CVM resource, POD indicates a resource provided by the TKE cluster or EKS cluster, and MNode indicates a fully managed resource type.
 * @method void setHardwareSourceType(string $HardwareSourceType) Set Resource type selected for scale-out with valid values "HOST","POD","MNode", where HOST indicates an ordinary CVM resource, POD indicates a resource provided by the TKE cluster or EKS cluster, and MNode indicates a fully managed resource type.
 * @method PodSpecInfo getPodSpecInfo() Obtain Pod-related resource information.
 * @method void setPodSpecInfo(PodSpecInfo $PodSpecInfo) Set Pod-related resource information.
 * @method string getClickHouseClusterName() Obtain Machine group name selected for ClickHouse cluster scale-out.
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) Set Machine group name selected for ClickHouse cluster scale-out.
 * @method string getClickHouseClusterType() Obtain Machine group type selected for ClickHouse cluster scale-out. "New" indicates creating a group type, and "old" indicates using an existing group type.
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) Set Machine group type selected for ClickHouse cluster scale-out. "New" indicates creating a group type, and "old" indicates using an existing group type.
 * @method string getYarnNodeLabel() Obtain Specified Yarn Node Label for scale-out.
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set Specified Yarn Node Label for scale-out.
 * @method boolean getEnableStartServiceFlag() Obtain Whether to start a service after scale-out (default: false).
<li>true: yes</li>.
<li>false: no</li>.
 * @method void setEnableStartServiceFlag(boolean $EnableStartServiceFlag) Set Whether to start a service after scale-out (default: false).
<li>true: yes</li>.
<li>false: no</li>.
 * @method NodeResourceSpec getResourceSpec() Obtain Specifications settings.
 * @method void setResourceSpec(NodeResourceSpec $ResourceSpec) Set Specifications settings.
 * @method string getZone() Obtain Availability zone of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1).
 * @method void setZone(string $Zone) Set Availability zone of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1).
 * @method string getSubnetId() Obtain Subnet, which is the subnet at the time of cluster creation by default.
 * @method void setSubnetId(string $SubnetId) Set Subnet, which is the subnet at the time of cluster creation by default.
 * @method array getScaleOutServiceConfGroupsInfo() Obtain Configuration group specified for scale-out.
 * @method void setScaleOutServiceConfGroupsInfo(array $ScaleOutServiceConfGroupsInfo) Set Configuration group specified for scale-out.
 * @method NodeMark getNodeMarks() Obtain Node tag information: currently used only in Terraform.
 * @method void setNodeMarks(NodeMark $NodeMarks) Set Node tag information: currently used only in Terraform.
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
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var ScaleOutNodeConfig Scale-up node type and quantity.
     */
    public $ScaleOutNodeConfig;

    /**
     * @var string Unique random identifier with the time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources again, for example, a9a90aa6-****-****-****-fae36063280.
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid Setting of parameters related to monthly subscription. Through this parameter, you can specify the duration of purchase for monthly subscription instances, whether to set auto-renewal, and other attributes. This parameter is required when the specified instance is subject to the payment mode of prepaid.
     */
    public $InstanceChargePrepaid;

    /**
     * @var array [Bootstrap Actions](https://www.tencentcloud.comom/document/product/589/35656?from_cn_redirect=1) script settings.
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var array Scale-out deployment service. New nodes inherit services deployed in the current node type by default, including default optional services. This parameter only supports optional service filling, for example: HDFS, YARN, and Impala have been deployed to existing task nodes. When API is used to scale out the task nodes without deploying Impala, only HDFS and YARN are filled for deployment services. For more details, see [Mapping Table of Component Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
     */
    public $SoftDeployInfo;

    /**
     * @var array Deployment process. By default, all scale-out service processes are deployed. Deployment processes can be modified. For example, HDFS, YARN, or Impala has been deployed for the current Task node. The default deployment services include DataNode,NodeManager,ImpalaServer. If users need to modify deployment process information, the deployment process can be DataNode, NodeManager, ImpalaServerCoordinator or DataNode, NodeManager, ImpalaServerExecutor. For more details, see [Mapping Table of Process Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
     */
    public $ServiceNodeInfo;

    /**
     * @var array Spread placement group ID list. Only one can be specified currently.
This parameter can be obtained by calling the DisasterRecoverGroupId field in the return value of the [DescribeDisasterRecoverGroups](https://www.tencentcloud.comom/document/product/213/17810?from_cn_redirect=1) API.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array List of tags bound to scale-out nodes.
     */
    public $Tags;

    /**
     * @var string Resource type selected for scale-out with valid values "HOST","POD","MNode", where HOST indicates an ordinary CVM resource, POD indicates a resource provided by the TKE cluster or EKS cluster, and MNode indicates a fully managed resource type.
     */
    public $HardwareSourceType;

    /**
     * @var PodSpecInfo Pod-related resource information.
     */
    public $PodSpecInfo;

    /**
     * @var string Machine group name selected for ClickHouse cluster scale-out.
     */
    public $ClickHouseClusterName;

    /**
     * @var string Machine group type selected for ClickHouse cluster scale-out. "New" indicates creating a group type, and "old" indicates using an existing group type.
     */
    public $ClickHouseClusterType;

    /**
     * @var string Specified Yarn Node Label for scale-out.
     */
    public $YarnNodeLabel;

    /**
     * @var boolean Whether to start a service after scale-out (default: false).
<li>true: yes</li>.
<li>false: no</li>.
     */
    public $EnableStartServiceFlag;

    /**
     * @var NodeResourceSpec Specifications settings.
     */
    public $ResourceSpec;

    /**
     * @var string Availability zone of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1).
     */
    public $Zone;

    /**
     * @var string Subnet, which is the subnet at the time of cluster creation by default.
     */
    public $SubnetId;

    /**
     * @var array Configuration group specified for scale-out.
     */
    public $ScaleOutServiceConfGroupsInfo;

    /**
     * @var NodeMark Node tag information: currently used only in Terraform.
     */
    public $NodeMarks;

    /**
     * @param string $InstanceChargeType The node billing mode. Valid values:
<li>`POSTPAID_BY_HOUR`: The postpaid mode by hour.</li>
<li>`SPOTPAID`: The spot instance mode (for task nodes only).</li>
     * @param string $InstanceId Cluster instance ID.
     * @param ScaleOutNodeConfig $ScaleOutNodeConfig Scale-up node type and quantity.
     * @param string $ClientToken Unique random identifier with the time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources again, for example, a9a90aa6-****-****-****-fae36063280.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Setting of parameters related to monthly subscription. Through this parameter, you can specify the duration of purchase for monthly subscription instances, whether to set auto-renewal, and other attributes. This parameter is required when the specified instance is subject to the payment mode of prepaid.
     * @param array $ScriptBootstrapActionConfig [Bootstrap Actions](https://www.tencentcloud.comom/document/product/589/35656?from_cn_redirect=1) script settings.
     * @param array $SoftDeployInfo Scale-out deployment service. New nodes inherit services deployed in the current node type by default, including default optional services. This parameter only supports optional service filling, for example: HDFS, YARN, and Impala have been deployed to existing task nodes. When API is used to scale out the task nodes without deploying Impala, only HDFS and YARN are filled for deployment services. For more details, see [Mapping Table of Component Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
     * @param array $ServiceNodeInfo Deployment process. By default, all scale-out service processes are deployed. Deployment processes can be modified. For example, HDFS, YARN, or Impala has been deployed for the current Task node. The default deployment services include DataNode,NodeManager,ImpalaServer. If users need to modify deployment process information, the deployment process can be DataNode, NodeManager, ImpalaServerCoordinator or DataNode, NodeManager, ImpalaServerExecutor. For more details, see [Mapping Table of Process Names](https://www.tencentcloud.comom/document/product/589/98760?from_cn_redirect=1).
     * @param array $DisasterRecoverGroupIds Spread placement group ID list. Only one can be specified currently.
This parameter can be obtained by calling the DisasterRecoverGroupId field in the return value of the [DescribeDisasterRecoverGroups](https://www.tencentcloud.comom/document/product/213/17810?from_cn_redirect=1) API.
     * @param array $Tags List of tags bound to scale-out nodes.
     * @param string $HardwareSourceType Resource type selected for scale-out with valid values "HOST","POD","MNode", where HOST indicates an ordinary CVM resource, POD indicates a resource provided by the TKE cluster or EKS cluster, and MNode indicates a fully managed resource type.
     * @param PodSpecInfo $PodSpecInfo Pod-related resource information.
     * @param string $ClickHouseClusterName Machine group name selected for ClickHouse cluster scale-out.
     * @param string $ClickHouseClusterType Machine group type selected for ClickHouse cluster scale-out. "New" indicates creating a group type, and "old" indicates using an existing group type.
     * @param string $YarnNodeLabel Specified Yarn Node Label for scale-out.
     * @param boolean $EnableStartServiceFlag Whether to start a service after scale-out (default: false).
<li>true: yes</li>.
<li>false: no</li>.
     * @param NodeResourceSpec $ResourceSpec Specifications settings.
     * @param string $Zone Availability zone of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1).
     * @param string $SubnetId Subnet, which is the subnet at the time of cluster creation by default.
     * @param array $ScaleOutServiceConfGroupsInfo Configuration group specified for scale-out.
     * @param NodeMark $NodeMarks Node tag information: currently used only in Terraform.
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

        if (array_key_exists("NodeMarks",$param) and $param["NodeMarks"] !== null) {
            $this->NodeMarks = new NodeMark();
            $this->NodeMarks->deserialize($param["NodeMarks"]);
        }
    }
}
