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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a time point screenshot
 *
 * @method float getTimeOffset() Obtain The timestamp (seconds) of the screenshot.
 * @method void setTimeOffset(float $TimeOffset) Set The timestamp (seconds) of the screenshot.
 * @method string getPath() Obtain Path to the screenshot.
 * @method void setPath(string $Path) Set Path to the screenshot.
 * @method array getWaterMarkDefinition() Obtain List of watermarking template IDs if the screenshots are watermarked.
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) Set List of watermarking template IDs if the screenshots are watermarked.
 */
class MediaSnapshotByTimePicInfoItem extends AbstractModel
{
    /**
     * @var float The timestamp (seconds) of the screenshot.
     */
    public $TimeOffset;

    /**
     * @var string Path to the screenshot.
     */
    public $Path;

    /**
     * @var array List of watermarking template IDs if the screenshots are watermarked.
     */
    public $WaterMarkDefinition;

    /**
     * @param float $TimeOffset The timestamp (seconds) of the screenshot.
     * @param string $Path Path to the screenshot.
     * @param array $WaterMarkDefinition List of watermarking template IDs if the screenshots are watermarked.
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
