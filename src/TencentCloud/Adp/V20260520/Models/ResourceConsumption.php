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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Single item consumption measurement
 *
 * @method string getLabel() Obtain <p>Feature tag. For the PLATFORM scenario, use the PlatformBizType enumeration name; for MODEL/PLUGIN scenarios, leave it empty</p>
 * @method void setLabel(string $Label) Set <p>Feature tag. For the PLATFORM scenario, use the PlatformBizType enumeration name; for MODEL/PLUGIN scenarios, leave it empty</p>
 * @method integer getUnit() Obtain <p>Consumption measurement unit</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOSAGE_UNIT_TOKEN</td><td>0</td><td>token (default)</td></tr><tr><td>DOSAGE_UNIT_PAGE_COUNT</td><td>1</td><td>page_count (page number)</td></tr><tr><td>DOSAGE_UNIT_TIMES</td><td>2</td><td>times (count)</td></tr><tr><td>DOSAGE_UNIT_SECOND</td><td>3</td><td>second (second)</td></tr><tr><td>DOSAGE_UNIT_ITEM</td><td>4</td><td>item (item)</td></tr><tr><td>DOSAGE_UNIT_SHEET</td><td>5</td><td>sheet (sheet)</td></tr><tr><td>DOSAGE_UNIT_CHARACTER</td><td>6</td><td>character (character)</td></tr><tr><td>DOSAGE_UNIT_GB</td><td>7</td><td>GB</td></tr><tr><td>DOSAGE_UNIT_NUMBER</td><td>8</td><td>number (count)</td></tr><tr><td>DOSAGE_UNIT_MILL_SECOND</td><td>9</td><td>mill_second (millisecond)</td></tr></tbody></table>
 * @method void setUnit(integer $Unit) Set <p>Consumption measurement unit</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOSAGE_UNIT_TOKEN</td><td>0</td><td>token (default)</td></tr><tr><td>DOSAGE_UNIT_PAGE_COUNT</td><td>1</td><td>page_count (page number)</td></tr><tr><td>DOSAGE_UNIT_TIMES</td><td>2</td><td>times (count)</td></tr><tr><td>DOSAGE_UNIT_SECOND</td><td>3</td><td>second (second)</td></tr><tr><td>DOSAGE_UNIT_ITEM</td><td>4</td><td>item (item)</td></tr><tr><td>DOSAGE_UNIT_SHEET</td><td>5</td><td>sheet (sheet)</td></tr><tr><td>DOSAGE_UNIT_CHARACTER</td><td>6</td><td>character (character)</td></tr><tr><td>DOSAGE_UNIT_GB</td><td>7</td><td>GB</td></tr><tr><td>DOSAGE_UNIT_NUMBER</td><td>8</td><td>number (count)</td></tr><tr><td>DOSAGE_UNIT_MILL_SECOND</td><td>9</td><td>mill_second (millisecond)</td></tr></tbody></table>
 * @method float getValue() Obtain <p>Consumption value</p>
 * @method void setValue(float $Value) Set <p>Consumption value</p>
 */
class ResourceConsumption extends AbstractModel
{
    /**
     * @var string <p>Feature tag. For the PLATFORM scenario, use the PlatformBizType enumeration name; for MODEL/PLUGIN scenarios, leave it empty</p>
     */
    public $Label;

    /**
     * @var integer <p>Consumption measurement unit</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOSAGE_UNIT_TOKEN</td><td>0</td><td>token (default)</td></tr><tr><td>DOSAGE_UNIT_PAGE_COUNT</td><td>1</td><td>page_count (page number)</td></tr><tr><td>DOSAGE_UNIT_TIMES</td><td>2</td><td>times (count)</td></tr><tr><td>DOSAGE_UNIT_SECOND</td><td>3</td><td>second (second)</td></tr><tr><td>DOSAGE_UNIT_ITEM</td><td>4</td><td>item (item)</td></tr><tr><td>DOSAGE_UNIT_SHEET</td><td>5</td><td>sheet (sheet)</td></tr><tr><td>DOSAGE_UNIT_CHARACTER</td><td>6</td><td>character (character)</td></tr><tr><td>DOSAGE_UNIT_GB</td><td>7</td><td>GB</td></tr><tr><td>DOSAGE_UNIT_NUMBER</td><td>8</td><td>number (count)</td></tr><tr><td>DOSAGE_UNIT_MILL_SECOND</td><td>9</td><td>mill_second (millisecond)</td></tr></tbody></table>
     */
    public $Unit;

    /**
     * @var float <p>Consumption value</p>
     */
    public $Value;

    /**
     * @param string $Label <p>Feature tag. For the PLATFORM scenario, use the PlatformBizType enumeration name; for MODEL/PLUGIN scenarios, leave it empty</p>
     * @param integer $Unit <p>Consumption measurement unit</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOSAGE_UNIT_TOKEN</td><td>0</td><td>token (default)</td></tr><tr><td>DOSAGE_UNIT_PAGE_COUNT</td><td>1</td><td>page_count (page number)</td></tr><tr><td>DOSAGE_UNIT_TIMES</td><td>2</td><td>times (count)</td></tr><tr><td>DOSAGE_UNIT_SECOND</td><td>3</td><td>second (second)</td></tr><tr><td>DOSAGE_UNIT_ITEM</td><td>4</td><td>item (item)</td></tr><tr><td>DOSAGE_UNIT_SHEET</td><td>5</td><td>sheet (sheet)</td></tr><tr><td>DOSAGE_UNIT_CHARACTER</td><td>6</td><td>character (character)</td></tr><tr><td>DOSAGE_UNIT_GB</td><td>7</td><td>GB</td></tr><tr><td>DOSAGE_UNIT_NUMBER</td><td>8</td><td>number (count)</td></tr><tr><td>DOSAGE_UNIT_MILL_SECOND</td><td>9</td><td>mill_second (millisecond)</td></tr></tbody></table>
     * @param float $Value <p>Consumption value</p>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
