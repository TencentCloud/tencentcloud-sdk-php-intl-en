<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Local network information
 *
 * @method string getProtocol() Obtain Protocol 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setProtocol(string $Protocol) Set Protocol 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getVpcId() Obtain Network id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setVpcId(string $VpcId) Set Network id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getBGPRoute() Obtain Routing information 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setBGPRoute(string $BGPRoute) Set Routing information 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getLocalIp() Obtain Local IP 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setLocalIp(string $LocalIp) Set Local IP 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 */
class LocalNetInfo extends AbstractModel
{
    /**
     * @var string Protocol 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Protocol;

    /**
     * @var string Network id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $VpcId;

    /**
     * @var string Routing information 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $BGPRoute;

    /**
     * @var string Local IP 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $LocalIp;

    /**
     * @param string $Protocol Protocol 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $VpcId Network id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $BGPRoute Routing information 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $LocalIp Local IP 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("BGPRoute",$param) and $param["BGPRoute"] !== null) {
            $this->BGPRoute = $param["BGPRoute"];
        }

        if (array_key_exists("LocalIp",$param) and $param["LocalIp"] !== null) {
            $this->LocalIp = $param["LocalIp"];
        }
    }
}
