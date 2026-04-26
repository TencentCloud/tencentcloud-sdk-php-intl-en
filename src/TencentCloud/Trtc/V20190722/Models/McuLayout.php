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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The layout parameters.
 *
 * @method UserMediaStream getUserMediaStream() Obtain User media stream parameters. if left blank, tencent cloud backend fills them automatically by the room entry sequence of the uplink host.
 * @method void setUserMediaStream(UserMediaStream $UserMediaStream) Set User media stream parameters. if left blank, tencent cloud backend fills them automatically by the room entry sequence of the uplink host.
 * @method integer getImageWidth() Obtain The width of the sub-screen in the output, unit: pixel value. defaults to 0 if left blank.
 * @method void setImageWidth(integer $ImageWidth) Set The width of the sub-screen in the output, unit: pixel value. defaults to 0 if left blank.
 * @method integer getImageHeight() Obtain The height of the sub-screen in the output, in pixel values. default is 0.
 * @method void setImageHeight(integer $ImageHeight) Set The height of the sub-screen in the output, in pixel values. default is 0.
 * @method integer getLocationX() Obtain The X-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationX and ImageWidth must not exceed the total width of the mixed stream output. default is 0.
 * @method void setLocationX(integer $LocationX) Set The X-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationX and ImageWidth must not exceed the total width of the mixed stream output. default is 0.
 * @method integer getLocationY() Obtain The Y-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationY and ImageHeight must not exceed the total height of the mixed stream output. default is 0 if left blank.
 * @method void setLocationY(integer $LocationY) Set The Y-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationY and ImageHeight must not exceed the total height of the mixed stream output. default is 0 if left blank.
 * @method integer getZOrder() Obtain The hierarchy of the sub-screen in the output. default is 0.
 * @method void setZOrder(integer $ZOrder) Set The hierarchy of the sub-screen in the output. default is 0.
 * @method integer getRenderMode() Obtain The display mode of the sub-screen in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background. defaults to 0 if left blank.
 * @method void setRenderMode(integer $RenderMode) Set The display mode of the sub-screen in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background. defaults to 0 if left blank.
 * @method string getBackGroundColor() Obtain [This parameter configuration is invalid and not currently supported] the background color of the sub-picture. commonly used colors are:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
 * @method void setBackGroundColor(string $BackGroundColor) Set [This parameter configuration is invalid and not currently supported] the background color of the sub-picture. commonly used colors are:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
 * @method string getBackgroundImageUrl() Obtain The url of the placeholder image for the sub-window. fill in this parameter to specify the image displayed in the layout position when the user turns the camera off or has not joined the TRTC room. if the specified image has a different size ratio from the layout position, it will be stretched. this parameter has a higher priority than BackGroundColor. supported formats include png, jpg, jpeg, bmp, gif, and webm. the image size limit is no more than 5MB.
Note:.
1. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the placeholder image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the placeholder image will not take effect.
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) Set The url of the placeholder image for the sub-window. fill in this parameter to specify the image displayed in the layout position when the user turns the camera off or has not joined the TRTC room. if the specified image has a different size ratio from the layout position, it will be stretched. this parameter has a higher priority than BackGroundColor. supported formats include png, jpg, jpeg, bmp, gif, and webm. the image size limit is no more than 5MB.
Note:.
1. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the placeholder image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the placeholder image will not take effect.
 * @method McuCustomCrop getCustomCrop() Obtain Customer custom crop, targeting the input stream.
 * @method void setCustomCrop(McuCustomCrop $CustomCrop) Set Customer custom crop, targeting the input stream.
 * @method integer getBackgroundRenderMode() Obtain The display mode of the sub-background image in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background, 3 for variable-scale scaling, 4 for custom rendering. defaults to 3 if left blank.
 * @method void setBackgroundRenderMode(integer $BackgroundRenderMode) Set The display mode of the sub-background image in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background, 3 for variable-scale scaling, 4 for custom rendering. defaults to 3 if left blank.
 * @method string getTransparentUrl() Obtain The sub-screen template url points to a template image with an alpha channel. fill in this parameter, and the backend will extract the alpha channel of the template image during compositing, scale it as the alpha channel of the target frame, and mix it with other frames. you can use the transparent template to achieve a semi-transparent effect and arbitrary shape cropping (such as rounded corners, stars, hearts) for the target frame. png format is supported. the image size limit is no more than 5MB.
Note:.
1. the image aspect ratio of the template should be close to the target frame aspect ratio to avoid deformation of the template effect when scaling to fit the target frame. 2. the transparent template only takes effect when RenderMode is 0 (crop). 3. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the transparent template will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the transparent template will not take effect.
 * @method void setTransparentUrl(string $TransparentUrl) Set The sub-screen template url points to a template image with an alpha channel. fill in this parameter, and the backend will extract the alpha channel of the template image during compositing, scale it as the alpha channel of the target frame, and mix it with other frames. you can use the transparent template to achieve a semi-transparent effect and arbitrary shape cropping (such as rounded corners, stars, hearts) for the target frame. png format is supported. the image size limit is no more than 5MB.
Note:.
1. the image aspect ratio of the template should be close to the target frame aspect ratio to avoid deformation of the template effect when scaling to fit the target frame. 2. the transparent template only takes effect when RenderMode is 0 (crop). 3. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the transparent template will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the transparent template will not take effect.
 * @method McuBackgroundCustomRender getBackgroundCustomRender() Obtain 
 * @method void setBackgroundCustomRender(McuBackgroundCustomRender $BackgroundCustomRender) Set 
 * @method integer getBackGroundColorMode() Obtain Sub-Background color effective mode. default value 0 means disabled.
bit0 specifies whether placeholder image scaling takes effect.
bit1 specifies whether upstream flow scaling takes effect.
You can set the corresponding bit position to 1 to start up and take effect, such as:.
0(00) means the sub background color is disabled.
1(01) indicates the sub-background color is valid only when placeholder image scaling is enabled.
2(10) means the sub background color is valid only when upstream flow scaling.
3(11) indicates the sub-background color takes effect in both placeholder image scaling and upstream flow scaling.

 * @method void setBackGroundColorMode(integer $BackGroundColorMode) Set Sub-Background color effective mode. default value 0 means disabled.
bit0 specifies whether placeholder image scaling takes effect.
bit1 specifies whether upstream flow scaling takes effect.
You can set the corresponding bit position to 1 to start up and take effect, such as:.
0(00) means the sub background color is disabled.
1(01) indicates the sub-background color is valid only when placeholder image scaling is enabled.
2(10) means the sub background color is valid only when upstream flow scaling.
3(11) indicates the sub-background color takes effect in both placeholder image scaling and upstream flow scaling.
 */
class McuLayout extends AbstractModel
{
    /**
     * @var UserMediaStream User media stream parameters. if left blank, tencent cloud backend fills them automatically by the room entry sequence of the uplink host.
     */
    public $UserMediaStream;

    /**
     * @var integer The width of the sub-screen in the output, unit: pixel value. defaults to 0 if left blank.
     */
    public $ImageWidth;

    /**
     * @var integer The height of the sub-screen in the output, in pixel values. default is 0.
     */
    public $ImageHeight;

    /**
     * @var integer The X-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationX and ImageWidth must not exceed the total width of the mixed stream output. default is 0.
     */
    public $LocationX;

    /**
     * @var integer The Y-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationY and ImageHeight must not exceed the total height of the mixed stream output. default is 0 if left blank.
     */
    public $LocationY;

    /**
     * @var integer The hierarchy of the sub-screen in the output. default is 0.
     */
    public $ZOrder;

    /**
     * @var integer The display mode of the sub-screen in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background. defaults to 0 if left blank.
     */
    public $RenderMode;

    /**
     * @var string [This parameter configuration is invalid and not currently supported] the background color of the sub-picture. commonly used colors are:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
     */
    public $BackGroundColor;

    /**
     * @var string The url of the placeholder image for the sub-window. fill in this parameter to specify the image displayed in the layout position when the user turns the camera off or has not joined the TRTC room. if the specified image has a different size ratio from the layout position, it will be stretched. this parameter has a higher priority than BackGroundColor. supported formats include png, jpg, jpeg, bmp, gif, and webm. the image size limit is no more than 5MB.
Note:.
1. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the placeholder image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the placeholder image will not take effect.
     */
    public $BackgroundImageUrl;

    /**
     * @var McuCustomCrop Customer custom crop, targeting the input stream.
     */
    public $CustomCrop;

    /**
     * @var integer The display mode of the sub-background image in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background, 3 for variable-scale scaling, 4 for custom rendering. defaults to 3 if left blank.
     */
    public $BackgroundRenderMode;

    /**
     * @var string The sub-screen template url points to a template image with an alpha channel. fill in this parameter, and the backend will extract the alpha channel of the template image during compositing, scale it as the alpha channel of the target frame, and mix it with other frames. you can use the transparent template to achieve a semi-transparent effect and arbitrary shape cropping (such as rounded corners, stars, hearts) for the target frame. png format is supported. the image size limit is no more than 5MB.
Note:.
1. the image aspect ratio of the template should be close to the target frame aspect ratio to avoid deformation of the template effect when scaling to fit the target frame. 2. the transparent template only takes effect when RenderMode is 0 (crop). 3. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the transparent template will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the transparent template will not take effect.
     */
    public $TransparentUrl;

    /**
     * @var McuBackgroundCustomRender 
     */
    public $BackgroundCustomRender;

    /**
     * @var integer Sub-Background color effective mode. default value 0 means disabled.
bit0 specifies whether placeholder image scaling takes effect.
bit1 specifies whether upstream flow scaling takes effect.
You can set the corresponding bit position to 1 to start up and take effect, such as:.
0(00) means the sub background color is disabled.
1(01) indicates the sub-background color is valid only when placeholder image scaling is enabled.
2(10) means the sub background color is valid only when upstream flow scaling.
3(11) indicates the sub-background color takes effect in both placeholder image scaling and upstream flow scaling.

     */
    public $BackGroundColorMode;

    /**
     * @param UserMediaStream $UserMediaStream User media stream parameters. if left blank, tencent cloud backend fills them automatically by the room entry sequence of the uplink host.
     * @param integer $ImageWidth The width of the sub-screen in the output, unit: pixel value. defaults to 0 if left blank.
     * @param integer $ImageHeight The height of the sub-screen in the output, in pixel values. default is 0.
     * @param integer $LocationX The X-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationX and ImageWidth must not exceed the total width of the mixed stream output. default is 0.
     * @param integer $LocationY The Y-axis offset of the sub-screen in the output, unit: pixel value. the sum of LocationY and ImageHeight must not exceed the total height of the mixed stream output. default is 0 if left blank.
     * @param integer $ZOrder The hierarchy of the sub-screen in the output. default is 0.
     * @param integer $RenderMode The display mode of the sub-screen in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background. defaults to 0 if left blank.
     * @param string $BackGroundColor [This parameter configuration is invalid and not currently supported] the background color of the sub-picture. commonly used colors are:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
     * @param string $BackgroundImageUrl The url of the placeholder image for the sub-window. fill in this parameter to specify the image displayed in the layout position when the user turns the camera off or has not joined the TRTC room. if the specified image has a different size ratio from the layout position, it will be stretched. this parameter has a higher priority than BackGroundColor. supported formats include png, jpg, jpeg, bmp, gif, and webm. the image size limit is no more than 5MB.
Note:.
1. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the placeholder image will not take effect.
2. supported character sets for urls: ['0-9', 'a-z', 'a-z', '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the placeholder image will not take effect.
     * @param McuCustomCrop $CustomCrop Customer custom crop, targeting the input stream.
     * @param integer $BackgroundRenderMode The display mode of the sub-background image in the output: 0 for crop, 1 for scale and display background, 2 for scale and display black background, 3 for variable-scale scaling, 4 for custom rendering. defaults to 3 if left blank.
     * @param string $TransparentUrl The sub-screen template url points to a template image with an alpha channel. fill in this parameter, and the backend will extract the alpha channel of the template image during compositing, scale it as the alpha channel of the target frame, and mix it with other frames. you can use the transparent template to achieve a semi-transparent effect and arbitrary shape cropping (such as rounded corners, stars, hearts) for the target frame. png format is supported. the image size limit is no more than 5MB.
Note:.
1. the image aspect ratio of the template should be close to the target frame aspect ratio to avoid deformation of the template effect when scaling to fit the target frame. 2. the transparent template only takes effect when RenderMode is 0 (crop). 3. make sure the image link is accessible. the backend single download timeout period is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the transparent template will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if characters outside the supported character sets exist, the transparent template will not take effect.
     * @param McuBackgroundCustomRender $BackgroundCustomRender 
     * @param integer $BackGroundColorMode Sub-Background color effective mode. default value 0 means disabled.
bit0 specifies whether placeholder image scaling takes effect.
bit1 specifies whether upstream flow scaling takes effect.
You can set the corresponding bit position to 1 to start up and take effect, such as:.
0(00) means the sub background color is disabled.
1(01) indicates the sub-background color is valid only when placeholder image scaling is enabled.
2(10) means the sub background color is valid only when upstream flow scaling.
3(11) indicates the sub-background color takes effect in both placeholder image scaling and upstream flow scaling.
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
        if (array_key_exists("UserMediaStream",$param) and $param["UserMediaStream"] !== null) {
            $this->UserMediaStream = new UserMediaStream();
            $this->UserMediaStream->deserialize($param["UserMediaStream"]);
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("CustomCrop",$param) and $param["CustomCrop"] !== null) {
            $this->CustomCrop = new McuCustomCrop();
            $this->CustomCrop->deserialize($param["CustomCrop"]);
        }

        if (array_key_exists("BackgroundRenderMode",$param) and $param["BackgroundRenderMode"] !== null) {
            $this->BackgroundRenderMode = $param["BackgroundRenderMode"];
        }

        if (array_key_exists("TransparentUrl",$param) and $param["TransparentUrl"] !== null) {
            $this->TransparentUrl = $param["TransparentUrl"];
        }

        if (array_key_exists("BackgroundCustomRender",$param) and $param["BackgroundCustomRender"] !== null) {
            $this->BackgroundCustomRender = new McuBackgroundCustomRender();
            $this->BackgroundCustomRender->deserialize($param["BackgroundCustomRender"]);
        }

        if (array_key_exists("BackGroundColorMode",$param) and $param["BackGroundColorMode"] !== null) {
            $this->BackGroundColorMode = $param["BackGroundColorMode"];
        }
    }
}
