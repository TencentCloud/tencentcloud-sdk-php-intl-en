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
 * Quick analysis of statistics data
 *
 * @method integer getCount() Obtain Number
 * @method void setCount(integer $Count) Set Number
 * @method float getRatio() Obtain Ratio
 * @method void setRatio(float $Ratio) Set Ratio
 * @method string getValue() Obtain Value
 * @method void setValue(string $Value) Set Value
 */
class FieldValueRatioInfo extends AbstractModel
{
    /**
     * @var integer Number
     */
    public $Count;

    /**
     * @var float Ratio
     */
    public $Ratio;

    /**
     * @var string Value
     */
    public $Value;

    /**
     * @param integer $Count Number
     * @param float $Ratio Ratio
     * @param string $Value Value
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
