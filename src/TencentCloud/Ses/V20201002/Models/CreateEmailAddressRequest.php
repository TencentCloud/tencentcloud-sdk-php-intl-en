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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmailAddress request structure.
 *
 * @method string getEmailAddress() Obtain Your sender address. (You can create up to 10 sender addresses for each domain.)
 * @method void setEmailAddress(string $EmailAddress) Set Your sender address. (You can create up to 10 sender addresses for each domain.)
 * @method string getEmailSenderName() Obtain Sender name.
 * @method void setEmailSenderName(string $EmailSenderName) Set Sender name.
 */
class CreateEmailAddressRequest extends AbstractModel
{
    /**
     * @var string Your sender address. (You can create up to 10 sender addresses for each domain.)
     */
    public $EmailAddress;

    /**
     * @var string Sender name.
     */
    public $EmailSenderName;

    /**
     * @param string $EmailAddress Your sender address. (You can create up to 10 sender addresses for each domain.)
     * @param string $EmailSenderName Sender name.
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
        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("EmailSenderName",$param) and $param["EmailSenderName"] !== null) {
            $this->EmailSenderName = $param["EmailSenderName"];
        }
    }
}
