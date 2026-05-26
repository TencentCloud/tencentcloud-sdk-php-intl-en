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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter passing - reference parameter.
 *
 * @method string getParamKey() Obtain <p>Parameter name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamKey(string $ParamKey) Set <p>Parameter name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParamDesc() Obtain <p>Parameter description: Format is project ID.task name.parameter name; for example: project_wedata_1.sh_250820_104107.pp_out</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamDesc(string $ParamDesc) Set <p>Parameter description: Format is project ID.task name.parameter name; for example: project_wedata_1.sh_250820_104107.pp_out</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFromTaskId() Obtain <p>Parent task ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFromTaskId(string $FromTaskId) Set <p>Parent task ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFromParamKey() Obtain <p>Parent task parameter key</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFromParamKey(string $FromParamKey) Set <p>Parent task parameter key</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain <p>Task input type, by default uses TASK.</p><p>Enumeration value:</p><ul><li>TASK: Source is the parent task.</li><li>CONSTANT: Constant value, currently only supported by for-each node.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set <p>Task input type, by default uses TASK.</p><p>Enumeration value:</p><ul><li>TASK: Source is the parent task.</li><li>CONSTANT: Constant value, currently only supported by for-each node.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InTaskParameter extends AbstractModel
{
    /**
     * @var string <p>Parameter name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamKey;

    /**
     * @var string <p>Parameter description: Format is project ID.task name.parameter name; for example: project_wedata_1.sh_250820_104107.pp_out</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamDesc;

    /**
     * @var string <p>Parent task ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FromTaskId;

    /**
     * @var string <p>Parent task parameter key</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FromParamKey;

    /**
     * @var string <p>Task input type, by default uses TASK.</p><p>Enumeration value:</p><ul><li>TASK: Source is the parent task.</li><li>CONSTANT: Constant value, currently only supported by for-each node.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param string $ParamKey <p>Parameter name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParamDesc <p>Parameter description: Format is project ID.task name.parameter name; for example: project_wedata_1.sh_250820_104107.pp_out</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FromTaskId <p>Parent task ID.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FromParamKey <p>Parent task parameter key</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type <p>Task input type, by default uses TASK.</p><p>Enumeration value:</p><ul><li>TASK: Source is the parent task.</li><li>CONSTANT: Constant value, currently only supported by for-each node.</li></ul>
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
        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("FromTaskId",$param) and $param["FromTaskId"] !== null) {
            $this->FromTaskId = $param["FromTaskId"];
        }

        if (array_key_exists("FromParamKey",$param) and $param["FromParamKey"] !== null) {
            $this->FromParamKey = $param["FromParamKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
