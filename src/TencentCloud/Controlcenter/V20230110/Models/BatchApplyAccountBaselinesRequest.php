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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchApplyAccountBaselines request structure.
 *
 * @method array getMemberUinList() Obtain Member account UIN, which is also the UIN of the account to which the baseline is applied.
 * @method void setMemberUinList(array $MemberUinList) Set Member account UIN, which is also the UIN of the account to which the baseline is applied.
 * @method array getBaselineConfigItems() Obtain List of baseline item configuration information.
 * @method void setBaselineConfigItems(array $BaselineConfigItems) Set List of baseline item configuration information.
 */
class BatchApplyAccountBaselinesRequest extends AbstractModel
{
    /**
     * @var array Member account UIN, which is also the UIN of the account to which the baseline is applied.
     */
    public $MemberUinList;

    /**
     * @var array List of baseline item configuration information.
     */
    public $BaselineConfigItems;

    /**
     * @param array $MemberUinList Member account UIN, which is also the UIN of the account to which the baseline is applied.
     * @param array $BaselineConfigItems List of baseline item configuration information.
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
        if (array_key_exists("MemberUinList",$param) and $param["MemberUinList"] !== null) {
            $this->MemberUinList = $param["MemberUinList"];
        }

        if (array_key_exists("BaselineConfigItems",$param) and $param["BaselineConfigItems"] !== null) {
            $this->BaselineConfigItems = [];
            foreach ($param["BaselineConfigItems"] as $key => $value){
                $obj = new BaselineConfigItem();
                $obj->deserialize($value);
                array_push($this->BaselineConfigItems, $obj);
            }
        }
    }
}
