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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name log information.
 *
 * @method string getStartTime() Obtain Log start time.
 * @method void setStartTime(string $StartTime) Set Log start time.
 * @method string getEndTime() Obtain Log end time.
 * @method void setEndTime(string $EndTime) Set Log end time.
 * @method string getLogPath() Obtain Log download path.
 * @method void setLogPath(string $LogPath) Set Log download path.
 */
class DomainLogs extends AbstractModel
{
    /**
     * @var string Log start time.
     */
    public $StartTime;

    /**
     * @var string Log end time.
     */
    public $EndTime;

    /**
     * @var string Log download path.
     */
    public $LogPath;

    /**
     * @param string $StartTime Log start time.
     * @param string $EndTime Log end time.
     * @param string $LogPath Log download path.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }
    }
}
