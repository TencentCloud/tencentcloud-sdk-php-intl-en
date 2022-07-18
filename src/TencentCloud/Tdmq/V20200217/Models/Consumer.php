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
 *  Consumer
 *
 * @method string getConnectedSince() Obtain The time when the consumer started connecting.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectedSince(string $ConnectedSince) Set The time when the consumer started connecting.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerAddr() Obtain Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerAddr(string $ConsumerAddr) Set Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerName() Obtain Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerName(string $ConsumerName) Set Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientVersion() Obtain Consumer version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientVersion(string $ClientVersion) Set Consumer version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPartition() Obtain Serial number of the topic partition connected to the consumer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartition(integer $Partition) Set Serial number of the topic partition connected to the consumer.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Consumer extends AbstractModel
{
    /**
     * @var string The time when the consumer started connecting.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectedSince;

    /**
     * @var string Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerAddr;

    /**
     * @var string Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerName;

    /**
     * @var string Consumer version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientVersion;

    /**
     * @var integer Serial number of the topic partition connected to the consumer.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Partition;

    /**
     * @param string $ConnectedSince The time when the consumer started connecting.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerAddr Consumer address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerName Consumer name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientVersion Consumer version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Partition Serial number of the topic partition connected to the consumer.
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
        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
