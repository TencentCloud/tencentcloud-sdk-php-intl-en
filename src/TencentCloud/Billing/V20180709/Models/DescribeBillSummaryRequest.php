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
 * DescribeBillSummary request structure.
 *
 * @method string getMonth() Obtain <p>Bill month, formatted as 2023-04</p>
 * @method void setMonth(string $Month) Set <p>Bill month, formatted as 2023-04</p>
 * @method string getGroupType() Obtain <p>Billing dimension type. Enumeration values as follows: business, project, region, payMode, tag</p>
 * @method void setGroupType(string $GroupType) Set <p>Billing dimension type. Enumeration values as follows: business, project, region, payMode, tag</p>
 * @method array getTagKey() Obtain <p>Tag key. Pass GroupType=tag when obtaining dimensional billing by tag.</p>
 * @method void setTagKey(array $TagKey) Set <p>Tag key. Pass GroupType=tag when obtaining dimensional billing by tag.</p>
 * @method string getOperateUin() Obtain <p>Operator UIN: Operator account ID (ID of the prepaid resource order or postpaid operation, activate postpaid resource account or role ID)</p>
 * @method void setOperateUin(string $OperateUin) Set <p>Operator UIN: Operator account ID (ID of the prepaid resource order or postpaid operation, activate postpaid resource account or role ID)</p>
 * @method string getPayerUin() Obtain <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
 * @method void setPayerUin(string $PayerUin) Set <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
 */
class DescribeBillSummaryRequest extends AbstractModel
{
    /**
     * @var string <p>Bill month, formatted as 2023-04</p>
     */
    public $Month;

    /**
     * @var string <p>Billing dimension type. Enumeration values as follows: business, project, region, payMode, tag</p>
     */
    public $GroupType;

    /**
     * @var array <p>Tag key. Pass GroupType=tag when obtaining dimensional billing by tag.</p>
     */
    public $TagKey;

    /**
     * @var string <p>Operator UIN: Operator account ID (ID of the prepaid resource order or postpaid operation, activate postpaid resource account or role ID)</p>
     */
    public $OperateUin;

    /**
     * @var string <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
     */
    public $PayerUin;

    /**
     * @param string $Month <p>Bill month, formatted as 2023-04</p>
     * @param string $GroupType <p>Billing dimension type. Enumeration values as follows: business, project, region, payMode, tag</p>
     * @param array $TagKey <p>Tag key. Pass GroupType=tag when obtaining dimensional billing by tag.</p>
     * @param string $OperateUin <p>Operator UIN: Operator account ID (ID of the prepaid resource order or postpaid operation, activate postpaid resource account or role ID)</p>
     * @param string $PayerUin <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
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

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
