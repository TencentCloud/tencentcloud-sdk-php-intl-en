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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleIpDirect request structure.
 *
 * @method string getModuleId() Obtain Module ID.
 * @method void setModuleId(string $ModuleId) Set Module ID.
 * @method boolean getCloseIpDirect() Obtain Whether to disable IP direct access. Valid values:
true: yes
false: no
 * @method void setCloseIpDirect(boolean $CloseIpDirect) Set Whether to disable IP direct access. Valid values:
true: yes
false: no
 */
class ModifyModuleIpDirectRequest extends AbstractModel
{
    /**
     * @var string Module ID.
     */
    public $ModuleId;

    /**
     * @var boolean Whether to disable IP direct access. Valid values:
true: yes
false: no
     */
    public $CloseIpDirect;

    /**
     * @param string $ModuleId Module ID.
     * @param boolean $CloseIpDirect Whether to disable IP direct access. Valid values:
true: yes
false: no
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("CloseIpDirect",$param) and $param["CloseIpDirect"] !== null) {
            $this->CloseIpDirect = $param["CloseIpDirect"];
        }
    }
}
