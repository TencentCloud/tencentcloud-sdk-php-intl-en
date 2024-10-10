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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Capacity
 * @method void setLimit(integer $Limit) Set Capacity
 * @method array getFilters() Obtain Filter array
 * @method void setFilters(array $Filters) Set Filter array
 * @method integer getFreeDelayFlag() Obtain Deletion delay flag.
 * @method void setFreeDelayFlag(integer $FreeDelayFlag) Set Deletion delay flag.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Capacity
     */
    public $Limit;

    /**
     * @var array Filter array
     */
    public $Filters;

    /**
     * @var integer Deletion delay flag.
     */
    public $FreeDelayFlag;

    /**
     * @param integer $Offset Offset.
     * @param integer $Limit Capacity
     * @param array $Filters Filter array
     * @param integer $FreeDelayFlag Deletion delay flag.
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
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("FreeDelayFlag",$param) and $param["FreeDelayFlag"] !== null) {
            $this->FreeDelayFlag = $param["FreeDelayFlag"];
        }
    }
}
