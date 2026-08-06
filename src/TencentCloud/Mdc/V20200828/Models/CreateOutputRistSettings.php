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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method string getProfile() Obtain 
 * @method void setProfile(string $Profile) Set 
 * @method integer getBuffer() Obtain 
 * @method void setBuffer(integer $Buffer) Set 
 */
class CreateOutputRistSettings extends AbstractModel
{
    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var string 
     */
    public $Profile;

    /**
     * @var integer 
     */
    public $Buffer;

    /**
     * @param string $Mode 
     * @param string $Profile 
     * @param integer $Buffer 
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Buffer",$param) and $param["Buffer"] !== null) {
            $this->Buffer = $param["Buffer"];
        }
    }
}
