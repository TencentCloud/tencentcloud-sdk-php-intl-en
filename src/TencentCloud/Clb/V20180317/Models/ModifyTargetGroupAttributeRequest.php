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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttribute request structure.
 *
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method string getTargetGroupName() Obtain New name of target group
 * @method void setTargetGroupName(string $TargetGroupName) Set New name of target group
 * @method integer getPort() Obtain New default port of target group
 * @method void setPort(integer $Port) Set New default port of target group
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var string New name of target group
     */
    public $TargetGroupName;

    /**
     * @var integer New default port of target group
     */
    public $Port;

    /**
     * @param string $TargetGroupId Target group ID
     * @param string $TargetGroupName New name of target group
     * @param integer $Port New default port of target group
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

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
