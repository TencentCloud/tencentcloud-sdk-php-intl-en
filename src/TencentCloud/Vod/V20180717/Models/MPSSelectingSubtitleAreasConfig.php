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
 * Area configurations for the subtitle OCR extraction box.
 *
 * @method array getAutoAreas() Obtain <p>Automatically select a custom region. For the selected areas, the AI model is used to automatically detect and extract the target content.</p>
 * @method void setAutoAreas(array $AutoAreas) Set <p>Automatically select a custom region. For the selected areas, the AI model is used to automatically detect and extract the target content.</p>
 * @method integer getSampleWidth() Obtain <p>Width of the sample video or image, in pixels.</p>
 * @method void setSampleWidth(integer $SampleWidth) Set <p>Width of the sample video or image, in pixels.</p>
 * @method integer getSampleHeight() Obtain <p>Height of the sample video or image, in pixels.</p>
 * @method void setSampleHeight(integer $SampleHeight) Set <p>Height of the sample video or image, in pixels.</p>
 */
class MPSSelectingSubtitleAreasConfig extends AbstractModel
{
    /**
     * @var array <p>Automatically select a custom region. For the selected areas, the AI model is used to automatically detect and extract the target content.</p>
     */
    public $AutoAreas;

    /**
     * @var integer <p>Width of the sample video or image, in pixels.</p>
     */
    public $SampleWidth;

    /**
     * @var integer <p>Height of the sample video or image, in pixels.</p>
     */
    public $SampleHeight;

    /**
     * @param array $AutoAreas <p>Automatically select a custom region. For the selected areas, the AI model is used to automatically detect and extract the target content.</p>
     * @param integer $SampleWidth <p>Width of the sample video or image, in pixels.</p>
     * @param integer $SampleHeight <p>Height of the sample video or image, in pixels.</p>
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
                $obj = new MPSEraseArea();
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
