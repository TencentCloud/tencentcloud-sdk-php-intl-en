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
 * CreateAdaptiveDynamicStreamingTemplate request structure.
 *
 * @method string getFormat() Obtain 
 * @method void setFormat(string $Format) Set 
 * @method array getStreamInfos() Obtain 
 * @method void setStreamInfos(array $StreamInfos) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDrmType() Obtain 
 * @method void setDrmType(string $DrmType) Set 
 * @method string getDrmKeyProvider() Obtain 
 * @method void setDrmKeyProvider(string $DrmKeyProvider) Set 
 * @method string getDrmEncryptType() Obtain 
 * @method void setDrmEncryptType(string $DrmEncryptType) Set 
 * @method integer getDisableHigherVideoBitrate() Obtain 
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set 
 * @method integer getDisableHigherVideoResolution() Obtain 
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method string getSegmentType() Obtain 
 * @method void setSegmentType(string $SegmentType) Set 
 * @method integer getSegmentDuration() Obtain 
 * @method void setSegmentDuration(integer $SegmentDuration) Set 
 */
class CreateAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Format;

    /**
     * @var array 
     */
    public $StreamInfos;

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
    public $DrmType;

    /**
     * @var string 
     */
    public $DrmKeyProvider;

    /**
     * @var string 
     */
    public $DrmEncryptType;

    /**
     * @var integer 
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer 
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var string 
     */
    public $SegmentType;

    /**
     * @var integer 
     */
    public $SegmentDuration;

    /**
     * @param string $Format 
     * @param array $StreamInfos 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $DrmType 
     * @param string $DrmKeyProvider 
     * @param string $DrmEncryptType 
     * @param integer $DisableHigherVideoBitrate 
     * @param integer $DisableHigherVideoResolution 
     * @param string $Comment 
     * @param string $SegmentType 
     * @param integer $SegmentDuration 
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("DrmKeyProvider",$param) and $param["DrmKeyProvider"] !== null) {
            $this->DrmKeyProvider = $param["DrmKeyProvider"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }
    }
}
