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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters for querying jobs associated with a specific scenario.
 *
 * @method integer getOffset() Obtain Offset, default value is 0.
 * @method void setOffset(integer $Offset) Set Offset, default value is 0.
 * @method integer getLimit() Obtain Number of returns. Default value is 20, maximum is 100.
 * @method void setLimit(integer $Limit) Set Number of returns. Default value is 20, maximum is 100.
 * @method string getOrderBy() Obtain Field for sorting.
 * @method void setOrderBy(string $OrderBy) Set Field for sorting.
 * @method boolean getAscend() Obtain Whether in ascending order.
 * @method void setAscend(boolean $Ascend) Set Whether in ascending order.
 */
class ScenarioRelatedJobsParams extends AbstractModel
{
    /**
     * @var integer Offset, default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns. Default value is 20, maximum is 100.
     */
    public $Limit;

    /**
     * @var string Field for sorting.
     */
    public $OrderBy;

    /**
     * @var boolean Whether in ascending order.
     */
    public $Ascend;

    /**
     * @param integer $Offset Offset, default value is 0.
     * @param integer $Limit Number of returns. Default value is 20, maximum is 100.
     * @param string $OrderBy Field for sorting.
     * @param boolean $Ascend Whether in ascending order.
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }
    }
}
