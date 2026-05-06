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
 * CreateNativeGatewayServiceSource request structure.
 *
 * @method string getGatewayID() Obtain Gateway instance ID
 * @method void setGatewayID(string $GatewayID) Set Gateway instance ID
 * @method string getSourceType() Obtain Service source type. Reference value:
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
 * @method void setSourceType(string $SourceType) Set Service source type. Reference value:
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
 * @method string getSourceID() Obtain Instance ID of the service source. Required when SourceType is not PrivateDNS or Customer-DNS.
 * @method void setSourceID(string $SourceID) Set Instance ID of the service source. Required when SourceType is not PrivateDNS or Customer-DNS.
 * @method string getSourceName() Obtain Source instance name of the service. Required when SourceType is not PrivateDNS.
 * @method void setSourceName(string $SourceName) Set Source instance name of the service. Required when SourceType is not PrivateDNS.
 * @method SourceInfo getSourceInfo() Obtain Service source instance additional information
 * @method void setSourceInfo(SourceInfo $SourceInfo) Set Service source instance additional information
 */
class CreateNativeGatewayServiceSourceRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayID;

    /**
     * @var string Service source type. Reference value:
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
     */
    public $SourceType;

    /**
     * @var string Instance ID of the service source. Required when SourceType is not PrivateDNS or Customer-DNS.
     */
    public $SourceID;

    /**
     * @var string Source instance name of the service. Required when SourceType is not PrivateDNS.
     */
    public $SourceName;

    /**
     * @var SourceInfo Service source instance additional information
     */
    public $SourceInfo;

    /**
     * @param string $GatewayID Gateway instance ID
     * @param string $SourceType Service source type. Reference value:
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
     * @param string $SourceID Instance ID of the service source. Required when SourceType is not PrivateDNS or Customer-DNS.
     * @param string $SourceName Source instance name of the service. Required when SourceType is not PrivateDNS.
     * @param SourceInfo $SourceInfo Service source instance additional information
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
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new SourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }
    }
}
