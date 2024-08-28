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
 * Basic baseline information
 *
 * @method string getName() Obtain Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBaselineId() Obtain Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBaselineId(integer $BaselineId) Set Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getParentId() Obtain Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentId(integer $ParentId) Set Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineBasicInfo extends AbstractModel
{
    /**
     * @var string Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BaselineId;

    /**
     * @var integer Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentId;

    /**
     * @param string $Name Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BaselineId Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ParentId Parent ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
