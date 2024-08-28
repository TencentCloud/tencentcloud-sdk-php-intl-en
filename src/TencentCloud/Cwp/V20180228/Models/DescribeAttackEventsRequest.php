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
 * DescribeAttackEvents request structure.
 *
 * @method integer getLimit() Obtain Number of returns. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returns. The maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain  Filter criteria
<li>Type - String attack status. 0: attempted attack; 1: attack succeeded - required: no</li>
<li>Status - String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted - required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>Uuids - String CWPP UUID - required: no</li>
<li>Quuids - String CVM UUID - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>AttackTimeBegin - String attack start time - required: no</li>
<li>AttackTimeEnd - String attack end time - required: no</li>
<li>VulSupportDefense - String: whether the vulnerability can be defended: 0: no;1: yes - required: no</li>

 * @method void setFilters(array $Filters) Set  Filter criteria
<li>Type - String attack status. 0: attempted attack; 1: attack succeeded - required: no</li>
<li>Status - String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted - required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>Uuids - String CWPP UUID - required: no</li>
<li>Quuids - String CVM UUID - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>AttackTimeBegin - String attack start time - required: no</li>
<li>AttackTimeEnd - String attack end time - required: no</li>
<li>VulSupportDefense - String: whether the vulnerability can be defended: 0: no;1: yes - required: no</li>

 * @method string getBy() Obtain Sort
 * @method void setBy(string $By) Set Sort
 * @method string getOrder() Obtain Sorting method: ASC, DESC
 * @method void setOrder(string $Order) Set Sorting method: ASC, DESC
 */
class DescribeAttackEventsRequest extends AbstractModel
{
    /**
     * @var integer Number of returns. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array  Filter criteria
<li>Type - String attack status. 0: attempted attack; 1: attack succeeded - required: no</li>
<li>Status - String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted - required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>Uuids - String CWPP UUID - required: no</li>
<li>Quuids - String CVM UUID - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>AttackTimeBegin - String attack start time - required: no</li>
<li>AttackTimeEnd - String attack end time - required: no</li>
<li>VulSupportDefense - String: whether the vulnerability can be defended: 0: no;1: yes - required: no</li>

     */
    public $Filters;

    /**
     * @var string Sort
     */
    public $By;

    /**
     * @var string Sorting method: ASC, DESC
     */
    public $Order;

    /**
     * @param integer $Limit Number of returns. The maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters  Filter criteria
<li>Type - String attack status. 0: attempted attack; 1: attack succeeded - required: no</li>
<li>Status - String event processing status: 0: pending 1: processed; 2: allowlisted; 3: ignored; 4: deleted - required: no</li>
<li>SrcIP - String source IP - required: no</li>
<li>Uuids - String CWPP UUID - required: no</li>
<li>Quuids - String CVM UUID - required: no</li>
<li>DstPort - String attack target port - required: no</li>
<li>MachineName - String host name - required: no</li>
<li>InstanceID - String host instance ID - required: no</li>
<li>AttackTimeBegin - String attack start time - required: no</li>
<li>AttackTimeEnd - String attack end time - required: no</li>
<li>VulSupportDefense - String: whether the vulnerability can be defended: 0: no;1: yes - required: no</li>

     * @param string $By Sort
     * @param string $Order Sorting method: ASC, DESC
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
