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
 * VOD video file editing information
 *
 * @method MediaInputInfo getInputInfo() Obtain Video input information.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set Video input information.
 * @method float getStartTimeOffset() Obtain Start time offset of video clipping in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of video clipping in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of video clipping in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of video clipping in seconds.
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var MediaInputInfo Video input information.
     */
    public $InputInfo;

    /**
     * @var float Start time offset of video clipping in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of video clipping in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param MediaInputInfo $InputInfo Video input information.
     * @param float $StartTimeOffset Start time offset of video clipping in seconds.
     * @param float $EndTimeOffset End time offset of video clipping in seconds.
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
    }
}
