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
 * Describe details of actions not allowed for a CHC instance
 *
 * @method string getChcId() Obtain CHC instance ID
 * @method void setChcId(string $ChcId) Set CHC instance ID
 * @method string getState() Obtain CHC instance status
 * @method void setState(string $State) Set CHC instance status
 * @method array getDenyActions() Obtain Actions not allowed for the current CHC instance
 * @method void setDenyActions(array $DenyActions) Set Actions not allowed for the current CHC instance
 */
class ChcHostDeniedActions extends AbstractModel
{
    /**
     * @var string CHC instance ID
     */
    public $ChcId;

    /**
     * @var string CHC instance status
     */
    public $State;

    /**
     * @var array Actions not allowed for the current CHC instance
     */
    public $DenyActions;

    /**
     * @param string $ChcId CHC instance ID
     * @param string $State CHC instance status
     * @param array $DenyActions Actions not allowed for the current CHC instance
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
        if (array_key_exists("ChcId",$param) and $param["ChcId"] !== null) {
            $this->ChcId = $param["ChcId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DenyActions",$param) and $param["DenyActions"] !== null) {
            $this->DenyActions = $param["DenyActions"];
        }
    }
}
