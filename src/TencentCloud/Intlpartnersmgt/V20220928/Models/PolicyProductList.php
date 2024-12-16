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
 * 
 *
 * @method string getPolicyCode() Obtain Policy code.
 * @method void setPolicyCode(string $PolicyCode) Set Policy code.
 * @method string getProductCode() Obtain Product code, if the return is *, any item under this level is included in the policy product scope.
 * @method void setProductCode(string $ProductCode) Set Product code, if the return is *, any item under this level is included in the policy product scope.
 * @method string getProductName() Obtain Product name, if the return is *, any item under this level is included in the policy product scope.
 * @method void setProductName(string $ProductName) Set Product name, if the return is *, any item under this level is included in the policy product scope.
 * @method string getSubProductCode() Obtain SubProduct code, if the return is *, any item under this level is included in the policy product scope.
 * @method void setSubProductCode(string $SubProductCode) Set SubProduct code, if the return is *, any item under this level is included in the policy product scope.
 * @method string getSubProductName() Obtain SubProduct name, if the return is *, any item under this level is included in the policy product scope.
 * @method void setSubProductName(string $SubProductName) Set SubProduct name, if the return is *, any item under this level is included in the policy product scope.
 * @method string getComponentTypeCode() Obtain Component type code, if the return is *, any item under this level is included in the policy product scope.
 * @method void setComponentTypeCode(string $ComponentTypeCode) Set Component type code, if the return is *, any item under this level is included in the policy product scope.
 * @method string getComponentTypeName() Obtain Component type name, if the return is *, any item under this level is included in the policy product scope.
 * @method void setComponentTypeName(string $ComponentTypeName) Set Component type name, if the return is *, any item under this level is included in the policy product scope.
 * @method string getComponentCode() Obtain Component code, if the return is *, any item under this level is included in the policy product scope.
 * @method void setComponentCode(string $ComponentCode) Set Component code, if the return is *, any item under this level is included in the policy product scope.
 * @method string getComponentName() Obtain Component name, if the return is *, any item under this level is included in the policy product scope.
 * @method void setComponentName(string $ComponentName) Set Component name, if the return is *, any item under this level is included in the policy product scope.
 * @method string getStartDate() Obtain Policy effective date.
 * @method void setStartDate(string $StartDate) Set Policy effective date.
 * @method string getEndDate() Obtain Policy expiration date.
 * @method void setEndDate(string $EndDate) Set Policy expiration date.
 */
class PolicyProductList extends AbstractModel
{
    /**
     * @var string Policy code.
     */
    public $PolicyCode;

    /**
     * @var string Product code, if the return is *, any item under this level is included in the policy product scope.
     */
    public $ProductCode;

    /**
     * @var string Product name, if the return is *, any item under this level is included in the policy product scope.
     */
    public $ProductName;

    /**
     * @var string SubProduct code, if the return is *, any item under this level is included in the policy product scope.
     */
    public $SubProductCode;

    /**
     * @var string SubProduct name, if the return is *, any item under this level is included in the policy product scope.
     */
    public $SubProductName;

    /**
     * @var string Component type code, if the return is *, any item under this level is included in the policy product scope.
     */
    public $ComponentTypeCode;

    /**
     * @var string Component type name, if the return is *, any item under this level is included in the policy product scope.
     */
    public $ComponentTypeName;

    /**
     * @var string Component code, if the return is *, any item under this level is included in the policy product scope.
     */
    public $ComponentCode;

    /**
     * @var string Component name, if the return is *, any item under this level is included in the policy product scope.
     */
    public $ComponentName;

    /**
     * @var string Policy effective date.
     */
    public $StartDate;

    /**
     * @var string Policy expiration date.
     */
    public $EndDate;

    /**
     * @param string $PolicyCode Policy code.
     * @param string $ProductCode Product code, if the return is *, any item under this level is included in the policy product scope.
     * @param string $ProductName Product name, if the return is *, any item under this level is included in the policy product scope.
     * @param string $SubProductCode SubProduct code, if the return is *, any item under this level is included in the policy product scope.
     * @param string $SubProductName SubProduct name, if the return is *, any item under this level is included in the policy product scope.
     * @param string $ComponentTypeCode Component type code, if the return is *, any item under this level is included in the policy product scope.
     * @param string $ComponentTypeName Component type name, if the return is *, any item under this level is included in the policy product scope.
     * @param string $ComponentCode Component code, if the return is *, any item under this level is included in the policy product scope.
     * @param string $ComponentName Component name, if the return is *, any item under this level is included in the policy product scope.
     * @param string $StartDate Policy effective date.
     * @param string $EndDate Policy expiration date.
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
