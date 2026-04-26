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
 * DescribeCPQBillingMapping request structure.
 *
 * @method string getOffset() Obtain Offset
 * @method void setOffset(string $Offset) Set Offset
 * @method string getLimit() Obtain The number of entries returned at a time. The maximum value is `100`.	
 * @method void setLimit(string $Limit) Set The number of entries returned at a time. The maximum value is `100`.	
 * @method string getSpuName() Obtain Quoted subproduct name
 * @method void setSpuName(string $SpuName) Set Quoted subproduct name
 * @method string getCategoryName() Obtain Quoted product name
 * @method void setCategoryName(string $CategoryName) Set Quoted product name
 * @method string getBusinessName() Obtain Product name
 * @method void setBusinessName(string $BusinessName) Set Product name
 * @method string getProductName() Obtain Subproduct name
 * @method void setProductName(string $ProductName) Set Subproduct name
 * @method string getComponentName() Obtain Component type name
 * @method void setComponentName(string $ComponentName) Set Component type name
 * @method string getItemName() Obtain Component name
 * @method void setItemName(string $ItemName) Set Component name
 * @method string getBusinessCode() Obtain Product code
 * @method void setBusinessCode(string $BusinessCode) Set Product code
 * @method string getProductCode() Obtain Subproduct code
 * @method void setProductCode(string $ProductCode) Set Subproduct code
 * @method string getComponentCode() Obtain Component type code
 * @method void setComponentCode(string $ComponentCode) Set Component type code
 * @method string getItemCode() Obtain Component code
 * @method void setItemCode(string $ItemCode) Set Component code
 */
class DescribeCPQBillingMappingRequest extends AbstractModel
{
    /**
     * @var string Offset
     */
    public $Offset;

    /**
     * @var string The number of entries returned at a time. The maximum value is `100`.	
     */
    public $Limit;

    /**
     * @var string Quoted subproduct name
     */
    public $SpuName;

    /**
     * @var string Quoted product name
     */
    public $CategoryName;

    /**
     * @var string Product name
     */
    public $BusinessName;

    /**
     * @var string Subproduct name
     */
    public $ProductName;

    /**
     * @var string Component type name
     */
    public $ComponentName;

    /**
     * @var string Component name
     */
    public $ItemName;

    /**
     * @var string Product code
     */
    public $BusinessCode;

    /**
     * @var string Subproduct code
     */
    public $ProductCode;

    /**
     * @var string Component type code
     */
    public $ComponentCode;

    /**
     * @var string Component code
     */
    public $ItemCode;

    /**
     * @param string $Offset Offset
     * @param string $Limit The number of entries returned at a time. The maximum value is `100`.	
     * @param string $SpuName Quoted subproduct name
     * @param string $CategoryName Quoted product name
     * @param string $BusinessName Product name
     * @param string $ProductName Subproduct name
     * @param string $ComponentName Component type name
     * @param string $ItemName Component name
     * @param string $BusinessCode Product code
     * @param string $ProductCode Subproduct code
     * @param string $ComponentCode Component type code
     * @param string $ItemCode Component code
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SpuName",$param) and $param["SpuName"] !== null) {
            $this->SpuName = $param["SpuName"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }
    }
}
