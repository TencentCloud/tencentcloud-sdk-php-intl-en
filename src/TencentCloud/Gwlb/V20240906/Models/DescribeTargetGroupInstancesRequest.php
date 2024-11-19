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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetGroupInstances request structure.
 *
 * @method array getFilters() Obtain Filter criteria. Currently, only filtering by TargetGroupId, BindIP, or InstanceId is supported.
 * @method void setFilters(array $Filters) Set Filter criteria. Currently, only filtering by TargetGroupId, BindIP, or InstanceId is supported.
 * @method integer getLimit() Obtain Number of displayed results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of displayed results. Default value: 20.
 * @method integer getOffset() Obtain Displayed offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Displayed offset. Default value: 0.
 */
class DescribeTargetGroupInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter criteria. Currently, only filtering by TargetGroupId, BindIP, or InstanceId is supported.
     */
    public $Filters;

    /**
     * @var integer Number of displayed results. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Displayed offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param array $Filters Filter criteria. Currently, only filtering by TargetGroupId, BindIP, or InstanceId is supported.
     * @param integer $Limit Number of displayed results. Default value: 20.
     * @param integer $Offset Displayed offset. Default value: 0.
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
