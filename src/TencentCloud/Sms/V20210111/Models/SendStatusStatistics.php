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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Delivery statistics response body
 *
 * @method integer getFeeCount() Obtain Billable SMS message quantity; for example, in 100 successfully submitted SMS messages, if 20 ones are long messages (over 80 characters) and split into two messages each, then the billable quantity will be 80 * 1 + 20 * 2 = 120.
 * @method void setFeeCount(integer $FeeCount) Set Billable SMS message quantity; for example, in 100 successfully submitted SMS messages, if 20 ones are long messages (over 80 characters) and split into two messages each, then the billable quantity will be 80 * 1 + 20 * 2 = 120.
 * @method integer getRequestCount() Obtain Submitted SMS messages.
 * @method void setRequestCount(integer $RequestCount) Set Submitted SMS messages.
 * @method integer getRequestSuccessCount() Obtain Successfully submitted SMS messages.
 * @method void setRequestSuccessCount(integer $RequestSuccessCount) Set Successfully submitted SMS messages.
 */
class SendStatusStatistics extends AbstractModel
{
    /**
     * @var integer Billable SMS message quantity; for example, in 100 successfully submitted SMS messages, if 20 ones are long messages (over 80 characters) and split into two messages each, then the billable quantity will be 80 * 1 + 20 * 2 = 120.
     */
    public $FeeCount;

    /**
     * @var integer Submitted SMS messages.
     */
    public $RequestCount;

    /**
     * @var integer Successfully submitted SMS messages.
     */
    public $RequestSuccessCount;

    /**
     * @param integer $FeeCount Billable SMS message quantity; for example, in 100 successfully submitted SMS messages, if 20 ones are long messages (over 80 characters) and split into two messages each, then the billable quantity will be 80 * 1 + 20 * 2 = 120.
     * @param integer $RequestCount Submitted SMS messages.
     * @param integer $RequestSuccessCount Successfully submitted SMS messages.
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
        if (array_key_exists("FeeCount",$param) and $param["FeeCount"] !== null) {
            $this->FeeCount = $param["FeeCount"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("RequestSuccessCount",$param) and $param["RequestSuccessCount"] !== null) {
            $this->RequestSuccessCount = $param["RequestSuccessCount"];
        }
    }
}
