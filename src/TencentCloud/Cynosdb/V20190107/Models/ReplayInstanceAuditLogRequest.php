<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplayInstanceAuditLog request structure.
 *
 * @method string getSourceClusterId() Obtain Source cluster id.
 * @method void setSourceClusterId(string $SourceClusterId) Set Source cluster id.
 * @method string getSourceInstanceId() Obtain Source instance id.
 * @method void setSourceInstanceId(string $SourceInstanceId) Set Source instance id.
 * @method string getTargetClusterId() Obtain Target cluster id.
Specifies the target cluster must be a cluster cloned from the original cluster within three days.
 * @method void setTargetClusterId(string $TargetClusterId) Set Target cluster id.
Specifies the target cluster must be a cluster cloned from the original cluster within three days.
 * @method string getTargetInstanceId() Obtain Target instance id.
 * @method void setTargetInstanceId(string $TargetInstanceId) Set Target instance id.
 * @method string getTargetUserName() Obtain Username. host must be % username.
 * @method void setTargetUserName(string $TargetUserName) Set Username. host must be % username.
 * @method string getTargetPassword() Obtain Password.
 * @method void setTargetPassword(string $TargetPassword) Set Password.
 * @method string getStartTime() Obtain Start time. time format: yyyy-DD-mm hh:mm:ss.
 * @method void setStartTime(string $StartTime) Set Start time. time format: yyyy-DD-mm hh:mm:ss.
 * @method string getEndTime() Obtain Specifies the end time in the time format yyyy-DD-mm hh:mm:ss.
 * @method void setEndTime(string $EndTime) Set Specifies the end time in the time format yyyy-DD-mm hh:mm:ss.
 */
class ReplayInstanceAuditLogRequest extends AbstractModel
{
    /**
     * @var string Source cluster id.
     */
    public $SourceClusterId;

    /**
     * @var string Source instance id.
     */
    public $SourceInstanceId;

    /**
     * @var string Target cluster id.
Specifies the target cluster must be a cluster cloned from the original cluster within three days.
     */
    public $TargetClusterId;

    /**
     * @var string Target instance id.
     */
    public $TargetInstanceId;

    /**
     * @var string Username. host must be % username.
     */
    public $TargetUserName;

    /**
     * @var string Password.
     */
    public $TargetPassword;

    /**
     * @var string Start time. time format: yyyy-DD-mm hh:mm:ss.
     */
    public $StartTime;

    /**
     * @var string Specifies the end time in the time format yyyy-DD-mm hh:mm:ss.
     */
    public $EndTime;

    /**
     * @param string $SourceClusterId Source cluster id.
     * @param string $SourceInstanceId Source instance id.
     * @param string $TargetClusterId Target cluster id.
Specifies the target cluster must be a cluster cloned from the original cluster within three days.
     * @param string $TargetInstanceId Target instance id.
     * @param string $TargetUserName Username. host must be % username.
     * @param string $TargetPassword Password.
     * @param string $StartTime Start time. time format: yyyy-DD-mm hh:mm:ss.
     * @param string $EndTime Specifies the end time in the time format yyyy-DD-mm hh:mm:ss.
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
        if (array_key_exists("SourceClusterId",$param) and $param["SourceClusterId"] !== null) {
            $this->SourceClusterId = $param["SourceClusterId"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("TargetClusterId",$param) and $param["TargetClusterId"] !== null) {
            $this->TargetClusterId = $param["TargetClusterId"];
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("TargetUserName",$param) and $param["TargetUserName"] !== null) {
            $this->TargetUserName = $param["TargetUserName"];
        }

        if (array_key_exists("TargetPassword",$param) and $param["TargetPassword"] !== null) {
            $this->TargetPassword = $param["TargetPassword"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
