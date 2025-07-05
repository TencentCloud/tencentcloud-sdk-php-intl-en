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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAttachedGroupPolicies request structure.
 *
 * @method integer getTargetGroupId() Obtain User group ID
 * @method void setTargetGroupId(integer $TargetGroupId) Set User group ID
 * @method integer getPage() Obtain Page number, which starts from 1. Default is 1
 * @method void setPage(integer $Page) Set Page number, which starts from 1. Default is 1
 * @method integer getRp() Obtain Number of entries per page; 20 by default
 * @method void setRp(integer $Rp) Set Number of entries per page; 20 by default
 * @method string getKeyword() Obtain Search by keyword
 * @method void setKeyword(string $Keyword) Set Search by keyword
 */
class ListAttachedGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var integer User group ID
     */
    public $TargetGroupId;

    /**
     * @var integer Page number, which starts from 1. Default is 1
     */
    public $Page;

    /**
     * @var integer Number of entries per page; 20 by default
     */
    public $Rp;

    /**
     * @var string Search by keyword
     */
    public $Keyword;

    /**
     * @param integer $TargetGroupId User group ID
     * @param integer $Page Page number, which starts from 1. Default is 1
     * @param integer $Rp Number of entries per page; 20 by default
     * @param string $Keyword Search by keyword
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
