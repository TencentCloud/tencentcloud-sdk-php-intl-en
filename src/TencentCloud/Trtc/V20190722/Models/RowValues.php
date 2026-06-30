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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Two-dimensional array of SeriesInfo type
 *
 * @method array getRowValue() Obtain Data value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowValue(array $RowValue) Set Data value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRowValueFloat() Obtain Data value.
 * @method void setRowValueFloat(array $RowValueFloat) Set Data value.
 */
class RowValues extends AbstractModel
{
    /**
     * @var array Data value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowValue;

    /**
     * @var array Data value.
     */
    public $RowValueFloat;

    /**
     * @param array $RowValue Data value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RowValueFloat Data value.
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
        if (array_key_exists("RowValue",$param) and $param["RowValue"] !== null) {
            $this->RowValue = $param["RowValue"];
        }

        if (array_key_exists("RowValueFloat",$param) and $param["RowValueFloat"] !== null) {
            $this->RowValueFloat = $param["RowValueFloat"];
        }
    }
}
