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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeL4ProxyRules request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyId() Obtain Layer 4 proxy instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer 4 proxy instance ID.
 * @method integer getOffset() Obtain Paginated query offset. Defaults to 0 when not specified.
 * @method void setOffset(integer $Offset) Set Paginated query offset. Defaults to 0 when not specified.
 * @method integer getLimit() Obtain Paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Paginated query limit. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain Filter criteria. The upper limit for Filters.Values is 20. All rule information under the current Layer 4 instance will be returned if left empty. The detailed filter criteria are as follows: <li>rule-tag: Filters rules under the Layer 4 proxy instance according to rule tag.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The upper limit for Filters.Values is 20. All rule information under the current Layer 4 instance will be returned if left empty. The detailed filter criteria are as follows: <li>rule-tag: Filters rules under the Layer 4 proxy instance according to rule tag.</li>
 */
class DescribeL4ProxyRulesRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Layer 4 proxy instance ID.
     */
    public $ProxyId;

    /**
     * @var integer Paginated query offset. Defaults to 0 when not specified.
     */
    public $Offset;

    /**
     * @var integer Paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The upper limit for Filters.Values is 20. All rule information under the current Layer 4 instance will be returned if left empty. The detailed filter criteria are as follows: <li>rule-tag: Filters rules under the Layer 4 proxy instance according to rule tag.</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyId Layer 4 proxy instance ID.
     * @param integer $Offset Paginated query offset. Defaults to 0 when not specified.
     * @param integer $Limit Paginated query limit. Default value: 20. Maximum value: 1000.
     * @param array $Filters Filter criteria. The upper limit for Filters.Values is 20. All rule information under the current Layer 4 instance will be returned if left empty. The detailed filter criteria are as follows: <li>rule-tag: Filters rules under the Layer 4 proxy instance according to rule tag.</li>
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
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
