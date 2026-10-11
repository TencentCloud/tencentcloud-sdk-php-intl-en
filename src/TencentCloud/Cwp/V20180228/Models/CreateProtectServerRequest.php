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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProtectServer request structure.
 *
 * @method string getProtectDir() Obtain Protection directory address
 * @method void setProtectDir(string $ProtectDir) Set Protection directory address
 * @method array getProtectHostConfig() Obtain Information of protected machines
 * @method void setProtectHostConfig(array $ProtectHostConfig) Set Information of protected machines
 */
class CreateProtectServerRequest extends AbstractModel
{
    /**
     * @var string Protection directory address
     */
    public $ProtectDir;

    /**
     * @var array Information of protected machines
     */
    public $ProtectHostConfig;

    /**
     * @param string $ProtectDir Protection directory address
     * @param array $ProtectHostConfig Information of protected machines
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
        if (array_key_exists("ProtectDir",$param) and $param["ProtectDir"] !== null) {
            $this->ProtectDir = $param["ProtectDir"];
        }

        if (array_key_exists("ProtectHostConfig",$param) and $param["ProtectHostConfig"] !== null) {
            $this->ProtectHostConfig = [];
            foreach ($param["ProtectHostConfig"] as $key => $value){
                $obj = new ProtectHostConfig();
                $obj->deserialize($value);
                array_push($this->ProtectHostConfig, $obj);
            }
        }
    }
}
