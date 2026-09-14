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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AWS S3 output location
 *
 * @method string getS3Bucket() Obtain S3 bucket。
 * @method void setS3Bucket(string $S3Bucket) Set S3 bucket。
 * @method string getS3Region() Obtain 
 * @method void setS3Region(string $S3Region) Set 
 * @method string getS3SecretId() Obtain 
 * @method void setS3SecretId(string $S3SecretId) Set 
 * @method string getS3SecretKey() Obtain 
 * @method void setS3SecretKey(string $S3SecretKey) Set 
 */
class S3OutputStorage extends AbstractModel
{
    /**
     * @var string S3 bucket。
     */
    public $S3Bucket;

    /**
     * @var string 
     */
    public $S3Region;

    /**
     * @var string 
     */
    public $S3SecretId;

    /**
     * @var string 
     */
    public $S3SecretKey;

    /**
     * @param string $S3Bucket S3 bucket。
     * @param string $S3Region 
     * @param string $S3SecretId 
     * @param string $S3SecretKey 
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
        if (array_key_exists("S3Bucket",$param) and $param["S3Bucket"] !== null) {
            $this->S3Bucket = $param["S3Bucket"];
        }

        if (array_key_exists("S3Region",$param) and $param["S3Region"] !== null) {
            $this->S3Region = $param["S3Region"];
        }

        if (array_key_exists("S3SecretId",$param) and $param["S3SecretId"] !== null) {
            $this->S3SecretId = $param["S3SecretId"];
        }

        if (array_key_exists("S3SecretKey",$param) and $param["S3SecretKey"] !== null) {
            $this->S3SecretKey = $param["S3SecretKey"];
        }
    }
}
