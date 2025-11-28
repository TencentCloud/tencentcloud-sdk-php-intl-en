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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access point information.
 *
 * @method string getType() Obtain Access point type, with the enumerated values as follows:.

- VPC: specifies the VPC network.

-PUBLIC: public network.

-INTERNAL: specifies the support network.
 * @method void setType(string $Type) Set Access point type, with the enumerated values as follows:.

- VPC: specifies the VPC network.

-PUBLIC: public network.

-INTERNAL: specifies the support network.
 * @method string getStatus() Obtain Status.
OPEN: indicates to start or activate a function.
CLOSE: indicates the closed state.
PROCESSING: operation in progress.
 * @method void setStatus(string $Status) Set Status.
OPEN: indicates to start or activate a function.
CLOSE: indicates the closed state.
PROCESSING: operation in progress.
 * @method string getPayMode() Obtain Payment type, only public network.
PREPAID: annual/monthly package.
Pay-As-You-Go.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Payment type, only public network.
PREPAID: annual/monthly package.
Pay-As-You-Go.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndpointUrl() Obtain Access point address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndpointUrl(string $EndpointUrl) Set Access point address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Specifies the subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Specifies the subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBandwidth() Obtain Public network bandwidth, in Mbps

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidth(integer $Bandwidth) Set Public network bandwidth, in Mbps

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpRules() Obtain Public network access rules

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpRules(array $IpRules) Set Public network access rules

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getBillingFlow() Obtain Whether the public network is billed by traffic.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingFlow(boolean $BillingFlow) Set Whether the public network is billed by traffic.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string Access point type, with the enumerated values as follows:.

- VPC: specifies the VPC network.

-PUBLIC: public network.

-INTERNAL: specifies the support network.
     */
    public $Type;

    /**
     * @var string Status.
OPEN: indicates to start or activate a function.
CLOSE: indicates the closed state.
PROCESSING: operation in progress.
     */
    public $Status;

    /**
     * @var string Payment type, only public network.
PREPAID: annual/monthly package.
Pay-As-You-Go.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string Access point address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndpointUrl;

    /**
     * @var string VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Specifies the subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var integer Public network bandwidth, in Mbps

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bandwidth;

    /**
     * @var array Public network access rules

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpRules;

    /**
     * @var boolean Whether the public network is billed by traffic.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingFlow;

    /**
     * @param string $Type Access point type, with the enumerated values as follows:.

- VPC: specifies the VPC network.

-PUBLIC: public network.

-INTERNAL: specifies the support network.
     * @param string $Status Status.
OPEN: indicates to start or activate a function.
CLOSE: indicates the closed state.
PROCESSING: operation in progress.
     * @param string $PayMode Payment type, only public network.
PREPAID: annual/monthly package.
Pay-As-You-Go.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndpointUrl Access point address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Specifies the subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bandwidth Public network bandwidth, in Mbps

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpRules Public network access rules

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $BillingFlow Whether the public network is billed by traffic.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("EndpointUrl",$param) and $param["EndpointUrl"] !== null) {
            $this->EndpointUrl = $param["EndpointUrl"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }
    }
}
