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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocationRuleSummary request structure.
 *
 * @method integer getLimit() Obtain Specifies the data quantity per fetch. the maximum value is 1000.
 * @method void setLimit(integer $Limit) Set Specifies the data quantity per fetch. the maximum value is 1000.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method string getMonth() Obtain Month, which is the current month by default if not provided.
 * @method void setMonth(string $Month) Set Month, which is the current month by default if not provided.
 * @method integer getType() Obtain Public area policy type, for filtering.
Enumeration values are as follows:. 
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
 * @method void setType(integer $Type) Set Public area policy type, for filtering.
Enumeration values are as follows:. 
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
 * @method string getName() Obtain Sharing rule name or cost allocation unit name, used for fuzzy filter criteria.
 * @method void setName(string $Name) Set Sharing rule name or cost allocation unit name, used for fuzzy filter criteria.
 */
class DescribeAllocationRuleSummaryRequest extends AbstractModel
{
    /**
     * @var integer Specifies the data quantity per fetch. the maximum value is 1000.
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var string Month, which is the current month by default if not provided.
     */
    public $Month;

    /**
     * @var integer Public area policy type, for filtering.
Enumeration values are as follows:. 
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
     */
    public $Type;

    /**
     * @var string Sharing rule name or cost allocation unit name, used for fuzzy filter criteria.
     */
    public $Name;

    /**
     * @param integer $Limit Specifies the data quantity per fetch. the maximum value is 1000.
     * @param integer $Offset Pagination offset
     * @param string $Month Month, which is the current month by default if not provided.
     * @param integer $Type Public area policy type, for filtering.
Enumeration values are as follows:. 
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
     * @param string $Name Sharing rule name or cost allocation unit name, used for fuzzy filter criteria.
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

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
