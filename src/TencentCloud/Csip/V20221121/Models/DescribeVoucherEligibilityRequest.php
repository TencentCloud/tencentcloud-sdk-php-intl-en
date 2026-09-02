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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVoucherEligibility request structure.
 *
 * @method integer getActivityID() Obtain Activity ID.
 * @method void setActivityID(integer $ActivityID) Set Activity ID.
 * @method integer getActID() Obtain Voucher batch ID.
 * @method void setActID(integer $ActID) Set Voucher batch ID.
 */
class DescribeVoucherEligibilityRequest extends AbstractModel
{
    /**
     * @var integer Activity ID.
     */
    public $ActivityID;

    /**
     * @var integer Voucher batch ID.
     */
    public $ActID;

    /**
     * @param integer $ActivityID Activity ID.
     * @param integer $ActID Voucher batch ID.
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
        if (array_key_exists("ActivityID",$param) and $param["ActivityID"] !== null) {
            $this->ActivityID = $param["ActivityID"];
        }

        if (array_key_exists("ActID",$param) and $param["ActID"] !== null) {
            $this->ActID = $param["ActID"];
        }
    }
}
