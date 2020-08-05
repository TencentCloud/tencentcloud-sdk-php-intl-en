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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio information.
 *
 * @method integer getPid() Obtain Audio `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set Audio `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCodec() Obtain Audio codec.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Audio codec.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFps() Obtain Audio frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFps(integer $Fps) Set Audio frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRate() Obtain Audio bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRate(integer $Rate) Set Audio bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSampleRate() Obtain Audio sample rate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSampleRate(integer $SampleRate) Set Audio sample rate.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StreamAudioInfo extends AbstractModel
{
    /**
     * @var integer Audio `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string Audio codec.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @var integer Audio frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Fps;

    /**
     * @var integer Audio bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Rate;

    /**
     * @var integer Audio sample rate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SampleRate;

    /**
     * @param integer $Pid Audio `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Codec Audio codec.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Fps Audio frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Rate Audio bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SampleRate Audio sample rate.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }
    }
}
