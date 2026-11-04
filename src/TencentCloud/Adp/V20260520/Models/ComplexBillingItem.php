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
 * ComplexBillingItem
 *
 * @method array getBillingAttributeList() Obtain <p>Composite billing dimensions</p>
 * @method void setBillingAttributeList(array $BillingAttributeList) Set <p>Composite billing dimensions</p>
 * @method integer getBillingUnit() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>TOKEN-based</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>By PAGE NUMBER</td></tr><tr><td>TIMES</td><td>3</td><td>TIMES-based</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>By THOUSAND TIMES</td></tr><tr><td>SECOND</td><td>5</td><td>Duration-based</td></tr><tr><td>CHARACTER</td><td>6</td><td>By NUMBER of characters</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>By THOUSAND characters</td></tr><tr><td>SHEET</td><td>8</td><td>By SHEET</td></tr><tr><td>NUMBER</td><td>9</td><td>By COUNT</td></tr></tbody></table>
 * @method void setBillingUnit(integer $BillingUnit) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>TOKEN-based</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>By PAGE NUMBER</td></tr><tr><td>TIMES</td><td>3</td><td>TIMES-based</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>By THOUSAND TIMES</td></tr><tr><td>SECOND</td><td>5</td><td>Duration-based</td></tr><tr><td>CHARACTER</td><td>6</td><td>By NUMBER of characters</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>By THOUSAND characters</td></tr><tr><td>SHEET</td><td>8</td><td>By SHEET</td></tr><tr><td>NUMBER</td><td>9</td><td>By COUNT</td></tr></tbody></table>
 * @method float getCashPrice() Obtain <p>Cash price</p><p>Unit: CNY</p>
 * @method void setCashPrice(float $CashPrice) Set <p>Cash price</p><p>Unit: CNY</p>
 * @method float getPuPrice() Obtain <p>pu price</p><p>Unit: pu</p>
 * @method void setPuPrice(float $PuPrice) Set <p>pu price</p><p>Unit: pu</p>
 */
class ComplexBillingItem extends AbstractModel
{
    /**
     * @var array <p>Composite billing dimensions</p>
     */
    public $BillingAttributeList;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>TOKEN-based</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>By PAGE NUMBER</td></tr><tr><td>TIMES</td><td>3</td><td>TIMES-based</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>By THOUSAND TIMES</td></tr><tr><td>SECOND</td><td>5</td><td>Duration-based</td></tr><tr><td>CHARACTER</td><td>6</td><td>By NUMBER of characters</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>By THOUSAND characters</td></tr><tr><td>SHEET</td><td>8</td><td>By SHEET</td></tr><tr><td>NUMBER</td><td>9</td><td>By COUNT</td></tr></tbody></table>
     */
    public $BillingUnit;

    /**
     * @var float <p>Cash price</p><p>Unit: CNY</p>
     */
    public $CashPrice;

    /**
     * @var float <p>pu price</p><p>Unit: pu</p>
     */
    public $PuPrice;

    /**
     * @param array $BillingAttributeList <p>Composite billing dimensions</p>
     * @param integer $BillingUnit <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>TOKEN-based</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>By PAGE NUMBER</td></tr><tr><td>TIMES</td><td>3</td><td>TIMES-based</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>By THOUSAND TIMES</td></tr><tr><td>SECOND</td><td>5</td><td>Duration-based</td></tr><tr><td>CHARACTER</td><td>6</td><td>By NUMBER of characters</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>By THOUSAND characters</td></tr><tr><td>SHEET</td><td>8</td><td>By SHEET</td></tr><tr><td>NUMBER</td><td>9</td><td>By COUNT</td></tr></tbody></table>
     * @param float $CashPrice <p>Cash price</p><p>Unit: CNY</p>
     * @param float $PuPrice <p>pu price</p><p>Unit: pu</p>
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
        if (array_key_exists("BillingAttributeList",$param) and $param["BillingAttributeList"] !== null) {
            $this->BillingAttributeList = [];
            foreach ($param["BillingAttributeList"] as $key => $value){
                $obj = new BillingAttribute();
                $obj->deserialize($value);
                array_push($this->BillingAttributeList, $obj);
            }
        }

        if (array_key_exists("BillingUnit",$param) and $param["BillingUnit"] !== null) {
            $this->BillingUnit = $param["BillingUnit"];
        }

        if (array_key_exists("CashPrice",$param) and $param["CashPrice"] !== null) {
            $this->CashPrice = $param["CashPrice"];
        }

        if (array_key_exists("PuPrice",$param) and $param["PuPrice"] !== null) {
            $this->PuPrice = $param["PuPrice"];
        }
    }
}
