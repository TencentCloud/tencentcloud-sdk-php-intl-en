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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recording duration statistics
 *
 * @method string getTimeKey() Obtain Time point for the statistics, e.g., `2020-09-07` or `2020-09-07 00:05:05`
 * @method void setTimeKey(string $TimeKey) Set Time point for the statistics, e.g., `2020-09-07` or `2020-09-07 00:05:05`
 * @method integer getClass1VideoTime() Obtain SD video duration (s)
 * @method void setClass1VideoTime(integer $Class1VideoTime) Set SD video duration (s)
 * @method integer getClass2VideoTime() Obtain HD video duration (s)
 * @method void setClass2VideoTime(integer $Class2VideoTime) Set HD video duration (s)
 * @method integer getClass3VideoTime() Obtain FHD video duration (s)
 * @method void setClass3VideoTime(integer $Class3VideoTime) Set FHD video duration (s)
 * @method integer getAudioTime() Obtain Audio duration (s)
 * @method void setAudioTime(integer $AudioTime) Set Audio duration (s)
 */
class RecordUsage extends AbstractModel
{
    /**
     * @var string Time point for the statistics, e.g., `2020-09-07` or `2020-09-07 00:05:05`
     */
    public $TimeKey;

    /**
     * @var integer SD video duration (s)
     */
    public $Class1VideoTime;

    /**
     * @var integer HD video duration (s)
     */
    public $Class2VideoTime;

    /**
     * @var integer FHD video duration (s)
     */
    public $Class3VideoTime;

    /**
     * @var integer Audio duration (s)
     */
    public $AudioTime;

    /**
     * @param string $TimeKey Time point for the statistics, e.g., `2020-09-07` or `2020-09-07 00:05:05`
     * @param integer $Class1VideoTime SD video duration (s)
     * @param integer $Class2VideoTime HD video duration (s)
     * @param integer $Class3VideoTime FHD video duration (s)
     * @param integer $AudioTime Audio duration (s)
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("Class1VideoTime",$param) and $param["Class1VideoTime"] !== null) {
            $this->Class1VideoTime = $param["Class1VideoTime"];
        }

        if (array_key_exists("Class2VideoTime",$param) and $param["Class2VideoTime"] !== null) {
            $this->Class2VideoTime = $param["Class2VideoTime"];
        }

        if (array_key_exists("Class3VideoTime",$param) and $param["Class3VideoTime"] !== null) {
            $this->Class3VideoTime = $param["Class3VideoTime"];
        }

        if (array_key_exists("AudioTime",$param) and $param["AudioTime"] !== null) {
            $this->AudioTime = $param["AudioTime"];
        }
    }
}
