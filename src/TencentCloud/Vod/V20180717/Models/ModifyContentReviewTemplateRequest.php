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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() Obtain 
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) Set 
 * @method PornConfigureInfoForUpdate getPornConfigure() Obtain 
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) Set 
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() Obtain 
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) Set 
 * @method ProhibitedConfigureInfoForUpdate getProhibitedConfigure() Obtain 
 * @method void setProhibitedConfigure(ProhibitedConfigureInfoForUpdate $ProhibitedConfigure) Set 
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() Obtain 
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) Set 
 * @method float getScreenshotInterval() Obtain 
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set 
 * @method string getReviewWallSwitch() Obtain 
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set 
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var TerrorismConfigureInfoForUpdate 
     */
    public $TerrorismConfigure;

    /**
     * @var PornConfigureInfoForUpdate 
     */
    public $PornConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate 
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfoForUpdate 
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate 
     */
    public $UserDefineConfigure;

    /**
     * @var float 
     */
    public $ScreenshotInterval;

    /**
     * @var string 
     */
    public $ReviewWallSwitch;

    /**
     * @param integer $Definition 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure 
     * @param PornConfigureInfoForUpdate $PornConfigure 
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure 
     * @param ProhibitedConfigureInfoForUpdate $ProhibitedConfigure 
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure 
     * @param float $ScreenshotInterval 
     * @param string $ReviewWallSwitch 
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
