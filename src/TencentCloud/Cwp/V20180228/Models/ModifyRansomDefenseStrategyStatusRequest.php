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
 * ModifyRansomDefenseStrategyStatus request structure.
 *
 * @method integer getIsAll() Obtain Apply to all policies: 0 No, 1 Yes.
 * @method void setIsAll(integer $IsAll) Set Apply to all policies: 0 No, 1 Yes.
 * @method integer getStatus() Obtain 0 for Off, 1 for On, 9 for Delete
 * @method void setStatus(integer $Status) Set 0 for Off, 1 for On, 9 for Delete
 * @method array getIdList() Obtain Policy ID List
 * @method void setIdList(array $IdList) Set Policy ID List
 */
class ModifyRansomDefenseStrategyStatusRequest extends AbstractModel
{
    /**
     * @var integer Apply to all policies: 0 No, 1 Yes.
     */
    public $IsAll;

    /**
     * @var integer 0 for Off, 1 for On, 9 for Delete
     */
    public $Status;

    /**
     * @var array Policy ID List
     */
    public $IdList;

    /**
     * @param integer $IsAll Apply to all policies: 0 No, 1 Yes.
     * @param integer $Status 0 for Off, 1 for On, 9 for Delete
     * @param array $IdList Policy ID List
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }
    }
}
