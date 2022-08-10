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
 * Origin group information
 *
 * @method string getOriginId() Obtain Origin group ID
 * @method void setOriginId(string $OriginId) Set Origin group ID
 * @method string getOriginName() Obtain Origin group name
 * @method void setOriginName(string $OriginName) Set Origin group name
 * @method string getType() Obtain Origin-pull configuration type
`area`: Origin-pull by the client IP’s region specified by `Area` in `OriginRecord`.
`weight`: Origin-pull by the weight specified by `Weight` in `OriginRecord`.
 * @method void setType(string $Type) Set Origin-pull configuration type
`area`: Origin-pull by the client IP’s region specified by `Area` in `OriginRecord`.
`weight`: Origin-pull by the weight specified by `Weight` in `OriginRecord`.
 * @method array getRecord() Obtain Record
 * @method void setRecord(array $Record) Set Record
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getZoneName() Obtain Site name
 * @method void setZoneName(string $ZoneName) Set Site name
 * @method string getOriginType() Obtain Origin server type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginType(string $OriginType) Set Origin server type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getApplicationProxyUsed() Obtain Whether the origin group uses layer-4 proxy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationProxyUsed(boolean $ApplicationProxyUsed) Set Whether the origin group uses layer-4 proxy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getLoadBalancingUsed() Obtain Whether the origin group is used for load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancingUsed(boolean $LoadBalancingUsed) Set Whether the origin group is used for load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OriginCheckOriginStatus getStatus() Obtain Origin status 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(OriginCheckOriginStatus $Status) Set Origin status 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancingUsedType() Obtain Proxy mode of the load balancing task associated with the origin group.
`none`: This origin group is not used for load balancing.
`dns_only`: Used for DNS-only load balancing 
`proxied`: Used for proxied load balancing
`both`: It’s used for both DNS-only and proxied load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancingUsedType(string $LoadBalancingUsedType) Set Proxy mode of the load balancing task associated with the origin group.
`none`: This origin group is not used for load balancing.
`dns_only`: Used for DNS-only load balancing 
`proxied`: Used for proxied load balancing
`both`: It’s used for both DNS-only and proxied load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OriginGroup extends AbstractModel
{
    /**
     * @var string Origin group ID
     */
    public $OriginId;

    /**
     * @var string Origin group name
     */
    public $OriginName;

    /**
     * @var string Origin-pull configuration type
`area`: Origin-pull by the client IP’s region specified by `Area` in `OriginRecord`.
`weight`: Origin-pull by the weight specified by `Weight` in `OriginRecord`.
     */
    public $Type;

    /**
     * @var array Record
     */
    public $Record;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Site name
     */
    public $ZoneName;

    /**
     * @var string Origin server type
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginType;

    /**
     * @var boolean Whether the origin group uses layer-4 proxy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationProxyUsed;

    /**
     * @var boolean Whether the origin group is used for load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancingUsed;

    /**
     * @var OriginCheckOriginStatus Origin status 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Proxy mode of the load balancing task associated with the origin group.
`none`: This origin group is not used for load balancing.
`dns_only`: Used for DNS-only load balancing 
`proxied`: Used for proxied load balancing
`both`: It’s used for both DNS-only and proxied load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancingUsedType;

    /**
     * @param string $OriginId Origin group ID
     * @param string $OriginName Origin group name
     * @param string $Type Origin-pull configuration type
`area`: Origin-pull by the client IP’s region specified by `Area` in `OriginRecord`.
`weight`: Origin-pull by the weight specified by `Weight` in `OriginRecord`.
     * @param array $Record Record
     * @param string $UpdateTime Update time
     * @param string $ZoneId Site ID
     * @param string $ZoneName Site name
     * @param string $OriginType Origin server type
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $ApplicationProxyUsed Whether the origin group uses layer-4 proxy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $LoadBalancingUsed Whether the origin group is used for load balancing.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OriginCheckOriginStatus $Status Origin status 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancingUsedType Proxy mode of the load balancing task associated with the origin group.
`none`: This origin group is not used for load balancing.
`dns_only`: Used for DNS-only load balancing 
`proxied`: Used for proxied load balancing
`both`: It’s used for both DNS-only and proxied load balancing.
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
        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("OriginName",$param) and $param["OriginName"] !== null) {
            $this->OriginName = $param["OriginName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = [];
            foreach ($param["Record"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Record, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("ApplicationProxyUsed",$param) and $param["ApplicationProxyUsed"] !== null) {
            $this->ApplicationProxyUsed = $param["ApplicationProxyUsed"];
        }

        if (array_key_exists("LoadBalancingUsed",$param) and $param["LoadBalancingUsed"] !== null) {
            $this->LoadBalancingUsed = $param["LoadBalancingUsed"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new OriginCheckOriginStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("LoadBalancingUsedType",$param) and $param["LoadBalancingUsedType"] !== null) {
            $this->LoadBalancingUsedType = $param["LoadBalancingUsedType"];
        }
    }
}
