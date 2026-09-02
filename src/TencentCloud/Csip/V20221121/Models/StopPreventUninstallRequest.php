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
 * StopPreventUninstall request structure.
 *
 * @method integer getStopGlobal() Obtain <p>Whether to close global. 0: No. 1: Yes</p>
 * @method void setStopGlobal(integer $StopGlobal) Set <p>Whether to close global. 0: No. 1: Yes</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getQuuid() Obtain <p>quuid collection that is off when it is not global</p>
 * @method void setQuuid(array $Quuid) Set <p>quuid collection that is off when it is not global</p>
 */
class StopPreventUninstallRequest extends AbstractModel
{
    /**
     * @var integer <p>Whether to close global. 0: No. 1: Yes</p>
     */
    public $StopGlobal;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>quuid collection that is off when it is not global</p>
     */
    public $Quuid;

    /**
     * @param integer $StopGlobal <p>Whether to close global. 0: No. 1: Yes</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Quuid <p>quuid collection that is off when it is not global</p>
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
        if (array_key_exists("StopGlobal",$param) and $param["StopGlobal"] !== null) {
            $this->StopGlobal = $param["StopGlobal"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
