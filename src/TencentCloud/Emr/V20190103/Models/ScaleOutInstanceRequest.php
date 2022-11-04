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
 * ScaleOutInstance request structure.
 *
 * @method string getTimeUnit() Obtain Time unit of scale-out. Valid values:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: Month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
 * @method void setTimeUnit(string $TimeUnit) Set Time unit of scale-out. Valid values:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: Month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
 * @method integer getTimeSpan() Obtain Time span of scale-out, which needs to be used together with `TimeUnit`.
 * @method void setTimeSpan(integer $TimeSpan) Set Time span of scale-out, which needs to be used together with `TimeUnit`.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getPayMode() Obtain Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
 * @method string getClientToken() Obtain Client token.
 * @method void setClientToken(string $ClientToken) Set Client token.
 * @method array getPreExecutedFileSettings() Obtain Bootstrap script settings.
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) Set Bootstrap script settings.
 * @method integer getTaskCount() Obtain Number of task nodes to be added.
 * @method void setTaskCount(integer $TaskCount) Set Number of task nodes to be added.
 * @method integer getCoreCount() Obtain Number of core nodes to be added.
 * @method void setCoreCount(integer $CoreCount) Set Number of core nodes to be added.
 * @method array getUnNecessaryNodeList() Obtain Processes unnecessary for scale-out.
 * @method void setUnNecessaryNodeList(array $UnNecessaryNodeList) Set Processes unnecessary for scale-out.
 * @method integer getRouterCount() Obtain Number of router nodes to be added.
 * @method void setRouterCount(integer $RouterCount) Set Number of router nodes to be added.
 * @method array getSoftDeployInfo() Obtain Deployed service.
<li>`SoftDeployInfo` and `ServiceNodeInfo` are in the same group and mutually exclusive with `UnNecessaryNodeList`.</li>
<li>The combination of `SoftDeployInfo` and `ServiceNodeInfo` is recommended.</li>
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set Deployed service.
<li>`SoftDeployInfo` and `ServiceNodeInfo` are in the same group and mutually exclusive with `UnNecessaryNodeList`.</li>
<li>The combination of `SoftDeployInfo` and `ServiceNodeInfo` is recommended.</li>
 * @method array getServiceNodeInfo() Obtain Started process.
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set Started process.
 * @method array getDisasterRecoverGroupIds() Obtain List of spread placement group IDs. Only one can be specified currently.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set List of spread placement group IDs. Only one can be specified currently.
 * @method array getTags() Obtain List of tags bound to added nodes.
 * @method void setTags(array $Tags) Set List of tags bound to added nodes.
 * @method string getHardwareResourceType() Obtain Resource type selected for scaling. Valid values: `host` (general CVM resource) and `pod` (resource provided by TKE or EKS cluster).
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Resource type selected for scaling. Valid values: `host` (general CVM resource) and `pod` (resource provided by TKE or EKS cluster).
 * @method PodSpec getPodSpec() Obtain Specified information such as pod specification and source for scale-out with pod resources.
 * @method void setPodSpec(PodSpec $PodSpec) Set Specified information such as pod specification and source for scale-out with pod resources.
 * @method string getClickHouseClusterName() Obtain Server group name selected for ClickHouse cluster scale-out.
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) Set Server group name selected for ClickHouse cluster scale-out.
 * @method string getClickHouseClusterType() Obtain Server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) Set Server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
 * @method string getYarnNodeLabel() Obtain Yarn node label specified for rule-based scale-out.
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set Yarn node label specified for rule-based scale-out.
 * @method PodParameter getPodParameter() Obtain Custom pod permission and parameter
 * @method void setPodParameter(PodParameter $PodParameter) Set Custom pod permission and parameter
 * @method integer getMasterCount() Obtain Number of master nodes to be added.
When a ClickHouse cluster is scaled, this parameter does not take effect.
When a Kafka cluster is scaled, this parameter does not take effect.
When `HardwareResourceType` is `pod`, this parameter does not take effect.
 * @method void setMasterCount(integer $MasterCount) Set Number of master nodes to be added.
When a ClickHouse cluster is scaled, this parameter does not take effect.
When a Kafka cluster is scaled, this parameter does not take effect.
When `HardwareResourceType` is `pod`, this parameter does not take effect.
 * @method string getStartServiceAfterScaleOut() Obtain Whether to start the service after scale-out. `true`: Yes; `false`: No.
 * @method void setStartServiceAfterScaleOut(string $StartServiceAfterScaleOut) Set Whether to start the service after scale-out. `true`: Yes; `false`: No.
 * @method integer getZoneId() Obtain AZ, which defaults to the primary AZ of the cluster.
 * @method void setZoneId(integer $ZoneId) Set AZ, which defaults to the primary AZ of the cluster.
 * @method string getSubnetId() Obtain Subnet, which defaults to the subnet used when the cluster is created.
 * @method void setSubnetId(string $SubnetId) Set Subnet, which defaults to the subnet used when the cluster is created.
 * @method string getScaleOutServiceConfAssign() Obtain Pre-defined configuration set
 * @method void setScaleOutServiceConfAssign(string $ScaleOutServiceConfAssign) Set Pre-defined configuration set
 * @method integer getAutoRenew() Obtain Whether to enable auto-renewal. Valid values: `0` (no), `1` (yes).
 * @method void setAutoRenew(integer $AutoRenew) Set Whether to enable auto-renewal. Valid values: `0` (no), `1` (yes).
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string Time unit of scale-out. Valid values:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: Month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
     */
    public $TimeUnit;

    /**
     * @var integer Time span of scale-out, which needs to be used together with `TimeUnit`.
     */
    public $TimeSpan;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
     */
    public $PayMode;

    /**
     * @var string Client token.
     */
    public $ClientToken;

    /**
     * @var array Bootstrap script settings.
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer Number of task nodes to be added.
     */
    public $TaskCount;

    /**
     * @var integer Number of core nodes to be added.
     */
    public $CoreCount;

    /**
     * @var array Processes unnecessary for scale-out.
     */
    public $UnNecessaryNodeList;

    /**
     * @var integer Number of router nodes to be added.
     */
    public $RouterCount;

    /**
     * @var array Deployed service.
<li>`SoftDeployInfo` and `ServiceNodeInfo` are in the same group and mutually exclusive with `UnNecessaryNodeList`.</li>
<li>The combination of `SoftDeployInfo` and `ServiceNodeInfo` is recommended.</li>
     */
    public $SoftDeployInfo;

    /**
     * @var array Started process.
     */
    public $ServiceNodeInfo;

    /**
     * @var array List of spread placement group IDs. Only one can be specified currently.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array List of tags bound to added nodes.
     */
    public $Tags;

    /**
     * @var string Resource type selected for scaling. Valid values: `host` (general CVM resource) and `pod` (resource provided by TKE or EKS cluster).
     */
    public $HardwareResourceType;

    /**
     * @var PodSpec Specified information such as pod specification and source for scale-out with pod resources.
     */
    public $PodSpec;

    /**
     * @var string Server group name selected for ClickHouse cluster scale-out.
     */
    public $ClickHouseClusterName;

    /**
     * @var string Server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
     */
    public $ClickHouseClusterType;

    /**
     * @var string Yarn node label specified for rule-based scale-out.
     */
    public $YarnNodeLabel;

    /**
     * @var PodParameter Custom pod permission and parameter
     */
    public $PodParameter;

    /**
     * @var integer Number of master nodes to be added.
When a ClickHouse cluster is scaled, this parameter does not take effect.
When a Kafka cluster is scaled, this parameter does not take effect.
When `HardwareResourceType` is `pod`, this parameter does not take effect.
     */
    public $MasterCount;

    /**
     * @var string Whether to start the service after scale-out. `true`: Yes; `false`: No.
     */
    public $StartServiceAfterScaleOut;

    /**
     * @var integer AZ, which defaults to the primary AZ of the cluster.
     */
    public $ZoneId;

    /**
     * @var string Subnet, which defaults to the subnet used when the cluster is created.
     */
    public $SubnetId;

    /**
     * @var string Pre-defined configuration set
     */
    public $ScaleOutServiceConfAssign;

    /**
     * @var integer Whether to enable auto-renewal. Valid values: `0` (no), `1` (yes).
     */
    public $AutoRenew;

    /**
     * @param string $TimeUnit Time unit of scale-out. Valid values:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: Month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
     * @param integer $TimeSpan Time span of scale-out, which needs to be used together with `TimeUnit`.
     * @param string $InstanceId Instance ID.
     * @param integer $PayMode Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
     * @param string $ClientToken Client token.
     * @param array $PreExecutedFileSettings Bootstrap script settings.
     * @param integer $TaskCount Number of task nodes to be added.
     * @param integer $CoreCount Number of core nodes to be added.
     * @param array $UnNecessaryNodeList Processes unnecessary for scale-out.
     * @param integer $RouterCount Number of router nodes to be added.
     * @param array $SoftDeployInfo Deployed service.
<li>`SoftDeployInfo` and `ServiceNodeInfo` are in the same group and mutually exclusive with `UnNecessaryNodeList`.</li>
<li>The combination of `SoftDeployInfo` and `ServiceNodeInfo` is recommended.</li>
     * @param array $ServiceNodeInfo Started process.
     * @param array $DisasterRecoverGroupIds List of spread placement group IDs. Only one can be specified currently.
     * @param array $Tags List of tags bound to added nodes.
     * @param string $HardwareResourceType Resource type selected for scaling. Valid values: `host` (general CVM resource) and `pod` (resource provided by TKE or EKS cluster).
     * @param PodSpec $PodSpec Specified information such as pod specification and source for scale-out with pod resources.
     * @param string $ClickHouseClusterName Server group name selected for ClickHouse cluster scale-out.
     * @param string $ClickHouseClusterType Server group type selected for ClickHouse cluster scale-out. Valid values: `new` (create a group) and `old` (select an existing group).
     * @param string $YarnNodeLabel Yarn node label specified for rule-based scale-out.
     * @param PodParameter $PodParameter Custom pod permission and parameter
     * @param integer $MasterCount Number of master nodes to be added.
When a ClickHouse cluster is scaled, this parameter does not take effect.
When a Kafka cluster is scaled, this parameter does not take effect.
When `HardwareResourceType` is `pod`, this parameter does not take effect.
     * @param string $StartServiceAfterScaleOut Whether to start the service after scale-out. `true`: Yes; `false`: No.
     * @param integer $ZoneId AZ, which defaults to the primary AZ of the cluster.
     * @param string $SubnetId Subnet, which defaults to the subnet used when the cluster is created.
     * @param string $ScaleOutServiceConfAssign Pre-defined configuration set
     * @param integer $AutoRenew Whether to enable auto-renewal. Valid values: `0` (no), `1` (yes).
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
    }
}
