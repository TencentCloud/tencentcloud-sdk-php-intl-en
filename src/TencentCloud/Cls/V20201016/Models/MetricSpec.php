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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * collection object
 *
 * @method array getCustomSpecs() Obtain Custom metric collection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomSpecs(array $CustomSpecs) Set Custom metric collection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MetricSpec extends AbstractModel
{
    /**
     * @var array Custom metric collection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomSpecs;

    /**
     * @param array $CustomSpecs Custom metric collection configuration item.
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
        if (array_key_exists("CustomSpecs",$param) and $param["CustomSpecs"] !== null) {
            $this->CustomSpecs = [];
            foreach ($param["CustomSpecs"] as $key => $value){
                $obj = new CustomMetricSpec();
                $obj->deserialize($value);
                array_push($this->CustomSpecs, $obj);
            }
        }
    }
}
