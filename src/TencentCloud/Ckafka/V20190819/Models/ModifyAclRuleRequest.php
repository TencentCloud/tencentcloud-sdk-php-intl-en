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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAclRule request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id.
 * @method string getRuleName() Obtain ACL rule name.
 * @method void setRuleName(string $RuleName) Set ACL rule name.
 * @method integer getIsApplied() Obtain Specifies whether to apply to newly-added topics when importing predefined rule modifications.
 * @method void setIsApplied(integer $IsApplied) Set Specifies whether to apply to newly-added topics when importing predefined rule modifications.
 */
class ModifyAclRuleRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id.
     */
    public $InstanceId;

    /**
     * @var string ACL rule name.
     */
    public $RuleName;

    /**
     * @var integer Specifies whether to apply to newly-added topics when importing predefined rule modifications.
     */
    public $IsApplied;

    /**
     * @param string $InstanceId The ckafka cluster instance Id.
     * @param string $RuleName ACL rule name.
     * @param integer $IsApplied Specifies whether to apply to newly-added topics when importing predefined rule modifications.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("IsApplied",$param) and $param["IsApplied"] !== null) {
            $this->IsApplied = $param["IsApplied"];
        }
    }
}
