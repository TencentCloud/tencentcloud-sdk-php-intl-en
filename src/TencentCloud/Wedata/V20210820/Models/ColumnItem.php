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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ColumnItem
 *
 * @method string getColumnName() Obtain ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnName(string $ColumnName) Set ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnRef() Obtain ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnRef(string $ColumnRef) Set ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ColumnItem extends AbstractModel
{
    /**
     * @var string ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnName;

    /**
     * @var string ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnRef;

    /**
     * @param string $ColumnName ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnRef ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("ColumnRef",$param) and $param["ColumnRef"] !== null) {
            $this->ColumnRef = $param["ColumnRef"];
        }
    }
}
