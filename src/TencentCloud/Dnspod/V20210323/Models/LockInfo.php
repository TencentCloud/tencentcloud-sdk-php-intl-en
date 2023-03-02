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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain lock information
 *
 * @method integer getDomainId() Obtain Domain ID
 * @method void setDomainId(integer $DomainId) Set Domain ID
 * @method string getLockCode() Obtain Domain unlock code
 * @method void setLockCode(string $LockCode) Set Domain unlock code
 * @method string getLockEnd() Obtain Automatic unlock date of the domain
 * @method void setLockEnd(string $LockEnd) Set Automatic unlock date of the domain
 */
class LockInfo extends AbstractModel
{
    /**
     * @var integer Domain ID
     */
    public $DomainId;

    /**
     * @var string Domain unlock code
     */
    public $LockCode;

    /**
     * @var string Automatic unlock date of the domain
     */
    public $LockEnd;

    /**
     * @param integer $DomainId Domain ID
     * @param string $LockCode Domain unlock code
     * @param string $LockEnd Automatic unlock date of the domain
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("LockCode",$param) and $param["LockCode"] !== null) {
            $this->LockCode = $param["LockCode"];
        }

        if (array_key_exists("LockEnd",$param) and $param["LockEnd"] !== null) {
            $this->LockEnd = $param["LockEnd"];
        }
    }
}
