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
 * DescribeRabbitMQVipInstances request structure.
 *
 * @method array getFilters() Obtain Query condition filter
 * @method void setFilters(array $Filters) Set Query condition filter
 * @method integer getLimit() Obtain The maximum number of queried items, which defaults to 20.
 * @method void setLimit(integer $Limit) Set The maximum number of queried items, which defaults to 20.
 * @method integer getOffset() Obtain Start offset for query
 * @method void setOffset(integer $Offset) Set Start offset for query
 */
class DescribeRabbitMQVipInstancesRequest extends AbstractModel
{
    /**
     * @var array Query condition filter
     */
    public $Filters;

    /**
     * @var integer The maximum number of queried items, which defaults to 20.
     */
    public $Limit;

    /**
     * @var integer Start offset for query
     */
    public $Offset;

    /**
     * @param array $Filters Query condition filter
     * @param integer $Limit The maximum number of queried items, which defaults to 20.
     * @param integer $Offset Start offset for query
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
