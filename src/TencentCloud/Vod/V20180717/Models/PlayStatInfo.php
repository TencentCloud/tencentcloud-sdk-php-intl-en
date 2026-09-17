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
 * @method string getTime() Obtain 
 * @method void setTime(string $Time) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method integer getPlayTimes() Obtain 
 * @method void setPlayTimes(integer $PlayTimes) Set 
 * @method integer getTraffic() Obtain 
 * @method void setTraffic(integer $Traffic) Set 
 */
class PlayStatInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Time;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var integer 
     */
    public $PlayTimes;

    /**
     * @var integer 
     */
    public $Traffic;

    /**
     * @param string $Time 
     * @param string $FileId 
     * @param integer $PlayTimes 
     * @param integer $Traffic 
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PlayTimes",$param) and $param["PlayTimes"] !== null) {
            $this->PlayTimes = $param["PlayTimes"];
        }

        if (array_key_exists("Traffic",$param) and $param["Traffic"] !== null) {
            $this->Traffic = $param["Traffic"];
        }
    }
}
