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
 * DescribeMachineClearHistory request structure.
 *
 * @method array getFilters() Obtain Filtering criteria
Return entries that match both Keywords and TimeBetween when multiple filtering criteria are used
<li> Keywords: instance name, private IP address, public IP address</li>
<li> TimeBetween: time interval</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
Return entries that match both Keywords and TimeBetween when multiple filtering criteria are used
<li> Keywords: instance name, private IP address, public IP address</li>
<li> TimeBetween: time interval</li>
 * @method integer getLimit() Obtain Limit Entries, 10 by default, up to 100.
 * @method void setLimit(integer $Limit) Set Limit Entries, 10 by default, up to 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getOrder() Obtain Ascending order, ASC, Descending order DESC, ASC by default.
 * @method void setOrder(string $Order) Set Ascending order, ASC, Descending order DESC, ASC by default.
 * @method string getBy() Obtain AgentLastOfflineTime: last offline time of client
AutoClearTime: clearing time
 * @method void setBy(string $By) Set AgentLastOfflineTime: last offline time of client
AutoClearTime: clearing time
 */
class DescribeMachineClearHistoryRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria
Return entries that match both Keywords and TimeBetween when multiple filtering criteria are used
<li> Keywords: instance name, private IP address, public IP address</li>
<li> TimeBetween: time interval</li>
     */
    public $Filters;

    /**
     * @var integer Limit Entries, 10 by default, up to 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Ascending order, ASC, Descending order DESC, ASC by default.
     */
    public $Order;

    /**
     * @var string AgentLastOfflineTime: last offline time of client
AutoClearTime: clearing time
     */
    public $By;

    /**
     * @param array $Filters Filtering criteria
Return entries that match both Keywords and TimeBetween when multiple filtering criteria are used
<li> Keywords: instance name, private IP address, public IP address</li>
<li> TimeBetween: time interval</li>
     * @param integer $Limit Limit Entries, 10 by default, up to 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $Order Ascending order, ASC, Descending order DESC, ASC by default.
     * @param string $By AgentLastOfflineTime: last offline time of client
AutoClearTime: clearing time
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
