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
 * DescribeBaselineWeakPasswordList request structure.
 *
 * @method array getFilters() Obtain <li>WeakPassword - string - required: no - weak password</li>
 * @method void setFilters(array $Filters) Set <li>WeakPassword - string - required: no - weak password</li>
 * @method integer getLimit() Obtain Limit Entries, 10 by default, up to 100
 * @method void setLimit(integer $Limit) Set Limit Entries, 10 by default, up to 100
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method string getOrder() Obtain Sorting order [ASC: ascending|DESC: descending]
 * @method void setOrder(string $Order) Set Sorting order [ASC: ascending|DESC: descending]
 * @method string getBy() Obtain Sorting column [CreateTime|ModifyTime]
 * @method void setBy(string $By) Set Sorting column [CreateTime|ModifyTime]
 */
class DescribeBaselineWeakPasswordListRequest extends AbstractModel
{
    /**
     * @var array <li>WeakPassword - string - required: no - weak password</li>
     */
    public $Filters;

    /**
     * @var integer Limit Entries, 10 by default, up to 100
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var string Sorting order [ASC: ascending|DESC: descending]
     */
    public $Order;

    /**
     * @var string Sorting column [CreateTime|ModifyTime]
     */
    public $By;

    /**
     * @param array $Filters <li>WeakPassword - string - required: no - weak password</li>
     * @param integer $Limit Limit Entries, 10 by default, up to 100
     * @param integer $Offset Offset, which is 0 by default.
     * @param string $Order Sorting order [ASC: ascending|DESC: descending]
     * @param string $By Sorting column [CreateTime|ModifyTime]
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
