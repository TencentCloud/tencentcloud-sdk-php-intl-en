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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-value index configuration
 *
 * @method boolean getCaseSensitive() Obtain Whether case-sensitive
 * @method void setCaseSensitive(boolean $CaseSensitive) Set Whether case-sensitive
 * @method array getKeyValues() Obtain Information about the key-value pair to be indexed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyValues(array $KeyValues) Set Information about the key-value pair to be indexed
Note: This field may return null, indicating that no valid values can be obtained.
 */
class KeyValueInfo extends AbstractModel
{
    /**
     * @var boolean Whether case-sensitive
     */
    public $CaseSensitive;

    /**
     * @var array Information about the key-value pair to be indexed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyValues;

    /**
     * @param boolean $CaseSensitive Whether case-sensitive
     * @param array $KeyValues Information about the key-value pair to be indexed
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("KeyValues",$param) and $param["KeyValues"] !== null) {
            $this->KeyValues = [];
            foreach ($param["KeyValues"] as $key => $value){
                $obj = new KeyValueArrayInfo();
                $obj->deserialize($value);
                array_push($this->KeyValues, $obj);
            }
        }
    }
}
