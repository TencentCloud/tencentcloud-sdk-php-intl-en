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
 * DescribeEmergencyVulList request structure.
 *
 * @method integer getLimit() Obtain Quantity of returns. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. The maximum value is 100.
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method array getFilters() Obtain Filter criteria
<li>Status - String - required: Yes - vulnerability status filter: 0: not detected; 1: at risk; 2: no risk; 3: show progress while detecting</li>
<li>Level - String - required: no - filter by vulnerability level: 1 - low; 2 - medium; 3 - high; 4 - prompt</li>
<li>VulName - String - required: no - vulnerability name search</li>
<li>Uuids- String - required: no - host uuid</li>
<li>IsSupportDefense - int- required: no - whether to support defense: 0: no; 1: yes</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Status - String - required: Yes - vulnerability status filter: 0: not detected; 1: at risk; 2: no risk; 3: show progress while detecting</li>
<li>Level - String - required: no - filter by vulnerability level: 1 - low; 2 - medium; 3 - high; 4 - prompt</li>
<li>VulName - String - required: no - vulnerability name search</li>
<li>Uuids- String - required: no - host uuid</li>
<li>IsSupportDefense - int- required: no - whether to support defense: 0: no; 1: yes</li>
 * @method string getOrder() Obtain Sorting method: desc and asc
 * @method void setOrder(string $Order) Set Sorting method: desc and asc
 * @method string getBy() Obtain Sorting field PublishDate  LastScanTime HostCount
 * @method void setBy(string $By) Set Sorting field PublishDate  LastScanTime HostCount
 * @method boolean getHotspotAttack() Obtain Whether hot spot vulnerabilities
 * @method void setHotspotAttack(boolean $HotspotAttack) Set Whether hot spot vulnerabilities
 */
class DescribeEmergencyVulListRequest extends AbstractModel
{
    /**
     * @var integer Quantity of returns. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Status - String - required: Yes - vulnerability status filter: 0: not detected; 1: at risk; 2: no risk; 3: show progress while detecting</li>
<li>Level - String - required: no - filter by vulnerability level: 1 - low; 2 - medium; 3 - high; 4 - prompt</li>
<li>VulName - String - required: no - vulnerability name search</li>
<li>Uuids- String - required: no - host uuid</li>
<li>IsSupportDefense - int- required: no - whether to support defense: 0: no; 1: yes</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: desc and asc
     */
    public $Order;

    /**
     * @var string Sorting field PublishDate  LastScanTime HostCount
     */
    public $By;

    /**
     * @var boolean Whether hot spot vulnerabilities
     */
    public $HotspotAttack;

    /**
     * @param integer $Limit Quantity of returns. The maximum value is 100.
     * @param integer $Offset Offset, which defaults to 0
     * @param array $Filters Filter criteria
<li>Status - String - required: Yes - vulnerability status filter: 0: not detected; 1: at risk; 2: no risk; 3: show progress while detecting</li>
<li>Level - String - required: no - filter by vulnerability level: 1 - low; 2 - medium; 3 - high; 4 - prompt</li>
<li>VulName - String - required: no - vulnerability name search</li>
<li>Uuids- String - required: no - host uuid</li>
<li>IsSupportDefense - int- required: no - whether to support defense: 0: no; 1: yes</li>
     * @param string $Order Sorting method: desc and asc
     * @param string $By Sorting field PublishDate  LastScanTime HostCount
     * @param boolean $HotspotAttack Whether hot spot vulnerabilities
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
                $obj = new Filters();
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

        if (array_key_exists("HotspotAttack",$param) and $param["HotspotAttack"] !== null) {
            $this->HotspotAttack = $param["HotspotAttack"];
        }
    }
}
