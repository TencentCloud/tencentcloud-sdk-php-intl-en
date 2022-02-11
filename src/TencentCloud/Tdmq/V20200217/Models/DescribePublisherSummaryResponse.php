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
 * DescribePublisherSummary response structure.
 *
 * @method float getMsgRateIn() Obtain Production rate (messages/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMsgRateIn(float $MsgRateIn) Set Production rate (messages/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMsgThroughputIn() Obtain Production rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMsgThroughputIn(float $MsgThroughputIn) Set Production rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPublisherCount() Obtain The number of producers.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublisherCount(integer $PublisherCount) Set The number of producers.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStorageSize() Obtain Message storage size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Message storage size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePublisherSummaryResponse extends AbstractModel
{
    /**
     * @var float Production rate (messages/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MsgRateIn;

    /**
     * @var float Production rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MsgThroughputIn;

    /**
     * @var integer The number of producers.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublisherCount;

    /**
     * @var integer Message storage size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StorageSize;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $MsgRateIn Production rate (messages/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $MsgThroughputIn Production rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $PublisherCount The number of producers.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StorageSize Message storage size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("MsgRateIn",$param) and $param["MsgRateIn"] !== null) {
            $this->MsgRateIn = $param["MsgRateIn"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }

        if (array_key_exists("PublisherCount",$param) and $param["PublisherCount"] !== null) {
            $this->PublisherCount = $param["PublisherCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
