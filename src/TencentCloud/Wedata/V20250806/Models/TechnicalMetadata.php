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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TechnicalMetadata
 *
 * @method string getOwner() Obtain Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwner(string $Owner) Set Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Data table location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Data table location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageSize() Obtain Storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Storage size
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TechnicalMetadata extends AbstractModel
{
    /**
     * @var string Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Owner;

    /**
     * @var string Data table location.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var integer Storage size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageSize;

    /**
     * @param string $Owner Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Data table location.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageSize Storage size
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }
    }
}
