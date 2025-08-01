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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessRules request structure.
 *
 * @method array getAccessRules() Obtain Multiple permission rules (up to 10)
 * @method void setAccessRules(array $AccessRules) Set Multiple permission rules (up to 10)
 */
class ModifyAccessRulesRequest extends AbstractModel
{
    /**
     * @var array Multiple permission rules (up to 10)
     */
    public $AccessRules;

    /**
     * @param array $AccessRules Multiple permission rules (up to 10)
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
        if (array_key_exists("AccessRules",$param) and $param["AccessRules"] !== null) {
            $this->AccessRules = [];
            foreach ($param["AccessRules"] as $key => $value){
                $obj = new AccessRule();
                $obj->deserialize($value);
                array_push($this->AccessRules, $obj);
            }
        }
    }
}
