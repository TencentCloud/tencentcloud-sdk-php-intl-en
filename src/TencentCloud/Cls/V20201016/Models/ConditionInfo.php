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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getAttributes() Obtain 
 * @method void setAttributes(string $Attributes) Set 
 * @method integer getRule() Obtain 
 * @method void setRule(integer $Rule) Set 
 * @method string getConditionValue() Obtain 
 * @method void setConditionValue(string $ConditionValue) Set 
 */
class ConditionInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Attributes;

    /**
     * @var integer 
     */
    public $Rule;

    /**
     * @var string 
     */
    public $ConditionValue;

    /**
     * @param string $Attributes 
     * @param integer $Rule 
     * @param string $ConditionValue 
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
        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("ConditionValue",$param) and $param["ConditionValue"] !== null) {
            $this->ConditionValue = $param["ConditionValue"];
        }
    }
}
