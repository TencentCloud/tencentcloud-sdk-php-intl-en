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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRebateDownloadUrl request structure.
 *
 * @method string getMonth() Obtain Month of the commission bill. Format: YYYY-MM.
 * @method void setMonth(string $Month) Set Month of the commission bill. Format: YYYY-MM.
 * @method string getFileType() Obtain Bill file type. Valid value: CommissionDetail.
 * @method void setFileType(string $FileType) Set Bill file type. Valid value: CommissionDetail.
 */
class DescribeRebateDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string Month of the commission bill. Format: YYYY-MM.
     */
    public $Month;

    /**
     * @var string Bill file type. Valid value: CommissionDetail.
     */
    public $FileType;

    /**
     * @param string $Month Month of the commission bill. Format: YYYY-MM.
     * @param string $FileType Bill file type. Valid value: CommissionDetail.
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
