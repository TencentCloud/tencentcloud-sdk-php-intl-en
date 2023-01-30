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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security log alert message
 *
 * @method string getMsgType() Obtain Alert type
 * @method void setMsgType(string $MsgType) Set Alert type
 * @method string getMsgValue() Obtain Alert value
 * @method void setMsgValue(string $MsgValue) Set Alert value
 * @method boolean getState() Obtain Status. Valid values: `0` (disabled); `1` (enabled).
 * @method void setState(boolean $State) Set Status. Valid values: `0` (disabled); `1` (enabled).
 */
class SecLogAlertMsgInfo extends AbstractModel
{
    /**
     * @var string Alert type
     */
    public $MsgType;

    /**
     * @var string Alert value
     */
    public $MsgValue;

    /**
     * @var boolean Status. Valid values: `0` (disabled); `1` (enabled).
     */
    public $State;

    /**
     * @param string $MsgType Alert type
     * @param string $MsgValue Alert value
     * @param boolean $State Status. Valid values: `0` (disabled); `1` (enabled).
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
        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("MsgValue",$param) and $param["MsgValue"] !== null) {
            $this->MsgValue = $param["MsgValue"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
