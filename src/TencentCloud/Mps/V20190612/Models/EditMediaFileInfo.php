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
 * Edit video-on-demand file information.
 *
 * @method MediaInputInfo getInputInfo() Obtain Video input information.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set Video input information.
 * @method float getStartTimeOffset() Obtain [Edit] task takes effect. Start time offset for video editing, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set [Edit] task takes effect. Start time offset for video editing, in seconds.
 * @method float getEndTimeOffset() Obtain [Edit] task takes effect. End time offset of video editing. Measurement unit: second.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set [Edit] task takes effect. End time offset of video editing. Measurement unit: second.
 * @method string getId() Obtain [Compose] task required, used for media in track elements to associate source material ID.

Note: It can include letters (case insensitive), digits, -, and _, up to 32 characters.
 * @method void setId(string $Id) Set [Compose] task required, used for media in track elements to associate source material ID.

Note: It can include letters (case insensitive), digits, -, and _, up to 32 characters.
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var MediaInputInfo Video input information.
     */
    public $InputInfo;

    /**
     * @var float [Edit] task takes effect. Start time offset for video editing, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float [Edit] task takes effect. End time offset of video editing. Measurement unit: second.
     */
    public $EndTimeOffset;

    /**
     * @var string [Compose] task required, used for media in track elements to associate source material ID.

Note: It can include letters (case insensitive), digits, -, and _, up to 32 characters.
     */
    public $Id;

    /**
     * @param MediaInputInfo $InputInfo Video input information.
     * @param float $StartTimeOffset [Edit] task takes effect. Start time offset for video editing, in seconds.
     * @param float $EndTimeOffset [Edit] task takes effect. End time offset of video editing. Measurement unit: second.
     * @param string $Id [Compose] task required, used for media in track elements to associate source material ID.

Note: It can include letters (case insensitive), digits, -, and _, up to 32 characters.
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
