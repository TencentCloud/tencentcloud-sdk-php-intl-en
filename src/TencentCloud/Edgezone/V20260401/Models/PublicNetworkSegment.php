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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public network ip range info, including cidr and gateway ip
 *
 * @method string getCidr() Obtain Cidr of the subnet
 * @method void setCidr(string $Cidr) Set Cidr of the subnet
 * @method string getGateway() Obtain Gateway Ip
 * @method void setGateway(string $Gateway) Set Gateway Ip
 */
class PublicNetworkSegment extends AbstractModel
{
    /**
     * @var string Cidr of the subnet
     */
    public $Cidr;

    /**
     * @var string Gateway Ip
     */
    public $Gateway;

    /**
     * @param string $Cidr Cidr of the subnet
     * @param string $Gateway Gateway Ip
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
        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }
    }
}
