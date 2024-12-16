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
 * QueryPolicyProductListByCode request structure.
 *
 * @method string getPolicyCode() Obtain Policy code
 * @method void setPolicyCode(string $PolicyCode) Set Policy code
 * @method string getProductCode() Obtain Product code
 * @method void setProductCode(string $ProductCode) Set Product code
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getSubProductCode() Obtain Subproduct code
 * @method void setSubProductCode(string $SubProductCode) Set Subproduct code
 * @method string getSubProductName() Obtain Subproduct name
 * @method void setSubProductName(string $SubProductName) Set Subproduct name
 */
class QueryPolicyProductListByCodeRequest extends AbstractModel
{
    /**
     * @var string Policy code
     */
    public $PolicyCode;

    /**
     * @var string Product code
     */
    public $ProductCode;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Subproduct code
     */
    public $SubProductCode;

    /**
     * @var string Subproduct name
     */
    public $SubProductName;

    /**
     * @param string $PolicyCode Policy code
     * @param string $ProductCode Product code
     * @param string $ProductName Product name
     * @param string $SubProductCode Subproduct code
     * @param string $SubProductName Subproduct name
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
    }
}
