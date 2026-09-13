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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Inviter information
 *
 * @method string getInviterUserId() Obtain <p>The ID of the inviter</p>
 * @method void setInviterUserId(string $InviterUserId) Set <p>The ID of the inviter</p>
 * @method string getInviterPhone() Obtain <p>The phone number of the inviter</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
 * @method void setInviterPhone(string $InviterPhone) Set <p>The phone number of the inviter</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
 * @method string getInviteCode() Obtain <p>The code that the inviter sent to the user</p>
 * @method void setInviteCode(string $InviteCode) Set <p>The code that the inviter sent to the user</p>
 * @method string getInviteChannel() Obtain <p>The channel that inviter used to invite the user</p>
 * @method void setInviteChannel(string $InviteChannel) Set <p>The channel that inviter used to invite the user</p>
 */
class Inviter extends AbstractModel
{
    /**
     * @var string <p>The ID of the inviter</p>
     */
    public $InviterUserId;

    /**
     * @var string <p>The phone number of the inviter</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
     */
    public $InviterPhone;

    /**
     * @var string <p>The code that the inviter sent to the user</p>
     */
    public $InviteCode;

    /**
     * @var string <p>The channel that inviter used to invite the user</p>
     */
    public $InviteChannel;

    /**
     * @param string $InviterUserId <p>The ID of the inviter</p>
     * @param string $InviterPhone <p>The phone number of the inviter</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
     * @param string $InviteCode <p>The code that the inviter sent to the user</p>
     * @param string $InviteChannel <p>The channel that inviter used to invite the user</p>
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
        if (array_key_exists("InviterUserId",$param) and $param["InviterUserId"] !== null) {
            $this->InviterUserId = $param["InviterUserId"];
        }

        if (array_key_exists("InviterPhone",$param) and $param["InviterPhone"] !== null) {
            $this->InviterPhone = $param["InviterPhone"];
        }

        if (array_key_exists("InviteCode",$param) and $param["InviteCode"] !== null) {
            $this->InviteCode = $param["InviteCode"];
        }

        if (array_key_exists("InviteChannel",$param) and $param["InviteChannel"] !== null) {
            $this->InviteChannel = $param["InviteChannel"];
        }
    }
}
