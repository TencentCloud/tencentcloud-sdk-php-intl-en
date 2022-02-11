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
 * Producer information
 *
 * @method integer getProducerId() Obtain Producer ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProducerId(integer $ProducerId) Set Producer ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProducerName() Obtain Producer name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProducerName(string $ProducerName) Set Producer name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Producer address.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Producer address.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getClientVersion() Obtain Client version.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClientVersion(string $ClientVersion) Set Client version.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMsgRateIn() Obtain Message production rate (message/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMsgRateIn(float $MsgRateIn) Set Message production rate (message/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMsgThroughputIn() Obtain Message production throughput rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMsgThroughputIn(float $MsgThroughputIn) Set Message production throughput rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getAverageMsgSize() Obtain Average message size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAverageMsgSize(float $AverageMsgSize) Set Average message size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getConnectedSince() Obtain Connection time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setConnectedSince(string $ConnectedSince) Set Connection time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPartition() Obtain Serial number of the topic partition connected to the producer.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPartition(integer $Partition) Set Serial number of the topic partition connected to the producer.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class Publisher extends AbstractModel
{
    /**
     * @var integer Producer ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProducerId;

    /**
     * @var string Producer name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProducerName;

    /**
     * @var string Producer address.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string Client version.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClientVersion;

    /**
     * @var float Message production rate (message/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MsgRateIn;

    /**
     * @var float Message production throughput rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MsgThroughputIn;

    /**
     * @var float Average message size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AverageMsgSize;

    /**
     * @var string Connection time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ConnectedSince;

    /**
     * @var integer Serial number of the topic partition connected to the producer.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Partition;

    /**
     * @param integer $ProducerId Producer ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProducerName Producer name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Address Producer address.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClientVersion Client version.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $MsgRateIn Message production rate (message/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $MsgThroughputIn Message production throughput rate (byte/sec).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $AverageMsgSize Average message size in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ConnectedSince Connection time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Partition Serial number of the topic partition connected to the producer.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ProducerId",$param) and $param["ProducerId"] !== null) {
            $this->ProducerId = $param["ProducerId"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("MsgRateIn",$param) and $param["MsgRateIn"] !== null) {
            $this->MsgRateIn = $param["MsgRateIn"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }

        if (array_key_exists("AverageMsgSize",$param) and $param["AverageMsgSize"] !== null) {
            $this->AverageMsgSize = $param["AverageMsgSize"];
        }

        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
