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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateReflectSequence response structure.
 *
 * @method string getReflectSequenceUrl() Obtain The resource URL of the light sequence, which needs to be downloaded and passed through to the SDK to start the identity verification process.
 * @method void setReflectSequenceUrl(string $ReflectSequenceUrl) Set The resource URL of the light sequence, which needs to be downloaded and passed through to the SDK to start the identity verification process.
 * @method string getReflectSequenceMd5() Obtain The MD5 hash value of the light sequence, which is used to check whether the light sequence is altered.
 * @method void setReflectSequenceMd5(string $ReflectSequenceMd5) Set The MD5 hash value of the light sequence, which is used to check whether the light sequence is altered.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GenerateReflectSequenceResponse extends AbstractModel
{
    /**
     * @var string The resource URL of the light sequence, which needs to be downloaded and passed through to the SDK to start the identity verification process.
     */
    public $ReflectSequenceUrl;

    /**
     * @var string The MD5 hash value of the light sequence, which is used to check whether the light sequence is altered.
     */
    public $ReflectSequenceMd5;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ReflectSequenceUrl The resource URL of the light sequence, which needs to be downloaded and passed through to the SDK to start the identity verification process.
     * @param string $ReflectSequenceMd5 The MD5 hash value of the light sequence, which is used to check whether the light sequence is altered.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ReflectSequenceUrl",$param) and $param["ReflectSequenceUrl"] !== null) {
            $this->ReflectSequenceUrl = $param["ReflectSequenceUrl"];
        }

        if (array_key_exists("ReflectSequenceMd5",$param) and $param["ReflectSequenceMd5"] !== null) {
            $this->ReflectSequenceMd5 = $param["ReflectSequenceMd5"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
