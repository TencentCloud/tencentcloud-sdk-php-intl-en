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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Email blocklist structure describes the blocked email address, blocklist time, and reason.
 *
 * @method string getBounceTime() Obtain Time when the email address is blocklisted.
 * @method void setBounceTime(string $BounceTime) Set Time when the email address is blocklisted.
 * @method string getEmailAddress() Obtain Blocklisted email address.
 * @method void setEmailAddress(string $EmailAddress) Set Blocklisted email address.
 * @method string getIspDesc() Obtain Reason for being blacklisted.
 * @method void setIspDesc(string $IspDesc) Set Reason for being blacklisted.
 */
class BlackEmailAddress extends AbstractModel
{
    /**
     * @var string Time when the email address is blocklisted.
     */
    public $BounceTime;

    /**
     * @var string Blocklisted email address.
     */
    public $EmailAddress;

    /**
     * @var string Reason for being blacklisted.
     */
    public $IspDesc;

    /**
     * @param string $BounceTime Time when the email address is blocklisted.
     * @param string $EmailAddress Blocklisted email address.
     * @param string $IspDesc Reason for being blacklisted.
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
        if (array_key_exists("BounceTime",$param) and $param["BounceTime"] !== null) {
            $this->BounceTime = $param["BounceTime"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("IspDesc",$param) and $param["IspDesc"] !== null) {
            $this->IspDesc = $param["IspDesc"];
        }
    }
}
