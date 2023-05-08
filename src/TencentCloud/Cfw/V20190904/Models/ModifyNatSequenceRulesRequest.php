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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNatSequenceRules request structure.
 *
 * @method array getRuleChangeItems() Obtain Rule sequence number. Values: `OrderIndex` (Original sequence number), `NewOrderIndex` (New sequence number)
 * @method void setRuleChangeItems(array $RuleChangeItems) Set Rule sequence number. Values: `OrderIndex` (Original sequence number), `NewOrderIndex` (New sequence number)
 * @method integer getDirection() Obtain Rule direction. Values: `1` (Inbound) and `0` (Outbound)
 * @method void setDirection(integer $Direction) Set Rule direction. Values: `1` (Inbound) and `0` (Outbound)
 */
class ModifyNatSequenceRulesRequest extends AbstractModel
{
    /**
     * @var array Rule sequence number. Values: `OrderIndex` (Original sequence number), `NewOrderIndex` (New sequence number)
     */
    public $RuleChangeItems;

    /**
     * @var integer Rule direction. Values: `1` (Inbound) and `0` (Outbound)
     */
    public $Direction;

    /**
     * @param array $RuleChangeItems Rule sequence number. Values: `OrderIndex` (Original sequence number), `NewOrderIndex` (New sequence number)
     * @param integer $Direction Rule direction. Values: `1` (Inbound) and `0` (Outbound)
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
        if (array_key_exists("RuleChangeItems",$param) and $param["RuleChangeItems"] !== null) {
            $this->RuleChangeItems = [];
            foreach ($param["RuleChangeItems"] as $key => $value){
                $obj = new RuleChangeItem();
                $obj->deserialize($value);
                array_push($this->RuleChangeItems, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
