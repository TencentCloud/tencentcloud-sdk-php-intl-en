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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeLaunchConfiguration request structure.
 *
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID.
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID.
 * @method string getImageId() Obtain [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
 * @method void setImageId(string $ImageId) Set [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
 * @method array getInstanceTypes() Obtain List of instance models. Different instance models specify different resource specifications. Up to 5 instance models can be supported.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance models. Different instance models specify different resource specifications. Up to 5 instance models can be supported.
 * @method string getLaunchConfigurationName() Obtain Display name of the launch configuration, which can contain letters, digits, underscores and hyphens (-), and dots. Up to of 60 bytes allowed..
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set Display name of the launch configuration, which can contain letters, digits, underscores and hyphens (-), and dots. Up to of 60 bytes allowed..
 * @method array getDataDisks() Obtain Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
 * @method void setDataDisks(array $DataDisks) Set Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
 * @method string getInstanceChargeType() Obtain Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
 * @method string getInstanceTypesCheckPolicy() Obtain Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) Set Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method InternetAccessible getInternetAccessible() Obtain Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method LoginSettings getLoginSettings() Obtain This parameter is now invalid and should not be used. Upgrading the launch configuration API does not allow modification or overwriting of the LoginSettings parameter. LoginSettings will not change after upgrade.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set This parameter is now invalid and should not be used. Upgrading the launch configuration API does not allow modification or overwriting of the LoginSettings parameter. LoginSettings will not change after upgrade.
 * @method integer getProjectId() Obtain Project ID of the instance. Leave it blank as the default.
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance. Leave it blank as the default.
 * @method array getSecurityGroupIds() Obtain The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). If this parameter is not specified, no security group will be bound by default.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). If this parameter is not specified, no security group will be bound by default.
 * @method SystemDisk getSystemDisk() Obtain System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method string getUserData() Obtain Base64-encoded custom data of up to 16 KB.
 * @method void setUserData(string $UserData) Set Base64-encoded custom data of up to 16 KB.
 * @method array getInstanceTags() Obtain List of tags. This parameter is used to bind up to 10 tags to newly added instances.
 * @method void setInstanceTags(array $InstanceTags) Set List of tags. This parameter is used to bind up to 10 tags to newly added instances.
 * @method string getCamRoleName() Obtain CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
 * @method HostNameSettings getHostNameSettings() Obtain CVM hostname settings.
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set CVM hostname settings.
 * @method InstanceNameSettings getInstanceNameSettings() Obtain Settings of CVM instance names
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set Settings of CVM instance names
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method string getDiskTypePolicy() Obtain Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
 * @method IPv6InternetAccessible getIPv6InternetAccessible() Obtain IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) Set IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
 */
class UpgradeLaunchConfigurationRequest extends AbstractModel
{
    /**
     * @var string Launch configuration ID.
     */
    public $LaunchConfigurationId;

    /**
     * @var string [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
     */
    public $ImageId;

    /**
     * @var array List of instance models. Different instance models specify different resource specifications. Up to 5 instance models can be supported.
     */
    public $InstanceTypes;

    /**
     * @var string Display name of the launch configuration, which can contain letters, digits, underscores and hyphens (-), and dots. Up to of 60 bytes allowed..
     */
    public $LaunchConfigurationName;

    /**
     * @var array Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
     */
    public $DataDisks;

    /**
     * @var EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
     */
    public $EnhancedService;

    /**
     * @var string Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
     */
    public $InstanceMarketOptions;

    /**
     * @var string Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     */
    public $InternetAccessible;

    /**
     * @var LoginSettings This parameter is now invalid and should not be used. Upgrading the launch configuration API does not allow modification or overwriting of the LoginSettings parameter. LoginSettings will not change after upgrade.
     */
    public $LoginSettings;

    /**
     * @var integer Project ID of the instance. Leave it blank as the default.
     */
    public $ProjectId;

    /**
     * @var array The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). If this parameter is not specified, no security group will be bound by default.
     */
    public $SecurityGroupIds;

    /**
     * @var SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     */
    public $SystemDisk;

    /**
     * @var string Base64-encoded custom data of up to 16 KB.
     */
    public $UserData;

    /**
     * @var array List of tags. This parameter is used to bind up to 10 tags to newly added instances.
     */
    public $InstanceTags;

    /**
     * @var string CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
     */
    public $CamRoleName;

    /**
     * @var HostNameSettings CVM hostname settings.
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings Settings of CVM instance names
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     */
    public $InstanceChargePrepaid;

    /**
     * @var string Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
     */
    public $DiskTypePolicy;

    /**
     * @var IPv6InternetAccessible IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
     */
    public $IPv6InternetAccessible;

    /**
     * @param string $LaunchConfigurationId Launch configuration ID.
     * @param string $ImageId [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
     * @param array $InstanceTypes List of instance models. Different instance models specify different resource specifications. Up to 5 instance models can be supported.
     * @param string $LaunchConfigurationName Display name of the launch configuration, which can contain letters, digits, underscores and hyphens (-), and dots. Up to of 60 bytes allowed..
     * @param array $DataDisks Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
     * @param EnhancedService $EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
     * @param string $InstanceChargeType Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
     * @param string $InstanceTypesCheckPolicy Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     * @param InternetAccessible $InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     * @param LoginSettings $LoginSettings This parameter is now invalid and should not be used. Upgrading the launch configuration API does not allow modification or overwriting of the LoginSettings parameter. LoginSettings will not change after upgrade.
     * @param integer $ProjectId Project ID of the instance. Leave it blank as the default.
     * @param array $SecurityGroupIds The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). If this parameter is not specified, no security group will be bound by default.
     * @param SystemDisk $SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     * @param string $UserData Base64-encoded custom data of up to 16 KB.
     * @param array $InstanceTags List of tags. This parameter is used to bind up to 10 tags to newly added instances.
     * @param string $CamRoleName CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
     * @param HostNameSettings $HostNameSettings CVM hostname settings.
     * @param InstanceNameSettings $InstanceNameSettings Settings of CVM instance names
     * @param InstanceChargePrepaid $InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     * @param string $DiskTypePolicy Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
     * @param IPv6InternetAccessible $IPv6InternetAccessible IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypesCheckPolicy",$param) and $param["InstanceTypesCheckPolicy"] !== null) {
            $this->InstanceTypesCheckPolicy = $param["InstanceTypesCheckPolicy"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
        }

        if (array_key_exists("IPv6InternetAccessible",$param) and $param["IPv6InternetAccessible"] !== null) {
            $this->IPv6InternetAccessible = new IPv6InternetAccessible();
            $this->IPv6InternetAccessible->deserialize($param["IPv6InternetAccessible"]);
        }
    }
}
