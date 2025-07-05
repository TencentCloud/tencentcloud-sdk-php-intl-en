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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpstreams request structure.
 *
 * @method integer getLimit() Obtain Number of entries per page
 * @method void setLimit(integer $Limit) Set Number of entries per page
 * @method integer getOffset() Obtain The starting position of paging
 * @method void setOffset(integer $Offset) Set The starting position of paging
 * @method array getFilters() Obtain Filters. Valid values: `UpstreamId` and `UpstreamName`
 * @method void setFilters(array $Filters) Set Filters. Valid values: `UpstreamId` and `UpstreamName`
 */
class DescribeUpstreamsRequest extends AbstractModel
{
    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @var integer The starting position of paging
     */
    public $Offset;

    /**
     * @var array Filters. Valid values: `UpstreamId` and `UpstreamName`
     */
    public $Filters;

    /**
     * @param integer $Limit Number of entries per page
     * @param integer $Offset The starting position of paging
     * @param array $Filters Filters. Valid values: `UpstreamId` and `UpstreamName`
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
    }
}
