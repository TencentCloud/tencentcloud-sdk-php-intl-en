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
 * BatchCreateAcl request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getResourceType() Obtain ACL resource type. Default value: `2` (topic).
 * @method void setResourceType(integer $ResourceType) Set ACL resource type. Default value: `2` (topic).
 * @method array getResourceNames() Obtain Resource list array.
 * @method void setResourceNames(array $ResourceNames) Set Resource list array.
 * @method array getRuleList() Obtain ACL rule list.
 * @method void setRuleList(array $RuleList) Set ACL rule list.
 */
class BatchCreateAclRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer ACL resource type. Default value: `2` (topic).
     */
    public $ResourceType;

    /**
     * @var array Resource list array.
     */
    public $ResourceNames;

    /**
     * @var array ACL rule list.
     */
    public $RuleList;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $ResourceType ACL resource type. Default value: `2` (topic).
     * @param array $ResourceNames Resource list array.
     * @param array $RuleList ACL rule list.
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceNames",$param) and $param["ResourceNames"] !== null) {
            $this->ResourceNames = $param["ResourceNames"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new AclRuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }
    }
}
