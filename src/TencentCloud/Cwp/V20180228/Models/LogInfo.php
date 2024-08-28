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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log details
 *
 * @method string getContent() Obtain JSON serialized string of the log content
 * @method void setContent(string $Content) Set JSON serialized string of the log content
 * @method string getFileName() Obtain Log file name
 * @method void setFileName(string $FileName) Set Log file name
 * @method string getSource() Obtain Log source IP address
 * @method void setSource(string $Source) Set Log source IP address
 * @method integer getTimeStamp() Obtain Log time, in milliseconds
 * @method void setTimeStamp(integer $TimeStamp) Set Log time, in milliseconds
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string JSON serialized string of the log content
     */
    public $Content;

    /**
     * @var string Log file name
     */
    public $FileName;

    /**
     * @var string Log source IP address
     */
    public $Source;

    /**
     * @var integer Log time, in milliseconds
     */
    public $TimeStamp;

    /**
     * @param string $Content JSON serialized string of the log content
     * @param string $FileName Log file name
     * @param string $Source Log source IP address
     * @param integer $TimeStamp Log time, in milliseconds
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
