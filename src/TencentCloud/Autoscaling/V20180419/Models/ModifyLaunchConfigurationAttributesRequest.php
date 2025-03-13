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
 * ModifyLaunchConfigurationAttributes request structure.
 *
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method string getImageId() Obtain [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
 * @method void setImageId(string $ImageId) Set [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
 * @method array getInstanceTypes() Obtain List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. Specifying the `InstanceTypes` field will invalidate the original `InstanceType`.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. Specifying the `InstanceTypes` field will invalidate the original `InstanceType`.
 * @method string getInstanceTypesCheckPolicy() Obtain InstanceType verification policy, which is effective when actual modification is made to InstanceTypes. Valid values include ALL and ANY and the default value is ANY.
<li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li>
<li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li>
Common reasons for unavailable InstanceTypes include the InstanceType being sold out, and the corresponding cloud disk being sold out.
If a model in InstanceTypes does not exist or has been abolished, a verification error will be reported regardless of the valid values set for InstanceTypesCheckPolicy.
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) Set InstanceType verification policy, which is effective when actual modification is made to InstanceTypes. Valid values include ALL and ANY and the default value is ANY.
<li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li>
<li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li>
Common reasons for unavailable InstanceTypes include the InstanceType being sold out, and the corresponding cloud disk being sold out.
If a model in InstanceTypes does not exist or has been abolished, a verification error will be reported regardless of the valid values set for InstanceTypesCheckPolicy.
 * @method string getLaunchConfigurationName() Obtain Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
 * @method string getUserData() Obtain Base64-encoded custom data of up to 16 KB. If you want to clear `UserData`, set it to an empty string.
 * @method void setUserData(string $UserData) Set Base64-encoded custom data of up to 16 KB. If you want to clear `UserData`, set it to an empty string.
 * @method array getSecurityGroupIds() Obtain Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
 * @method InternetAccessible getInternetAccessible() Obtain Information of the public network bandwidth configuration.
When the public outbound network bandwidth is 0 Mbps, assigning a public IP is not allowed. Accordingly, if a public IP is assigned, the new public network outbound bandwidth must be greater than 0 Mbps.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Information of the public network bandwidth configuration.
When the public outbound network bandwidth is 0 Mbps, assigning a public IP is not allowed. Accordingly, if a public IP is assigned, the new public network outbound bandwidth must be greater than 0 Mbps.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values:
<li>POSTPAID_BY_HOUR: pay-as-you-go hourly</li>
<li>SPOTPAID: spot instance</li>
<li> CDCPAID: dedicated cluster</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values:
<li>POSTPAID_BY_HOUR: pay-as-you-go hourly</li>
<li>SPOTPAID: spot instance</li>
<li> CDCPAID: dedicated cluster</li>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set the auto-renewal, and other attributes of the monthly-subscribed instances.
This parameter is required when changing the instance billing mode to monthly subscription. It will be automatically discarded after you choose another billing mode.
This field requires passing in the `Period` field. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is monthly subscription.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set the auto-renewal, and other attributes of the monthly-subscribed instances.
This parameter is required when changing the instance billing mode to monthly subscription. It will be automatically discarded after you choose another billing mode.
This field requires passing in the `Period` field. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is monthly subscription.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after you choose another instance billing mode.
This field requires passing in the `MaxPrice` field under the `SpotOptions`. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is spot instance.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after you choose another instance billing mode.
This field requires passing in the `MaxPrice` field under the `SpotOptions`. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is spot instance.
 * @method string getDiskTypePolicy() Obtain Cloud disk type selection policy. Valid values:
<li>ORIGINAL: Use the set cloud disk type.</li>
<li>AUTOMATIC: Automatically select the currently available cloud disk type.</li>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set Cloud disk type selection policy. Valid values:
<li>ORIGINAL: Use the set cloud disk type.</li>
<li>AUTOMATIC: Automatically select the currently available cloud disk type.</li>
 * @method SystemDisk getSystemDisk() Obtain Instance system disk configurations
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Instance system disk configurations
 * @method array getDataDisks() Obtain Configuration information of instance data disks.
Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
The default data disk should be the same as the system disk.
 * @method void setDataDisks(array $DataDisks) Set Configuration information of instance data disks.
Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
The default data disk should be the same as the system disk.
 * @method HostNameSettings getHostNameSettings() Obtain CVM hostname settings.
This field is not supported for Windows instances.
This field requires passing the `HostName` field. Other fields that are not passed in will use their default values.
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set CVM hostname settings.
This field is not supported for Windows instances.
This field requires passing the `HostName` field. Other fields that are not passed in will use their default values.
 * @method InstanceNameSettings getInstanceNameSettings() Obtain Settings of CVM instance names. 
If this field is configured in a launch configuration, the `InstanceName` of a CVM created by the scaling group will be generated according to the configuration; otherwise, it will be in the `as-{{AutoScalingGroupName }}` format.
This field requires passing in the `InstanceName` field. Other fields that are not passed in will use their default values.
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set Settings of CVM instance names. 
If this field is configured in a launch configuration, the `InstanceName` of a CVM created by the scaling group will be generated according to the configuration; otherwise, it will be in the `as-{{AutoScalingGroupName }}` format.
This field requires passing in the `InstanceName` field. Other fields that are not passed in will use their default values.
 * @method EnhancedService getEnhancedService() Obtain Specifies whether to enable additional services, such as security services and monitoring service.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Specifies whether to enable additional services, such as security services and monitoring service.
 * @method string getCamRoleName() Obtain CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
 * @method string getHpcClusterId() Obtain HPC ID<br>
Note: This field is default to empty
 * @method void setHpcClusterId(string $HpcClusterId) Set HPC ID<br>
Note: This field is default to empty
 * @method IPv6InternetAccessible getIPv6InternetAccessible() Obtain IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) Set IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID. Only one is allowed.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID. Only one is allowed.
 * @method LoginSettings getLoginSettings() Obtain Instance login settings, which include passwords, keys, or the original login settings inherited from the image. <br>Please note that specifying new login settings will overwrite the existing ones. For instance, if you previously used a password for login and then use this parameter to switch the login settings to a key, the original password will be removed.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login settings, which include passwords, keys, or the original login settings inherited from the image. <br>Please note that specifying new login settings will overwrite the existing ones. For instance, if you previously used a password for login and then use this parameter to switch the login settings to a key, the original password will be removed.
 * @method array getInstanceTags() Obtain Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.
This parameter will overwrite the original instance tag list. To add new tags, you need to pass the new tags along with the original tags.
 * @method void setInstanceTags(array $InstanceTags) Set Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.
This parameter will overwrite the original instance tag list. To add new tags, you need to pass the new tags along with the original tags.
 * @method string getImageFamily() Obtain Image family name.
 * @method void setImageFamily(string $ImageFamily) Set Image family name.
 * @method string getDedicatedClusterId() Obtain Cloud Dedicated Cluster (CDC) ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Cloud Dedicated Cluster (CDC) ID.
 * @method Metadata getMetadata() Obtain Custom metadata.
 * @method void setMetadata(Metadata $Metadata) Set Custom metadata.
 */
class ModifyLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
     */
    public $ImageId;

    /**
     * @var array List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. Specifying the `InstanceTypes` field will invalidate the original `InstanceType`.
     */
    public $InstanceTypes;

    /**
     * @var string InstanceType verification policy, which is effective when actual modification is made to InstanceTypes. Valid values include ALL and ANY and the default value is ANY.
<li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li>
<li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li>
Common reasons for unavailable InstanceTypes include the InstanceType being sold out, and the corresponding cloud disk being sold out.
If a model in InstanceTypes does not exist or has been abolished, a verification error will be reported regardless of the valid values set for InstanceTypesCheckPolicy.
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var string Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
     */
    public $LaunchConfigurationName;

    /**
     * @var string Base64-encoded custom data of up to 16 KB. If you want to clear `UserData`, set it to an empty string.
     */
    public $UserData;

    /**
     * @var array Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
     */
    public $SecurityGroupIds;

    /**
     * @var InternetAccessible Information of the public network bandwidth configuration.
When the public outbound network bandwidth is 0 Mbps, assigning a public IP is not allowed. Accordingly, if a public IP is assigned, the new public network outbound bandwidth must be greater than 0 Mbps.
     */
    public $InternetAccessible;

    /**
     * @var string Instance billing mode. Valid values:
<li>POSTPAID_BY_HOUR: pay-as-you-go hourly</li>
<li>SPOTPAID: spot instance</li>
<li> CDCPAID: dedicated cluster</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set the auto-renewal, and other attributes of the monthly-subscribed instances.
This parameter is required when changing the instance billing mode to monthly subscription. It will be automatically discarded after you choose another billing mode.
This field requires passing in the `Period` field. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is monthly subscription.
     */
    public $InstanceChargePrepaid;

    /**
     * @var InstanceMarketOptionsRequest Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after you choose another instance billing mode.
This field requires passing in the `MaxPrice` field under the `SpotOptions`. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is spot instance.
     */
    public $InstanceMarketOptions;

    /**
     * @var string Cloud disk type selection policy. Valid values:
<li>ORIGINAL: Use the set cloud disk type.</li>
<li>AUTOMATIC: Automatically select the currently available cloud disk type.</li>
     */
    public $DiskTypePolicy;

    /**
     * @var SystemDisk Instance system disk configurations
     */
    public $SystemDisk;

    /**
     * @var array Configuration information of instance data disks.
Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
The default data disk should be the same as the system disk.
     */
    public $DataDisks;

    /**
     * @var HostNameSettings CVM hostname settings.
This field is not supported for Windows instances.
This field requires passing the `HostName` field. Other fields that are not passed in will use their default values.
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings Settings of CVM instance names. 
If this field is configured in a launch configuration, the `InstanceName` of a CVM created by the scaling group will be generated according to the configuration; otherwise, it will be in the `as-{{AutoScalingGroupName }}` format.
This field requires passing in the `InstanceName` field. Other fields that are not passed in will use their default values.
     */
    public $InstanceNameSettings;

    /**
     * @var EnhancedService Specifies whether to enable additional services, such as security services and monitoring service.
     */
    public $EnhancedService;

    /**
     * @var string CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
     */
    public $CamRoleName;

    /**
     * @var string HPC ID<br>
Note: This field is default to empty
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
     */
    public $IPv6InternetAccessible;

    /**
     * @var array Placement group ID. Only one is allowed.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var LoginSettings Instance login settings, which include passwords, keys, or the original login settings inherited from the image. <br>Please note that specifying new login settings will overwrite the existing ones. For instance, if you previously used a password for login and then use this parameter to switch the login settings to a key, the original password will be removed.
     */
    public $LoginSettings;

    /**
     * @var array Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.
This parameter will overwrite the original instance tag list. To add new tags, you need to pass the new tags along with the original tags.
     */
    public $InstanceTags;

    /**
     * @var string Image family name.
     */
    public $ImageFamily;

    /**
     * @var string Cloud Dedicated Cluster (CDC) ID.
     */
    public $DedicatedClusterId;

    /**
     * @var Metadata Custom metadata.
     */
    public $Metadata;

    /**
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $ImageId [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><br/>You can obtain the image IDs in the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE).</li><li>You can also use the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
     * @param array $InstanceTypes List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. Specifying the `InstanceTypes` field will invalidate the original `InstanceType`.
     * @param string $InstanceTypesCheckPolicy InstanceType verification policy, which is effective when actual modification is made to InstanceTypes. Valid values include ALL and ANY and the default value is ANY.
<li>ALL: Verification passes if all InstanceTypes are available; otherwise, a verification error will be reported.</li>
<li>ANY: Verification passes if any InstanceType is available; otherwise, a verification error will be reported.</li>
Common reasons for unavailable InstanceTypes include the InstanceType being sold out, and the corresponding cloud disk being sold out.
If a model in InstanceTypes does not exist or has been abolished, a verification error will be reported regardless of the valid values set for InstanceTypesCheckPolicy.
     * @param string $LaunchConfigurationName Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
     * @param string $UserData Base64-encoded custom data of up to 16 KB. If you want to clear `UserData`, set it to an empty string.
     * @param array $SecurityGroupIds Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
     * @param InternetAccessible $InternetAccessible Information of the public network bandwidth configuration.
When the public outbound network bandwidth is 0 Mbps, assigning a public IP is not allowed. Accordingly, if a public IP is assigned, the new public network outbound bandwidth must be greater than 0 Mbps.
     * @param string $InstanceChargeType Instance billing mode. Valid values:
<li>POSTPAID_BY_HOUR: pay-as-you-go hourly</li>
<li>SPOTPAID: spot instance</li>
<li> CDCPAID: dedicated cluster</li>
     * @param InstanceChargePrepaid $InstanceChargePrepaid Parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set the auto-renewal, and other attributes of the monthly-subscribed instances.
This parameter is required when changing the instance billing mode to monthly subscription. It will be automatically discarded after you choose another billing mode.
This field requires passing in the `Period` field. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is monthly subscription.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after you choose another instance billing mode.
This field requires passing in the `MaxPrice` field under the `SpotOptions`. Other fields that are not passed in will use their default values.
This field can be modified only when the current billing mode is spot instance.
     * @param string $DiskTypePolicy Cloud disk type selection policy. Valid values:
<li>ORIGINAL: Use the set cloud disk type.</li>
<li>AUTOMATIC: Automatically select the currently available cloud disk type.</li>
     * @param SystemDisk $SystemDisk Instance system disk configurations
     * @param array $DataDisks Configuration information of instance data disks.
Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
The default data disk should be the same as the system disk.
     * @param HostNameSettings $HostNameSettings CVM hostname settings.
This field is not supported for Windows instances.
This field requires passing the `HostName` field. Other fields that are not passed in will use their default values.
     * @param InstanceNameSettings $InstanceNameSettings Settings of CVM instance names. 
If this field is configured in a launch configuration, the `InstanceName` of a CVM created by the scaling group will be generated according to the configuration; otherwise, it will be in the `as-{{AutoScalingGroupName }}` format.
This field requires passing in the `InstanceName` field. Other fields that are not passed in will use their default values.
     * @param EnhancedService $EnhancedService Specifies whether to enable additional services, such as security services and monitoring service.
     * @param string $CamRoleName CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
     * @param string $HpcClusterId HPC ID<br>
Note: This field is default to empty
     * @param IPv6InternetAccessible $IPv6InternetAccessible IPv6 public network bandwidth configuration. If the IPv6 address is available in the new instance, public network bandwidth can be allocated to the IPv6 address. This parameter is invalid if `Ipv6AddressCount` of the scaling group associated with the launch configuration is 0.
     * @param array $DisasterRecoverGroupIds Placement group ID. Only one is allowed.
     * @param LoginSettings $LoginSettings Instance login settings, which include passwords, keys, or the original login settings inherited from the image. <br>Please note that specifying new login settings will overwrite the existing ones. For instance, if you previously used a password for login and then use this parameter to switch the login settings to a key, the original password will be removed.
     * @param array $InstanceTags Instance tag list. By specifying this parameter, the instances added through scale-out can be bound to the tag. Up to 10 Tags can be specified.
This parameter will overwrite the original instance tag list. To add new tags, you need to pass the new tags along with the original tags.
     * @param string $ImageFamily Image family name.
     * @param string $DedicatedClusterId Cloud Dedicated Cluster (CDC) ID.
     * @param Metadata $Metadata Custom metadata.
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
    }
}
