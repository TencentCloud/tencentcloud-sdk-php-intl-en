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
 * Video information of pushed streams.
 *
 * @method integer getPid() Obtain Video `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set Video `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCodec() Obtain Video codec.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Video codec.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFps() Obtain Video frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFps(integer $Fps) Set Video frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRate() Obtain Video bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRate(integer $Rate) Set Video bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Video width.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Video width.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Video height.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Video height.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StreamVideoInfo extends AbstractModel
{
    /**
     * @var integer Video `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string Video codec.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @var integer Video frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Fps;

    /**
     * @var integer Video bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Rate;

    /**
     * @var integer Video width.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer Video height.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @param integer $Pid Video `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Codec Video codec.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Fps Video frame rate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Rate Video bitrate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Video width.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Video height.
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
