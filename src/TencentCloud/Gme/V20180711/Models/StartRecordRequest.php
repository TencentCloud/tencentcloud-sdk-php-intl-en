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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartRecord request structure.
 *
 * @method integer getBizId() Obtain Application ID.
 * @method void setBizId(integer $BizId) Set Application ID.
 * @method string getRoomId() Obtain Room ID.
 * @method void setRoomId(string $RoomId) Set Room ID.
 * @method integer getRecordMode() Obtain Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
 * @method void setRecordMode(integer $RecordMode) Set Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
 * @method SubscribeRecordUserIds getSubscribeRecordUserIds() Obtain Allowlist or blocklist for stream subscription. If you do not specify this parameter, the audio streams of all the users in the room are subscribed to by default.
 * @method void setSubscribeRecordUserIds(SubscribeRecordUserIds $SubscribeRecordUserIds) Set Allowlist or blocklist for stream subscription. If you do not specify this parameter, the audio streams of all the users in the room are subscribed to by default.
 */
class StartRecordRequest extends AbstractModel
{
    /**
     * @var integer Application ID.
     */
    public $BizId;

    /**
     * @var string Room ID.
     */
    public $RoomId;

    /**
     * @var integer Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
     */
    public $RecordMode;

    /**
     * @var SubscribeRecordUserIds Allowlist or blocklist for stream subscription. If you do not specify this parameter, the audio streams of all the users in the room are subscribed to by default.
     */
    public $SubscribeRecordUserIds;

    /**
     * @param integer $BizId Application ID.
     * @param string $RoomId Room ID.
     * @param integer $RecordMode Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
     * @param SubscribeRecordUserIds $SubscribeRecordUserIds Allowlist or blocklist for stream subscription. If you do not specify this parameter, the audio streams of all the users in the room are subscribed to by default.
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("SubscribeRecordUserIds",$param) and $param["SubscribeRecordUserIds"] !== null) {
            $this->SubscribeRecordUserIds = new SubscribeRecordUserIds();
            $this->SubscribeRecordUserIds->deserialize($param["SubscribeRecordUserIds"]);
        }
    }
}
