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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Temp download URL for the report PDF
 *
 * @method string getURL() Obtain Temp download URL for the report
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setURL(string $URL) Set Temp download URL for the report
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLogId() Obtain Task report ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLogId(string $LogId) Set Task report ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskLogName() Obtain Task report name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskLogName(string $TaskLogName) Set Task report name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain APP ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set APP ID
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class TaskLogURL extends AbstractModel
{
    /**
     * @var string Temp download URL for the report
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $URL;

    /**
     * @var string Task report ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LogId;

    /**
     * @var string Task report name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskLogName;

    /**
     * @var string APP ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @param string $URL Temp download URL for the report
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LogId Task report ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskLogName Task report name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AppId APP ID
Note: This field may return·null, indicating that no valid values can be obtained.
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
