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
 * DescribeBillDownloadUrl request structure.
 *
 * @method string getFileType() Obtain Billing mode. Enumeration values
billOverview=L0-PDF Bill
Bill Summary=L1-Summary Bill	
billResource=L2-Resource bill	
billDetail=L3-Detailed Bill	
billPack
 * @method void setFileType(string $FileType) Set Billing mode. Enumeration values
billOverview=L0-PDF Bill
Bill Summary=L1-Summary Bill	
billResource=L2-Resource bill	
billDetail=L3-Detailed Bill	
billPack
 * @method string getMonth() Obtain Billing month
Earliest start month supported is 2021-01
L0-PDF&bill package does not support download for the current month. Please download the monthly bill after billing on the 1st of next month at 19:00.
 * @method void setMonth(string $Month) Set Billing month
Earliest start month supported is 2021-01
L0-PDF&bill package does not support download for the current month. Please download the monthly bill after billing on the 1st of next month at 19:00.
 * @method array getChildUin() Obtain Downloaded account ID list. By default, the query returns the account statement of the current account. If the group management account needs to download the self-pay bills of member accounts, enter the member account UIN in this field.
 * @method void setChildUin(array $ChildUin) Set Downloaded account ID list. By default, the query returns the account statement of the current account. If the group management account needs to download the self-pay bills of member accounts, enter the member account UIN in this field.
 */
class DescribeBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string Billing mode. Enumeration values
billOverview=L0-PDF Bill
Bill Summary=L1-Summary Bill	
billResource=L2-Resource bill	
billDetail=L3-Detailed Bill	
billPack
     */
    public $FileType;

    /**
     * @var string Billing month
Earliest start month supported is 2021-01
L0-PDF&bill package does not support download for the current month. Please download the monthly bill after billing on the 1st of next month at 19:00.
     */
    public $Month;

    /**
     * @var array Downloaded account ID list. By default, the query returns the account statement of the current account. If the group management account needs to download the self-pay bills of member accounts, enter the member account UIN in this field.
     */
    public $ChildUin;

    /**
     * @param string $FileType Billing mode. Enumeration values
billOverview=L0-PDF Bill
Bill Summary=L1-Summary Bill	
billResource=L2-Resource bill	
billDetail=L3-Detailed Bill	
billPack
     * @param string $Month Billing month
Earliest start month supported is 2021-01
L0-PDF&bill package does not support download for the current month. Please download the monthly bill after billing on the 1st of next month at 19:00.
     * @param array $ChildUin Downloaded account ID list. By default, the query returns the account statement of the current account. If the group management account needs to download the self-pay bills of member accounts, enter the member account UIN in this field.
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
