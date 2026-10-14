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
 * ModifyWebPageProtectDir request structure.
 *
 * @method string getProtectDirAddr() Obtain Website protection directory address
 * @method void setProtectDirAddr(string $ProtectDirAddr) Set Website protection directory address
 * @method string getProtectDirName() Obtain Name of the website protection directory
 * @method void setProtectDirName(string $ProtectDirName) Set Name of the website protection directory
 * @method string getProtectFileType() Obtain Protected file types, separated by semicolons
 * @method void setProtectFileType(string $ProtectFileType) Set Protected file types, separated by semicolons
 * @method array getHostConfig() Obtain Protection machine list information
 * @method void setHostConfig(array $HostConfig) Set Protection machine list information
 */
class ModifyWebPageProtectDirRequest extends AbstractModel
{
    /**
     * @var string Website protection directory address
     */
    public $ProtectDirAddr;

    /**
     * @var string Name of the website protection directory
     */
    public $ProtectDirName;

    /**
     * @var string Protected file types, separated by semicolons
     */
    public $ProtectFileType;

    /**
     * @var array Protection machine list information
     */
    public $HostConfig;

    /**
     * @param string $ProtectDirAddr Website protection directory address
     * @param string $ProtectDirName Name of the website protection directory
     * @param string $ProtectFileType Protected file types, separated by semicolons
     * @param array $HostConfig Protection machine list information
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
        if (array_key_exists("ProtectDirAddr",$param) and $param["ProtectDirAddr"] !== null) {
            $this->ProtectDirAddr = $param["ProtectDirAddr"];
        }

        if (array_key_exists("ProtectDirName",$param) and $param["ProtectDirName"] !== null) {
            $this->ProtectDirName = $param["ProtectDirName"];
        }

        if (array_key_exists("ProtectFileType",$param) and $param["ProtectFileType"] !== null) {
            $this->ProtectFileType = $param["ProtectFileType"];
        }

        if (array_key_exists("HostConfig",$param) and $param["HostConfig"] !== null) {
            $this->HostConfig = [];
            foreach ($param["HostConfig"] as $key => $value){
                $obj = new ProtectHostConfig();
                $obj->deserialize($value);
                array_push($this->HostConfig, $obj);
            }
        }
    }
}
