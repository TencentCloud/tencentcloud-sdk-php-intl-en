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
 * ScaleOutInstance request structure.
 *
 * @method string getTimeUnit() Obtain <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method integer getTimeSpan() Obtain <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getPayMode() Obtain <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method void setPayMode(integer $PayMode) Set <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method string getClientToken() Obtain <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
 * @method array getPreExecutedFileSettings() Obtain <p>Bootstrap script settings.</p>
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) Set <p>Bootstrap script settings.</p>
 * @method integer getTaskCount() Obtain <p>Number of Task nodes to be scaled out.</p>
 * @method void setTaskCount(integer $TaskCount) Set <p>Number of Task nodes to be scaled out.</p>
 * @method integer getCoreCount() Obtain <p>Number of scale-out Core nodes.</p>
 * @method void setCoreCount(integer $CoreCount) Set <p>Number of scale-out Core nodes.</p>
 * @method array getUnNecessaryNodeList() Obtain <p>Processes, which are not required during the scale-out.</p>
 * @method void setUnNecessaryNodeList(array $UnNecessaryNodeList) Set <p>Processes, which are not required during the scale-out.</p>
 * @method integer getRouterCount() Obtain <p>Number of Router nodes to be scaled out.</p>
 * @method void setRouterCount(integer $RouterCount) Set <p>Number of Router nodes to be scaled out.</p>
 * @method array getSoftDeployInfo() Obtain <p>Deployed service.</p><li>SoftDeployInfo and ServiceNodeInfo are parameters in the same group and are mutually exclusive with UnNecessaryNodeList.</li><li>It is recommended to use SoftDeployInfo and ServiceNodeInfo together.</li>
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set <p>Deployed service.</p><li>SoftDeployInfo and ServiceNodeInfo are parameters in the same group and are mutually exclusive with UnNecessaryNodeList.</li><li>It is recommended to use SoftDeployInfo and ServiceNodeInfo together.</li>
 * @method array getServiceNodeInfo() Obtain <p>Started process.</p>
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set <p>Started process.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>List of dispersed placement group IDs. Currently, only one ID is supported.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>List of dispersed placement group IDs. Currently, only one ID is supported.</p>
 * @method array getTags() Obtain <p>List of tags bound to nodes for the scale-out.</p>
 * @method void setTags(array $Tags) Set <p>List of tags bound to nodes for the scale-out.</p>
 * @method string getHardwareResourceType() Obtain <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
 * @method void setHardwareResourceType(string $HardwareResourceType) Set <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
 * @method PodSpec getPodSpec() Obtain <p>Pod specifications and source information, which are specified when Pod resources are used for the scale-out.</p>
 * @method void setPodSpec(PodSpec $PodSpec) Set <p>Pod specifications and source information, which are specified when Pod resources are used for the scale-out.</p>
 * @method string getClickHouseClusterName() Obtain <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) Set <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
 * @method string getClickHouseClusterType() Obtain <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) Set <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
 * @method string getYarnNodeLabel() Obtain <p>YARN node label specified for the rule-based scale-out.</p>
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set <p>YARN node label specified for the rule-based scale-out.</p>
 * @method PodParameter getPodParameter() Obtain <p>Pod custom permission and parameter.</p>
 * @method void setPodParameter(PodParameter $PodParameter) Set <p>Pod custom permission and parameter.</p>
 * @method integer getMasterCount() Obtain <p>Number of Master nodes for the scale-out.<br>When a ClickHouse cluster is used for the scale-out, this parameter does not take effect.<br>When a Kafka cluster is used for the scale-out, this parameter does not take effect.<br>When HardwareResourceType is set to POD, this parameter does not take effect.</p>
 * @method void setMasterCount(integer $MasterCount) Set <p>Number of Master nodes for the scale-out.<br>When a ClickHouse cluster is used for the scale-out, this parameter does not take effect.<br>When a Kafka cluster is used for the scale-out, this parameter does not take effect.<br>When HardwareResourceType is set to POD, this parameter does not take effect.</p>
 * @method string getStartServiceAfterScaleOut() Obtain <p>Whether the service is started after the scale-out. Valid values: true (yes) and false (no).</p>
 * @method void setStartServiceAfterScaleOut(string $StartServiceAfterScaleOut) Set <p>Whether the service is started after the scale-out. Valid values: true (yes) and false (no).</p>
 * @method integer getZoneId() Obtain <p>AZ. The primary AZ of the cluster is selected by default.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>AZ. The primary AZ of the cluster is selected by default.</p>
 * @method string getSubnetId() Obtain <p>Subnet. The subnet used during cluster creation is selected by default.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet. The subnet used during cluster creation is selected by default.</p>
 * @method string getScaleOutServiceConfAssign() Obtain <p>Preset configuration group.</p>
 * @method void setScaleOutServiceConfAssign(string $ScaleOutServiceConfAssign) Set <p>Preset configuration group.</p>
 * @method integer getAutoRenew() Obtain <p>Auto-renewal. Valid values: 0 (disabled) and 1 (enabled).</p>
 * @method void setAutoRenew(integer $AutoRenew) Set <p>Auto-renewal. Valid values: 0 (disabled) and 1 (enabled).</p>
 * @method string getResourceBaseType() Obtain <p>Type. Valid values: ComputeResource and EMR. Default value: EMR. If this parameter is set to EMR, InstanceId takes effect. If this parameter is set to ComputeResource, ComputeResourceId is used.</p>
 * @method void setResourceBaseType(string $ResourceBaseType) Set <p>Type. Valid values: ComputeResource and EMR. Default value: EMR. If this parameter is set to EMR, InstanceId takes effect. If this parameter is set to ComputeResource, ComputeResourceId is used.</p>
 * @method string getComputeResourceId() Obtain <p>Computing resource ID.</p>
 * @method void setComputeResourceId(string $ComputeResourceId) Set <p>Computing resource ID.</p>
 * @method ComputeResourceAdvanceParams getComputeResourceAdvanceParams() Obtain <p>Advanced settings of computing resources.</p>
 * @method void setComputeResourceAdvanceParams(ComputeResourceAdvanceParams $ComputeResourceAdvanceParams) Set <p>Advanced settings of computing resources.</p>
 * @method NodeMark getNodeMarks() Obtain <p>Node tag information, which is currently only provided for the Terraform platform.</p>
 * @method void setNodeMarks(NodeMark $NodeMarks) Set <p>Node tag information, which is currently only provided for the Terraform platform.</p>
 * @method string getWarehouseName() Obtain <p>Compute group specified for the scale-out.</p>
 * @method void setWarehouseName(string $WarehouseName) Set <p>Compute group specified for the scale-out.</p>
 * @method integer getPartitionNumber() Obtain <p>Partition of a partition placement group.</p>
 * @method void setPartitionNumber(integer $PartitionNumber) Set <p>Partition of a partition placement group.</p>
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     */
    public $TimeSpan;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     */
    public $PayMode;

    /**
     * @var string <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
     */
    public $ClientToken;

    /**
     * @var array <p>Bootstrap script settings.</p>
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer <p>Number of Task nodes to be scaled out.</p>
     */
    public $TaskCount;

    /**
     * @var integer <p>Number of scale-out Core nodes.</p>
     */
    public $CoreCount;

    /**
     * @var array <p>Processes, which are not required during the scale-out.</p>
     */
    public $UnNecessaryNodeList;

    /**
     * @var integer <p>Number of Router nodes to be scaled out.</p>
     */
    public $RouterCount;

    /**
     * @var array <p>Deployed service.</p><li>SoftDeployInfo and ServiceNodeInfo are parameters in the same group and are mutually exclusive with UnNecessaryNodeList.</li><li>It is recommended to use SoftDeployInfo and ServiceNodeInfo together.</li>
     */
    public $SoftDeployInfo;

    /**
     * @var array <p>Started process.</p>
     */
    public $ServiceNodeInfo;

    /**
     * @var array <p>List of dispersed placement group IDs. Currently, only one ID is supported.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array <p>List of tags bound to nodes for the scale-out.</p>
     */
    public $Tags;

    /**
     * @var string <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
     */
    public $HardwareResourceType;

    /**
     * @var PodSpec <p>Pod specifications and source information, which are specified when Pod resources are used for the scale-out.</p>
     */
    public $PodSpec;

    /**
     * @var string <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
     */
    public $ClickHouseClusterName;

    /**
     * @var string <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
     */
    public $ClickHouseClusterType;

    /**
     * @var string <p>YARN node label specified for the rule-based scale-out.</p>
     */
    public $YarnNodeLabel;

    /**
     * @var PodParameter <p>Pod custom permission and parameter.</p>
     */
    public $PodParameter;

    /**
     * @var integer <p>Number of Master nodes for the scale-out.<br>When a ClickHouse cluster is used for the scale-out, this parameter does not take effect.<br>When a Kafka cluster is used for the scale-out, this parameter does not take effect.<br>When HardwareResourceType is set to POD, this parameter does not take effect.</p>
     */
    public $MasterCount;

    /**
     * @var string <p>Whether the service is started after the scale-out. Valid values: true (yes) and false (no).</p>
     */
    public $StartServiceAfterScaleOut;

    /**
     * @var integer <p>AZ. The primary AZ of the cluster is selected by default.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Subnet. The subnet used during cluster creation is selected by default.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Preset configuration group.</p>
     */
    public $ScaleOutServiceConfAssign;

    /**
     * @var integer <p>Auto-renewal. Valid values: 0 (disabled) and 1 (enabled).</p>
     */
    public $AutoRenew;

    /**
     * @var string <p>Type. Valid values: ComputeResource and EMR. Default value: EMR. If this parameter is set to EMR, InstanceId takes effect. If this parameter is set to ComputeResource, ComputeResourceId is used.</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>Computing resource ID.</p>
     */
    public $ComputeResourceId;

    /**
     * @var ComputeResourceAdvanceParams <p>Advanced settings of computing resources.</p>
     */
    public $ComputeResourceAdvanceParams;

    /**
     * @var NodeMark <p>Node tag information, which is currently only provided for the Terraform platform.</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>Compute group specified for the scale-out.</p>
     */
    public $WarehouseName;

    /**
     * @var integer <p>Partition of a partition placement group.</p>
     */
    public $PartitionNumber;

    /**
     * @param string $TimeUnit <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     * @param integer $TimeSpan <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $PayMode <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     * @param string $ClientToken <p>Unique random identifier, which is valid for five minutes and needs to be specified by the caller. This prevents the client from repeatedly creating resources. Example value: a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280.</p>
     * @param array $PreExecutedFileSettings <p>Bootstrap script settings.</p>
     * @param integer $TaskCount <p>Number of Task nodes to be scaled out.</p>
     * @param integer $CoreCount <p>Number of scale-out Core nodes.</p>
     * @param array $UnNecessaryNodeList <p>Processes, which are not required during the scale-out.</p>
     * @param integer $RouterCount <p>Number of Router nodes to be scaled out.</p>
     * @param array $SoftDeployInfo <p>Deployed service.</p><li>SoftDeployInfo and ServiceNodeInfo are parameters in the same group and are mutually exclusive with UnNecessaryNodeList.</li><li>It is recommended to use SoftDeployInfo and ServiceNodeInfo together.</li>
     * @param array $ServiceNodeInfo <p>Started process.</p>
     * @param array $DisasterRecoverGroupIds <p>List of dispersed placement group IDs. Currently, only one ID is supported.</p>
     * @param array $Tags <p>List of tags bound to nodes for the scale-out.</p>
     * @param string $HardwareResourceType <p>Resource type selected for the scale-out. Valid values: &quot;HOST&quot;, &quot;POD&quot;, and &quot;MNode&quot;. HOST indicates ordinary CVM resources, POD indicates resources provided by a TKE cluster or an EKS cluster, and MNode indicates fully managed resources.</p>
     * @param PodSpec $PodSpec <p>Pod specifications and source information, which are specified when Pod resources are used for the scale-out.</p>
     * @param string $ClickHouseClusterName <p>Machine group name selected for the ClickHouse cluster scale-out.</p>
     * @param string $ClickHouseClusterType <p>Machine group type selected for the ClickHouse cluster scale-out. Valid values: new (adds a group) and old (selects an existing group).</p>
     * @param string $YarnNodeLabel <p>YARN node label specified for the rule-based scale-out.</p>
     * @param PodParameter $PodParameter <p>Pod custom permission and parameter.</p>
     * @param integer $MasterCount <p>Number of Master nodes for the scale-out.<br>When a ClickHouse cluster is used for the scale-out, this parameter does not take effect.<br>When a Kafka cluster is used for the scale-out, this parameter does not take effect.<br>When HardwareResourceType is set to POD, this parameter does not take effect.</p>
     * @param string $StartServiceAfterScaleOut <p>Whether the service is started after the scale-out. Valid values: true (yes) and false (no).</p>
     * @param integer $ZoneId <p>AZ. The primary AZ of the cluster is selected by default.</p>
     * @param string $SubnetId <p>Subnet. The subnet used during cluster creation is selected by default.</p>
     * @param string $ScaleOutServiceConfAssign <p>Preset configuration group.</p>
     * @param integer $AutoRenew <p>Auto-renewal. Valid values: 0 (disabled) and 1 (enabled).</p>
     * @param string $ResourceBaseType <p>Type. Valid values: ComputeResource and EMR. Default value: EMR. If this parameter is set to EMR, InstanceId takes effect. If this parameter is set to ComputeResource, ComputeResourceId is used.</p>
     * @param string $ComputeResourceId <p>Computing resource ID.</p>
     * @param ComputeResourceAdvanceParams $ComputeResourceAdvanceParams <p>Advanced settings of computing resources.</p>
     * @param NodeMark $NodeMarks <p>Node tag information, which is currently only provided for the Terraform platform.</p>
     * @param string $WarehouseName <p>Compute group specified for the scale-out.</p>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("UnNecessaryNodeList",$param) and $param["UnNecessaryNodeList"] !== null) {
            $this->UnNecessaryNodeList = $param["UnNecessaryNodeList"];
        }

        if (array_key_exists("RouterCount",$param) and $param["RouterCount"] !== null) {
            $this->RouterCount = $param["RouterCount"];
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

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("PodSpec",$param) and $param["PodSpec"] !== null) {
            $this->PodSpec = new PodSpec();
            $this->PodSpec->deserialize($param["PodSpec"]);
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

        if (array_key_exists("PodParameter",$param) and $param["PodParameter"] !== null) {
            $this->PodParameter = new PodParameter();
            $this->PodParameter->deserialize($param["PodParameter"]);
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("StartServiceAfterScaleOut",$param) and $param["StartServiceAfterScaleOut"] !== null) {
            $this->StartServiceAfterScaleOut = $param["StartServiceAfterScaleOut"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ScaleOutServiceConfAssign",$param) and $param["ScaleOutServiceConfAssign"] !== null) {
            $this->ScaleOutServiceConfAssign = $param["ScaleOutServiceConfAssign"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("ComputeResourceAdvanceParams",$param) and $param["ComputeResourceAdvanceParams"] !== null) {
            $this->ComputeResourceAdvanceParams = new ComputeResourceAdvanceParams();
            $this->ComputeResourceAdvanceParams->deserialize($param["ComputeResourceAdvanceParams"]);
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
