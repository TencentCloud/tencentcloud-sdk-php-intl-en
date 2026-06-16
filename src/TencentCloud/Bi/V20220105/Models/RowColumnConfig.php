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
 * Row/column permission configuration
 *
 * @method string getRulerInfo() Obtain Row column permission rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRulerInfo(string $RulerInfo) Set Row column permission rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagValueList() Obtain Tag value list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagValueList(array $TagValueList) Set Tag value list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RowColumnConfig extends AbstractModel
{
    /**
     * @var string Row column permission rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RulerInfo;

    /**
     * @var array Tag value list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagValueList;

    /**
     * @param string $RulerInfo Row column permission rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagValueList Tag value list
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
        if (array_key_exists("RulerInfo",$param) and $param["RulerInfo"] !== null) {
            $this->RulerInfo = $param["RulerInfo"];
        }

        if (array_key_exists("TagValueList",$param) and $param["TagValueList"] !== null) {
            $this->TagValueList = [];
            foreach ($param["TagValueList"] as $key => $value){
                $obj = new RowColumnTagValue();
                $obj->deserialize($value);
                array_push($this->TagValueList, $obj);
            }
        }
    }
}
