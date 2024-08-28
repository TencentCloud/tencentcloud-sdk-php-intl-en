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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeRuleEventsIgnoreStatus request structure.
 *
 * @method integer getIgnoreStatus() Obtain Ignore status: 0: unignore; 1: ignore
 * @method void setIgnoreStatus(integer $IgnoreStatus) Set Ignore status: 0: unignore; 1: ignore
 * @method array getRuleIdList() Obtain Detection item ID array
 * @method void setRuleIdList(array $RuleIdList) Set Detection item ID array
 * @method array getEventIdList() Obtain Event ID array
 * @method void setEventIdList(array $EventIdList) Set Event ID array
 */
class ChangeRuleEventsIgnoreStatusRequest extends AbstractModel
{
    /**
     * @var integer Ignore status: 0: unignore; 1: ignore
     */
    public $IgnoreStatus;

    /**
     * @var array Detection item ID array
     */
    public $RuleIdList;

    /**
     * @var array Event ID array
     */
    public $EventIdList;

    /**
     * @param integer $IgnoreStatus Ignore status: 0: unignore; 1: ignore
     * @param array $RuleIdList Detection item ID array
     * @param array $EventIdList Event ID array
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
        if (array_key_exists("IgnoreStatus",$param) and $param["IgnoreStatus"] !== null) {
            $this->IgnoreStatus = $param["IgnoreStatus"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("EventIdList",$param) and $param["EventIdList"] !== null) {
            $this->EventIdList = $param["EventIdList"];
        }
    }
}
