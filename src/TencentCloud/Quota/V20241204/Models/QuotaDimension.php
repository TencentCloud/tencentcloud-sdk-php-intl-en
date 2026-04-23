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
namespace TencentCloud\Quota\V20241204\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quota dimension
 *
 * @method string getDimensionName() Obtain Quota dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDimensionName(string $DimensionName) Set Quota dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrimaryValue() Obtain Dimension value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrimaryValue(string $PrimaryValue) Set Dimension value
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QuotaDimension extends AbstractModel
{
    /**
     * @var string Quota dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DimensionName;

    /**
     * @var string Dimension value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrimaryValue;

    /**
     * @param string $DimensionName Quota dimension
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrimaryValue Dimension value
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
        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }

        if (array_key_exists("PrimaryValue",$param) and $param["PrimaryValue"] !== null) {
            $this->PrimaryValue = $param["PrimaryValue"];
        }
    }
}
