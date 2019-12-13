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
 * @method string getParamName() 获取Parameter name
 * @method void setParamName(string $ParamName) 设置Parameter name
 * @method string getValueType() 获取Parameter type: Text
 * @method void setValueType(string $ValueType) 设置Parameter type: Text
 * @method string getNeedRestart() 获取Whether restart is required after a modification is made. Value range: true, false
 * @method void setNeedRestart(string $NeedRestart) 设置Whether restart is required after a modification is made. Value range: true, false
 * @method string getDefaultValue() 获取Default value of the parameter
 * @method void setDefaultValue(string $DefaultValue) 设置Default value of the parameter
 * @method string getCurrentValue() 获取Current value of a parameter
 * @method void setCurrentValue(string $CurrentValue) 设置Current value of a parameter
 * @method string getTips() 获取Parameter description
 * @method void setTips(string $Tips) 设置Parameter description
 * @method array getTextValue() 获取Value range of a parameter
 * @method void setTextValue(array $TextValue) 设置Value range of a parameter
 * @method integer getStatus() 获取Parameter status. 1: modifying; 2: modified
 * @method void setStatus(integer $Status) 设置Parameter status. 1: modifying; 2: modified
 */

/**
 *Descriptions of text parameters of the instance
 */
class InstanceTextParam extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Parameter type: Text
     */
    public $ValueType;

    /**
     * @var string Whether restart is required after a modification is made. Value range: true, false
     */
    public $NeedRestart;

    /**
     * @var string Default value of the parameter
     */
    public $DefaultValue;

    /**
     * @var string Current value of a parameter
     */
    public $CurrentValue;

    /**
     * @var string Parameter description
     */
    public $Tips;

    /**
     * @var array Value range of a parameter
     */
    public $TextValue;

    /**
     * @var integer Parameter status. 1: modifying; 2: modified
     */
    public $Status;
    /**
     * @param string $ParamName Parameter name
     * @param string $ValueType Parameter type: Text
     * @param string $NeedRestart Whether restart is required after a modification is made. Value range: true, false
     * @param string $DefaultValue Default value of the parameter
     * @param string $CurrentValue Current value of a parameter
     * @param string $Tips Parameter description
     * @param array $TextValue Value range of a parameter
     * @param integer $Status Parameter status. 1: modifying; 2: modified
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("TextValue",$param) and $param["TextValue"] !== null) {
            $this->TextValue = $param["TextValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
