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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Valid policy.
 *
 * @method integer getTargetId() Obtain Target ID.
 * @method void setTargetId(integer $TargetId) Set Target ID.
 * @method string getPolicyContent() Obtain Effective policy content.
 * @method void setPolicyContent(string $PolicyContent) Set Effective policy content.
 * @method integer getLastUpdatedTimestamp() Obtain Effective policy update time.
 * @method void setLastUpdatedTimestamp(integer $LastUpdatedTimestamp) Set Effective policy update time.
 */
class EffectivePolicy extends AbstractModel
{
    /**
     * @var integer Target ID.
     */
    public $TargetId;

    /**
     * @var string Effective policy content.
     */
    public $PolicyContent;

    /**
     * @var integer Effective policy update time.
     */
    public $LastUpdatedTimestamp;

    /**
     * @param integer $TargetId Target ID.
     * @param string $PolicyContent Effective policy content.
     * @param integer $LastUpdatedTimestamp Effective policy update time.
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("PolicyContent",$param) and $param["PolicyContent"] !== null) {
            $this->PolicyContent = $param["PolicyContent"];
        }

        if (array_key_exists("LastUpdatedTimestamp",$param) and $param["LastUpdatedTimestamp"] !== null) {
            $this->LastUpdatedTimestamp = $param["LastUpdatedTimestamp"];
        }
    }
}
