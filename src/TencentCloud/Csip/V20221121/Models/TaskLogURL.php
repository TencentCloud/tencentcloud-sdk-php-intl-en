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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Temp download URL for the report PDF
 *
 * @method string getURL() Obtain Temporary Link for Report Download
 * @method void setURL(string $URL) Set Temporary Link for Report Download
 * @method string getLogId() Obtain Task Report ID
 * @method void setLogId(string $LogId) Set Task Report ID
 * @method string getTaskLogName() Obtain Task Report Name
 * @method void setTaskLogName(string $TaskLogName) Set Task Report Name
 * @method string getAppId() Obtain APP ID
 * @method void setAppId(string $AppId) Set APP ID
 */
class TaskLogURL extends AbstractModel
{
    /**
     * @var string Temporary Link for Report Download
     */
    public $URL;

    /**
     * @var string Task Report ID
     */
    public $LogId;

    /**
     * @var string Task Report Name
     */
    public $TaskLogName;

    /**
     * @var string APP ID
     */
    public $AppId;

    /**
     * @param string $URL Temporary Link for Report Download
     * @param string $LogId Task Report ID
     * @param string $TaskLogName Task Report Name
     * @param string $AppId APP ID
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TaskLogName",$param) and $param["TaskLogName"] !== null) {
            $this->TaskLogName = $param["TaskLogName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
