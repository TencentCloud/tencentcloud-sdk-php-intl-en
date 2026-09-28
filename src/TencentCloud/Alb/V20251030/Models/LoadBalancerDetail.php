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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load balancing details
 *
 * @method AccessLogConfig getAccessLogConfig() Obtain Access log configuration.
 * @method void setAccessLogConfig(AccessLogConfig $AccessLogConfig) Set Access log configuration.
 * @method string getAddressIpVersion() Obtain IP address version. Value: IPv4 or IPv6.
 * @method void setAddressIpVersion(string $AddressIpVersion) Set IP address version. Value: IPv4 or IPv6.
 * @method string getAddressType() Obtain Network address type of the application CLB instance. Valid values:

- **Internet/Public**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet/Internal**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.


 * @method void setAddressType(string $AddressType) Set Network address type of the application CLB instance. Valid values:

- **Internet/Public**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet/Internal**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.


 * @method string getCreateTime() Obtain Resource creation time in the format of `yyyy-MM-ddTHH:mm:ss±hh:mm`.
 * @method void setCreateTime(string $CreateTime) Set Resource creation time in the format of `yyyy-MM-ddTHH:mm:ss±hh:mm`.
 * @method DeletionProtectionConfig getDeletionProtection() Obtain Deletion protection setting information.
 * @method void setDeletionProtection(DeletionProtectionConfig $DeletionProtection) Set Deletion protection setting information.
 * @method string getDomain() Obtain DNS domain name.
 * @method void setDomain(string $Domain) Set DNS domain name.
 * @method LoadBalancerBillingConfig getLoadBalancerBillingConfig() Obtain Billing configuration information of a load balancing instance.
 * @method void setLoadBalancerBillingConfig(LoadBalancerBillingConfig $LoadBalancerBillingConfig) Set Billing configuration information of a load balancing instance.
 * @method string getLoadBalancerId() Obtain CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method string getLoadBalancerName() Obtain Instance name.

Length: 1 to 80 characters. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Instance name.

Length: 1 to 80 characters. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method array getLoadBalancerOperationLocks() Obtain Application CLB operation lock configuration.
 * @method void setLoadBalancerOperationLocks(array $LoadBalancerOperationLocks) Set Application CLB operation lock configuration.
 * @method string getLoadBalancerStatus() Obtain Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: Deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
 * @method void setLoadBalancerStatus(string $LoadBalancerStatus) Set Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: Deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
 * @method ModificationProtectionInfo getModificationProtection() Obtain Protection configuration modification information.
 * @method void setModificationProtection(ModificationProtectionInfo $ModificationProtection) Set Protection configuration modification information.
 * @method array getSecurityGroupIds() Obtain ID set of the security group bound to the application CLB instance.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set ID set of the security group bound to the application CLB instance.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method string getVpcId() Obtain Virtual Private Cloud (VPC) ID.
 * @method void setVpcId(string $VpcId) Set Virtual Private Cloud (VPC) ID.
 * @method array getZoneMappings() Obtain Mapping list of AZs and subnets. A maximum of 10 AZs can be returned. If the current region supports 2 or more AZs, at least 2 AZs are returned.
 * @method void setZoneMappings(array $ZoneMappings) Set Mapping list of AZs and subnets. A maximum of 10 AZs can be returned. If the current region supports 2 or more AZs, at least 2 AZs are returned.
 */
class LoadBalancerDetail extends AbstractModel
{
    /**
     * @var AccessLogConfig Access log configuration.
     */
    public $AccessLogConfig;

    /**
     * @var string IP address version. Value: IPv4 or IPv6.
     */
    public $AddressIpVersion;

    /**
     * @var string Network address type of the application CLB instance. Valid values:

- **Internet/Public**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet/Internal**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.


     */
    public $AddressType;

    /**
     * @var string Resource creation time in the format of `yyyy-MM-ddTHH:mm:ss±hh:mm`.
     */
    public $CreateTime;

    /**
     * @var DeletionProtectionConfig Deletion protection setting information.
     */
    public $DeletionProtection;

    /**
     * @var string DNS domain name.
     */
    public $Domain;

    /**
     * @var LoadBalancerBillingConfig Billing configuration information of a load balancing instance.
     */
    public $LoadBalancerBillingConfig;

    /**
     * @var string CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var string Instance name.

Length: 1 to 80 characters. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $LoadBalancerName;

    /**
     * @var array Application CLB operation lock configuration.
     */
    public $LoadBalancerOperationLocks;

    /**
     * @var string Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: Deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
     */
    public $LoadBalancerStatus;

    /**
     * @var ModificationProtectionInfo Protection configuration modification information.
     */
    public $ModificationProtection;

    /**
     * @var array ID set of the security group bound to the application CLB instance.
     */
    public $SecurityGroupIds;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var string Virtual Private Cloud (VPC) ID.
     */
    public $VpcId;

    /**
     * @var array Mapping list of AZs and subnets. A maximum of 10 AZs can be returned. If the current region supports 2 or more AZs, at least 2 AZs are returned.
     */
    public $ZoneMappings;

    /**
     * @param AccessLogConfig $AccessLogConfig Access log configuration.
     * @param string $AddressIpVersion IP address version. Value: IPv4 or IPv6.
     * @param string $AddressType Network address type of the application CLB instance. Valid values:

- **Internet/Public**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet/Internal**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.


     * @param string $CreateTime Resource creation time in the format of `yyyy-MM-ddTHH:mm:ss±hh:mm`.
     * @param DeletionProtectionConfig $DeletionProtection Deletion protection setting information.
     * @param string $Domain DNS domain name.
     * @param LoadBalancerBillingConfig $LoadBalancerBillingConfig Billing configuration information of a load balancing instance.
     * @param string $LoadBalancerId CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     * @param string $LoadBalancerName Instance name.

Length: 1 to 80 characters. It can contain Chinese, letters, digits, hyphens (-), forward slashes (/), half-width periods (.), and underscores (_).
     * @param array $LoadBalancerOperationLocks Application CLB operation lock configuration.
     * @param string $LoadBalancerStatus Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: Deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
     * @param ModificationProtectionInfo $ModificationProtection Protection configuration modification information.
     * @param array $SecurityGroupIds ID set of the security group bound to the application CLB instance.
     * @param array $Tags Tag.
     * @param string $VpcId Virtual Private Cloud (VPC) ID.
     * @param array $ZoneMappings Mapping list of AZs and subnets. A maximum of 10 AZs can be returned. If the current region supports 2 or more AZs, at least 2 AZs are returned.
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
        if (array_key_exists("AccessLogConfig",$param) and $param["AccessLogConfig"] !== null) {
            $this->AccessLogConfig = new AccessLogConfig();
            $this->AccessLogConfig->deserialize($param["AccessLogConfig"]);
        }

        if (array_key_exists("AddressIpVersion",$param) and $param["AddressIpVersion"] !== null) {
            $this->AddressIpVersion = $param["AddressIpVersion"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = new DeletionProtectionConfig();
            $this->DeletionProtection->deserialize($param["DeletionProtection"]);
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerBillingConfig",$param) and $param["LoadBalancerBillingConfig"] !== null) {
            $this->LoadBalancerBillingConfig = new LoadBalancerBillingConfig();
            $this->LoadBalancerBillingConfig->deserialize($param["LoadBalancerBillingConfig"]);
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerOperationLocks",$param) and $param["LoadBalancerOperationLocks"] !== null) {
            $this->LoadBalancerOperationLocks = [];
            foreach ($param["LoadBalancerOperationLocks"] as $key => $value){
                $obj = new LoadBalancerOperationLocksItem();
                $obj->deserialize($value);
                array_push($this->LoadBalancerOperationLocks, $obj);
            }
        }

        if (array_key_exists("LoadBalancerStatus",$param) and $param["LoadBalancerStatus"] !== null) {
            $this->LoadBalancerStatus = $param["LoadBalancerStatus"];
        }

        if (array_key_exists("ModificationProtection",$param) and $param["ModificationProtection"] !== null) {
            $this->ModificationProtection = new ModificationProtectionInfo();
            $this->ModificationProtection->deserialize($param["ModificationProtection"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ZoneMappings",$param) and $param["ZoneMappings"] !== null) {
            $this->ZoneMappings = [];
            foreach ($param["ZoneMappings"] as $key => $value){
                $obj = new ZoneMappingInfo();
                $obj->deserialize($value);
                array_push($this->ZoneMappings, $obj);
            }
        }
    }
}
