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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRule request structure.
 *
 * @method string getListenerId() Obtain Layer-7 listener ID
 * @method void setListenerId(string $ListenerId) Set Layer-7 listener ID
 * @method string getRuleId() Obtain Forwarding rule ID
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID
 * @method integer getForce() Obtain Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
 * @method void setForce(integer $Force) Set Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
 */
class DeleteRuleRequest extends AbstractModel
{
    /**
     * @var string Layer-7 listener ID
     */
    public $ListenerId;

    /**
     * @var string Forwarding rule ID
     */
    public $RuleId;

    /**
     * @var integer Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
     */
    public $Force;

    /**
     * @param string $ListenerId Layer-7 listener ID
     * @param string $RuleId Forwarding rule ID
     * @param integer $Force Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
