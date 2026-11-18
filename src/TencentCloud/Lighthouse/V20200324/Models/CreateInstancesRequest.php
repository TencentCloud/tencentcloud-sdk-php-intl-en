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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances request structure.
 *
 * @method string getBundleId() Obtain Bundle ID. You can get it via the [DescribeBundles](https://intl.cloud.tencent.com/document/api/1207/47575?from_cn_redirect=1) API.
 * @method void setBundleId(string $BundleId) Set Bundle ID. You can get it via the [DescribeBundles](https://intl.cloud.tencent.com/document/api/1207/47575?from_cn_redirect=1) API.
 * @method string getBlueprintId() Obtain Image ID. You can get it via the [DescribeBlueprints](https://intl.cloud.tencent.com/document/api/1207/47689?from_cn_redirect=1) API.
 * @method void setBlueprintId(string $BlueprintId) Set Image ID. You can get it via the [DescribeBlueprints](https://intl.cloud.tencent.com/document/api/1207/47689?from_cn_redirect=1) API.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Yearly/monthly subscription information for the instance, including the purchase period, setting of auto-renewal, etc.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Yearly/monthly subscription information for the instance, including the purchase period, setting of auto-renewal, etc.
 * @method string getInstanceName() Obtain Instance display name.
 * @method void setInstanceName(string $InstanceName) Set Instance display name.
 * @method integer getInstanceCount() Obtain Number of the instances to purchase. For yearly/monthly subscribed instances, the value can be 1 to 30. The default value is `1`. Note that this number can not exceed the remaining quota under the current account.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of the instances to purchase. For yearly/monthly subscribed instances, the value can be 1 to 30. The default value is `1`. Note that this number can not exceed the remaining quota under the current account.
 * @method array getZones() Obtain List of availability zones. A random AZ is selected by default.
 * @method void setZones(array $Zones) Set List of availability zones. A random AZ is selected by default.
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
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
 * @method LoginConfiguration getLoginConfiguration() Obtain Login password of the instance. It's only available for Windows instances. If it's not specified, it means that the user choose to set the login password after the instance creation.
 * @method void setLoginConfiguration(LoginConfiguration $LoginConfiguration) Set Login password of the instance. It's only available for Windows instances. If it's not specified, it means that the user choose to set the login password after the instance creation.
 * @method array getContainers() Obtain Configuration of the containers to create
 * @method void setContainers(array $Containers) Set Configuration of the containers to create
 * @method boolean getAutoVoucher() Obtain Whether to use the vouchers automatically. It defaults to No.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to use the vouchers automatically. It defaults to No.
 * @method string getFirewallTemplateId() Obtain Firewall template ID. If not specified, the default firewall policy is used.
 * @method void setFirewallTemplateId(string $FirewallTemplateId) Set Firewall template ID. If not specified, the default firewall policy is used.
 * @method array getTags() Obtain Tag key and tag value. If multiple tags are specified, they are created and bound to the specified resources at the same time. A tag key can have only one value on a given resource. If you attempt to add a tag with an existing key, its value is updated to the new value. Tags that do not exist are created automatically. The array supports a maximum of 10 elements.
 * @method void setTags(array $Tags) Set Tag key and tag value. If multiple tags are specified, they are created and bound to the specified resources at the same time. A tag key can have only one value on a given resource. If you attempt to add a tag with an existing key, its value is updated to the new value. Tags that do not exist are created automatically. The array supports a maximum of 10 elements.
 * @method Command getInitCommand() Obtain The command to be automatically executed after the instance is created.
 * @method void setInitCommand(Command $InitCommand) Set The command to be automatically executed after the instance is created.
 * @method string getDomainName() Obtain The primary domain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
 * @method void setDomainName(string $DomainName) Set The primary domain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
 * @method string getSubdomain() Obtain The subdomain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
 * @method void setSubdomain(string $Subdomain) Set The subdomain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string Bundle ID. You can get it via the [DescribeBundles](https://intl.cloud.tencent.com/document/api/1207/47575?from_cn_redirect=1) API.
     */
    public $BundleId;

    /**
     * @var string Image ID. You can get it via the [DescribeBlueprints](https://intl.cloud.tencent.com/document/api/1207/47689?from_cn_redirect=1) API.
     */
    public $BlueprintId;

    /**
     * @var InstanceChargePrepaid Yearly/monthly subscription information for the instance, including the purchase period, setting of auto-renewal, etc.
     */
    public $InstanceChargePrepaid;

    /**
     * @var string Instance display name.
     */
    public $InstanceName;

    /**
     * @var integer Number of the instances to purchase. For yearly/monthly subscribed instances, the value can be 1 to 30. The default value is `1`. Note that this number can not exceed the remaining quota under the current account.
     */
    public $InstanceCount;

    /**
     * @var array List of availability zones. A random AZ is selected by default.
     */
    public $Zones;

    /**
     * @var boolean Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): send a normal request and create instance(s) if all the requirements are met.
     */
    public $DryRun;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var LoginConfiguration Login password of the instance. It's only available for Windows instances. If it's not specified, it means that the user choose to set the login password after the instance creation.
     */
    public $LoginConfiguration;

    /**
     * @var array Configuration of the containers to create
     */
    public $Containers;

    /**
     * @var boolean Whether to use the vouchers automatically. It defaults to No.
     */
    public $AutoVoucher;

    /**
     * @var string Firewall template ID. If not specified, the default firewall policy is used.
     */
    public $FirewallTemplateId;

    /**
     * @var array Tag key and tag value. If multiple tags are specified, they are created and bound to the specified resources at the same time. A tag key can have only one value on a given resource. If you attempt to add a tag with an existing key, its value is updated to the new value. Tags that do not exist are created automatically. The array supports a maximum of 10 elements.
     */
    public $Tags;

    /**
     * @var Command The command to be automatically executed after the instance is created.
     */
    public $InitCommand;

    /**
     * @var string The primary domain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
     */
    public $DomainName;

    /**
     * @var string The subdomain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
     */
    public $Subdomain;

    /**
     * @param string $BundleId Bundle ID. You can get it via the [DescribeBundles](https://intl.cloud.tencent.com/document/api/1207/47575?from_cn_redirect=1) API.
     * @param string $BlueprintId Image ID. You can get it via the [DescribeBlueprints](https://intl.cloud.tencent.com/document/api/1207/47689?from_cn_redirect=1) API.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Yearly/monthly subscription information for the instance, including the purchase period, setting of auto-renewal, etc.
     * @param string $InstanceName Instance display name.
     * @param integer $InstanceCount Number of the instances to purchase. For yearly/monthly subscribed instances, the value can be 1 to 30. The default value is `1`. Note that this number can not exceed the remaining quota under the current account.
     * @param array $Zones List of availability zones. A random AZ is selected by default.
     * @param boolean $DryRun Whether the request is a dry run only.
`true`: dry run only. The request will not create instance(s). A dry run can check whether all the required parameters are specified, whether the request format is right, whether the request exceeds service limits, and whether the specified CVMs are available.
If the dry run fails, the corresponding error code will be returned.
If the dry run succeeds, the RequestId will be returned.
`false` (default value): send a normal request and create instance(s) if all the requirements are met.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
     * @param LoginConfiguration $LoginConfiguration Login password of the instance. It's only available for Windows instances. If it's not specified, it means that the user choose to set the login password after the instance creation.
     * @param array $Containers Configuration of the containers to create
     * @param boolean $AutoVoucher Whether to use the vouchers automatically. It defaults to No.
     * @param string $FirewallTemplateId Firewall template ID. If not specified, the default firewall policy is used.
     * @param array $Tags Tag key and tag value. If multiple tags are specified, they are created and bound to the specified resources at the same time. A tag key can have only one value on a given resource. If you attempt to add a tag with an existing key, its value is updated to the new value. Tags that do not exist are created automatically. The array supports a maximum of 10 elements.
     * @param Command $InitCommand The command to be automatically executed after the instance is created.
     * @param string $DomainName The primary domain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
     * @param string $Subdomain The subdomain. Note: Once a domain is specified, only a single instance can be purchased (`InstanceCount` must be set to 1).
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("LoginConfiguration",$param) and $param["LoginConfiguration"] !== null) {
            $this->LoginConfiguration = new LoginConfiguration();
            $this->LoginConfiguration->deserialize($param["LoginConfiguration"]);
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new DockerContainerConfiguration();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("FirewallTemplateId",$param) and $param["FirewallTemplateId"] !== null) {
            $this->FirewallTemplateId = $param["FirewallTemplateId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InitCommand",$param) and $param["InitCommand"] !== null) {
            $this->InitCommand = new Command();
            $this->InitCommand->deserialize($param["InitCommand"]);
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }
    }
}
