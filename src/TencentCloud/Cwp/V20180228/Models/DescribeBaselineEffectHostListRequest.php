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
 * DescribeBaselineEffectHostList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameters (The maximum number is 100.)
 * @method void setLimit(integer $Limit) Set Pagination parameters (The maximum number is 100.)
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method integer getBaselineId() Obtain Baseline ID
 * @method void setBaselineId(integer $BaselineId) Set Baseline ID
 * @method array getFilters() Obtain Filter criteria
<li>AliasName - String - host alias</li>
<li>Status- Uint: 1 - passed; 0 - failed; 5 - under detection</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>AliasName - String - host alias</li>
<li>Status- Uint: 1 - passed; 0 - failed; 5 - under detection</li>
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method array getUuidList() Obtain Host UUID array
 * @method void setUuidList(array $UuidList) Set Host UUID array
 */
class DescribeBaselineEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameters (The maximum number is 100.)
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var integer Baseline ID
     */
    public $BaselineId;

    /**
     * @var array Filter criteria
<li>AliasName - String - host alias</li>
<li>Status- Uint: 1 - passed; 0 - failed; 5 - under detection</li>
     */
    public $Filters;

    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var array Host UUID array
     */
    public $UuidList;

    /**
     * @param integer $Limit Pagination parameters (The maximum number is 100.)
     * @param integer $Offset Pagination parameter
     * @param integer $BaselineId Baseline ID
     * @param array $Filters Filter criteria
<li>AliasName - String - host alias</li>
<li>Status- Uint: 1 - passed; 0 - failed; 5 - under detection</li>
     * @param integer $StrategyId Policy ID
     * @param array $UuidList Host UUID array
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

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("UuidList",$param) and $param["UuidList"] !== null) {
            $this->UuidList = $param["UuidList"];
        }
    }
}
