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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI to human configuration item.
 *
 * @method string getTransferFunctionName() Obtain Name of the function calling for transfer to human.
 * @method void setTransferFunctionName(string $TransferFunctionName) Set Name of the function calling for transfer to human.
 * @method string getTransferFunctionDesc() Obtain Takes effect when transferfunctionenable is true; the description of transfer_to_human function calling defaults to "transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so.".
 * @method void setTransferFunctionDesc(string $TransferFunctionDesc) Set Takes effect when transferfunctionenable is true; the description of transfer_to_human function calling defaults to "transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so.".
 * @method integer getTransferSkillGroupId() Obtain Skill group id for transferring to human agent.
 * @method void setTransferSkillGroupId(integer $TransferSkillGroupId) Set Skill group id for transferring to human agent.
 */
class AITransferItem extends AbstractModel
{
    /**
     * @var string Name of the function calling for transfer to human.
     */
    public $TransferFunctionName;

    /**
     * @var string Takes effect when transferfunctionenable is true; the description of transfer_to_human function calling defaults to "transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so.".
     */
    public $TransferFunctionDesc;

    /**
     * @var integer Skill group id for transferring to human agent.
     */
    public $TransferSkillGroupId;

    /**
     * @param string $TransferFunctionName Name of the function calling for transfer to human.
     * @param string $TransferFunctionDesc Takes effect when transferfunctionenable is true; the description of transfer_to_human function calling defaults to "transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so.".
     * @param integer $TransferSkillGroupId Skill group id for transferring to human agent.
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
        if (array_key_exists("TransferFunctionName",$param) and $param["TransferFunctionName"] !== null) {
            $this->TransferFunctionName = $param["TransferFunctionName"];
        }

        if (array_key_exists("TransferFunctionDesc",$param) and $param["TransferFunctionDesc"] !== null) {
            $this->TransferFunctionDesc = $param["TransferFunctionDesc"];
        }

        if (array_key_exists("TransferSkillGroupId",$param) and $param["TransferSkillGroupId"] !== null) {
            $this->TransferSkillGroupId = $param["TransferSkillGroupId"];
        }
    }
}
