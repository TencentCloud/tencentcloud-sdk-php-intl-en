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
 * Producer connection instance
 *
 * @method string getAddress() Obtain Producer address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Producer address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPartitions() Obtain Topic partition.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(integer $Partitions) Set Topic partition.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClientVersion() Obtain Producer version.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientVersion(string $ClientVersion) Set Producer version.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProducerName() Obtain Producer name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProducerName(string $ProducerName) Set Producer name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProducerId() Obtain Producer ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProducerId(string $ProducerId) Set Producer ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAverageMsgSize() Obtain Average message size in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAverageMsgSize(string $AverageMsgSize) Set Average message size in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMsgThroughputIn() Obtain Production rate in bytes/sec.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgThroughputIn(string $MsgThroughputIn) Set Production rate in bytes/sec.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Connection extends AbstractModel
{
    /**
     * @var string Producer address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var integer Topic partition.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @var string Producer version.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientVersion;

    /**
     * @var string Producer name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProducerName;

    /**
     * @var string Producer ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProducerId;

    /**
     * @var string Average message size in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AverageMsgSize;

    /**
     * @var string Production rate in bytes/sec.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgThroughputIn;

    /**
     * @param string $Address Producer address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Partitions Topic partition.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClientVersion Producer version.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProducerName Producer name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProducerId Producer ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AverageMsgSize Average message size in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MsgThroughputIn Production rate in bytes/sec.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("ProducerId",$param) and $param["ProducerId"] !== null) {
            $this->ProducerId = $param["ProducerId"];
        }

        if (array_key_exists("AverageMsgSize",$param) and $param["AverageMsgSize"] !== null) {
            $this->AverageMsgSize = $param["AverageMsgSize"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }
    }
}
