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
 * UpdateCustomBlackList request structure.
 *
 * @method integer getId() Obtain Blocklist id that needs to change.
 * @method void setId(integer $Id) Set Blocklist id that needs to change.
 * @method string getEmail() Obtain After modification email address.
 * @method void setEmail(string $Email) Set After modification email address.
 * @method string getExpireDate() Obtain Expiration time. if left empty, it indicates permanent validity.
 * @method void setExpireDate(string $ExpireDate) Set Expiration time. if left empty, it indicates permanent validity.
 */
class UpdateCustomBlackListRequest extends AbstractModel
{
    /**
     * @var integer Blocklist id that needs to change.
     */
    public $Id;

    /**
     * @var string After modification email address.
     */
    public $Email;

    /**
     * @var string Expiration time. if left empty, it indicates permanent validity.
     */
    public $ExpireDate;

    /**
     * @param integer $Id Blocklist id that needs to change.
     * @param string $Email After modification email address.
     * @param string $ExpireDate Expiration time. if left empty, it indicates permanent validity.
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

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }
    }
}
