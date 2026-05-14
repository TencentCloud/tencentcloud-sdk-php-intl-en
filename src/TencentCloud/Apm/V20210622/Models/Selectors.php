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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Selection status of the topology view.
 *
 * @method array getComponent() Obtain Selection status of the component.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponent(array $Component) Set Selection status of the component.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Selectors extends AbstractModel
{
    /**
     * @var array Selection status of the component.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Component;

    /**
     * @param array $Component Selection status of the component.
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
        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }
    }
}
