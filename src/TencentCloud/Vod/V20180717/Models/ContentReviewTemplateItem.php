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
 * Audio/video moderation template details
 *
 * @method integer getDefinition() Obtain Unique identifier of an audio and video review template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of an audio and video review template.
 * @method string getName() Obtain Audio/video moderation template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Audio/video moderation template name. Length limit: 64 characters.
 * @method string getComment() Obtain Description of the audio and video review template, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Description of the audio and video review template, with a length limit of 256 characters.
 * @method PornConfigureInfo getPornConfigure() Obtain Control parameters for authentication involving offensive information.
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set Control parameters for authentication involving offensive information.
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain Authentication involves control parameters for unsafe information.
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set Authentication involves control parameters for unsafe information.
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain Control parameters for authentication involving inappropriate information.
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set Control parameters for authentication involving inappropriate information.
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain Control parameters of custom audio/video moderation.
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set Control parameters of custom audio/video moderation.
 * @method string getReviewWallSwitch() Obtain Whether the audio/video moderation result enters the audio/video moderation wall (for manual review of the audio/video moderation result).
<li>ON: Yes;</li>
<li>OFF: no</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Whether the audio/video moderation result enters the audio/video moderation wall (for manual review of the audio/video moderation result).
<li>ON: Yes;</li>
<li>OFF: no</li>
 * @method float getScreenshotInterval() Obtain Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
 * @method string getCreateTime() Obtain Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ContentReviewTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique identifier of an audio and video review template.
     */
    public $Definition;

    /**
     * @var string Audio/video moderation template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of the audio and video review template, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfo Control parameters for authentication involving offensive information.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo Authentication involves control parameters for unsafe information.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo Control parameters for authentication involving inappropriate information.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo Control parameters of custom audio/video moderation.
     */
    public $UserDefineConfigure;

    /**
     * @var string Whether the audio/video moderation result enters the audio/video moderation wall (for manual review of the audio/video moderation result).
<li>ON: Yes;</li>
<li>OFF: no</li>
     */
    public $ReviewWallSwitch;

    /**
     * @var float Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var string Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique identifier of an audio and video review template.
     * @param string $Name Audio/video moderation template name. Length limit: 64 characters.
     * @param string $Comment Description of the audio and video review template, with a length limit of 256 characters.
     * @param PornConfigureInfo $PornConfigure Control parameters for authentication involving offensive information.
     * @param TerrorismConfigureInfo $TerrorismConfigure Authentication involves control parameters for unsafe information.
     * @param PoliticalConfigureInfo $PoliticalConfigure Control parameters for authentication involving inappropriate information.
     * @param ProhibitedConfigureInfo $ProhibitedConfigure Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
     * @param UserDefineConfigureInfo $UserDefineConfigure Control parameters of custom audio/video moderation.
     * @param string $ReviewWallSwitch Whether the audio/video moderation result enters the audio/video moderation wall (for manual review of the audio/video moderation result).
<li>ON: Yes;</li>
<li>OFF: no</li>
     * @param float $ScreenshotInterval Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
     * @param string $CreateTime Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PornConfigure",$param) and $param["PornConfigure"] !== null) {
            $this->PornConfigure = new PornConfigureInfo();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfo();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PoliticalConfigure",$param) and $param["PoliticalConfigure"] !== null) {
            $this->PoliticalConfigure = new PoliticalConfigureInfo();
            $this->PoliticalConfigure->deserialize($param["PoliticalConfigure"]);
        }

        if (array_key_exists("ProhibitedConfigure",$param) and $param["ProhibitedConfigure"] !== null) {
            $this->ProhibitedConfigure = new ProhibitedConfigureInfo();
            $this->ProhibitedConfigure->deserialize($param["ProhibitedConfigure"]);
        }

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfo();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }

        if (array_key_exists("ReviewWallSwitch",$param) and $param["ReviewWallSwitch"] !== null) {
            $this->ReviewWallSwitch = $param["ReviewWallSwitch"];
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
