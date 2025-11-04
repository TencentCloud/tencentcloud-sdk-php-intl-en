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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunInstances request structure.
 *
 * @method string getInstanceChargeType() Obtain Instance [billing type](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1). <br><li>`PREPAID`: Monthly Subscription, used for at least one month <br><li>`POSTPAID_BY_HOUR`: Hourly-based pay-as-you-go <br><li>`CDHPAID`: [Dedicated CVM](https://www.tencentcloud.com/document/product/416/5068?lang=en&pg=) (associated with a dedicated host. Resource usage of the dedicated host is free of charge.) <br><li>`SPOTPAID`: [Spot instance](https://intl.cloud.tencent.com/document/product/213/17817)<br>Default value: `POSTPAID_BY_HOUR`.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance [billing type](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1). <br><li>`PREPAID`: Monthly Subscription, used for at least one month <br><li>`POSTPAID_BY_HOUR`: Hourly-based pay-as-you-go <br><li>`CDHPAID`: [Dedicated CVM](https://www.tencentcloud.com/document/product/416/5068?lang=en&pg=) (associated with a dedicated host. Resource usage of the dedicated host is free of charge.) <br><li>`SPOTPAID`: [Spot instance](https://intl.cloud.tencent.com/document/product/213/17817)<br>Default value: `POSTPAID_BY_HOUR`.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method Placement getPlacement() Obtain Location of the instance. You can use this parameter to specify the availability zone, project, and CDH (for dedicated CVMs).
 <b>Note: `Placement` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `Placement` prevails.</b>
 * @method void setPlacement(Placement $Placement) Set Location of the instance. You can use this parameter to specify the availability zone, project, and CDH (for dedicated CVMs).
 <b>Note: `Placement` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `Placement` prevails.</b>
 * @method string getInstanceType() Obtain The instance model. 
<br><li>To view specific values for `POSTPAID_BY_HOUR` instances, you can call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). <br><li>For `CDHPAID` instances, the value of this parameter is in the format of `CDH_XCXG` based on the number of CPU cores and memory capacity. For example, if you want to create a CDH instance with a single-core CPU and 1 GB memory, specify this parameter as `CDH_1C1G`.
 * @method void setInstanceType(string $InstanceType) Set The instance model. 
<br><li>To view specific values for `POSTPAID_BY_HOUR` instances, you can call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). <br><li>For `CDHPAID` instances, the value of this parameter is in the format of `CDH_XCXG` based on the number of CPU cores and memory capacity. For example, if you want to create a CDH instance with a single-core CPU and 1 GB memory, specify this parameter as `CDH_1C1G`.
 * @method string getImageId() Obtain The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
 <b>Note: `ImageId` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `ImageId` prevails.</b>
 * @method void setImageId(string $ImageId) Set The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
 <b>Note: `ImageId` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `ImageId` prevails.</b>
 * @method SystemDisk getSystemDisk() Obtain System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method array getDataDisks() Obtain The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
 * @method void setDataDisks(array $DataDisks) Set The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be the same as the number of VPC IPs, which cannot be greater than 20.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be the same as the number of VPC IPs, which cannot be greater than 20.
 * @method InternetAccessible getInternetAccessible() Obtain Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method integer getInstanceCount() Obtain The number of instances to be purchased. Value range for pay-as-you-go instances: [1, 100]. Default value: `1`. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on the quota, see [Quota for CVM Instances](https://intl.cloud.tencent.com/document/product/213/2664).
 * @method void setInstanceCount(integer $InstanceCount) Set The number of instances to be purchased. Value range for pay-as-you-go instances: [1, 100]. Default value: `1`. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on the quota, see [Quota for CVM Instances](https://intl.cloud.tencent.com/document/product/213/2664).
 * @method integer getMinCount() Obtain Specifies the minimum number of instances to create. value range: positive integer not greater than InstanceCount.
Specifies the minimum purchasable quantity, guarantees to create at least MinCount instances, and creates InstanceCount instances as much as possible.
Insufficient inventory to meet the minimum purchasable quantity will trigger an error info indicating insufficient stock.
Only applicable to accounts, regions, and billing modes (annual/monthly subscription, pay-as-you-go, spot instance, exclusive sales) with partial support.
 * @method void setMinCount(integer $MinCount) Set Specifies the minimum number of instances to create. value range: positive integer not greater than InstanceCount.
Specifies the minimum purchasable quantity, guarantees to create at least MinCount instances, and creates InstanceCount instances as much as possible.
Insufficient inventory to meet the minimum purchasable quantity will trigger an error info indicating insufficient stock.
Only applicable to accounts, regions, and billing modes (annual/monthly subscription, pay-as-you-go, spot instance, exclusive sales) with partial support.
 * @method string getInstanceName() Obtain Instance display name. <li>if no instance display name is specified, it will display 'unnamed' by default.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it means generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}`: when purchasing 1 instance, the instance display name is `server_3`; when purchasing 2 instances, the instance display names are `server_3` and `server_4` respectively. supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances without specifying a pattern string, suffixes `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, `server_`: when purchasing 2 instances, the instance display names are `server_1` and `server_2` respectively.</li> <li>supports up to 128 characters (including pattern strings).</li>.
 * @method void setInstanceName(string $InstanceName) Set Instance display name. <li>if no instance display name is specified, it will display 'unnamed' by default.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it means generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}`: when purchasing 1 instance, the instance display name is `server_3`; when purchasing 2 instances, the instance display names are `server_3` and `server_4` respectively. supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances without specifying a pattern string, suffixes `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, `server_`: when purchasing 2 instances, the instance display names are `server_1` and `server_2` respectively.</li> <li>supports up to 128 characters (including pattern strings).</li>.
 * @method LoginSettings getLoginSettings() Obtain Instance login settings. You can use this parameter to set the login method, password and key of the instance, or keep the original login settings of the image. If it's not specified, the user needs to set the login password using the "Reset password" option in the CVM console or calling the API `ResetInstancesPassword` to complete the creation of the CVM instance(s).
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login settings. You can use this parameter to set the login method, password and key of the instance, or keep the original login settings of the image. If it's not specified, the user needs to set the login password using the "Reset password" option in the CVM console or calling the API `ResetInstancesPassword` to complete the creation of the CVM instance(s).
 * @method array getSecurityGroupIds() Obtain Security group to which an instance belongs. obtain this parameter by calling the `SecurityGroupId` field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, bind the default security group under the designated project. if the default security group does not exist, automatically create it.

 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which an instance belongs. obtain this parameter by calling the `SecurityGroupId` field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, bind the default security group under the designated project. if the default security group does not exist, automatically create it.

 * @method EnhancedService getEnhancedService() Obtain Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
 * @method string getHostName() Obtain Hostname of an instance.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li><br><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server{R:3}`. If you purchase only one instance, the hostname will be `server3`; if you purchase two, they will be `server3` and `server4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><br><li>If you purchase multiple instances without specifying a pattern string, the hostnames will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server`, the hostnames will be `server1` and `server2`.</li>
 * @method void setHostName(string $HostName) Set Hostname of an instance.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li><br><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server{R:3}`. If you purchase only one instance, the hostname will be `server3`; if you purchase two, they will be `server3` and `server4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><br><li>If you purchase multiple instances without specifying a pattern string, the hostnames will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server`, the hostnames will be `server1` and `server2`.</li>
 * @method ActionTimer getActionTimer() Obtain Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
 * @method void setActionTimer(ActionTimer $ActionTimer) Set Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID. You can only specify one.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID. You can only specify one.
 * @method array getTagSpecification() Obtain List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
 * @method void setTagSpecification(array $TagSpecification) Set List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain The market options of the instance.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set The market options of the instance.
 * @method string getUserData() Obtain User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
 * @method void setUserData(string $UserData) Set User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
 * @method Metadata getMetadata() Obtain Custom metadata. specifies the support for creating custom metadata key-value pairs when creating a CVM.
**Note: this field is in beta test.**.
 * @method void setMetadata(Metadata $Metadata) Set Custom metadata. specifies the support for creating custom metadata key-value pairs when creating a CVM.
**Note: this field is in beta test.**.
 * @method boolean getDryRun() Obtain Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): Send a normal request and create instance(s) if all the requirements are met.
 * @method void setDryRun(boolean $DryRun) Set Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): Send a normal request and create instance(s) if all the requirements are met.
 * @method CpuTopology getCpuTopology() Obtain Information about the CPU topology of an instance. If not specified, it is determined by system resources.
 * @method void setCpuTopology(CpuTopology $CpuTopology) Set Information about the CPU topology of an instance. If not specified, it is determined by system resources.
 * @method string getCamRoleName() Obtain CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
 * @method string getHpcClusterId() Obtain HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
 * @method void setHpcClusterId(string $HpcClusterId) Set HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
 * @method LaunchTemplate getLaunchTemplate() Obtain Instance launch template.
 * @method void setLaunchTemplate(LaunchTemplate $LaunchTemplate) Set Instance launch template.
 * @method string getDedicatedClusterId() Obtain Specify the ID of the dedicated cluster where the CVM is created.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Specify the ID of the dedicated cluster where the CVM is created.
 * @method array getChcIds() Obtain Specify the CHC physical server that used to create the CHC CVM.
 * @method void setChcIds(array $ChcIds) Set Specify the CHC physical server that used to create the CHC CVM.
 * @method boolean getDisableApiTermination() Obtain Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: false.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: false.
 * @method boolean getEnableJumboFrame() Obtain Whether the instance enables jumbo frames. valid values:<br><li/> true: means the instance enables jumbo frames. only models supporting jumbo frames can be set to true.<br><li/> false: means the instance disables jumbo frames. only models supporting jumbo frames can be set to false.<br> instance specifications supporting jumbo frames: [instance specifications](https://www.tencentcloud.comom/document/product/213/11518?from_cn_redirect=1).
 * @method void setEnableJumboFrame(boolean $EnableJumboFrame) Set Whether the instance enables jumbo frames. valid values:<br><li/> true: means the instance enables jumbo frames. only models supporting jumbo frames can be set to true.<br><li/> false: means the instance disables jumbo frames. only models supporting jumbo frames can be set to false.<br> instance specifications supporting jumbo frames: [instance specifications](https://www.tencentcloud.comom/document/product/213/11518?from_cn_redirect=1).
 */
class RunInstancesRequest extends AbstractModel
{
    /**
     * @var string Instance [billing type](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1). <br><li>`PREPAID`: Monthly Subscription, used for at least one month <br><li>`POSTPAID_BY_HOUR`: Hourly-based pay-as-you-go <br><li>`CDHPAID`: [Dedicated CVM](https://www.tencentcloud.com/document/product/416/5068?lang=en&pg=) (associated with a dedicated host. Resource usage of the dedicated host is free of charge.) <br><li>`SPOTPAID`: [Spot instance](https://intl.cloud.tencent.com/document/product/213/17817)<br>Default value: `POSTPAID_BY_HOUR`.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     */
    public $InstanceChargePrepaid;

    /**
     * @var Placement Location of the instance. You can use this parameter to specify the availability zone, project, and CDH (for dedicated CVMs).
 <b>Note: `Placement` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `Placement` prevails.</b>
     */
    public $Placement;

    /**
     * @var string The instance model. 
<br><li>To view specific values for `POSTPAID_BY_HOUR` instances, you can call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). <br><li>For `CDHPAID` instances, the value of this parameter is in the format of `CDH_XCXG` based on the number of CPU cores and memory capacity. For example, if you want to create a CDH instance with a single-core CPU and 1 GB memory, specify this parameter as `CDH_1C1G`.
     */
    public $InstanceType;

    /**
     * @var string The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
 <b>Note: `ImageId` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `ImageId` prevails.</b>
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
     * @var VirtualPrivateCloud Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be the same as the number of VPC IPs, which cannot be greater than 20.
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     */
    public $InternetAccessible;

    /**
     * @var integer The number of instances to be purchased. Value range for pay-as-you-go instances: [1, 100]. Default value: `1`. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on the quota, see [Quota for CVM Instances](https://intl.cloud.tencent.com/document/product/213/2664).
     */
    public $InstanceCount;

    /**
     * @var integer Specifies the minimum number of instances to create. value range: positive integer not greater than InstanceCount.
Specifies the minimum purchasable quantity, guarantees to create at least MinCount instances, and creates InstanceCount instances as much as possible.
Insufficient inventory to meet the minimum purchasable quantity will trigger an error info indicating insufficient stock.
Only applicable to accounts, regions, and billing modes (annual/monthly subscription, pay-as-you-go, spot instance, exclusive sales) with partial support.
     */
    public $MinCount;

    /**
     * @var string Instance display name. <li>if no instance display name is specified, it will display 'unnamed' by default.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it means generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}`: when purchasing 1 instance, the instance display name is `server_3`; when purchasing 2 instances, the instance display names are `server_3` and `server_4` respectively. supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances without specifying a pattern string, suffixes `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, `server_`: when purchasing 2 instances, the instance display names are `server_1` and `server_2` respectively.</li> <li>supports up to 128 characters (including pattern strings).</li>.
     */
    public $InstanceName;

    /**
     * @var LoginSettings Instance login settings. You can use this parameter to set the login method, password and key of the instance, or keep the original login settings of the image. If it's not specified, the user needs to set the login password using the "Reset password" option in the CVM console or calling the API `ResetInstancesPassword` to complete the creation of the CVM instance(s).
     */
    public $LoginSettings;

    /**
     * @var array Security group to which an instance belongs. obtain this parameter by calling the `SecurityGroupId` field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, bind the default security group under the designated project. if the default security group does not exist, automatically create it.

     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
     */
    public $EnhancedService;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var string Hostname of an instance.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li><br><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server{R:3}`. If you purchase only one instance, the hostname will be `server3`; if you purchase two, they will be `server3` and `server4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><br><li>If you purchase multiple instances without specifying a pattern string, the hostnames will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server`, the hostnames will be `server1` and `server2`.</li>
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
     * @var array List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
     */
    public $TagSpecification;

    /**
     * @var InstanceMarketOptionsRequest The market options of the instance.
     */
    public $InstanceMarketOptions;

    /**
     * @var string User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
     */
    public $UserData;

    /**
     * @var Metadata Custom metadata. specifies the support for creating custom metadata key-value pairs when creating a CVM.
**Note: this field is in beta test.**.
     */
    public $Metadata;

    /**
     * @var boolean Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): Send a normal request and create instance(s) if all the requirements are met.
     */
    public $DryRun;

    /**
     * @var CpuTopology Information about the CPU topology of an instance. If not specified, it is determined by system resources.
     */
    public $CpuTopology;

    /**
     * @var string CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
     */
    public $CamRoleName;

    /**
     * @var string HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
     */
    public $HpcClusterId;

    /**
     * @var LaunchTemplate Instance launch template.
     */
    public $LaunchTemplate;

    /**
     * @var string Specify the ID of the dedicated cluster where the CVM is created.
     */
    public $DedicatedClusterId;

    /**
     * @var array Specify the CHC physical server that used to create the CHC CVM.
     */
    public $ChcIds;

    /**
     * @var boolean Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: false.
     */
    public $DisableApiTermination;

    /**
     * @var boolean Whether the instance enables jumbo frames. valid values:<br><li/> true: means the instance enables jumbo frames. only models supporting jumbo frames can be set to true.<br><li/> false: means the instance disables jumbo frames. only models supporting jumbo frames can be set to false.<br> instance specifications supporting jumbo frames: [instance specifications](https://www.tencentcloud.comom/document/product/213/11518?from_cn_redirect=1).
     */
    public $EnableJumboFrame;

    /**
     * @param string $InstanceChargeType Instance [billing type](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1). <br><li>`PREPAID`: Monthly Subscription, used for at least one month <br><li>`POSTPAID_BY_HOUR`: Hourly-based pay-as-you-go <br><li>`CDHPAID`: [Dedicated CVM](https://www.tencentcloud.com/document/product/416/5068?lang=en&pg=) (associated with a dedicated host. Resource usage of the dedicated host is free of charge.) <br><li>`SPOTPAID`: [Spot instance](https://intl.cloud.tencent.com/document/product/213/17817)<br>Default value: `POSTPAID_BY_HOUR`.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     * @param Placement $Placement Location of the instance. You can use this parameter to specify the availability zone, project, and CDH (for dedicated CVMs).
 <b>Note: `Placement` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `Placement` prevails.</b>
     * @param string $InstanceType The instance model. 
<br><li>To view specific values for `POSTPAID_BY_HOUR` instances, you can call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). <br><li>For `CDHPAID` instances, the value of this parameter is in the format of `CDH_XCXG` based on the number of CPU cores and memory capacity. For example, if you want to create a CDH instance with a single-core CPU and 1 GB memory, specify this parameter as `CDH_1C1G`.
     * @param string $ImageId The [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are three types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><br/>To check the image ID:<br/><li>For public images, custom images, and shared images, go to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1), pass in `InstanceType` to retrieve the list of images supported by the current model, and then find the `ImageId` in the response.</li>
 <b>Note: `ImageId` is required when `LaunchTemplate` is not specified. If both the parameters are passed in, `ImageId` prevails.</b>
     * @param SystemDisk $SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     * @param array $DataDisks The configuration information of instance data disks. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC, CLOUD_PREMIUM, or CLOUD_SSD data disks.
     * @param VirtualPrivateCloud $VirtualPrivateCloud Configuration information of VPC. This parameter is used to specify VPC ID and subnet ID, etc. If a VPC IP is specified in this parameter, it indicates the primary ENI IP of each instance. The value of parameter InstanceCount must be the same as the number of VPC IPs, which cannot be greater than 20.
     * @param InternetAccessible $InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     * @param integer $InstanceCount The number of instances to be purchased. Value range for pay-as-you-go instances: [1, 100]. Default value: `1`. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on the quota, see [Quota for CVM Instances](https://intl.cloud.tencent.com/document/product/213/2664).
     * @param integer $MinCount Specifies the minimum number of instances to create. value range: positive integer not greater than InstanceCount.
Specifies the minimum purchasable quantity, guarantees to create at least MinCount instances, and creates InstanceCount instances as much as possible.
Insufficient inventory to meet the minimum purchasable quantity will trigger an error info indicating insufficient stock.
Only applicable to accounts, regions, and billing modes (annual/monthly subscription, pay-as-you-go, spot instance, exclusive sales) with partial support.
     * @param string $InstanceName Instance display name. <li>if no instance display name is specified, it will display 'unnamed' by default.</li> <li>when purchasing multiple instances, if the pattern string `{R:x}` is specified, it means generating numbers `[x, x+n-1]`, where `n` represents the number of purchased instances. for example, `server_{R:3}`: when purchasing 1 instance, the instance display name is `server_3`; when purchasing 2 instances, the instance display names are `server_3` and `server_4` respectively. supports specifying multiple pattern strings `{R:x}`.</li> <li>when purchasing multiple instances without specifying a pattern string, suffixes `1, 2...n` will be added to the instance display name, where `n` represents the number of purchased instances. for example, `server_`: when purchasing 2 instances, the instance display names are `server_1` and `server_2` respectively.</li> <li>supports up to 128 characters (including pattern strings).</li>.
     * @param LoginSettings $LoginSettings Instance login settings. You can use this parameter to set the login method, password and key of the instance, or keep the original login settings of the image. If it's not specified, the user needs to set the login password using the "Reset password" option in the CVM console or calling the API `ResetInstancesPassword` to complete the creation of the CVM instance(s).
     * @param array $SecurityGroupIds Security group to which an instance belongs. obtain this parameter by calling the `SecurityGroupId` field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, bind the default security group under the designated project. if the default security group does not exist, automatically create it.

     * @param EnhancedService $EnhancedService Enhanced service. You can use this parameter to specify whether to enable services such as Anti-DDoS and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Anti-DDoS are enabled for public images by default. However, for custom images and images from the marketplace, Anti-DDoS and Cloud Monitor are not enabled by default. The original services in the image will be retained.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
     * @param string $HostName Hostname of an instance.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li><br><li>If you purchase multiple instances and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string `server{R:3}`. If you purchase only one instance, the hostname will be `server3`; if you purchase two, they will be `server3` and `server4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><br><li>If you purchase multiple instances without specifying a pattern string, the hostnames will be suffixed with `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase two instances with the name `server`, the hostnames will be `server1` and `server2`.</li>
     * @param ActionTimer $ActionTimer Scheduled tasks. You can use this parameter to specify scheduled tasks for the instance. Only scheduled termination is supported.
     * @param array $DisasterRecoverGroupIds Placement group ID. You can only specify one.
     * @param array $TagSpecification List of tag description. By specifying this parameter, the tag can be bound to the corresponding CVM and CBS instances at the same time.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions The market options of the instance.
     * @param string $UserData User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
     * @param Metadata $Metadata Custom metadata. specifies the support for creating custom metadata key-value pairs when creating a CVM.
**Note: this field is in beta test.**.
     * @param boolean $DryRun Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): Send a normal request and create instance(s) if all the requirements are met.
     * @param CpuTopology $CpuTopology Information about the CPU topology of an instance. If not specified, it is determined by system resources.
     * @param string $CamRoleName CAM role name, which can be obtained from the `roleName` field in the response of the [`DescribeRoleList`](https://intl.cloud.tencent.com/document/product/598/36223?from_cn_redirect=1) API.
     * @param string $HpcClusterId HPC cluster ID. The HPC cluster must and can only be specified for a high-performance computing instance.
     * @param LaunchTemplate $LaunchTemplate Instance launch template.
     * @param string $DedicatedClusterId Specify the ID of the dedicated cluster where the CVM is created.
     * @param array $ChcIds Specify the CHC physical server that used to create the CHC CVM.
     * @param boolean $DisableApiTermination Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<br><li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><br><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li><br><br>Default value: false.
     * @param boolean $EnableJumboFrame Whether the instance enables jumbo frames. valid values:<br><li/> true: means the instance enables jumbo frames. only models supporting jumbo frames can be set to true.<br><li/> false: means the instance disables jumbo frames. only models supporting jumbo frames can be set to false.<br> instance specifications supporting jumbo frames: [instance specifications](https://www.tencentcloud.comom/document/product/213/11518?from_cn_redirect=1).
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
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

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
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

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("CpuTopology",$param) and $param["CpuTopology"] !== null) {
            $this->CpuTopology = new CpuTopology();
            $this->CpuTopology->deserialize($param["CpuTopology"]);
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("LaunchTemplate",$param) and $param["LaunchTemplate"] !== null) {
            $this->LaunchTemplate = new LaunchTemplate();
            $this->LaunchTemplate->deserialize($param["LaunchTemplate"]);
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("EnableJumboFrame",$param) and $param["EnableJumboFrame"] !== null) {
            $this->EnableJumboFrame = $param["EnableJumboFrame"];
        }
    }
}
