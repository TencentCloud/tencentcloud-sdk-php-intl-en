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
 * Scan Range Information
 *
 * @method boolean getIsAll() Obtain true: select all;
false: partial select
 * @method void setIsAll(boolean $IsAll) Set true: select all;
false: partial select
 * @method string getRangeType() Obtain SCAN_NORMAL: Regular node;
SCAN_SUPER: Super node
SCAN_CONTAINER: Container
 * @method void setRangeType(string $RangeType) Set SCAN_NORMAL: Regular node;
SCAN_SUPER: Super node
SCAN_CONTAINER: Container
 * @method array getIDs() Obtain Selected ID
 * @method void setIDs(array $IDs) Set Selected ID
 */
class ScanRangeInfo extends AbstractModel
{
    /**
     * @var boolean true: select all;
false: partial select
     */
    public $IsAll;

    /**
     * @var string SCAN_NORMAL: Regular node;
SCAN_SUPER: Super node
SCAN_CONTAINER: Container
     */
    public $RangeType;

    /**
     * @var array Selected ID
     */
    public $IDs;

    /**
     * @param boolean $IsAll true: select all;
false: partial select
     * @param string $RangeType SCAN_NORMAL: Regular node;
SCAN_SUPER: Super node
SCAN_CONTAINER: Container
     * @param array $IDs Selected ID
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
        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }
    }
}
