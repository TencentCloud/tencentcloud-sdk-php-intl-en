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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * When adding customer service personnel in batches, information of the customer service personnel with an error is returned.
 *
 * @method string getStaffEmail() Obtain Agent email address.
 * @method void setStaffEmail(string $StaffEmail) Set Agent email address.
 * @method string getCode() Obtain Error code.
 * @method void setCode(string $Code) Set Error code.
 * @method string getMessage() Obtain Error description.
 * @method void setMessage(string $Message) Set Error description.
 */
class ErrStaffItem extends AbstractModel
{
    /**
     * @var string Agent email address.
     */
    public $StaffEmail;

    /**
     * @var string Error code.
     */
    public $Code;

    /**
     * @var string Error description.
     */
    public $Message;

    /**
     * @param string $StaffEmail Agent email address.
     * @param string $Code Error code.
     * @param string $Message Error description.
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
        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
