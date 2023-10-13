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
 * The subtitle element information of a video editing/compositing task.
 *
 * @method string getStyleId() Obtain The subtitle style ID, which corresponds to the `Id` field of `ComposeStyles`.
 * @method void setStyleId(string $StyleId) Set The subtitle style ID, which corresponds to the `Id` field of `ComposeStyles`.
 * @method string getText() Obtain The subtitle text.
 * @method void setText(string $Text) Set The subtitle text.
 * @method ComposeTrackTime getTrackTime() Obtain The time of the element in the timeline. If this is not specified, the element will follow the previous element.	
 * @method void setTrackTime(ComposeTrackTime $TrackTime) Set The time of the element in the timeline. If this is not specified, the element will follow the previous element.	
 */
class ComposeSubtitleItem extends AbstractModel
{
    /**
     * @var string The subtitle style ID, which corresponds to the `Id` field of `ComposeStyles`.
     */
    public $StyleId;

    /**
     * @var string The subtitle text.
     */
    public $Text;

    /**
     * @var ComposeTrackTime The time of the element in the timeline. If this is not specified, the element will follow the previous element.	
     */
    public $TrackTime;

    /**
     * @param string $StyleId The subtitle style ID, which corresponds to the `Id` field of `ComposeStyles`.
     * @param string $Text The subtitle text.
     * @param ComposeTrackTime $TrackTime The time of the element in the timeline. If this is not specified, the element will follow the previous element.	
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
        if (array_key_exists("StyleId",$param) and $param["StyleId"] !== null) {
            $this->StyleId = $param["StyleId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TrackTime",$param) and $param["TrackTime"] !== null) {
            $this->TrackTime = new ComposeTrackTime();
            $this->TrackTime->deserialize($param["TrackTime"]);
        }
    }
}
