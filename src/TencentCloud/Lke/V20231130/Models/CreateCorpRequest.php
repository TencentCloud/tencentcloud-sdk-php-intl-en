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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCorp request structure.
 *
 * @method string getFullName() Obtain Full name of the corporate.
 * @method void setFullName(string $FullName) Set Full name of the corporate.
 * @method string getContactName() Obtain Contact person's name.
 * @method void setContactName(string $ContactName) Set Contact person's name.
 * @method string getEmail() Obtain Contact person's mailbox.
 * @method void setEmail(string $Email) Set Contact person's mailbox.
 * @method string getTelephone() Obtain Contact person's mobile phone number.
 * @method void setTelephone(string $Telephone) Set Contact person's mobile phone number.
 */
class CreateCorpRequest extends AbstractModel
{
    /**
     * @var string Full name of the corporate.
     */
    public $FullName;

    /**
     * @var string Contact person's name.
     */
    public $ContactName;

    /**
     * @var string Contact person's mailbox.
     */
    public $Email;

    /**
     * @var string Contact person's mobile phone number.
     */
    public $Telephone;

    /**
     * @param string $FullName Full name of the corporate.
     * @param string $ContactName Contact person's name.
     * @param string $Email Contact person's mailbox.
     * @param string $Telephone Contact person's mobile phone number.
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }
    }
}
