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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShareUnitNodes request structure.
 *
 * @method string getUnitId() Obtain <p>Shared unit ID.</p>.
 * @method void setUnitId(string $UnitId) Set <p>Shared unit ID.</p>.
 * @method integer getOffset() Obtain <P>Offset. its value must be an integer multiple of the limit. default value: 0.</p>.
 * @method void setOffset(integer $Offset) Set <P>Offset. its value must be an integer multiple of the limit. default value: 0.</p>.
 * @method integer getLimit() Obtain <P>Limit. value range: 1–50.</p>.
 * @method void setLimit(integer $Limit) Set <P>Limit. value range: 1–50.</p>.
 * @method string getSearchKey() Obtain <p>Search keywords. supports department ID search.</p>.
 * @method void setSearchKey(string $SearchKey) Set <p>Search keywords. supports department ID search.</p>.
 */
class DescribeShareUnitNodesRequest extends AbstractModel
{
    /**
     * @var string <p>Shared unit ID.</p>.
     */
    public $UnitId;

    /**
     * @var integer <P>Offset. its value must be an integer multiple of the limit. default value: 0.</p>.
     */
    public $Offset;

    /**
     * @var integer <P>Limit. value range: 1–50.</p>.
     */
    public $Limit;

    /**
     * @var string <p>Search keywords. supports department ID search.</p>.
     */
    public $SearchKey;

    /**
     * @param string $UnitId <p>Shared unit ID.</p>.
     * @param integer $Offset <P>Offset. its value must be an integer multiple of the limit. default value: 0.</p>.
     * @param integer $Limit <P>Limit. value range: 1–50.</p>.
     * @param string $SearchKey <p>Search keywords. supports department ID search.</p>.
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
