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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Warning conditions of the assessment item
 *
 * @method integer getConditionId() Obtain Warning condition ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConditionId(integer $ConditionId) Set Warning condition ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Warning level. 2: medium risk; 3: high risk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Warning level. 2: medium risk; 3: high risk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevelDesc() Obtain Warning level description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevelDesc(string $LevelDesc) Set Warning level description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain Warning condition description
 * @method void setDesc(string $Desc) Set Warning condition description
 */
class Conditions extends AbstractModel
{
    /**
     * @var integer Warning condition ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConditionId;

    /**
     * @var integer Warning level. 2: medium risk; 3: high risk.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Warning level description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LevelDesc;

    /**
     * @var string Warning condition description
     */
    public $Desc;

    /**
     * @param integer $ConditionId Warning condition ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Warning level. 2: medium risk; 3: high risk.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LevelDesc Warning level description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Warning condition description
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
        if (array_key_exists("ConditionId",$param) and $param["ConditionId"] !== null) {
            $this->ConditionId = $param["ConditionId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelDesc",$param) and $param["LevelDesc"] !== null) {
            $this->LevelDesc = $param["LevelDesc"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
