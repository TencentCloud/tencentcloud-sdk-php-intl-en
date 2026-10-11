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
 * @method string getInstanceChargeType() Obtain <p>Node billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li><li>SPOTPAID: spot billing (for Task nodes only)</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Node billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li><li>SPOTPAID: spot billing (for Task nodes only)</li>
 * @method string getInstanceId() Obtain <p>Cluster ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Cluster ID.</p>
 * @method ScaleOutNodeConfig getScaleOutNodeConfig() Obtain <p>Type and number of nodes for the scale-out.</p>
 * @method void setScaleOutNodeConfig(ScaleOutNodeConfig $ScaleOutNodeConfig) Set <p>Type and number of nodes for the scale-out.</p>
 * @method string getClientToken() Obtain <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
 * @method array getScriptBootstrapActionConfig() Obtain <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) Set <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
 * @method array getSoftDeployInfo() Obtain <p>To scale out deployment services, new nodes will inherit the services deployed on the current node type by default. The deployment service includes default optional services. This parameter is supported only when optional services are used. For example, if existing task nodes have HDFS, YARN, and impala deployed, when using the API to scale out Task nodes without deploying impala, fill in only HDFS and YARN for the deployment service. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Component Name Mapping Table</a>.</p>
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set <p>To scale out deployment services, new nodes will inherit the services deployed on the current node type by default. The deployment service includes default optional services. This parameter is supported only when optional services are used. For example, if existing task nodes have HDFS, YARN, and impala deployed, when using the API to scale out Task nodes without deploying impala, fill in only HDFS and YARN for the deployment service. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Component Name Mapping Table</a>.</p>
 * @method array getServiceNodeInfo() Obtain <p>Deployment processes. By default, all processes of the scaled‑out service are deployed. Deployment processes can be modified. For example, if the deployed services for the current task node are HDFS, YARN, and impala, the default deployment services are DataNode, NodeManager, and ImpalaServer. If you need to modify deployment process information, the deployment processes can be DataNode, NodeManager, and ImpalaServerCoordinator or DataNode, NodeManager, and ImpalaServerExecutor. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Process Name Mapping Table</a>.</p>
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set <p>Deployment processes. By default, all processes of the scaled‑out service are deployed. Deployment processes can be modified. For example, if the deployed services for the current task node are HDFS, YARN, and impala, the default deployment services are DataNode, NodeManager, and ImpalaServer. If you need to modify deployment process information, the deployment processes can be DataNode, NodeManager, and ImpalaServerCoordinator or DataNode, NodeManager, and ImpalaServerExecutor. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Process Name Mapping Table</a>.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
 * @method array getTags() Obtain <p>List of tags bound to nodes for the scale-out.</p>
 * @method void setTags(array $Tags) Set <p>List of tags bound to nodes for the scale-out.</p>
 * @method string getHardwareSourceType() Obtain <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
 * @method void setHardwareSourceType(string $HardwareSourceType) Set <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
 * @method PodSpecInfo getPodSpecInfo() Obtain <p>Pod-related resource information.</p>
 * @method void setPodSpecInfo(PodSpecInfo $PodSpecInfo) Set <p>Pod-related resource information.</p>
 * @method string getClickHouseClusterName() Obtain <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) Set <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
 * @method string getClickHouseClusterType() Obtain <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) Set <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
 * @method string getYarnNodeLabel() Obtain <p>YARN node label specified for the scale-out.</p>
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set <p>YARN node label specified for the scale-out.</p>
 * @method boolean getEnableStartServiceFlag() Obtain <p>Whether to start the service after a scale-out. Default value: false. Valid values:</p><li>true: yes</li><li>false: no</li>
 * @method void setEnableStartServiceFlag(boolean $EnableStartServiceFlag) Set <p>Whether to start the service after a scale-out. Default value: false. Valid values:</p><li>true: yes</li><li>false: no</li>
 * @method NodeResourceSpec getResourceSpec() Obtain <p>Specification settings.</p>
 * @method void setResourceSpec(NodeResourceSpec $ResourceSpec) Set <p>Specification settings.</p>
 * @method string getZone() Obtain <p>AZ to which the instance belongs, for example, ap-guangzhou-1. This parameter can be obtained from the Zone field in the response of <a href="https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
 * @method void setZone(string $Zone) Set <p>AZ to which the instance belongs, for example, ap-guangzhou-1. This parameter can be obtained from the Zone field in the response of <a href="https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
 * @method string getSubnetId() Obtain <p>Subnet. The subnet used during cluster creation is selected by default.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet. The subnet used during cluster creation is selected by default.</p>
 * @method array getScaleOutServiceConfGroupsInfo() Obtain <p>Configuration group specified for the scale-out.</p>
 * @method void setScaleOutServiceConfGroupsInfo(array $ScaleOutServiceConfGroupsInfo) Set <p>Configuration group specified for the scale-out.</p>
 * @method NodeMark getNodeMarks() Obtain <p>Node flag information, which is currently only provided for the Terraform platform.</p>
 * @method void setNodeMarks(NodeMark $NodeMarks) Set <p>Node flag information, which is currently only provided for the Terraform platform.</p>
 * @method string getWarehouseName() Obtain <p>Name of the compute group specified for the scale-out.</p>
 * @method void setWarehouseName(string $WarehouseName) Set <p>Name of the compute group specified for the scale-out.</p>
 * @method integer getPartitionNumber() Obtain <p>Partition of a partition placement group.</p>
 * @method void setPartitionNumber(integer $PartitionNumber) Set <p>Partition of a partition placement group.</p>
 */
class ScaleOutClusterRequest extends AbstractModel
{
    /**
     * @var string <p>Node billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li><li>SPOTPAID: spot billing (for Task nodes only)</li>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $InstanceId;

    /**
     * @var ScaleOutNodeConfig <p>Type and number of nodes for the scale-out.</p>
     */
    public $ScaleOutNodeConfig;

    /**
     * @var string <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var array <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var array <p>To scale out deployment services, new nodes will inherit the services deployed on the current node type by default. The deployment service includes default optional services. This parameter is supported only when optional services are used. For example, if existing task nodes have HDFS, YARN, and impala deployed, when using the API to scale out Task nodes without deploying impala, fill in only HDFS and YARN for the deployment service. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Component Name Mapping Table</a>.</p>
     */
    public $SoftDeployInfo;

    /**
     * @var array <p>Deployment processes. By default, all processes of the scaled‑out service are deployed. Deployment processes can be modified. For example, if the deployed services for the current task node are HDFS, YARN, and impala, the default deployment services are DataNode, NodeManager, and ImpalaServer. If you need to modify deployment process information, the deployment processes can be DataNode, NodeManager, and ImpalaServerCoordinator or DataNode, NodeManager, and ImpalaServerExecutor. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Process Name Mapping Table</a>.</p>
     */
    public $ServiceNodeInfo;

    /**
     * @var array <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array <p>List of tags bound to nodes for the scale-out.</p>
     */
    public $Tags;

    /**
     * @var string <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
     */
    public $HardwareSourceType;

    /**
     * @var PodSpecInfo <p>Pod-related resource information.</p>
     */
    public $PodSpecInfo;

    /**
     * @var string <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
     */
    public $ClickHouseClusterName;

    /**
     * @var string <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
     */
    public $ClickHouseClusterType;

    /**
     * @var string <p>YARN node label specified for the scale-out.</p>
     */
    public $YarnNodeLabel;

    /**
     * @var boolean <p>Whether to start the service after a scale-out. Default value: false. Valid values:</p><li>true: yes</li><li>false: no</li>
     */
    public $EnableStartServiceFlag;

    /**
     * @var NodeResourceSpec <p>Specification settings.</p>
     */
    public $ResourceSpec;

    /**
     * @var string <p>AZ to which the instance belongs, for example, ap-guangzhou-1. This parameter can be obtained from the Zone field in the response of <a href="https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
     */
    public $Zone;

    /**
     * @var string <p>Subnet. The subnet used during cluster creation is selected by default.</p>
     */
    public $SubnetId;

    /**
     * @var array <p>Configuration group specified for the scale-out.</p>
     */
    public $ScaleOutServiceConfGroupsInfo;

    /**
     * @var NodeMark <p>Node flag information, which is currently only provided for the Terraform platform.</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>Name of the compute group specified for the scale-out.</p>
     */
    public $WarehouseName;

    /**
     * @var integer <p>Partition of a partition placement group.</p>
     */
    public $PartitionNumber;

    /**
     * @param string $InstanceChargeType <p>Node billing mode. Valid values:</p><li>PREPAID: prepaid, that is, yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: pay-as-you-go on an hourly basis</li><li>SPOTPAID: spot billing (for Task nodes only)</li>
     * @param string $InstanceId <p>Cluster ID.</p>
     * @param ScaleOutNodeConfig $ScaleOutNodeConfig <p>Type and number of nodes for the scale-out.</p>
     * @param string $ClientToken <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Parameter settings related to yearly/monthly subscription. This parameter can be used to specify the purchase duration of a yearly/monthly subscription instance, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode of the specified instance is prepaid.</p>
     * @param array $ScriptBootstrapActionConfig <p><a href="https://www.tencentcloud.com/document/product/589/35656?from_cn_redirect=1">Bootstrap operation</a> script settings.</p>
     * @param array $SoftDeployInfo <p>To scale out deployment services, new nodes will inherit the services deployed on the current node type by default. The deployment service includes default optional services. This parameter is supported only when optional services are used. For example, if existing task nodes have HDFS, YARN, and impala deployed, when using the API to scale out Task nodes without deploying impala, fill in only HDFS and YARN for the deployment service. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Component Name Mapping Table</a>.</p>
     * @param array $ServiceNodeInfo <p>Deployment processes. By default, all processes of the scaled‑out service are deployed. Deployment processes can be modified. For example, if the deployed services for the current task node are HDFS, YARN, and impala, the default deployment services are DataNode, NodeManager, and ImpalaServer. If you need to modify deployment process information, the deployment processes can be DataNode, NodeManager, and ImpalaServerCoordinator or DataNode, NodeManager, and ImpalaServerExecutor. For details, see <a href="https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1">Process Name Mapping Table</a>.</p>
     * @param array $DisasterRecoverGroupIds <p>List of dispersed placement group IDs. Currently, only one ID can be specified.<br>This parameter can be obtained by calling the DisasterRecoverGroupId field in the response result of <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a>.</p>
     * @param array $Tags <p>List of tags bound to nodes for the scale-out.</p>
     * @param string $HardwareSourceType <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
     * @param PodSpecInfo $PodSpecInfo <p>Pod-related resource information.</p>
     * @param string $ClickHouseClusterName <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
     * @param string $ClickHouseClusterType <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
     * @param string $YarnNodeLabel <p>YARN node label specified for the scale-out.</p>
     * @param boolean $EnableStartServiceFlag <p>Whether to start the service after a scale-out. Default value: false. Valid values:</p><li>true: yes</li><li>false: no</li>
     * @param NodeResourceSpec $ResourceSpec <p>Specification settings.</p>
     * @param string $Zone <p>AZ to which the instance belongs, for example, ap-guangzhou-1. This parameter can be obtained from the Zone field in the response of <a href="https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
     * @param string $SubnetId <p>Subnet. The subnet used during cluster creation is selected by default.</p>
     * @param array $ScaleOutServiceConfGroupsInfo <p>Configuration group specified for the scale-out.</p>
     * @param NodeMark $NodeMarks <p>Node flag information, which is currently only provided for the Terraform platform.</p>
     * @param string $WarehouseName <p>Name of the compute group specified for the scale-out.</p>
     * @param integer $PartitionNumber <p>Partition of a partition placement group.</p>
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

        if (array_key_exists("WarehouseName",$param) and $param["WarehouseName"] !== null) {
            $this->WarehouseName = $param["WarehouseName"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }
    }
}
