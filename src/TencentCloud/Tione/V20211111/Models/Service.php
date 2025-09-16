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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Online service description.
 *
 * @method string getServiceGroupId() Obtain Service group ID.
 * @method void setServiceGroupId(string $ServiceGroupId) Set Service group ID.
 * @method string getServiceId() Obtain Service ID.
 * @method void setServiceId(string $ServiceId) Set Service ID.
 * @method string getServiceGroupName() Obtain Service group name.
 * @method void setServiceGroupName(string $ServiceGroupName) Set Service group name.
 * @method string getServiceDescription() Obtain Service description.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDescription(string $ServiceDescription) Set Service description.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ServiceInfo getServiceInfo() Obtain Service details.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceInfo(ServiceInfo $ServiceInfo) Set Service details.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Cluster ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Namespace.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Billing type.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Billing type.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupId() Obtain Resource group ID for yearly/monthly subscription services. The value is null for pay-as-you-go services.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupId(string $ResourceGroupId) Set Resource group ID for yearly/monthly subscription services. The value is null for pay-as-you-go services.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupName() Obtain Resource group name corresponding to the yearly/monthly subscription service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name corresponding to the yearly/monthly subscription service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIngressName() Obtain Name of the ingress where the service is located.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIngressName(string $IngressName) Set Name of the ingress where the service is located.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedBy() Obtain Creator.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedBy(string $CreatedBy) Set Creator.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain Root account.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set Root account.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubUin() Obtain Sub-account.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubUin(string $SubUin) Set Sub-account.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain app_id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set app_id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessStatus() Obtain Operational status of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessStatus(string $BusinessStatus) Set Operational status of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ServiceLimit getServiceLimit() Obtain Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) Set Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduledAction getScheduledAction() Obtain Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) Set Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateFailedReason() Obtain Cause for service creation failure. The default value of this field is CREATE_SUCCEED upon successful creation.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateFailedReason(string $CreateFailedReason) Set Cause for service creation failure. The default value of this field is CREATE_SUCCEED upon successful creation.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingInfo() Obtain Billing information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingInfo(string $BillingInfo) Set Billing information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Model weight.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Model weight.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateSource() Obtain Creation source of the service.AUTO_ML: comes from one-click release of automatic learning.DEFAULT: other sources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateSource(string $CreateSource) Set Creation source of the service.AUTO_ML: comes from one-click release of automatic learning.DEFAULT: other sources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Version number.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version number.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestVersion() Obtain The latest version number of services under a service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestVersion(string $LatestVersion) Set The latest version number of services under a service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupSWType() Obtain Resource group category. Valid values: NORMAL (hosting) and SW (half-hosting).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupSWType(string $ResourceGroupSWType) Set Resource group category. Valid values: NORMAL (hosting) and SW (half-hosting).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArchiveStatus() Obtain Archiving status of the service. Valid values: Waiting (pending archiving) and Archived (archived).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArchiveStatus(string $ArchiveStatus) Set Archiving status of the service. Valid values: Waiting (pending archiving) and Archived (archived).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeployType() Obtain Deployment type of the service. Valid values: STANDARD (standard deployment) and DIST (multi-machine distributed deployment). The default value is STANDARD.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeployType(string $DeployType) Set Deployment type of the service. Valid values: STANDARD (standard deployment) and DIST (multi-machine distributed deployment). The default value is STANDARD.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstancePerReplicas() Obtain Number of instances per replica. This parameter is valid only when the deployment type is DIST. Default value: 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstancePerReplicas(string $InstancePerReplicas) Set Number of instances per replica. This parameter is valid only when the deployment type is DIST. Default value: 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMonitorSource() Obtain Source for monitoring queries.Enumeration value. May differ from CreateSource in certain scenarios. This field is designed to be compatible.
 * @method void setMonitorSource(string $MonitorSource) Set Source for monitoring queries.Enumeration value. May differ from CreateSource in certain scenarios. This field is designed to be compatible.
 * @method string getSubUinName() Obtain Sub-account name of the service creator.
 * @method void setSubUinName(string $SubUinName) Set Sub-account name of the service creator.
 * @method SchedulingPolicy getSchedulingPolicy() Obtain Scheduling policy of the service.
 * @method void setSchedulingPolicy(SchedulingPolicy $SchedulingPolicy) Set Scheduling policy of the service.
 * @method array getExternalResourceGroups() Obtain External resource group information, indicating which resources are borrowed from resource groups.
 * @method void setExternalResourceGroups(array $ExternalResourceGroups) Set External resource group information, indicating which resources are borrowed from resource groups.
 */
class Service extends AbstractModel
{
    /**
     * @var string Service group ID.
     */
    public $ServiceGroupId;

    /**
     * @var string Service ID.
     */
    public $ServiceId;

    /**
     * @var string Service group name.
     */
    public $ServiceGroupName;

    /**
     * @var string Service description.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDescription;

    /**
     * @var ServiceInfo Service details.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceInfo;

    /**
     * @var string Cluster ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Region.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Namespace.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Billing type.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var string Resource group ID for yearly/monthly subscription services. The value is null for pay-as-you-go services.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupId;

    /**
     * @var string Resource group name corresponding to the yearly/monthly subscription service.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupName;

    /**
     * @var array Tag of the service.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Name of the ingress where the service is located.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IngressName;

    /**
     * @var string Creator.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedBy;

    /**
     * @var string Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Root account.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Sub-account.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubUin;

    /**
     * @var integer app_id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Operational status of the service.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessStatus;

    /**
     * @var ServiceLimit Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ServiceLimit;

    /**
     * @var ScheduledAction Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ScheduledAction;

    /**
     * @var string Cause for service creation failure. The default value of this field is CREATE_SUCCEED upon successful creation.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateFailedReason;

    /**
     * @var string Service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Billing information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingInfo;

    /**
     * @var integer Model weight.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string Creation source of the service.AUTO_ML: comes from one-click release of automatic learning.DEFAULT: other sources.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateSource;

    /**
     * @var string Version number.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string The latest version number of services under a service group.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestVersion;

    /**
     * @var string Resource group category. Valid values: NORMAL (hosting) and SW (half-hosting).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupSWType;

    /**
     * @var string Archiving status of the service. Valid values: Waiting (pending archiving) and Archived (archived).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArchiveStatus;

    /**
     * @var string Deployment type of the service. Valid values: STANDARD (standard deployment) and DIST (multi-machine distributed deployment). The default value is STANDARD.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeployType;

    /**
     * @var string Number of instances per replica. This parameter is valid only when the deployment type is DIST. Default value: 1.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstancePerReplicas;

    /**
     * @var string Source for monitoring queries.Enumeration value. May differ from CreateSource in certain scenarios. This field is designed to be compatible.
     */
    public $MonitorSource;

    /**
     * @var string Sub-account name of the service creator.
     */
    public $SubUinName;

    /**
     * @var SchedulingPolicy Scheduling policy of the service.
     */
    public $SchedulingPolicy;

    /**
     * @var array External resource group information, indicating which resources are borrowed from resource groups.
     */
    public $ExternalResourceGroups;

    /**
     * @param string $ServiceGroupId Service group ID.
     * @param string $ServiceId Service ID.
     * @param string $ServiceGroupName Service group name.
     * @param string $ServiceDescription Service description.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ServiceInfo $ServiceInfo Service details.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Cluster ID.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Namespace.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Billing type.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupId Resource group ID for yearly/monthly subscription services. The value is null for pay-as-you-go services.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupName Resource group name corresponding to the yearly/monthly subscription service.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag of the service.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IngressName Name of the ingress where the service is located.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedBy Creator.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin Root account.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubUin Sub-account.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppId app_id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessStatus Operational status of the service.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ServiceLimit $ServiceLimit Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduledAction $ScheduledAction Deprecated. See the corresponding field in ServiceInfo.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateFailedReason Cause for service creation failure. The default value of this field is CREATE_SUCCEED upon successful creation.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillingInfo Billing information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Model weight.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateSource Creation source of the service.AUTO_ML: comes from one-click release of automatic learning.DEFAULT: other sources.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Version number.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestVersion The latest version number of services under a service group.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupSWType Resource group category. Valid values: NORMAL (hosting) and SW (half-hosting).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ArchiveStatus Archiving status of the service. Valid values: Waiting (pending archiving) and Archived (archived).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeployType Deployment type of the service. Valid values: STANDARD (standard deployment) and DIST (multi-machine distributed deployment). The default value is STANDARD.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstancePerReplicas Number of instances per replica. This parameter is valid only when the deployment type is DIST. Default value: 1.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MonitorSource Source for monitoring queries.Enumeration value. May differ from CreateSource in certain scenarios. This field is designed to be compatible.
     * @param string $SubUinName Sub-account name of the service creator.
     * @param SchedulingPolicy $SchedulingPolicy Scheduling policy of the service.
     * @param array $ExternalResourceGroups External resource group information, indicating which resources are borrowed from resource groups.
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceGroupName",$param) and $param["ServiceGroupName"] !== null) {
            $this->ServiceGroupName = $param["ServiceGroupName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("ServiceInfo",$param) and $param["ServiceInfo"] !== null) {
            $this->ServiceInfo = new ServiceInfo();
            $this->ServiceInfo->deserialize($param["ServiceInfo"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BusinessStatus",$param) and $param["BusinessStatus"] !== null) {
            $this->BusinessStatus = $param["BusinessStatus"];
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("CreateFailedReason",$param) and $param["CreateFailedReason"] !== null) {
            $this->CreateFailedReason = $param["CreateFailedReason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("ResourceGroupSWType",$param) and $param["ResourceGroupSWType"] !== null) {
            $this->ResourceGroupSWType = $param["ResourceGroupSWType"];
        }

        if (array_key_exists("ArchiveStatus",$param) and $param["ArchiveStatus"] !== null) {
            $this->ArchiveStatus = $param["ArchiveStatus"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("InstancePerReplicas",$param) and $param["InstancePerReplicas"] !== null) {
            $this->InstancePerReplicas = $param["InstancePerReplicas"];
        }

        if (array_key_exists("MonitorSource",$param) and $param["MonitorSource"] !== null) {
            $this->MonitorSource = $param["MonitorSource"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("SchedulingPolicy",$param) and $param["SchedulingPolicy"] !== null) {
            $this->SchedulingPolicy = new SchedulingPolicy();
            $this->SchedulingPolicy->deserialize($param["SchedulingPolicy"]);
        }

        if (array_key_exists("ExternalResourceGroups",$param) and $param["ExternalResourceGroups"] !== null) {
            $this->ExternalResourceGroups = [];
            foreach ($param["ExternalResourceGroups"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ExternalResourceGroups, $obj);
            }
        }
    }
}
