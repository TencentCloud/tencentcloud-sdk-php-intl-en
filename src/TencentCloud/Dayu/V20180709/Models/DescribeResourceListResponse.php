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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceList response structure.
 *
 * @method integer getTotal() Obtain Total number of records
 * @method void setTotal(integer $Total) Set Total number of records
 * @method array getServicePacks() Obtain Resource record list. Valid values of `key`:
"Key": "CreateTime" - resource instance purchase time
"Key": "Region" - resource instance region
"Key": "BoundIP" - IP bound to single IP instance
"Key": "Id" - resource instance ID
"Key": "CCEnabled" - CC protection status of resource instance
"Key": "DDoSThreshold" - DDoS cleansing threshold of resource instance	
"Key": "BoundStatus" - IP binding status of single IP instance or multi-IP instance (binding or bound)
"Key": "Type" - this field has been disused
"Key": "ElasticLimit" - elastic protection value of resource instance
"Key": "DDoSAI" - DDoS AI protection status of resource instance
"Key": "Bandwidth" - base protection value of resource instance
"Key": "OverloadCount" - number of attacks to the resource instance that exceed the elastic protection value
"Key": "Status" - resource instance status (idle: running, attacking: attacking, blocking: blocking, isolate: isolating)
"Key": "Lbid" - this field has been disused
"Key": "ShowFlag" - this field has been disused
"Key": "Expire" - resource instance expiration time
"Key": "CCThreshold" - CC protection triggering threshold of resource instance
"Key": "AutoRenewFlag" - auto-renewal flag of resource instance
"Key": "IspCode" - line of single IP instance or multi-IP instance (0: China Telecom, 1: China Unicom, 2: China Mobile, 5: BGP)
"Key": "PackType" - package type
"Key": "PackId" - package ID
"Key": "Name" - resource instance name
"Key": "Locked" - this field has been disused
"Key": "IpDDoSLevel" - protection level of resource instance (low: loose, middle: normal, high: strict)
"Key": "DefendStatus" - DDoS protection status of resource (enabled or temporarily disabled)
"Key": "UndefendExpire" - end time of temporary disablement of DDoS protection for resource instance
"Key": "Tgw" - whether the resource instance is a new resource
 * @method void setServicePacks(array $ServicePacks) Set Resource record list. Valid values of `key`:
"Key": "CreateTime" - resource instance purchase time
"Key": "Region" - resource instance region
"Key": "BoundIP" - IP bound to single IP instance
"Key": "Id" - resource instance ID
"Key": "CCEnabled" - CC protection status of resource instance
"Key": "DDoSThreshold" - DDoS cleansing threshold of resource instance	
"Key": "BoundStatus" - IP binding status of single IP instance or multi-IP instance (binding or bound)
"Key": "Type" - this field has been disused
"Key": "ElasticLimit" - elastic protection value of resource instance
"Key": "DDoSAI" - DDoS AI protection status of resource instance
"Key": "Bandwidth" - base protection value of resource instance
"Key": "OverloadCount" - number of attacks to the resource instance that exceed the elastic protection value
"Key": "Status" - resource instance status (idle: running, attacking: attacking, blocking: blocking, isolate: isolating)
"Key": "Lbid" - this field has been disused
"Key": "ShowFlag" - this field has been disused
"Key": "Expire" - resource instance expiration time
"Key": "CCThreshold" - CC protection triggering threshold of resource instance
"Key": "AutoRenewFlag" - auto-renewal flag of resource instance
"Key": "IspCode" - line of single IP instance or multi-IP instance (0: China Telecom, 1: China Unicom, 2: China Mobile, 5: BGP)
"Key": "PackType" - package type
"Key": "PackId" - package ID
"Key": "Name" - resource instance name
"Key": "Locked" - this field has been disused
"Key": "IpDDoSLevel" - protection level of resource instance (low: loose, middle: normal, high: strict)
"Key": "DefendStatus" - DDoS protection status of resource (enabled or temporarily disabled)
"Key": "UndefendExpire" - end time of temporary disablement of DDoS protection for resource instance
"Key": "Tgw" - whether the resource instance is a new resource
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeResourceListResponse extends AbstractModel
{
    /**
     * @var integer Total number of records
     */
    public $Total;

    /**
     * @var array Resource record list. Valid values of `key`:
"Key": "CreateTime" - resource instance purchase time
"Key": "Region" - resource instance region
"Key": "BoundIP" - IP bound to single IP instance
"Key": "Id" - resource instance ID
"Key": "CCEnabled" - CC protection status of resource instance
"Key": "DDoSThreshold" - DDoS cleansing threshold of resource instance	
"Key": "BoundStatus" - IP binding status of single IP instance or multi-IP instance (binding or bound)
"Key": "Type" - this field has been disused
"Key": "ElasticLimit" - elastic protection value of resource instance
"Key": "DDoSAI" - DDoS AI protection status of resource instance
"Key": "Bandwidth" - base protection value of resource instance
"Key": "OverloadCount" - number of attacks to the resource instance that exceed the elastic protection value
"Key": "Status" - resource instance status (idle: running, attacking: attacking, blocking: blocking, isolate: isolating)
"Key": "Lbid" - this field has been disused
"Key": "ShowFlag" - this field has been disused
"Key": "Expire" - resource instance expiration time
"Key": "CCThreshold" - CC protection triggering threshold of resource instance
"Key": "AutoRenewFlag" - auto-renewal flag of resource instance
"Key": "IspCode" - line of single IP instance or multi-IP instance (0: China Telecom, 1: China Unicom, 2: China Mobile, 5: BGP)
"Key": "PackType" - package type
"Key": "PackId" - package ID
"Key": "Name" - resource instance name
"Key": "Locked" - this field has been disused
"Key": "IpDDoSLevel" - protection level of resource instance (low: loose, middle: normal, high: strict)
"Key": "DefendStatus" - DDoS protection status of resource (enabled or temporarily disabled)
"Key": "UndefendExpire" - end time of temporary disablement of DDoS protection for resource instance
"Key": "Tgw" - whether the resource instance is a new resource
     */
    public $ServicePacks;

    /**
     * @var string Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
     */
    public $Business;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of records
     * @param array $ServicePacks Resource record list. Valid values of `key`:
"Key": "CreateTime" - resource instance purchase time
"Key": "Region" - resource instance region
"Key": "BoundIP" - IP bound to single IP instance
"Key": "Id" - resource instance ID
"Key": "CCEnabled" - CC protection status of resource instance
"Key": "DDoSThreshold" - DDoS cleansing threshold of resource instance	
"Key": "BoundStatus" - IP binding status of single IP instance or multi-IP instance (binding or bound)
"Key": "Type" - this field has been disused
"Key": "ElasticLimit" - elastic protection value of resource instance
"Key": "DDoSAI" - DDoS AI protection status of resource instance
"Key": "Bandwidth" - base protection value of resource instance
"Key": "OverloadCount" - number of attacks to the resource instance that exceed the elastic protection value
"Key": "Status" - resource instance status (idle: running, attacking: attacking, blocking: blocking, isolate: isolating)
"Key": "Lbid" - this field has been disused
"Key": "ShowFlag" - this field has been disused
"Key": "Expire" - resource instance expiration time
"Key": "CCThreshold" - CC protection triggering threshold of resource instance
"Key": "AutoRenewFlag" - auto-renewal flag of resource instance
"Key": "IspCode" - line of single IP instance or multi-IP instance (0: China Telecom, 1: China Unicom, 2: China Mobile, 5: BGP)
"Key": "PackType" - package type
"Key": "PackId" - package ID
"Key": "Name" - resource instance name
"Key": "Locked" - this field has been disused
"Key": "IpDDoSLevel" - protection level of resource instance (low: loose, middle: normal, high: strict)
"Key": "DefendStatus" - DDoS protection status of resource (enabled or temporarily disabled)
"Key": "UndefendExpire" - end time of temporary disablement of DDoS protection for resource instance
"Key": "Tgw" - whether the resource instance is a new resource
     * @param string $Business Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ServicePacks",$param) and $param["ServicePacks"] !== null) {
            $this->ServicePacks = [];
            foreach ($param["ServicePacks"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->ServicePacks, $obj);
            }
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
