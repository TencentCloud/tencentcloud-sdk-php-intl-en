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
 * CreateLaunchTemplateVersion request structure.
 *
 * @method Placement getPlacement() Obtain Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone, project, and CDH (for dedicated CVMs)
 * @method void setPlacement(Placement $Placement) Set Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone, project, and CDH (for dedicated CVMs)
 * @method string getLaunchTemplateId() Obtain Instance launch template ID. This parameter is used as a basis for creating new template versions.
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set Instance launch template ID. This parameter is used as a basis for creating new template versions.
 * @method integer getLaunchTemplateVersion() Obtain This parameter, when specified, is used to create instance launch templates. If this parameter is not specified, the default version will be used.
 * @method void setLaunchTemplateVersion(integer $LaunchTemplateVersion) Set This parameter, when specified, is used to create instance launch templates. If this parameter is not specified, the default version will be used.
 * @method string getLaunchTemplateVersionDescription() Obtain Description of instance launch template versions. This parameter can contain 2-256 characters.
 * @method void setLaunchTemplateVersionDescription(string $LaunchTemplateVersionDescription) Set Description of instance launch template versions. This parameter can contain 2-256 characters.
 * @method string getInstanceType() Obtain Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained by calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) API for the latest specification table or referring to [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><br><li>For instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. The specific format is: CDH_XCXG. For example, for creating a CDH instance with 1 CPU core and 1 GB memory, this parameter should be CDH_1C1G.</li>
 * @method void setInstanceType(string $InstanceType) Set Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained by calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) API for the latest specification table or referring to [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><br><li>For instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. The specific format is: CDH_XCXG. For example, for creating a CDH instance with 1 CPU core and 1 GB memory, this parameter should be CDH_1C1G.</li>
 * @method string getImageId() Obtain The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images (for Chinese mainland only)</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). For marketplace images, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
 * @method void setImageId(string $ImageId) Set The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images (for Chinese mainland only)</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). For marketplace images, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
 * @method SystemDisk getSystemDisk() Obtain System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method array getDataDisks() Obtain The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
 * @method void setDataDisks(array $DataDisks) Set The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If this parameter is not specified, the classic network is used by default. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be same as the number of VPC IPs, which cannot be greater than 20.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If this parameter is not specified, the classic network is used by default. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be same as the number of VPC IPs, which cannot be greater than 20.
 * @method InternetAccessible getInternetAccessible() Obtain Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method integer getInstanceCount() Obtain Number of instances to be purchased. Value range for monthly-subscribed instances: [1, 300]. Value range for pay-as-you-go instances: [1, 100]. Default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see CVM instance [Purchase Limits](https://intl.cloud.tencent.com/document/product/213/2664).
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances to be purchased. Value range for monthly-subscribed instances: [1, 300]. Value range for pay-as-you-go instances: [1, 100]. Default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see CVM instance [Purchase Limits](https://intl.cloud.tencent.com/document/product/213/2664).
 * @method string getInstanceName() Obtain Instance name.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server_{R:3}`. If you purchase only one instance, the instance will be named `server_3`; if you purchase two, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances without specifying a pattern string, the instance names will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server_`, the instance names will be `server_1` and `server_2`.</li><li>This parameter can contain up to 60 characters (including pattern strings).</li>
 * @method void setInstanceName(string $InstanceName) Set Instance name.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server_{R:3}`. If you purchase only one instance, the instance will be named `server_3`; if you purchase two, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances without specifying a pattern string, the instance names will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server_`, the instance names will be `server_1` and `server_2`.</li><li>This parameter can contain up to 60 characters (including pattern strings).</li>
 * @method LoginSettings getLoginSettings() Obtain Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
 * @method array getSecurityGroupIds() Obtain Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will be associated with default security groups.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will be associated with default security groups.
 * @method EnhancedService getEnhancedService() Obtain Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method string getHostName() Obtain Hostname of Cloud Virtual Machine.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
 * @method void setHostName(string $HostName) Set Hostname of Cloud Virtual Machine.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
 * @method ActionTimer getActionTimer() Obtain Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
 * @method void setActionTimer(ActionTimer $ActionTimer) Set Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID. You can only specify one.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID. You can only specify one.
 * @method array getTagSpecification() Obtain The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
 * @method void setTagSpecification(array $TagSpecification) Set The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
 * @method string getUserData() Obtain User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
 * @method void setUserData(string $UserData) Set User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
 * @method boolean getDryRun() Obtain Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): send a normal request and create instance(s) if all the requirements are met.
 * @method void setDryRun(boolean $DryRun) Set Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): send a normal request and create instance(s) if all the requirements are met.
 * @method string getCamRoleName() Obtain CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
 * @method string getHpcClusterId() Obtain HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
 * @method void setHpcClusterId(string $HpcClusterId) Set HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
 * @method string getInstanceChargeType() Obtain Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method boolean getDisableApiTermination() Obtain Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>TRUE: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>FALSE: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: FALSE.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>TRUE: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>FALSE: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: FALSE.
 */
class CreateLaunchTemplateVersionRequest extends AbstractModel
{
    /**
     * @var Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone, project, and CDH (for dedicated CVMs)
     */
    public $Placement;

    /**
     * @var string Instance launch template ID. This parameter is used as a basis for creating new template versions.
     */
    public $LaunchTemplateId;

    /**
     * @var integer This parameter, when specified, is used to create instance launch templates. If this parameter is not specified, the default version will be used.
     */
    public $LaunchTemplateVersion;

    /**
     * @var string Description of instance launch template versions. This parameter can contain 2-256 characters.
     */
    public $LaunchTemplateVersionDescription;

    /**
     * @var string Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained by calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) API for the latest specification table or referring to [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><br><li>For instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. The specific format is: CDH_XCXG. For example, for creating a CDH instance with 1 CPU core and 1 GB memory, this parameter should be CDH_1C1G.</li>
     */
    public $InstanceType;

    /**
     * @var string The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images (for Chinese mainland only)</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). For marketplace images, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
     */
    public $ImageId;

    /**
     * @var SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     */
    public $SystemDisk;

    /**
     * @var array The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If this parameter is not specified, the classic network is used by default. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be same as the number of VPC IPs, which cannot be greater than 20.
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     */
    public $InternetAccessible;

    /**
     * @var integer Number of instances to be purchased. Value range for monthly-subscribed instances: [1, 300]. Value range for pay-as-you-go instances: [1, 100]. Default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see CVM instance [Purchase Limits](https://intl.cloud.tencent.com/document/product/213/2664).
     */
    public $InstanceCount;

    /**
     * @var string Instance name.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server_{R:3}`. If you purchase only one instance, the instance will be named `server_3`; if you purchase two, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances without specifying a pattern string, the instance names will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server_`, the instance names will be `server_1` and `server_2`.</li><li>This parameter can contain up to 60 characters (including pattern strings).</li>
     */
    public $InstanceName;

    /**
     * @var LoginSettings Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
     */
    public $LoginSettings;

    /**
     * @var array Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will be associated with default security groups.
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
     */
    public $EnhancedService;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var string Hostname of Cloud Virtual Machine.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
     */
    public $HostName;

    /**
     * @var ActionTimer Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
     */
    public $ActionTimer;

    /**
     * @var array Placement group ID. You can only specify one.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
     */
    public $TagSpecification;

    /**
     * @var InstanceMarketOptionsRequest Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
     */
    public $InstanceMarketOptions;

    /**
     * @var string User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
     */
    public $UserData;

    /**
     * @var boolean Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): send a normal request and create instance(s) if all the requirements are met.
     */
    public $DryRun;

    /**
     * @var string CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
     */
    public $CamRoleName;

    /**
     * @var string HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
     */
    public $HpcClusterId;

    /**
     * @var string Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>TRUE: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>FALSE: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: FALSE.
     */
    public $DisableApiTermination;

    /**
     * @param Placement $Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone, project, and CDH (for dedicated CVMs)
     * @param string $LaunchTemplateId Instance launch template ID. This parameter is used as a basis for creating new template versions.
     * @param integer $LaunchTemplateVersion This parameter, when specified, is used to create instance launch templates. If this parameter is not specified, the default version will be used.
     * @param string $LaunchTemplateVersionDescription Description of instance launch template versions. This parameter can contain 2-256 characters.
     * @param string $InstanceType Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained by calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) API for the latest specification table or referring to [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><br><li>For instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. The specific format is: CDH_XCXG. For example, for creating a CDH instance with 1 CPU core and 1 GB memory, this parameter should be CDH_1C1G.</li>
     * @param string $ImageId The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images (for Chinese mainland only)</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). For marketplace images, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
     * @param SystemDisk $SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     * @param array $DataDisks The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
     * @param VirtualPrivateCloud $VirtualPrivateCloud Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If this parameter is not specified, the classic network is used by default. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be same as the number of VPC IPs, which cannot be greater than 20.
     * @param InternetAccessible $InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     * @param integer $InstanceCount Number of instances to be purchased. Value range for monthly-subscribed instances: [1, 300]. Value range for pay-as-you-go instances: [1, 100]. Default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see CVM instance [Purchase Limits](https://intl.cloud.tencent.com/document/product/213/2664).
     * @param string $InstanceName Instance name.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server_{R:3}`. If you purchase only one instance, the instance will be named `server_3`; if you purchase two, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances without specifying a pattern string, the instance names will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server_`, the instance names will be `server_1` and `server_2`.</li><li>This parameter can contain up to 60 characters (including pattern strings).</li>
     * @param LoginSettings $LoginSettings Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
     * @param array $SecurityGroupIds Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will be associated with default security groups.
     * @param EnhancedService $EnhancedService Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param string $HostName Hostname of Cloud Virtual Machine.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
     * @param ActionTimer $ActionTimer Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
     * @param array $DisasterRecoverGroupIds Placement group ID. You can only specify one.
     * @param array $TagSpecification The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
     * @param string $UserData User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
     * @param boolean $DryRun Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): send a normal request and create instance(s) if all the requirements are met.
     * @param string $CamRoleName CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
     * @param string $HpcClusterId HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
     * @param string $InstanceChargeType Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     * @param boolean $DisableApiTermination Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>TRUE: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>FALSE: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: FALSE.
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

        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $this->LaunchTemplateVersion = $param["LaunchTemplateVersion"];
        }

        if (array_key_exists("LaunchTemplateVersionDescription",$param) and $param["LaunchTemplateVersionDescription"] !== null) {
            $this->LaunchTemplateVersionDescription = $param["LaunchTemplateVersionDescription"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
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

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ActionTimer",$param) and $param["ActionTimer"] !== null) {
            $this->ActionTimer = new ActionTimer();
            $this->ActionTimer->deserialize($param["ActionTimer"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }
    }
}
