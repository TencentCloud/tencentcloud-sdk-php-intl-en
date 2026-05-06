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
 * CreateCloudNativeAPIGatewayService request structure.
 *
 * @method string getGatewayId() Obtain gateway ID
 * @method void setGatewayId(string $GatewayId) Set gateway ID
 * @method string getName() Obtain Service name
 * @method void setName(string $Name) Set Service name
 * @method string getProtocol() Obtain Request protocol:
- https
- http
- tcp
- udp
 * @method void setProtocol(string $Protocol) Set Request protocol:
- https
- http
- tcp
- udp
 * @method integer getTimeout() Obtain Timeout interval. Unit: ms
 * @method void setTimeout(integer $Timeout) Set Timeout interval. Unit: ms
 * @method integer getRetries() Obtain Number of retries.
 * @method void setRetries(integer $Retries) Set Number of retries.
 * @method string getUpstreamType() Obtain Service type 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
 * @method void setUpstreamType(string $UpstreamType) Set Service type 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
 * @method KongUpstreamInfo getUpstreamInfo() Obtain Service configuration information
 * @method void setUpstreamInfo(KongUpstreamInfo $UpstreamInfo) Set Service configuration information
 * @method string getPath() Obtain Request path
 * @method void setPath(string $Path) Set Request path
 */
class CreateCloudNativeAPIGatewayServiceRequest extends AbstractModel
{
    /**
     * @var string gateway ID
     */
    public $GatewayId;

    /**
     * @var string Service name
     */
    public $Name;

    /**
     * @var string Request protocol:
- https
- http
- tcp
- udp
     */
    public $Protocol;

    /**
     * @var integer Timeout interval. Unit: ms
     */
    public $Timeout;

    /**
     * @var integer Number of retries.
     */
    public $Retries;

    /**
     * @var string Service type 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
     */
    public $UpstreamType;

    /**
     * @var KongUpstreamInfo Service configuration information
     */
    public $UpstreamInfo;

    /**
     * @var string Request path
     */
    public $Path;

    /**
     * @param string $GatewayId gateway ID
     * @param string $Name Service name
     * @param string $Protocol Request protocol:
- https
- http
- tcp
- udp
     * @param integer $Timeout Timeout interval. Unit: ms
     * @param integer $Retries Number of retries.
     * @param string $UpstreamType Service type 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
     * @param KongUpstreamInfo $UpstreamInfo Service configuration information
     * @param string $Path Request path
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new KongUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
