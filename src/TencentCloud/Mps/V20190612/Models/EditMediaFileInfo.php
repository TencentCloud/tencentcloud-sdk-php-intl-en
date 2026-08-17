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
 * Edit on-demand video file information
 *
 * @method MediaInputInfo getInputInfo() Obtain Input video information.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set Input video information.
 * @method float getStartTimeOffset() Obtain [Edit] task takes effect, video editing start time offset, measurement unit: second.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set [Edit] task takes effect, video editing start time offset, measurement unit: second.
 * @method float getEndTimeOffset() Obtain [Edit] task takes effect, video editing end time offset, measurement unit: second.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set [Edit] task takes effect, video editing end time offset, measurement unit: second.
 * @method string getId() Obtain 
 * @method void setId(string $Id) Set 
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var MediaInputInfo Input video information.
     */
    public $InputInfo;

    /**
     * @var float [Edit] task takes effect, video editing start time offset, measurement unit: second.
     */
    public $StartTimeOffset;

    /**
     * @var float [Edit] task takes effect, video editing end time offset, measurement unit: second.
     */
    public $EndTimeOffset;

    /**
     * @var string 
     */
    public $Id;

    /**
     * @param MediaInputInfo $InputInfo Input video information.
     * @param float $StartTimeOffset [Edit] task takes effect, video editing start time offset, measurement unit: second.
     * @param float $EndTimeOffset [Edit] task takes effect, video editing end time offset, measurement unit: second.
     * @param string $Id 
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
