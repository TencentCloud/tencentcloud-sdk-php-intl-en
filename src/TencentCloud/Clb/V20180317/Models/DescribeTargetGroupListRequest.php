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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetGroupList request structure.
 *
 * @method array getTargetGroupIds() Obtain <p>Target group ID array.</p>
 * @method void setTargetGroupIds(array $TargetGroupIds) Set <p>Target group ID array.</p>
 * @method array getFilters() Obtain <p>Filter condition array. Support TargetGroupVpcId and TargetGroupName. Mutually exclusive with TargetGroupIds. Prioritize target group ID.</p>
 * @method void setFilters(array $Filters) Set <p>Filter condition array. Support TargetGroupVpcId and TargetGroupName. Mutually exclusive with TargetGroupIds. Prioritize target group ID.</p>
 * @method integer getOffset() Obtain <p>Starting display offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Starting display offset.</p>
 * @method integer getLimit() Obtain <p>Number of entries displayed per page.</p><p>Value ranges from 0 to 100.</p><p>The default value is 20.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of entries displayed per page.</p><p>Value ranges from 0 to 100.</p><p>The default value is 20.</p>
 */
class DescribeTargetGroupListRequest extends AbstractModel
{
    /**
     * @var array <p>Target group ID array.</p>
     */
    public $TargetGroupIds;

    /**
     * @var array <p>Filter condition array. Support TargetGroupVpcId and TargetGroupName. Mutually exclusive with TargetGroupIds. Prioritize target group ID.</p>
     */
    public $Filters;

    /**
     * @var integer <p>Starting display offset.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of entries displayed per page.</p><p>Value ranges from 0 to 100.</p><p>The default value is 20.</p>
     */
    public $Limit;

    /**
     * @param array $TargetGroupIds <p>Target group ID array.</p>
     * @param array $Filters <p>Filter condition array. Support TargetGroupVpcId and TargetGroupName. Mutually exclusive with TargetGroupIds. Prioritize target group ID.</p>
     * @param integer $Offset <p>Starting display offset.</p>
     * @param integer $Limit <p>Number of entries displayed per page.</p><p>Value ranges from 0 to 100.</p><p>The default value is 20.</p>
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
        if (array_key_exists("TargetGroupIds",$param) and $param["TargetGroupIds"] !== null) {
            $this->TargetGroupIds = $param["TargetGroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
