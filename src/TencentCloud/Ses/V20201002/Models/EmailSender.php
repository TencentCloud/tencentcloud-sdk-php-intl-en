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
 * Describes sender information.
 *
 * @method string getEmailAddress() Obtain Sender address.
 * @method void setEmailAddress(string $EmailAddress) Set Sender address.
 * @method string getEmailSenderName() Obtain Sender alias.
 * @method void setEmailSenderName(string $EmailSenderName) Set Sender alias.
 * @method integer getCreatedTimestamp() Obtain Creation time.


 * @method void setCreatedTimestamp(integer $CreatedTimestamp) Set Creation time.


 * @method integer getSmtpPwdType() Obtain smtp password type. 0=not set. 1=already set up.
 * @method void setSmtpPwdType(integer $SmtpPwdType) Set smtp password type. 0=not set. 1=already set up.
 */
class EmailSender extends AbstractModel
{
    /**
     * @var string Sender address.
     */
    public $EmailAddress;

    /**
     * @var string Sender alias.
     */
    public $EmailSenderName;

    /**
     * @var integer Creation time.


     */
    public $CreatedTimestamp;

    /**
     * @var integer smtp password type. 0=not set. 1=already set up.
     */
    public $SmtpPwdType;

    /**
     * @param string $EmailAddress Sender address.
     * @param string $EmailSenderName Sender alias.
     * @param integer $CreatedTimestamp Creation time.


     * @param integer $SmtpPwdType smtp password type. 0=not set. 1=already set up.
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

        if (array_key_exists("CreatedTimestamp",$param) and $param["CreatedTimestamp"] !== null) {
            $this->CreatedTimestamp = $param["CreatedTimestamp"];
        }

        if (array_key_exists("SmtpPwdType",$param) and $param["SmtpPwdType"] !== null) {
            $this->SmtpPwdType = $param["SmtpPwdType"];
        }
    }
}
