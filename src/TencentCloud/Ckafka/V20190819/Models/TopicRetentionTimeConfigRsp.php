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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information returned for topic message retention time configuration
 *
 * @method integer getExpect() Obtain Expected value, the message retention period (in minutes) set by user configuration.
 * @method void setExpect(integer $Expect) Set Expected value, the message retention period (in minutes) set by user configuration.
 * @method integer getCurrent() Obtain Current value, which is the current effective value (may contain dynamic adjustment in minutes).
 * @method void setCurrent(integer $Current) Set Current value, which is the current effective value (may contain dynamic adjustment in minutes).
 * @method integer getModTimeStamp() Obtain Last modified time.
 * @method void setModTimeStamp(integer $ModTimeStamp) Set Last modified time.
 */
class TopicRetentionTimeConfigRsp extends AbstractModel
{
    /**
     * @var integer Expected value, the message retention period (in minutes) set by user configuration.
     */
    public $Expect;

    /**
     * @var integer Current value, which is the current effective value (may contain dynamic adjustment in minutes).
     */
    public $Current;

    /**
     * @var integer Last modified time.
     */
    public $ModTimeStamp;

    /**
     * @param integer $Expect Expected value, the message retention period (in minutes) set by user configuration.
     * @param integer $Current Current value, which is the current effective value (may contain dynamic adjustment in minutes).
     * @param integer $ModTimeStamp Last modified time.
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
        if (array_key_exists("Expect",$param) and $param["Expect"] !== null) {
            $this->Expect = $param["Expect"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }

        if (array_key_exists("ModTimeStamp",$param) and $param["ModTimeStamp"] !== null) {
            $this->ModTimeStamp = $param["ModTimeStamp"];
        }
    }
}
