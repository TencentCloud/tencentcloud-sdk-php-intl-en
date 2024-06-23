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
 * RuleDimCnt Rule Dimension Statistics
 *
 * @method integer getDim() Obtain 1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity
 * @method void setDim(integer $Dim) Set 1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity
 * @method integer getCnt() Obtain count Number
 * @method void setCnt(integer $Cnt) Set count Number
 */
class RuleDimCnt extends AbstractModel
{
    /**
     * @var integer 1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity
     */
    public $Dim;

    /**
     * @var integer count Number
     */
    public $Cnt;

    /**
     * @param integer $Dim 1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity
     * @param integer $Cnt count Number
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
        if (array_key_exists("Dim",$param) and $param["Dim"] !== null) {
            $this->Dim = $param["Dim"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }
    }
}
