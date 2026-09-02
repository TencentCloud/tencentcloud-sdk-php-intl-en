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
 * Dspm account statistics
 *
 * @method integer getUinAccountCount() Obtain Number of cloud accounts
 * @method void setUinAccountCount(integer $UinAccountCount) Set Number of cloud accounts
 * @method integer getPersonCount() Obtain Guest account count
 * @method void setPersonCount(integer $PersonCount) Set Guest account count
 * @method integer getUncontrolledAccountCount() Obtain Number of unmanaged accounts
 * @method void setUncontrolledAccountCount(integer $UncontrolledAccountCount) Set Number of unmanaged accounts
 * @method integer getTotalAccountCount() Obtain Total number of accounts
 * @method void setTotalAccountCount(integer $TotalAccountCount) Set Total number of accounts
 */
class DspmAccountCount extends AbstractModel
{
    /**
     * @var integer Number of cloud accounts
     */
    public $UinAccountCount;

    /**
     * @var integer Guest account count
     */
    public $PersonCount;

    /**
     * @var integer Number of unmanaged accounts
     */
    public $UncontrolledAccountCount;

    /**
     * @var integer Total number of accounts
     */
    public $TotalAccountCount;

    /**
     * @param integer $UinAccountCount Number of cloud accounts
     * @param integer $PersonCount Guest account count
     * @param integer $UncontrolledAccountCount Number of unmanaged accounts
     * @param integer $TotalAccountCount Total number of accounts
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
        if (array_key_exists("UinAccountCount",$param) and $param["UinAccountCount"] !== null) {
            $this->UinAccountCount = $param["UinAccountCount"];
        }

        if (array_key_exists("PersonCount",$param) and $param["PersonCount"] !== null) {
            $this->PersonCount = $param["PersonCount"];
        }

        if (array_key_exists("UncontrolledAccountCount",$param) and $param["UncontrolledAccountCount"] !== null) {
            $this->UncontrolledAccountCount = $param["UncontrolledAccountCount"];
        }

        if (array_key_exists("TotalAccountCount",$param) and $param["TotalAccountCount"] !== null) {
            $this->TotalAccountCount = $param["TotalAccountCount"];
        }
    }
}
