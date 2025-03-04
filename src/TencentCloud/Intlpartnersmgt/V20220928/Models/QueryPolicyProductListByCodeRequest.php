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
 * @method string getPolicyCode() Obtain Policy code.
 * @method void setPolicyCode(string $PolicyCode) Set Policy code.
 * @method string getProductCode() Obtain The code of the ProductName field in the  bill data.
 * @method void setProductCode(string $ProductCode) Set The code of the ProductName field in the  bill data.
 * @method string getProductName() Obtain The ProductName field value in the billing data.
 * @method void setProductName(string $ProductName) Set The ProductName field value in the billing data.
 * @method string getSubProductCode() Obtain The code of the SubProductName field in the  bill data.
 * @method void setSubProductCode(string $SubProductCode) Set The code of the SubProductName field in the  bill data.
 * @method string getSubProductName() Obtain The SubProductName field value in the billing data.
 * @method void setSubProductName(string $SubProductName) Set The SubProductName field value in the billing data.
 * @method integer getPage() Obtain Page parameter: current page number. The minimum value is 1.
 * @method void setPage(integer $Page) Set Page parameter: current page number. The minimum value is 1.
 * @method integer getPageSize() Obtain Page parameter: Indicates the number of entries per page. Value range: [1, 200], default is 200.
 * @method void setPageSize(integer $PageSize) Set Page parameter: Indicates the number of entries per page. Value range: [1, 200], default is 200.
 */
class QueryPolicyProductListByCodeRequest extends AbstractModel
{
    /**
     * @var string Policy code.
     */
    public $PolicyCode;

    /**
     * @var string The code of the ProductName field in the  bill data.
     */
    public $ProductCode;

    /**
     * @var string The ProductName field value in the billing data.
     */
    public $ProductName;

    /**
     * @var string The code of the SubProductName field in the  bill data.
     */
    public $SubProductCode;

    /**
     * @var string The SubProductName field value in the billing data.
     */
    public $SubProductName;

    /**
     * @var integer Page parameter: current page number. The minimum value is 1.
     */
    public $Page;

    /**
     * @var integer Page parameter: Indicates the number of entries per page. Value range: [1, 200], default is 200.
     */
    public $PageSize;

    /**
     * @param string $PolicyCode Policy code.
     * @param string $ProductCode The code of the ProductName field in the  bill data.
     * @param string $ProductName The ProductName field value in the billing data.
     * @param string $SubProductCode The code of the SubProductName field in the  bill data.
     * @param string $SubProductName The SubProductName field value in the billing data.
     * @param integer $Page Page parameter: current page number. The minimum value is 1.
     * @param integer $PageSize Page parameter: Indicates the number of entries per page. Value range: [1, 200], default is 200.
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
