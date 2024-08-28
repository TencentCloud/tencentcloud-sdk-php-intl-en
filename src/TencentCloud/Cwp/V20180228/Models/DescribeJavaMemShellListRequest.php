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
 * DescribeJavaMemShellList request structure.
 *
 * @method array getFilters() Obtain Filtering criteria: Keywords: IP or host name for fuzzy query; Type or status for precise match; CreateBeginTime, CreateEndTime for time period query
 * @method void setFilters(array $Filters) Set Filtering criteria: Keywords: IP or host name for fuzzy query; Type or status for precise match; CreateBeginTime, CreateEndTime for time period query
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 */
class DescribeJavaMemShellListRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria: Keywords: IP or host name for fuzzy query; Type or status for precise match; CreateBeginTime, CreateEndTime for time period query
     */
    public $Filters;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @param array $Filters Filtering criteria: Keywords: IP or host name for fuzzy query; Type or status for precise match; CreateBeginTime, CreateEndTime for time period query
     * @param integer $Offset Offset, which defaults to 0
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
