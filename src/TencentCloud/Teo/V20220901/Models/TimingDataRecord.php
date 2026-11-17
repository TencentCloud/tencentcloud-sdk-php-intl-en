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
 * Data information of time series
 *
 * @method string getTypeKey() Obtain Query the dimension value.
 * @method void setTypeKey(string $TypeKey) Set Query the dimension value.
 * @method array getTypeValue() Obtain Detailed time series data of the <code>Integer</code> type. If the value type of the query metric is <code>Integer</code>, the corresponding time series data will be returned in this field.<br> **Note**: If the value type of the query metric is unclear, data will be returned in this field by default.
 * @method void setTypeValue(array $TypeValue) Set Detailed time series data of the <code>Integer</code> type. If the value type of the query metric is <code>Integer</code>, the corresponding time series data will be returned in this field.<br> **Note**: If the value type of the query metric is unclear, data will be returned in this field by default.
 * @method array getFloatTypeValue() Obtain Detailed time series data of <code>Float</code> type. For metrics whose query metric value type is <code>Float</code>, the corresponding time series data is returned in this field.
 * @method void setFloatTypeValue(array $FloatTypeValue) Set Detailed time series data of <code>Float</code> type. For metrics whose query metric value type is <code>Float</code>, the corresponding time series data is returned in this field.
 */
class TimingDataRecord extends AbstractModel
{
    /**
     * @var string Query the dimension value.
     */
    public $TypeKey;

    /**
     * @var array Detailed time series data of the <code>Integer</code> type. If the value type of the query metric is <code>Integer</code>, the corresponding time series data will be returned in this field.<br> **Note**: If the value type of the query metric is unclear, data will be returned in this field by default.
     */
    public $TypeValue;

    /**
     * @var array Detailed time series data of <code>Float</code> type. For metrics whose query metric value type is <code>Float</code>, the corresponding time series data is returned in this field.
     */
    public $FloatTypeValue;

    /**
     * @param string $TypeKey Query the dimension value.
     * @param array $TypeValue Detailed time series data of the <code>Integer</code> type. If the value type of the query metric is <code>Integer</code>, the corresponding time series data will be returned in this field.<br> **Note**: If the value type of the query metric is unclear, data will be returned in this field by default.
     * @param array $FloatTypeValue Detailed time series data of <code>Float</code> type. For metrics whose query metric value type is <code>Float</code>, the corresponding time series data is returned in this field.
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

        if (array_key_exists("FloatTypeValue",$param) and $param["FloatTypeValue"] !== null) {
            $this->FloatTypeValue = [];
            foreach ($param["FloatTypeValue"] as $key => $value){
                $obj = new FloatTimingTypeValue();
                $obj->deserialize($value);
                array_push($this->FloatTypeValue, $obj);
            }
        }
    }
}
