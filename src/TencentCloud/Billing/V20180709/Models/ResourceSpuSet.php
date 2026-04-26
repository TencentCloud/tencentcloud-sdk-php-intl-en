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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quotation for 4-tier product details
 *
 * @method string getSpuNameZh() Obtain Quoted subproduct (Chinese)
 * @method void setSpuNameZh(string $SpuNameZh) Set Quoted subproduct (Chinese)
 * @method string getSpuNameEn() Obtain Quoted subproduct (English)
 * @method void setSpuNameEn(string $SpuNameEn) Set Quoted subproduct (English)
 * @method string getCategoryNameZh() Obtain Quoted product (Chinese)
 * @method void setCategoryNameZh(string $CategoryNameZh) Set Quoted product (Chinese)
 * @method string getCategoryNameEn() Obtain Quoted product (English)
 * @method void setCategoryNameEn(string $CategoryNameEn) Set Quoted product (English)
 * @method string getBusinessCode() Obtain Product code
 * @method void setBusinessCode(string $BusinessCode) Set Product code
 * @method string getBusinessNameZh() Obtain Product name (Chinese)
 * @method void setBusinessNameZh(string $BusinessNameZh) Set Product name (Chinese)
 * @method string getBusinessNameEn() Obtain Product name (English)
 * @method void setBusinessNameEn(string $BusinessNameEn) Set Product name (English)
 * @method string getProductCode() Obtain Subproduct code
 * @method void setProductCode(string $ProductCode) Set Subproduct code
 * @method string getProductNameZh() Obtain Subproduct name (Chinese)
 * @method void setProductNameZh(string $ProductNameZh) Set Subproduct name (Chinese)
 * @method string getProductNameEn() Obtain Subproduct name (English)
 * @method void setProductNameEn(string $ProductNameEn) Set Subproduct name (English)
 * @method string getComponentCode() Obtain Component type code
 * @method void setComponentCode(string $ComponentCode) Set Component type code
 * @method string getComponentNameZh() Obtain Component type name (Chinese)
 * @method void setComponentNameZh(string $ComponentNameZh) Set Component type name (Chinese)
 * @method string getComponentNameEn() Obtain Component type name (English)
 * @method void setComponentNameEn(string $ComponentNameEn) Set Component type name (English)
 * @method string getItemCode() Obtain Component code
 * @method void setItemCode(string $ItemCode) Set Component code
 * @method string getItemNameZh() Obtain Component name (Chinese)
 * @method void setItemNameZh(string $ItemNameZh) Set Component name (Chinese)
 * @method string getItemNameEn() Obtain Component name (English)
 * @method void setItemNameEn(string $ItemNameEn) Set Component name (English)
 */
class ResourceSpuSet extends AbstractModel
{
    /**
     * @var string Quoted subproduct (Chinese)
     */
    public $SpuNameZh;

    /**
     * @var string Quoted subproduct (English)
     */
    public $SpuNameEn;

    /**
     * @var string Quoted product (Chinese)
     */
    public $CategoryNameZh;

    /**
     * @var string Quoted product (English)
     */
    public $CategoryNameEn;

    /**
     * @var string Product code
     */
    public $BusinessCode;

    /**
     * @var string Product name (Chinese)
     */
    public $BusinessNameZh;

    /**
     * @var string Product name (English)
     */
    public $BusinessNameEn;

    /**
     * @var string Subproduct code
     */
    public $ProductCode;

    /**
     * @var string Subproduct name (Chinese)
     */
    public $ProductNameZh;

    /**
     * @var string Subproduct name (English)
     */
    public $ProductNameEn;

    /**
     * @var string Component type code
     */
    public $ComponentCode;

    /**
     * @var string Component type name (Chinese)
     */
    public $ComponentNameZh;

    /**
     * @var string Component type name (English)
     */
    public $ComponentNameEn;

    /**
     * @var string Component code
     */
    public $ItemCode;

    /**
     * @var string Component name (Chinese)
     */
    public $ItemNameZh;

    /**
     * @var string Component name (English)
     */
    public $ItemNameEn;

    /**
     * @param string $SpuNameZh Quoted subproduct (Chinese)
     * @param string $SpuNameEn Quoted subproduct (English)
     * @param string $CategoryNameZh Quoted product (Chinese)
     * @param string $CategoryNameEn Quoted product (English)
     * @param string $BusinessCode Product code
     * @param string $BusinessNameZh Product name (Chinese)
     * @param string $BusinessNameEn Product name (English)
     * @param string $ProductCode Subproduct code
     * @param string $ProductNameZh Subproduct name (Chinese)
     * @param string $ProductNameEn Subproduct name (English)
     * @param string $ComponentCode Component type code
     * @param string $ComponentNameZh Component type name (Chinese)
     * @param string $ComponentNameEn Component type name (English)
     * @param string $ItemCode Component code
     * @param string $ItemNameZh Component name (Chinese)
     * @param string $ItemNameEn Component name (English)
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
        if (array_key_exists("SpuNameZh",$param) and $param["SpuNameZh"] !== null) {
            $this->SpuNameZh = $param["SpuNameZh"];
        }

        if (array_key_exists("SpuNameEn",$param) and $param["SpuNameEn"] !== null) {
            $this->SpuNameEn = $param["SpuNameEn"];
        }

        if (array_key_exists("CategoryNameZh",$param) and $param["CategoryNameZh"] !== null) {
            $this->CategoryNameZh = $param["CategoryNameZh"];
        }

        if (array_key_exists("CategoryNameEn",$param) and $param["CategoryNameEn"] !== null) {
            $this->CategoryNameEn = $param["CategoryNameEn"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessNameZh",$param) and $param["BusinessNameZh"] !== null) {
            $this->BusinessNameZh = $param["BusinessNameZh"];
        }

        if (array_key_exists("BusinessNameEn",$param) and $param["BusinessNameEn"] !== null) {
            $this->BusinessNameEn = $param["BusinessNameEn"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductNameZh",$param) and $param["ProductNameZh"] !== null) {
            $this->ProductNameZh = $param["ProductNameZh"];
        }

        if (array_key_exists("ProductNameEn",$param) and $param["ProductNameEn"] !== null) {
            $this->ProductNameEn = $param["ProductNameEn"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ComponentNameZh",$param) and $param["ComponentNameZh"] !== null) {
            $this->ComponentNameZh = $param["ComponentNameZh"];
        }

        if (array_key_exists("ComponentNameEn",$param) and $param["ComponentNameEn"] !== null) {
            $this->ComponentNameEn = $param["ComponentNameEn"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ItemNameZh",$param) and $param["ItemNameZh"] !== null) {
            $this->ItemNameZh = $param["ItemNameZh"];
        }

        if (array_key_exists("ItemNameEn",$param) and $param["ItemNameEn"] !== null) {
            $this->ItemNameEn = $param["ItemNameEn"];
        }
    }
}
