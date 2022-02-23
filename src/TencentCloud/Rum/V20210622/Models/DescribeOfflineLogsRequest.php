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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOfflineLogs request structure.
 *
 * @method string getProjectKey() Obtain Unique project key for reporting
 * @method void setProjectKey(string $ProjectKey) Set Unique project key for reporting
 * @method array getFileIDs() Obtain List of offline log file IDs
 * @method void setFileIDs(array $FileIDs) Set List of offline log file IDs
 */
class DescribeOfflineLogsRequest extends AbstractModel
{
    /**
     * @var string Unique project key for reporting
     */
    public $ProjectKey;

    /**
     * @var array List of offline log file IDs
     */
    public $FileIDs;

    /**
     * @param string $ProjectKey Unique project key for reporting
     * @param array $FileIDs List of offline log file IDs
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
        if (array_key_exists("ProjectKey",$param) and $param["ProjectKey"] !== null) {
            $this->ProjectKey = $param["ProjectKey"];
        }

        if (array_key_exists("FileIDs",$param) and $param["FileIDs"] !== null) {
            $this->FileIDs = $param["FileIDs"];
        }
    }
}
