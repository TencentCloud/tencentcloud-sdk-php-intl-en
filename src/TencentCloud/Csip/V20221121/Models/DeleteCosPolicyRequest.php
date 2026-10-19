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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCosPolicy request structure.
 *
 * @method array getPolicyIdSet() Obtain Collection of policies to delete
 * @method void setPolicyIdSet(array $PolicyIdSet) Set Collection of policies to delete
 * @method integer getIsDeleteAll() Obtain Delete all or not
 * @method void setIsDeleteAll(integer $IsDeleteAll) Set Delete all or not
 */
class DeleteCosPolicyRequest extends AbstractModel
{
    /**
     * @var array Collection of policies to delete
     */
    public $PolicyIdSet;

    /**
     * @var integer Delete all or not
     */
    public $IsDeleteAll;

    /**
     * @param array $PolicyIdSet Collection of policies to delete
     * @param integer $IsDeleteAll Delete all or not
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
        if (array_key_exists("PolicyIdSet",$param) and $param["PolicyIdSet"] !== null) {
            $this->PolicyIdSet = $param["PolicyIdSet"];
        }

        if (array_key_exists("IsDeleteAll",$param) and $param["IsDeleteAll"] !== null) {
            $this->IsDeleteAll = $param["IsDeleteAll"];
        }
    }
}
