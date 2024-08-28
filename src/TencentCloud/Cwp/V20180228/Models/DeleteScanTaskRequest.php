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
 * DeleteScanTask request structure.
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method string getModuleType() Obtain Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
 * @method void setModuleType(string $ModuleType) Set Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
 * @method array getQuuidList() Obtain Effective for selected servers; a string array of host QUUIDs
 * @method void setQuuidList(array $QuuidList) Set Effective for selected servers; a string array of host QUUIDs
 */
class DeleteScanTaskRequest extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var string Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
     */
    public $ModuleType;

    /**
     * @var array Effective for selected servers; a string array of host QUUIDs
     */
    public $QuuidList;

    /**
     * @param integer $TaskId Task ID
     * @param string $ModuleType Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
     * @param array $QuuidList Effective for selected servers; a string array of host QUUIDs
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }
    }
}
