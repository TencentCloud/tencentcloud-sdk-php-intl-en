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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportRiskDnsEventList request structure.
 *
 * @method array getFilters() Obtain <li>IpOrName - String - required: no - filter by host IP or alias</li>
<li>HostId - String - required: no - host ID</li>
<li>AgentId - String - required: no - client ID</li>
<li>PolicyType - String - required: no - policy type: 0 - system policy; 1 - user-defined policy</li>
<li>Domain - String - required: no - domain name (First convert the domain name into the urlencode format, and then encode it using base64.)</li>
<li>HandleStatus - String - required: no - filter by status: 0 - pending; 2 - trusted; 3 - untrusted</li>
<li>BeginTime - String - required: no - start time of last access</li>
<li>EndTime - String - required: no - end time of last access</li>
 * @method void setFilters(array $Filters) Set <li>IpOrName - String - required: no - filter by host IP or alias</li>
<li>HostId - String - required: no - host ID</li>
<li>AgentId - String - required: no - client ID</li>
<li>PolicyType - String - required: no - policy type: 0 - system policy; 1 - user-defined policy</li>
<li>Domain - String - required: no - domain name (First convert the domain name into the urlencode format, and then encode it using base64.)</li>
<li>HandleStatus - String - required: no - filter by status: 0 - pending; 2 - trusted; 3 - untrusted</li>
<li>BeginTime - String - required: no - start time of last access</li>
<li>EndTime - String - required: no - end time of last access</li>
 * @method string getOrder() Obtain Sorting method: [ASC: ascending order|DESC: descending order]
 * @method void setOrder(string $Order) Set Sorting method: [ASC: ascending order|DESC: descending order]
 * @method string getBy() Obtain Sorting field: [AccessCount: number of requests|LastTime: last request time]
 * @method void setBy(string $By) Set Sorting field: [AccessCount: number of requests|LastTime: last request time]
 */
class ExportRiskDnsEventListRequest extends AbstractModel
{
    /**
     * @var array <li>IpOrName - String - required: no - filter by host IP or alias</li>
<li>HostId - String - required: no - host ID</li>
<li>AgentId - String - required: no - client ID</li>
<li>PolicyType - String - required: no - policy type: 0 - system policy; 1 - user-defined policy</li>
<li>Domain - String - required: no - domain name (First convert the domain name into the urlencode format, and then encode it using base64.)</li>
<li>HandleStatus - String - required: no - filter by status: 0 - pending; 2 - trusted; 3 - untrusted</li>
<li>BeginTime - String - required: no - start time of last access</li>
<li>EndTime - String - required: no - end time of last access</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: [ASC: ascending order|DESC: descending order]
     */
    public $Order;

    /**
     * @var string Sorting field: [AccessCount: number of requests|LastTime: last request time]
     */
    public $By;

    /**
     * @param array $Filters <li>IpOrName - String - required: no - filter by host IP or alias</li>
<li>HostId - String - required: no - host ID</li>
<li>AgentId - String - required: no - client ID</li>
<li>PolicyType - String - required: no - policy type: 0 - system policy; 1 - user-defined policy</li>
<li>Domain - String - required: no - domain name (First convert the domain name into the urlencode format, and then encode it using base64.)</li>
<li>HandleStatus - String - required: no - filter by status: 0 - pending; 2 - trusted; 3 - untrusted</li>
<li>BeginTime - String - required: no - start time of last access</li>
<li>EndTime - String - required: no - end time of last access</li>
     * @param string $Order Sorting method: [ASC: ascending order|DESC: descending order]
     * @param string $By Sorting field: [AccessCount: number of requests|LastTime: last request time]
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
