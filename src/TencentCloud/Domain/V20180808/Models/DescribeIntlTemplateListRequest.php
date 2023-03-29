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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntlTemplateList request structure.
 *
 * @method integer getOffset() Obtain The offset.
 * @method void setOffset(integer $Offset) Set The offset.
 * @method integer getLimit() Obtain The maximum number of entries.
 * @method void setLimit(integer $Limit) Set The maximum number of entries.
 * @method string getKeyword() Obtain The domain registrant keyword for exact match.
 * @method void setKeyword(string $Keyword) Set The domain registrant keyword for exact match.
 * @method string getType() Obtain The type. Valid values: `all` (all types), `I` (individual), `E` (organization).
 * @method void setType(string $Type) Set The type. Valid values: `all` (all types), `I` (individual), `E` (organization).
 */
class DescribeIntlTemplateListRequest extends AbstractModel
{
    /**
     * @var integer The offset.
     */
    public $Offset;

    /**
     * @var integer The maximum number of entries.
     */
    public $Limit;

    /**
     * @var string The domain registrant keyword for exact match.
     */
    public $Keyword;

    /**
     * @var string The type. Valid values: `all` (all types), `I` (individual), `E` (organization).
     */
    public $Type;

    /**
     * @param integer $Offset The offset.
     * @param integer $Limit The maximum number of entries.
     * @param string $Keyword The domain registrant keyword for exact match.
     * @param string $Type The type. Valid values: `all` (all types), `I` (individual), `E` (organization).
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
