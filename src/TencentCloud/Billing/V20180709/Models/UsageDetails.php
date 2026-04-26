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
 * The product purchased.
 *
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getSubProductName() Obtain product details
 * @method void setSubProductName(string $SubProductName) Set product details
 * @method string getProductCode() Obtain Product code	
 * @method void setProductCode(string $ProductCode) Set Product code	
 * @method string getSubProductCode() Obtain Sub-product code	
 * @method void setSubProductCode(string $SubProductCode) Set Sub-product code	
 * @method string getBillingItemCode() Obtain Billing item code.	
 * @method void setBillingItemCode(string $BillingItemCode) Set Billing item code.	
 * @method string getSubBillingItemCode() Obtain Billing sub-item code.	
 * @method void setSubBillingItemCode(string $SubBillingItemCode) Set Billing sub-item code.	
 * @method string getProductEnName() Obtain Product English Name	
 * @method void setProductEnName(string $ProductEnName) Set Product English Name	
 * @method string getSubProductEnName() Obtain English name of the sub-product.	
 * @method void setSubProductEnName(string $SubProductEnName) Set English name of the sub-product.	
 * @method string getCalcUnit() Obtain billing cycle	
 * @method void setCalcUnit(string $CalcUnit) Set billing cycle	
 * @method string getAction() Obtain payMode is prepay and payScene is common in the current situation
 * @method void setAction(string $Action) Set payMode is prepay and payScene is common in the current situation
 */
class UsageDetails extends AbstractModel
{
    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string product details
     */
    public $SubProductName;

    /**
     * @var string Product code	
     */
    public $ProductCode;

    /**
     * @var string Sub-product code	
     */
    public $SubProductCode;

    /**
     * @var string Billing item code.	
     */
    public $BillingItemCode;

    /**
     * @var string Billing sub-item code.	
     */
    public $SubBillingItemCode;

    /**
     * @var string Product English Name	
     */
    public $ProductEnName;

    /**
     * @var string English name of the sub-product.	
     */
    public $SubProductEnName;

    /**
     * @var string billing cycle	
     */
    public $CalcUnit;

    /**
     * @var string payMode is prepay and payScene is common in the current situation
     */
    public $Action;

    /**
     * @param string $ProductName Product name
     * @param string $SubProductName product details
     * @param string $ProductCode Product code	
     * @param string $SubProductCode Sub-product code	
     * @param string $BillingItemCode Billing item code.	
     * @param string $SubBillingItemCode Billing sub-item code.	
     * @param string $ProductEnName Product English Name	
     * @param string $SubProductEnName English name of the sub-product.	
     * @param string $CalcUnit billing cycle	
     * @param string $Action payMode is prepay and payScene is common in the current situation
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("BillingItemCode",$param) and $param["BillingItemCode"] !== null) {
            $this->BillingItemCode = $param["BillingItemCode"];
        }

        if (array_key_exists("SubBillingItemCode",$param) and $param["SubBillingItemCode"] !== null) {
            $this->SubBillingItemCode = $param["SubBillingItemCode"];
        }

        if (array_key_exists("ProductEnName",$param) and $param["ProductEnName"] !== null) {
            $this->ProductEnName = $param["ProductEnName"];
        }

        if (array_key_exists("SubProductEnName",$param) and $param["SubProductEnName"] !== null) {
            $this->SubProductEnName = $param["SubProductEnName"];
        }

        if (array_key_exists("CalcUnit",$param) and $param["CalcUnit"] !== null) {
            $this->CalcUnit = $param["CalcUnit"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
