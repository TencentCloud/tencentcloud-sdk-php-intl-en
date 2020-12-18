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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRecorder request structure.
 *
 * @method boolean getAllSupported() Obtain Whether to select all currently supported resource types
 * @method void setAllSupported(boolean $AllSupported) Set Whether to select all currently supported resource types
 * @method boolean getEnable() Obtain Whether to enable the recorder. Valid values: true (enable), false (disable).
 * @method void setEnable(boolean $Enable) Set Whether to enable the recorder. Valid values: true (enable), false (disable).
 * @method string getName() Obtain Recorder name after modification
 * @method void setName(string $Name) Set Recorder name after modification
 */
class UpdateRecorderRequest extends AbstractModel
{
    /**
     * @var boolean Whether to select all currently supported resource types
     */
    public $AllSupported;

    /**
     * @var boolean Whether to enable the recorder. Valid values: true (enable), false (disable).
     */
    public $Enable;

    /**
     * @var string Recorder name after modification
     */
    public $Name;

    /**
     * @param boolean $AllSupported Whether to select all currently supported resource types
     * @param boolean $Enable Whether to enable the recorder. Valid values: true (enable), false (disable).
     * @param string $Name Recorder name after modification
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
        if (array_key_exists("AllSupported",$param) and $param["AllSupported"] !== null) {
            $this->AllSupported = $param["AllSupported"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
