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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadUserRestriction request structure.
 *
 * @method integer getLimit() Obtain Pagination size
 * @method void setLimit(integer $Limit) Set Pagination size
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method boolean getOnlyUserRestriction() Obtain Specifies whether to query only user-level download limits. true - yes, false - no.
 * @method void setOnlyUserRestriction(boolean $OnlyUserRestriction) Set Specifies whether to query only user-level download limits. true - yes, false - no.
 */
class DescribeBackupDownloadUserRestrictionRequest extends AbstractModel
{
    /**
     * @var integer Pagination size
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var boolean Specifies whether to query only user-level download limits. true - yes, false - no.
     */
    public $OnlyUserRestriction;

    /**
     * @param integer $Limit Pagination size
     * @param integer $Offset Offset.
     * @param boolean $OnlyUserRestriction Specifies whether to query only user-level download limits. true - yes, false - no.
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

        if (array_key_exists("OnlyUserRestriction",$param) and $param["OnlyUserRestriction"] !== null) {
            $this->OnlyUserRestriction = $param["OnlyUserRestriction"];
        }
    }
}
