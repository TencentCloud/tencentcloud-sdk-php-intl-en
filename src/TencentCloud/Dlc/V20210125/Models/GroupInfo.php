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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DMask user group information.
 *
 * @method integer getWorkGroupId() Obtain User group ID.
 * @method void setWorkGroupId(integer $WorkGroupId) Set User group ID.
 * @method string getStrategyType() Obtain Policy type.
 * @method void setStrategyType(string $StrategyType) Set Policy type.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var integer User group ID.
     */
    public $WorkGroupId;

    /**
     * @var string Policy type.
     */
    public $StrategyType;

    /**
     * @param integer $WorkGroupId User group ID.
     * @param string $StrategyType Policy type.
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }
    }
}
