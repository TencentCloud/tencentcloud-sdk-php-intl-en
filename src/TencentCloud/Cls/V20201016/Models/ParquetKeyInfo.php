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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `Parquet` content description
 *
 * @method string getKeyName() Obtain Key name
 * @method void setKeyName(string $KeyName) Set Key name
 * @method string getKeyType() Obtain Supported data types: string, boolean, int32, int64, float, and double
 * @method void setKeyType(string $KeyType) Set Supported data types: string, boolean, int32, int64, float, and double
 * @method string getKeyNonExistingField() Obtain Assignment information returned upon resolution failure
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setKeyNonExistingField(string $KeyNonExistingField) Set Assignment information returned upon resolution failure
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ParquetKeyInfo extends AbstractModel
{
    /**
     * @var string Key name
     */
    public $KeyName;

    /**
     * @var string Supported data types: string, boolean, int32, int64, float, and double
     */
    public $KeyType;

    /**
     * @var string Assignment information returned upon resolution failure
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $KeyNonExistingField;

    /**
     * @param string $KeyName Key name
     * @param string $KeyType Supported data types: string, boolean, int32, int64, float, and double
     * @param string $KeyNonExistingField Assignment information returned upon resolution failure
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyNonExistingField",$param) and $param["KeyNonExistingField"] !== null) {
            $this->KeyNonExistingField = $param["KeyNonExistingField"];
        }
    }
}
