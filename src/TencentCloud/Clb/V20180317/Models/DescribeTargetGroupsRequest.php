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
 * DescribeTargetGroups request structure.
 *
 * @method array getTargetGroupIds() Obtain Target group ID, which is exclusive of `Filters`.
 * @method void setTargetGroupIds(array $TargetGroupIds) Set Target group ID, which is exclusive of `Filters`.
 * @method integer getLimit() Obtain Limit of the number of displayed results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Limit of the number of displayed results. Default value: 20.
 * @method integer getOffset() Obtain Starting display offset
 * @method void setOffset(integer $Offset) Set Starting display offset
 * @method array getFilters() Obtain Filter condition array, mutually exclusive with TargetGroupIds, supports TargetGroupVpcId (vpc ID), TargetGroupName (target group name), and Tag.
 * @method void setFilters(array $Filters) Set Filter condition array, mutually exclusive with TargetGroupIds, supports TargetGroupVpcId (vpc ID), TargetGroupName (target group name), and Tag.
 */
class DescribeTargetGroupsRequest extends AbstractModel
{
    /**
     * @var array Target group ID, which is exclusive of `Filters`.
     */
    public $TargetGroupIds;

    /**
     * @var integer Limit of the number of displayed results. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Starting display offset
     */
    public $Offset;

    /**
     * @var array Filter condition array, mutually exclusive with TargetGroupIds, supports TargetGroupVpcId (vpc ID), TargetGroupName (target group name), and Tag.
     */
    public $Filters;

    /**
     * @param array $TargetGroupIds Target group ID, which is exclusive of `Filters`.
     * @param integer $Limit Limit of the number of displayed results. Default value: 20.
     * @param integer $Offset Starting display offset
     * @param array $Filters Filter condition array, mutually exclusive with TargetGroupIds, supports TargetGroupVpcId (vpc ID), TargetGroupName (target group name), and Tag.
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
