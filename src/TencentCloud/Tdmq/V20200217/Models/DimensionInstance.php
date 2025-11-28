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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Array of instance dimension combinations
 *
 * @method array getDimensions() Obtain Dimension Combination of Instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDimensions(array $Dimensions) Set Dimension Combination of Instance
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DimensionInstance extends AbstractModel
{
    /**
     * @var array Dimension Combination of Instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Dimensions;

    /**
     * @param array $Dimensions Dimension Combination of Instance
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
        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DimensionOpt();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
