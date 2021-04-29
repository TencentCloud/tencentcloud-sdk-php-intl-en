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
 * CreatePicture request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID
 * @method string getContent() Obtain Base64-encoded image content
 * @method void setContent(string $Content) Set Base64-encoded image content
 * @method string getSuffix() Obtain Image file extension
 * @method void setSuffix(string $Suffix) Set Image file extension
 * @method integer getHeight() Obtain Image height
 * @method void setHeight(integer $Height) Set Image height
 * @method integer getWidth() Obtain Image width
 * @method void setWidth(integer $Width) Set Image width
 * @method integer getXPosition() Obtain X-axis value of the image’s position
 * @method void setXPosition(integer $XPosition) Set X-axis value of the image’s position
 * @method integer getYPosition() Obtain Y-axis value of the image’s position
 * @method void setYPosition(integer $YPosition) Set Y-axis value of the image’s position
 */
class CreatePictureRequest extends AbstractModel
{
    /**
     * @var integer Application ID
     */
    public $SdkAppId;

    /**
     * @var string Base64-encoded image content
     */
    public $Content;

    /**
     * @var string Image file extension
     */
    public $Suffix;

    /**
     * @var integer Image height
     */
    public $Height;

    /**
     * @var integer Image width
     */
    public $Width;

    /**
     * @var integer X-axis value of the image’s position
     */
    public $XPosition;

    /**
     * @var integer Y-axis value of the image’s position
     */
    public $YPosition;

    /**
     * @param integer $SdkAppId Application ID
     * @param string $Content Base64-encoded image content
     * @param string $Suffix Image file extension
     * @param integer $Height Image height
     * @param integer $Width Image width
     * @param integer $XPosition X-axis value of the image’s position
     * @param integer $YPosition Y-axis value of the image’s position
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }
    }
}
