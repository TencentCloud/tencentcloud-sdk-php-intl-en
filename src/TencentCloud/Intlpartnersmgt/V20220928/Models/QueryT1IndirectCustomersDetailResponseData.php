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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query data of indirect sub-customers of a first-level distributor.

Callable roles: Distributor
 *
 * @method integer getClientUin() Obtain Customer uin.
 * @method void setClientUin(integer $ClientUin) Set Customer uin.
 * @method string getClientName() Obtain Customer name.
 * @method void setClientName(string $ClientName) Set Customer name.
 * @method string getClientBindTime() Obtain The time when a sub-customer binds a second-level reseller, time zone: UTC+08:00.
 * @method void setClientBindTime(string $ClientBindTime) Set The time when a sub-customer binds a second-level reseller, time zone: UTC+08:00.
 */
class QueryT1IndirectCustomersDetailResponseData extends AbstractModel
{
    /**
     * @var integer Customer uin.
     */
    public $ClientUin;

    /**
     * @var string Customer name.
     */
    public $ClientName;

    /**
     * @var string The time when a sub-customer binds a second-level reseller, time zone: UTC+08:00.
     */
    public $ClientBindTime;

    /**
     * @param integer $ClientUin Customer uin.
     * @param string $ClientName Customer name.
     * @param string $ClientBindTime The time when a sub-customer binds a second-level reseller, time zone: UTC+08:00.
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("ClientBindTime",$param) and $param["ClientBindTime"] !== null) {
            $this->ClientBindTime = $param["ClientBindTime"];
        }
    }
}
