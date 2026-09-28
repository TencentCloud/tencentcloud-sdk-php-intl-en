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
 * Target group configuration
 *
 * @method array getTargetGroups() Obtain Target group list.
 * @method void setTargetGroups(array $TargetGroups) Set Target group list.
 * @method TargetGroupStickySession getTargetGroupStickySession() Obtain Session persistence between target groups
 * @method void setTargetGroupStickySession(TargetGroupStickySession $TargetGroupStickySession) Set Session persistence between target groups
 */
class TargetGroupConfig extends AbstractModel
{
    /**
     * @var array Target group list.
     */
    public $TargetGroups;

    /**
     * @var TargetGroupStickySession Session persistence between target groups
     */
    public $TargetGroupStickySession;

    /**
     * @param array $TargetGroups Target group list.
     * @param TargetGroupStickySession $TargetGroupStickySession Session persistence between target groups
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
        if (array_key_exists("TargetGroups",$param) and $param["TargetGroups"] !== null) {
            $this->TargetGroups = [];
            foreach ($param["TargetGroups"] as $key => $value){
                $obj = new TargetGroupTuple();
                $obj->deserialize($value);
                array_push($this->TargetGroups, $obj);
            }
        }

        if (array_key_exists("TargetGroupStickySession",$param) and $param["TargetGroupStickySession"] !== null) {
            $this->TargetGroupStickySession = new TargetGroupStickySession();
            $this->TargetGroupStickySession->deserialize($param["TargetGroupStickySession"]);
        }
    }
}
