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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of the module
 *
 * @method string getModuleId() Obtain Module ID
 * @method void setModuleId(string $ModuleId) Set Module ID
 * @method string getModuleName() Obtain Module name
 * @method void setModuleName(string $ModuleName) Set Module name
 */
class SimpleModule extends AbstractModel
{
    /**
     * @var string Module ID
     */
    public $ModuleId;

    /**
     * @var string Module name
     */
    public $ModuleName;

    /**
     * @param string $ModuleId Module ID
     * @param string $ModuleName Module name
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

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }
    }
}
