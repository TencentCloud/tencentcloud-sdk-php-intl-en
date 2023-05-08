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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of an extended event
 *
 * @method integer getId() Obtain ID
 * @method void setId(integer $Id) Set ID
 * @method string getFileName() Obtain File name of an extended event
 * @method void setFileName(string $FileName) Set File name of an extended event
 * @method integer getSize() Obtain File size of an extended event
 * @method void setSize(integer $Size) Set File size of an extended event
 * @method string getEventType() Obtain Event type. Valid values: `slow` (Slow SQL event), `blocked` (blocking event),  `deadlock` (deadlock event).
 * @method void setEventType(string $EventType) Set Event type. Valid values: `slow` (Slow SQL event), `blocked` (blocking event),  `deadlock` (deadlock event).
 * @method integer getStatus() Obtain Event record status. Valid values: `1` (succeeded), `2` (failed).
 * @method void setStatus(integer $Status) Set Event record status. Valid values: `1` (succeeded), `2` (failed).
 * @method string getStartTime() Obtain Generation start time of an extended file
 * @method void setStartTime(string $StartTime) Set Generation start time of an extended file
 * @method string getEndTime() Obtain Generation end time of an extended file
 * @method void setEndTime(string $EndTime) Set Generation end time of an extended file
 * @method string getInternalAddr() Obtain Download address on the private network
 * @method void setInternalAddr(string $InternalAddr) Set Download address on the private network
 * @method string getExternalAddr() Obtain Download address on the public network
 * @method void setExternalAddr(string $ExternalAddr) Set Download address on the public network
 */
class Events extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var string File name of an extended event
     */
    public $FileName;

    /**
     * @var integer File size of an extended event
     */
    public $Size;

    /**
     * @var string Event type. Valid values: `slow` (Slow SQL event), `blocked` (blocking event),  `deadlock` (deadlock event).
     */
    public $EventType;

    /**
     * @var integer Event record status. Valid values: `1` (succeeded), `2` (failed).
     */
    public $Status;

    /**
     * @var string Generation start time of an extended file
     */
    public $StartTime;

    /**
     * @var string Generation end time of an extended file
     */
    public $EndTime;

    /**
     * @var string Download address on the private network
     */
    public $InternalAddr;

    /**
     * @var string Download address on the public network
     */
    public $ExternalAddr;

    /**
     * @param integer $Id ID
     * @param string $FileName File name of an extended event
     * @param integer $Size File size of an extended event
     * @param string $EventType Event type. Valid values: `slow` (Slow SQL event), `blocked` (blocking event),  `deadlock` (deadlock event).
     * @param integer $Status Event record status. Valid values: `1` (succeeded), `2` (failed).
     * @param string $StartTime Generation start time of an extended file
     * @param string $EndTime Generation end time of an extended file
     * @param string $InternalAddr Download address on the private network
     * @param string $ExternalAddr Download address on the public network
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }
    }
}
