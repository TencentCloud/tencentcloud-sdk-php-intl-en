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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP added to blocklist 12306
 *
 * @method string getIP() Obtain Blacklisted IP
 * @method void setIP(string $IP) Set Blacklisted IP
 * @method string getCreateTime() Obtain Blacklisted time
 * @method void setCreateTime(string $CreateTime) Set Blacklisted time
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 */
class BlockedIP extends AbstractModel
{
    /**
     * @var string Blacklisted IP
     */
    public $IP;

    /**
     * @var string Blacklisted time
     */
    public $CreateTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @param string $IP Blacklisted IP
     * @param string $CreateTime Blacklisted time
     * @param string $ExpireTime Expiration time
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
