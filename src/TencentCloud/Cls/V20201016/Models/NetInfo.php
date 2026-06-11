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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Splunk delivery task - Configure network information related to the target
 *
 * @method string getHost() Obtain Network address.
 * @method void setHost(string $Host) Set Network address.
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getToken() Obtain Authentication token
 * @method void setToken(string $Token) Set Authentication token
 * @method integer getNetType() Obtain Network type; 1: Private network; 2: Public network
 * @method void setNetType(integer $NetType) Set Network type; 1: Private network; 2: Public network
 * @method string getVpcId() Obtain Associated network; If the network type is private network, this field is required.
 * @method void setVpcId(string $VpcId) Set Associated network; If the network type is private network, this field is required.
 * @method integer getVirtualGatewayType() Obtain Network service type. If the network type is private network, this field is required.
-0: Cloud cvm
-3: Cloud Direct Connect Gateway
-CCN
-1025: Cloud clb
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) Set Network service type. If the network type is private network, this field is required.
-0: Cloud cvm
-3: Cloud Direct Connect Gateway
-CCN
-1025: Cloud clb
 * @method boolean getIsSSL() Obtain Authentication mechanism, whether to use SSL, default non-use
 * @method void setIsSSL(boolean $IsSSL) Set Authentication mechanism, whether to use SSL, default non-use
 */
class NetInfo extends AbstractModel
{
    /**
     * @var string Network address.
     */
    public $Host;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Authentication token
     */
    public $Token;

    /**
     * @var integer Network type; 1: Private network; 2: Public network
     */
    public $NetType;

    /**
     * @var string Associated network; If the network type is private network, this field is required.
     */
    public $VpcId;

    /**
     * @var integer Network service type. If the network type is private network, this field is required.
-0: Cloud cvm
-3: Cloud Direct Connect Gateway
-CCN
-1025: Cloud clb
     */
    public $VirtualGatewayType;

    /**
     * @var boolean Authentication mechanism, whether to use SSL, default non-use
     */
    public $IsSSL;

    /**
     * @param string $Host Network address.
     * @param integer $Port Port.
     * @param string $Token Authentication token
     * @param integer $NetType Network type; 1: Private network; 2: Public network
     * @param string $VpcId Associated network; If the network type is private network, this field is required.
     * @param integer $VirtualGatewayType Network service type. If the network type is private network, this field is required.
-0: Cloud cvm
-3: Cloud Direct Connect Gateway
-CCN
-1025: Cloud clb
     * @param boolean $IsSSL Authentication mechanism, whether to use SSL, default non-use
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }

        if (array_key_exists("IsSSL",$param) and $param["IsSSL"] !== null) {
            $this->IsSSL = $param["IsSSL"];
        }
    }
}
