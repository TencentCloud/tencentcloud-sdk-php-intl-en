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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrateName request structure.
 *
 * @method string getJobId() Obtain Migration task ID
 * @method void setJobId(string $JobId) Set Migration task ID
 * @method string getJobName() Obtain New migration task name
 * @method void setJobName(string $JobName) Set New migration task name
 */
class ModifyMigrateNameRequest extends AbstractModel
{
    /**
     * @var string Migration task ID
     */
    public $JobId;

    /**
     * @var string New migration task name
     */
    public $JobName;

    /**
     * @param string $JobId Migration task ID
     * @param string $JobName New migration task name
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }
    }
}
