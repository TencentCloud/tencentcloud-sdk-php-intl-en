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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Session information.
 *
 * @method string getSessionId() Obtain Session id.
 * @method void setSessionId(string $SessionId) Set Session id.
 * @method string getRemoteDeviceId() Obtain Remote device id.
 * @method void setRemoteDeviceId(string $RemoteDeviceId) Set Remote device id.
 * @method string getFieldDeviceId() Obtain On-Site device id.
 * @method void setFieldDeviceId(string $FieldDeviceId) Set On-Site device id.
 * @method string getResolution() Obtain Target resolution.
 * @method void setResolution(string $Resolution) Set Target resolution.
 * @method integer getStartTime() Obtain Session start time.
 * @method void setStartTime(integer $StartTime) Set Session start time.
 * @method integer getEndTime() Obtain Session end time.
 * @method void setEndTime(integer $EndTime) Set Session end time.
 * @method string getQuality() Obtain Call quality: good|normal|bad.
 * @method void setQuality(string $Quality) Set Call quality: good|normal|bad.
 */
class SessionInfo extends AbstractModel
{
    /**
     * @var string Session id.
     */
    public $SessionId;

    /**
     * @var string Remote device id.
     */
    public $RemoteDeviceId;

    /**
     * @var string On-Site device id.
     */
    public $FieldDeviceId;

    /**
     * @var string Target resolution.
     */
    public $Resolution;

    /**
     * @var integer Session start time.
     */
    public $StartTime;

    /**
     * @var integer Session end time.
     */
    public $EndTime;

    /**
     * @var string Call quality: good|normal|bad.
     */
    public $Quality;

    /**
     * @param string $SessionId Session id.
     * @param string $RemoteDeviceId Remote device id.
     * @param string $FieldDeviceId On-Site device id.
     * @param string $Resolution Target resolution.
     * @param integer $StartTime Session start time.
     * @param integer $EndTime Session end time.
     * @param string $Quality Call quality: good|normal|bad.
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RemoteDeviceId",$param) and $param["RemoteDeviceId"] !== null) {
            $this->RemoteDeviceId = $param["RemoteDeviceId"];
        }

        if (array_key_exists("FieldDeviceId",$param) and $param["FieldDeviceId"] !== null) {
            $this->FieldDeviceId = $param["FieldDeviceId"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }
    }
}
