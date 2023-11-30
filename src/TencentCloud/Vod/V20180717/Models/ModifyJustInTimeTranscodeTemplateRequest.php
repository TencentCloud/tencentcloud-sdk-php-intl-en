<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getName() Obtain Template name.
 * @method void setName(string $Name) Set Template name.
 * @method integer getSubAppId() Obtain <b>VOD application ID. If you want to access resources in a sub-application, fill this field with the SubAppID; when empty, it means accessing the resources of the default application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD application ID. If you want to access resources in a sub-application, fill this field with the SubAppID; when empty, it means accessing the resources of the default application.</b>
 * @method VideoConfigureInfoForUpdate getVideoConfigure() Obtain Video parameter configuration.
 * @method void setVideoConfigure(VideoConfigureInfoForUpdate $VideoConfigure) Set Video parameter configuration.
 * @method WatermarkConfigureInfoForUpdate getWatermarkConfigure() Obtain Watermark parameter configuration.
 * @method void setWatermarkConfigure(WatermarkConfigureInfoForUpdate $WatermarkConfigure) Set Watermark parameter configuration.
 * @method string getComment() Obtain Template description, the length is limited to 256 characters.
 * @method void setComment(string $Comment) Set Template description, the length is limited to 256 characters.
 */
class ModifyJustInTimeTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name.
     */
    public $Name;

    /**
     * @var integer <b>VOD application ID. If you want to access resources in a sub-application, fill this field with the SubAppID; when empty, it means accessing the resources of the default application.</b>
     */
    public $SubAppId;

    /**
     * @var VideoConfigureInfoForUpdate Video parameter configuration.
     */
    public $VideoConfigure;

    /**
     * @var WatermarkConfigureInfoForUpdate Watermark parameter configuration.
     */
    public $WatermarkConfigure;

    /**
     * @var string Template description, the length is limited to 256 characters.
     */
    public $Comment;

    /**
     * @param string $Name Template name.
     * @param integer $SubAppId <b>VOD application ID. If you want to access resources in a sub-application, fill this field with the SubAppID; when empty, it means accessing the resources of the default application.</b>
     * @param VideoConfigureInfoForUpdate $VideoConfigure Video parameter configuration.
     * @param WatermarkConfigureInfoForUpdate $WatermarkConfigure Watermark parameter configuration.
     * @param string $Comment Template description, the length is limited to 256 characters.
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
