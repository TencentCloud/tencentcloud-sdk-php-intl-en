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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskDnsPolicyStatus request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getIsEnabled() Obtain Whether effective [0: effective,1: not effective]
 * @method void setIsEnabled(integer $IsEnabled) Set Whether effective [0: effective,1: not effective]
 */
class ModifyRiskDnsPolicyStatusRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Whether effective [0: effective,1: not effective]
     */
    public $IsEnabled;

    /**
     * @param integer $PolicyId Policy ID
     * @param integer $IsEnabled Whether effective [0: effective,1: not effective]
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }
    }
}
