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
 * Just In Time transcoding template details.
 *
 * @method string getType() Obtain Template type.
 * @method void setType(string $Type) Set Template type.
 * @method string getName() Obtain Template name.
 * @method void setName(string $Name) Set Template name.
 * @method string getComment() Obtain Template description.
 * @method void setComment(string $Comment) Set Template description.
 * @method VideoConfigureInfo getVideoConfigure() Obtain Video parameter configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVideoConfigure(VideoConfigureInfo $VideoConfigure) Set Video parameter configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method WatermarkConfigureData getWatermarkConfigure() Obtain Watermark parameter configuration. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWatermarkConfigure(WatermarkConfigureData $WatermarkConfigure) Set Watermark parameter configuration. 
Note: This field may return null, indicating that no valid value can be obtained.
 */
class JustInTimeTranscodeTemplate extends AbstractModel
{
    /**
     * @var string Template type.
     */
    public $Type;

    /**
     * @var string Template name.
     */
    public $Name;

    /**
     * @var string Template description.
     */
    public $Comment;

    /**
     * @var VideoConfigureInfo Video parameter configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VideoConfigure;

    /**
     * @var WatermarkConfigureData Watermark parameter configuration. 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WatermarkConfigure;

    /**
     * @param string $Type Template type.
     * @param string $Name Template name.
     * @param string $Comment Template description.
     * @param VideoConfigureInfo $VideoConfigure Video parameter configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param WatermarkConfigureData $WatermarkConfigure Watermark parameter configuration. 
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("VideoConfigure",$param) and $param["VideoConfigure"] !== null) {
            $this->VideoConfigure = new VideoConfigureInfo();
            $this->VideoConfigure->deserialize($param["VideoConfigure"]);
        }

        if (array_key_exists("WatermarkConfigure",$param) and $param["WatermarkConfigure"] !== null) {
            $this->WatermarkConfigure = new WatermarkConfigureData();
            $this->WatermarkConfigure->deserialize($param["WatermarkConfigure"]);
        }
    }
}
