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
 * @method string getPolicyCode() Obtain Dealer policy code.
 * @method void setPolicyCode(string $PolicyCode) Set Dealer policy code.
 * @method string getProductCode() Obtain Product level 1 code.
 * @method void setProductCode(string $ProductCode) Set Product level 1 code.
 * @method string getProductName() Obtain Product level 1 name.
 * @method void setProductName(string $ProductName) Set Product level 1 name.
 * @method string getSubProductCode() Obtain Product level 2 code.
 * @method void setSubProductCode(string $SubProductCode) Set Product level 2 code.
 * @method string getSubProductName() Obtain Product level 2 name.
 * @method void setSubProductName(string $SubProductName) Set Product level 2 name.
 * @method integer getPage() Obtain Page parameter: current page number. The minimum value is 1.
 * @method void setPage(integer $Page) Set Page parameter: current page number. The minimum value is 1.
 * @method integer getPageSize() Obtain Page parameter: Indicates the number of entries per page. Value range: [1, 200], default is 200.
 * @method void setPageSize(integer $PageSize) Set Page parameter: Indicates the number of entries per page. Value range: [1, 200], default is 200.
 */
class QueryPolicyProductListByCodeRequest extends AbstractModel
{
    /**
     * @var string Dealer policy code.
     */
    public $PolicyCode;

    /**
     * @var string Product level 1 code.
     */
    public $ProductCode;

    /**
     * @var string Product level 1 name.
     */
    public $ProductName;

    /**
     * @var string Product level 2 code.
     */
    public $SubProductCode;

    /**
     * @var string Product level 2 name.
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
     * @param string $PolicyCode Dealer policy code.
     * @param string $ProductCode Product level 1 code.
     * @param string $ProductName Product level 1 name.
     * @param string $SubProductCode Product level 2 code.
     * @param string $SubProductName Product level 2 name.
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
