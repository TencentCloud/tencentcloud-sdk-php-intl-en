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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancing request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getLoadBalancingId() Obtain CLB instance ID
 * @method void setLoadBalancingId(string $LoadBalancingId) Set CLB instance ID
 * @method string getType() Obtain Proxy mode.
`dns_only`: Only DNS
`proxied`: Enable proxy
 * @method void setType(string $Type) Set Proxy mode.
`dns_only`: Only DNS
`proxied`: Enable proxy
 * @method array getOriginId() Obtain ID of the origin group used
 * @method void setOriginId(array $OriginId) Set ID of the origin group used
 * @method integer getTTL() Obtain Indicates DNS TTL time when `Type=dns_only`
 * @method void setTTL(integer $TTL) Set Indicates DNS TTL time when `Type=dns_only`
 */
class ModifyLoadBalancingRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string CLB instance ID
     */
    public $LoadBalancingId;

    /**
     * @var string Proxy mode.
`dns_only`: Only DNS
`proxied`: Enable proxy
     */
    public $Type;

    /**
     * @var array ID of the origin group used
     */
    public $OriginId;

    /**
     * @var integer Indicates DNS TTL time when `Type=dns_only`
     */
    public $TTL;

    /**
     * @param string $ZoneId Site ID
     * @param string $LoadBalancingId CLB instance ID
     * @param string $Type Proxy mode.
`dns_only`: Only DNS
`proxied`: Enable proxy
     * @param array $OriginId ID of the origin group used
     * @param integer $TTL Indicates DNS TTL time when `Type=dns_only`
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }
    }
}
