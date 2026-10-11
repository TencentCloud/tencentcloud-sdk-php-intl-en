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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation log description.
 *
 * @method integer getInstanceId() Obtain <p>EMR instance ID.</p>
 * @method void setInstanceId(integer $InstanceId) Set <p>EMR instance ID.</p>
 * @method string getOperation() Obtain <p>Operation name.</p>
 * @method void setOperation(string $Operation) Set <p>Operation name.</p>
 * @method integer getOperationType() Obtain <p>Operation type.</p>
 * @method void setOperationType(integer $OperationType) Set <p>Operation type.</p>
 * @method integer getUserType() Obtain <p>User type.</p>
 * @method void setUserType(integer $UserType) Set <p>User type.</p>
 * @method string getOperator() Obtain <p>Operator.</p>
 * @method void setOperator(string $Operator) Set <p>Operator.</p>
 * @method string getCreateTime() Obtain <p>Operation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Operation time.</p>
 * @method string getOperand() Obtain <p>Operation object.</p>
 * @method void setOperand(string $Operand) Set <p>Operation object.</p>
 * @method string getOperationDesc() Obtain <p>Operation details.</p>
 * @method void setOperationDesc(string $OperationDesc) Set <p>Operation details.</p>
 * @method string getSecurityLevel() Obtain <p>Security level.</p>
 * @method void setSecurityLevel(string $SecurityLevel) Set <p>Security level.</p>
 * @method string getOperatorName() Obtain <p>Operator name.</p>
 * @method void setOperatorName(string $OperatorName) Set <p>Operator name.</p>
 */
class OperationLog extends AbstractModel
{
    /**
     * @var integer <p>EMR instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Operation name.</p>
     */
    public $Operation;

    /**
     * @var integer <p>Operation type.</p>
     */
    public $OperationType;

    /**
     * @var integer <p>User type.</p>
     */
    public $UserType;

    /**
     * @var string <p>Operator.</p>
     */
    public $Operator;

    /**
     * @var string <p>Operation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Operation object.</p>
     */
    public $Operand;

    /**
     * @var string <p>Operation details.</p>
     */
    public $OperationDesc;

    /**
     * @var string <p>Security level.</p>
     */
    public $SecurityLevel;

    /**
     * @var string <p>Operator name.</p>
     */
    public $OperatorName;

    /**
     * @param integer $InstanceId <p>EMR instance ID.</p>
     * @param string $Operation <p>Operation name.</p>
     * @param integer $OperationType <p>Operation type.</p>
     * @param integer $UserType <p>User type.</p>
     * @param string $Operator <p>Operator.</p>
     * @param string $CreateTime <p>Operation time.</p>
     * @param string $Operand <p>Operation object.</p>
     * @param string $OperationDesc <p>Operation details.</p>
     * @param string $SecurityLevel <p>Security level.</p>
     * @param string $OperatorName <p>Operator name.</p>
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Operand",$param) and $param["Operand"] !== null) {
            $this->Operand = $param["Operand"];
        }

        if (array_key_exists("OperationDesc",$param) and $param["OperationDesc"] !== null) {
            $this->OperationDesc = $param["OperationDesc"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }
    }
}
