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
 * @method string getParamKey() Obtain Parameter name.

 * @method void setParamKey(string $ParamKey) Set Parameter name.

 * @method string getParamDesc() Obtain Parameter Description: The format is ProjectIdentifier.TaskName.ParameterName
Example: project_wedata_1.sh_250820_104107.pp_out
 * @method void setParamDesc(string $ParamDesc) Set Parameter Description: The format is ProjectIdentifier.TaskName.ParameterName
Example: project_wedata_1.sh_250820_104107.pp_out
 * @method string getFromTaskId() Obtain Parent Task ID

 * @method void setFromTaskId(string $FromTaskId) Set Parent Task ID

 * @method string getFromParamKey() Obtain Parent task parameter key.

 * @method void setFromParamKey(string $FromParamKey) Set Parent task parameter key.
 */
class InTaskParameter extends AbstractModel
{
    /**
     * @var string Parameter name.

     */
    public $ParamKey;

    /**
     * @var string Parameter Description: The format is ProjectIdentifier.TaskName.ParameterName
Example: project_wedata_1.sh_250820_104107.pp_out
     */
    public $ParamDesc;

    /**
     * @var string Parent Task ID

     */
    public $FromTaskId;

    /**
     * @var string Parent task parameter key.

     */
    public $FromParamKey;

    /**
     * @param string $ParamKey Parameter name.

     * @param string $ParamDesc Parameter Description: The format is ProjectIdentifier.TaskName.ParameterName
Example: project_wedata_1.sh_250820_104107.pp_out
     * @param string $FromTaskId Parent Task ID

     * @param string $FromParamKey Parent task parameter key.
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
    }
}
