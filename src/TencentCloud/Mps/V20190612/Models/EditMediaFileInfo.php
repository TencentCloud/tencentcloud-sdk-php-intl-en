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
 * @method float getStartTimeOffset() Obtain The start offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
 * @method float getEndTimeOffset() Obtain The end offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
 * @method string getId() Obtain The ID of the material associated with an element. This parameter is required for video compositing tasks.

Note: The ID can be up to 32 characters long and can contain letters, digits, and special characters -_
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set The ID of the material associated with an element. This parameter is required for video compositing tasks.

Note: The ID can be up to 32 characters long and can contain letters, digits, and special characters -_
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var MediaInputInfo Video input information.
     */
    public $InputInfo;

    /**
     * @var float The start offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
     */
    public $StartTimeOffset;

    /**
     * @var float The end offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
     */
    public $EndTimeOffset;

    /**
     * @var string The ID of the material associated with an element. This parameter is required for video compositing tasks.

Note: The ID can be up to 32 characters long and can contain letters, digits, and special characters -_
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @param MediaInputInfo $InputInfo Video input information.
     * @param float $StartTimeOffset The start offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
     * @param float $EndTimeOffset The end offset (seconds) for video clipping. This parameter is valid for video clipping tasks.
     * @param string $Id The ID of the material associated with an element. This parameter is required for video compositing tasks.

Note: The ID can be up to 32 characters long and can contain letters, digits, and special characters -_
Note: This field may return·null, indicating that no valid values can be obtained.
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
