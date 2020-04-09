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
 * DescribeNonlocalLoginPlaces request structure.
 *
 * @method string getUuid() Obtain Agent `Uuid`.
 * @method void setUuid(string $Uuid) Set Agent `Uuid`.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter.
<li>Keywords - String - Required: No - Query keywords</li>
<li>Status - String - Required: No - Login status (NON_LOCAL_LOGIN: unusual login location, NORMAL_LOGIN: intended login)</li>
 * @method void setFilters(array $Filters) Set Filter.
<li>Keywords - String - Required: No - Query keywords</li>
<li>Status - String - Required: No - Login status (NON_LOCAL_LOGIN: unusual login location, NORMAL_LOGIN: intended login)</li>
 */
class DescribeNonlocalLoginPlacesRequest extends AbstractModel
{
    /**
     * @var string Agent `Uuid`.
     */
    public $Uuid;

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
<li>Keywords - String - Required: No - Query keywords</li>
<li>Status - String - Required: No - Login status (NON_LOCAL_LOGIN: unusual login location, NORMAL_LOGIN: intended login)</li>
     */
    public $Filters;

    /**
     * @param string $Uuid Agent `Uuid`.
     * @param integer $Limit Number of results to be returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter.
<li>Keywords - String - Required: No - Query keywords</li>
<li>Status - String - Required: No - Login status (NON_LOCAL_LOGIN: unusual login location, NORMAL_LOGIN: intended login)</li>
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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
