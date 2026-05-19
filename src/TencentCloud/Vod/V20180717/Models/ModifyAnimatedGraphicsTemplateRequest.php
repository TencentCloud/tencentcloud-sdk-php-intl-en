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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAnimatedGraphicsTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the rotation diagram template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the rotation diagram template.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Rotating image template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Rotating image template name. Length limit: 64 characters.
 * @method integer getWidth() Obtain Maximum value of animated gif width (or long side), value ranges from 0 to [32, 4096], unit: px.<li>When Width and Height are 0, Same Resolution Source;</li><li>When Width is 0 and Height is not 0, proportionally scale Width;</li><li>When Width is not 0 and Height is 0, proportionally scale Height;</li><li>When Width and Height are not 0, resolution specified by user.</li>Default value: 0.
 * @method void setWidth(integer $Width) Set Maximum value of animated gif width (or long side), value ranges from 0 to [32, 4096], unit: px.<li>When Width and Height are 0, Same Resolution Source;</li><li>When Width is 0 and Height is not 0, proportionally scale Width;</li><li>When Width is not 0 and Height is 0, proportionally scale Height;</li><li>When Width and Height are not 0, resolution specified by user.</li>Default value: 0.
 * @method integer getHeight() Obtain The maximum value of animated gif height (or short side), value ranges from 0 to [32, 4096], unit: px. <li>When both Width and Height are 0, the resolution is Same Resolution Source;</li> <li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li> <li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li> <li>When both Width and Height are not 0, the resolution is specified by user.</li> Default value: 0.
 * @method void setHeight(integer $Height) Set The maximum value of animated gif height (or short side), value ranges from 0 to [32, 4096], unit: px. <li>When both Width and Height are 0, the resolution is Same Resolution Source;</li> <li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li> <li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li> <li>When both Width and Height are not 0, the resolution is specified by user.</li> Default value: 0.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
 * @method string getFormat() Obtain Animated image file format, value is gif and webp.
 * @method void setFormat(string $Format) Set Animated image file format, value is gif and webp.
 * @method integer getFps() Obtain Frame rate. Value ranges from 1 to 30. Unit: Hz.
 * @method void setFps(integer $Fps) Set Frame rate. Value ranges from 1 to 30. Unit: Hz.
 * @method float getQuality() Obtain Image quality. Valid range: 1 - 100. Default value: 75.
 * @method void setQuality(float $Quality) Set Image quality. Valid range: 1 - 100. Default value: 75.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 */
class ModifyAnimatedGraphicsTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the rotation diagram template.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Rotating image template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var integer Maximum value of animated gif width (or long side), value ranges from 0 to [32, 4096], unit: px.<li>When Width and Height are 0, Same Resolution Source;</li><li>When Width is 0 and Height is not 0, proportionally scale Width;</li><li>When Width is not 0 and Height is 0, proportionally scale Height;</li><li>When Width and Height are not 0, resolution specified by user.</li>Default value: 0.
     */
    public $Width;

    /**
     * @var integer The maximum value of animated gif height (or short side), value ranges from 0 to [32, 4096], unit: px. <li>When both Width and Height are 0, the resolution is Same Resolution Source;</li> <li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li> <li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li> <li>When both Width and Height are not 0, the resolution is specified by user.</li> Default value: 0.
     */
    public $Height;

    /**
     * @var string Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var string Animated image file format, value is gif and webp.
     */
    public $Format;

    /**
     * @var integer Frame rate. Value ranges from 1 to 30. Unit: Hz.
     */
    public $Fps;

    /**
     * @var float Image quality. Valid range: 1 - 100. Default value: 75.
     */
    public $Quality;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @param integer $Definition Unique identifier of the rotation diagram template.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Rotating image template name. Length limit: 64 characters.
     * @param integer $Width Maximum value of animated gif width (or long side), value ranges from 0 to [32, 4096], unit: px.<li>When Width and Height are 0, Same Resolution Source;</li><li>When Width is 0 and Height is not 0, proportionally scale Width;</li><li>When Width is not 0 and Height is 0, proportionally scale Height;</li><li>When Width and Height are not 0, resolution specified by user.</li>Default value: 0.
     * @param integer $Height The maximum value of animated gif height (or short side), value ranges from 0 to [32, 4096], unit: px. <li>When both Width and Height are 0, the resolution is Same Resolution Source;</li> <li>When Width is 0 and Height is not 0, Width is proportionally scaled;</li> <li>When Width is not 0 and Height is 0, Height is proportionally scaled;</li> <li>When both Width and Height are not 0, the resolution is specified by user.</li> Default value: 0.
     * @param string $ResolutionAdaptive Resolution adaptation, available values:
<li>open: start. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
     * @param string $Format Animated image file format, value is gif and webp.
     * @param integer $Fps Frame rate. Value ranges from 1 to 30. Unit: Hz.
     * @param float $Quality Image quality. Valid range: 1 - 100. Default value: 75.
     * @param string $Comment Template description, with a length limit of 256 characters.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
