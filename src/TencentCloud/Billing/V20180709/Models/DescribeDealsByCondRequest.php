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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDealsByCond request structure.
 *
 * @method string getStartTime() Obtain Start time 
Example :2016-01-01 00:00:00
 * @method void setStartTime(string $StartTime) Set Start time 
Example :2016-01-01 00:00:00
 * @method string getEndTime() Obtain End time 
Example:2016-02-01 00:00:00. 
It is recommended that the span does not exceed 3 months.
 * @method void setEndTime(string $EndTime) Set End time 
Example:2016-02-01 00:00:00. 
It is recommended that the span does not exceed 3 months.
 * @method integer getLimit() Obtain The number of records per page. The default is 20, and the maximum is 1,000.
 * @method void setLimit(integer $Limit) Set The number of records per page. The default is 20, and the maximum is 1,000.
 * @method integer getOffset() Obtain The page number the records start from, starting from 0. The default is 0.
 * @method void setOffset(integer $Offset) Set The page number the records start from, starting from 0. The default is 0.
 * @method integer getStatus() Obtain Order status, default is 4 (successful order)
Status of the order
1: unpaid
2: paid 
3: shipment in progress
4: shipped
5`: Shipment Failed
6`: Refunded
7`: Ticket closed
8`: Order expired
9`: Order invalid
10: product invalidated
11: third-party payment refused
12: payment in process
 * @method void setStatus(integer $Status) Set Order status, default is 4 (successful order)
Status of the order
1: unpaid
2: paid 
3: shipment in progress
4: shipped
5`: Shipment Failed
6`: Refunded
7`: Ticket closed
8`: Order expired
9`: Order invalid
10: product invalidated
11: third-party payment refused
12: payment in process
 * @method string getOrderId() Obtain Sub-order number
Example: 202202021234567
 * @method void setOrderId(string $OrderId) Set Sub-order number
Example: 202202021234567
 * @method string getBigDealId() Obtain Large order number.
Example: 202202021234566
 * @method void setBigDealId(string $BigDealId) Set Large order number.
Example: 202202021234566
 * @method string getResourceId() Obtain Resource ID
Example:ins-a2bb34
 * @method void setResourceId(string $ResourceId) Set Resource ID
Example:ins-a2bb34
 */
class DescribeDealsByCondRequest extends AbstractModel
{
    /**
     * @var string Start time 
Example :2016-01-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string End time 
Example:2016-02-01 00:00:00. 
It is recommended that the span does not exceed 3 months.
     */
    public $EndTime;

    /**
     * @var integer The number of records per page. The default is 20, and the maximum is 1,000.
     */
    public $Limit;

    /**
     * @var integer The page number the records start from, starting from 0. The default is 0.
     */
    public $Offset;

    /**
     * @var integer Order status, default is 4 (successful order)
Status of the order
1: unpaid
2: paid 
3: shipment in progress
4: shipped
5`: Shipment Failed
6`: Refunded
7`: Ticket closed
8`: Order expired
9`: Order invalid
10: product invalidated
11: third-party payment refused
12: payment in process
     */
    public $Status;

    /**
     * @var string Sub-order number
Example: 202202021234567
     */
    public $OrderId;

    /**
     * @var string Large order number.
Example: 202202021234566
     */
    public $BigDealId;

    /**
     * @var string Resource ID
Example:ins-a2bb34
     */
    public $ResourceId;

    /**
     * @param string $StartTime Start time 
Example :2016-01-01 00:00:00
     * @param string $EndTime End time 
Example:2016-02-01 00:00:00. 
It is recommended that the span does not exceed 3 months.
     * @param integer $Limit The number of records per page. The default is 20, and the maximum is 1,000.
     * @param integer $Offset The page number the records start from, starting from 0. The default is 0.
     * @param integer $Status Order status, default is 4 (successful order)
Status of the order
1: unpaid
2: paid 
3: shipment in progress
4: shipped
5`: Shipment Failed
6`: Refunded
7`: Ticket closed
8`: Order expired
9`: Order invalid
10: product invalidated
11: third-party payment refused
12: payment in process
     * @param string $OrderId Sub-order number
Example: 202202021234567
     * @param string $BigDealId Large order number.
Example: 202202021234566
     * @param string $ResourceId Resource ID
Example:ins-a2bb34
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
