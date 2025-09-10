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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent information.
 *
 * @method string getMail() Obtain Agent email address.
 * @method void setMail(string $Mail) Set Agent email address.
 * @method string getStaffNumber() Obtain Agent id.
 * @method void setStaffNumber(string $StaffNumber) Set Agent id.
 */
class EventStaffElement extends AbstractModel
{
    /**
     * @var string Agent email address.
     */
    public $Mail;

    /**
     * @var string Agent id.
     */
    public $StaffNumber;

    /**
     * @param string $Mail Agent email address.
     * @param string $StaffNumber Agent id.
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
        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }
    }
}
