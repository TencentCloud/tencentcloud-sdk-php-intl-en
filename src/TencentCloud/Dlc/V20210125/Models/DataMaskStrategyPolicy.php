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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Masking policy permission object.
 *
 * @method Policy getPolicyInfo() Obtain Masking permission object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyInfo(Policy $PolicyInfo) Set Masking permission object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataMaskStrategyId() Obtain Masking policy ID. specifies the ID of the data masking policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataMaskStrategyId(string $DataMaskStrategyId) Set Masking policy ID. specifies the ID of the data masking policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColumnType() Obtain Bound field type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumnType(string $ColumnType) Set Bound field type.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataMaskStrategyPolicy extends AbstractModel
{
    /**
     * @var Policy Masking permission object.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyInfo;

    /**
     * @var string Masking policy ID. specifies the ID of the data masking policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataMaskStrategyId;

    /**
     * @var string Bound field type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColumnType;

    /**
     * @param Policy $PolicyInfo Masking permission object.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataMaskStrategyId Masking policy ID. specifies the ID of the data masking policy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ColumnType Bound field type.
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
        if (array_key_exists("PolicyInfo",$param) and $param["PolicyInfo"] !== null) {
            $this->PolicyInfo = new Policy();
            $this->PolicyInfo->deserialize($param["PolicyInfo"]);
        }

        if (array_key_exists("DataMaskStrategyId",$param) and $param["DataMaskStrategyId"] !== null) {
            $this->DataMaskStrategyId = $param["DataMaskStrategyId"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }
    }
}
