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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The scope to which the exception rule applies
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method array getModules() Obtain The module that applies. Only WAF managed rules are supported currently.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModules(array $Modules) Set The module that applies. Only WAF managed rules are supported currently.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPartialModules() Obtain 
 * @method void setPartialModules(array $PartialModules) Set 
 * @method array getSkipConditions() Obtain 
 * @method void setSkipConditions(array $SkipConditions) Set 
 */
class ExceptUserRuleScope extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var array The module that applies. Only WAF managed rules are supported currently.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Modules;

    /**
     * @var array 
     */
    public $PartialModules;

    /**
     * @var array 
     */
    public $SkipConditions;

    /**
     * @param string $Type 
     * @param array $Modules The module that applies. Only WAF managed rules are supported currently.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PartialModules 
     * @param array $SkipConditions 
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("PartialModules",$param) and $param["PartialModules"] !== null) {
            $this->PartialModules = [];
            foreach ($param["PartialModules"] as $key => $value){
                $obj = new PartialModule();
                $obj->deserialize($value);
                array_push($this->PartialModules, $obj);
            }
        }

        if (array_key_exists("SkipConditions",$param) and $param["SkipConditions"] !== null) {
            $this->SkipConditions = [];
            foreach ($param["SkipConditions"] as $key => $value){
                $obj = new SkipCondition();
                $obj->deserialize($value);
                array_push($this->SkipConditions, $obj);
            }
        }
    }
}
