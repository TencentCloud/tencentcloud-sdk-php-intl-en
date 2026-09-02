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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportEDRRules request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter criteria: Name, RuleContent, RuleType, ContentType, Action, Level, DetectMode, DetectType, AttackStage, Status</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria: Name, RuleContent, RuleType, ContentType, Action, Level, DetectMode, DetectType, AttackStage, Status</p>
 * @method string getOrder() Obtain <p>Sorting method (case insensitive): ASC for ascending order; DESC for descending order</p>
 * @method void setOrder(string $Order) Set <p>Sorting method (case insensitive): ASC for ascending order; DESC for descending order</p>
 * @method string getBy() Obtain <p>Sort column: ModifyTime</p>
 * @method void setBy(string $By) Set <p>Sort column: ModifyTime</p>
 */
class ExportEDRRulesRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter criteria: Name, RuleContent, RuleType, ContentType, Action, Level, DetectMode, DetectType, AttackStage, Status</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting method (case insensitive): ASC for ascending order; DESC for descending order</p>
     */
    public $Order;

    /**
     * @var string <p>Sort column: ModifyTime</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter criteria: Name, RuleContent, RuleType, ContentType, Action, Level, DetectMode, DetectType, AttackStage, Status</p>
     * @param string $Order <p>Sorting method (case insensitive): ASC for ascending order; DESC for descending order</p>
     * @param string $By <p>Sort column: ModifyTime</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
