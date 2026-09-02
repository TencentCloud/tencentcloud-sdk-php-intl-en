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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEDRRulesAction request structure.
 *
 * @method array getRuleIDs() Obtain <p>Policy ID array</p>
 * @method void setRuleIDs(array $RuleIDs) Set <p>Policy ID array</p>
 * @method integer getAlertAction() Obtain <p>Target Action: 0-Alert 1-Allow 2-Alert and block</p>
 * @method void setAlertAction(integer $AlertAction) Set <p>Target Action: 0-Alert 1-Allow 2-Alert and block</p>
 * @method array getTargetAppIDs() Obtain <p>Target account AppId list</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) Set <p>Target account AppId list</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ModifyEDRRulesActionRequest extends AbstractModel
{
    /**
     * @var array <p>Policy ID array</p>
     */
    public $RuleIDs;

    /**
     * @var integer <p>Target Action: 0-Alert 1-Allow 2-Alert and block</p>
     */
    public $AlertAction;

    /**
     * @var array <p>Target account AppId list</p>
     */
    public $TargetAppIDs;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param array $RuleIDs <p>Policy ID array</p>
     * @param integer $AlertAction <p>Target Action: 0-Alert 1-Allow 2-Alert and block</p>
     * @param array $TargetAppIDs <p>Target account AppId list</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("AlertAction",$param) and $param["AlertAction"] !== null) {
            $this->AlertAction = $param["AlertAction"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
