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
 * CreateLaunchTemplate request structure.
 *
 * @method string getLaunchTemplateName() Obtain Name of an instance launch template. It contains 2 to 128 English or Chinese characters.
 * @method void setLaunchTemplateName(string $LaunchTemplateName) Set Name of an instance launch template. It contains 2 to 128 English or Chinese characters.
 * @method Placement getPlacement() Obtain Location of the instance. You can specify attributes such as availability zone, project, and host (specified when creating a instance on the CDH) to which the instance belongs through this parameter.
 * @method void setPlacement(Placement $Placement) Set Location of the instance. You can specify attributes such as availability zone, project, and host (specified when creating a instance on the CDH) to which the instance belongs through this parameter.
 * @method string getImageId() Obtain Specify an effective [mirror](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. there are four image types: <li>PUBLIC image</li> <li>custom image</li> <li>shared image</li> <li>service market image</li>  you can obtain available mirror ids in the following ways: <li>the mirror ids of `PUBLIC image`, `custom image` and `shared image` can be queried by logging in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_image); the mirror ids of `service market image` can be queried through the [cloud market](https://market.cloud.tencent.com/list).</li> <li>call the api [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), input InstanceType to obtain the list of images supported by the current model, and take the `ImageId` field from the return information.</li>.
 * @method void setImageId(string $ImageId) Set Specify an effective [mirror](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. there are four image types: <li>PUBLIC image</li> <li>custom image</li> <li>shared image</li> <li>service market image</li>  you can obtain available mirror ids in the following ways: <li>the mirror ids of `PUBLIC image`, `custom image` and `shared image` can be queried by logging in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_image); the mirror ids of `service market image` can be queried through the [cloud market](https://market.cloud.tencent.com/list).</li> <li>call the api [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), input InstanceType to obtain the list of images supported by the current model, and take the `ImageId` field from the return information.</li>.
 * @method string getLaunchTemplateVersionDescription() Obtain Version description of an instance launch template. It contains 2 to 256 English or Chinese characters.
 * @method void setLaunchTemplateVersionDescription(string $LaunchTemplateVersionDescription) Set Version description of an instance launch template. It contains 2 to 256 English or Chinese characters.
 * @method string getInstanceType() Obtain Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained BY calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) api to get the latest specification table or referring to the [instance specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1) description. if this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><li>for instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. the specific format is: CDH_XCXG. for example, for creating a CDH instance with 1 CPU core and 1 gb memory, this parameter should be CDH_1C1G.</li>.
 * @method void setInstanceType(string $InstanceType) Set Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained BY calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) api to get the latest specification table or referring to the [instance specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1) description. if this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><li>for instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. the specific format is: CDH_XCXG. for example, for creating a CDH instance with 1 CPU core and 1 gb memory, this parameter should be CDH_1C1G.</li>.
 * @method SystemDisk getSystemDisk() Obtain Instance system disk configuration information. If this parameter is not specified, it will be assigned based on the system default values.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Instance system disk configuration information. If this parameter is not specified, it will be assigned based on the system default values.
 * @method array getDataDisks() Obtain Instance data disk configuration information. if not specified, no data disks are purchased by default. support specifying 21 data disks at the time of purchase, among which a maximum of 1 LOCAL_BASIC data disk or LOCAL_SSD data disk can be included, and a maximum of 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks or CLOUD_SSD data disks can be included.
 * @method void setDataDisks(array $DataDisks) Set Instance data disk configuration information. if not specified, no data disks are purchased by default. support specifying 21 data disks at the time of purchase, among which a maximum of 1 LOCAL_BASIC data disk or LOCAL_SSD data disk can be included, and a maximum of 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks or CLOUD_SSD data disks can be included.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain VPC-related information configuration. You can specify information such as VPC ID and subnet ID through this parameter. If this parameter is not specified, use the basic network by default. If a VPC IP is specified in this parameter, it indicates the primary network interface card IP of each instance. In addition, the number of the InstanceCount parameter should be consistent with the number of the VPC IP and should not exceed 20.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set VPC-related information configuration. You can specify information such as VPC ID and subnet ID through this parameter. If this parameter is not specified, use the basic network by default. If a VPC IP is specified in this parameter, it indicates the primary network interface card IP of each instance. In addition, the number of the InstanceCount parameter should be consistent with the number of the VPC IP and should not exceed 20.
 * @method InternetAccessible getInternetAccessible() Obtain Public bandwidth-related settings. If this parameter is not specified, the public bandwidth is 0 Mbps by default.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Public bandwidth-related settings. If this parameter is not specified, the public bandwidth is 0 Mbps by default.
 * @method integer getInstanceCount() Obtain Number of instances to purchase. value range for monthly subscription instances: [1, 300]. value range for pay-as-you-go instances: [1, 100]. default value: 1. the number of instances to purchase must not exceed the remaining user quota. for specific quota limitations, see [CVM instance purchase limitations](https://intl.cloud.tencent.com/document/product/213/2664?from_cn_redirect=1).
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances to purchase. value range for monthly subscription instances: [1, 300]. value range for pay-as-you-go instances: [1, 100]. default value: 1. the number of instances to purchase must not exceed the remaining user quota. for specific quota limitations, see [CVM instance purchase limitations](https://intl.cloud.tencent.com/document/product/213/2664?from_cn_redirect=1).
 * @method string getInstanceName() Obtain Instance display name. <li>if the instance display name is not specified, it will display by default as 'unnamed'.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it indicates generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}` will result in instance display names as `server_3` when purchasing 1 instance; when purchasing 2 instances, the instance display names will be `server_3` and `server_4` respectively. it supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances, if no pattern string is specified, a suffix `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, for `server_`, when purchasing 2 instances, the instance display names will be `server_1` and `server_2` respectively.</li> <li>it supports up to 128 characters (including pattern strings).</li>.
 * @method void setInstanceName(string $InstanceName) Set Instance display name. <li>if the instance display name is not specified, it will display by default as 'unnamed'.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it indicates generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}` will result in instance display names as `server_3` when purchasing 1 instance; when purchasing 2 instances, the instance display names will be `server_3` and `server_4` respectively. it supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances, if no pattern string is specified, a suffix `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, for `server_`, when purchasing 2 instances, the instance display names will be `server_1` and `server_2` respectively.</li> <li>it supports up to 128 characters (including pattern strings).</li>.
 * @method LoginSettings getLoginSettings() Obtain Instance login settings. this parameter allows you to set the instance login method to key or maintain the original login settings of the image.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login settings. this parameter allows you to set the instance login method to key or maintain the original login settings of the image.
 * @method array getSecurityGroupIds() Obtain Security group to which an instance belongs. this parameter can be obtained by calling the sgId field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which an instance belongs. this parameter can be obtained by calling the sgId field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
 * @method string getClientToken() Obtain A string used to ensure the idempotence of the request. This string is generated by the customer and should be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotence of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A string used to ensure the idempotence of the request. This string is generated by the customer and should be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotence of the request cannot be guaranteed.
 * @method string getHostName() Obtain Specifies the HostName of the cloud virtual machine.<br><li>the dot (.) and hyphen (-) cannot be used at the beginning or end of the HostName, and cannot be used consecutively.</li><li>for Windows instances: the character length is 2 to 15. it consists of letters (case insensitive), digits, and hyphens (-). dots (.) are not supported, and it cannot be all digits.</li><li>for other types (such as Linux) instances: the character length is 2 to 60. multiple dots are allowed. each segment between dots can include letters (case insensitive), digits, and hyphens (-).</li>.
 * @method void setHostName(string $HostName) Set Specifies the HostName of the cloud virtual machine.<br><li>the dot (.) and hyphen (-) cannot be used at the beginning or end of the HostName, and cannot be used consecutively.</li><li>for Windows instances: the character length is 2 to 15. it consists of letters (case insensitive), digits, and hyphens (-). dots (.) are not supported, and it cannot be all digits.</li><li>for other types (such as Linux) instances: the character length is 2 to 60. multiple dots are allowed. each segment between dots can include letters (case insensitive), digits, and hyphens (-).</li>.
 * @method ActionTimer getActionTimer() Obtain Scheduled task. You can specify a scheduled task for the instance through this parameter. Currently, only scheduled termination is supported.
 * @method void setActionTimer(ActionTimer $ActionTimer) Set Scheduled task. You can specify a scheduled task for the instance through this parameter. Currently, only scheduled termination is supported.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID. Only one can be specified.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID. Only one can be specified.
 * @method array getTagSpecification() Obtain List of tag descriptions. You can bind tags to corresponding resource instances at the same time by specifying this parameter. Currently, only binding tags to the CVM is supported.
 * @method void setTagSpecification(array $TagSpecification) Set List of tag descriptions. You can bind tags to corresponding resource instances at the same time by specifying this parameter. Currently, only binding tags to the CVM is supported.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market-Related options of the instance, such as relevant parameters of the bidding instance. this parameter is required if the payment mode of the specified instance is spot payment.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market-Related options of the instance, such as relevant parameters of the bidding instance. this parameter is required if the payment mode of the specified instance is spot payment.
 * @method string getUserData() Obtain User data provided for an instance must be encoded in base64. valid values for maximum data size are up to 16 KB. for details on obtaining this parameter, see running commands at startup for Windows (https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and Linux (https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
 * @method void setUserData(string $UserData) Set User data provided for an instance must be encoded in base64. valid values for maximum data size are up to 16 KB. for details on obtaining this parameter, see running commands at startup for Windows (https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and Linux (https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
 * @method boolean getDryRun() Obtain Whether it is a pre-check for this request only.
true: sends a check request without creating an instance. check items include whether required parameters are filled in, request format, service limits, and cvm inventory.
If the check fails, return the corresponding error code.
If the check passed, return RequestId.
false (default): sends a normal request. after passing the check, creates an instance directly.
 * @method void setDryRun(boolean $DryRun) Set Whether it is a pre-check for this request only.
true: sends a check request without creating an instance. check items include whether required parameters are filled in, request format, service limits, and cvm inventory.
If the check fails, return the corresponding error code.
If the check passed, return RequestId.
false (default): sends a normal request. after passing the check, creates an instance directly.
 * @method string getCamRoleName() Obtain CAM role name. it can be obtained through the roleName in the return value from the API DescribeRoleList.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name. it can be obtained through the roleName in the return value from the API DescribeRoleList.
 * @method string getHpcClusterId() Obtain High-performance computing cluster ID. If the created instance is a high-performance computing instance, the cluster where the instance is placed should be specified. Otherwise, it cannot be specified.
 * @method void setHpcClusterId(string $HpcClusterId) Set High-performance computing cluster ID. If the created instance is a high-performance computing instance, the cluster where the instance is placed should be specified. Otherwise, it cannot be specified.
 * @method string getInstanceChargeType() Obtain Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode, that is, annual and monthly subscription related parameter settings. Through this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to set auto-renewal, etc. If the specified instance's billing mode is the prepaid mode, this parameter must be passed.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode, that is, annual and monthly subscription related parameter settings. Through this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to set auto-renewal, etc. If the specified instance's billing mode is the prepaid mode, this parameter must be passed.
 * @method boolean getDisableApiTermination() Obtain Instance destruction protection flag: indicates whether an instance is allowed to be deleted through an api. value ranges from: - **TRUE**: indicates that instance protection is enabled, deletion through apis is not allowed. - **FALSE**: indicates that instance protection is disabled, deletion through apis is allowed.  default value: FALSE.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Instance destruction protection flag: indicates whether an instance is allowed to be deleted through an api. value ranges from: - **TRUE**: indicates that instance protection is enabled, deletion through apis is not allowed. - **FALSE**: indicates that instance protection is disabled, deletion through apis is allowed.  default value: FALSE.
 * @method array getLaunchTemplateTagSpecification() Obtain Description list of tags. by specifying this parameter, tags can be bound to the instance launch template.
 * @method void setLaunchTemplateTagSpecification(array $LaunchTemplateTagSpecification) Set Description list of tags. by specifying this parameter, tags can be bound to the instance launch template.
 * @method Metadata getMetadata() Obtain Custom metadata. specifies that custom metadata key-value pairs can be added when creating a CVM.
Note: this field is in beta test.
 * @method void setMetadata(Metadata $Metadata) Set Custom metadata. specifies that custom metadata key-value pairs can be added when creating a CVM.
Note: this field is in beta test.
 * @method string getTemplateDataModifyAction() Obtain Specifies that only the Update and Replace parameters are allowed. this parameter is valid only when custom Metadata is used in the template and Metadata is also transmitted in RunInstances. defaults to Replace.

-Update: if template t contains this parameter with a value of Update and metadata=[k1:v1, k2:v2], then RunInstances (with metadata=[k2:v3]) + t creates a cvm using metadata=[k1:v1, k2:v3]. 
-Replace: if the template t contains this parameter with a value of Replace and metadata=[k1:v1, k2:v2], then when creating a cvm using RunInstances (with metadata=[k2:v3]) + t, the created cvm will use metadata=[k2:v3]. 
Note: this field is in beta test.
 * @method void setTemplateDataModifyAction(string $TemplateDataModifyAction) Set Specifies that only the Update and Replace parameters are allowed. this parameter is valid only when custom Metadata is used in the template and Metadata is also transmitted in RunInstances. defaults to Replace.

-Update: if template t contains this parameter with a value of Update and metadata=[k1:v1, k2:v2], then RunInstances (with metadata=[k2:v3]) + t creates a cvm using metadata=[k1:v1, k2:v3]. 
-Replace: if the template t contains this parameter with a value of Replace and metadata=[k1:v1, k2:v2], then when creating a cvm using RunInstances (with metadata=[k2:v3]) + t, the created cvm will use metadata=[k2:v3]. 
Note: this field is in beta test.
 */
class CreateLaunchTemplateRequest extends AbstractModel
{
    /**
     * @var string Name of an instance launch template. It contains 2 to 128 English or Chinese characters.
     */
    public $LaunchTemplateName;

    /**
     * @var Placement Location of the instance. You can specify attributes such as availability zone, project, and host (specified when creating a instance on the CDH) to which the instance belongs through this parameter.
     */
    public $Placement;

    /**
     * @var string Specify an effective [mirror](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. there are four image types: <li>PUBLIC image</li> <li>custom image</li> <li>shared image</li> <li>service market image</li>  you can obtain available mirror ids in the following ways: <li>the mirror ids of `PUBLIC image`, `custom image` and `shared image` can be queried by logging in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_image); the mirror ids of `service market image` can be queried through the [cloud market](https://market.cloud.tencent.com/list).</li> <li>call the api [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), input InstanceType to obtain the list of images supported by the current model, and take the `ImageId` field from the return information.</li>.
     */
    public $ImageId;

    /**
     * @var string Version description of an instance launch template. It contains 2 to 256 English or Chinese characters.
     */
    public $LaunchTemplateVersionDescription;

    /**
     * @var string Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained BY calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) api to get the latest specification table or referring to the [instance specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1) description. if this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><li>for instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. the specific format is: CDH_XCXG. for example, for creating a CDH instance with 1 CPU core and 1 gb memory, this parameter should be CDH_1C1G.</li>.
     */
    public $InstanceType;

    /**
     * @var SystemDisk Instance system disk configuration information. If this parameter is not specified, it will be assigned based on the system default values.
     */
    public $SystemDisk;

    /**
     * @var array Instance data disk configuration information. if not specified, no data disks are purchased by default. support specifying 21 data disks at the time of purchase, among which a maximum of 1 LOCAL_BASIC data disk or LOCAL_SSD data disk can be included, and a maximum of 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks or CLOUD_SSD data disks can be included.
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud VPC-related information configuration. You can specify information such as VPC ID and subnet ID through this parameter. If this parameter is not specified, use the basic network by default. If a VPC IP is specified in this parameter, it indicates the primary network interface card IP of each instance. In addition, the number of the InstanceCount parameter should be consistent with the number of the VPC IP and should not exceed 20.
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible Public bandwidth-related settings. If this parameter is not specified, the public bandwidth is 0 Mbps by default.
     */
    public $InternetAccessible;

    /**
     * @var integer Number of instances to purchase. value range for monthly subscription instances: [1, 300]. value range for pay-as-you-go instances: [1, 100]. default value: 1. the number of instances to purchase must not exceed the remaining user quota. for specific quota limitations, see [CVM instance purchase limitations](https://intl.cloud.tencent.com/document/product/213/2664?from_cn_redirect=1).
     */
    public $InstanceCount;

    /**
     * @var string Instance display name. <li>if the instance display name is not specified, it will display by default as 'unnamed'.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it indicates generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}` will result in instance display names as `server_3` when purchasing 1 instance; when purchasing 2 instances, the instance display names will be `server_3` and `server_4` respectively. it supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances, if no pattern string is specified, a suffix `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, for `server_`, when purchasing 2 instances, the instance display names will be `server_1` and `server_2` respectively.</li> <li>it supports up to 128 characters (including pattern strings).</li>.
     */
    public $InstanceName;

    /**
     * @var LoginSettings Instance login settings. this parameter allows you to set the instance login method to key or maintain the original login settings of the image.
     */
    public $LoginSettings;

    /**
     * @var array Security group to which an instance belongs. this parameter can be obtained by calling the sgId field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
     */
    public $EnhancedService;

    /**
     * @var string A string used to ensure the idempotence of the request. This string is generated by the customer and should be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotence of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var string Specifies the HostName of the cloud virtual machine.<br><li>the dot (.) and hyphen (-) cannot be used at the beginning or end of the HostName, and cannot be used consecutively.</li><li>for Windows instances: the character length is 2 to 15. it consists of letters (case insensitive), digits, and hyphens (-). dots (.) are not supported, and it cannot be all digits.</li><li>for other types (such as Linux) instances: the character length is 2 to 60. multiple dots are allowed. each segment between dots can include letters (case insensitive), digits, and hyphens (-).</li>.
     */
    public $HostName;

    /**
     * @var ActionTimer Scheduled task. You can specify a scheduled task for the instance through this parameter. Currently, only scheduled termination is supported.
     */
    public $ActionTimer;

    /**
     * @var array Placement group ID. Only one can be specified.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array List of tag descriptions. You can bind tags to corresponding resource instances at the same time by specifying this parameter. Currently, only binding tags to the CVM is supported.
     */
    public $TagSpecification;

    /**
     * @var InstanceMarketOptionsRequest Market-Related options of the instance, such as relevant parameters of the bidding instance. this parameter is required if the payment mode of the specified instance is spot payment.
     */
    public $InstanceMarketOptions;

    /**
     * @var string User data provided for an instance must be encoded in base64. valid values for maximum data size are up to 16 KB. for details on obtaining this parameter, see running commands at startup for Windows (https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and Linux (https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
     */
    public $UserData;

    /**
     * @var boolean Whether it is a pre-check for this request only.
true: sends a check request without creating an instance. check items include whether required parameters are filled in, request format, service limits, and cvm inventory.
If the check fails, return the corresponding error code.
If the check passed, return RequestId.
false (default): sends a normal request. after passing the check, creates an instance directly.
     */
    public $DryRun;

    /**
     * @var string CAM role name. it can be obtained through the roleName in the return value from the API DescribeRoleList.
     */
    public $CamRoleName;

    /**
     * @var string High-performance computing cluster ID. If the created instance is a high-performance computing instance, the cluster where the instance is placed should be specified. Otherwise, it cannot be specified.
     */
    public $HpcClusterId;

    /**
     * @var string Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Prepaid mode, that is, annual and monthly subscription related parameter settings. Through this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to set auto-renewal, etc. If the specified instance's billing mode is the prepaid mode, this parameter must be passed.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Instance destruction protection flag: indicates whether an instance is allowed to be deleted through an api. value ranges from: - **TRUE**: indicates that instance protection is enabled, deletion through apis is not allowed. - **FALSE**: indicates that instance protection is disabled, deletion through apis is allowed.  default value: FALSE.
     */
    public $DisableApiTermination;

    /**
     * @var array Description list of tags. by specifying this parameter, tags can be bound to the instance launch template.
     */
    public $LaunchTemplateTagSpecification;

    /**
     * @var Metadata Custom metadata. specifies that custom metadata key-value pairs can be added when creating a CVM.
Note: this field is in beta test.
     */
    public $Metadata;

    /**
     * @var string Specifies that only the Update and Replace parameters are allowed. this parameter is valid only when custom Metadata is used in the template and Metadata is also transmitted in RunInstances. defaults to Replace.

-Update: if template t contains this parameter with a value of Update and metadata=[k1:v1, k2:v2], then RunInstances (with metadata=[k2:v3]) + t creates a cvm using metadata=[k1:v1, k2:v3]. 
-Replace: if the template t contains this parameter with a value of Replace and metadata=[k1:v1, k2:v2], then when creating a cvm using RunInstances (with metadata=[k2:v3]) + t, the created cvm will use metadata=[k2:v3]. 
Note: this field is in beta test.
     */
    public $TemplateDataModifyAction;

    /**
     * @param string $LaunchTemplateName Name of an instance launch template. It contains 2 to 128 English or Chinese characters.
     * @param Placement $Placement Location of the instance. You can specify attributes such as availability zone, project, and host (specified when creating a instance on the CDH) to which the instance belongs through this parameter.
     * @param string $ImageId Specify an effective [mirror](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. there are four image types: <li>PUBLIC image</li> <li>custom image</li> <li>shared image</li> <li>service market image</li>  you can obtain available mirror ids in the following ways: <li>the mirror ids of `PUBLIC image`, `custom image` and `shared image` can be queried by logging in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_image); the mirror ids of `service market image` can be queried through the [cloud market](https://market.cloud.tencent.com/list).</li> <li>call the api [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), input InstanceType to obtain the list of images supported by the current model, and take the `ImageId` field from the return information.</li>.
     * @param string $LaunchTemplateVersionDescription Version description of an instance launch template. It contains 2 to 256 English or Chinese characters.
     * @param string $InstanceType Instance model. Different instance models specify different resource specifications.

<br><li>For instances created with the payment modes PREPAID or POSTPAID_BY_HOUR, the specific values can be obtained BY calling the [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) api to get the latest specification table or referring to the [instance specifications](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1) description. if this parameter is not specified, the system will dynamically assign a default model based on the current resource sales situation in a region.</li><li>for instances created with the payment mode CDHPAID, this parameter has the prefix "CDH_" and is generated based on the CPU and memory configuration. the specific format is: CDH_XCXG. for example, for creating a CDH instance with 1 CPU core and 1 gb memory, this parameter should be CDH_1C1G.</li>.
     * @param SystemDisk $SystemDisk Instance system disk configuration information. If this parameter is not specified, it will be assigned based on the system default values.
     * @param array $DataDisks Instance data disk configuration information. if not specified, no data disks are purchased by default. support specifying 21 data disks at the time of purchase, among which a maximum of 1 LOCAL_BASIC data disk or LOCAL_SSD data disk can be included, and a maximum of 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks or CLOUD_SSD data disks can be included.
     * @param VirtualPrivateCloud $VirtualPrivateCloud VPC-related information configuration. You can specify information such as VPC ID and subnet ID through this parameter. If this parameter is not specified, use the basic network by default. If a VPC IP is specified in this parameter, it indicates the primary network interface card IP of each instance. In addition, the number of the InstanceCount parameter should be consistent with the number of the VPC IP and should not exceed 20.
     * @param InternetAccessible $InternetAccessible Public bandwidth-related settings. If this parameter is not specified, the public bandwidth is 0 Mbps by default.
     * @param integer $InstanceCount Number of instances to purchase. value range for monthly subscription instances: [1, 300]. value range for pay-as-you-go instances: [1, 100]. default value: 1. the number of instances to purchase must not exceed the remaining user quota. for specific quota limitations, see [CVM instance purchase limitations](https://intl.cloud.tencent.com/document/product/213/2664?from_cn_redirect=1).
     * @param string $InstanceName Instance display name. <li>if the instance display name is not specified, it will display by default as 'unnamed'.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it indicates generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}` will result in instance display names as `server_3` when purchasing 1 instance; when purchasing 2 instances, the instance display names will be `server_3` and `server_4` respectively. it supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances, if no pattern string is specified, a suffix `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, for `server_`, when purchasing 2 instances, the instance display names will be `server_1` and `server_2` respectively.</li> <li>it supports up to 128 characters (including pattern strings).</li>.
     * @param LoginSettings $LoginSettings Instance login settings. this parameter allows you to set the instance login method to key or maintain the original login settings of the image.
     * @param array $SecurityGroupIds Security group to which an instance belongs. this parameter can be obtained by calling the sgId field in the returned value of [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.
     * @param EnhancedService $EnhancedService Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
     * @param string $ClientToken A string used to ensure the idempotence of the request. This string is generated by the customer and should be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotence of the request cannot be guaranteed.
     * @param string $HostName Specifies the HostName of the cloud virtual machine.<br><li>the dot (.) and hyphen (-) cannot be used at the beginning or end of the HostName, and cannot be used consecutively.</li><li>for Windows instances: the character length is 2 to 15. it consists of letters (case insensitive), digits, and hyphens (-). dots (.) are not supported, and it cannot be all digits.</li><li>for other types (such as Linux) instances: the character length is 2 to 60. multiple dots are allowed. each segment between dots can include letters (case insensitive), digits, and hyphens (-).</li>.
     * @param ActionTimer $ActionTimer Scheduled task. You can specify a scheduled task for the instance through this parameter. Currently, only scheduled termination is supported.
     * @param array $DisasterRecoverGroupIds Placement group ID. Only one can be specified.
     * @param array $TagSpecification List of tag descriptions. You can bind tags to corresponding resource instances at the same time by specifying this parameter. Currently, only binding tags to the CVM is supported.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-Related options of the instance, such as relevant parameters of the bidding instance. this parameter is required if the payment mode of the specified instance is spot payment.
     * @param string $UserData User data provided for an instance must be encoded in base64. valid values for maximum data size are up to 16 KB. for details on obtaining this parameter, see running commands at startup for Windows (https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and Linux (https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
     * @param boolean $DryRun Whether it is a pre-check for this request only.
true: sends a check request without creating an instance. check items include whether required parameters are filled in, request format, service limits, and cvm inventory.
If the check fails, return the corresponding error code.
If the check passed, return RequestId.
false (default): sends a normal request. after passing the check, creates an instance directly.
     * @param string $CamRoleName CAM role name. it can be obtained through the roleName in the return value from the API DescribeRoleList.
     * @param string $HpcClusterId High-performance computing cluster ID. If the created instance is a high-performance computing instance, the cluster where the instance is placed should be specified. Otherwise, it cannot be specified.
     * @param string $InstanceChargeType Instance [billing mode](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>PREPAID: prepaid, that is, monthly subscription.</li><li>POSTPAID_BY_HOUR: pay-as-you-go by hour.</li><li>CDHPAID: CDH instance (created based on CDH; the resources of the host are free of charge).</li><li>SPOTPAID: spot payment.</li>Default value: POSTPAID_BY_HOUR.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode, that is, annual and monthly subscription related parameter settings. Through this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to set auto-renewal, etc. If the specified instance's billing mode is the prepaid mode, this parameter must be passed.
     * @param boolean $DisableApiTermination Instance destruction protection flag: indicates whether an instance is allowed to be deleted through an api. value ranges from: - **TRUE**: indicates that instance protection is enabled, deletion through apis is not allowed. - **FALSE**: indicates that instance protection is disabled, deletion through apis is allowed.  default value: FALSE.
     * @param array $LaunchTemplateTagSpecification Description list of tags. by specifying this parameter, tags can be bound to the instance launch template.
     * @param Metadata $Metadata Custom metadata. specifies that custom metadata key-value pairs can be added when creating a CVM.
Note: this field is in beta test.
     * @param string $TemplateDataModifyAction Specifies that only the Update and Replace parameters are allowed. this parameter is valid only when custom Metadata is used in the template and Metadata is also transmitted in RunInstances. defaults to Replace.

-Update: if template t contains this parameter with a value of Update and metadata=[k1:v1, k2:v2], then RunInstances (with metadata=[k2:v3]) + t creates a cvm using metadata=[k1:v1, k2:v3]. 
-Replace: if the template t contains this parameter with a value of Replace and metadata=[k1:v1, k2:v2], then when creating a cvm using RunInstances (with metadata=[k2:v3]) + t, the created cvm will use metadata=[k2:v3]. 
Note: this field is in beta test.
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
        if (array_key_exists("LaunchTemplateName",$param) and $param["LaunchTemplateName"] !== null) {
            $this->LaunchTemplateName = $param["LaunchTemplateName"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("LaunchTemplateVersionDescription",$param) and $param["LaunchTemplateVersionDescription"] !== null) {
            $this->LaunchTemplateVersionDescription = $param["LaunchTemplateVersionDescription"];
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

        if (array_key_exists("LaunchTemplateTagSpecification",$param) and $param["LaunchTemplateTagSpecification"] !== null) {
            $this->LaunchTemplateTagSpecification = [];
            foreach ($param["LaunchTemplateTagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->LaunchTemplateTagSpecification, $obj);
            }
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("TemplateDataModifyAction",$param) and $param["TemplateDataModifyAction"] !== null) {
            $this->TemplateDataModifyAction = $param["TemplateDataModifyAction"];
        }
    }
}
