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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLaunchConfigurationName() 获取Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
 * @method string getImageId() 获取Valid [image](https://cloud.tencent.com/document/product/213/4940) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://cloud.tencent.com/document/api/213/15715).</li>
 * @method void setImageId(string $ImageId) 设置Valid [image](https://cloud.tencent.com/document/product/213/4940) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://cloud.tencent.com/document/api/213/15715).</li>
 * @method integer getProjectId() 获取ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the returned values of [DescribeProject](https://cloud.tencent.com/document/api/378/4400). If this is left empty, default project is used.
 * @method void setProjectId(integer $ProjectId) 设置ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the returned values of [DescribeProject](https://cloud.tencent.com/document/api/378/4400). If this is left empty, default project is used.
 * @method string getInstanceType() 获取Instance model. Different instance models specify different resource specifications. The specific value can be obtained by calling the [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) API to get the latest specification table or referring to the descriptions in [Instance Types](https://cloud.tencent.com/document/product/213/11518).
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
 * @method void setInstanceType(string $InstanceType) 设置Instance model. Different instance models specify different resource specifications. The specific value can be obtained by calling the [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) API to get the latest specification table or referring to the descriptions in [Instance Types](https://cloud.tencent.com/document/product/213/11518).
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
 * @method SystemDisk getSystemDisk() 获取System disk configuration of the instance. If this parameter is not specified, the default value will be assigned to it.
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置System disk configuration of the instance. If this parameter is not specified, the default value will be assigned to it.
 * @method array getDataDisks() 获取Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
 * @method void setDataDisks(array $DataDisks) 设置Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
 * @method InternetAccessible getInternetAccessible() 获取Configuration information of public network bandwidth. If this parameter is not specified, the default public network bandwidth is 0 Mbps.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置Configuration information of public network bandwidth. If this parameter is not specified, the default public network bandwidth is 0 Mbps.
 * @method LoginSettings getLoginSettings() 获取Login settings of the instance. This parameter is used to set the login password and key for the instance, or to keep the original login settings for the image. By default, a random password is generated and sent to the user via the internal message.
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置Login settings of the instance. This parameter is used to set the login password and key for the instance, or to keep the original login settings for the image. By default, a random password is generated and sent to the user via the internal message.
 * @method array getSecurityGroupIds() 获取The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808). If this parameter is not specified, no security group will be bound by default.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808). If this parameter is not specified, no security group will be bound by default.
 * @method EnhancedService getEnhancedService() 获取Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
 * @method string getUserData() 获取Base64-encoded custom data of up to 16 KB.
 * @method void setUserData(string $UserData) 设置Base64-encoded custom data of up to 16 KB.
 * @method string getInstanceChargeType() 获取Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
 * @method array getInstanceTypes() 获取List of instance models. Different instance models specify different resource specifications. Up to 10 instance models can be supported.
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
 * @method void setInstanceTypes(array $InstanceTypes) 设置List of instance models. Different instance models specify different resource specifications. Up to 10 instance models can be supported.
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
 * @method string getInstanceTypesCheckPolicy() 获取Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) 设置Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method array getInstanceTags() 获取List of tags. This parameter is used to bind up to 10 tags to newly added instances.
 * @method void setInstanceTags(array $InstanceTags) 设置List of tags. This parameter is used to bind up to 10 tags to newly added instances.
 * @method string getCamRoleName() 获取CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
 * @method void setCamRoleName(string $CamRoleName) 设置CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
 * @method HostNameSettings getHostNameSettings() 获取CVM HostName settings.
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) 设置CVM HostName settings.
 */

/**
 *CreateLaunchConfiguration request structure.
 */
class CreateLaunchConfigurationRequest extends AbstractModel
{
    /**
     * @var string Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
     */
    public $LaunchConfigurationName;

    /**
     * @var string Valid [image](https://cloud.tencent.com/document/product/213/4940) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://cloud.tencent.com/document/api/213/15715).</li>
     */
    public $ImageId;

    /**
     * @var integer ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the returned values of [DescribeProject](https://cloud.tencent.com/document/api/378/4400). If this is left empty, default project is used.
     */
    public $ProjectId;

    /**
     * @var string Instance model. Different instance models specify different resource specifications. The specific value can be obtained by calling the [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) API to get the latest specification table or referring to the descriptions in [Instance Types](https://cloud.tencent.com/document/product/213/11518).
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
     */
    public $InstanceType;

    /**
     * @var SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be assigned to it.
     */
    public $SystemDisk;

    /**
     * @var array Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
     */
    public $DataDisks;

    /**
     * @var InternetAccessible Configuration information of public network bandwidth. If this parameter is not specified, the default public network bandwidth is 0 Mbps.
     */
    public $InternetAccessible;

    /**
     * @var LoginSettings Login settings of the instance. This parameter is used to set the login password and key for the instance, or to keep the original login settings for the image. By default, a random password is generated and sent to the user via the internal message.
     */
    public $LoginSettings;

    /**
     * @var array The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808). If this parameter is not specified, no security group will be bound by default.
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
     */
    public $EnhancedService;

    /**
     * @var string Base64-encoded custom data of up to 16 KB.
     */
    public $UserData;

    /**
     * @var string Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
     */
    public $InstanceMarketOptions;

    /**
     * @var array List of instance models. Different instance models specify different resource specifications. Up to 10 instance models can be supported.
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
     */
    public $InstanceTypes;

    /**
     * @var string Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var array List of tags. This parameter is used to bind up to 10 tags to newly added instances.
     */
    public $InstanceTags;

    /**
     * @var string CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
     */
    public $CamRoleName;

    /**
     * @var HostNameSettings CVM HostName settings.
     */
    public $HostNameSettings;
    /**
     * @param string $LaunchConfigurationName Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
     * @param string $ImageId Valid [image](https://cloud.tencent.com/document/product/213/4940) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://cloud.tencent.com/document/api/213/15715).</li>
     * @param integer $ProjectId ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the returned values of [DescribeProject](https://cloud.tencent.com/document/api/378/4400). If this is left empty, default project is used.
     * @param string $InstanceType Instance model. Different instance models specify different resource specifications. The specific value can be obtained by calling the [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) API to get the latest specification table or referring to the descriptions in [Instance Types](https://cloud.tencent.com/document/product/213/11518).
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
     * @param SystemDisk $SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be assigned to it.
     * @param array $DataDisks Information of the instance's data disk configuration. If this parameter is not specified, no data disk is purchased by default. Up to 11 data disks can be supported.
     * @param InternetAccessible $InternetAccessible Configuration information of public network bandwidth. If this parameter is not specified, the default public network bandwidth is 0 Mbps.
     * @param LoginSettings $LoginSettings Login settings of the instance. This parameter is used to set the login password and key for the instance, or to keep the original login settings for the image. By default, a random password is generated and sent to the user via the internal message.
     * @param array $SecurityGroupIds The security group to which the instance belongs. This parameter can be obtained by calling the `SecurityGroupId` field in the returned value of [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808). If this parameter is not specified, no security group will be bound by default.
     * @param EnhancedService $EnhancedService Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
     * @param string $UserData Base64-encoded custom data of up to 16 KB.
     * @param string $InstanceChargeType Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
     * @param array $InstanceTypes List of instance models. Different instance models specify different resource specifications. Up to 10 instance models can be supported.
`InstanceType` and `InstanceTypes` are mutually exclusive, and one and only one of them must be entered.
     * @param string $InstanceTypesCheckPolicy Instance type verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     * @param array $InstanceTags List of tags. This parameter is used to bind up to 10 tags to newly added instances.
     * @param string $CamRoleName CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
     * @param HostNameSettings $HostNameSettings CVM HostName settings.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("InstanceTypesCheckPolicy",$param) and $param["InstanceTypesCheckPolicy"] !== null) {
            $this->InstanceTypesCheckPolicy = $param["InstanceTypesCheckPolicy"];
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
    }
}
