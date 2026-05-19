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
 * CreateJustInTimeTranscodeTemplate request structure.
 *
 * @method string getName() Obtain Template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Template name. The length cannot exceed 64 characters.
 * @method VideoConfigureInfo getVideoConfigure() Obtain Video parameter configuration.
 * @method void setVideoConfigure(VideoConfigureInfo $VideoConfigure) Set Video parameter configuration.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method WatermarkConfigureInfo getWatermarkConfigure() Obtain Watermark parameter configuration.
 * @method void setWatermarkConfigure(WatermarkConfigureInfo $WatermarkConfigure) Set Watermark parameter configuration.
 * @method string getComment() Obtain Template description. The length cannot exceed 256 characters.
 * @method void setComment(string $Comment) Set Template description. The length cannot exceed 256 characters.
 */
class CreateJustInTimeTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var VideoConfigureInfo Video parameter configuration.
     */
    public $VideoConfigure;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var WatermarkConfigureInfo Watermark parameter configuration.
     */
    public $WatermarkConfigure;

    /**
     * @var string Template description. The length cannot exceed 256 characters.
     */
    public $Comment;

    /**
     * @param string $Name Template name. The length cannot exceed 64 characters.
     * @param VideoConfigureInfo $VideoConfigure Video parameter configuration.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param WatermarkConfigureInfo $WatermarkConfigure Watermark parameter configuration.
     * @param string $Comment Template description. The length cannot exceed 256 characters.
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

        if (array_key_exists("VideoConfigure",$param) and $param["VideoConfigure"] !== null) {
            $this->VideoConfigure = new VideoConfigureInfo();
            $this->VideoConfigure->deserialize($param["VideoConfigure"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("WatermarkConfigure",$param) and $param["WatermarkConfigure"] !== null) {
            $this->WatermarkConfigure = new WatermarkConfigureInfo();
            $this->WatermarkConfigure->deserialize($param["WatermarkConfigure"]);
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
