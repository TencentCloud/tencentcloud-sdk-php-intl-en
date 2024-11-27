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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time-stamped detailed data
 *
 * @method array getTimestamps() Obtain Timestamp 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setTimestamps(array $Timestamps) Set Timestamp 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method array getValues() Obtain Corresponding value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setValues(array $Values) Set Corresponding value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 */
class DetailData extends AbstractModel
{
    /**
     * @var array Timestamp 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Timestamps;

    /**
     * @var array Corresponding value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Values;

    /**
     * @param array $Timestamps Timestamp 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param array $Values Corresponding value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
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
        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
