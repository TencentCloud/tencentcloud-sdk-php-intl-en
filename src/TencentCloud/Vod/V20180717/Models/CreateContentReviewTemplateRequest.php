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
 * CreateContentReviewTemplate request structure.
 *
 * @method string getReviewWallSwitch() Obtain Whether the audio/video moderation result enters the audio/video moderation wall for manual review of the recognition result.
<li>ON: yes;</li>
<li>OFF: No.</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Whether the audio/video moderation result enters the audio/video moderation wall for manual review of the recognition result.
<li>ON: yes;</li>
<li>OFF: No.</li>
 * @method integer getSubAppId() Obtain <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
 * @method string getName() Obtain Content review template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Content review template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Content review template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Content review template description, with a length limit of 256 characters.
 * @method PornConfigureInfo getPornConfigure() Obtain Control parameters for offensive information.
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set Control parameters for offensive information.
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain Control parameters for unsafe information.
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set Control parameters for unsafe information.
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain Uncomfortable Control Parameters.
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set Uncomfortable Control Parameters.
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain User-defined content review control parameters.
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set User-defined content review control parameters.
 * @method float getScreenshotInterval() Obtain Frame interception interval in seconds. If not specified, the default frame interval is 1 second. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval in seconds. If not specified, the default frame interval is 1 second. Minimum value: 0.5 seconds.
 */
class CreateContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var string Whether the audio/video moderation result enters the audio/video moderation wall for manual review of the recognition result.
<li>ON: yes;</li>
<li>OFF: No.</li>
     */
    public $ReviewWallSwitch;

    /**
     * @var integer <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var string Content review template name, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @var string Content review template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfo Control parameters for offensive information.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo Control parameters for unsafe information.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo Uncomfortable Control Parameters.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo User-defined content review control parameters.
     */
    public $UserDefineConfigure;

    /**
     * @var float Frame interception interval in seconds. If not specified, the default frame interval is 1 second. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @param string $ReviewWallSwitch Whether the audio/video moderation result enters the audio/video moderation wall for manual review of the recognition result.
<li>ON: yes;</li>
<li>OFF: No.</li>
     * @param integer $SubAppId <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
     * @param string $Name Content review template name, with a length limit of 64 characters.
     * @param string $Comment Content review template description, with a length limit of 256 characters.
     * @param PornConfigureInfo $PornConfigure Control parameters for offensive information.
     * @param TerrorismConfigureInfo $TerrorismConfigure Control parameters for unsafe information.
     * @param PoliticalConfigureInfo $PoliticalConfigure Uncomfortable Control Parameters.
     * @param ProhibitedConfigureInfo $ProhibitedConfigure Prohibited control parameters. Restricted content includes:
<li>Abusive language;</li>
<li>Drug-related violation.</li>
     * @param UserDefineConfigureInfo $UserDefineConfigure User-defined content review control parameters.
     * @param float $ScreenshotInterval Frame interception interval in seconds. If not specified, the default frame interval is 1 second. Minimum value: 0.5 seconds.
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
        if (array_key_exists("ReviewWallSwitch",$param) and $param["ReviewWallSwitch"] !== null) {
            $this->ReviewWallSwitch = $param["ReviewWallSwitch"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }
    }
}
