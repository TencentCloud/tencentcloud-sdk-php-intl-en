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
 * ModifyLoadBalancerAddressType request structure.
 *
 * @method string getAddressType() Obtain Target network type. Value:
- **Internet** (public network)
A load balancing instance is assigned a public network IP address, and the domain name (DNS) is parsed to the public network IP. It can be directly accessed via the public network and is suitable for business scenarios that provide external services.
- **Intranet** (private network)
Load balancing instances are assigned only private IP addresses, and the domain name (DNS) resolves to the private IP. Access is supported only within the private network environment of the VPC to which the load balancing instance belongs. This is suitable for internal business or scenarios with high security requirements.
 * @method void setAddressType(string $AddressType) Set Target network type. Value:
- **Internet** (public network)
A load balancing instance is assigned a public network IP address, and the domain name (DNS) is parsed to the public network IP. It can be directly accessed via the public network and is suitable for business scenarios that provide external services.
- **Intranet** (private network)
Load balancing instances are assigned only private IP addresses, and the domain name (DNS) resolves to the private IP. Access is supported only within the private network environment of the VPC to which the load balancing instance belongs. This is suitable for internal business or scenarios with high security requirements.
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID.
 * @method boolean getDryRun() Obtain Whether to only precheck this request. Parameter Value:
- **true**: Send a check request without updating the network type of the instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.
- **false** (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
 * @method void setDryRun(boolean $DryRun) Set Whether to only precheck this request. Parameter Value:
- **true**: Send a check request without updating the network type of the instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.
- **false** (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
 * @method array getZoneMappings() Obtain Availability zone and subnet mapping structure.
If the current region supports 2 or more AZs, a minimum of 2 AZs is required.
 * @method void setZoneMappings(array $ZoneMappings) Set Availability zone and subnet mapping structure.
If the current region supports 2 or more AZs, a minimum of 2 AZs is required.
 */
class ModifyLoadBalancerAddressTypeRequest extends AbstractModel
{
    /**
     * @var string Target network type. Value:
- **Internet** (public network)
A load balancing instance is assigned a public network IP address, and the domain name (DNS) is parsed to the public network IP. It can be directly accessed via the public network and is suitable for business scenarios that provide external services.
- **Intranet** (private network)
Load balancing instances are assigned only private IP addresses, and the domain name (DNS) resolves to the private IP. Access is supported only within the private network environment of the VPC to which the load balancing instance belongs. This is suitable for internal business or scenarios with high security requirements.
     */
    public $AddressType;

    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var string Bandwidth package ID.
     */
    public $BandwidthPackageId;

    /**
     * @var boolean Whether to only precheck this request. Parameter Value:
- **true**: Send a check request without updating the network type of the instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.
- **false** (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
     */
    public $DryRun;

    /**
     * @var array Availability zone and subnet mapping structure.
If the current region supports 2 or more AZs, a minimum of 2 AZs is required.
     */
    public $ZoneMappings;

    /**
     * @param string $AddressType Target network type. Value:
- **Internet** (public network)
A load balancing instance is assigned a public network IP address, and the domain name (DNS) is parsed to the public network IP. It can be directly accessed via the public network and is suitable for business scenarios that provide external services.
- **Intranet** (private network)
Load balancing instances are assigned only private IP addresses, and the domain name (DNS) resolves to the private IP. Access is supported only within the private network environment of the VPC to which the load balancing instance belongs. This is suitable for internal business or scenarios with high security requirements.
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param string $BandwidthPackageId Bandwidth package ID.
     * @param boolean $DryRun Whether to only precheck this request. Parameter Value:
- **true**: Send a check request without updating the network type of the instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.
- **false** (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
     * @param array $ZoneMappings Availability zone and subnet mapping structure.
If the current region supports 2 or more AZs, a minimum of 2 AZs is required.
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

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ZoneMappings",$param) and $param["ZoneMappings"] !== null) {
            $this->ZoneMappings = [];
            foreach ($param["ZoneMappings"] as $key => $value){
                $obj = new ZoneMappingsItem();
                $obj->deserialize($value);
                array_push($this->ZoneMappings, $obj);
            }
        }
    }
}
