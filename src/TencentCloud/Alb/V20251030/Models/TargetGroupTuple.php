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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic target group configuration
 *
 * @method string getTargetGroupId() Obtain Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method integer getWeight() Obtain Weight. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) Set Weight. Value range: [0, 100]. Default value: 10.
 */
class TargetGroupTuple extends AbstractModel
{
    /**
     * @var string Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     */
    public $TargetGroupId;

    /**
     * @var integer Weight. Value range: [0, 100]. Default value: 10.
     */
    public $Weight;

    /**
     * @param string $TargetGroupId Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     * @param integer $Weight Weight. Value range: [0, 100]. Default value: 10.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
