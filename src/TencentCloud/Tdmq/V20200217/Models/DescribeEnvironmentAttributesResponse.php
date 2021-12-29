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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvironmentAttributes response structure.
 *
 * @method integer getMsgTTL() Obtain TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days).
 * @method void setMsgTTL(integer $MsgTTL) Set TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days).
 * @method integer getRateInByte() Obtain Consumption rate limit in bytes/second. 0: unlimited.
 * @method void setRateInByte(integer $RateInByte) Set Consumption rate limit in bytes/second. 0: unlimited.
 * @method integer getRateInSize() Obtain Consumption rate limit in messages/second. 0: unlimited.
 * @method void setRateInSize(integer $RateInSize) Set Consumption rate limit in messages/second. 0: unlimited.
 * @method integer getRetentionHours() Obtain Retention policy for consumed messages in hours. 0: deleted immediately after consumption.
 * @method void setRetentionHours(integer $RetentionHours) Set Retention policy for consumed messages in hours. 0: deleted immediately after consumption.
 * @method integer getRetentionSize() Obtain Retention policy for consumed messages in GB. 0: deleted immediately after consumption.
 * @method void setRetentionSize(integer $RetentionSize) Set Retention policy for consumed messages in GB. 0: deleted immediately after consumption.
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method integer getReplicas() Obtain Number of replicas.
 * @method void setReplicas(integer $Replicas) Set Number of replicas.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEnvironmentAttributesResponse extends AbstractModel
{
    /**
     * @var integer TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days).
     */
    public $MsgTTL;

    /**
     * @var integer Consumption rate limit in bytes/second. 0: unlimited.
     */
    public $RateInByte;

    /**
     * @var integer Consumption rate limit in messages/second. 0: unlimited.
     */
    public $RateInSize;

    /**
     * @var integer Retention policy for consumed messages in hours. 0: deleted immediately after consumption.
     */
    public $RetentionHours;

    /**
     * @var integer Retention policy for consumed messages in GB. 0: deleted immediately after consumption.
     */
    public $RetentionSize;

    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var integer Number of replicas.
     */
    public $Replicas;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $MsgTTL TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days).
     * @param integer $RateInByte Consumption rate limit in bytes/second. 0: unlimited.
     * @param integer $RateInSize Consumption rate limit in messages/second. 0: unlimited.
     * @param integer $RetentionHours Retention policy for consumed messages in hours. 0: deleted immediately after consumption.
     * @param integer $RetentionSize Retention policy for consumed messages in GB. 0: deleted immediately after consumption.
     * @param string $EnvironmentId Environment (namespace) name.
     * @param integer $Replicas Number of replicas.
     * @param string $Remark Remarks.
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
        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("RateInByte",$param) and $param["RateInByte"] !== null) {
            $this->RateInByte = $param["RateInByte"];
        }

        if (array_key_exists("RateInSize",$param) and $param["RateInSize"] !== null) {
            $this->RateInSize = $param["RateInSize"];
        }

        if (array_key_exists("RetentionHours",$param) and $param["RetentionHours"] !== null) {
            $this->RetentionHours = $param["RetentionHours"];
        }

        if (array_key_exists("RetentionSize",$param) and $param["RetentionSize"] !== null) {
            $this->RetentionSize = $param["RetentionSize"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
