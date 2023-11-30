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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Just In Time transcoding watermark template configuration.
 *
 * @method string getSwitch() Obtain Whether to enable watermark. Possible values:
<li>ON: means enabling watermark;</li>
<li>OFF: means turning off watermark. </li>
 * @method void setSwitch(string $Switch) Set Whether to enable watermark. Possible values:
<li>ON: means enabling watermark;</li>
<li>OFF: means turning off watermark. </li>
 * @method string getUrl() Obtain Watermark URL.
 * @method void setUrl(string $Url) Set Watermark URL.
 * @method string getWidth() Obtain The width of the watermark. 
<li>The string ends with %, indicating that the watermark Width is a percentage of the video width, such as 10% indicating that the Width is 10% of the video width;</li>
 * @method void setWidth(string $Width) Set The width of the watermark. 
<li>The string ends with %, indicating that the watermark Width is a percentage of the video width, such as 10% indicating that the Width is 10% of the video width;</li>
 * @method string getHeight() Obtain The height of the watermark. 
<li>The string ends with %, indicating that the watermark Height is a percentage of the video height, for example, 10% means that the Height is 10% of the video height;</li>
 * @method void setHeight(string $Height) Set The height of the watermark. 
<li>The string ends with %, indicating that the watermark Height is a percentage of the video height, for example, 10% means that the Height is 10% of the video height;</li>
 * @method string getXPos() Obtain The horizontal position of the watermark origin from the video image coordinate origin. The string ends with %, indicating that the watermark XPos specifies a percentage of the video width, such as 10% indicating that XPos is 10% of the video width.
 * @method void setXPos(string $XPos) Set The horizontal position of the watermark origin from the video image coordinate origin. The string ends with %, indicating that the watermark XPos specifies a percentage of the video width, such as 10% indicating that XPos is 10% of the video width.
 * @method string getYPos() Obtain The vertical position of the watermark origin from the video image coordinate origin. When the string ends with %, it means that the watermark YPos specifies a percentage of the video height. For example, 10% means that YPos is 10% of the video height.
 * @method void setYPos(string $YPos) Set The vertical position of the watermark origin from the video image coordinate origin. When the string ends with %, it means that the watermark YPos specifies a percentage of the video height. For example, 10% means that YPos is 10% of the video height.
 */
class WatermarkConfigureData extends AbstractModel
{
    /**
     * @var string Whether to enable watermark. Possible values:
<li>ON: means enabling watermark;</li>
<li>OFF: means turning off watermark. </li>
     */
    public $Switch;

    /**
     * @var string Watermark URL.
     */
    public $Url;

    /**
     * @var string The width of the watermark. 
<li>The string ends with %, indicating that the watermark Width is a percentage of the video width, such as 10% indicating that the Width is 10% of the video width;</li>
     */
    public $Width;

    /**
     * @var string The height of the watermark. 
<li>The string ends with %, indicating that the watermark Height is a percentage of the video height, for example, 10% means that the Height is 10% of the video height;</li>
     */
    public $Height;

    /**
     * @var string The horizontal position of the watermark origin from the video image coordinate origin. The string ends with %, indicating that the watermark XPos specifies a percentage of the video width, such as 10% indicating that XPos is 10% of the video width.
     */
    public $XPos;

    /**
     * @var string The vertical position of the watermark origin from the video image coordinate origin. When the string ends with %, it means that the watermark YPos specifies a percentage of the video height. For example, 10% means that YPos is 10% of the video height.
     */
    public $YPos;

    /**
     * @param string $Switch Whether to enable watermark. Possible values:
<li>ON: means enabling watermark;</li>
<li>OFF: means turning off watermark. </li>
     * @param string $Url Watermark URL.
     * @param string $Width The width of the watermark. 
<li>The string ends with %, indicating that the watermark Width is a percentage of the video width, such as 10% indicating that the Width is 10% of the video width;</li>
     * @param string $Height The height of the watermark. 
<li>The string ends with %, indicating that the watermark Height is a percentage of the video height, for example, 10% means that the Height is 10% of the video height;</li>
     * @param string $XPos The horizontal position of the watermark origin from the video image coordinate origin. The string ends with %, indicating that the watermark XPos specifies a percentage of the video width, such as 10% indicating that XPos is 10% of the video width.
     * @param string $YPos The vertical position of the watermark origin from the video image coordinate origin. When the string ends with %, it means that the watermark YPos specifies a percentage of the video height. For example, 10% means that YPos is 10% of the video height.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }
    }
}
