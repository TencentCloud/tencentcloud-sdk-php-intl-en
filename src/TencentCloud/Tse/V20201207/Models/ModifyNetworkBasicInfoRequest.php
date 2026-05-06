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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkBasicInfo request structure.
 *
 * @method string getGatewayId() Obtain Cloud Native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API gateway instance ID.
 * @method string getGroupId() Obtain Group ID
 * @method void setGroupId(string $GroupId) Set Group ID
 * @method string getNetworkType() Obtain Network type:
-Enable public IP address
-Public IPv6 address
-Internal private network
 * @method void setNetworkType(string $NetworkType) Set Network type:
-Enable public IP address
-Public IPv6 address
-Internal private network
 * @method string getVip() Obtain IP address
 * @method void setVip(string $Vip) Set IP address
 * @method integer getInternetMaxBandwidthOut() Obtain Public network outbound traffic bandwidth, [1,2048]Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network outbound traffic bandwidth, [1,2048]Mbps
 * @method string getDescription() Obtain Description of load balancing
 * @method void setDescription(string $Description) Set Description of load balancing
 * @method string getSlaType() Obtain Load balancing specification types support:
-Leave empty for shared type.
-clb.c2.medium: standard specification
-clb.c3.small: High-performance type 1 specification
-clb.c3.medium: High-performance type 2 specification
-clb.c4.small: Super high-performance specification 1
-clb.c4.medium: Super high-performance specification 2
-clb.c4.large: Super high-performance specification 3
-clb.c4.xlarge: Super high-performance 4 specification.
 * @method void setSlaType(string $SlaType) Set Load balancing specification types support:
-Leave empty for shared type.
-clb.c2.medium: standard specification
-clb.c3.small: High-performance type 1 specification
-clb.c3.medium: High-performance type 2 specification
-clb.c4.small: Super high-performance specification 1
-clb.c4.medium: Super high-performance specification 2
-clb.c4.large: Super high-performance specification 3
-clb.c4.xlarge: Super high-performance 4 specification.
 */
class ModifyNetworkBasicInfoRequest extends AbstractModel
{
    /**
     * @var string Cloud Native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string Group ID
     */
    public $GroupId;

    /**
     * @var string Network type:
-Enable public IP address
-Public IPv6 address
-Internal private network
     */
    public $NetworkType;

    /**
     * @var string IP address
     */
    public $Vip;

    /**
     * @var integer Public network outbound traffic bandwidth, [1,2048]Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Description of load balancing
     */
    public $Description;

    /**
     * @var string Load balancing specification types support:
-Leave empty for shared type.
-clb.c2.medium: standard specification
-clb.c3.small: High-performance type 1 specification
-clb.c3.medium: High-performance type 2 specification
-clb.c4.small: Super high-performance specification 1
-clb.c4.medium: Super high-performance specification 2
-clb.c4.large: Super high-performance specification 3
-clb.c4.xlarge: Super high-performance 4 specification.
     */
    public $SlaType;

    /**
     * @param string $GatewayId Cloud Native API gateway instance ID.
     * @param string $GroupId Group ID
     * @param string $NetworkType Network type:
-Enable public IP address
-Public IPv6 address
-Internal private network
     * @param string $Vip IP address
     * @param integer $InternetMaxBandwidthOut Public network outbound traffic bandwidth, [1,2048]Mbps
     * @param string $Description Description of load balancing
     * @param string $SlaType Load balancing specification types support:
-Leave empty for shared type.
-clb.c2.medium: standard specification
-clb.c3.small: High-performance type 1 specification
-clb.c3.medium: High-performance type 2 specification
-clb.c4.small: Super high-performance specification 1
-clb.c4.medium: Super high-performance specification 2
-clb.c4.large: Super high-performance specification 3
-clb.c4.xlarge: Super high-performance 4 specification.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }
    }
}
