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
 * DescribeCustomerBillDownloadUrl request structure.
 *
 * @method string getMonth() Obtain The month to which the bill belongs, formatted as yyyy-mm; the earliest month available for query is june, 2022. current month's billing data may be inaccurate; please download the current month's bill after it is generated at 1:00 on the 5th of the next month.
 * @method void setMonth(string $Month) Set The month to which the bill belongs, formatted as yyyy-mm; the earliest month available for query is june, 2022. current month's billing data may be inaccurate; please download the current month's bill after it is generated at 1:00 on the 5th of the next month.
 * @method string getFileType() Obtain Bill type. valid values: [billResource, billDetail, billResourcePack, billDetailPack]. `billResource`: resource bill; `billDetail`: detailed bill; `billResourcePack`: resource bill package; `billDetailPack`: detailed bill package.
 * @method void setFileType(string $FileType) Set Bill type. valid values: [billResource, billDetail, billResourcePack, billDetailPack]. `billResource`: resource bill; `billDetail`: detailed bill; `billResourcePack`: resource bill package; `billDetailPack`: detailed bill package.
 * @method string getCustomerUinType() Obtain Customer type. valid values: [Customer, Reseller, ResellerCustomer]. `Customer`: direct customer; `Reseller`: secondary reseller; `ResellerCustomer`: reseller's customers
 * @method void setCustomerUinType(string $CustomerUinType) Set Customer type. valid values: [Customer, Reseller, ResellerCustomer]. `Customer`: direct customer; `Reseller`: secondary reseller; `ResellerCustomer`: reseller's customers
 * @method string getFileLanguage() Obtain Language. valid values: [zh_cn, en]. default is `en` (english).
 * @method void setFileLanguage(string $FileLanguage) Set Language. valid values: [zh_cn, en]. default is `en` (english).
 * @method integer getCustomerUin() Obtain Customer uin. when downloading the bill package (FileType is billResourcePack or billDetailPack), CustomerUin is not passed
 * @method void setCustomerUin(integer $CustomerUin) Set Customer uin. when downloading the bill package (FileType is billResourcePack or billDetailPack), CustomerUin is not passed
 */
class DescribeCustomerBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string The month to which the bill belongs, formatted as yyyy-mm; the earliest month available for query is june, 2022. current month's billing data may be inaccurate; please download the current month's bill after it is generated at 1:00 on the 5th of the next month.
     */
    public $Month;

    /**
     * @var string Bill type. valid values: [billResource, billDetail, billResourcePack, billDetailPack]. `billResource`: resource bill; `billDetail`: detailed bill; `billResourcePack`: resource bill package; `billDetailPack`: detailed bill package.
     */
    public $FileType;

    /**
     * @var string Customer type. valid values: [Customer, Reseller, ResellerCustomer]. `Customer`: direct customer; `Reseller`: secondary reseller; `ResellerCustomer`: reseller's customers
     */
    public $CustomerUinType;

    /**
     * @var string Language. valid values: [zh_cn, en]. default is `en` (english).
     */
    public $FileLanguage;

    /**
     * @var integer Customer uin. when downloading the bill package (FileType is billResourcePack or billDetailPack), CustomerUin is not passed
     */
    public $CustomerUin;

    /**
     * @param string $Month The month to which the bill belongs, formatted as yyyy-mm; the earliest month available for query is june, 2022. current month's billing data may be inaccurate; please download the current month's bill after it is generated at 1:00 on the 5th of the next month.
     * @param string $FileType Bill type. valid values: [billResource, billDetail, billResourcePack, billDetailPack]. `billResource`: resource bill; `billDetail`: detailed bill; `billResourcePack`: resource bill package; `billDetailPack`: detailed bill package.
     * @param string $CustomerUinType Customer type. valid values: [Customer, Reseller, ResellerCustomer]. `Customer`: direct customer; `Reseller`: secondary reseller; `ResellerCustomer`: reseller's customers
     * @param string $FileLanguage Language. valid values: [zh_cn, en]. default is `en` (english).
     * @param integer $CustomerUin Customer uin. when downloading the bill package (FileType is billResourcePack or billDetailPack), CustomerUin is not passed
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CustomerUinType",$param) and $param["CustomerUinType"] !== null) {
            $this->CustomerUinType = $param["CustomerUinType"];
        }

        if (array_key_exists("FileLanguage",$param) and $param["FileLanguage"] !== null) {
            $this->FileLanguage = $param["FileLanguage"];
        }

        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }
    }
}
