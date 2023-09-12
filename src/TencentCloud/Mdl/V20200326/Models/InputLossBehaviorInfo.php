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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Complement the last video frame related settings.
 *
 * @method integer getRepeatLastFrameMs() Obtain The time to fill in the last video frame, unit ms, range 0-1000000, 1000000 means always inserting, default 0 means filling in black screen frame.
 * @method void setRepeatLastFrameMs(integer $RepeatLastFrameMs) Set The time to fill in the last video frame, unit ms, range 0-1000000, 1000000 means always inserting, default 0 means filling in black screen frame.
 * @method string getInputLossImageType() Obtain Fill frame type, COLOR means solid color filling, IMAGE means picture filling, the default is COLOR.
 * @method void setInputLossImageType(string $InputLossImageType) Set Fill frame type, COLOR means solid color filling, IMAGE means picture filling, the default is COLOR.
 * @method string getColorRGB() Obtain When the type is COLOR, the corresponding rgb value
 * @method void setColorRGB(string $ColorRGB) Set When the type is COLOR, the corresponding rgb value
 * @method string getImageUrl() Obtain When the type is IMAGE, the corresponding image url value
 * @method void setImageUrl(string $ImageUrl) Set When the type is IMAGE, the corresponding image url value
 */
class InputLossBehaviorInfo extends AbstractModel
{
    /**
     * @var integer The time to fill in the last video frame, unit ms, range 0-1000000, 1000000 means always inserting, default 0 means filling in black screen frame.
     */
    public $RepeatLastFrameMs;

    /**
     * @var string Fill frame type, COLOR means solid color filling, IMAGE means picture filling, the default is COLOR.
     */
    public $InputLossImageType;

    /**
     * @var string When the type is COLOR, the corresponding rgb value
     */
    public $ColorRGB;

    /**
     * @var string When the type is IMAGE, the corresponding image url value
     */
    public $ImageUrl;

    /**
     * @param integer $RepeatLastFrameMs The time to fill in the last video frame, unit ms, range 0-1000000, 1000000 means always inserting, default 0 means filling in black screen frame.
     * @param string $InputLossImageType Fill frame type, COLOR means solid color filling, IMAGE means picture filling, the default is COLOR.
     * @param string $ColorRGB When the type is COLOR, the corresponding rgb value
     * @param string $ImageUrl When the type is IMAGE, the corresponding image url value
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
        if (array_key_exists("RepeatLastFrameMs",$param) and $param["RepeatLastFrameMs"] !== null) {
            $this->RepeatLastFrameMs = $param["RepeatLastFrameMs"];
        }

        if (array_key_exists("InputLossImageType",$param) and $param["InputLossImageType"] !== null) {
            $this->InputLossImageType = $param["InputLossImageType"];
        }

        if (array_key_exists("ColorRGB",$param) and $param["ColorRGB"] !== null) {
            $this->ColorRGB = $param["ColorRGB"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }
    }
}
