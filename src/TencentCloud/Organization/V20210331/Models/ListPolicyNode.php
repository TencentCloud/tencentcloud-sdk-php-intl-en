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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enterprise organization policy list.
 *
 * @method string getAddTime() Obtain Policy creation time.
 * @method void setAddTime(string $AddTime) Set Policy creation time.
 * @method integer getAttachedTimes() Obtain Policy binding count.
 * @method void setAttachedTimes(integer $AttachedTimes) Set Policy binding count.
 * @method string getDescription() Obtain Policy description information.
 * @method void setDescription(string $Description) Set Policy description information.
 * @method string getPolicyName() Obtain Policy name.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getUpdateTime() Obtain Policy update time
 * @method void setUpdateTime(string $UpdateTime) Set Policy update time
 * @method integer getType() Obtain Policy type. 1: custom; 2: preset.
 * @method void setType(integer $Type) Set Policy type. 1: custom; 2: preset.
 */
class ListPolicyNode extends AbstractModel
{
    /**
     * @var string Policy creation time.
     */
    public $AddTime;

    /**
     * @var integer Policy binding count.
     */
    public $AttachedTimes;

    /**
     * @var string Policy description information.
     */
    public $Description;

    /**
     * @var string Policy name.
     */
    public $PolicyName;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy update time
     */
    public $UpdateTime;

    /**
     * @var integer Policy type. 1: custom; 2: preset.
     */
    public $Type;

    /**
     * @param string $AddTime Policy creation time.
     * @param integer $AttachedTimes Policy binding count.
     * @param string $Description Policy description information.
     * @param string $PolicyName Policy name.
     * @param integer $PolicyId Policy ID
     * @param string $UpdateTime Policy update time
     * @param integer $Type Policy type. 1: custom; 2: preset.
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
        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("AttachedTimes",$param) and $param["AttachedTimes"] !== null) {
            $this->AttachedTimes = $param["AttachedTimes"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
