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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.ConfigManual.CalcValue
 *
 * @method string getDefault() Obtain Default value.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDefault(string $Default) Set Default value.
Note: This field may return null, indicating that no valid value was found.
 * @method string getFixed() Obtain Fixed value.
Note: This field may return null, indicating that no valid value was found.
 * @method void setFixed(string $Fixed) Set Fixed value.
Note: This field may return null, indicating that no valid value was found.
 * @method string getMax() Obtain Maximum value.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMax(string $Max) Set Maximum value.
Note: This field may return null, indicating that no valid value was found.
 * @method string getMin() Obtain Minimum value.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMin(string $Min) Set Minimum value.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getNeed() Obtain Required or not.
 * @method void setNeed(boolean $Need) Set Required or not.
 */
class DescribePolicyConditionListConfigManualCalcValue extends AbstractModel
{
    /**
     * @var string Default value.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Default;

    /**
     * @var string Fixed value.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Fixed;

    /**
     * @var string Maximum value.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Max;

    /**
     * @var string Minimum value.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Min;

    /**
     * @var boolean Required or not.
     */
    public $Need;

    /**
     * @param string $Default Default value.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Fixed Fixed value.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Max Maximum value.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Min Minimum value.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $Need Required or not.
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
        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Fixed",$param) and $param["Fixed"] !== null) {
            $this->Fixed = $param["Fixed"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Need",$param) and $param["Need"] !== null) {
            $this->Need = $param["Need"];
        }
    }
}
