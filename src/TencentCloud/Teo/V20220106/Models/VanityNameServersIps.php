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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP of the custom name server
 *
 * @method string getName() Obtain Name of the custom name server
 * @method void setName(string $Name) Set Name of the custom name server
 * @method string getIPv4() Obtain IPv4 address of the custom name server
 * @method void setIPv4(string $IPv4) Set IPv4 address of the custom name server
 */
class VanityNameServersIps extends AbstractModel
{
    /**
     * @var string Name of the custom name server
     */
    public $Name;

    /**
     * @var string IPv4 address of the custom name server
     */
    public $IPv4;

    /**
     * @param string $Name Name of the custom name server
     * @param string $IPv4 IPv4 address of the custom name server
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IPv4",$param) and $param["IPv4"] !== null) {
            $this->IPv4 = $param["IPv4"];
        }
    }
}
