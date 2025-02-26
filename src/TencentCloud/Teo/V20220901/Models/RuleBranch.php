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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sub-rule branch.
 *
 * @method string getCondition() Obtain [Match condition](https://www.tencentcloud.com/document/product/1145/54759).
 * @method void setCondition(string $Condition) Set [Match condition](https://www.tencentcloud.com/document/product/1145/54759).
 * @method array getActions() Obtain [Operations](Https://Cloud.Tencent.Com/Document/Product/1552/90438#C7bd7e02-9247-4a72-B0e4-11c27cadb198).<Br>Note: actions and subrules cannot both be empty.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setActions(array $Actions) Set [Operations](Https://Cloud.Tencent.Com/Document/Product/1552/90438#C7bd7e02-9247-4a72-B0e4-11c27cadb198).<Br>Note: actions and subrules cannot both be empty.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method array getSubRules() Obtain List of sub-rules. multiple rules exist in this list and are executed sequentially from top to bottom.<br>note: subrules and actions cannot both be empty. currently, only one layer of subrules is supported.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setSubRules(array $SubRules) Set List of sub-rules. multiple rules exist in this list and are executed sequentially from top to bottom.<br>note: subrules and actions cannot both be empty. currently, only one layer of subrules is supported.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class RuleBranch extends AbstractModel
{
    /**
     * @var string [Match condition](https://www.tencentcloud.com/document/product/1145/54759).
     */
    public $Condition;

    /**
     * @var array [Operations](Https://Cloud.Tencent.Com/Document/Product/1552/90438#C7bd7e02-9247-4a72-B0e4-11c27cadb198).<Br>Note: actions and subrules cannot both be empty.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Actions;

    /**
     * @var array List of sub-rules. multiple rules exist in this list and are executed sequentially from top to bottom.<br>note: subrules and actions cannot both be empty. currently, only one layer of subrules is supported.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $SubRules;

    /**
     * @param string $Condition [Match condition](https://www.tencentcloud.com/document/product/1145/54759).
     * @param array $Actions [Operations](Https://Cloud.Tencent.Com/Document/Product/1552/90438#C7bd7e02-9247-4a72-B0e4-11c27cadb198).<Br>Note: actions and subrules cannot both be empty.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param array $SubRules List of sub-rules. multiple rules exist in this list and are executed sequentially from top to bottom.<br>note: subrules and actions cannot both be empty. currently, only one layer of subrules is supported.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new RuleEngineAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("SubRules",$param) and $param["SubRules"] !== null) {
            $this->SubRules = [];
            foreach ($param["SubRules"] as $key => $value){
                $obj = new RuleEngineSubRule();
                $obj->deserialize($value);
                array_push($this->SubRules, $obj);
            }
        }
    }
}
