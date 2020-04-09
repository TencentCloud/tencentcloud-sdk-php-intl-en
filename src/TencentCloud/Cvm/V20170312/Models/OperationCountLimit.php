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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the maximum number of times you can perform an operation on a single instance.
 *
 * @method string getOperation() Obtain Instance operation. Valid values: <br><li>`INSTANCE_DEGRADE`: downgrade an instance<br><li>`INTERNET_CHARGE_TYPE_CHANGE`: modify the billing plan of the network connection
 * @method void setOperation(string $Operation) Set Instance operation. Valid values: <br><li>`INSTANCE_DEGRADE`: downgrade an instance<br><li>`INTERNET_CHARGE_TYPE_CHANGE`: modify the billing plan of the network connection
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getCurrentCount() Obtain Number of operations already performed. If it returns `-1`, it means there is no limit on the times of the operation.
 * @method void setCurrentCount(integer $CurrentCount) Set Number of operations already performed. If it returns `-1`, it means there is no limit on the times of the operation.
 * @method integer getLimitCount() Obtain Maximum number of times you can perform an operation. If it returns `-1`, it means there is no limit on the times of the operation. If it returns `0`, it means that configuration modification is not supported.
 * @method void setLimitCount(integer $LimitCount) Set Maximum number of times you can perform an operation. If it returns `-1`, it means there is no limit on the times of the operation. If it returns `0`, it means that configuration modification is not supported.
 */
class OperationCountLimit extends AbstractModel
{
    /**
     * @var string Instance operation. Valid values: <br><li>`INSTANCE_DEGRADE`: downgrade an instance<br><li>`INTERNET_CHARGE_TYPE_CHANGE`: modify the billing plan of the network connection
     */
    public $Operation;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Number of operations already performed. If it returns `-1`, it means there is no limit on the times of the operation.
     */
    public $CurrentCount;

    /**
     * @var integer Maximum number of times you can perform an operation. If it returns `-1`, it means there is no limit on the times of the operation. If it returns `0`, it means that configuration modification is not supported.
     */
    public $LimitCount;

    /**
     * @param string $Operation Instance operation. Valid values: <br><li>`INSTANCE_DEGRADE`: downgrade an instance<br><li>`INTERNET_CHARGE_TYPE_CHANGE`: modify the billing plan of the network connection
     * @param string $InstanceId Instance ID.
     * @param integer $CurrentCount Number of operations already performed. If it returns `-1`, it means there is no limit on the times of the operation.
     * @param integer $LimitCount Maximum number of times you can perform an operation. If it returns `-1`, it means there is no limit on the times of the operation. If it returns `0`, it means that configuration modification is not supported.
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CurrentCount",$param) and $param["CurrentCount"] !== null) {
            $this->CurrentCount = $param["CurrentCount"];
        }

        if (array_key_exists("LimitCount",$param) and $param["LimitCount"] !== null) {
            $this->LimitCount = $param["LimitCount"];
        }
    }
}
