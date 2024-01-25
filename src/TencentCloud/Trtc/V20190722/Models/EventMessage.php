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
 * The event information, including the timestamp and event ID.
 *
 * @method integer getType() Obtain The video stream type. Valid values:
`0`: A non-video event
`2`: The big video
`3`: The small video
`7`: A relayed video
 * @method void setType(integer $Type) Set The video stream type. Valid values:
`0`: A non-video event
`2`: The big video
`3`: The small video
`7`: A relayed video
 * @method integer getTime() Obtain The event reporting time in the format of UNIX timestamp (milliseconds), such as `1589891188801`.
 * @method void setTime(integer $Time) Set The event reporting time in the format of UNIX timestamp (milliseconds), such as `1589891188801`.
 * @method integer getEventId() Obtain The event ID. Events are classified into SDK events and WebRTC events. For more information, see https://www.tencentcloud.com/document/product/647/37906?has_map=1
 * @method void setEventId(integer $EventId) Set The event ID. Events are classified into SDK events and WebRTC events. For more information, see https://www.tencentcloud.com/document/product/647/37906?has_map=1
 * @method integer getParamOne() Obtain The first event parameter, such as the video width.
 * @method void setParamOne(integer $ParamOne) Set The first event parameter, such as the video width.
 * @method integer getParamTwo() Obtain The second event parameter, such as the video height.
 * @method void setParamTwo(integer $ParamTwo) Set The second event parameter, such as the video height.
 */
class EventMessage extends AbstractModel
{
    /**
     * @var integer The video stream type. Valid values:
`0`: A non-video event
`2`: The big video
`3`: The small video
`7`: A relayed video
     */
    public $Type;

    /**
     * @var integer The event reporting time in the format of UNIX timestamp (milliseconds), such as `1589891188801`.
     */
    public $Time;

    /**
     * @var integer The event ID. Events are classified into SDK events and WebRTC events. For more information, see https://www.tencentcloud.com/document/product/647/37906?has_map=1
     */
    public $EventId;

    /**
     * @var integer The first event parameter, such as the video width.
     */
    public $ParamOne;

    /**
     * @var integer The second event parameter, such as the video height.
     */
    public $ParamTwo;

    /**
     * @param integer $Type The video stream type. Valid values:
`0`: A non-video event
`2`: The big video
`3`: The small video
`7`: A relayed video
     * @param integer $Time The event reporting time in the format of UNIX timestamp (milliseconds), such as `1589891188801`.
     * @param integer $EventId The event ID. Events are classified into SDK events and WebRTC events. For more information, see https://www.tencentcloud.com/document/product/647/37906?has_map=1
     * @param integer $ParamOne The first event parameter, such as the video width.
     * @param integer $ParamTwo The second event parameter, such as the video height.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ParamOne",$param) and $param["ParamOne"] !== null) {
            $this->ParamOne = $param["ParamOne"];
        }

        if (array_key_exists("ParamTwo",$param) and $param["ParamTwo"] !== null) {
            $this->ParamTwo = $param["ParamTwo"];
        }
    }
}
