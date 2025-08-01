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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lock Acquisition Status: Whether to Grab the Lock and Current Lock Holder
 *
 * @method boolean getIsRob() Obtain Whether to Grab the Lock
 * @method void setIsRob(boolean $IsRob) Set Whether to Grab the Lock
 * @method string getLocker() Obtain Current Lock Holder
 * @method void setLocker(string $Locker) Set Current Lock Holder
 */
class RobLockState extends AbstractModel
{
    /**
     * @var boolean Whether to Grab the Lock
     */
    public $IsRob;

    /**
     * @var string Current Lock Holder
     */
    public $Locker;

    /**
     * @param boolean $IsRob Whether to Grab the Lock
     * @param string $Locker Current Lock Holder
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
        if (array_key_exists("IsRob",$param) and $param["IsRob"] !== null) {
            $this->IsRob = $param["IsRob"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }
    }
}
