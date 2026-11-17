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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed description of conflict processing
 *
 * @method string getConditionColumn() Obtain Columns for conditional overwrite.
 * @method void setConditionColumn(string $ConditionColumn) Set Columns for conditional overwrite.
 * @method string getConditionOperator() Obtain Condition coverage operation. Currently, only > is supported.
 * @method void setConditionOperator(string $ConditionOperator) Set Condition coverage operation. Currently, only > is supported.
 * @method string getConditionOrderInSrcAndDst() Obtain Condition coverage priority processing. Supported types are >, <, and =.
 * @method void setConditionOrderInSrcAndDst(string $ConditionOrderInSrcAndDst) Set Condition coverage priority processing. Supported types are >, <, and =.
 */
class ConflictHandleOption extends AbstractModel
{
    /**
     * @var string Columns for conditional overwrite.
     */
    public $ConditionColumn;

    /**
     * @var string Condition coverage operation. Currently, only > is supported.
     */
    public $ConditionOperator;

    /**
     * @var string Condition coverage priority processing. Supported types are >, <, and =.
     */
    public $ConditionOrderInSrcAndDst;

    /**
     * @param string $ConditionColumn Columns for conditional overwrite.
     * @param string $ConditionOperator Condition coverage operation. Currently, only > is supported.
     * @param string $ConditionOrderInSrcAndDst Condition coverage priority processing. Supported types are >, <, and =.
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
