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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag retention rule
 *
 * @method string getKey() Obtain Supported policy. Valid values: latestPushedK: Retain the latest specified number of pushed tags; nDaysSinceLastPush: Retain the tags pushed in the past specified number of days.
 * @method void setKey(string $Key) Set Supported policy. Valid values: latestPushedK: Retain the latest specified number of pushed tags; nDaysSinceLastPush: Retain the tags pushed in the past specified number of days.
 * @method integer getValue() Obtain Rule value
 * @method void setValue(integer $Value) Set Rule value
 */
class RetentionRule extends AbstractModel
{
    /**
     * @var string Supported policy. Valid values: latestPushedK: Retain the latest specified number of pushed tags; nDaysSinceLastPush: Retain the tags pushed in the past specified number of days.
     */
    public $Key;

    /**
     * @var integer Rule value
     */
    public $Value;

    /**
     * @param string $Key Supported policy. Valid values: latestPushedK: Retain the latest specified number of pushed tags; nDaysSinceLastPush: Retain the tags pushed in the past specified number of days.
     * @param integer $Value Rule value
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
