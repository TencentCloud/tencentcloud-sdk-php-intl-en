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
 * Quantity trend periodic statistical information of exposure
 *
 * @method integer getOpenCount() Obtain Number of fully open ports
 * @method void setOpenCount(integer $OpenCount) Set Number of fully open ports
 * @method integer getAclCount() Obtain Number of restricted accesses
 * @method void setAclCount(integer $AclCount) Set Number of restricted accesses
 * @method integer getCloseCount() Obtain Number of inaccessible instances
 * @method void setCloseCount(integer $CloseCount) Set Number of inaccessible instances
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 */
class ExposeTrendItem extends AbstractModel
{
    /**
     * @var integer Number of fully open ports
     */
    public $OpenCount;

    /**
     * @var integer Number of restricted accesses
     */
    public $AclCount;

    /**
     * @var integer Number of inaccessible instances
     */
    public $CloseCount;

    /**
     * @var string Date
     */
    public $Date;

    /**
     * @param integer $OpenCount Number of fully open ports
     * @param integer $AclCount Number of restricted accesses
     * @param integer $CloseCount Number of inaccessible instances
     * @param string $Date Date
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
        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("AclCount",$param) and $param["AclCount"] !== null) {
            $this->AclCount = $param["AclCount"];
        }

        if (array_key_exists("CloseCount",$param) and $param["CloseCount"] !== null) {
            $this->CloseCount = $param["CloseCount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
