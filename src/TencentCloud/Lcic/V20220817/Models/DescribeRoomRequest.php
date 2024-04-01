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
 * DescribeRoom request structure.
 *
 * @method integer getRoomId() Obtain Room ID	
 * @method void setRoomId(integer $RoomId) Set Room ID	
 * @method integer getRTMPStreamingURL() Obtain Request RTMP  stream link, 0: no, 1: yes, default is 0.
 * @method void setRTMPStreamingURL(integer $RTMPStreamingURL) Set Request RTMP  stream link, 0: no, 1: yes, default is 0.
 */
class DescribeRoomRequest extends AbstractModel
{
    /**
     * @var integer Room ID	
     */
    public $RoomId;

    /**
     * @var integer Request RTMP  stream link, 0: no, 1: yes, default is 0.
     */
    public $RTMPStreamingURL;

    /**
     * @param integer $RoomId Room ID	
     * @param integer $RTMPStreamingURL Request RTMP  stream link, 0: no, 1: yes, default is 0.
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RTMPStreamingURL",$param) and $param["RTMPStreamingURL"] !== null) {
            $this->RTMPStreamingURL = $param["RTMPStreamingURL"];
        }
    }
}
