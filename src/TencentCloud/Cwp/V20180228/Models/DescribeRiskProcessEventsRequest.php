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
 * DescribeRiskProcessEvents request structure.
 *
 * @method array getFilters() Obtain Filtering criteria
<li>HostId - String - required: no - host ID</li>
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>ProcessId - String - required: no - process ID</li>
<li>FilePath - String - required: no - process path</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - status for filtering: 0: pending; 1: scanning; 2: scanned; 3: exited; 4: trusted</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>HostId - String - required: no - host ID</li>
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>ProcessId - String - required: no - process ID</li>
<li>FilePath - String - required: no - process path</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - status for filtering: 0: pending; 1: scanning; 2: scanned; 3: exited; 4: trusted</li>
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getOrder() Obtain Sorting order: [ASC|DESC]
 * @method void setOrder(string $Order) Set Sorting order: [ASC|DESC]
 * @method string getBy() Obtain [StartTime: Process start time | DetectTime: Last detection time]
 * @method void setBy(string $By) Set [StartTime: Process start time | DetectTime: Last detection time]
 */
class DescribeRiskProcessEventsRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria
<li>HostId - String - required: no - host ID</li>
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>ProcessId - String - required: no - process ID</li>
<li>FilePath - String - required: no - process path</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - status for filtering: 0: pending; 1: scanning; 2: scanned; 3: exited; 4: trusted</li>
     */
    public $Filters;

    /**
     * @var integer Number of results to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting order: [ASC|DESC]
     */
    public $Order;

    /**
     * @var string [StartTime: Process start time | DetectTime: Last detection time]
     */
    public $By;

    /**
     * @param array $Filters Filtering criteria
<li>HostId - String - required: no - host ID</li>
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>ProcessId - String - required: no - process ID</li>
<li>FilePath - String - required: no - process path</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - status for filtering: 0: pending; 1: scanning; 2: scanned; 3: exited; 4: trusted</li>
     * @param integer $Limit Number of results to be returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $Order Sorting order: [ASC|DESC]
     * @param string $By [StartTime: Process start time | DetectTime: Last detection time]
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
