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
 * ModifyJustInTimeTranscodeTemplate request structure.
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method VideoConfigureInfoForUpdate getVideoConfigure() Obtain 
 * @method void setVideoConfigure(VideoConfigureInfoForUpdate $VideoConfigure) Set 
 * @method WatermarkConfigureInfoForUpdate getWatermarkConfigure() Obtain 
 * @method void setWatermarkConfigure(WatermarkConfigureInfoForUpdate $WatermarkConfigure) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 */
class ModifyJustInTimeTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var VideoConfigureInfoForUpdate 
     */
    public $VideoConfigure;

    /**
     * @var WatermarkConfigureInfoForUpdate 
     */
    public $WatermarkConfigure;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @param string $Name 
     * @param integer $SubAppId 
     * @param VideoConfigureInfoForUpdate $VideoConfigure 
     * @param WatermarkConfigureInfoForUpdate $WatermarkConfigure 
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("VideoConfigure",$param) and $param["VideoConfigure"] !== null) {
            $this->VideoConfigure = new VideoConfigureInfoForUpdate();
            $this->VideoConfigure->deserialize($param["VideoConfigure"]);
        }

        if (array_key_exists("WatermarkConfigure",$param) and $param["WatermarkConfigure"] !== null) {
            $this->WatermarkConfigure = new WatermarkConfigureInfoForUpdate();
            $this->WatermarkConfigure->deserialize($param["WatermarkConfigure"]);
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
