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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLaunchConfigurationAttributes request structure.
 *
 * @method string getLaunchConfigurationId() Obtain <p>Launch configuration ID. You can obtain it by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a> or calling the <a href="https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> API, and retrieving LaunchConfigurationId from the returned information.</p>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set <p>Launch configuration ID. You can obtain it by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a> or calling the <a href="https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> API, and retrieving LaunchConfigurationId from the returned information.</p>
 * @method string getImageId() Obtain <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can obtain an available image ID in the following ways:<br><li>For <code>public images</code>, <code>custom images</code>, and <code>shared images</code>, query the image ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>. For <code>service market images</code>, query the image ID in the <a href="https://market.cloud.tencent.com/list">cloud market</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and take the <code>ImageId</code> field from the returned information.</li></p>
 * @method void setImageId(string $ImageId) Set <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can obtain an available image ID in the following ways:<br><li>For <code>public images</code>, <code>custom images</code>, and <code>shared images</code>, query the image ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>. For <code>service market images</code>, query the image ID in the <a href="https://market.cloud.tencent.com/list">cloud market</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and take the <code>ImageId</code> field from the returned information.</li></p>
 * @method array getInstanceTypes() Obtain <p>Types of CVM instances. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>InstanceType specifies a single instance type. By setting InstanceTypes, you can specify multiple instance types and invalidate the original InstanceType. Specific values can be obtained by calling the API <a href="https://www.tencentcloud.com/document/product/213/33254">DescribeZoneInstanceConfigInfos</a> to obtain the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
 * @method void setInstanceTypes(array $InstanceTypes) Set <p>Types of CVM instances. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>InstanceType specifies a single instance type. By setting InstanceTypes, you can specify multiple instance types and invalidate the original InstanceType. Specific values can be obtained by calling the API <a href="https://www.tencentcloud.com/document/product/213/33254">DescribeZoneInstanceConfigInfos</a> to obtain the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
 * @method string getInstanceTypesCheckPolicy() Obtain <p>Instance type validation policy, effective during actual modification of InstanceTypes. Valid values include ALL and ANY, default value: ANY.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li> <li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li> Common causes of InstanceTypes unavailable include InstanceType sold out, corresponding cloud disk sold out. If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) Set <p>Instance type validation policy, effective during actual modification of InstanceTypes. Valid values include ALL and ANY, default value: ANY.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li> <li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li> Common causes of InstanceTypes unavailable include InstanceType sold out, corresponding cloud disk sold out. If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method string getLaunchConfigurationName() Obtain <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
 * @method string getUserData() Obtain <p>The custom data after Base64 encoding should not exceed 16 KB. To clear UserData, assign it an empty string.</p>
 * @method void setUserData(string $UserData) Set <p>The custom data after Base64 encoding should not exceed 16 KB. To clear UserData, assign it an empty string.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group to which the instance belongs. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API and getting the <code>SecurityGroupId</code> field in the return value.<br>If you specify this parameter, provide at least one security group, and the list order is sequential.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group to which the instance belongs. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API and getting the <code>SecurityGroupId</code> field in the return value.<br>If you specify this parameter, provide at least one security group, and the list order is sequential.</p>
 * @method InternetAccessible getInternetAccessible() Obtain <p>Public network bandwidth-related information settings.<br>When the public network outbound bandwidth cap is 0 Mbps, it cannot be modified to enable assigning public IP. Accordingly, when assigning public IP is currently enabled, the modified public network outbound bandwidth cap must be greater than 0 Mbps.</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set <p>Public network bandwidth-related information settings.<br>When the public network outbound bandwidth cap is 0 Mbps, it cannot be modified to enable assigning public IP. Accordingly, when assigning public IP is currently enabled, the modified public network outbound bandwidth cap must be greater than 0 Mbps.</p>
 * @method string getInstanceChargeType() Obtain <p>Instance billing type. Valid values:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, which is a Monthly Subscription</li><li>CDCPAID: dedicated cluster payment</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing type. Valid values:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, which is a Monthly Subscription</li><li>CDCPAID: dedicated cluster payment</li>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can set attributes such as the duration of instance purchase and whether to enable auto-renewal.<br>If you change the payment mode of an instance to prepaid, this parameter is required. When changing from prepaid to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must specify the duration of instance purchase. Other fields not specified will be set to default values.<br>When modifying this field, the current payment mode must be prepaid.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can set attributes such as the duration of instance purchase and whether to enable auto-renewal.<br>If you change the payment mode of an instance to prepaid, this parameter is required. When changing from prepaid to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must specify the duration of instance purchase. Other fields not specified will be set to default values.<br>When modifying this field, the current payment mode must be prepaid.</p>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain <p>Market-related options of the instance, such as bidding instance parameters.<br>If you change the payment mode of the instance to spot payment, this parameter is required. When changing from spot payment to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must transmit the bid price under relevant spot options. Other fields not transmitted will be set as default.<br>When modifying this field, the current payment mode must be spot payment.</p>
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set <p>Market-related options of the instance, such as bidding instance parameters.<br>If you change the payment mode of the instance to spot payment, this parameter is required. When changing from spot payment to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must transmit the bid price under relevant spot options. Other fields not transmitted will be set as default.<br>When modifying this field, the current payment mode must be spot payment.</p>
 * @method string getDiskTypePolicy() Obtain <p>Cloud disk type selection policy. Value range:</p><li>ORIGINAL: use the set cloud disk type.</li><li>AUTOMATIC: automatically select the currently available cloud disk type.</li>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set <p>Cloud disk type selection policy. Value range:</p><li>ORIGINAL: use the set cloud disk type.</li><li>AUTOMATIC: automatically select the currently available cloud disk type.</li>
 * @method SystemDisk getSystemDisk() Obtain <p>Instance system disk configuration information.</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set <p>Instance system disk configuration information.</p>
 * @method array getDataDisks() Obtain <p>Instance data disk configuration information.<br>Supports up to 11 data disks. Apply the modification as a whole, so provide all values after modification.<br>The data disk type is consistent with the system disk type by default.</p>
 * @method void setDataDisks(array $DataDisks) Set <p>Instance data disk configuration information.<br>Supports up to 11 data disks. Apply the modification as a whole, so provide all values after modification.<br>The data disk type is consistent with the system disk type by default.</p>
 * @method HostNameSettings getHostNameSettings() Obtain <p>Settings for the CVM host name.<br>Configuring the host name for windows instances is not supported.<br>When adding this attribute, you must transmit the CVM host name. Other fields not transmitted will be set to default values.<br>The host name (with the suffix added if it exists) is verified to check whether it exceeds the maximum length of 46 characters.</p>
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set <p>Settings for the CVM host name.<br>Configuring the host name for windows instances is not supported.<br>When adding this attribute, you must transmit the CVM host name. Other fields not transmitted will be set to default values.<br>The host name (with the suffix added if it exists) is verified to check whether it exceeds the maximum length of 46 characters.</p>
 * @method InstanceNameSettings getInstanceNameSettings() Obtain <p>Settings related to the CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group will be set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group will be set as "as-{{ AutoScalingGroupName }}" and transmitted to CVM.<br>When adding this attribute, the CVM instance name must be transmitted. Other fields not transmitted will be set to default values.<br>It will verify whether the instance name (with the suffix added if it exists) exceeds the maximum length of 108 characters.</p>
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set <p>Settings related to the CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group will be set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group will be set as "as-{{ AutoScalingGroupName }}" and transmitted to CVM.<br>When adding this attribute, the CVM instance name must be transmitted. Other fields not transmitted will be set to default values.<br>It will verify whether the instance name (with the suffix added if it exists) exceeds the maximum length of 108 characters.</p>
 * @method EnhancedService getEnhancedService() Obtain <p>Enhanced service. This parameter can be used to specify whether to enable services such as cloud security and Cloud Monitor.</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set <p>Enhanced service. This parameter can be used to specify whether to enable services such as cloud security and Cloud Monitor.</p>
 * @method string getCamRoleName() Obtain <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
 * @method void setCamRoleName(string $CamRoleName) Set <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
 * @method string getHpcClusterId() Obtain <p>Hyper Computing Cluster ID. This parameter is currently not supported on the international site.</p>
 * @method void setHpcClusterId(string $HpcClusterId) Set <p>Hyper Computing Cluster ID. This parameter is currently not supported on the international site.</p>
 * @method IPv6InternetAccessible getIPv6InternetAccessible() Obtain <p>IPv6 public network bandwidth-related information settings. If the new instance includes an IPv6 address, this parameter can allocate public network bandwidth for the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) Set <p>IPv6 public network bandwidth-related information settings. If the new instance includes an IPv6 address, this parameter can allocate public network bandwidth for the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>Placement Group id. Only one can be specified. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a> API.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>Placement Group id. Only one can be specified. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a> API.</p>
 * @method LoginSettings getLoginSettings() Obtain <p>Instance login settings, including passwords, keys, or maintaining the image's original login settings.<br>Please note that specifying new login settings overwrites existing login settings. For example, if you previously used a password to login, use this parameter to change login settings to a key, and the original password is removed.</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set <p>Instance login settings, including passwords, keys, or maintaining the image's original login settings.<br>Please note that specifying new login settings overwrites existing login settings. For example, if you previously used a password to login, use this parameter to change login settings to a key, and the original password is removed.</p>
 * @method array getInstanceTags() Obtain <p>Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.<br>This parameter overrides the original instance tag list. To add a tag, import both the new tag and the original tags.</p>
 * @method void setInstanceTags(array $InstanceTags) Set <p>Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.<br>This parameter overrides the original instance tag list. To add a tag, import both the new tag and the original tags.</p>
 * @method string getImageFamily() Obtain <p>Image family name. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
 * @method void setImageFamily(string $ImageFamily) Set <p>Image family name. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
 * @method string getDedicatedClusterId() Obtain <p>Local exclusive cluster ID.</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set <p>Local exclusive cluster ID.</p>
 * @method Metadata getMetadata() Obtain <p>Custom metadata.</p>
 * @method void setMetadata(Metadata $Metadata) Set <p>Custom metadata.</p>
 * @method array getNetworkInterfaces() Obtain <p>Replace the ENI configuration in the launch configuration.</p><p>Input limits: up to 17 items; must explicitly include and can only contain one PRIMARY. AS does not auto-complete the primary ENI. An explicit empty array is illegal.</p><p>Field rules match CreateLaunchConfiguration. To clean up, call ClearLaunchConfigurationAttributes with ClearNetworkInterfaces=true.</p>
 * @method void setNetworkInterfaces(array $NetworkInterfaces) Set <p>Replace the ENI configuration in the launch configuration.</p><p>Input limits: up to 17 items; must explicitly include and can only contain one PRIMARY. AS does not auto-complete the primary ENI. An explicit empty array is illegal.</p><p>Field rules match CreateLaunchConfiguration. To clean up, call ClearLaunchConfigurationAttributes with ClearNetworkInterfaces=true.</p>
 */
class ModifyLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>Launch configuration ID. You can obtain it by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a> or calling the <a href="https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> API, and retrieving LaunchConfigurationId from the returned information.</p>
     */
    public $LaunchConfigurationId;

    /**
     * @var string <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can obtain an available image ID in the following ways:<br><li>For <code>public images</code>, <code>custom images</code>, and <code>shared images</code>, query the image ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>. For <code>service market images</code>, query the image ID in the <a href="https://market.cloud.tencent.com/list">cloud market</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and take the <code>ImageId</code> field from the returned information.</li></p>
     */
    public $ImageId;

    /**
     * @var array <p>Types of CVM instances. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>InstanceType specifies a single instance type. By setting InstanceTypes, you can specify multiple instance types and invalidate the original InstanceType. Specific values can be obtained by calling the API <a href="https://www.tencentcloud.com/document/product/213/33254">DescribeZoneInstanceConfigInfos</a> to obtain the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
     */
    public $InstanceTypes;

    /**
     * @var string <p>Instance type validation policy, effective during actual modification of InstanceTypes. Valid values include ALL and ANY, default value: ANY.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li> <li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li> Common causes of InstanceTypes unavailable include InstanceType sold out, corresponding cloud disk sold out. If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var string <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
     */
    public $LaunchConfigurationName;

    /**
     * @var string <p>The custom data after Base64 encoding should not exceed 16 KB. To clear UserData, assign it an empty string.</p>
     */
    public $UserData;

    /**
     * @var array <p>Security group to which the instance belongs. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API and getting the <code>SecurityGroupId</code> field in the return value.<br>If you specify this parameter, provide at least one security group, and the list order is sequential.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var InternetAccessible <p>Public network bandwidth-related information settings.<br>When the public network outbound bandwidth cap is 0 Mbps, it cannot be modified to enable assigning public IP. Accordingly, when assigning public IP is currently enabled, the modified public network outbound bandwidth cap must be greater than 0 Mbps.</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>Instance billing type. Valid values:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, which is a Monthly Subscription</li><li>CDCPAID: dedicated cluster payment</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can set attributes such as the duration of instance purchase and whether to enable auto-renewal.<br>If you change the payment mode of an instance to prepaid, this parameter is required. When changing from prepaid to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must specify the duration of instance purchase. Other fields not specified will be set to default values.<br>When modifying this field, the current payment mode must be prepaid.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var InstanceMarketOptionsRequest <p>Market-related options of the instance, such as bidding instance parameters.<br>If you change the payment mode of the instance to spot payment, this parameter is required. When changing from spot payment to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must transmit the bid price under relevant spot options. Other fields not transmitted will be set as default.<br>When modifying this field, the current payment mode must be spot payment.</p>
     */
    public $InstanceMarketOptions;

    /**
     * @var string <p>Cloud disk type selection policy. Value range:</p><li>ORIGINAL: use the set cloud disk type.</li><li>AUTOMATIC: automatically select the currently available cloud disk type.</li>
     */
    public $DiskTypePolicy;

    /**
     * @var SystemDisk <p>Instance system disk configuration information.</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>Instance data disk configuration information.<br>Supports up to 11 data disks. Apply the modification as a whole, so provide all values after modification.<br>The data disk type is consistent with the system disk type by default.</p>
     */
    public $DataDisks;

    /**
     * @var HostNameSettings <p>Settings for the CVM host name.<br>Configuring the host name for windows instances is not supported.<br>When adding this attribute, you must transmit the CVM host name. Other fields not transmitted will be set to default values.<br>The host name (with the suffix added if it exists) is verified to check whether it exceeds the maximum length of 46 characters.</p>
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings <p>Settings related to the CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group will be set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group will be set as "as-{{ AutoScalingGroupName }}" and transmitted to CVM.<br>When adding this attribute, the CVM instance name must be transmitted. Other fields not transmitted will be set to default values.<br>It will verify whether the instance name (with the suffix added if it exists) exceeds the maximum length of 108 characters.</p>
     */
    public $InstanceNameSettings;

    /**
     * @var EnhancedService <p>Enhanced service. This parameter can be used to specify whether to enable services such as cloud security and Cloud Monitor.</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
     */
    public $CamRoleName;

    /**
     * @var string <p>Hyper Computing Cluster ID. This parameter is currently not supported on the international site.</p>
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible <p>IPv6 public network bandwidth-related information settings. If the new instance includes an IPv6 address, this parameter can allocate public network bandwidth for the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
     */
    public $IPv6InternetAccessible;

    /**
     * @var array <p>Placement Group id. Only one can be specified. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a> API.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var LoginSettings <p>Instance login settings, including passwords, keys, or maintaining the image's original login settings.<br>Please note that specifying new login settings overwrites existing login settings. For example, if you previously used a password to login, use this parameter to change login settings to a key, and the original password is removed.</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.<br>This parameter overrides the original instance tag list. To add a tag, import both the new tag and the original tags.</p>
     */
    public $InstanceTags;

    /**
     * @var string <p>Image family name. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
     */
    public $ImageFamily;

    /**
     * @var string <p>Local exclusive cluster ID.</p>
     */
    public $DedicatedClusterId;

    /**
     * @var Metadata <p>Custom metadata.</p>
     */
    public $Metadata;

    /**
     * @var array <p>Replace the ENI configuration in the launch configuration.</p><p>Input limits: up to 17 items; must explicitly include and can only contain one PRIMARY. AS does not auto-complete the primary ENI. An explicit empty array is illegal.</p><p>Field rules match CreateLaunchConfiguration. To clean up, call ClearLaunchConfigurationAttributes with ClearNetworkInterfaces=true.</p>
     */
    public $NetworkInterfaces;

    /**
     * @param string $LaunchConfigurationId <p>Launch configuration ID. You can obtain it by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a> or calling the <a href="https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> API, and retrieving LaunchConfigurationId from the returned information.</p>
     * @param string $ImageId <p>Specify a valid <a href="https://www.tencentcloud.com/document/product/213/4940?from_cn_redirect=1">image</a> ID, such as <code>img-8toqc6s3</code>. There are four image types:<br><li>Public image</li><li>Custom image</li><li>Shared image</li><li>Service market image</li><br>You can obtain an available image ID in the following ways:<br><li>For <code>public images</code>, <code>custom images</code>, and <code>shared images</code>, query the image ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">console</a>. For <code>service market images</code>, query the image ID in the <a href="https://market.cloud.tencent.com/list">cloud market</a>.</li><li>Call the <a href="https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1">DescribeImages</a> API and take the <code>ImageId</code> field from the returned information.</li></p>
     * @param array $InstanceTypes <p>Types of CVM instances. Different instance models specify different resource specifications, and a maximum of 10 instance models are supported.<br>InstanceType specifies a single instance type. By setting InstanceTypes, you can specify multiple instance types and invalidate the original InstanceType. Specific values can be obtained by calling the API <a href="https://www.tencentcloud.com/document/product/213/33254">DescribeZoneInstanceConfigInfos</a> to obtain the latest specification table or see <a href="https://www.tencentcloud.com/document/product/213/11518?from_cn_redirect=1">Instance Specifications</a>.</p>
     * @param string $InstanceTypesCheckPolicy <p>Instance type validation policy, effective during actual modification of InstanceTypes. Valid values include ALL and ANY, default value: ANY.</p><li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li> <li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li> Common causes of InstanceTypes unavailable include InstanceType sold out, corresponding cloud disk sold out. If a model in InstanceTypes does not exist or has been removed, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     * @param string $LaunchConfigurationName <p>Display name of the launch configuration. The name only supports Chinese, English, numbers, underscores, separator "-", and decimal points. The maximum length cannot exceed 60 bytes.</p>
     * @param string $UserData <p>The custom data after Base64 encoding should not exceed 16 KB. To clear UserData, assign it an empty string.</p>
     * @param array $SecurityGroupIds <p>Security group to which the instance belongs. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API and getting the <code>SecurityGroupId</code> field in the return value.<br>If you specify this parameter, provide at least one security group, and the list order is sequential.</p>
     * @param InternetAccessible $InternetAccessible <p>Public network bandwidth-related information settings.<br>When the public network outbound bandwidth cap is 0 Mbps, it cannot be modified to enable assigning public IP. Accordingly, when assigning public IP is currently enabled, the modified public network outbound bandwidth cap must be greater than 0 Mbps.</p>
     * @param string $InstanceChargeType <p>Instance billing type. Valid values:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, which is a Monthly Subscription</li><li>CDCPAID: dedicated cluster payment</li>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Prepaid mode, that is, parameter settings related to monthly/annual subscription. By specifying this parameter, you can set attributes such as the duration of instance purchase and whether to enable auto-renewal.<br>If you change the payment mode of an instance to prepaid, this parameter is required. When changing from prepaid to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must specify the duration of instance purchase. Other fields not specified will be set to default values.<br>When modifying this field, the current payment mode must be prepaid.</p>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions <p>Market-related options of the instance, such as bidding instance parameters.<br>If you change the payment mode of the instance to spot payment, this parameter is required. When changing from spot payment to other payment modes, the original info in this field is automatically discarded.<br>When adding this field, you must transmit the bid price under relevant spot options. Other fields not transmitted will be set as default.<br>When modifying this field, the current payment mode must be spot payment.</p>
     * @param string $DiskTypePolicy <p>Cloud disk type selection policy. Value range:</p><li>ORIGINAL: use the set cloud disk type.</li><li>AUTOMATIC: automatically select the currently available cloud disk type.</li>
     * @param SystemDisk $SystemDisk <p>Instance system disk configuration information.</p>
     * @param array $DataDisks <p>Instance data disk configuration information.<br>Supports up to 11 data disks. Apply the modification as a whole, so provide all values after modification.<br>The data disk type is consistent with the system disk type by default.</p>
     * @param HostNameSettings $HostNameSettings <p>Settings for the CVM host name.<br>Configuring the host name for windows instances is not supported.<br>When adding this attribute, you must transmit the CVM host name. Other fields not transmitted will be set to default values.<br>The host name (with the suffix added if it exists) is verified to check whether it exceeds the maximum length of 46 characters.</p>
     * @param InstanceNameSettings $InstanceNameSettings <p>Settings related to the CVM instance name (InstanceName).<br>If the user sets this field in the launch configuration, the InstanceName of instances created by the scaling group will be set according to this field and transmitted to CVM. If the user does not set this field in the launch configuration, the InstanceName of instances created by the scaling group will be set as "as-{{ AutoScalingGroupName }}" and transmitted to CVM.<br>When adding this attribute, the CVM instance name must be transmitted. Other fields not transmitted will be set to default values.<br>It will verify whether the instance name (with the suffix added if it exists) exceeds the maximum length of 108 characters.</p>
     * @param EnhancedService $EnhancedService <p>Enhanced service. This parameter can be used to specify whether to enable services such as cloud security and Cloud Monitor.</p>
     * @param string $CamRoleName <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
     * @param string $HpcClusterId <p>Hyper Computing Cluster ID. This parameter is currently not supported on the international site.</p>
     * @param IPv6InternetAccessible $IPv6InternetAccessible <p>IPv6 public network bandwidth-related information settings. If the new instance includes an IPv6 address, this parameter can allocate public network bandwidth for the IPv6 address of the new instance. When the Ipv6AddressCount parameter of the scaling group associated with the launch configuration is 0, this parameter will not take effect.</p>
     * @param array $DisasterRecoverGroupIds <p>Placement Group id. Only one can be specified. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/17810?from_cn_redirect=1">DescribeDisasterRecoverGroups</a> API.</p>
     * @param LoginSettings $LoginSettings <p>Instance login settings, including passwords, keys, or maintaining the image's original login settings.<br>Please note that specifying new login settings overwrites existing login settings. For example, if you previously used a password to login, use this parameter to change login settings to a key, and the original password is removed.</p>
     * @param array $InstanceTags <p>Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.<br>This parameter overrides the original instance tag list. To add a tag, import both the new tag and the original tags.</p>
     * @param string $ImageFamily <p>Image family name. You can obtain this parameter by calling the <a href="https://www.tencentcloud.com/document/product/213/15715?from_cn_redirect=1">DescribeImages</a> API.</p>
     * @param string $DedicatedClusterId <p>Local exclusive cluster ID.</p>
     * @param Metadata $Metadata <p>Custom metadata.</p>
     * @param array $NetworkInterfaces <p>Replace the ENI configuration in the launch configuration.</p><p>Input limits: up to 17 items; must explicitly include and can only contain one PRIMARY. AS does not auto-complete the primary ENI. An explicit empty array is illegal.</p><p>Field rules match CreateLaunchConfiguration. To clean up, call ClearLaunchConfigurationAttributes with ClearNetworkInterfaces=true.</p>
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

        if (array_key_exists("InstanceTypesCheckPolicy",$param) and $param["InstanceTypesCheckPolicy"] !== null) {
            $this->InstanceTypesCheckPolicy = $param["InstanceTypesCheckPolicy"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
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

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
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

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
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
