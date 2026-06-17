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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reserved. Generally unnecessary for users to concern.
 *
 * @method boolean getDnat() Obtain Whether to enable VIP Direct Connect
 * @method void setDnat(boolean $Dnat) Set Whether to enable VIP Direct Connect
 * @method string getTgwGroupName() Obtain TgwGroup name
 * @method void setTgwGroupName(string $TgwGroupName) Set TgwGroup name
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var boolean Whether to enable VIP Direct Connect
     */
    public $Dnat;

    /**
     * @var string TgwGroup name
     */
    public $TgwGroupName;

    /**
     * @param boolean $Dnat Whether to enable VIP Direct Connect
     * @param string $TgwGroupName TgwGroup name
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
        if (array_key_exists("Dnat",$param) and $param["Dnat"] !== null) {
            $this->Dnat = $param["Dnat"];
        }

        if (array_key_exists("TgwGroupName",$param) and $param["TgwGroupName"] !== null) {
            $this->TgwGroupName = $param["TgwGroupName"];
        }
    }
}
