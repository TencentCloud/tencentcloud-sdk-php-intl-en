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
 * DescribeBillAdjustInfo request structure.
 *
 * @method string getMonth() Obtain <p>Format: yyyy-MM<br>Bill month. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid.</p>
 * @method void setMonth(string $Month) Set <p>Format: yyyy-MM<br>Bill month. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid.</p>
 * @method string getTimeFrom() Obtain <p>Format: yyyy-MM-dd<br>Start time. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid. timeFrom and timeTo must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month.</p>
 * @method void setTimeFrom(string $TimeFrom) Set <p>Format: yyyy-MM-dd<br>Start time. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid. timeFrom and timeTo must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month.</p>
 * @method string getTimeTo() Obtain <p>Format: yyyy-MM-dd<br>End time. Either month or timeFrom&amp;timeTo must be specified. If this field is specified, the month field is invalid. timeFrom and timeTo must be passed together and be in the same month. Cross-month queries are not supported. The query result is data of the entire month.</p>
 * @method void setTimeTo(string $TimeTo) Set <p>Format: yyyy-MM-dd<br>End time. Either month or timeFrom&amp;timeTo must be specified. If this field is specified, the month field is invalid. timeFrom and timeTo must be passed together and be in the same month. Cross-month queries are not supported. The query result is data of the entire month.</p>
 * @method string getPayerUin() Obtain <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
 * @method void setPayerUin(string $PayerUin) Set <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
 */
class DescribeBillAdjustInfoRequest extends AbstractModel
{
    /**
     * @var string <p>Format: yyyy-MM<br>Bill month. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid.</p>
     */
    public $Month;

    /**
     * @var string <p>Format: yyyy-MM-dd<br>Start time. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid. timeFrom and timeTo must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month.</p>
     */
    public $TimeFrom;

    /**
     * @var string <p>Format: yyyy-MM-dd<br>End time. Either month or timeFrom&amp;timeTo must be specified. If this field is specified, the month field is invalid. timeFrom and timeTo must be passed together and be in the same month. Cross-month queries are not supported. The query result is data of the entire month.</p>
     */
    public $TimeTo;

    /**
     * @var string <p>Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.</p>
     */
    public $PayerUin;

    /**
     * @param string $Month <p>Format: yyyy-MM<br>Bill month. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid.</p>
     * @param string $TimeFrom <p>Format: yyyy-MM-dd<br>Start time. Either month or timeFrom&amp;timeTo must be specified. If timeFrom&amp;timeTo is specified, the month field is invalid. timeFrom and timeTo must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month.</p>
     * @param string $TimeTo <p>Format: yyyy-MM-dd<br>End time. Either month or timeFrom&amp;timeTo must be specified. If this field is specified, the month field is invalid. timeFrom and timeTo must be passed together and be in the same month. Cross-month queries are not supported. The query result is data of the entire month.</p>
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

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
