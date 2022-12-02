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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed description of conflict processing
 *
 * @method string getConditionColumn() Obtain Conditionally overwritten column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConditionColumn(string $ConditionColumn) Set Conditionally overwritten column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConditionOperator() Obtain Conditional overwrite operation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConditionOperator(string $ConditionOperator) Set Conditional overwrite operation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConditionOrderInSrcAndDst() Obtain Conditional overwrite priority configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConditionOrderInSrcAndDst(string $ConditionOrderInSrcAndDst) Set Conditional overwrite priority configuration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConflictHandleOption extends AbstractModel
{
    /**
     * @var string Conditionally overwritten column
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConditionColumn;

    /**
     * @var string Conditional overwrite operation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConditionOperator;

    /**
     * @var string Conditional overwrite priority configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConditionOrderInSrcAndDst;

    /**
     * @param string $ConditionColumn Conditionally overwritten column
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConditionOperator Conditional overwrite operation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConditionOrderInSrcAndDst Conditional overwrite priority configuration
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ConditionColumn",$param) and $param["ConditionColumn"] !== null) {
            $this->ConditionColumn = $param["ConditionColumn"];
        }

        if (array_key_exists("ConditionOperator",$param) and $param["ConditionOperator"] !== null) {
            $this->ConditionOperator = $param["ConditionOperator"];
        }

        if (array_key_exists("ConditionOrderInSrcAndDst",$param) and $param["ConditionOrderInSrcAndDst"] !== null) {
            $this->ConditionOrderInSrcAndDst = $param["ConditionOrderInSrcAndDst"];
        }
    }
}
