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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Comparison Rules
 *
 * @method array getItems() Obtain Comparison Criteria List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setItems(array $Items) Set Comparison Criteria List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleStep() Obtain Default cycle of the periodic template, Unit: seconds
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleStep(integer $CycleStep) Set Default cycle of the periodic template, Unit: seconds
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getComputeExpression() Obtain o represents OR, a represents AND, numbers represent items' indices
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComputeExpression(string $ComputeExpression) Set o represents OR, a represents AND, numbers represent items' indices
Note: This field may return null, indicating that no valid value can be obtained.
 */
class CompareRule extends AbstractModel
{
    /**
     * @var array Comparison Criteria List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Items;

    /**
     * @var integer Default cycle of the periodic template, Unit: seconds
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleStep;

    /**
     * @var string o represents OR, a represents AND, numbers represent items' indices
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComputeExpression;

    /**
     * @param array $Items Comparison Criteria List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleStep Default cycle of the periodic template, Unit: seconds
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ComputeExpression o represents OR, a represents AND, numbers represent items' indices
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new CompareRuleItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("ComputeExpression",$param) and $param["ComputeExpression"] !== null) {
            $this->ComputeExpression = $param["ComputeExpression"];
        }
    }
}
