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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Policy product list entity response parameters structure.
 *
 * @method string getPolicyCode() Obtain  Policy code.
 * @method void setPolicyCode(string $PolicyCode) Set  Policy code.
 * @method string getProductCode() Obtain The code of the ProductName field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setProductCode(string $ProductCode) Set The code of the ProductName field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getProductName() Obtain The ProductName field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setProductName(string $ProductName) Set The ProductName field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getSubProductCode() Obtain The code of the SubProduct field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setSubProductCode(string $SubProductCode) Set The code of the SubProduct field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getSubProductName() Obtain The SubProduct field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setSubProductName(string $SubProductName) Set The SubProduct field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentTypeCode() Obtain The code of the ComponentType field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentTypeCode(string $ComponentTypeCode) Set The code of the ComponentType field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentTypeName() Obtain The ComponentType field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentTypeName(string $ComponentTypeName) Set The ComponentType field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentCode() Obtain The code of the Component field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentCode(string $ComponentCode) Set The code of the Component field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentName() Obtain The Component field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentName(string $ComponentName) Set The Component field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
 * @method string getStartDate() Obtain Policy effective time.
 * @method void setStartDate(string $StartDate) Set Policy effective time.
 * @method string getEndDate() Obtain Policy expiration time.
 * @method void setEndDate(string $EndDate) Set Policy expiration time.
 */
class PolicyProductList extends AbstractModel
{
    /**
     * @var string  Policy code.
     */
    public $PolicyCode;

    /**
     * @var string The code of the ProductName field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ProductCode;

    /**
     * @var string The ProductName field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ProductName;

    /**
     * @var string The code of the SubProduct field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $SubProductCode;

    /**
     * @var string The SubProduct field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $SubProductName;

    /**
     * @var string The code of the ComponentType field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentTypeCode;

    /**
     * @var string The ComponentType field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentTypeName;

    /**
     * @var string The code of the Component field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentCode;

    /**
     * @var string The Component field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentName;

    /**
     * @var string Policy effective time.
     */
    public $StartDate;

    /**
     * @var string Policy expiration time.
     */
    public $EndDate;

    /**
     * @param string $PolicyCode  Policy code.
     * @param string $ProductCode The code of the ProductName field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ProductName The ProductName field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $SubProductCode The code of the SubProduct field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $SubProductName The SubProduct field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentTypeCode The code of the ComponentType field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentTypeName The ComponentType field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentCode The code of the Component field in the  bill data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentName The Component field value in the billing data. If the return value is *, any item at this level is included in the policy product range.
     * @param string $StartDate Policy effective time.
     * @param string $EndDate Policy expiration time.
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
        if (array_key_exists("PolicyCode",$param) and $param["PolicyCode"] !== null) {
            $this->PolicyCode = $param["PolicyCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("ComponentTypeCode",$param) and $param["ComponentTypeCode"] !== null) {
            $this->ComponentTypeCode = $param["ComponentTypeCode"];
        }

        if (array_key_exists("ComponentTypeName",$param) and $param["ComponentTypeName"] !== null) {
            $this->ComponentTypeName = $param["ComponentTypeName"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
