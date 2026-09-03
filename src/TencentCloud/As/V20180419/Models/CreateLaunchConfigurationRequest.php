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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLaunchConfiguration request structure.
 *
 * @method string getLaunchConfigurationName() Obtain <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, the separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, the separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
 * @method string getImageId() Obtain <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. One and only one of image ID and image family name must be filled in. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can get available image IDs in the following ways:<br><li>You can query the image IDs of <code>public images</code>, <code>custom images</code>, and <code>shared images</code> by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>; query the image IDs in the <code>service image market</code> in <a href="https://market.cloud.tencent.com/list">Marketplace</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and get the <code>ImageId</code> field in the returned information.</li></p>
 * @method void setImageId(string $ImageId) Set <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. One and only one of image ID and image family name must be filled in. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can get available image IDs in the following ways:<br><li>You can query the image IDs of <code>public images</code>, <code>custom images</code>, and <code>shared images</code> by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>; query the image IDs in the <code>service image market</code> in <a href="https://market.cloud.tencent.com/list">Marketplace</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and get the <code>ImageId</code> field in the returned information.</li></p>
 * @method integer getProjectId() Obtain <p>The project ID of the launch configuration. Default value: 0, indicating the default project. Obtain this parameter by calling <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> and using the projectId field in the return value.<br>Note: The project ID of instances within the scaling group is the scaling group project ID, irrelevant to the value here.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>The project ID of the launch configuration. Default value: 0, indicating the default project. Obtain this parameter by calling <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> and using the projectId field in the return value.<br>Note: The project ID of instances within the scaling group is the scaling group project ID, irrelevant to the value here.</p>
 * @method string getInstanceType() Obtain <p>Instance model. Different instance models specify different resource specifications. The specific values can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> API to get the latest specification table or refer to the <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">instance type</a> description.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive, and one and only one must be filled in.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance model. Different instance models specify different resource specifications. The specific values can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> API to get the latest specification table or refer to the <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">instance type</a> description.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive, and one and only one must be filled in.</p>
 * @method SystemDisk getSystemDisk() Obtain <p>Instance system disk configuration information. If not specified, it will be allocated based on system default values.</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set <p>Instance system disk configuration information. If not specified, it will be allocated based on system default values.</p>
 * @method array getDataDisks() Obtain <p>Instance data disk configuration information. If not specified, no data disks are purchased by default, and a maximum of 11 data disks can be specified.</p>
 * @method void setDataDisks(array $DataDisks) Set <p>Instance data disk configuration information. If not specified, no data disks are purchased by default, and a maximum of 11 data disks can be specified.</p>
 * @method InternetAccessible getInternetAccessible() Obtain <p>Public network bandwidth-related information settings. If not specified, the public network bandwidth defaults to 0 Mbps.</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set <p>Public network bandwidth-related information settings. If not specified, the public network bandwidth defaults to 0 Mbps.</p>
 * @method LoginSettings getLoginSettings() Obtain <p>Instance login settings. Through this parameter, you can set the instance's login method to password, key, or maintain the image's original login settings. By default, a password will be randomly generated, and the user will be notified through an internal message.</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set <p>Instance login settings. Through this parameter, you can set the instance's login method to password, key, or maintain the image's original login settings. By default, a password will be randomly generated, and the user will be notified through an internal message.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group to which an instance belongs. The value of this parameter can be obtained from the returned <code>SecurityGroupId</code> field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, no security groups are associated by default.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group to which an instance belongs. The value of this parameter can be obtained from the returned <code>SecurityGroupId</code> field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, no security groups are associated by default.</p>
 * @method EnhancedService getEnhancedService() Obtain <p>Enhancement services. This parameter can be used to specify whether to enable services such as Cloud Monitor and cloud security. If not specified, cloud monitoring and cloud security services are enabled by default.</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set <p>Enhancement services. This parameter can be used to specify whether to enable services such as Cloud Monitor and cloud security. If not specified, cloud monitoring and cloud security services are enabled by default.</p>
 * @method string getUserData() Obtain <p>Custom data after Base64 encoding should not exceed 16KB.</p>
 * @method void setUserData(string $UserData) Set <p>Custom data after Base64 encoding should not exceed 16KB.</p>
 * @method string getInstanceChargeType() Obtain <p>Instance billing type. The default value of CVM is handled as POSTPAID_BY_HOUR.</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepayment, which is monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing type. The default value of CVM is handled as POSTPAID_BY_HOUR.</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepayment, which is monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain <p>Market options of the instance, such as spot instance parameters. This parameter is required if the payment mode of the specified instance is spot payment.</p>
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set <p>Market options of the instance, such as spot instance parameters. This parameter is required if the payment mode of the specified instance is spot payment.</p>
 * @method array getInstanceTypes() Obtain <p>Instance model list. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive. One and only one of them must be filled in. To obtain the specific values, call the API <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> to get the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
 * @method void setInstanceTypes(array $InstanceTypes) Set <p>Instance model list. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive. One and only one of them must be filled in. To obtain the specific values, call the API <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> to get the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
 * @method string getCamRoleName() Obtain <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
 * @method void setCamRoleName(string $CamRoleName) Set <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
 * @method string getInstanceTypesCheckPolicy() Obtain <p>Instance type validation policy. Valid values include ALL and ANY. Default value: ANY. This parameter is valid only when InstanceTypes contains multiple models.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li><li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li><p>Common causes of InstanceTypes unavailable include the instance type sold out and the corresponding cloud disk sold out.<br>If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.</p>
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) Set <p>Instance type validation policy. Valid values include ALL and ANY. Default value: ANY. This parameter is valid only when InstanceTypes contains multiple models.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li><li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li><p>Common causes of InstanceTypes unavailable include the instance type sold out and the corresponding cloud disk sold out.<br>If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.</p>
 * @method array getInstanceTags() Obtain <p>Tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. A maximum of 10 tags can be specified.</p>
 * @method void setInstanceTags(array $InstanceTags) Set <p>Tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. A maximum of 10 tags can be specified.</p>
 * @method array getTags() Obtain <p>Tag description list. By specifying this parameter, you can bind tags to a launch configuration. Each launch configuration supports up to 30 tags.</p>
 * @method void setTags(array $Tags) Set <p>Tag description list. By specifying this parameter, you can bind tags to a launch configuration. Each launch configuration supports up to 30 tags.</p>
 * @method HostNameSettings getHostNameSettings() Obtain <p>Related settings of the CVM host name (HostName).<br>Setting the host name for windows instances is unsupported.<br>When adding this attribute, you must pass the CVM host name. Other unspecified fields will be set to default values.<br>The host name (with the suffix added if it exists) is verified against a maximum length of 46 characters.</p>
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set <p>Related settings of the CVM host name (HostName).<br>Setting the host name for windows instances is unsupported.<br>When adding this attribute, you must pass the CVM host name. Other unspecified fields will be set to default values.<br>The host name (with the suffix added if it exists) is verified against a maximum length of 46 characters.</p>
 * @method InstanceNameSettings getInstanceNameSettings() Obtain <p>Related settings of CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group is set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group is set as "as-{{ scaling group AutoScalingGroupName }}" and transmitted to CVM.<br>When adding new this attribute, the instance name of the CVM must be transmitted. Other fields not transmitted will be set as default values.<br>It will verify whether the instance name (plus the suffix if it exists) exceeds the maximum length of 108 characters.</p>
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set <p>Related settings of CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group is set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group is set as "as-{{ scaling group AutoScalingGroupName }}" and transmitted to CVM.<br>When adding new this attribute, the instance name of the CVM must be transmitted. Other fields not transmitted will be set as default values.<br>It will verify whether the instance name (plus the suffix if it exists) exceeds the maximum length of 108 characters.</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. If the billing mode of the specified instance is prepaid, this parameter must be passed.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. If the billing mode of the specified instance is prepaid, this parameter must be passed.</p>
 * @method string getDiskTypePolicy() Obtain <p>Cloud disk type selection policy. Default value: ORIGINAL. Value range:</p><li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select the currently available cloud disk type</li>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set <p>Cloud disk type selection policy. Default value: ORIGINAL. Value range:</p><li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select the currently available cloud disk type</li>
 * @method string getHpcClusterId() Obtain <p>Hyper Computing Cluster ID. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/83220?from_cn_redirect=1">DescribeHpcClusters</a> API.<br>Note: This field is empty by default.</p>
 * @method void setHpcClusterId(string $HpcClusterId) Set <p>Hyper Computing Cluster ID. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/83220?from_cn_redirect=1">DescribeHpcClusters</a> API.<br>Note: This field is empty by default.</p>
 * @method IPv6InternetAccessible getIPv6InternetAccessible() Obtain <p>Public network bandwidth-related information settings for IPv6. If the new instance contains an IPv6 address, this parameter can allocate public network bandwidth to the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) Set <p>Public network bandwidth-related information settings for IPv6. If the new instance contains an IPv6 address, this parameter can allocate public network bandwidth to the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>Placement Group id. Only one can be specified.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>Placement Group id. Only one can be specified.</p>
 * @method string getImageFamily() Obtain <p>Image family name. Either image Id or image family name must be specified, and one and only one must be filled in. This parameter can be obtained through the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
 * @method void setImageFamily(string $ImageFamily) Set <p>Image family name. Either image Id or image family name must be specified, and one and only one must be filled in. This parameter can be obtained through the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
 * @method string getDedicatedClusterId() Obtain <p>CDC ID. Obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/1346/73758?from_cn_redirect=1">DescribeDedicatedClusters</a> API.</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set <p>CDC ID. Obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/1346/73758?from_cn_redirect=1">DescribeDedicatedClusters</a> API.</p>
 * @method Metadata getMetadata() Obtain <p>Custom metadata.</p>
 * @method void setMetadata(Metadata $Metadata) Set <p>Custom metadata.</p>
 * @method array getNetworkInterfaces() Obtain <p>Configure the elastic network interface for scale-out instances.</p><p>Input limits: up to 17 items. When configuring this parameter, you must explicitly include and can only include one PRIMARY. AS does not auto-complete the primary ENI. An explicitly empty array is illegal. Spot instances do not support this parameter.</p><p>The VPC and subnet are automatically injected by the scaling group based on the current candidate subnets. If not configured, they are not transmitted to CVM. The SecurityGroupIds parameter in the launch configuration is retained.</p>
 * @method void setNetworkInterfaces(array $NetworkInterfaces) Set <p>Configure the elastic network interface for scale-out instances.</p><p>Input limits: up to 17 items. When configuring this parameter, you must explicitly include and can only include one PRIMARY. AS does not auto-complete the primary ENI. An explicitly empty array is illegal. Spot instances do not support this parameter.</p><p>The VPC and subnet are automatically injected by the scaling group based on the current candidate subnets. If not configured, they are not transmitted to CVM. The SecurityGroupIds parameter in the launch configuration is retained.</p>
 */
class CreateLaunchConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, the separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
     */
    public $LaunchConfigurationName;

    /**
     * @var string <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. One and only one of image ID and image family name must be filled in. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can get available image IDs in the following ways:<br><li>You can query the image IDs of <code>public images</code>, <code>custom images</code>, and <code>shared images</code> by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>; query the image IDs in the <code>service image market</code> in <a href="https://market.cloud.tencent.com/list">Marketplace</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and get the <code>ImageId</code> field in the returned information.</li></p>
     */
    public $ImageId;

    /**
     * @var integer <p>The project ID of the launch configuration. Default value: 0, indicating the default project. Obtain this parameter by calling <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> and using the projectId field in the return value.<br>Note: The project ID of instances within the scaling group is the scaling group project ID, irrelevant to the value here.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Instance model. Different instance models specify different resource specifications. The specific values can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> API to get the latest specification table or refer to the <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">instance type</a> description.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive, and one and only one must be filled in.</p>
     */
    public $InstanceType;

    /**
     * @var SystemDisk <p>Instance system disk configuration information. If not specified, it will be allocated based on system default values.</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>Instance data disk configuration information. If not specified, no data disks are purchased by default, and a maximum of 11 data disks can be specified.</p>
     */
    public $DataDisks;

    /**
     * @var InternetAccessible <p>Public network bandwidth-related information settings. If not specified, the public network bandwidth defaults to 0 Mbps.</p>
     */
    public $InternetAccessible;

    /**
     * @var LoginSettings <p>Instance login settings. Through this parameter, you can set the instance's login method to password, key, or maintain the image's original login settings. By default, a password will be randomly generated, and the user will be notified through an internal message.</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>Security group to which an instance belongs. The value of this parameter can be obtained from the returned <code>SecurityGroupId</code> field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, no security groups are associated by default.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService <p>Enhancement services. This parameter can be used to specify whether to enable services such as Cloud Monitor and cloud security. If not specified, cloud monitoring and cloud security services are enabled by default.</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>Custom data after Base64 encoding should not exceed 16KB.</p>
     */
    public $UserData;

    /**
     * @var string <p>Instance billing type. The default value of CVM is handled as POSTPAID_BY_HOUR.</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepayment, which is monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest <p>Market options of the instance, such as spot instance parameters. This parameter is required if the payment mode of the specified instance is spot payment.</p>
     */
    public $InstanceMarketOptions;

    /**
     * @var array <p>Instance model list. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive. One and only one of them must be filled in. To obtain the specific values, call the API <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> to get the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
     */
    public $InstanceTypes;

    /**
     * @var string <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
     */
    public $CamRoleName;

    /**
     * @var string <p>Instance type validation policy. Valid values include ALL and ANY. Default value: ANY. This parameter is valid only when InstanceTypes contains multiple models.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li><li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li><p>Common causes of InstanceTypes unavailable include the instance type sold out and the corresponding cloud disk sold out.<br>If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.</p>
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var array <p>Tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. A maximum of 10 tags can be specified.</p>
     */
    public $InstanceTags;

    /**
     * @var array <p>Tag description list. By specifying this parameter, you can bind tags to a launch configuration. Each launch configuration supports up to 30 tags.</p>
     */
    public $Tags;

    /**
     * @var HostNameSettings <p>Related settings of the CVM host name (HostName).<br>Setting the host name for windows instances is unsupported.<br>When adding this attribute, you must pass the CVM host name. Other unspecified fields will be set to default values.<br>The host name (with the suffix added if it exists) is verified against a maximum length of 46 characters.</p>
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings <p>Related settings of CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group is set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group is set as "as-{{ scaling group AutoScalingGroupName }}" and transmitted to CVM.<br>When adding new this attribute, the instance name of the CVM must be transmitted. Other fields not transmitted will be set as default values.<br>It will verify whether the instance name (plus the suffix if it exists) exceeds the maximum length of 108 characters.</p>
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. If the billing mode of the specified instance is prepaid, this parameter must be passed.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>Cloud disk type selection policy. Default value: ORIGINAL. Value range:</p><li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select the currently available cloud disk type</li>
     */
    public $DiskTypePolicy;

    /**
     * @var string <p>Hyper Computing Cluster ID. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/83220?from_cn_redirect=1">DescribeHpcClusters</a> API.<br>Note: This field is empty by default.</p>
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible <p>Public network bandwidth-related information settings for IPv6. If the new instance contains an IPv6 address, this parameter can allocate public network bandwidth to the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
     */
    public $IPv6InternetAccessible;

    /**
     * @var array <p>Placement Group id. Only one can be specified.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string <p>Image family name. Either image Id or image family name must be specified, and one and only one must be filled in. This parameter can be obtained through the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
     */
    public $ImageFamily;

    /**
     * @var string <p>CDC ID. Obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/1346/73758?from_cn_redirect=1">DescribeDedicatedClusters</a> API.</p>
     */
    public $DedicatedClusterId;

    /**
     * @var Metadata <p>Custom metadata.</p>
     */
    public $Metadata;

    /**
     * @var array <p>Configure the elastic network interface for scale-out instances.</p><p>Input limits: up to 17 items. When configuring this parameter, you must explicitly include and can only include one PRIMARY. AS does not auto-complete the primary ENI. An explicitly empty array is illegal. Spot instances do not support this parameter.</p><p>The VPC and subnet are automatically injected by the scaling group based on the current candidate subnets. If not configured, they are not transmitted to CVM. The SecurityGroupIds parameter in the launch configuration is retained.</p>
     */
    public $NetworkInterfaces;

    /**
     * @param string $LaunchConfigurationName <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, the separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
     * @param string $ImageId <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. One and only one of image ID and image family name must be filled in. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can get available image IDs in the following ways:<br><li>You can query the image IDs of <code>public images</code>, <code>custom images</code>, and <code>shared images</code> by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>; query the image IDs in the <code>service image market</code> in <a href="https://market.cloud.tencent.com/list">Marketplace</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and get the <code>ImageId</code> field in the returned information.</li></p>
     * @param integer $ProjectId <p>The project ID of the launch configuration. Default value: 0, indicating the default project. Obtain this parameter by calling <a href="https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1">DescribeProject</a> and using the projectId field in the return value.<br>Note: The project ID of instances within the scaling group is the scaling group project ID, irrelevant to the value here.</p>
     * @param string $InstanceType <p>Instance model. Different instance models specify different resource specifications. The specific values can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> API to get the latest specification table or refer to the <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">instance type</a> description.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive, and one and only one must be filled in.</p>
     * @param SystemDisk $SystemDisk <p>Instance system disk configuration information. If not specified, it will be allocated based on system default values.</p>
     * @param array $DataDisks <p>Instance data disk configuration information. If not specified, no data disks are purchased by default, and a maximum of 11 data disks can be specified.</p>
     * @param InternetAccessible $InternetAccessible <p>Public network bandwidth-related information settings. If not specified, the public network bandwidth defaults to 0 Mbps.</p>
     * @param LoginSettings $LoginSettings <p>Instance login settings. Through this parameter, you can set the instance's login method to password, key, or maintain the image's original login settings. By default, a password will be randomly generated, and the user will be notified through an internal message.</p>
     * @param array $SecurityGroupIds <p>Security group to which an instance belongs. The value of this parameter can be obtained from the returned <code>SecurityGroupId</code> field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, no security groups are associated by default.</p>
     * @param EnhancedService $EnhancedService <p>Enhancement services. This parameter can be used to specify whether to enable services such as Cloud Monitor and cloud security. If not specified, cloud monitoring and cloud security services are enabled by default.</p>
     * @param string $UserData <p>Custom data after Base64 encoding should not exceed 16KB.</p>
     * @param string $InstanceChargeType <p>Instance billing type. The default value of CVM is handled as POSTPAID_BY_HOUR.</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepayment, which is monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions <p>Market options of the instance, such as spot instance parameters. This parameter is required if the payment mode of the specified instance is spot payment.</p>
     * @param array $InstanceTypes <p>Instance model list. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>The <code>InstanceType</code> and <code>InstanceTypes</code> parameters are mutually exclusive. One and only one of them must be filled in. To obtain the specific values, call the API <a href="https://www.tencentcloud.com/document/api/213/15749?from_cn_redirect=1">DescribeInstanceTypeConfigs</a> to get the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
     * @param string $CamRoleName <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
     * @param string $InstanceTypesCheckPolicy <p>Instance type validation policy. Valid values include ALL and ANY. Default value: ANY. This parameter is valid only when InstanceTypes contains multiple models.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li><li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li><p>Common causes of InstanceTypes unavailable include the instance type sold out and the corresponding cloud disk sold out.<br>If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.</p>
     * @param array $InstanceTags <p>Tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. A maximum of 10 tags can be specified.</p>
     * @param array $Tags <p>Tag description list. By specifying this parameter, you can bind tags to a launch configuration. Each launch configuration supports up to 30 tags.</p>
     * @param HostNameSettings $HostNameSettings <p>Related settings of the CVM host name (HostName).<br>Setting the host name for windows instances is unsupported.<br>When adding this attribute, you must pass the CVM host name. Other unspecified fields will be set to default values.<br>The host name (with the suffix added if it exists) is verified against a maximum length of 46 characters.</p>
     * @param InstanceNameSettings $InstanceNameSettings <p>Related settings of CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group is set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group is set as "as-{{ scaling group AutoScalingGroupName }}" and transmitted to CVM.<br>When adding new this attribute, the instance name of the CVM must be transmitted. Other fields not transmitted will be set as default values.<br>It will verify whether the instance name (plus the suffix if it exists) exceeds the maximum length of 108 characters.</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. If the billing mode of the specified instance is prepaid, this parameter must be passed.</p>
     * @param string $DiskTypePolicy <p>Cloud disk type selection policy. Default value: ORIGINAL. Value range:</p><li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select the currently available cloud disk type</li>
     * @param string $HpcClusterId <p>Hyper Computing Cluster ID. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/83220?from_cn_redirect=1">DescribeHpcClusters</a> API.<br>Note: This field is empty by default.</p>
     * @param IPv6InternetAccessible $IPv6InternetAccessible <p>Public network bandwidth-related information settings for IPv6. If the new instance contains an IPv6 address, this parameter can allocate public network bandwidth to the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
     * @param array $DisasterRecoverGroupIds <p>Placement Group id. Only one can be specified.</p>
     * @param string $ImageFamily <p>Image family name. Either image Id or image family name must be specified, and one and only one must be filled in. This parameter can be obtained through the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
     * @param string $DedicatedClusterId <p>CDC ID. Obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/1346/73758?from_cn_redirect=1">DescribeDedicatedClusters</a> API.</p>
     * @param Metadata $Metadata <p>Custom metadata.</p>
     * @param array $NetworkInterfaces <p>Configure the elastic network interface for scale-out instances.</p><p>Input limits: up to 17 items. When configuring this parameter, you must explicitly include and can only include one PRIMARY. AS does not auto-complete the primary ENI. An explicitly empty array is illegal. Spot instances do not support this parameter.</p><p>The VPC and subnet are automatically injected by the scaling group based on the current candidate subnets. If not configured, they are not transmitted to CVM. The SecurityGroupIds parameter in the launch configuration is retained.</p>
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

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("IPv6InternetAccessible",$param) and $param["IPv6InternetAccessible"] !== null) {
            $this->IPv6InternetAccessible = new IPv6InternetAccessible();
            $this->IPv6InternetAccessible->deserialize($param["IPv6InternetAccessible"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("NetworkInterfaces",$param) and $param["NetworkInterfaces"] !== null) {
            $this->NetworkInterfaces = [];
            foreach ($param["NetworkInterfaces"] as $key => $value){
                $obj = new NetworkInterface();
                $obj->deserialize($value);
                array_push($this->NetworkInterfaces, $obj);
            }
        }
    }
}
