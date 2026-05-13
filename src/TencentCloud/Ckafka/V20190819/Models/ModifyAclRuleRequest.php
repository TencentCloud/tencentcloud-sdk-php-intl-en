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
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getRuleName() Obtain <p>ACL rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>ACL rule name</p>
 * @method integer getIsApplied() Obtain <p>Input when modifying the preset rule, whether to apply to newly-added topics</p><p>Enumeration value:</p><ul><li>0: Not allowed to apply to newly-added topics</li><li>1: Allowed to apply to newly-added topics</li></ul><p>Default value: 0</p>
 * @method void setIsApplied(integer $IsApplied) Set <p>Input when modifying the preset rule, whether to apply to newly-added topics</p><p>Enumeration value:</p><ul><li>0: Not allowed to apply to newly-added topics</li><li>1: Allowed to apply to newly-added topics</li></ul><p>Default value: 0</p>
 */
class ModifyAclRuleRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>ACL rule name</p>
     */
    public $RuleName;

    /**
     * @var integer <p>Input when modifying the preset rule, whether to apply to newly-added topics</p><p>Enumeration value:</p><ul><li>0: Not allowed to apply to newly-added topics</li><li>1: Allowed to apply to newly-added topics</li></ul><p>Default value: 0</p>
     */
    public $IsApplied;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $RuleName <p>ACL rule name</p>
     * @param integer $IsApplied <p>Input when modifying the preset rule, whether to apply to newly-added topics</p><p>Enumeration value:</p><ul><li>0: Not allowed to apply to newly-added topics</li><li>1: Allowed to apply to newly-added topics</li></ul><p>Default value: 0</p>
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
