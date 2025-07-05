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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nested rule settings
 *
 * @method array getConditions() Obtain The condition that determines if a feature should run.
Note: If any condition in the array is met, the feature will run.
 * @method void setConditions(array $Conditions) Set The condition that determines if a feature should run.
Note: If any condition in the array is met, the feature will run.
 * @method array getActions() Obtain The feature to be executed.
 * @method void setActions(array $Actions) Set The feature to be executed.
 */
class SubRule extends AbstractModel
{
    /**
     * @var array The condition that determines if a feature should run.
Note: If any condition in the array is met, the feature will run.
     */
    public $Conditions;

    /**
     * @var array The feature to be executed.
     */
    public $Actions;

    /**
     * @param array $Conditions The condition that determines if a feature should run.
Note: If any condition in the array is met, the feature will run.
     * @param array $Actions The feature to be executed.
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleAndConditions();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new Action();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }
    }
}
