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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk monitoring data of the instance
 *
 * @method array getIoRatioPerSec() Obtain Time percentage of IO operations per second
 * @method void setIoRatioPerSec(array $IoRatioPerSec) Set Time percentage of IO operations per second
 * @method array getIoWaitTime() Obtain Average wait time of device I/O operations * 100 in milliseconds. For example, if the value is 201, the average wait time of I/O operations is 201/100 = 2.1 milliseconds.
 * @method void setIoWaitTime(array $IoWaitTime) Set Average wait time of device I/O operations * 100 in milliseconds. For example, if the value is 201, the average wait time of I/O operations is 201/100 = 2.1 milliseconds.
 * @method array getRead() Obtain Average number of read operations completed by the disk per second * 100. For example, if the value is 2,002, the average number of read operations completed by the disk per second is 2,002/100=20.2.
 * @method void setRead(array $Read) Set Average number of read operations completed by the disk per second * 100. For example, if the value is 2,002, the average number of read operations completed by the disk per second is 2,002/100=20.2.
 * @method array getWrite() Obtain Average number of write operations completed by the disk per second * 100. For example, if the value is 30,001, the average number of write operations completed by the disk per second is 30,001/100=300.01.
 * @method void setWrite(array $Write) Set Average number of write operations completed by the disk per second * 100. For example, if the value is 30,001, the average number of write operations completed by the disk per second is 30,001/100=300.01.
 * @method array getCapacityRatio() Obtain Disk capacity. Each value is comprised of two data, with the first data representing the used capacity and the second one representing the total disk capacity.
 * @method void setCapacityRatio(array $CapacityRatio) Set Disk capacity. Each value is comprised of two data, with the first data representing the used capacity and the second one representing the total disk capacity.
 */
class DeviceDiskInfo extends AbstractModel
{
    /**
     * @var array Time percentage of IO operations per second
     */
    public $IoRatioPerSec;

    /**
     * @var array Average wait time of device I/O operations * 100 in milliseconds. For example, if the value is 201, the average wait time of I/O operations is 201/100 = 2.1 milliseconds.
     */
    public $IoWaitTime;

    /**
     * @var array Average number of read operations completed by the disk per second * 100. For example, if the value is 2,002, the average number of read operations completed by the disk per second is 2,002/100=20.2.
     */
    public $Read;

    /**
     * @var array Average number of write operations completed by the disk per second * 100. For example, if the value is 30,001, the average number of write operations completed by the disk per second is 30,001/100=300.01.
     */
    public $Write;

    /**
     * @var array Disk capacity. Each value is comprised of two data, with the first data representing the used capacity and the second one representing the total disk capacity.
     */
    public $CapacityRatio;

    /**
     * @param array $IoRatioPerSec Time percentage of IO operations per second
     * @param array $IoWaitTime Average wait time of device I/O operations * 100 in milliseconds. For example, if the value is 201, the average wait time of I/O operations is 201/100 = 2.1 milliseconds.
     * @param array $Read Average number of read operations completed by the disk per second * 100. For example, if the value is 2,002, the average number of read operations completed by the disk per second is 2,002/100=20.2.
     * @param array $Write Average number of write operations completed by the disk per second * 100. For example, if the value is 30,001, the average number of write operations completed by the disk per second is 30,001/100=300.01.
     * @param array $CapacityRatio Disk capacity. Each value is comprised of two data, with the first data representing the used capacity and the second one representing the total disk capacity.
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
        if (array_key_exists("IoRatioPerSec",$param) and $param["IoRatioPerSec"] !== null) {
            $this->IoRatioPerSec = $param["IoRatioPerSec"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("Read",$param) and $param["Read"] !== null) {
            $this->Read = $param["Read"];
        }

        if (array_key_exists("Write",$param) and $param["Write"] !== null) {
            $this->Write = $param["Write"];
        }

        if (array_key_exists("CapacityRatio",$param) and $param["CapacityRatio"] !== null) {
            $this->CapacityRatio = $param["CapacityRatio"];
        }
    }
}
