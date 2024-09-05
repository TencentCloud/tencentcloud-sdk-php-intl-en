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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargets request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method array getListenerIds() Obtain List of listener IDs (20 IDs at most).
 * @method void setListenerIds(array $ListenerIds) Set List of listener IDs (20 IDs at most).
 * @method string getProtocol() Obtain Listener protocol type
 * @method void setProtocol(string $Protocol) Set Listener protocol type
 * @method integer getPort() Obtain Listener port
 * @method void setPort(integer $Port) Set Listener port
 * @method array getFilters() Obtain Conditions for querying the list of real servers bound to the CLB. The filter criteria are as follows:<li> location-id - String - Required: No - (Filter criterion) Filter by rule ID, such as loc-12345678.</li><li> private-ip-address - String - Required: No - (Filter criterion) Filter by private IP address of the real server, such as 172.16.1.1.</li><li> tag - String - Required: No - (Filter criterion) Filter by tag, such as tag-test.</li>
 * @method void setFilters(array $Filters) Set Conditions for querying the list of real servers bound to the CLB. The filter criteria are as follows:<li> location-id - String - Required: No - (Filter criterion) Filter by rule ID, such as loc-12345678.</li><li> private-ip-address - String - Required: No - (Filter criterion) Filter by private IP address of the real server, such as 172.16.1.1.</li><li> tag - String - Required: No - (Filter criterion) Filter by tag, such as tag-test.</li>
 */
class DescribeTargetsRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var array List of listener IDs (20 IDs at most).
     */
    public $ListenerIds;

    /**
     * @var string Listener protocol type
     */
    public $Protocol;

    /**
     * @var integer Listener port
     */
    public $Port;

    /**
     * @var array Conditions for querying the list of real servers bound to the CLB. The filter criteria are as follows:<li> location-id - String - Required: No - (Filter criterion) Filter by rule ID, such as loc-12345678.</li><li> private-ip-address - String - Required: No - (Filter criterion) Filter by private IP address of the real server, such as 172.16.1.1.</li><li> tag - String - Required: No - (Filter criterion) Filter by tag, such as tag-test.</li>
     */
    public $Filters;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param array $ListenerIds List of listener IDs (20 IDs at most).
     * @param string $Protocol Listener protocol type
     * @param integer $Port Listener port
     * @param array $Filters Conditions for querying the list of real servers bound to the CLB. The filter criteria are as follows:<li> location-id - String - Required: No - (Filter criterion) Filter by rule ID, such as loc-12345678.</li><li> private-ip-address - String - Required: No - (Filter criterion) Filter by private IP address of the real server, such as 172.16.1.1.</li><li> tag - String - Required: No - (Filter criterion) Filter by tag, such as tag-test.</li>
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
