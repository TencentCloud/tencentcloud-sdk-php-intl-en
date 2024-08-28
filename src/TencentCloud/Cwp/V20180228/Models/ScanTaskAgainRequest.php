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
 * ScanTaskAgain request structure.
 *
 * @method string getModuleType() Obtain Module type. Currently supported values: Malware: Trojan; Vul: vulnerability; Baseline: baseline.
 * @method void setModuleType(string $ModuleType) Set Module type. Currently supported values: Malware: Trojan; Vul: vulnerability; Baseline: baseline.
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method array getQuuidList() Obtain String array of host QUUIDs. This parameter is effective for selected servers.
 * @method void setQuuidList(array $QuuidList) Set String array of host QUUIDs. This parameter is effective for selected servers.
 * @method integer getTimeoutPeriod() Obtain Scan timeout
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) Set Scan timeout
 */
class ScanTaskAgainRequest extends AbstractModel
{
    /**
     * @var string Module type. Currently supported values: Malware: Trojan; Vul: vulnerability; Baseline: baseline.
     */
    public $ModuleType;

    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var array String array of host QUUIDs. This parameter is effective for selected servers.
     */
    public $QuuidList;

    /**
     * @var integer Scan timeout
     */
    public $TimeoutPeriod;

    /**
     * @param string $ModuleType Module type. Currently supported values: Malware: Trojan; Vul: vulnerability; Baseline: baseline.
     * @param integer $TaskId Task ID
     * @param array $QuuidList String array of host QUUIDs. This parameter is effective for selected servers.
     * @param integer $TimeoutPeriod Scan timeout
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
        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }
    }
}
