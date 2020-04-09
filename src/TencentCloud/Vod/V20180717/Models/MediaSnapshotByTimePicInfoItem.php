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
 * Time point screenshot information
 *
 * @method float getTimeOffset() Obtain Time offset corresponding to the screenshot in the video in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeOffset(float $TimeOffset) Set Time offset corresponding to the screenshot in the video in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Screenshot URL.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Screenshot URL.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getWaterMarkDefinition() Obtain List of watermarking template IDs if the screenshots are watermarked.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) Set List of watermarking template IDs if the screenshots are watermarked.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaSnapshotByTimePicInfoItem extends AbstractModel
{
    /**
     * @var float Time offset corresponding to the screenshot in the video in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeOffset;

    /**
     * @var string Screenshot URL.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var array List of watermarking template IDs if the screenshots are watermarked.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WaterMarkDefinition;

    /**
     * @param float $TimeOffset Time offset corresponding to the screenshot in the video in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Url Screenshot URL.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $WaterMarkDefinition List of watermarking template IDs if the screenshots are watermarked.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
