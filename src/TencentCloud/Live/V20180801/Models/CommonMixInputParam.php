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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General stream mix input parameter.
 *
 * @method string getInputStreamName() Obtain Input stream name, which can contain up to 80 bytes of letters, digits, and underscores.
The value should be the name of an input stream for stream mix when `LayoutParams.InputType` is set to `0` (audio and video), `4` (pure audio), or `5` (pure video).
The value can be a random name for identification, such as `Canvas1` or `Picture1`, when `LayoutParams.InputType` is set to `2` (image) or `3` (canvas).
 * @method void setInputStreamName(string $InputStreamName) Set Input stream name, which can contain up to 80 bytes of letters, digits, and underscores.
The value should be the name of an input stream for stream mix when `LayoutParams.InputType` is set to `0` (audio and video), `4` (pure audio), or `5` (pure video).
The value can be a random name for identification, such as `Canvas1` or `Picture1`, when `LayoutParams.InputType` is set to `2` (image) or `3` (canvas).
 * @method CommonMixLayoutParams getLayoutParams() Obtain Input stream layout parameter.
 * @method void setLayoutParams(CommonMixLayoutParams $LayoutParams) Set Input stream layout parameter.
 * @method CommonMixCropParams getCropParams() Obtain Input stream crop parameter.
 * @method void setCropParams(CommonMixCropParams $CropParams) Set Input stream crop parameter.
 */
class CommonMixInputParam extends AbstractModel
{
    /**
     * @var string Input stream name, which can contain up to 80 bytes of letters, digits, and underscores.
The value should be the name of an input stream for stream mix when `LayoutParams.InputType` is set to `0` (audio and video), `4` (pure audio), or `5` (pure video).
The value can be a random name for identification, such as `Canvas1` or `Picture1`, when `LayoutParams.InputType` is set to `2` (image) or `3` (canvas).
     */
    public $InputStreamName;

    /**
     * @var CommonMixLayoutParams Input stream layout parameter.
     */
    public $LayoutParams;

    /**
     * @var CommonMixCropParams Input stream crop parameter.
     */
    public $CropParams;

    /**
     * @param string $InputStreamName Input stream name, which can contain up to 80 bytes of letters, digits, and underscores.
The value should be the name of an input stream for stream mix when `LayoutParams.InputType` is set to `0` (audio and video), `4` (pure audio), or `5` (pure video).
The value can be a random name for identification, such as `Canvas1` or `Picture1`, when `LayoutParams.InputType` is set to `2` (image) or `3` (canvas).
     * @param CommonMixLayoutParams $LayoutParams Input stream layout parameter.
     * @param CommonMixCropParams $CropParams Input stream crop parameter.
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
        if (array_key_exists("InputStreamName",$param) and $param["InputStreamName"] !== null) {
            $this->InputStreamName = $param["InputStreamName"];
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new CommonMixLayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("CropParams",$param) and $param["CropParams"] !== null) {
            $this->CropParams = new CommonMixCropParams();
            $this->CropParams->deserialize($param["CropParams"]);
        }
    }
}
