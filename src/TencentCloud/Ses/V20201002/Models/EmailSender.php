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
 * Describes sender information.
 *
 * @method string getEmailAddress() Obtain Sender address.
 * @method void setEmailAddress(string $EmailAddress) Set Sender address.
 * @method string getEmailSenderName() Obtain Sender name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEmailSenderName(string $EmailSenderName) Set Sender name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCreatedTimestamp() Obtain Creation time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreatedTimestamp(integer $CreatedTimestamp) Set Creation time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class EmailSender extends AbstractModel
{
    /**
     * @var string Sender address.
     */
    public $EmailAddress;

    /**
     * @var string Sender name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EmailSenderName;

    /**
     * @var integer Creation time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreatedTimestamp;

    /**
     * @param string $EmailAddress Sender address.
     * @param string $EmailSenderName Sender name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CreatedTimestamp Creation time.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
    }
}
