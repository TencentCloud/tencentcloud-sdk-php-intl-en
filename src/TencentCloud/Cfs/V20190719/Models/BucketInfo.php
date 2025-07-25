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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bucket information
 *
 * @method string getName() Obtain Bucket name
 * @method void setName(string $Name) Set Bucket name
 * @method string getRegion() Obtain Bucket region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Bucket region
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BucketInfo extends AbstractModel
{
    /**
     * @var string Bucket name
     */
    public $Name;

    /**
     * @var string Bucket region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @param string $Name Bucket name
     * @param string $Region Bucket region
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
