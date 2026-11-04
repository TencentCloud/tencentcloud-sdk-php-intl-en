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
 * DuplexBilling
 *
 * @method integer getBillingUnit() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>UNKNOW</td> <td>0</td> <td></td> </tr> <tr> <td>TOKEN</td> <td>1</td> <td>By token</td> </tr> <tr> <td>PAGE_COUNT</td> <td>2</td> <td>By page number</td> </tr> <tr> <td>TIMES</td> <td>3</td> <td>By count</td> </tr> <tr> <td>TIMES_THOUSAND</td> <td>4</td> <td>By thousand counts</td> </tr> <tr> <td>SECOND</td> <td>5</td> <td>By duration</td> </tr> <tr> <td>CHARACTER</td> <td>6</td> <td>By number of characters</td> </tr> <tr> <td>CHARACTER_THOUSAND</td> <td>7</td> <td>By thousand characters</td> </tr> <tr> <td>SHEET</td> <td>8</td> <td>By sheet</td> </tr> <tr> <td>NUMBER</td> <td>9</td> <td>By count</td> </tr> </tbody> </table>
 * @method void setBillingUnit(integer $BillingUnit) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>UNKNOW</td> <td>0</td> <td></td> </tr> <tr> <td>TOKEN</td> <td>1</td> <td>By token</td> </tr> <tr> <td>PAGE_COUNT</td> <td>2</td> <td>By page number</td> </tr> <tr> <td>TIMES</td> <td>3</td> <td>By count</td> </tr> <tr> <td>TIMES_THOUSAND</td> <td>4</td> <td>By thousand counts</td> </tr> <tr> <td>SECOND</td> <td>5</td> <td>By duration</td> </tr> <tr> <td>CHARACTER</td> <td>6</td> <td>By number of characters</td> </tr> <tr> <td>CHARACTER_THOUSAND</td> <td>7</td> <td>By thousand characters</td> </tr> <tr> <td>SHEET</td> <td>8</td> <td>By sheet</td> </tr> <tr> <td>NUMBER</td> <td>9</td> <td>By count</td> </tr> </tbody> </table>
 * @method float getInputCashPrice() Obtain <p>Input cash price</p><p>Unit: CNY</p>
 * @method void setInputCashPrice(float $InputCashPrice) Set <p>Input cash price</p><p>Unit: CNY</p>
 * @method float getInputPuPrice() Obtain <p>Input PU price</p><p>Unit: pu</p>
 * @method void setInputPuPrice(float $InputPuPrice) Set <p>Input PU price</p><p>Unit: pu</p>
 * @method float getOutputCashPrice() Obtain <p>Output cash price</p><p>Unit: CNY</p>
 * @method void setOutputCashPrice(float $OutputCashPrice) Set <p>Output cash price</p><p>Unit: CNY</p>
 * @method float getOutputPuPrice() Obtain <p>Output PU price</p><p>Unit: pu</p>
 * @method void setOutputPuPrice(float $OutputPuPrice) Set <p>Output PU price</p><p>Unit: pu</p>
 */
class DuplexBilling extends AbstractModel
{
    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>UNKNOW</td> <td>0</td> <td></td> </tr> <tr> <td>TOKEN</td> <td>1</td> <td>By token</td> </tr> <tr> <td>PAGE_COUNT</td> <td>2</td> <td>By page number</td> </tr> <tr> <td>TIMES</td> <td>3</td> <td>By count</td> </tr> <tr> <td>TIMES_THOUSAND</td> <td>4</td> <td>By thousand counts</td> </tr> <tr> <td>SECOND</td> <td>5</td> <td>By duration</td> </tr> <tr> <td>CHARACTER</td> <td>6</td> <td>By number of characters</td> </tr> <tr> <td>CHARACTER_THOUSAND</td> <td>7</td> <td>By thousand characters</td> </tr> <tr> <td>SHEET</td> <td>8</td> <td>By sheet</td> </tr> <tr> <td>NUMBER</td> <td>9</td> <td>By count</td> </tr> </tbody> </table>
     */
    public $BillingUnit;

    /**
     * @var float <p>Input cash price</p><p>Unit: CNY</p>
     */
    public $InputCashPrice;

    /**
     * @var float <p>Input PU price</p><p>Unit: pu</p>
     */
    public $InputPuPrice;

    /**
     * @var float <p>Output cash price</p><p>Unit: CNY</p>
     */
    public $OutputCashPrice;

    /**
     * @var float <p>Output PU price</p><p>Unit: pu</p>
     */
    public $OutputPuPrice;

    /**
     * @param integer $BillingUnit <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>UNKNOW</td> <td>0</td> <td></td> </tr> <tr> <td>TOKEN</td> <td>1</td> <td>By token</td> </tr> <tr> <td>PAGE_COUNT</td> <td>2</td> <td>By page number</td> </tr> <tr> <td>TIMES</td> <td>3</td> <td>By count</td> </tr> <tr> <td>TIMES_THOUSAND</td> <td>4</td> <td>By thousand counts</td> </tr> <tr> <td>SECOND</td> <td>5</td> <td>By duration</td> </tr> <tr> <td>CHARACTER</td> <td>6</td> <td>By number of characters</td> </tr> <tr> <td>CHARACTER_THOUSAND</td> <td>7</td> <td>By thousand characters</td> </tr> <tr> <td>SHEET</td> <td>8</td> <td>By sheet</td> </tr> <tr> <td>NUMBER</td> <td>9</td> <td>By count</td> </tr> </tbody> </table>
     * @param float $InputCashPrice <p>Input cash price</p><p>Unit: CNY</p>
     * @param float $InputPuPrice <p>Input PU price</p><p>Unit: pu</p>
     * @param float $OutputCashPrice <p>Output cash price</p><p>Unit: CNY</p>
     * @param float $OutputPuPrice <p>Output PU price</p><p>Unit: pu</p>
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
        if (array_key_exists("BillingUnit",$param) and $param["BillingUnit"] !== null) {
            $this->BillingUnit = $param["BillingUnit"];
        }

        if (array_key_exists("InputCashPrice",$param) and $param["InputCashPrice"] !== null) {
            $this->InputCashPrice = $param["InputCashPrice"];
        }

        if (array_key_exists("InputPuPrice",$param) and $param["InputPuPrice"] !== null) {
            $this->InputPuPrice = $param["InputPuPrice"];
        }

        if (array_key_exists("OutputCashPrice",$param) and $param["OutputCashPrice"] !== null) {
            $this->OutputCashPrice = $param["OutputCashPrice"];
        }

        if (array_key_exists("OutputPuPrice",$param) and $param["OutputPuPrice"] !== null) {
            $this->OutputPuPrice = $param["OutputPuPrice"];
        }
    }
}
