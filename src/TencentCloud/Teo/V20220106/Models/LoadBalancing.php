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
 * CLB information
 *
 * @method string getLoadBalancingId() Obtain CLB instance ID
 * @method void setLoadBalancingId(string $LoadBalancingId) Set CLB instance ID
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getHost() Obtain Subdomain name. You can use @ to represent the root domain.
 * @method void setHost(string $Host) Set Subdomain name. You can use @ to represent the root domain.
 * @method string getType() Obtain Proxy mode. Valid values:
`dns_only`: Only DNS
`proxied`: Enable proxy
 * @method void setType(string $Type) Set Proxy mode. Valid values:
`dns_only`: Only DNS
`proxied`: Enable proxy
 * @method integer getTTL() Obtain Indicates DNS TTL time when `Type=dns_only`
 * @method void setTTL(integer $TTL) Set Indicates DNS TTL time when `Type=dns_only`
 * @method array getOriginId() Obtain ID of the origin group used
 * @method void setOriginId(array $OriginId) Set ID of the origin group used
 * @method array getOrigin() Obtain Information of the origin server used
 * @method void setOrigin(array $Origin) Set Information of the origin server used
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getCname() Obtain Schedules domain names
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCname(string $Cname) Set Schedules domain names
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class LoadBalancing extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancingId;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Subdomain name. You can use @ to represent the root domain.
     */
    public $Host;

    /**
     * @var string Proxy mode. Valid values:
`dns_only`: Only DNS
`proxied`: Enable proxy
     */
    public $Type;

    /**
     * @var integer Indicates DNS TTL time when `Type=dns_only`
     */
    public $TTL;

    /**
     * @var array ID of the origin group used
     */
    public $OriginId;

    /**
     * @var array Information of the origin server used
     */
    public $Origin;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Schedules domain names
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cname;

    /**
     * @param string $LoadBalancingId CLB instance ID
     * @param string $ZoneId Site ID
     * @param string $Host Subdomain name. You can use @ to represent the root domain.
     * @param string $Type Proxy mode. Valid values:
`dns_only`: Only DNS
`proxied`: Enable proxy
     * @param integer $TTL Indicates DNS TTL time when `Type=dns_only`
     * @param array $OriginId ID of the origin group used
     * @param array $Origin Information of the origin server used
     * @param string $UpdateTime Update time
     * @param string $Status Status
     * @param string $Cname Schedules domain names
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = [];
            foreach ($param["Origin"] as $key => $value){
                $obj = new OriginGroup();
                $obj->deserialize($value);
                array_push($this->Origin, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
