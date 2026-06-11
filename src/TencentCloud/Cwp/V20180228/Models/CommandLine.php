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
 * Command line content.
 *
 * @method string getExe() Obtain Path, which needs to be encrypted using Base64.
 * @method void setExe(string $Exe) Set Path, which needs to be encrypted using Base64.
 * @method string getCmdline() Obtain Command line, which needs to be encrypted using Base64.
 * @method void setCmdline(string $Cmdline) Set Command line, which needs to be encrypted using Base64.
 */
class CommandLine extends AbstractModel
{
    /**
     * @var string Path, which needs to be encrypted using Base64.
     */
    public $Exe;

    /**
     * @var string Command line, which needs to be encrypted using Base64.
     */
    public $Cmdline;

    /**
     * @param string $Exe Path, which needs to be encrypted using Base64.
     * @param string $Cmdline Command line, which needs to be encrypted using Base64.
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
        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Cmdline",$param) and $param["Cmdline"] !== null) {
            $this->Cmdline = $param["Cmdline"];
        }
    }
}
