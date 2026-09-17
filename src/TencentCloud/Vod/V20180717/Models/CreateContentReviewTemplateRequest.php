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
 * @method string getReviewWallSwitch() Obtain 
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method PornConfigureInfo getPornConfigure() Obtain 
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set 
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain 
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set 
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain 
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set 
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain 
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set 
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain 
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set 
 * @method float getScreenshotInterval() Obtain 
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set 
 */
class CreateContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $ReviewWallSwitch;

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
     * @var PornConfigureInfo 
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo 
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo 
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo 
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo 
     */
    public $UserDefineConfigure;

    /**
     * @var float 
     */
    public $ScreenshotInterval;

    /**
     * @param string $ReviewWallSwitch 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param PornConfigureInfo $PornConfigure 
     * @param TerrorismConfigureInfo $TerrorismConfigure 
     * @param PoliticalConfigureInfo $PoliticalConfigure 
     * @param ProhibitedConfigureInfo $ProhibitedConfigure 
     * @param UserDefineConfigureInfo $UserDefineConfigure 
     * @param float $ScreenshotInterval 
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
