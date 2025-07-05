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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBanWhiteList request structure.
 *
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method integer getLimit() Obtain Quantity of returns. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. The maximum value is 100.
 * @method array getFilters() Obtain Filter criteria
<li>Keywords - String - required: no - query by keywords</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keywords - String - required: no - query by keywords</li>
 */
class DescribeBanWhiteListRequest extends AbstractModel
{
    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var integer Quantity of returns. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var array Filter criteria
<li>Keywords - String - required: no - query by keywords</li>
     */
    public $Filters;

    /**
     * @param integer $Offset Offset, which defaults to 0
     * @param integer $Limit Quantity of returns. The maximum value is 100.
     * @param array $Filters Filter criteria
<li>Keywords - String - required: no - query by keywords</li>
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
