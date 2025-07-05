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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter modification result
 *
 * @method string getParam() Obtain Renames parameter
 * @method void setParam(string $Param) Set Renames parameter
 * @method integer getCode() Obtain Result of parameter modification. 0: success; -1: failure; -2: invalid parameter value.
 * @method void setCode(integer $Code) Set Result of parameter modification. 0: success; -1: failure; -2: invalid parameter value.
 */
class ParamModifyResult extends AbstractModel
{
    /**
     * @var string Renames parameter
     */
    public $Param;

    /**
     * @var integer Result of parameter modification. 0: success; -1: failure; -2: invalid parameter value.
     */
    public $Code;

    /**
     * @param string $Param Renames parameter
     * @param integer $Code Result of parameter modification. 0: success; -1: failure; -2: invalid parameter value.
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
        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
