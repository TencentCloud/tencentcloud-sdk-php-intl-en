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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User behavior overview
 *
 * @method array getBehaviorInfo() Obtain Specific user behavior data for rendering a line chart
 * @method void setBehaviorInfo(array $BehaviorInfo) Set Specific user behavior data for rendering a line chart
 * @method integer getAbnormalCount() Obtain Number of abnormal behaviors
 * @method void setAbnormalCount(integer $AbnormalCount) Set Number of abnormal behaviors
 * @method boolean getIsAccess() Obtain Whether to access
 * @method void setIsAccess(boolean $IsAccess) Set Whether to access
 */
class BehaviorSummary extends AbstractModel
{
    /**
     * @var array Specific user behavior data for rendering a line chart
     */
    public $BehaviorInfo;

    /**
     * @var integer Number of abnormal behaviors
     */
    public $AbnormalCount;

    /**
     * @var boolean Whether to access
     */
    public $IsAccess;

    /**
     * @param array $BehaviorInfo Specific user behavior data for rendering a line chart
     * @param integer $AbnormalCount Number of abnormal behaviors
     * @param boolean $IsAccess Whether to access
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
        if (array_key_exists("BehaviorInfo",$param) and $param["BehaviorInfo"] !== null) {
            $this->BehaviorInfo = [];
            foreach ($param["BehaviorInfo"] as $key => $value){
                $obj = new BehaviorInfo();
                $obj->deserialize($value);
                array_push($this->BehaviorInfo, $obj);
            }
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }

        if (array_key_exists("IsAccess",$param) and $param["IsAccess"] !== null) {
            $this->IsAccess = $param["IsAccess"];
        }
    }
}
