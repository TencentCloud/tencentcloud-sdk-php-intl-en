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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScreenshotTask request structure.
 *
 * @method string getStreamName() Obtain The stream name.
 * @method void setStreamName(string $StreamName) Set The stream name.
 * @method string getDomainName() Obtain The push domain.
 * @method void setDomainName(string $DomainName) Set The push domain.
 * @method string getAppName() Obtain The push path.
 * @method void setAppName(string $AppName) Set The push path.
 * @method integer getEndTime() Obtain The task end time, which must be a Unix timestamp and later than `StartTime` and the current time. The end time and start time cannot be more than 24 hours apart.
 * @method void setEndTime(integer $EndTime) Set The task end time, which must be a Unix timestamp and later than `StartTime` and the current time. The end time and start time cannot be more than 24 hours apart.
 * @method integer getTemplateId() Obtain The ID of the screencapturing template, which is returned by `CreateLiveSnapshotTemplate`. If an incorrect template ID is passed in, the screencapturing task will fail.
 * @method void setTemplateId(integer $TemplateId) Set The ID of the screencapturing template, which is returned by `CreateLiveSnapshotTemplate`. If an incorrect template ID is passed in, the screencapturing task will fail.
 * @method integer getStartTime() Obtain The task start time, which must be a Unix timestamp and cannot be later than six days from the current time. If you do not specify this parameter, the task will start immediately.
 * @method void setStartTime(integer $StartTime) Set The task start time, which must be a Unix timestamp and cannot be later than six days from the current time. If you do not specify this parameter, the task will start immediately.
 * @method integer getStreamType() Obtain The publishing type. Valid values:
`0` (default): Live stream
`1`: Mixed stream
 * @method void setStreamType(integer $StreamType) Set The publishing type. Valid values:
`0` (default): Live stream
`1`: Mixed stream
 * @method string getExtension() Obtain An extension field, which is not defined currently and is empty by default.
 * @method void setExtension(string $Extension) Set An extension field, which is not defined currently and is empty by default.
 */
class CreateScreenshotTaskRequest extends AbstractModel
{
    /**
     * @var string The stream name.
     */
    public $StreamName;

    /**
     * @var string The push domain.
     */
    public $DomainName;

    /**
     * @var string The push path.
     */
    public $AppName;

    /**
     * @var integer The task end time, which must be a Unix timestamp and later than `StartTime` and the current time. The end time and start time cannot be more than 24 hours apart.
     */
    public $EndTime;

    /**
     * @var integer The ID of the screencapturing template, which is returned by `CreateLiveSnapshotTemplate`. If an incorrect template ID is passed in, the screencapturing task will fail.
     */
    public $TemplateId;

    /**
     * @var integer The task start time, which must be a Unix timestamp and cannot be later than six days from the current time. If you do not specify this parameter, the task will start immediately.
     */
    public $StartTime;

    /**
     * @var integer The publishing type. Valid values:
`0` (default): Live stream
`1`: Mixed stream
     */
    public $StreamType;

    /**
     * @var string An extension field, which is not defined currently and is empty by default.
     */
    public $Extension;

    /**
     * @param string $StreamName The stream name.
     * @param string $DomainName The push domain.
     * @param string $AppName The push path.
     * @param integer $EndTime The task end time, which must be a Unix timestamp and later than `StartTime` and the current time. The end time and start time cannot be more than 24 hours apart.
     * @param integer $TemplateId The ID of the screencapturing template, which is returned by `CreateLiveSnapshotTemplate`. If an incorrect template ID is passed in, the screencapturing task will fail.
     * @param integer $StartTime The task start time, which must be a Unix timestamp and cannot be later than six days from the current time. If you do not specify this parameter, the task will start immediately.
     * @param integer $StreamType The publishing type. Valid values:
`0` (default): Live stream
`1`: Mixed stream
     * @param string $Extension An extension field, which is not defined currently and is empty by default.
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
