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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEKYCWebhooks request structure.
 *
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0</p><p>Value range: [0, 100]</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0</p><p>Value range: [0, 100]</p>
 * @method integer getLimit() Obtain <p>Number of results per page. Default value: 20. Maximum value: 100 (automatically truncated to 100 if exceeded)</p><p>Value range: [20, 100]</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page. Default value: 20. Maximum value: 100 (automatically truncated to 100 if exceeded)</p><p>Value range: [20, 100]</p>
 */
class ListEKYCWebhooksRequest extends AbstractModel
{
    /**
     * @var integer <p>Paging offset. Default value: 0</p><p>Value range: [0, 100]</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page. Default value: 20. Maximum value: 100 (automatically truncated to 100 if exceeded)</p><p>Value range: [20, 100]</p>
     */
    public $Limit;

    /**
     * @param integer $Offset <p>Paging offset. Default value: 0</p><p>Value range: [0, 100]</p>
     * @param integer $Limit <p>Number of results per page. Default value: 20. Maximum value: 100 (automatically truncated to 100 if exceeded)</p><p>Value range: [20, 100]</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
