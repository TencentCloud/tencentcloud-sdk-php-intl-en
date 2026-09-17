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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getStorageMode() Obtain 
 * @method void setStorageMode(string $StorageMode) Set 
 * @method string getMediaName() Obtain 
 * @method void setMediaName(string $MediaName) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method integer getDuration() Obtain 
 * @method void setDuration(integer $Duration) Set 
 * @method string getOutputAudioFormat() Obtain 
 * @method void setOutputAudioFormat(string $OutputAudioFormat) Set 
 */
class AigcAudioOutputConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $StorageMode;

    /**
     * @var string 
     */
    public $MediaName;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var integer 
     */
    public $Duration;

    /**
     * @var string 
     */
    public $OutputAudioFormat;

    /**
     * @param string $StorageMode 
     * @param string $MediaName 
     * @param integer $ClassId 
     * @param string $ExpireTime 
     * @param integer $Duration 
     * @param string $OutputAudioFormat 
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("OutputAudioFormat",$param) and $param["OutputAudioFormat"] !== null) {
            $this->OutputAudioFormat = $param["OutputAudioFormat"];
        }
    }
}
