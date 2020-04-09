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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVuls request structure.
 *
 * @method string getVulType() Obtain Vulnerability type.
<li>WEB: web application vulnerability</li>
<li>SYSTEM: system component vulnerability</li>
<li>BASELINE: security baseline</li>
 * @method void setVulType(string $VulType) Set Vulnerability type.
<li>WEB: web application vulnerability</li>
<li>SYSTEM: system component vulnerability</li>
<li>BASELINE: security baseline</li>
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter.
<li>Status - String - Required: No - Filter by status (UN_OPERATED: to be processed, FIXED: fixed)

Only one value is allowed for the `Status` filter, and "OR" logic is not supported.
 * @method void setFilters(array $Filters) Set Filter.
<li>Status - String - Required: No - Filter by status (UN_OPERATED: to be processed, FIXED: fixed)

Only one value is allowed for the `Status` filter, and "OR" logic is not supported.
 */
class DescribeVulsRequest extends AbstractModel
{
    /**
     * @var string Vulnerability type.
<li>WEB: web application vulnerability</li>
<li>SYSTEM: system component vulnerability</li>
<li>BASELINE: security baseline</li>
     */
    public $VulType;

    /**
     * @var integer Number of results to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter.
<li>Status - String - Required: No - Filter by status (UN_OPERATED: to be processed, FIXED: fixed)

Only one value is allowed for the `Status` filter, and "OR" logic is not supported.
     */
    public $Filters;

    /**
     * @param string $VulType Vulnerability type.
<li>WEB: web application vulnerability</li>
<li>SYSTEM: system component vulnerability</li>
<li>BASELINE: security baseline</li>
     * @param integer $Limit Number of results to be returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter.
<li>Status - String - Required: No - Filter by status (UN_OPERATED: to be processed, FIXED: fixed)

Only one value is allowed for the `Status` filter, and "OR" logic is not supported.
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
        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
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
    }
}
