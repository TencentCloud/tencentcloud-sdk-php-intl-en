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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trend of unlicensed cores
 *
 * @method string getDateTime() Obtain Date
 * @method void setDateTime(string $DateTime) Set Date
 * @method integer getCoresCount() Obtain Number of unlicensed cores
 * @method void setCoresCount(integer $CoresCount) Set Number of unlicensed cores
 */
class UnauthorizedCoresTendency extends AbstractModel
{
    /**
     * @var string Date
     */
    public $DateTime;

    /**
     * @var integer Number of unlicensed cores
     */
    public $CoresCount;

    /**
     * @param string $DateTime Date
     * @param integer $CoresCount Number of unlicensed cores
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
        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }
    }
}
