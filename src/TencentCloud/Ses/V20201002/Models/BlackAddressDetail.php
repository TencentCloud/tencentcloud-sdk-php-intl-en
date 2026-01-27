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
 * Blocklist description.
 *
 * @method integer getId() Obtain Blocklist address id.
 * @method void setId(integer $Id) Set Blocklist address id.
 * @method string getEmail() Obtain Email address.
 * @method void setEmail(string $Email) Set Email address.
 * @method string getCreateTime() Obtain Creation time.


 * @method void setCreateTime(string $CreateTime) Set Creation time.


 * @method string getExpireDate() Obtain Expiration time
 * @method void setExpireDate(string $ExpireDate) Set Expiration time
 * @method integer getStatus() Obtain Blocklist status. valid values: 0 (expired), 1 (active).
 * @method void setStatus(integer $Status) Set Blocklist status. valid values: 0 (expired), 1 (active).
 */
class BlackAddressDetail extends AbstractModel
{
    /**
     * @var integer Blocklist address id.
     */
    public $Id;

    /**
     * @var string Email address.
     */
    public $Email;

    /**
     * @var string Creation time.


     */
    public $CreateTime;

    /**
     * @var string Expiration time
     */
    public $ExpireDate;

    /**
     * @var integer Blocklist status. valid values: 0 (expired), 1 (active).
     */
    public $Status;

    /**
     * @param integer $Id Blocklist address id.
     * @param string $Email Email address.
     * @param string $CreateTime Creation time.


     * @param string $ExpireDate Expiration time
     * @param integer $Status Blocklist status. valid values: 0 (expired), 1 (active).
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
