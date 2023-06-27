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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySparkAppBatch request structure.
 *
 * @method array getSparkAppId() Obtain The list of the IDs of the Spark job tasks to be modified in batches.
 * @method void setSparkAppId(array $SparkAppId) Set The list of the IDs of the Spark job tasks to be modified in batches.
 * @method string getDataEngine() Obtain The engine ID.
 * @method void setDataEngine(string $DataEngine) Set The engine ID.
 * @method string getAppDriverSize() Obtain The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
 * @method void setAppDriverSize(string $AppDriverSize) Set The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
 * @method string getAppExecutorSize() Obtain The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
 * @method void setAppExecutorSize(string $AppExecutorSize) Set The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
 * @method integer getAppExecutorNums() Obtain The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
 * @method void setAppExecutorNums(integer $AppExecutorNums) Set The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
 * @method integer getAppExecutorMaxNumbers() Obtain The maximum executor count (in dynamic configuration scenarios). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
 * @method void setAppExecutorMaxNumbers(integer $AppExecutorMaxNumbers) Set The maximum executor count (in dynamic configuration scenarios). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
 * @method integer getIsInherit() Obtain Whether to inherit the task resource configuration from the cluster template. Valid values: `0` (default): No; `1`: Yes.
 * @method void setIsInherit(integer $IsInherit) Set Whether to inherit the task resource configuration from the cluster template. Valid values: `0` (default): No; `1`: Yes.
 */
class ModifySparkAppBatchRequest extends AbstractModel
{
    /**
     * @var array The list of the IDs of the Spark job tasks to be modified in batches.
     */
    public $SparkAppId;

    /**
     * @var string The engine ID.
     */
    public $DataEngine;

    /**
     * @var string The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
     */
    public $AppDriverSize;

    /**
     * @var string The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
     */
    public $AppExecutorSize;

    /**
     * @var integer The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
     */
    public $AppExecutorNums;

    /**
     * @var integer The maximum executor count (in dynamic configuration scenarios). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
     */
    public $AppExecutorMaxNumbers;

    /**
     * @var integer Whether to inherit the task resource configuration from the cluster template. Valid values: `0` (default): No; `1`: Yes.
     */
    public $IsInherit;

    /**
     * @param array $SparkAppId The list of the IDs of the Spark job tasks to be modified in batches.
     * @param string $DataEngine The engine ID.
     * @param string $AppDriverSize The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
     * @param string $AppExecutorSize The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
     * @param integer $AppExecutorNums The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
     * @param integer $AppExecutorMaxNumbers The maximum executor count (in dynamic configuration scenarios). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
     * @param integer $IsInherit Whether to inherit the task resource configuration from the cluster template. Valid values: `0` (default): No; `1`: Yes.
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
        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("AppDriverSize",$param) and $param["AppDriverSize"] !== null) {
            $this->AppDriverSize = $param["AppDriverSize"];
        }

        if (array_key_exists("AppExecutorSize",$param) and $param["AppExecutorSize"] !== null) {
            $this->AppExecutorSize = $param["AppExecutorSize"];
        }

        if (array_key_exists("AppExecutorNums",$param) and $param["AppExecutorNums"] !== null) {
            $this->AppExecutorNums = $param["AppExecutorNums"];
        }

        if (array_key_exists("AppExecutorMaxNumbers",$param) and $param["AppExecutorMaxNumbers"] !== null) {
            $this->AppExecutorMaxNumbers = $param["AppExecutorMaxNumbers"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }
    }
}
