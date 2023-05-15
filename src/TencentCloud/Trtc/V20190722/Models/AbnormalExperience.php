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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of an abnormal user experience and the possible causes.
 *
 * @method string getUserId() Obtain The user ID.
 * @method void setUserId(string $UserId) Set The user ID.
 * @method integer getExperienceId() Obtain The abnormal experience ID.
 * @method void setExperienceId(integer $ExperienceId) Set The abnormal experience ID.
 * @method string getRoomId() Obtain The room ID (string).
 * @method void setRoomId(string $RoomId) Set The room ID (string).
 * @method array getAbnormalEventList() Obtain The possible error events.
 * @method void setAbnormalEventList(array $AbnormalEventList) Set The possible error events.
 * @method integer getEventTime() Obtain The report time.
 * @method void setEventTime(integer $EventTime) Set The report time.
 */
class AbnormalExperience extends AbstractModel
{
    /**
     * @var string The user ID.
     */
    public $UserId;

    /**
     * @var integer The abnormal experience ID.
     */
    public $ExperienceId;

    /**
     * @var string The room ID (string).
     */
    public $RoomId;

    /**
     * @var array The possible error events.
     */
    public $AbnormalEventList;

    /**
     * @var integer The report time.
     */
    public $EventTime;

    /**
     * @param string $UserId The user ID.
     * @param integer $ExperienceId The abnormal experience ID.
     * @param string $RoomId The room ID (string).
     * @param array $AbnormalEventList The possible error events.
     * @param integer $EventTime The report time.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ExperienceId",$param) and $param["ExperienceId"] !== null) {
            $this->ExperienceId = $param["ExperienceId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("AbnormalEventList",$param) and $param["AbnormalEventList"] !== null) {
            $this->AbnormalEventList = [];
            foreach ($param["AbnormalEventList"] as $key => $value){
                $obj = new AbnormalEvent();
                $obj->deserialize($value);
                array_push($this->AbnormalEventList, $obj);
            }
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }
    }
}
