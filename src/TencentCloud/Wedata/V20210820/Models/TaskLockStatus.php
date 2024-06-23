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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task Lock Status
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getLocker() Obtain Lock Holder
 * @method void setLocker(string $Locker) Set Lock Holder
 * @method integer getIsLocker() Obtain Is the current operating user the lock holder? 1 means yes, 0 means no
 * @method void setIsLocker(integer $IsLocker) Set Is the current operating user the lock holder? 1 means yes, 0 means no
 * @method integer getIsRob() Obtain Is lock contention possible? 1 means yes, 0 means no
 * @method void setIsRob(integer $IsRob) Set Is lock contention possible? 1 means yes, 0 means no
 */
class TaskLockStatus extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Lock Holder
     */
    public $Locker;

    /**
     * @var integer Is the current operating user the lock holder? 1 means yes, 0 means no
     */
    public $IsLocker;

    /**
     * @var integer Is lock contention possible? 1 means yes, 0 means no
     */
    public $IsRob;

    /**
     * @param string $TaskId Task ID
     * @param string $Locker Lock Holder
     * @param integer $IsLocker Is the current operating user the lock holder? 1 means yes, 0 means no
     * @param integer $IsRob Is lock contention possible? 1 means yes, 0 means no
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("IsLocker",$param) and $param["IsLocker"] !== null) {
            $this->IsLocker = $param["IsLocker"];
        }

        if (array_key_exists("IsRob",$param) and $param["IsRob"] !== null) {
            $this->IsRob = $param["IsRob"];
        }
    }
}
