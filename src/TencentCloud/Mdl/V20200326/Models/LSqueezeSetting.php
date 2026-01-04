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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getLocation() Obtain Advertising benchmark position, 0 top left, 1 top right, 2 bottom right, 3 bottom left, default value 0, corresponding TOP_LEFT,TOP_RIGHT,BOTTOM_RIGHT,BOTTOM_LEFT
 * @method void setLocation(integer $Location) Set Advertising benchmark position, 0 top left, 1 top right, 2 bottom right, 3 bottom left, default value 0, corresponding TOP_LEFT,TOP_RIGHT,BOTTOM_RIGHT,BOTTOM_LEFT
 * @method integer getOffsetX() Obtain The default value for the percentage in the X-axis direction is 20, with a range of 0-50
 * @method void setOffsetX(integer $OffsetX) Set The default value for the percentage in the X-axis direction is 20, with a range of 0-50
 * @method integer getOffsetY() Obtain The default value for the percentage in the Y-axis direction is 20, with a range of 0-50
 * @method void setOffsetY(integer $OffsetY) Set The default value for the percentage in the Y-axis direction is 20, with a range of 0-50
 * @method string getBackgroundImgUrl() Obtain Background image URL, starting with http/https and ending in jpg/jpeg/png
 * @method void setBackgroundImgUrl(string $BackgroundImgUrl) Set Background image URL, starting with http/https and ending in jpg/jpeg/png
 * @method integer getSqueezeInPeriod() Obtain Compress time. Unit ms, default value 2000, range: 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
 * @method void setSqueezeInPeriod(integer $SqueezeInPeriod) Set Compress time. Unit ms, default value 2000, range: 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
 * @method integer getSqueezeOutPeriod() Obtain Restore to full screen time. Unit ms, default value 2000, range 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
 * @method void setSqueezeOutPeriod(integer $SqueezeOutPeriod) Set Restore to full screen time. Unit ms, default value 2000, range 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
 */
class LSqueezeSetting extends AbstractModel
{
    /**
     * @var integer Advertising benchmark position, 0 top left, 1 top right, 2 bottom right, 3 bottom left, default value 0, corresponding TOP_LEFT,TOP_RIGHT,BOTTOM_RIGHT,BOTTOM_LEFT
     */
    public $Location;

    /**
     * @var integer The default value for the percentage in the X-axis direction is 20, with a range of 0-50
     */
    public $OffsetX;

    /**
     * @var integer The default value for the percentage in the Y-axis direction is 20, with a range of 0-50
     */
    public $OffsetY;

    /**
     * @var string Background image URL, starting with http/https and ending in jpg/jpeg/png
     */
    public $BackgroundImgUrl;

    /**
     * @var integer Compress time. Unit ms, default value 2000, range: 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
     */
    public $SqueezeInPeriod;

    /**
     * @var integer Restore to full screen time. Unit ms, default value 2000, range 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
     */
    public $SqueezeOutPeriod;

    /**
     * @param integer $Location Advertising benchmark position, 0 top left, 1 top right, 2 bottom right, 3 bottom left, default value 0, corresponding TOP_LEFT,TOP_RIGHT,BOTTOM_RIGHT,BOTTOM_LEFT
     * @param integer $OffsetX The default value for the percentage in the X-axis direction is 20, with a range of 0-50
     * @param integer $OffsetY The default value for the percentage in the Y-axis direction is 20, with a range of 0-50
     * @param string $BackgroundImgUrl Background image URL, starting with http/https and ending in jpg/jpeg/png
     * @param integer $SqueezeInPeriod Compress time. Unit ms, default value 2000, range: 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
     * @param integer $SqueezeOutPeriod Restore to full screen time. Unit ms, default value 2000, range 500-10000, SqueezeInPeriod+SqueezeOutPeriod cannot be greater than duration, included in duration
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("OffsetX",$param) and $param["OffsetX"] !== null) {
            $this->OffsetX = $param["OffsetX"];
        }

        if (array_key_exists("OffsetY",$param) and $param["OffsetY"] !== null) {
            $this->OffsetY = $param["OffsetY"];
        }

        if (array_key_exists("BackgroundImgUrl",$param) and $param["BackgroundImgUrl"] !== null) {
            $this->BackgroundImgUrl = $param["BackgroundImgUrl"];
        }

        if (array_key_exists("SqueezeInPeriod",$param) and $param["SqueezeInPeriod"] !== null) {
            $this->SqueezeInPeriod = $param["SqueezeInPeriod"];
        }

        if (array_key_exists("SqueezeOutPeriod",$param) and $param["SqueezeOutPeriod"] !== null) {
            $this->SqueezeOutPeriod = $param["SqueezeOutPeriod"];
        }
    }
}
