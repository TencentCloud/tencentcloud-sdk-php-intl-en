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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details about a log package download link
 *
 * @method string getStartTime() Obtain Starting time of the log package
 * @method void setStartTime(string $StartTime) Set Starting time of the log package
 * @method string getEndTime() Obtain End time of the log package
 * @method void setEndTime(string $EndTime) Set End time of the log package
 * @method string getLogPath() Obtain Log package download link
 * @method void setLogPath(string $LogPath) Set Log package download link
 * @method string getArea() Obtain Acceleration region corresponding to the log package
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
 * @method void setArea(string $Area) Set Acceleration region corresponding to the log package
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
 * @method string getLogName() Obtain Log package filename
 * @method void setLogName(string $LogName) Set Log package filename
 * @method integer getFileSize() Obtain File size, in bytes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFileSize(integer $FileSize) Set File size, in bytes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DomainLog extends AbstractModel
{
    /**
     * @var string Starting time of the log package
     */
    public $StartTime;

    /**
     * @var string End time of the log package
     */
    public $EndTime;

    /**
     * @var string Log package download link
     */
    public $LogPath;

    /**
     * @var string Acceleration region corresponding to the log package
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
     */
    public $Area;

    /**
     * @var string Log package filename
     */
    public $LogName;

    /**
     * @var integer File size, in bytes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FileSize;

    /**
     * @param string $StartTime Starting time of the log package
     * @param string $EndTime End time of the log package
     * @param string $LogPath Log package download link
     * @param string $Area Acceleration region corresponding to the log package
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
     * @param string $LogName Log package filename
     * @param integer $FileSize File size, in bytes.
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogName",$param) and $param["LogName"] !== null) {
            $this->LogName = $param["LogName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
