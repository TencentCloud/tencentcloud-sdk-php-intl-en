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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRoomMessage request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method integer getRoomId() Obtain The room ID.
 * @method void setRoomId(integer $RoomId) Set The room ID.
 * @method integer getSeq() Obtain The starting message sequence. Messages before this sequence will be returned (not including the message whose sequence is `seq`).
 * @method void setSeq(integer $Seq) Set The starting message sequence. Messages before this sequence will be returned (not including the message whose sequence is `seq`).
 * @method integer getLimit() Obtain The maximum number of messages to return. The value of this parameter cannot exceed the maximum message count allowed by your package.
 * @method void setLimit(integer $Limit) Set The maximum number of messages to return. The value of this parameter cannot exceed the maximum message count allowed by your package.
 */
class GetRoomMessageRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var integer The room ID.
     */
    public $RoomId;

    /**
     * @var integer The starting message sequence. Messages before this sequence will be returned (not including the message whose sequence is `seq`).
     */
    public $Seq;

    /**
     * @var integer The maximum number of messages to return. The value of this parameter cannot exceed the maximum message count allowed by your package.
     */
    public $Limit;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param integer $RoomId The room ID.
     * @param integer $Seq The starting message sequence. Messages before this sequence will be returned (not including the message whose sequence is `seq`).
     * @param integer $Limit The maximum number of messages to return. The value of this parameter cannot exceed the maximum message count allowed by your package.
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

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
