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
 * DeleteAutoScaleStrategy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getStrategyType() Obtain Automatic scaling rule type. 1: Scaling by load metrics; 2: Scaling by time rules.
 * @method void setStrategyType(integer $StrategyType) Set Automatic scaling rule type. 1: Scaling by load metrics; 2: Scaling by time rules.
 * @method integer getStrategyId() Obtain Rule ID.
 * @method void setStrategyId(integer $StrategyId) Set Rule ID.
 * @method integer getGroupId() Obtain Scaling group ID.
 * @method void setGroupId(integer $GroupId) Set Scaling group ID.
 */
class DeleteAutoScaleStrategyRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Automatic scaling rule type. 1: Scaling by load metrics; 2: Scaling by time rules.
     */
    public $StrategyType;

    /**
     * @var integer Rule ID.
     */
    public $StrategyId;

    /**
     * @var integer Scaling group ID.
     */
    public $GroupId;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $StrategyType Automatic scaling rule type. 1: Scaling by load metrics; 2: Scaling by time rules.
     * @param integer $StrategyId Rule ID.
     * @param integer $GroupId Scaling group ID.
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

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
