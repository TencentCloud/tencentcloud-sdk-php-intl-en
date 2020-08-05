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
 * Event information, including event timestamp and event ID.
 *
 * @method integer getType() Obtain Video stream type:
0: non-video event;
2: big image;
3: small image;
7: relayed stream image.
 * @method void setType(integer $Type) Set Video stream type:
0: non-video event;
2: big image;
3: small image;
7: relayed stream image.
 * @method integer getTime() Obtain Event reporting time in the format of UNIX timestamp, such as 1589891188801ms
 * @method void setTime(integer $Time) Set Event reporting time in the format of UNIX timestamp, such as 1589891188801ms
 * @method integer getEventId() Obtain Event ID. Events divide into SDK events and WebRTC events. For more information, please see Appendix - Event ID Mapping Table at https://cloud.tencent.com/document/product/647/44916
 * @method void setEventId(integer $EventId) Set Event ID. Events divide into SDK events and WebRTC events. For more information, please see Appendix - Event ID Mapping Table at https://cloud.tencent.com/document/product/647/44916
 * @method integer getParamOne() Obtain First event parameter, such as video resolution width
 * @method void setParamOne(integer $ParamOne) Set First event parameter, such as video resolution width
 * @method integer getParamTwo() Obtain Second event parameter, such as video resolution height
 * @method void setParamTwo(integer $ParamTwo) Set Second event parameter, such as video resolution height
 */
class EventMessage extends AbstractModel
{
    /**
     * @var integer Video stream type:
0: non-video event;
2: big image;
3: small image;
7: relayed stream image.
     */
    public $Type;

    /**
     * @var integer Event reporting time in the format of UNIX timestamp, such as 1589891188801ms
     */
    public $Time;

    /**
     * @var integer Event ID. Events divide into SDK events and WebRTC events. For more information, please see Appendix - Event ID Mapping Table at https://cloud.tencent.com/document/product/647/44916
     */
    public $EventId;

    /**
     * @var integer First event parameter, such as video resolution width
     */
    public $ParamOne;

    /**
     * @var integer Second event parameter, such as video resolution height
     */
    public $ParamTwo;

    /**
     * @param integer $Type Video stream type:
0: non-video event;
2: big image;
3: small image;
7: relayed stream image.
     * @param integer $Time Event reporting time in the format of UNIX timestamp, such as 1589891188801ms
     * @param integer $EventId Event ID. Events divide into SDK events and WebRTC events. For more information, please see Appendix - Event ID Mapping Table at https://cloud.tencent.com/document/product/647/44916
     * @param integer $ParamOne First event parameter, such as video resolution width
     * @param integer $ParamTwo Second event parameter, such as video resolution height
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
