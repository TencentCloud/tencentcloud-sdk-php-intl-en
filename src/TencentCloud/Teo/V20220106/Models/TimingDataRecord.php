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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time series data of L7 data analysis
 *
 * @method string getTypeKey() Obtain Query dimension value
 * @method void setTypeKey(string $TypeKey) Set Query dimension value
 * @method array getTypeValue() Obtain Detailed time series data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTypeValue(array $TypeValue) Set Detailed time series data
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TimingDataRecord extends AbstractModel
{
    /**
     * @var string Query dimension value
     */
    public $TypeKey;

    /**
     * @var array Detailed time series data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TypeValue;

    /**
     * @param string $TypeKey Query dimension value
     * @param array $TypeValue Detailed time series data
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
        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }

        if (array_key_exists("TypeValue",$param) and $param["TypeValue"] !== null) {
            $this->TypeValue = [];
            foreach ($param["TypeValue"] as $key => $value){
                $obj = new TimingTypeValue();
                $obj->deserialize($value);
                array_push($this->TypeValue, $obj);
            }
        }
    }
}
