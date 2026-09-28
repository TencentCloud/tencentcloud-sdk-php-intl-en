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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListeners request structure.
 *
 * @method string getLoadBalancerId() Obtain Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method array getFilters() Obtain Filter criteria list. Supports up to 20. Supports the following fields.
- **Protocol**: Protocol type
- **Tags**: Tag
 * @method void setFilters(array $Filters) Set Filter criteria list. Supports up to 20. Supports the following fields.
- **Protocol**: Protocol type
- **Tags**: Tag
 * @method array getListenerIds() Obtain Listener ID list. ID format: lst- followed by 8 alphanumeric characters.
 * @method void setListenerIds(array $ListenerIds) Set Listener ID list. ID format: lst- followed by 8 alphanumeric characters.
 * @method integer getMaxResults() Obtain Maximum number of data records read this time.
Value: 1-100.
Default value: 20
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data records read this time.
Value: 1-100.
Default value: 20
 * @method string getNextToken() Obtain Token for the next query. If it is empty, this queries page 1.
 * @method void setNextToken(string $NextToken) Set Token for the next query. If it is empty, this queries page 1.
 */
class DescribeListenersRequest extends AbstractModel
{
    /**
     * @var string Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var array Filter criteria list. Supports up to 20. Supports the following fields.
- **Protocol**: Protocol type
- **Tags**: Tag
     */
    public $Filters;

    /**
     * @var array Listener ID list. ID format: lst- followed by 8 alphanumeric characters.
     */
    public $ListenerIds;

    /**
     * @var integer Maximum number of data records read this time.
Value: 1-100.
Default value: 20
     */
    public $MaxResults;

    /**
     * @var string Token for the next query. If it is empty, this queries page 1.
     */
    public $NextToken;

    /**
     * @param string $LoadBalancerId Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     * @param array $Filters Filter criteria list. Supports up to 20. Supports the following fields.
- **Protocol**: Protocol type
- **Tags**: Tag
     * @param array $ListenerIds Listener ID list. ID format: lst- followed by 8 alphanumeric characters.
     * @param integer $MaxResults Maximum number of data records read this time.
Value: 1-100.
Default value: 20
     * @param string $NextToken Token for the next query. If it is empty, this queries page 1.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
