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
 * Aws SQS queue information
 *
 * @method string getSQSRegion() Obtain SQS queue area.
 * @method void setSQSRegion(string $SQSRegion) Set SQS queue area.
 * @method string getSQSQueueName() Obtain SQS queue name.
 * @method void setSQSQueueName(string $SQSQueueName) Set SQS queue name.
 * @method string getS3SecretId() Obtain id for read-write access to SQS.
 * @method void setS3SecretId(string $S3SecretId) Set id for read-write access to SQS.
 * @method string getS3SecretKey() Obtain key for read-write access to SQS.
 * @method void setS3SecretKey(string $S3SecretKey) Set key for read-write access to SQS.
 */
class AwsSQS extends AbstractModel
{
    /**
     * @var string SQS queue area.
     */
    public $SQSRegion;

    /**
     * @var string SQS queue name.
     */
    public $SQSQueueName;

    /**
     * @var string id for read-write access to SQS.
     */
    public $S3SecretId;

    /**
     * @var string key for read-write access to SQS.
     */
    public $S3SecretKey;

    /**
     * @param string $SQSRegion SQS queue area.
     * @param string $SQSQueueName SQS queue name.
     * @param string $S3SecretId id for read-write access to SQS.
     * @param string $S3SecretKey key for read-write access to SQS.
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
