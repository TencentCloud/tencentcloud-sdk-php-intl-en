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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * History of instance parameter modifications
 *
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method string getPreValue() Obtain Value before modification
 * @method void setPreValue(string $PreValue) Set Value before modification
 * @method string getNewValue() Obtain Value after modification
 * @method void setNewValue(string $NewValue) Set Value after modification
 * @method integer getStatus() Obtain Status. 1: modifying parameter configuration; 2: parameter configuration modified successfully; 3: failed to modify parameter configuration
 * @method void setStatus(integer $Status) Set Status. 1: modifying parameter configuration; 2: parameter configuration modified successfully; 3: failed to modify parameter configuration
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class InstanceParamHistory extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Value before modification
     */
    public $PreValue;

    /**
     * @var string Value after modification
     */
    public $NewValue;

    /**
     * @var integer Status. 1: modifying parameter configuration; 2: parameter configuration modified successfully; 3: failed to modify parameter configuration
     */
    public $Status;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param string $ParamName Parameter name
     * @param string $PreValue Value before modification
     * @param string $NewValue Value after modification
     * @param integer $Status Status. 1: modifying parameter configuration; 2: parameter configuration modified successfully; 3: failed to modify parameter configuration
     * @param string $ModifyTime Modification time
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("PreValue",$param) and $param["PreValue"] !== null) {
            $this->PreValue = $param["PreValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
