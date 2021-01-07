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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Contact description.
 *
 * @method integer getId() Obtain Contact ID.
 * @method void setId(integer $Id) Set Contact ID.
 * @method string getName() Obtain Contact name.
 * @method void setName(string $Name) Set Contact name.
 * @method string getMail() Obtain The email address of the contact.
 * @method void setMail(string $Mail) Set The email address of the contact.
 */
class ContactItem extends AbstractModel
{
    /**
     * @var integer Contact ID.
     */
    public $Id;

    /**
     * @var string Contact name.
     */
    public $Name;

    /**
     * @var string The email address of the contact.
     */
    public $Mail;

    /**
     * @param integer $Id Contact ID.
     * @param string $Name Contact name.
     * @param string $Mail The email address of the contact.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }
    }
}
