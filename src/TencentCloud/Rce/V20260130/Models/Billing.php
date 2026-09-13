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
 * Bill information
 *
 * @method Address getAddress() Obtain <p>The billing address associated with this user</p>
 * @method void setAddress(Address $Address) Set <p>The billing address associated with this user</p>
 * @method string getPhone() Obtain <p>The phone number associated with the bill</p><p>Parameter format: Complies with the E.164 standard, using the format with "+", region code, and number</p>
 * @method void setPhone(string $Phone) Set <p>The phone number associated with the bill</p><p>Parameter format: Complies with the E.164 standard, using the format with "+", region code, and number</p>
 * @method string getEmail() Obtain <p>The email associated with the bill</p>
 * @method void setEmail(string $Email) Set <p>The email associated with the bill</p>
 * @method string getRecipient() Obtain <p>The name of the receiver associated with the bill</p>
 * @method void setRecipient(string $Recipient) Set <p>The name of the receiver associated with the bill</p>
 */
class Billing extends AbstractModel
{
    /**
     * @var Address <p>The billing address associated with this user</p>
     */
    public $Address;

    /**
     * @var string <p>The phone number associated with the bill</p><p>Parameter format: Complies with the E.164 standard, using the format with "+", region code, and number</p>
     */
    public $Phone;

    /**
     * @var string <p>The email associated with the bill</p>
     */
    public $Email;

    /**
     * @var string <p>The name of the receiver associated with the bill</p>
     */
    public $Recipient;

    /**
     * @param Address $Address <p>The billing address associated with this user</p>
     * @param string $Phone <p>The phone number associated with the bill</p><p>Parameter format: Complies with the E.164 standard, using the format with "+", region code, and number</p>
     * @param string $Email <p>The email associated with the bill</p>
     * @param string $Recipient <p>The name of the receiver associated with the bill</p>
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Recipient",$param) and $param["Recipient"] !== null) {
            $this->Recipient = $param["Recipient"];
        }
    }
}
