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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceToken request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getTokenType() Obtain Access credential type. Values: `longterm` and `temp` (default, valid for one hour)
 * @method void setTokenType(string $TokenType) Set Access credential type. Values: `longterm` and `temp` (default, valid for one hour)
 * @method string getDesc() Obtain Description of the long-term access credential
 * @method void setDesc(string $Desc) Set Description of the long-term access credential
 */
class CreateInstanceTokenRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Access credential type. Values: `longterm` and `temp` (default, valid for one hour)
     */
    public $TokenType;

    /**
     * @var string Description of the long-term access credential
     */
    public $Desc;

    /**
     * @param string $RegistryId Instance ID
     * @param string $TokenType Access credential type. Values: `longterm` and `temp` (default, valid for one hour)
     * @param string $Desc Description of the long-term access credential
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
