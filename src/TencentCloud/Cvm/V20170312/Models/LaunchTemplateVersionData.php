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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of instance launch template versions
 *
 * @method Placement getPlacement() Obtain Location of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPlacement(Placement $Placement) Set Location of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Instance model.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance model.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values: <br><li>`POSTPAID_BY_HOUR`: postpaid for pay-as-you-go instances <br><li>`CDHPAID`: billed for CDH instances, not the CVMs running on the CDHs.<br>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values: <br><li>`POSTPAID_BY_HOUR`: postpaid for pay-as-you-go instances <br><li>`CDHPAID`: billed for CDH instances, not the CVMs running on the CDHs.<br>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method SystemDisk getSystemDisk() Obtain Instance system disk information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Instance system disk information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getDataDisks() Obtain Instance data disk information. This parameter only covers the data disks purchased together with the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDataDisks(array $DataDisks) Set Instance data disk information. This parameter only covers the data disks purchased together with the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method InternetAccessible getInternetAccessible() Obtain Instance bandwidth information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Instance bandwidth information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain Information of the VPC where the instance resides.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set Information of the VPC where the instance resides.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getImageId() Obtain `ID` of the image used to create the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set `ID` of the image used to create the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getSecurityGroupIds() Obtain Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method LoginSettings getLoginSettings() Obtain Login settings of the instance. Currently, only the key associated with the instance is returned.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Login settings of the instance. Currently, only the key associated with the instance is returned.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCamRoleName() Obtain CAM role name.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getHpcClusterId() Obtain HPC cluster `ID`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHpcClusterId(string $HpcClusterId) Set HPC cluster `ID`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getInstanceCount() Obtain Number of instances purchased.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances purchased.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method EnhancedService getEnhancedService() Obtain Enhanced service.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced service.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getUserData() Obtain User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUserData(string $UserData) Set User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID. You can only specify one.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID. You can only specify one.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method ActionTimer getActionTimer() Obtain Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setActionTimer(ActionTimer $ActionTimer) Set Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Hostname of a CVM.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Hostname of a CVM.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getClientToken() Obtain A string used to ensure the idempotency of the request.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClientToken(string $ClientToken) Set A string used to ensure the idempotency of the request.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode. This parameter indicates relevant parameter settings for monthly-subscribed instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode. This parameter indicates relevant parameter settings for monthly-subscribed instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTagSpecification() Obtain List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagSpecification(array $TagSpecification) Set List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDisableApiTermination() Obtain Whether to enable termination protection. Valid values:

TRUE: Termination protection is enabled.
FALSE: Termination protection is disabled.

Default value: `FALSE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Whether to enable termination protection. Valid values:

TRUE: Termination protection is enabled.
FALSE: Termination protection is disabled.

Default value: `FALSE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class LaunchTemplateVersionData extends AbstractModel
{
    /**
     * @var Placement Location of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Placement;

    /**
     * @var string Instance model.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Instance name.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance billing mode. Valid values: <br><li>`POSTPAID_BY_HOUR`: postpaid for pay-as-you-go instances <br><li>`CDHPAID`: billed for CDH instances, not the CVMs running on the CDHs.<br>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk Instance system disk information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SystemDisk;

    /**
     * @var array Instance data disk information. This parameter only covers the data disks purchased together with the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DataDisks;

    /**
     * @var InternetAccessible Instance bandwidth information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud Information of the VPC where the instance resides.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $VirtualPrivateCloud;

    /**
     * @var string `ID` of the image used to create the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var array Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings Login settings of the instance. Currently, only the key associated with the instance is returned.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LoginSettings;

    /**
     * @var string CAM role name.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CamRoleName;

    /**
     * @var string HPC cluster `ID`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HpcClusterId;

    /**
     * @var integer Number of instances purchased.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceCount;

    /**
     * @var EnhancedService Enhanced service.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnhancedService;

    /**
     * @var string User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UserData;

    /**
     * @var array Placement group ID. You can only specify one.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var ActionTimer Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ActionTimer;

    /**
     * @var InstanceMarketOptionsRequest Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceMarketOptions;

    /**
     * @var string Hostname of a CVM.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string A string used to ensure the idempotency of the request.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid Prepaid mode. This parameter indicates relevant parameter settings for monthly-subscribed instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceChargePrepaid;

    /**
     * @var array List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagSpecification;

    /**
     * @var boolean Whether to enable termination protection. Valid values:

TRUE: Termination protection is enabled.
FALSE: Termination protection is disabled.

Default value: `FALSE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DisableApiTermination;

    /**
     * @param Placement $Placement Location of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $InstanceType Instance model.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $InstanceChargeType Instance billing mode. Valid values: <br><li>`POSTPAID_BY_HOUR`: postpaid for pay-as-you-go instances <br><li>`CDHPAID`: billed for CDH instances, not the CVMs running on the CDHs.<br>
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param SystemDisk $SystemDisk Instance system disk information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $DataDisks Instance data disk information. This parameter only covers the data disks purchased together with the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param InternetAccessible $InternetAccessible Instance bandwidth information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param VirtualPrivateCloud $VirtualPrivateCloud Information of the VPC where the instance resides.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ImageId `ID` of the image used to create the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $SecurityGroupIds Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param LoginSettings $LoginSettings Login settings of the instance. Currently, only the key associated with the instance is returned.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CamRoleName CAM role name.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $HpcClusterId HPC cluster `ID`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $InstanceCount Number of instances purchased.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param EnhancedService $EnhancedService Enhanced service.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $UserData User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $DisasterRecoverGroupIds Placement group ID. You can only specify one.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param ActionTimer $ActionTimer Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $HostName Hostname of a CVM.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClientToken A string used to ensure the idempotency of the request.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode. This parameter indicates relevant parameter settings for monthly-subscribed instances.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TagSpecification List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $DisableApiTermination Whether to enable termination protection. Valid values:

TRUE: Termination protection is enabled.
FALSE: Termination protection is disabled.

Default value: `FALSE`.
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("ActionTimer",$param) and $param["ActionTimer"] !== null) {
            $this->ActionTimer = new ActionTimer();
            $this->ActionTimer->deserialize($param["ActionTimer"]);
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }
    }
}
