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
 * CreateRecorder request structure.
 *
 * @method string getRole() Obtain Role name authorized to CFA
 * @method void setRole(string $Role) Set Role name authorized to CFA
 * @method boolean getAllSupported() Obtain Whether to select all supported resource types. Valid values: true (default), false.
 * @method void setAllSupported(boolean $AllSupported) Set Whether to select all supported resource types. Valid values: true (default), false.
 * @method boolean getEnable() Obtain Whether to enable the resource recorder. Valid values: true (default), false.
 * @method void setEnable(boolean $Enable) Set Whether to enable the resource recorder. Valid values: true (default), false.
 * @method string getName() Obtain Resource recorder name. Default name: default.
 * @method void setName(string $Name) Set Resource recorder name. Default name: default.
 */
class CreateRecorderRequest extends AbstractModel
{
    /**
     * @var string Role name authorized to CFA
     */
    public $Role;

    /**
     * @var boolean Whether to select all supported resource types. Valid values: true (default), false.
     */
    public $AllSupported;

    /**
     * @var boolean Whether to enable the resource recorder. Valid values: true (default), false.
     */
    public $Enable;

    /**
     * @var string Resource recorder name. Default name: default.
     */
    public $Name;

    /**
     * @param string $Role Role name authorized to CFA
     * @param boolean $AllSupported Whether to select all supported resource types. Valid values: true (default), false.
     * @param boolean $Enable Whether to enable the resource recorder. Valid values: true (default), false.
     * @param string $Name Resource recorder name. Default name: default.
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
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
