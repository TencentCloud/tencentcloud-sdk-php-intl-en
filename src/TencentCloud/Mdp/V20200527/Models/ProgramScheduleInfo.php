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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The scheduling information of the Program under this channel.
 *
 * @method string getProgramName() Obtain program name.
 * @method void setProgramName(string $ProgramName) Set program name.
 * @method string getProgramId() Obtain program id.
 * @method void setProgramId(string $ProgramId) Set program id.
 * @method string getSourceType() Obtain source type.
 * @method void setSourceType(string $SourceType) Set source type.
 * @method string getSourceId() Obtain source id.
 * @method void setSourceId(string $SourceId) Set source id.
 * @method string getSourceLocationId() Obtain The id of the source location.
 * @method void setSourceLocationId(string $SourceLocationId) Set The id of the source location.
 * @method integer getStartTime() Obtain Start timestamp.
 * @method void setStartTime(integer $StartTime) Set Start timestamp.
 * @method string getDuration() Obtain Duration.
 * @method void setDuration(string $Duration) Set Duration.
 */
class ProgramScheduleInfo extends AbstractModel
{
    /**
     * @var string program name.
     */
    public $ProgramName;

    /**
     * @var string program id.
     */
    public $ProgramId;

    /**
     * @var string source type.
     */
    public $SourceType;

    /**
     * @var string source id.
     */
    public $SourceId;

    /**
     * @var string The id of the source location.
     */
    public $SourceLocationId;

    /**
     * @var integer Start timestamp.
     */
    public $StartTime;

    /**
     * @var string Duration.
     */
    public $Duration;

    /**
     * @param string $ProgramName program name.
     * @param string $ProgramId program id.
     * @param string $SourceType source type.
     * @param string $SourceId source id.
     * @param string $SourceLocationId The id of the source location.
     * @param integer $StartTime Start timestamp.
     * @param string $Duration Duration.
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
        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
