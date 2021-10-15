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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Synchronization log
 *
 * @method string getResourceType() Obtain Resource type
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSource() Obtain Path of the source resource
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSource(string $Source) Set Path of the source resource
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDestination() Obtain Path of the destination resource
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDestination(string $Destination) Set Path of the destination resource
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Synchronization status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Synchronization status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ReplicationLog extends AbstractModel
{
    /**
     * @var string Resource type
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Path of the source resource
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Source;

    /**
     * @var string Path of the destination resource
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Destination;

    /**
     * @var string Synchronization status
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Start time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string End time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @param string $ResourceType Resource type
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Source Path of the source resource
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Destination Path of the destination resource
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Status Synchronization status
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $StartTime Start time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $EndTime End time
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
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
    }
}
