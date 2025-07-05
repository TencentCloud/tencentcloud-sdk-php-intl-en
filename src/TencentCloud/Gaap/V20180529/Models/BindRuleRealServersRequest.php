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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindRuleRealServers request structure.
 *
 * @method string getRuleId() Obtain Forwarding rule ID
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID
 * @method array getRealServerBindSet() Obtain An information list of the origin servers to bind.
If there are origin servers bound already, they will be replaced by this new origin server list.
If this field is empty, it indicates unbinding all origin servers of this rule.
If the origin server scheduling policy type of this rule is weighted round robin, you need to enter `RealServerWeight`, i.e., the origin server weight. If this field is left empty or for other scheduling types, the default origin server weight is 1.
 * @method void setRealServerBindSet(array $RealServerBindSet) Set An information list of the origin servers to bind.
If there are origin servers bound already, they will be replaced by this new origin server list.
If this field is empty, it indicates unbinding all origin servers of this rule.
If the origin server scheduling policy type of this rule is weighted round robin, you need to enter `RealServerWeight`, i.e., the origin server weight. If this field is left empty or for other scheduling types, the default origin server weight is 1.
 */
class BindRuleRealServersRequest extends AbstractModel
{
    /**
     * @var string Forwarding rule ID
     */
    public $RuleId;

    /**
     * @var array An information list of the origin servers to bind.
If there are origin servers bound already, they will be replaced by this new origin server list.
If this field is empty, it indicates unbinding all origin servers of this rule.
If the origin server scheduling policy type of this rule is weighted round robin, you need to enter `RealServerWeight`, i.e., the origin server weight. If this field is left empty or for other scheduling types, the default origin server weight is 1.
     */
    public $RealServerBindSet;

    /**
     * @param string $RuleId Forwarding rule ID
     * @param array $RealServerBindSet An information list of the origin servers to bind.
If there are origin servers bound already, they will be replaced by this new origin server list.
If this field is empty, it indicates unbinding all origin servers of this rule.
If the origin server scheduling policy type of this rule is weighted round robin, you need to enter `RealServerWeight`, i.e., the origin server weight. If this field is left empty or for other scheduling types, the default origin server weight is 1.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RealServerBindSet",$param) and $param["RealServerBindSet"] !== null) {
            $this->RealServerBindSet = [];
            foreach ($param["RealServerBindSet"] as $key => $value){
                $obj = new RealServerBindSetReq();
                $obj->deserialize($value);
                array_push($this->RealServerBindSet, $obj);
            }
        }
    }
}
