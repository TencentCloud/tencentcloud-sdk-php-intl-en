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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Conditions to query the user information 
 *
 * @method string getPropertyKey() Obtain Property key
 * @method void setPropertyKey(string $PropertyKey) Set Property key
 * @method string getPropertyValue() Obtain Property value
 * @method void setPropertyValue(string $PropertyValue) Set Property value
 * @method boolean getLogic() Obtain Logic value. `True` or `False`
 * @method void setLogic(boolean $Logic) Set Logic value. `True` or `False`
 * @method string getOperateLogic() Obtain Operator. Values: `>`, `<`, `=`, `>=`, `<=`, `!=` and `between`. 
 * @method void setOperateLogic(string $OperateLogic) Set Operator. Values: `>`, `<`, `=`, `>=`, `<=`, `!=` and `between`. 
 */
class QueryUserFilter extends AbstractModel
{
    /**
     * @var string Property key
     */
    public $PropertyKey;

    /**
     * @var string Property value
     */
    public $PropertyValue;

    /**
     * @var boolean Logic value. `True` or `False`
     */
    public $Logic;

    /**
     * @var string Operator. Values: `>`, `<`, `=`, `>=`, `<=`, `!=` and `between`. 
     */
    public $OperateLogic;

    /**
     * @param string $PropertyKey Property key
     * @param string $PropertyValue Property value
     * @param boolean $Logic Logic value. `True` or `False`
     * @param string $OperateLogic Operator. Values: `>`, `<`, `=`, `>=`, `<=`, `!=` and `between`. 
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
        if (array_key_exists("PropertyKey",$param) and $param["PropertyKey"] !== null) {
            $this->PropertyKey = $param["PropertyKey"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }

        if (array_key_exists("OperateLogic",$param) and $param["OperateLogic"] !== null) {
            $this->OperateLogic = $param["OperateLogic"];
        }
    }
}
