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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name list for manager prereview
 *
 * @method string getDomain() Obtain Domain information for prereview
 * @method void setDomain(string $Domain) Set Domain information for prereview
 * @method string getCreateTime() Obtain Prereview domain creation time
 * @method void setCreateTime(string $CreateTime) Set Prereview domain creation time
 * @method string getExpireTime() Obtain Prereview domain expiry time
 * @method void setExpireTime(string $ExpireTime) Set Prereview domain expiry time
 */
class ManagerPreAuditDomain extends AbstractModel
{
    /**
     * @var string Domain information for prereview
     */
    public $Domain;

    /**
     * @var string Prereview domain creation time
     */
    public $CreateTime;

    /**
     * @var string Prereview domain expiry time
     */
    public $ExpireTime;

    /**
     * @param string $Domain Domain information for prereview
     * @param string $CreateTime Prereview domain creation time
     * @param string $ExpireTime Prereview domain expiry time
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
