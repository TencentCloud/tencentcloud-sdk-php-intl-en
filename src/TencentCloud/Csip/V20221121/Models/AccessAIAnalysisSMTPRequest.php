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
 * AccessAIAnalysisSMTP request structure.
 *
 * @method string getAccountName() Obtain <p>Email address</p>
 * @method void setAccountName(string $AccountName) Set <p>Email address</p>
 * @method integer getType() Obtain <p>Mailbox type</p><p>Enumeration values:</p><ul><li>1: QQ Mail</li><li>2: GMail</li><li>3: OutLook</li></ul>
 * @method void setType(integer $Type) Set <p>Mailbox type</p><p>Enumeration values:</p><ul><li>1: QQ Mail</li><li>2: GMail</li><li>3: OutLook</li></ul>
 * @method string getPassword() Obtain <p>Mailbox authorization code</p>
 * @method void setPassword(string $Password) Set <p>Mailbox authorization code</p>
 */
class AccessAIAnalysisSMTPRequest extends AbstractModel
{
    /**
     * @var string <p>Email address</p>
     */
    public $AccountName;

    /**
     * @var integer <p>Mailbox type</p><p>Enumeration values:</p><ul><li>1: QQ Mail</li><li>2: GMail</li><li>3: OutLook</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Mailbox authorization code</p>
     */
    public $Password;

    /**
     * @param string $AccountName <p>Email address</p>
     * @param integer $Type <p>Mailbox type</p><p>Enumeration values:</p><ul><li>1: QQ Mail</li><li>2: GMail</li><li>3: OutLook</li></ul>
     * @param string $Password <p>Mailbox authorization code</p>
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
