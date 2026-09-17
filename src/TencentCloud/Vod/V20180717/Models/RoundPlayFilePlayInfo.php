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
 * @method string getItemId() Obtain 
 * @method void setItemId(string $ItemId) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getStartPlayTime() Obtain 
 * @method void setStartPlayTime(string $StartPlayTime) Set 
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method float getProgress() Obtain 
 * @method void setProgress(float $Progress) Set 
 */
class RoundPlayFilePlayInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $ItemId;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $StartPlayTime;

    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var float 
     */
    public $Progress;

    /**
     * @param string $ItemId 
     * @param string $FileId 
     * @param string $StartPlayTime 
     * @param float $Duration 
     * @param float $Progress 
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartPlayTime",$param) and $param["StartPlayTime"] !== null) {
            $this->StartPlayTime = $param["StartPlayTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
