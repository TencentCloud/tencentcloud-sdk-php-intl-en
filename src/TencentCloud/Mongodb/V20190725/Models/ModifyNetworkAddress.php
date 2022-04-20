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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database IP to be modified
 *
 * @method string getNewIPAddress() Obtain New IP
 * @method void setNewIPAddress(string $NewIPAddress) Set New IP
 * @method string getOldIpAddress() Obtain Old IP
 * @method void setOldIpAddress(string $OldIpAddress) Set Old IP
 */
class ModifyNetworkAddress extends AbstractModel
{
    /**
     * @var string New IP
     */
    public $NewIPAddress;

    /**
     * @var string Old IP
     */
    public $OldIpAddress;

    /**
     * @param string $NewIPAddress New IP
     * @param string $OldIpAddress Old IP
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
        if (array_key_exists("NewIPAddress",$param) and $param["NewIPAddress"] !== null) {
            $this->NewIPAddress = $param["NewIPAddress"];
        }

        if (array_key_exists("OldIpAddress",$param) and $param["OldIpAddress"] !== null) {
            $this->OldIpAddress = $param["OldIpAddress"];
        }
    }
}
