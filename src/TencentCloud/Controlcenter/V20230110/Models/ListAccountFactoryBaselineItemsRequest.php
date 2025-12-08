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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccountFactoryBaselineItems request structure.
 *
 * @method integer getLimit() Obtain Maximum number of returned records. value ranges from 0 to 200.
 * @method void setLimit(integer $Limit) Set Maximum number of returned records. value ranges from 0 to 200.
 * @method integer getOffset() Obtain Offset. valid values are equal to or greater than 0.
 * @method void setOffset(integer $Offset) Set Offset. valid values are equal to or greater than 0.
 */
class ListAccountFactoryBaselineItemsRequest extends AbstractModel
{
    /**
     * @var integer Maximum number of returned records. value ranges from 0 to 200.
     */
    public $Limit;

    /**
     * @var integer Offset. valid values are equal to or greater than 0.
     */
    public $Offset;

    /**
     * @param integer $Limit Maximum number of returned records. value ranges from 0 to 200.
     * @param integer $Offset Offset. valid values are equal to or greater than 0.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
