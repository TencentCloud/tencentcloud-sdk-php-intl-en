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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillDownloadUrl request structure.
 *
 * @method string getFileType() Obtain Bill type. Valid values:
`billOverview` (L0: PDF bills)
`billSummary` (L1: Bill summary)	
`billResource` (L2: Bill by instance)	
`billDetail` (L3: Bill details)	
`billPack` (Bill packs)
 * @method void setFileType(string $FileType) Set Bill type. Valid values:
`billOverview` (L0: PDF bills)
`billSummary` (L1: Bill summary)	
`billResource` (L2: Bill by instance)	
`billDetail` (L3: Bill details)	
`billPack` (Bill packs)
 * @method string getMonth() Obtain Bill month.
The earliest month that can be queried is January 2021.
L0 bills and bill packs cannot be downloaded for the current month. Please download the current month's bills after it is generated at 19:00 on the 1st day of the next month.
 * @method void setMonth(string $Month) Set Bill month.
The earliest month that can be queried is January 2021.
L0 bills and bill packs cannot be downloaded for the current month. Please download the current month's bills after it is generated at 19:00 on the 1st day of the next month.
 * @method array getChildUin() Obtain List of account IDs for downloading the bill. By default, it queries the bill for the current account. If you are an admin account and need to download bills for member accounts with their own payment, input the member account's UIN for this parameter.
 * @method void setChildUin(array $ChildUin) Set List of account IDs for downloading the bill. By default, it queries the bill for the current account. If you are an admin account and need to download bills for member accounts with their own payment, input the member account's UIN for this parameter.
 */
class DescribeBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string Bill type. Valid values:
`billOverview` (L0: PDF bills)
`billSummary` (L1: Bill summary)	
`billResource` (L2: Bill by instance)	
`billDetail` (L3: Bill details)	
`billPack` (Bill packs)
     */
    public $FileType;

    /**
     * @var string Bill month.
The earliest month that can be queried is January 2021.
L0 bills and bill packs cannot be downloaded for the current month. Please download the current month's bills after it is generated at 19:00 on the 1st day of the next month.
     */
    public $Month;

    /**
     * @var array List of account IDs for downloading the bill. By default, it queries the bill for the current account. If you are an admin account and need to download bills for member accounts with their own payment, input the member account's UIN for this parameter.
     */
    public $ChildUin;

    /**
     * @param string $FileType Bill type. Valid values:
`billOverview` (L0: PDF bills)
`billSummary` (L1: Bill summary)	
`billResource` (L2: Bill by instance)	
`billDetail` (L3: Bill details)	
`billPack` (Bill packs)
     * @param string $Month Bill month.
The earliest month that can be queried is January 2021.
L0 bills and bill packs cannot be downloaded for the current month. Please download the current month's bills after it is generated at 19:00 on the 1st day of the next month.
     * @param array $ChildUin List of account IDs for downloading the bill. By default, it queries the bill for the current account. If you are an admin account and need to download bills for member accounts with their own payment, input the member account's UIN for this parameter.
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("ChildUin",$param) and $param["ChildUin"] !== null) {
            $this->ChildUin = $param["ChildUin"];
        }
    }
}
