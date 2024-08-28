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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWarningHostConfig request structure.
 *
 * @method integer getType() Obtain Alarm type
 * @method void setType(integer $Type) Set Alarm type
 * @method integer getLimit() Obtain Limit per Page, 0 for no paging.
 * @method void setLimit(integer $Limit) Set Limit per Page, 0 for no paging.
 * @method integer getOffset() Obtain Pagination offset. The default is 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. The default is 0.
 */
class DescribeWarningHostConfigRequest extends AbstractModel
{
    /**
     * @var integer Alarm type
     */
    public $Type;

    /**
     * @var integer Limit per Page, 0 for no paging.
     */
    public $Limit;

    /**
     * @var integer Pagination offset. The default is 0.
     */
    public $Offset;

    /**
     * @param integer $Type Alarm type
     * @param integer $Limit Limit per Page, 0 for no paging.
     * @param integer $Offset Pagination offset. The default is 0.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
