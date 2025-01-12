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
 * 
 *
 * @method string getTransferFunctionName() Obtain 
 * @method void setTransferFunctionName(string $TransferFunctionName) Set 
 * @method string getTransferFunctionDesc() Obtain 
 * @method void setTransferFunctionDesc(string $TransferFunctionDesc) Set 
 * @method integer getTransferSkillGroupId() Obtain 
 * @method void setTransferSkillGroupId(integer $TransferSkillGroupId) Set 
 */
class AITransferItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $TransferFunctionName;

    /**
     * @var string 
     */
    public $TransferFunctionDesc;

    /**
     * @var integer 
     */
    public $TransferSkillGroupId;

    /**
     * @param string $TransferFunctionName 
     * @param string $TransferFunctionDesc 
     * @param integer $TransferSkillGroupId 
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
