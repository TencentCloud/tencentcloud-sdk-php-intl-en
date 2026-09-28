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
 * CreateLoadBalancer request structure.
 *
 * @method string getAddressType() Obtain Address type of the application CLB.

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer has only a private IP address, and the DNS domain name is resolved to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer resides.
 * @method void setAddressType(string $AddressType) Set Address type of the application CLB.

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer has only a private IP address, and the DNS domain name is resolved to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer resides.
 * @method LoadBalancerBillingConfig getLoadBalancerBillingConfig() Obtain Billing configuration of an application CLB instance.
 * @method void setLoadBalancerBillingConfig(LoadBalancerBillingConfig $LoadBalancerBillingConfig) Set Billing configuration of an application CLB instance.
 * @method string getVpcId() Obtain Virtual Private Cloud (VPC) ID.
 * @method void setVpcId(string $VpcId) Set Virtual Private Cloud (VPC) ID.
 * @method array getZoneMappings() Obtain AZ and private network subnet mapping list. A maximum of 10 AZs can be added. If the current region supports 2 or more AZs, a minimum of 2 AZs are required.
 * @method void setZoneMappings(array $ZoneMappings) Set AZ and private network subnet mapping list. A maximum of 10 AZs can be added. If the current region supports 2 or more AZs, a minimum of 2 AZs are required.
 * @method string getAddressIpVersion() Obtain IP address version. Value: IPv4 or IPv6.
 * @method void setAddressIpVersion(string $AddressIpVersion) Set IP address version. Value: IPv4 or IPv6.
 * @method string getClientToken() Obtain Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
 * @method void setClientToken(string $ClientToken) Set Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
 * @method DeletionProtectionConfig getDeleteProtection() Obtain Deletion protection configuration.
 * @method void setDeleteProtection(DeletionProtectionConfig $DeleteProtection) Set Deletion protection configuration.
 * @method boolean getDryRun() Obtain Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without creating an application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request. After the check is passed, return HTTP 2xx status code and directly perform the operation.
 * @method void setDryRun(boolean $DryRun) Set Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without creating an application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request. After the check is passed, return HTTP 2xx status code and directly perform the operation.
 * @method string getInternetAddressType() Obtain EIP address type. Valid values:
- **EIP**: Ordinary Elastic IP
- **AntiDDoSEIP**: Anti-DDoS EIP
- **AnycastEIP**: Accelerated EIP
-**HighQualityEIP**: High Quality IP. High Quality IP is supported only in Singapore and Hong Kong (China).
- **ResidentialEIP**: natively assigned IP

Default if not passed: EIP.
 * @method void setInternetAddressType(string $InternetAddressType) Set EIP address type. Valid values:
- **EIP**: Ordinary Elastic IP
- **AntiDDoSEIP**: Anti-DDoS EIP
- **AnycastEIP**: Accelerated EIP
-**HighQualityEIP**: High Quality IP. High Quality IP is supported only in Singapore and Hong Kong (China).
- **ResidentialEIP**: natively assigned IP

Default if not passed: EIP.
 * @method string getLoadBalancerName() Obtain Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Address type of the application CLB.

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer has only a private IP address, and the DNS domain name is resolved to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer resides.
     */
    public $AddressType;

    /**
     * @var LoadBalancerBillingConfig Billing configuration of an application CLB instance.
     */
    public $LoadBalancerBillingConfig;

    /**
     * @var string Virtual Private Cloud (VPC) ID.
     */
    public $VpcId;

    /**
     * @var array AZ and private network subnet mapping list. A maximum of 10 AZs can be added. If the current region supports 2 or more AZs, a minimum of 2 AZs are required.
     */
    public $ZoneMappings;

    /**
     * @var string IP address version. Value: IPv4 or IPv6.
     */
    public $AddressIpVersion;

    /**
     * @var string Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
     */
    public $ClientToken;

    /**
     * @var DeletionProtectionConfig Deletion protection configuration.
     */
    public $DeleteProtection;

    /**
     * @var boolean Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without creating an application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request. After the check is passed, return HTTP 2xx status code and directly perform the operation.
     */
    public $DryRun;

    /**
     * @var string EIP address type. Valid values:
- **EIP**: Ordinary Elastic IP
- **AntiDDoSEIP**: Anti-DDoS EIP
- **AnycastEIP**: Accelerated EIP
-**HighQualityEIP**: High Quality IP. High Quality IP is supported only in Singapore and Hong Kong (China).
- **ResidentialEIP**: natively assigned IP

Default if not passed: EIP.
     */
    public $InternetAddressType;

    /**
     * @var string Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $LoadBalancerName;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $AddressType Address type of the application CLB.

- **Internet**: The load balancing has a public IP address, and the DNS domain name is resolved to the public IP, so it can be accessed via the public network.

- **Intranet**: The load balancer has only a private IP address, and the DNS domain name is resolved to the private IP, so it can only be accessed from the private network environment of the VPC where the load balancer resides.
     * @param LoadBalancerBillingConfig $LoadBalancerBillingConfig Billing configuration of an application CLB instance.
     * @param string $VpcId Virtual Private Cloud (VPC) ID.
     * @param array $ZoneMappings AZ and private network subnet mapping list. A maximum of 10 AZs can be added. If the current region supports 2 or more AZs, a minimum of 2 AZs are required.
     * @param string $AddressIpVersion IP address version. Value: IPv4 or IPv6.
     * @param string $ClientToken Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
     * @param DeletionProtectionConfig $DeleteProtection Deletion protection configuration.
     * @param boolean $DryRun Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without creating an application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request. After the check is passed, return HTTP 2xx status code and directly perform the operation.
     * @param string $InternetAddressType EIP address type. Valid values:
- **EIP**: Ordinary Elastic IP
- **AntiDDoSEIP**: Anti-DDoS EIP
- **AnycastEIP**: Accelerated EIP
-**HighQualityEIP**: High Quality IP. High Quality IP is supported only in Singapore and Hong Kong (China).
- **ResidentialEIP**: natively assigned IP

Default if not passed: EIP.
     * @param string $LoadBalancerName Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
     * @param array $Tags Tag.
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
        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("LoadBalancerBillingConfig",$param) and $param["LoadBalancerBillingConfig"] !== null) {
            $this->LoadBalancerBillingConfig = new LoadBalancerBillingConfig();
            $this->LoadBalancerBillingConfig->deserialize($param["LoadBalancerBillingConfig"]);
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ZoneMappings",$param) and $param["ZoneMappings"] !== null) {
            $this->ZoneMappings = [];
            foreach ($param["ZoneMappings"] as $key => $value){
                $obj = new ZoneMappingsItem();
                $obj->deserialize($value);
                array_push($this->ZoneMappings, $obj);
            }
        }

        if (array_key_exists("AddressIpVersion",$param) and $param["AddressIpVersion"] !== null) {
            $this->AddressIpVersion = $param["AddressIpVersion"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeleteProtection",$param) and $param["DeleteProtection"] !== null) {
            $this->DeleteProtection = new DeletionProtectionConfig();
            $this->DeleteProtection->deserialize($param["DeleteProtection"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("InternetAddressType",$param) and $param["InternetAddressType"] !== null) {
            $this->InternetAddressType = $param["InternetAddressType"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
