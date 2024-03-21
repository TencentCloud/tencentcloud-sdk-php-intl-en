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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration information of real-time log delivery to an AWS S3 compatible bucket
 *
 * @method string getEndpoint() Obtain The URL without bucket name or path, for example: `https://storage.googleapis.com`, `https://s3.ap-northeast-2.amazonaws.com`, and `https://cos.ap-nanjing.myqcloud.com`.
 * @method void setEndpoint(string $Endpoint) Set The URL without bucket name or path, for example: `https://storage.googleapis.com`, `https://s3.ap-northeast-2.amazonaws.com`, and `https://cos.ap-nanjing.myqcloud.com`.
 * @method string getRegion() Obtain The region where the bucket is located, for example: `ap-northeast-2`.
 * @method void setRegion(string $Region) Set The region where the bucket is located, for example: `ap-northeast-2`.
 * @method string getBucket() Obtain The bucket name and log storage directory, for example: `your_bucket_name/EO-logs/`. If the directory does not exist in the bucket, it will be created automatically.
 * @method void setBucket(string $Bucket) Set The bucket name and log storage directory, for example: `your_bucket_name/EO-logs/`. If the directory does not exist in the bucket, it will be created automatically.
 * @method string getAccessId() Obtain The Access Key ID used to access the bucket.
 * @method void setAccessId(string $AccessId) Set The Access Key ID used to access the bucket.
 * @method string getAccessKey() Obtain The secret key used to access the bucket.
 * @method void setAccessKey(string $AccessKey) Set The secret key used to access the bucket.
 * @method string getCompressType() Obtain The data compress type. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
 * @method void setCompressType(string $CompressType) Set The data compress type. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
 */
class S3 extends AbstractModel
{
    /**
     * @var string The URL without bucket name or path, for example: `https://storage.googleapis.com`, `https://s3.ap-northeast-2.amazonaws.com`, and `https://cos.ap-nanjing.myqcloud.com`.
     */
    public $Endpoint;

    /**
     * @var string The region where the bucket is located, for example: `ap-northeast-2`.
     */
    public $Region;

    /**
     * @var string The bucket name and log storage directory, for example: `your_bucket_name/EO-logs/`. If the directory does not exist in the bucket, it will be created automatically.
     */
    public $Bucket;

    /**
     * @var string The Access Key ID used to access the bucket.
     */
    public $AccessId;

    /**
     * @var string The secret key used to access the bucket.
     */
    public $AccessKey;

    /**
     * @var string The data compress type. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
     */
    public $CompressType;

    /**
     * @param string $Endpoint The URL without bucket name or path, for example: `https://storage.googleapis.com`, `https://s3.ap-northeast-2.amazonaws.com`, and `https://cos.ap-nanjing.myqcloud.com`.
     * @param string $Region The region where the bucket is located, for example: `ap-northeast-2`.
     * @param string $Bucket The bucket name and log storage directory, for example: `your_bucket_name/EO-logs/`. If the directory does not exist in the bucket, it will be created automatically.
     * @param string $AccessId The Access Key ID used to access the bucket.
     * @param string $AccessKey The secret key used to access the bucket.
     * @param string $CompressType The data compress type. Valid values:<li>gzip: gzip compression.</li>If this field is not filled in, compression is disabled.
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
