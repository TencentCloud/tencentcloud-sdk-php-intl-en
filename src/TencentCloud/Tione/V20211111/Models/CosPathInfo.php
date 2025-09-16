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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS path information.
 *
 * @method string getBucket() Obtain Bucket.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucket(string $Bucket) Set Bucket.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPaths() Obtain Path list. Only one path is supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPaths(array $Paths) Set Path list. Only one path is supported.Note: This field may return null, indicating that no valid values can be obtained.
 */
class CosPathInfo extends AbstractModel
{
    /**
     * @var string Bucket.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bucket;

    /**
     * @var string Region.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var array Path list. Only one path is supported.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paths;

    /**
     * @param string $Bucket Bucket.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Paths Path list. Only one path is supported.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }
    }
}
