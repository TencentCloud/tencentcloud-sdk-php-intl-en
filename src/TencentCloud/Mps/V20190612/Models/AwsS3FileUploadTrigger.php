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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * An AWS S3 file upload trigger.
 *
 * @method string getS3Bucket() Obtain The AWS S3 bucket bound to the scheme.
 * @method void setS3Bucket(string $S3Bucket) Set The AWS S3 bucket bound to the scheme.
 * @method string getS3Region() Obtain The region of the AWS S3 bucket.
 * @method void setS3Region(string $S3Region) Set The region of the AWS S3 bucket.
 * @method string getDir() Obtain The bucket directory bound. It must be an absolute path that starts and ends with `/`, such as `/movie/201907/`. If you do not specify this, the root directory will be bound.	
 * @method void setDir(string $Dir) Set The bucket directory bound. It must be an absolute path that starts and ends with `/`, such as `/movie/201907/`. If you do not specify this, the root directory will be bound.	
 * @method array getFormats() Obtain The file formats that will trigger the scheme, such as ["mp4", "flv", "mov"]. If you do not specify this, the upload of files in any format will trigger the scheme.	
 * @method void setFormats(array $Formats) Set The file formats that will trigger the scheme, such as ["mp4", "flv", "mov"]. If you do not specify this, the upload of files in any format will trigger the scheme.	
 * @method string getS3SecretId() Obtain The key ID of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setS3SecretId(string $S3SecretId) Set The key ID of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getS3SecretKey() Obtain The key of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setS3SecretKey(string $S3SecretKey) Set The key of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AwsSQS getAwsSQS() Obtain The SQS queue of the AWS S3 bucket.
Note: The queue must be in the same region as the bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAwsSQS(AwsSQS $AwsSQS) Set The SQS queue of the AWS S3 bucket.
Note: The queue must be in the same region as the bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AwsS3FileUploadTrigger extends AbstractModel
{
    /**
     * @var string The AWS S3 bucket bound to the scheme.
     */
    public $S3Bucket;

    /**
     * @var string The region of the AWS S3 bucket.
     */
    public $S3Region;

    /**
     * @var string The bucket directory bound. It must be an absolute path that starts and ends with `/`, such as `/movie/201907/`. If you do not specify this, the root directory will be bound.	
     */
    public $Dir;

    /**
     * @var array The file formats that will trigger the scheme, such as ["mp4", "flv", "mov"]. If you do not specify this, the upload of files in any format will trigger the scheme.	
     */
    public $Formats;

    /**
     * @var string The key ID of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $S3SecretId;

    /**
     * @var string The key of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $S3SecretKey;

    /**
     * @var AwsSQS The SQS queue of the AWS S3 bucket.
Note: The queue must be in the same region as the bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AwsSQS;

    /**
     * @param string $S3Bucket The AWS S3 bucket bound to the scheme.
     * @param string $S3Region The region of the AWS S3 bucket.
     * @param string $Dir The bucket directory bound. It must be an absolute path that starts and ends with `/`, such as `/movie/201907/`. If you do not specify this, the root directory will be bound.	
     * @param array $Formats The file formats that will trigger the scheme, such as ["mp4", "flv", "mov"]. If you do not specify this, the upload of files in any format will trigger the scheme.	
     * @param string $S3SecretId The key ID of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $S3SecretKey The key of the AWS S3 bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AwsSQS $AwsSQS The SQS queue of the AWS S3 bucket.
Note: The queue must be in the same region as the bucket.
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
        if (array_key_exists("S3Bucket",$param) and $param["S3Bucket"] !== null) {
            $this->S3Bucket = $param["S3Bucket"];
        }

        if (array_key_exists("S3Region",$param) and $param["S3Region"] !== null) {
            $this->S3Region = $param["S3Region"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }

        if (array_key_exists("S3SecretId",$param) and $param["S3SecretId"] !== null) {
            $this->S3SecretId = $param["S3SecretId"];
        }

        if (array_key_exists("S3SecretKey",$param) and $param["S3SecretKey"] !== null) {
            $this->S3SecretKey = $param["S3SecretKey"];
        }

        if (array_key_exists("AwsSQS",$param) and $param["AwsSQS"] !== null) {
            $this->AwsSQS = new AwsSQS();
            $this->AwsSQS->deserialize($param["AwsSQS"]);
        }
    }
}
