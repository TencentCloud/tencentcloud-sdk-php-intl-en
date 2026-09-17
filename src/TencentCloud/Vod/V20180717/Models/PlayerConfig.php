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
 * 
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getAudioVideoType() Obtain 
 * @method void setAudioVideoType(string $AudioVideoType) Set 
 * @method string getDrmSwitch() Obtain 
 * @method void setDrmSwitch(string $DrmSwitch) Set 
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain 
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set 
 * @method DrmStreamingsInfo getDrmStreamingsInfo() Obtain 
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) Set 
 * @method integer getTranscodeDefinition() Obtain 
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set 
 * @method integer getImageSpriteDefinition() Obtain 
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set 
 * @method array getResolutionNameSet() Obtain 
 * @method void setResolutionNameSet(array $ResolutionNameSet) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getScheme() Obtain 
 * @method void setScheme(string $Scheme) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 */
class PlayerConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $AudioVideoType;

    /**
     * @var string 
     */
    public $DrmSwitch;

    /**
     * @var integer 
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo 
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer 
     */
    public $TranscodeDefinition;

    /**
     * @var integer 
     */
    public $ImageSpriteDefinition;

    /**
     * @var array 
     */
    public $ResolutionNameSet;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var string 
     */
    public $Scheme;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @param string $Name 
     * @param string $Type 
     * @param string $AudioVideoType 
     * @param string $DrmSwitch 
     * @param integer $AdaptiveDynamicStreamingDefinition 
     * @param DrmStreamingsInfo $DrmStreamingsInfo 
     * @param integer $TranscodeDefinition 
     * @param integer $ImageSpriteDefinition 
     * @param array $ResolutionNameSet 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param string $Domain 
     * @param string $Scheme 
     * @param string $Comment 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("DrmSwitch",$param) and $param["DrmSwitch"] !== null) {
            $this->DrmSwitch = $param["DrmSwitch"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("DrmStreamingsInfo",$param) and $param["DrmStreamingsInfo"] !== null) {
            $this->DrmStreamingsInfo = new DrmStreamingsInfo();
            $this->DrmStreamingsInfo->deserialize($param["DrmStreamingsInfo"]);
        }

        if (array_key_exists("TranscodeDefinition",$param) and $param["TranscodeDefinition"] !== null) {
            $this->TranscodeDefinition = $param["TranscodeDefinition"];
        }

        if (array_key_exists("ImageSpriteDefinition",$param) and $param["ImageSpriteDefinition"] !== null) {
            $this->ImageSpriteDefinition = $param["ImageSpriteDefinition"];
        }

        if (array_key_exists("ResolutionNameSet",$param) and $param["ResolutionNameSet"] !== null) {
            $this->ResolutionNameSet = [];
            foreach ($param["ResolutionNameSet"] as $key => $value){
                $obj = new ResolutionNameInfo();
                $obj->deserialize($value);
                array_push($this->ResolutionNameSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
