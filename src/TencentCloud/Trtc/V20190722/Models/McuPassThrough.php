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
 * The custom pass-through SEI.
 *
 * @method string getPayloadContent() Obtain The payload of the pass-through SEI.
 * @method void setPayloadContent(string $PayloadContent) Set The payload of the pass-through SEI.
 * @method integer getPayloadType() Obtain The payload type of the SEI message. Value range: 5 and 100-254 (244 is used internally by Tencent Cloud for timestamps).
 * @method void setPayloadType(integer $PayloadType) Set The payload type of the SEI message. Value range: 5 and 100-254 (244 is used internally by Tencent Cloud for timestamps).
 * @method string getPayloadUuid() Obtain This parameter is required only if `PayloadType` is 5. It must be a 32-character hexadecimal string. If `PayloadType` is not 5, this parameter will be ignored.
 * @method void setPayloadUuid(string $PayloadUuid) Set This parameter is required only if `PayloadType` is 5. It must be a 32-character hexadecimal string. If `PayloadType` is not 5, this parameter will be ignored.
 * @method integer getInterval() Obtain The SEI sending interval (milliseconds). The default value is 1000.
 * @method void setInterval(integer $Interval) Set The SEI sending interval (milliseconds). The default value is 1000.
 * @method integer getFollowIdr() Obtain Valid values: `1`: SEI is guaranteed when keyframes are sent; `0` (default): SEI is not guaranteed when keyframes are sent.
 * @method void setFollowIdr(integer $FollowIdr) Set Valid values: `1`: SEI is guaranteed when keyframes are sent; `0` (default): SEI is not guaranteed when keyframes are sent.
 */
class McuPassThrough extends AbstractModel
{
    /**
     * @var string The payload of the pass-through SEI.
     */
    public $PayloadContent;

    /**
     * @var integer The payload type of the SEI message. Value range: 5 and 100-254 (244 is used internally by Tencent Cloud for timestamps).
     */
    public $PayloadType;

    /**
     * @var string This parameter is required only if `PayloadType` is 5. It must be a 32-character hexadecimal string. If `PayloadType` is not 5, this parameter will be ignored.
     */
    public $PayloadUuid;

    /**
     * @var integer The SEI sending interval (milliseconds). The default value is 1000.
     */
    public $Interval;

    /**
     * @var integer Valid values: `1`: SEI is guaranteed when keyframes are sent; `0` (default): SEI is not guaranteed when keyframes are sent.
     */
    public $FollowIdr;

    /**
     * @param string $PayloadContent The payload of the pass-through SEI.
     * @param integer $PayloadType The payload type of the SEI message. Value range: 5 and 100-254 (244 is used internally by Tencent Cloud for timestamps).
     * @param string $PayloadUuid This parameter is required only if `PayloadType` is 5. It must be a 32-character hexadecimal string. If `PayloadType` is not 5, this parameter will be ignored.
     * @param integer $Interval The SEI sending interval (milliseconds). The default value is 1000.
     * @param integer $FollowIdr Valid values: `1`: SEI is guaranteed when keyframes are sent; `0` (default): SEI is not guaranteed when keyframes are sent.
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
        if (array_key_exists("PayloadContent",$param) and $param["PayloadContent"] !== null) {
            $this->PayloadContent = $param["PayloadContent"];
        }

        if (array_key_exists("PayloadType",$param) and $param["PayloadType"] !== null) {
            $this->PayloadType = $param["PayloadType"];
        }

        if (array_key_exists("PayloadUuid",$param) and $param["PayloadUuid"] !== null) {
            $this->PayloadUuid = $param["PayloadUuid"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("FollowIdr",$param) and $param["FollowIdr"] !== null) {
            $this->FollowIdr = $param["FollowIdr"];
        }
    }
}
