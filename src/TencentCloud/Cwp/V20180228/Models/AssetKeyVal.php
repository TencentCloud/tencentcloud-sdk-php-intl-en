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
 * Generic data structure of Key-val type
 *
 * @method string getKey() Obtain Tag
 * @method void setKey(string $Key) Set Tag
 * @method integer getValue() Obtain Quantity
 * @method void setValue(integer $Value) Set Quantity
 * @method string getDesc() Obtain Description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNewCount() Obtain Number of additions today
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewCount(integer $NewCount) Set Number of additions today
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetKeyVal extends AbstractModel
{
    /**
     * @var string Tag
     */
    public $Key;

    /**
     * @var integer Quantity
     */
    public $Value;

    /**
     * @var string Description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var integer Number of additions today
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewCount;

    /**
     * @param string $Key Tag
     * @param integer $Value Quantity
     * @param string $Desc Description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NewCount Number of additions today
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("NewCount",$param) and $param["NewCount"] !== null) {
            $this->NewCount = $param["NewCount"];
        }
    }
}
