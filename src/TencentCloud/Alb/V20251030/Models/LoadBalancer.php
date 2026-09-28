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
 * Structure of application CLB instances in list view.
 *
 * @method AccessLogConfig getAccessLogConfig() Obtain Access log configuration architecture.
 * @method void setAccessLogConfig(AccessLogConfig $AccessLogConfig) Set Access log configuration architecture.
 * @method string getAddressIpVersion() Obtain IP address version. Value: IPv4 or IPv6.
 * @method void setAddressIpVersion(string $AddressIpVersion) Set IP address version. Value: IPv4 or IPv6.
 * @method string getAddressType() Obtain LoadBalancer address type. Valid values:

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.
 * @method void setAddressType(string $AddressType) Set LoadBalancer address type. Valid values:

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.
 * @method string getCreateTime() Obtain Resource creation time.
 * @method void setCreateTime(string $CreateTime) Set Resource creation time.
 * @method DeletionProtectionConfig getDeletionProtection() Obtain Deletion protection setting information.
 * @method void setDeletionProtection(DeletionProtectionConfig $DeletionProtection) Set Deletion protection setting information.
 * @method string getDomain() Obtain DNS domain name.
 * @method void setDomain(string $Domain) Set DNS domain name.
 * @method LoadBalancerBillingConfig getLoadBalancerBillingConfig() Obtain Billing configuration of a load balancing instance.
 * @method void setLoadBalancerBillingConfig(LoadBalancerBillingConfig $LoadBalancerBillingConfig) Set Billing configuration of a load balancing instance.
 * @method string getLoadBalancerId() Obtain CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method string getLoadBalancerName() Obtain Load balancing instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Load balancing instance name.
 * @method array getLoadBalancerOperationLocks() Obtain Load balancer operation lock configuration.
 * @method void setLoadBalancerOperationLocks(array $LoadBalancerOperationLocks) Set Load balancer operation lock configuration.
 * @method string getLoadBalancerStatus() Obtain Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: Deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
 * @method void setLoadBalancerStatus(string $LoadBalancerStatus) Set Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: Deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
 * @method ModificationProtectionInfo getModificationProtection() Obtain Modification protection setting information.
 * @method void setModificationProtection(ModificationProtectionInfo $ModificationProtection) Set Modification protection setting information.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 * @method string getVpcId() Obtain Virtual Private Cloud (VPC) ID.
 * @method void setVpcId(string $VpcId) Set Virtual Private Cloud (VPC) ID.
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var AccessLogConfig Access log configuration architecture.
     */
    public $AccessLogConfig;

    /**
     * @var string IP address version. Value: IPv4 or IPv6.
     */
    public $AddressIpVersion;

    /**
     * @var string LoadBalancer address type. Valid values:

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.
     */
    public $AddressType;

    /**
     * @var string Resource creation time.
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
     * @var LoadBalancerBillingConfig Billing configuration of a load balancing instance.
     */
    public $LoadBalancerBillingConfig;

    /**
     * @var string CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var string Load balancing instance name.
     */
    public $LoadBalancerName;

    /**
     * @var array Load balancer operation lock configuration.
     */
    public $LoadBalancerOperationLocks;

    /**
     * @var string Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: Deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
     */
    public $LoadBalancerStatus;

    /**
     * @var ModificationProtectionInfo Modification protection setting information.
     */
    public $ModificationProtection;

    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @var string Virtual Private Cloud (VPC) ID.
     */
    public $VpcId;

    /**
     * @param AccessLogConfig $AccessLogConfig Access log configuration architecture.
     * @param string $AddressIpVersion IP address version. Value: IPv4 or IPv6.
     * @param string $AddressType LoadBalancer address type. Valid values:

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer only has a private IP address, and the DNS domain name resolves to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer is located.
     * @param string $CreateTime Resource creation time.
     * @param DeletionProtectionConfig $DeletionProtection Deletion protection setting information.
     * @param string $Domain DNS domain name.
     * @param LoadBalancerBillingConfig $LoadBalancerBillingConfig Billing configuration of a load balancing instance.
     * @param string $LoadBalancerId CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     * @param string $LoadBalancerName Load balancing instance name.
     * @param array $LoadBalancerOperationLocks Load balancer operation lock configuration.
     * @param string $LoadBalancerStatus Application CLB instance status. Valid values:

- **Provisioning**: Under creation.
- **Active**: Running.
- **Configuring**: The configuration is being changed.
- **Deleting**: Deleting.
- **ProvisionFailed**: Creation failed.
- **ConfigureFailed**: Configuration adjustment failure.
- **DeletionFailed**: deletion failed.
- **Abnormal**: abnormal status. For the specific exception reason, see the LoadBalancerOperationLocks field.
     * @param ModificationProtectionInfo $ModificationProtection Modification protection setting information.
     * @param array $Tags Tag list.
     * @param string $VpcId Virtual Private Cloud (VPC) ID.
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
    }
}
