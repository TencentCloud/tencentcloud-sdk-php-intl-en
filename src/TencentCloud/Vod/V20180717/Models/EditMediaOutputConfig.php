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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getMediaName() Obtain 
 * @method void setMediaName(string $MediaName) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method EditMediaVideoStream getVideoStream() Obtain 
 * @method void setVideoStream(EditMediaVideoStream $VideoStream) Set 
 * @method EditMediaTEHDConfig getTEHDConfig() Obtain 
 * @method void setTEHDConfig(EditMediaTEHDConfig $TEHDConfig) Set 
 */
class EditMediaOutputConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $MediaName;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var EditMediaVideoStream 
     */
    public $VideoStream;

    /**
     * @var EditMediaTEHDConfig 
     */
    public $TEHDConfig;

    /**
     * @param string $MediaName 
     * @param string $Type 
     * @param integer $ClassId 
     * @param string $ExpireTime 
     * @param EditMediaVideoStream $VideoStream 
     * @param EditMediaTEHDConfig $TEHDConfig 
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
        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new EditMediaVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new EditMediaTEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }
    }
}
