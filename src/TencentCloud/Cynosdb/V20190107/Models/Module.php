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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modules supported by the system
 *
 * @method string getIsDisable() Obtain Whether it is supported. Valid values: `yes`, `no`.
 * @method void setIsDisable(string $IsDisable) Set Whether it is supported. Valid values: `yes`, `no`.
 * @method string getModuleName() Obtain Module name
 * @method void setModuleName(string $ModuleName) Set Module name
 */
class Module extends AbstractModel
{
    /**
     * @var string Whether it is supported. Valid values: `yes`, `no`.
     */
    public $IsDisable;

    /**
     * @var string Module name
     */
    public $ModuleName;

    /**
     * @param string $IsDisable Whether it is supported. Valid values: `yes`, `no`.
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
        if (array_key_exists("IsDisable",$param) and $param["IsDisable"] !== null) {
            $this->IsDisable = $param["IsDisable"];
        }

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }
    }
}
