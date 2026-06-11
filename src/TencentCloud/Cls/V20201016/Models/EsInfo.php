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
 * es cluster configuration
 *
 * @method integer getEsType() Obtain ES Types. 1: Cloud ES, 2: Self-build ES.
 * @method void setEsType(integer $EsType) Set ES Types. 1: Cloud ES, 2: Self-build ES.
 * @method integer getAccessMode() Obtain Access method 1: private network, 2: public network. Self-built ES required.
 * @method void setAccessMode(integer $AccessMode) Set Access method 1: private network, 2: public network. Self-built ES required.
 * @method string getInstanceId() Obtain Instance id. Required for es instance.
 * @method void setInstanceId(string $InstanceId) Set Instance id. Required for es instance.
 * @method string getUser() Obtain Username.
 * @method void setUser(string $User) Set Username.
 * @method string getAddress() Obtain Access address. Self-built ES required.
 * @method void setAddress(string $Address) Set Access address. Self-built ES required.
 * @method integer getPort() Obtain Access port. Self-built ES required.
 * @method void setPort(integer $Port) Set Access port. Self-built ES required.
 * @method string getVpcId() Obtain Network. Required when accessing self-built ES via private network.
 * @method void setVpcId(string $VpcId) Set Network. Required when accessing self-built ES via private network.
 * @method integer getVirtualGatewayType() Obtain Network service type. Required when accessing a self-built ES via private network.
CLB:1025 Cloud Virtual Machine (CVM):0
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) Set Network service type. Required when accessing a self-built ES via private network.
CLB:1025 Cloud Virtual Machine (CVM):0
 * @method string getPassword() Obtain Password.
 * @method void setPassword(string $Password) Set Password.
 */
class EsInfo extends AbstractModel
{
    /**
     * @var integer ES Types. 1: Cloud ES, 2: Self-build ES.
     */
    public $EsType;

    /**
     * @var integer Access method 1: private network, 2: public network. Self-built ES required.
     */
    public $AccessMode;

    /**
     * @var string Instance id. Required for es instance.
     */
    public $InstanceId;

    /**
     * @var string Username.
     */
    public $User;

    /**
     * @var string Access address. Self-built ES required.
     */
    public $Address;

    /**
     * @var integer Access port. Self-built ES required.
     */
    public $Port;

    /**
     * @var string Network. Required when accessing self-built ES via private network.
     */
    public $VpcId;

    /**
     * @var integer Network service type. Required when accessing a self-built ES via private network.
CLB:1025 Cloud Virtual Machine (CVM):0
     */
    public $VirtualGatewayType;

    /**
     * @var string Password.
     */
    public $Password;

    /**
     * @param integer $EsType ES Types. 1: Cloud ES, 2: Self-build ES.
     * @param integer $AccessMode Access method 1: private network, 2: public network. Self-built ES required.
     * @param string $InstanceId Instance id. Required for es instance.
     * @param string $User Username.
     * @param string $Address Access address. Self-built ES required.
     * @param integer $Port Access port. Self-built ES required.
     * @param string $VpcId Network. Required when accessing self-built ES via private network.
     * @param integer $VirtualGatewayType Network service type. Required when accessing a self-built ES via private network.
CLB:1025 Cloud Virtual Machine (CVM):0
     * @param string $Password Password.
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
        if (array_key_exists("EsType",$param) and $param["EsType"] !== null) {
            $this->EsType = $param["EsType"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
