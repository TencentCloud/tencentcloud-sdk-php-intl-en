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
 * DescribeAttackLogs request structure.
 *
 * @method integer getLimit() Obtain Number of returns. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returns. The maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria
<li>HttpMethod - String - required: no - attack method (POST|GET)</li>
<li>DateRange - String - required: no - timeframe (store data from the past 3 months), such as the last month ["2019-11-17", "2019-12-17"]</li>
<li>VulType - String threat type - required: no</li>
<li>SrcIp - String attack source IP - required: no</li>
<li>DstIp - String attack target IP - required: no</li>
<li>SrcPort - String attack source port - required: no</li>
<li>DstPort - String attack target port - required: no</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>HttpMethod - String - required: no - attack method (POST|GET)</li>
<li>DateRange - String - required: no - timeframe (store data from the past 3 months), such as the last month ["2019-11-17", "2019-12-17"]</li>
<li>VulType - String threat type - required: no</li>
<li>SrcIp - String attack source IP - required: no</li>
<li>DstIp - String attack target IP - required: no</li>
<li>SrcPort - String attack source port - required: no</li>
<li>DstPort - String attack target port - required: no</li>
 * @method string getUuid() Obtain CWPP client ID
 * @method void setUuid(string $Uuid) Set CWPP client ID
 * @method string getQuuid() Obtain CVM machine ID
 * @method void setQuuid(string $Quuid) Set CVM machine ID
 */
class DescribeAttackLogsRequest extends AbstractModel
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
     * @var array Filter criteria
<li>HttpMethod - String - required: no - attack method (POST|GET)</li>
<li>DateRange - String - required: no - timeframe (store data from the past 3 months), such as the last month ["2019-11-17", "2019-12-17"]</li>
<li>VulType - String threat type - required: no</li>
<li>SrcIp - String attack source IP - required: no</li>
<li>DstIp - String attack target IP - required: no</li>
<li>SrcPort - String attack source port - required: no</li>
<li>DstPort - String attack target port - required: no</li>
     */
    public $Filters;

    /**
     * @var string CWPP client ID
     */
    public $Uuid;

    /**
     * @var string CVM machine ID
     */
    public $Quuid;

    /**
     * @param integer $Limit Number of returns. The maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria
<li>HttpMethod - String - required: no - attack method (POST|GET)</li>
<li>DateRange - String - required: no - timeframe (store data from the past 3 months), such as the last month ["2019-11-17", "2019-12-17"]</li>
<li>VulType - String threat type - required: no</li>
<li>SrcIp - String attack source IP - required: no</li>
<li>DstIp - String attack target IP - required: no</li>
<li>SrcPort - String attack source port - required: no</li>
<li>DstPort - String attack target port - required: no</li>
     * @param string $Uuid CWPP client ID
     * @param string $Quuid CVM machine ID
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
