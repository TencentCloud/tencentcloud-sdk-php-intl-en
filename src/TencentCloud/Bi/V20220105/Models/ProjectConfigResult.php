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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customized query
 *
 * @method string getModuleId() Obtain Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModuleId(string $ModuleId) Set Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIncludeType() Obtain Configuration mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncludeType(string $IncludeType) Set Configuration mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParams() Obtain Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParams(string $Params) Set Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProjectConfigResult extends AbstractModel
{
    /**
     * @var string Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModuleId;

    /**
     * @var string Configuration mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncludeType;

    /**
     * @var string Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Params;

    /**
     * @param string $ModuleId Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IncludeType Configuration mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Params Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("IncludeType",$param) and $param["IncludeType"] !== null) {
            $this->IncludeType = $param["IncludeType"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
