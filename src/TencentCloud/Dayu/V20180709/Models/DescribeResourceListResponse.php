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
 * @method array getServicePacks() Obtain Resource record list. The description of key values is as follows:
"Key": "CreateTime" (Instance purchase time)
"Key": "Region" (Instance region)
"Key": "BoundIP" (IP bound to the single-IP instance)
"Key": "Id" (Instance ID)
"Key": "CCEnabled" (CC protection switch status of the instance)
"Key": "DDoSThreshold" (Anti-DDoS cleansing threshold of the instance)	
"Key": "BoundStatus" (IP binding status of the single-IP/multi-IP instance; binding or bound)
"Key": "Type" (Disused field)
"Key": "ElasticLimit" (Elastic protection value of the instance)
"Key": "DDoSAI" (Anti-DDoS AI protection switch of the instance)
"Key": "OverloadCount" (The number of attacks exceeding the elastic protection value to the instance)
"Key": "Status" (Instance status; idle: running; attacking: under attacks; blocking: being blocked; isolate: being isolated)
"Key": "Lbid" (Disused field)
"Key": "ShowFlag" (Disused field)
"Key": "Expire" (Instance expiry time)
"Key": "CCThreshold" (CC protection trigger value of the instance)
"Key": "AutoRenewFlag" (Whether the instance is on auto-renewal)
"Key": "IspCode" (Line of the single-IP/multi-IP instance; 0: China Telecom; 1: China Unicom; 2: China Mobile; 5: BGP)
"Key": "PackType" (Package type)
"Key": "PackId" (Package ID)
"Key": "Name" (Instance name)
"Key": "Locked" (Disused field)
"Key": "IpDDoSLevel" (Protection level of the instance; low: loose; middle: normal; high: strict)
"Key": "DefendStatus" (DDoS protection status of the instance; enabled or temporarily disabled)
"Key": "UndefendExpire" (End time of the temporary disabling on DDoS protection for the instance)
"Key": "Tgw" (Whether it is a new instance)
"Key": "Bandwidth" (Base protection value of the Anti-DDoS Pro/Advanced instance)
"Key": "DdosMax" (Base protection value of the Anti-DDoS Ultimate instance)
"Key": "GFBandwidth" (Base business application bandwidth of the Anti-DDoS Advanced instance)
"Key": "ServiceBandwidth" (Base business application bandwidth of the Anti-DDoS Ultimate instance)
 * @method void setServicePacks(array $ServicePacks) Set Resource record list. The description of key values is as follows:
"Key": "CreateTime" (Instance purchase time)
"Key": "Region" (Instance region)
"Key": "BoundIP" (IP bound to the single-IP instance)
"Key": "Id" (Instance ID)
"Key": "CCEnabled" (CC protection switch status of the instance)
"Key": "DDoSThreshold" (Anti-DDoS cleansing threshold of the instance)	
"Key": "BoundStatus" (IP binding status of the single-IP/multi-IP instance; binding or bound)
"Key": "Type" (Disused field)
"Key": "ElasticLimit" (Elastic protection value of the instance)
"Key": "DDoSAI" (Anti-DDoS AI protection switch of the instance)
"Key": "OverloadCount" (The number of attacks exceeding the elastic protection value to the instance)
"Key": "Status" (Instance status; idle: running; attacking: under attacks; blocking: being blocked; isolate: being isolated)
"Key": "Lbid" (Disused field)
"Key": "ShowFlag" (Disused field)
"Key": "Expire" (Instance expiry time)
"Key": "CCThreshold" (CC protection trigger value of the instance)
"Key": "AutoRenewFlag" (Whether the instance is on auto-renewal)
"Key": "IspCode" (Line of the single-IP/multi-IP instance; 0: China Telecom; 1: China Unicom; 2: China Mobile; 5: BGP)
"Key": "PackType" (Package type)
"Key": "PackId" (Package ID)
"Key": "Name" (Instance name)
"Key": "Locked" (Disused field)
"Key": "IpDDoSLevel" (Protection level of the instance; low: loose; middle: normal; high: strict)
"Key": "DefendStatus" (DDoS protection status of the instance; enabled or temporarily disabled)
"Key": "UndefendExpire" (End time of the temporary disabling on DDoS protection for the instance)
"Key": "Tgw" (Whether it is a new instance)
"Key": "Bandwidth" (Base protection value of the Anti-DDoS Pro/Advanced instance)
"Key": "DdosMax" (Base protection value of the Anti-DDoS Ultimate instance)
"Key": "GFBandwidth" (Base business application bandwidth of the Anti-DDoS Advanced instance)
"Key": "ServiceBandwidth" (Base business application bandwidth of the Anti-DDoS Ultimate instance)
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
     * @var array Resource record list. The description of key values is as follows:
"Key": "CreateTime" (Instance purchase time)
"Key": "Region" (Instance region)
"Key": "BoundIP" (IP bound to the single-IP instance)
"Key": "Id" (Instance ID)
"Key": "CCEnabled" (CC protection switch status of the instance)
"Key": "DDoSThreshold" (Anti-DDoS cleansing threshold of the instance)	
"Key": "BoundStatus" (IP binding status of the single-IP/multi-IP instance; binding or bound)
"Key": "Type" (Disused field)
"Key": "ElasticLimit" (Elastic protection value of the instance)
"Key": "DDoSAI" (Anti-DDoS AI protection switch of the instance)
"Key": "OverloadCount" (The number of attacks exceeding the elastic protection value to the instance)
"Key": "Status" (Instance status; idle: running; attacking: under attacks; blocking: being blocked; isolate: being isolated)
"Key": "Lbid" (Disused field)
"Key": "ShowFlag" (Disused field)
"Key": "Expire" (Instance expiry time)
"Key": "CCThreshold" (CC protection trigger value of the instance)
"Key": "AutoRenewFlag" (Whether the instance is on auto-renewal)
"Key": "IspCode" (Line of the single-IP/multi-IP instance; 0: China Telecom; 1: China Unicom; 2: China Mobile; 5: BGP)
"Key": "PackType" (Package type)
"Key": "PackId" (Package ID)
"Key": "Name" (Instance name)
"Key": "Locked" (Disused field)
"Key": "IpDDoSLevel" (Protection level of the instance; low: loose; middle: normal; high: strict)
"Key": "DefendStatus" (DDoS protection status of the instance; enabled or temporarily disabled)
"Key": "UndefendExpire" (End time of the temporary disabling on DDoS protection for the instance)
"Key": "Tgw" (Whether it is a new instance)
"Key": "Bandwidth" (Base protection value of the Anti-DDoS Pro/Advanced instance)
"Key": "DdosMax" (Base protection value of the Anti-DDoS Ultimate instance)
"Key": "GFBandwidth" (Base business application bandwidth of the Anti-DDoS Advanced instance)
"Key": "ServiceBandwidth" (Base business application bandwidth of the Anti-DDoS Ultimate instance)
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
     * @param array $ServicePacks Resource record list. The description of key values is as follows:
"Key": "CreateTime" (Instance purchase time)
"Key": "Region" (Instance region)
"Key": "BoundIP" (IP bound to the single-IP instance)
"Key": "Id" (Instance ID)
"Key": "CCEnabled" (CC protection switch status of the instance)
"Key": "DDoSThreshold" (Anti-DDoS cleansing threshold of the instance)	
"Key": "BoundStatus" (IP binding status of the single-IP/multi-IP instance; binding or bound)
"Key": "Type" (Disused field)
"Key": "ElasticLimit" (Elastic protection value of the instance)
"Key": "DDoSAI" (Anti-DDoS AI protection switch of the instance)
"Key": "OverloadCount" (The number of attacks exceeding the elastic protection value to the instance)
"Key": "Status" (Instance status; idle: running; attacking: under attacks; blocking: being blocked; isolate: being isolated)
"Key": "Lbid" (Disused field)
"Key": "ShowFlag" (Disused field)
"Key": "Expire" (Instance expiry time)
"Key": "CCThreshold" (CC protection trigger value of the instance)
"Key": "AutoRenewFlag" (Whether the instance is on auto-renewal)
"Key": "IspCode" (Line of the single-IP/multi-IP instance; 0: China Telecom; 1: China Unicom; 2: China Mobile; 5: BGP)
"Key": "PackType" (Package type)
"Key": "PackId" (Package ID)
"Key": "Name" (Instance name)
"Key": "Locked" (Disused field)
"Key": "IpDDoSLevel" (Protection level of the instance; low: loose; middle: normal; high: strict)
"Key": "DefendStatus" (DDoS protection status of the instance; enabled or temporarily disabled)
"Key": "UndefendExpire" (End time of the temporary disabling on DDoS protection for the instance)
"Key": "Tgw" (Whether it is a new instance)
"Key": "Bandwidth" (Base protection value of the Anti-DDoS Pro/Advanced instance)
"Key": "DdosMax" (Base protection value of the Anti-DDoS Ultimate instance)
"Key": "GFBandwidth" (Base business application bandwidth of the Anti-DDoS Advanced instance)
"Key": "ServiceBandwidth" (Base business application bandwidth of the Anti-DDoS Ultimate instance)
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
