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
 * @method string getImageId() Obtain Valid [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1).</li>
 * @method void setImageId(string $ImageId) Set Valid [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1).</li>
 * @method array getInstanceTypes() Obtain List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. After `InstanceTypes` is successfully specified for the launch configuration, the original `InstanceType` will be automatically invalidated.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. After `InstanceTypes` is successfully specified for the launch configuration, the original `InstanceType` will be automatically invalidated.
 * @method string getInstanceTypesCheckPolicy() Obtain Instance type verification policy which works when InstanceTypes is actually modified. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) Set Instance type verification policy which works when InstanceTypes is actually modified. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
 * @method string getLaunchConfigurationName() Obtain Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
 * @method string getUserData() Obtain Base64-encoded custom data of up to 16 KB. If you want to clear UserData, specify it as an empty string
 * @method void setUserData(string $UserData) Set Base64-encoded custom data of up to 16 KB. If you want to clear UserData, specify it as an empty string
 * @method array getSecurityGroupIds() Obtain Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
 * @method InternetAccessible getInternetAccessible() Obtain Information of the public network bandwidth configuration.
To modify it or even its subfield, you should specify all the subfields again.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Information of the public network bandwidth configuration.
To modify it or even its subfield, you should specify all the subfields again.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values:
<br><li>POSTPAID_BY_HOUR: pay-as-you-go hourly
<br><li>SPOTPAID: spot instance
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values:
<br><li>POSTPAID_BY_HOUR: pay-as-you-go hourly
<br><li>SPOTPAID: spot instance
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain 
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set 
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after the spot instance is changed to another instance billing mode.
To modify it or even its subfield, you should specify all the subfields again.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after the spot instance is changed to another instance billing mode.
To modify it or even its subfield, you should specify all the subfields again.
 * @method string getDiskTypePolicy() Obtain Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
 * @method SystemDisk getSystemDisk() Obtain Instance system disk configurations
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Instance system disk configurations
 * @method array getDataDisks() Obtain Instance data disk configurations. Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
 * @method void setDataDisks(array $DataDisks) Set Instance data disk configurations. Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
 */
class ModifyLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string Valid [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1).</li>
     */
    public $ImageId;

    /**
     * @var array List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. After `InstanceTypes` is successfully specified for the launch configuration, the original `InstanceType` will be automatically invalidated.
     */
    public $InstanceTypes;

    /**
     * @var string Instance type verification policy which works when InstanceTypes is actually modified. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var string Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
     */
    public $LaunchConfigurationName;

    /**
     * @var string Base64-encoded custom data of up to 16 KB. If you want to clear UserData, specify it as an empty string
     */
    public $UserData;

    /**
     * @var array Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
     */
    public $SecurityGroupIds;

    /**
     * @var InternetAccessible Information of the public network bandwidth configuration.
To modify it or even its subfield, you should specify all the subfields again.
     */
    public $InternetAccessible;

    /**
     * @var string Instance billing mode. Valid values:
<br><li>POSTPAID_BY_HOUR: pay-as-you-go hourly
<br><li>SPOTPAID: spot instance
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 
     */
    public $InstanceChargePrepaid;

    /**
     * @var InstanceMarketOptionsRequest Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after the spot instance is changed to another instance billing mode.
To modify it or even its subfield, you should specify all the subfields again.
     */
    public $InstanceMarketOptions;

    /**
     * @var string Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
     */
    public $DiskTypePolicy;

    /**
     * @var SystemDisk Instance system disk configurations
     */
    public $SystemDisk;

    /**
     * @var array Instance data disk configurations. Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
     */
    public $DataDisks;

    /**
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $ImageId Valid [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-8toqc6s3`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the image IDs; for `marketplace images`, query the image IDs through [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>This value can be obtained from the `ImageId` field in the return value of the [DescribeImages API](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1).</li>
     * @param array $InstanceTypes List of instance types. Each type specifies different resource specifications. This list contains up to 10 instance types.
The launch configuration uses `InstanceType` to indicate one single instance type and `InstanceTypes` to indicate multiple instance types. After `InstanceTypes` is successfully specified for the launch configuration, the original `InstanceType` will be automatically invalidated.
     * @param string $InstanceTypesCheckPolicy Instance type verification policy which works when InstanceTypes is actually modified. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will success only if all instance types (InstanceType) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any instance type (InstanceType) is available; otherwise, an error will be reported.

Common reasons why an instance type is unavailable include stock-out of the instance type or the corresponding cloud disk.
If a model in InstanceTypes does not exist or has been discontinued, a verification error will be reported regardless of the value of InstanceTypesCheckPolicy.
     * @param string $LaunchConfigurationName Display name of the launch configuration, which can contain Chinese characters, letters, numbers, underscores, separators ("-"), and decimal points with a maximum length of 60 bytes.
     * @param string $UserData Base64-encoded custom data of up to 16 KB. If you want to clear UserData, specify it as an empty string
     * @param array $SecurityGroupIds Security group to which the instance belongs. This parameter can be obtained from the `SecurityGroupId` field in the response of the [`DescribeSecurityGroups`](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API.
At least one security group is required for this parameter. The security group specified is sequential.
     * @param InternetAccessible $InternetAccessible Information of the public network bandwidth configuration.
To modify it or even its subfield, you should specify all the subfields again.
     * @param string $InstanceChargeType Instance billing mode. Valid values:
<br><li>POSTPAID_BY_HOUR: pay-as-you-go hourly
<br><li>SPOTPAID: spot instance
     * @param InstanceChargePrepaid $InstanceChargePrepaid 
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-related options for instances, such as parameters related to spot instances.
This parameter is required when changing the instance billing mode to spot instance. It will be automatically discarded after the spot instance is changed to another instance billing mode.
To modify it or even its subfield, you should specify all the subfields again.
     * @param string $DiskTypePolicy Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type
     * @param SystemDisk $SystemDisk Instance system disk configurations
     * @param array $DataDisks Instance data disk configurations. Up to 11 data disks can be specified and will be collectively modified. Please provide all the new values for the modification.
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
    }
}
