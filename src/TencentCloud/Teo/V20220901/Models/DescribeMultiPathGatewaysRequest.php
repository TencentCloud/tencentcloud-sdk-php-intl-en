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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMultiPathGateways request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Pagination limit. Default value: 20, maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Pagination limit. Default value: 20, maximum value: 1000.
 * @method array getFilters() Obtain Filter fields for gateway list. If this parameter is left empty, return the current appid's all gateway information. detailed filter criteria:.
<Li>Gateway-Type: filter by gateway type. valid values: cloud and private, representing cloud gateway and private gateway respectively.</li>
<Li>Keyword: filter by keyword in the gateway name.</li>
 * @method void setFilters(array $Filters) Set Filter fields for gateway list. If this parameter is left empty, return the current appid's all gateway information. detailed filter criteria:.
<Li>Gateway-Type: filter by gateway type. valid values: cloud and private, representing cloud gateway and private gateway respectively.</li>
<Li>Keyword: filter by keyword in the gateway name.</li>
 */
class DescribeMultiPathGatewaysRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Pagination limit. Default value: 20, maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter fields for gateway list. If this parameter is left empty, return the current appid's all gateway information. detailed filter criteria:.
<Li>Gateway-Type: filter by gateway type. valid values: cloud and private, representing cloud gateway and private gateway respectively.</li>
<Li>Keyword: filter by keyword in the gateway name.</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Pagination limit. Default value: 20, maximum value: 1000.
     * @param array $Filters Filter fields for gateway list. If this parameter is left empty, return the current appid's all gateway information. detailed filter criteria:.
<Li>Gateway-Type: filter by gateway type. valid values: cloud and private, representing cloud gateway and private gateway respectively.</li>
<Li>Keyword: filter by keyword in the gateway name.</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
