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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled scaling policy configuration
 *
 * @method boolean getEnabled() Obtain Enable scheduled scaling
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Enable scheduled scaling
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParams() Obtain Scheduled scaling configuration parameter list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParams(array $Params) Set Scheduled scaling configuration parameter list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyId() Obtain Auto scaling policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(string $StrategyId) Set Auto scaling policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CloudNativeAPIGatewayStrategyCronScalerConfig extends AbstractModel
{
    /**
     * @var boolean Enable scheduled scaling
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Enabled;

    /**
     * @var array Scheduled scaling configuration parameter list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Params;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $CreateTime;

    /**
     * @var string Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ModifyTime;

    /**
     * @var string Auto scaling policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $StrategyId;

    /**
     * @param boolean $Enabled Enable scheduled scaling
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Params Scheduled scaling configuration parameter list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyId Auto scaling policy ID
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new CloudNativeAPIGatewayStrategyCronScalerConfigParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
