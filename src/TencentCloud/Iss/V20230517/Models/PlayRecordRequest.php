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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PlayRecord request structure.
 *
 * @method string getChannelId() Obtain Channel ID (obtain from the DescribeDeviceChannel API)
 * @method void setChannelId(string $ChannelId) Set Channel ID (obtain from the DescribeDeviceChannel API)
 * @method integer getStart() Obtain Start time.
 * @method void setStart(integer $Start) Set Start time.
 * @method integer getEnd() Obtain  End time.
 * @method void setEnd(integer $End) Set  End time.
 * @method integer getStreamType() Obtain Stream type (1: main stream; 2: sub-stream (not allowed to be delivered at the same time as Resolution))
 * @method void setStreamType(integer $StreamType) Set Stream type (1: main stream; 2: sub-stream (not allowed to be delivered at the same time as Resolution))
 * @method string getResolution() Obtain Resolution (1: QCIF; 2: CIF; 3: 4CIF; 4: D1; 5: 720P; 6: 1080P/I; custom 19201080, etc. (device support required) (not allowed to be delivered at the same time as StreamType))
 * @method void setResolution(string $Resolution) Set Resolution (1: QCIF; 2: CIF; 3: 4CIF; 4: D1; 5: 720P; 6: 1080P/I; custom 19201080, etc. (device support required) (not allowed to be delivered at the same time as StreamType))
 * @method boolean getIsInternal() Obtain Whether it is a private network
 * @method void setIsInternal(boolean $IsInternal) Set Whether it is a private network
 */
class PlayRecordRequest extends AbstractModel
{
    /**
     * @var string Channel ID (obtain from the DescribeDeviceChannel API)
     */
    public $ChannelId;

    /**
     * @var integer Start time.
     */
    public $Start;

    /**
     * @var integer  End time.
     */
    public $End;

    /**
     * @var integer Stream type (1: main stream; 2: sub-stream (not allowed to be delivered at the same time as Resolution))
     */
    public $StreamType;

    /**
     * @var string Resolution (1: QCIF; 2: CIF; 3: 4CIF; 4: D1; 5: 720P; 6: 1080P/I; custom 19201080, etc. (device support required) (not allowed to be delivered at the same time as StreamType))
     */
    public $Resolution;

    /**
     * @var boolean Whether it is a private network
     */
    public $IsInternal;

    /**
     * @param string $ChannelId Channel ID (obtain from the DescribeDeviceChannel API)
     * @param integer $Start Start time.
     * @param integer $End  End time.
     * @param integer $StreamType Stream type (1: main stream; 2: sub-stream (not allowed to be delivered at the same time as Resolution))
     * @param string $Resolution Resolution (1: QCIF; 2: CIF; 3: 4CIF; 4: D1; 5: 720P; 6: 1080P/I; custom 19201080, etc. (device support required) (not allowed to be delivered at the same time as StreamType))
     * @param boolean $IsInternal Whether it is a private network
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }
    }
}
