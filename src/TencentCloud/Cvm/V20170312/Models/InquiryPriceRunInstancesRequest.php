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
 * InquiryPriceRunInstances request structure.
 *
 * @method Placement getPlacement() Obtain Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
 * @method void setPlacement(Placement $Placement) Set Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
 * @method string getImageId() Obtain [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For IDs of `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the information; for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
 * @method void setImageId(string $ImageId) Set [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For IDs of `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the information; for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
 * @method string getInstanceChargeType() Obtain The instance [billing method](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>POSTPAID_BY_HOUR: hourly, pay-as-you-go<br>Default value: POSTPAID_BY_HOUR.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set The instance [billing method](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>POSTPAID_BY_HOUR: hourly, pay-as-you-go<br>Default value: POSTPAID_BY_HOUR.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
 * @method string getInstanceType() Obtain The instance model. Different resource specifications are specified for different models. For specific values, call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) to retrieve the latest specification list or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If the parameter is not specified, `S1.SMALL1` will be used by default.
 * @method void setInstanceType(string $InstanceType) Set The instance model. Different resource specifications are specified for different models. For specific values, call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) to retrieve the latest specification list or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If the parameter is not specified, `S1.SMALL1` will be used by default.
 * @method SystemDisk getSystemDisk() Obtain System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk configuration of the instance. If this parameter is not specified, the default value will be used.
 * @method array getDataDisks() Obtain The configuration information of the instance data disk. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC data disk or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks, or CLOUD_SSD data disks.
 * @method void setDataDisks(array $DataDisks) Set The configuration information of the instance data disk. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC data disk or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks, or CLOUD_SSD data disks.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain VPC configurations. You can use this parameter to specify the VPC ID, subnet ID, etc. If this parameter is not specified, the basic network will be used by default. If a VPC IP is specified in this parameter, the `InstanceCount` parameter can only be 1. 
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set VPC configurations. You can use this parameter to specify the VPC ID, subnet ID, etc. If this parameter is not specified, the basic network will be used by default. If a VPC IP is specified in this parameter, the `InstanceCount` parameter can only be 1. 
 * @method InternetAccessible getInternetAccessible() Obtain Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
 * @method integer getInstanceCount() Obtain Number of instances to be purchased. Value range: [1, 100]; default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see [CVM instance purchase limit](https://intl.cloud.tencent.com/document/product/213/2664).
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances to be purchased. Value range: [1, 100]; default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see [CVM instance purchase limit](https://intl.cloud.tencent.com/document/product/213/2664).
 * @method string getInstanceName() Obtain Instance name to be displayed.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances at the same time and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string, `server_{R:3}`. If you only purchase 1 instance, the instance will be named `server_3`; if you purchase 2, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances at the same time and do not specify a pattern string, the instance names will be suffixed by `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase 2 instances and name them as `server_`, the instance names will be displayed as `server_1` and `server_2`.</li><li>The instance name contains up to 60 characters (including pattern strings).
 * @method void setInstanceName(string $InstanceName) Set Instance name to be displayed.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances at the same time and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string, `server_{R:3}`. If you only purchase 1 instance, the instance will be named `server_3`; if you purchase 2, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances at the same time and do not specify a pattern string, the instance names will be suffixed by `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase 2 instances and name them as `server_`, the instance names will be displayed as `server_1` and `server_2`.</li><li>The instance name contains up to 60 characters (including pattern strings).
 * @method LoginSettings getLoginSettings() Obtain Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
 * @method array getSecurityGroupIds() Obtain Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will not be associated with any security group by default.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will not be associated with any security group by default.
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Monitor and Cloud Security. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Monitor and Cloud Security. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
 * @method string getClientToken() Obtain A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. <br>For more information, see 'How to ensure idempotency'.
 * @method void setClientToken(string $ClientToken) Set A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. <br>For more information, see 'How to ensure idempotency'.
 * @method string getHostName() Obtain Host name of the CVM. <br><li>Periods (.) or hyphens (-) cannot be the start or end of a host name or appear consecutively in a host name.<br><li>For Windows instances, the host name must be 2-15 characters long and can contain uppercase and lowercase letters, numbers, and hyphens (-). It cannot contain periods (.) or contain only numbers. <br><li>For other instances, such as Linux instances, the host name must be 2-30 characters long. It supports multiple periods (.) and allows uppercase and lowercase letters, numbers, and hyphens (-) between any two periods (.).
 * @method void setHostName(string $HostName) Set Host name of the CVM. <br><li>Periods (.) or hyphens (-) cannot be the start or end of a host name or appear consecutively in a host name.<br><li>For Windows instances, the host name must be 2-15 characters long and can contain uppercase and lowercase letters, numbers, and hyphens (-). It cannot contain periods (.) or contain only numbers. <br><li>For other instances, such as Linux instances, the host name must be 2-30 characters long. It supports multiple periods (.) and allows uppercase and lowercase letters, numbers, and hyphens (-) between any two periods (.).
 * @method array getTagSpecification() Obtain The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
 * @method void setTagSpecification(array $TagSpecification) Set The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain The market options of the instance.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set The market options of the instance.
 * @method string getHpcClusterId() Obtain HPC cluster ID.
 * @method void setHpcClusterId(string $HpcClusterId) Set HPC cluster ID.
 */
class InquiryPriceRunInstancesRequest extends AbstractModel
{
    /**
     * @var Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
     */
    public $Placement;

    /**
     * @var string [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For IDs of `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the information; for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
     */
    public $ImageId;

    /**
     * @var string The instance [billing method](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>POSTPAID_BY_HOUR: hourly, pay-as-you-go<br>Default value: POSTPAID_BY_HOUR.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @var string The instance model. Different resource specifications are specified for different models. For specific values, call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) to retrieve the latest specification list or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If the parameter is not specified, `S1.SMALL1` will be used by default.
     */
    public $InstanceType;

    /**
     * @var SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     */
    public $SystemDisk;

    /**
     * @var array The configuration information of the instance data disk. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC data disk or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks, or CLOUD_SSD data disks.
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud VPC configurations. You can use this parameter to specify the VPC ID, subnet ID, etc. If this parameter is not specified, the basic network will be used by default. If a VPC IP is specified in this parameter, the `InstanceCount` parameter can only be 1. 
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     */
    public $InternetAccessible;

    /**
     * @var integer Number of instances to be purchased. Value range: [1, 100]; default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see [CVM instance purchase limit](https://intl.cloud.tencent.com/document/product/213/2664).
     */
    public $InstanceCount;

    /**
     * @var string Instance name to be displayed.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances at the same time and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string, `server_{R:3}`. If you only purchase 1 instance, the instance will be named `server_3`; if you purchase 2, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances at the same time and do not specify a pattern string, the instance names will be suffixed by `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase 2 instances and name them as `server_`, the instance names will be displayed as `server_1` and `server_2`.</li><li>The instance name contains up to 60 characters (including pattern strings).
     */
    public $InstanceName;

    /**
     * @var LoginSettings Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
     */
    public $LoginSettings;

    /**
     * @var array Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will not be associated with any security group by default.
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Monitor and Cloud Security. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
     */
    public $EnhancedService;

    /**
     * @var string A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. <br>For more information, see 'How to ensure idempotency'.
     */
    public $ClientToken;

    /**
     * @var string Host name of the CVM. <br><li>Periods (.) or hyphens (-) cannot be the start or end of a host name or appear consecutively in a host name.<br><li>For Windows instances, the host name must be 2-15 characters long and can contain uppercase and lowercase letters, numbers, and hyphens (-). It cannot contain periods (.) or contain only numbers. <br><li>For other instances, such as Linux instances, the host name must be 2-30 characters long. It supports multiple periods (.) and allows uppercase and lowercase letters, numbers, and hyphens (-) between any two periods (.).
     */
    public $HostName;

    /**
     * @var array The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
     */
    public $TagSpecification;

    /**
     * @var InstanceMarketOptionsRequest The market options of the instance.
     */
    public $InstanceMarketOptions;

    /**
     * @var string HPC cluster ID.
     */
    public $HpcClusterId;

    /**
     * @param Placement $Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
     * @param string $ImageId [Image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images: <br/><li>Public images </li><li>Custom images </li><li>Shared images </li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways: <br/><li>For IDs of `public images`, `custom images`, and `shared images`, log in to the [console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE) to query the information; for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list). </li><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
     * @param string $InstanceChargeType The instance [billing method](https://intl.cloud.tencent.com/document/product/213/2180?from_cn_redirect=1).<br><li>POSTPAID_BY_HOUR: hourly, pay-as-you-go<br>Default value: POSTPAID_BY_HOUR.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Configuration of prepaid instances. You can use the parameter to specify the attributes of prepaid instances, such as the subscription period and the auto-renewal plan. This parameter is required for prepaid instances.
     * @param string $InstanceType The instance model. Different resource specifications are specified for different models. For specific values, call [DescribeInstanceTypeConfigs](https://intl.cloud.tencent.com/document/api/213/15749?from_cn_redirect=1) to retrieve the latest specification list or refer to [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1). If the parameter is not specified, `S1.SMALL1` will be used by default.
     * @param SystemDisk $SystemDisk System disk configuration of the instance. If this parameter is not specified, the default value will be used.
     * @param array $DataDisks The configuration information of the instance data disk. If this parameter is not specified, no data disk will be purchased by default. When purchasing, you can specify 21 data disks, which can contain at most 1 LOCAL_BASIC data disk or LOCAL_SSD data disk, and at most 20 CLOUD_BASIC data disks, CLOUD_PREMIUM data disks, or CLOUD_SSD data disks.
     * @param VirtualPrivateCloud $VirtualPrivateCloud VPC configurations. You can use this parameter to specify the VPC ID, subnet ID, etc. If this parameter is not specified, the basic network will be used by default. If a VPC IP is specified in this parameter, the `InstanceCount` parameter can only be 1. 
     * @param InternetAccessible $InternetAccessible Configuration of public network bandwidth. If this parameter is not specified, 0 Mbps will be used by default.
     * @param integer $InstanceCount Number of instances to be purchased. Value range: [1, 100]; default value: 1. The specified number of instances to be purchased cannot exceed the remaining quota allowed for the user. For more information on quota, see [CVM instance purchase limit](https://intl.cloud.tencent.com/document/product/213/2664).
     * @param string $InstanceName Instance name to be displayed.<br><li>If this parameter is not specified, "Unnamed" will be displayed by default.</li><li>If you purchase multiple instances at the same time and specify a pattern string `{R:x}`, numbers `[x, x+n-1]` will be generated, where `n` represents the number of instances purchased. For example, you specify a pattern string, `server_{R:3}`. If you only purchase 1 instance, the instance will be named `server_3`; if you purchase 2, they will be named `server_3` and `server_4`. You can specify multiple pattern strings in the format of `{R:x}`.</li><li>If you purchase multiple instances at the same time and do not specify a pattern string, the instance names will be suffixed by `1, 2...n`, where `n` represents the number of instances purchased. For example, if you purchase 2 instances and name them as `server_`, the instance names will be displayed as `server_1` and `server_2`.</li><li>The instance name contains up to 60 characters (including pattern strings).
     * @param LoginSettings $LoginSettings Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
     * @param array $SecurityGroupIds Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response. If this parameter is not specified, the instance will not be associated with any security group by default.
     * @param EnhancedService $EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Monitor and Cloud Security. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
     * @param string $ClientToken A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. <br>For more information, see 'How to ensure idempotency'.
     * @param string $HostName Host name of the CVM. <br><li>Periods (.) or hyphens (-) cannot be the start or end of a host name or appear consecutively in a host name.<br><li>For Windows instances, the host name must be 2-15 characters long and can contain uppercase and lowercase letters, numbers, and hyphens (-). It cannot contain periods (.) or contain only numbers. <br><li>For other instances, such as Linux instances, the host name must be 2-30 characters long. It supports multiple periods (.) and allows uppercase and lowercase letters, numbers, and hyphens (-) between any two periods (.).
     * @param array $TagSpecification The tag description list. This parameter is used to bind a tag to a resource instance. A tag can only be bound to CVM instances.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions The market options of the instance.
     * @param string $HpcClusterId HPC cluster ID.
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

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
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

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }
    }
}
