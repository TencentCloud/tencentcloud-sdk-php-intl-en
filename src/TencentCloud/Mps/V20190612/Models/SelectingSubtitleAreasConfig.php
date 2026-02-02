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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Area configurations for the subtitle OCR extraction box.
 *
 * @method array getAutoAreas() Obtain Automatically selects custom areas.For the selected areas, the AI model is used to automatically detect and extract the target content.
 * @method void setAutoAreas(array $AutoAreas) Set Automatically selects custom areas.For the selected areas, the AI model is used to automatically detect and extract the target content.
 * @method integer getSampleWidth() Obtain Width of the sample video or image, in pixels.
 * @method void setSampleWidth(integer $SampleWidth) Set Width of the sample video or image, in pixels.
 * @method integer getSampleHeight() Obtain Height of the sample video or image, in pixels.
 * @method void setSampleHeight(integer $SampleHeight) Set Height of the sample video or image, in pixels.
 */
class SelectingSubtitleAreasConfig extends AbstractModel
{
    /**
     * @var array Automatically selects custom areas.For the selected areas, the AI model is used to automatically detect and extract the target content.
     */
    public $AutoAreas;

    /**
     * @var integer Width of the sample video or image, in pixels.
     */
    public $SampleWidth;

    /**
     * @var integer Height of the sample video or image, in pixels.
     */
    public $SampleHeight;

    /**
     * @param array $AutoAreas Automatically selects custom areas.For the selected areas, the AI model is used to automatically detect and extract the target content.
     * @param integer $SampleWidth Width of the sample video or image, in pixels.
     * @param integer $SampleHeight Height of the sample video or image, in pixels.
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
        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
