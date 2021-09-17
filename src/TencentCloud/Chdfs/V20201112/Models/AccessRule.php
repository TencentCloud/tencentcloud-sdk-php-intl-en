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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission rule
 *
 * @method integer getAccessRuleId() Obtain Permission rule ID
 * @method void setAccessRuleId(integer $AccessRuleId) Set Permission rule ID
 * @method string getAddress() Obtain Permission rule address (IP range or IP)
 * @method void setAddress(string $Address) Set Permission rule address (IP range or IP)
 * @method integer getAccessMode() Obtain Permission rule access mode (1: read-only; 2: read-write)
 * @method void setAccessMode(integer $AccessMode) Set Permission rule access mode (1: read-only; 2: read-write)
 * @method integer getPriority() Obtain Priority (value range: 1–100. The smaller the value, the higher the priority)
 * @method void setPriority(integer $Priority) Set Priority (value range: 1–100. The smaller the value, the higher the priority)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class AccessRule extends AbstractModel
{
    /**
     * @var integer Permission rule ID
     */
    public $AccessRuleId;

    /**
     * @var string Permission rule address (IP range or IP)
     */
    public $Address;

    /**
     * @var integer Permission rule access mode (1: read-only; 2: read-write)
     */
    public $AccessMode;

    /**
     * @var integer Priority (value range: 1–100. The smaller the value, the higher the priority)
     */
    public $Priority;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param integer $AccessRuleId Permission rule ID
     * @param string $Address Permission rule address (IP range or IP)
     * @param integer $AccessMode Permission rule access mode (1: read-only; 2: read-write)
     * @param integer $Priority Priority (value range: 1–100. The smaller the value, the higher the priority)
     * @param string $CreateTime Creation time
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
        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            $this->AccessRuleId = $param["AccessRuleId"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
