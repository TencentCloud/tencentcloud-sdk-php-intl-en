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
 * Exceptional user experience and possible causes
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method integer getExperienceId() Obtain Exceptional experience ID
 * @method void setExperienceId(integer $ExperienceId) Set Exceptional experience ID
 * @method string getRoomId() Obtain Room ID in string type
 * @method void setRoomId(string $RoomId) Set Room ID in string type
 * @method array getAbnormalEventList() Obtain Exception event array
 * @method void setAbnormalEventList(array $AbnormalEventList) Set Exception event array
 * @method integer getEventTime() Obtain Report time of the exception event
 * @method void setEventTime(integer $EventTime) Set Report time of the exception event
 */
class AbnormalExperience extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var integer Exceptional experience ID
     */
    public $ExperienceId;

    /**
     * @var string Room ID in string type
     */
    public $RoomId;

    /**
     * @var array Exception event array
     */
    public $AbnormalEventList;

    /**
     * @var integer Report time of the exception event
     */
    public $EventTime;

    /**
     * @param string $UserId User ID
     * @param integer $ExperienceId Exceptional experience ID
     * @param string $RoomId Room ID in string type
     * @param array $AbnormalEventList Exception event array
     * @param integer $EventTime Report time of the exception event
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
