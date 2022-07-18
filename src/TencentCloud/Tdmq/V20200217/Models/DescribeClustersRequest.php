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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters request structure.
 *
 * @method integer getOffset() Obtain Start offset, which defaults to 0 if left empty.
 * @method void setOffset(integer $Offset) Set Start offset, which defaults to 0 if left empty.
 * @method integer getLimit() Obtain The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
 * @method void setLimit(integer $Limit) Set The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
 * @method array getClusterIdList() Obtain Filter by cluster ID.
 * @method void setClusterIdList(array $ClusterIdList) Set Filter by cluster ID.
 * @method boolean getIsTagFilter() Obtain Whether to filter by tag.
 * @method void setIsTagFilter(boolean $IsTagFilter) Set Whether to filter by tag.
 * @method array getFilters() Obtain Filter. Currently, you can filter by tag.
 * @method void setFilters(array $Filters) Set Filter. Currently, you can filter by tag.
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var integer Start offset, which defaults to 0 if left empty.
     */
    public $Offset;

    /**
     * @var integer The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
     */
    public $Limit;

    /**
     * @var array Filter by cluster ID.
     */
    public $ClusterIdList;

    /**
     * @var boolean Whether to filter by tag.
     */
    public $IsTagFilter;

    /**
     * @var array Filter. Currently, you can filter by tag.
     */
    public $Filters;

    /**
     * @param integer $Offset Start offset, which defaults to 0 if left empty.
     * @param integer $Limit The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
     * @param array $ClusterIdList Filter by cluster ID.
     * @param boolean $IsTagFilter Whether to filter by tag.
     * @param array $Filters Filter. Currently, you can filter by tag.
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

        if (array_key_exists("ClusterIdList",$param) and $param["ClusterIdList"] !== null) {
            $this->ClusterIdList = $param["ClusterIdList"];
        }

        if (array_key_exists("IsTagFilter",$param) and $param["IsTagFilter"] !== null) {
            $this->IsTagFilter = $param["IsTagFilter"];
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
