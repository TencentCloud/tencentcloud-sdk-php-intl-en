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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customized query
 *
 * @method string getModuleGroup() Obtain Module group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModuleGroup(string $ModuleGroup) Set Module group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getComponents() Obtain Content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponents(array $Components) Set Content.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProjectConfigList extends AbstractModel
{
    /**
     * @var string Module group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModuleGroup;

    /**
     * @var array Content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Components;

    /**
     * @param string $ModuleGroup Module group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Components Content.
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
        if (array_key_exists("ModuleGroup",$param) and $param["ModuleGroup"] !== null) {
            $this->ModuleGroup = $param["ModuleGroup"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new ProjectConfigResult();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }
    }
}
