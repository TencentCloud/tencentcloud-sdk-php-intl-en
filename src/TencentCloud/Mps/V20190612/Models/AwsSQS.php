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
 * The information of an AWS SQS queue.
 *
 * @method string getSQSRegion() Obtain The region of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSQSRegion(string $SQSRegion) Set The region of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSQSQueueName() Obtain The name of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSQSQueueName(string $SQSQueueName) Set The name of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getS3SecretId() Obtain The key ID required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setS3SecretId(string $S3SecretId) Set The key ID required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getS3SecretKey() Obtain The key required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setS3SecretKey(string $S3SecretKey) Set The key required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AwsSQS extends AbstractModel
{
    /**
     * @var string The region of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SQSRegion;

    /**
     * @var string The name of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SQSQueueName;

    /**
     * @var string The key ID required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $S3SecretId;

    /**
     * @var string The key required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $S3SecretKey;

    /**
     * @param string $SQSRegion The region of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SQSQueueName The name of the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $S3SecretId The key ID required to read from/write to the SQS queue.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $S3SecretKey The key required to read from/write to the SQS queue.
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
        if (array_key_exists("SQSRegion",$param) and $param["SQSRegion"] !== null) {
            $this->SQSRegion = $param["SQSRegion"];
        }

        if (array_key_exists("SQSQueueName",$param) and $param["SQSQueueName"] !== null) {
            $this->SQSQueueName = $param["SQSQueueName"];
        }

        if (array_key_exists("S3SecretId",$param) and $param["S3SecretId"] !== null) {
            $this->S3SecretId = $param["S3SecretId"];
        }

        if (array_key_exists("S3SecretKey",$param) and $param["S3SecretKey"] !== null) {
            $this->S3SecretKey = $param["S3SecretKey"];
        }
    }
}
