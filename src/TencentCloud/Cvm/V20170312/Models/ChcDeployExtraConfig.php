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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration options for MiniOS of the CHC deployment network
 *
 * @method string getMiniOsType() Obtain 
 * @method void setMiniOsType(string $MiniOsType) Set 
 * @method string getBootType() Obtain 
 * @method void setBootType(string $BootType) Set 
 * @method string getBootFile() Obtain 
 * @method void setBootFile(string $BootFile) Set 
 * @method string getNextServerAddress() Obtain 
 * @method void setNextServerAddress(string $NextServerAddress) Set 
 */
class ChcDeployExtraConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $MiniOsType;

    /**
     * @var string 
     */
    public $BootType;

    /**
     * @var string 
     */
    public $BootFile;

    /**
     * @var string 
     */
    public $NextServerAddress;

    /**
     * @param string $MiniOsType 
     * @param string $BootType 
     * @param string $BootFile 
     * @param string $NextServerAddress 
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
        if (array_key_exists("MiniOsType",$param) and $param["MiniOsType"] !== null) {
            $this->MiniOsType = $param["MiniOsType"];
        }

        if (array_key_exists("BootType",$param) and $param["BootType"] !== null) {
            $this->BootType = $param["BootType"];
        }

        if (array_key_exists("BootFile",$param) and $param["BootFile"] !== null) {
            $this->BootFile = $param["BootFile"];
        }

        if (array_key_exists("NextServerAddress",$param) and $param["NextServerAddress"] !== null) {
            $this->NextServerAddress = $param["NextServerAddress"];
        }
    }
}
