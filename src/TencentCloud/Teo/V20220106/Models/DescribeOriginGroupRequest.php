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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOriginGroup request structure.
 *
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method integer getLimit() Obtain Pagination parameter
 * @method void setLimit(integer $Limit) Set Pagination parameter
 * @method array getFilters() Obtain Filter parameters
 * @method void setFilters(array $Filters) Set Filter parameters
 * @method string getZoneId() Obtain Site ID
If it’s not specified, all origin groups will be obtained.
 * @method void setZoneId(string $ZoneId) Set Site ID
If it’s not specified, all origin groups will be obtained.
 */
class DescribeOriginGroupRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var integer Pagination parameter
     */
    public $Limit;

    /**
     * @var array Filter parameters
     */
    public $Filters;

    /**
     * @var string Site ID
If it’s not specified, all origin groups will be obtained.
     */
    public $ZoneId;

    /**
     * @param integer $Offset Pagination parameter
     * @param integer $Limit Pagination parameter
     * @param array $Filters Filter parameters
     * @param string $ZoneId Site ID
If it’s not specified, all origin groups will be obtained.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new OriginFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
