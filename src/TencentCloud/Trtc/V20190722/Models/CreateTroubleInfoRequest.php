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
 * CreateTroubleInfo request structure.
 *
 * @method string getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(string $SdkAppId) Set Application ID
 * @method string getRoomId() Obtain Room ID
 * @method void setRoomId(string $RoomId) Set Room ID
 * @method string getTeacherUserId() Obtain Teacher user ID
 * @method void setTeacherUserId(string $TeacherUserId) Set Teacher user ID
 * @method string getStudentUserId() Obtain Student user ID
 * @method void setStudentUserId(string $StudentUserId) Set Student user ID
 * @method string getTroubleUserId() Obtain ID of the user (teacher or student) with exception.
 * @method void setTroubleUserId(string $TroubleUserId) Set ID of the user (teacher or student) with exception.
 * @method integer getTroubleType() Obtain Exception type.
1: exceptional video
2: exceptional audio
3: exceptional video and audio
5: exceptional room entry
4: course switch
6: help seeking
7: problem feedback
8: complaint
 * @method void setTroubleType(integer $TroubleType) Set Exception type.
1: exceptional video
2: exceptional audio
3: exceptional video and audio
5: exceptional room entry
4: course switch
6: help seeking
7: problem feedback
8: complaint
 * @method integer getTroubleTime() Obtain UNIX timestamp when the exception occurred in seconds.
 * @method void setTroubleTime(integer $TroubleTime) Set UNIX timestamp when the exception occurred in seconds.
 * @method string getTroubleMsg() Obtain Exception details
 * @method void setTroubleMsg(string $TroubleMsg) Set Exception details
 */
class CreateTroubleInfoRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $SdkAppId;

    /**
     * @var string Room ID
     */
    public $RoomId;

    /**
     * @var string Teacher user ID
     */
    public $TeacherUserId;

    /**
     * @var string Student user ID
     */
    public $StudentUserId;

    /**
     * @var string ID of the user (teacher or student) with exception.
     */
    public $TroubleUserId;

    /**
     * @var integer Exception type.
1: exceptional video
2: exceptional audio
3: exceptional video and audio
5: exceptional room entry
4: course switch
6: help seeking
7: problem feedback
8: complaint
     */
    public $TroubleType;

    /**
     * @var integer UNIX timestamp when the exception occurred in seconds.
     */
    public $TroubleTime;

    /**
     * @var string Exception details
     */
    public $TroubleMsg;

    /**
     * @param string $SdkAppId Application ID
     * @param string $RoomId Room ID
     * @param string $TeacherUserId Teacher user ID
     * @param string $StudentUserId Student user ID
     * @param string $TroubleUserId ID of the user (teacher or student) with exception.
     * @param integer $TroubleType Exception type.
1: exceptional video
2: exceptional audio
3: exceptional video and audio
5: exceptional room entry
4: course switch
6: help seeking
7: problem feedback
8: complaint
     * @param integer $TroubleTime UNIX timestamp when the exception occurred in seconds.
     * @param string $TroubleMsg Exception details
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("TeacherUserId",$param) and $param["TeacherUserId"] !== null) {
            $this->TeacherUserId = $param["TeacherUserId"];
        }

        if (array_key_exists("StudentUserId",$param) and $param["StudentUserId"] !== null) {
            $this->StudentUserId = $param["StudentUserId"];
        }

        if (array_key_exists("TroubleUserId",$param) and $param["TroubleUserId"] !== null) {
            $this->TroubleUserId = $param["TroubleUserId"];
        }

        if (array_key_exists("TroubleType",$param) and $param["TroubleType"] !== null) {
            $this->TroubleType = $param["TroubleType"];
        }

        if (array_key_exists("TroubleTime",$param) and $param["TroubleTime"] !== null) {
            $this->TroubleTime = $param["TroubleTime"];
        }

        if (array_key_exists("TroubleMsg",$param) and $param["TroubleMsg"] !== null) {
            $this->TroubleMsg = $param["TroubleMsg"];
        }
    }
}
