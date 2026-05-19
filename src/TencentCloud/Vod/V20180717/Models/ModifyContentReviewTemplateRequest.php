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
 * ModifyContentReviewTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of a content review template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of a content review template.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Content review template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Content review template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Content review template description information, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Content review template description information, with a length limit of 256 characters.
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() Obtain Control parameters for unsafe information.
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) Set Control parameters for unsafe information.
 * @method PornConfigureInfoForUpdate getPornConfigure() Obtain Control parameters for offensive information.
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) Set Control parameters for offensive information.
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() Obtain Control parameter for inappropriate information.
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) Set Control parameter for inappropriate information.
 * @method ProhibitedConfigureInfoForUpdate getProhibitedConfigure() Obtain Prohibited control parameters. Prohibited content includes:
<li>Abuse;</li>
<li>Drug-related violation.</li>
 * @method void setProhibitedConfigure(ProhibitedConfigureInfoForUpdate $ProhibitedConfigure) Set Prohibited control parameters. Prohibited content includes:
<li>Abuse;</li>
<li>Drug-related violation.</li>
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() Obtain User-defined content review control parameters.
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) Set User-defined content review control parameters.
 * @method float getScreenshotInterval() Obtain Frame interception interval, unit: seconds, minimum value 0.5.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval, unit: seconds, minimum value 0.5.
 * @method string getReviewWallSwitch() Obtain Switch for whether the review result enters the review wall (manual recognition performed on the review result).
<li>ON: yes</li>
<li>OFF: No.</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Switch for whether the review result enters the review wall (manual recognition performed on the review result).
<li>ON: yes</li>
<li>OFF: No.</li>
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of a content review template.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Content review template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Content review template description information, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var TerrorismConfigureInfoForUpdate Control parameters for unsafe information.
     */
    public $TerrorismConfigure;

    /**
     * @var PornConfigureInfoForUpdate Control parameters for offensive information.
     */
    public $PornConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate Control parameter for inappropriate information.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfoForUpdate Prohibited control parameters. Prohibited content includes:
<li>Abuse;</li>
<li>Drug-related violation.</li>
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate User-defined content review control parameters.
     */
    public $UserDefineConfigure;

    /**
     * @var float Frame interception interval, unit: seconds, minimum value 0.5.
     */
    public $ScreenshotInterval;

    /**
     * @var string Switch for whether the review result enters the review wall (manual recognition performed on the review result).
<li>ON: yes</li>
<li>OFF: No.</li>
     */
    public $ReviewWallSwitch;

    /**
     * @param integer $Definition Unique identifier of a content review template.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Content review template name. The length cannot exceed 64 characters.
     * @param string $Comment Content review template description information, with a length limit of 256 characters.
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure Control parameters for unsafe information.
     * @param PornConfigureInfoForUpdate $PornConfigure Control parameters for offensive information.
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure Control parameter for inappropriate information.
     * @param ProhibitedConfigureInfoForUpdate $ProhibitedConfigure Prohibited control parameters. Prohibited content includes:
<li>Abuse;</li>
<li>Drug-related violation.</li>
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure User-defined content review control parameters.
     * @param float $ScreenshotInterval Frame interception interval, unit: seconds, minimum value 0.5.
     * @param string $ReviewWallSwitch Switch for whether the review result enters the review wall (manual recognition performed on the review result).
<li>ON: yes</li>
<li>OFF: No.</li>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfoForUpdate();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PornConfigure",$param) and $param["PornConfigure"] !== null) {
            $this->PornConfigure = new PornConfigureInfoForUpdate();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
        }

        if (array_key_exists("PoliticalConfigure",$param) and $param["PoliticalConfigure"] !== null) {
            $this->PoliticalConfigure = new PoliticalConfigureInfoForUpdate();
            $this->PoliticalConfigure->deserialize($param["PoliticalConfigure"]);
        }

        if (array_key_exists("ProhibitedConfigure",$param) and $param["ProhibitedConfigure"] !== null) {
            $this->ProhibitedConfigure = new ProhibitedConfigureInfoForUpdate();
            $this->ProhibitedConfigure->deserialize($param["ProhibitedConfigure"]);
        }

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfoForUpdate();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("ReviewWallSwitch",$param) and $param["ReviewWallSwitch"] !== null) {
            $this->ReviewWallSwitch = $param["ReviewWallSwitch"];
        }
    }
}
