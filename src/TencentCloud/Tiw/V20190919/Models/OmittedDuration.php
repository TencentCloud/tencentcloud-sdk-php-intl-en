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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Duration to be ignored in the spliced video
 *
 * @method integer getVideoTime() Obtain Offset of the paused time in the spliced video, in milliseconds
 * @method void setVideoTime(integer $VideoTime) Set Offset of the paused time in the spliced video, in milliseconds
 * @method integer getPauseTime() Obtain Recording pause timestamp, in milliseconds
 * @method void setPauseTime(integer $PauseTime) Set Recording pause timestamp, in milliseconds
 * @method integer getResumeTime() Obtain Recording resumption timestamp, in milliseconds
 * @method void setResumeTime(integer $ResumeTime) Set Recording resumption timestamp, in milliseconds
 */
class OmittedDuration extends AbstractModel
{
    /**
     * @var integer Offset of the paused time in the spliced video, in milliseconds
     */
    public $VideoTime;

    /**
     * @var integer Recording pause timestamp, in milliseconds
     */
    public $PauseTime;

    /**
     * @var integer Recording resumption timestamp, in milliseconds
     */
    public $ResumeTime;

    /**
     * @param integer $VideoTime Offset of the paused time in the spliced video, in milliseconds
     * @param integer $PauseTime Recording pause timestamp, in milliseconds
     * @param integer $ResumeTime Recording resumption timestamp, in milliseconds
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
        if (array_key_exists("VideoTime",$param) and $param["VideoTime"] !== null) {
            $this->VideoTime = $param["VideoTime"];
        }

        if (array_key_exists("PauseTime",$param) and $param["PauseTime"] !== null) {
            $this->PauseTime = $param["PauseTime"];
        }

        if (array_key_exists("ResumeTime",$param) and $param["ResumeTime"] !== null) {
            $this->ResumeTime = $param["ResumeTime"];
        }
    }
}
